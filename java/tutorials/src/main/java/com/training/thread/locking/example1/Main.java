package com.training.thread.locking.example1;

import java.util.Random;

/**
 * This example shows a typical deadlock scenario.
 */
public class Main {

    public static void main(String[] args) {
        Intersection intersection = new Intersection();

        Thread trainAThread = new Thread(new TrainA(intersection));
        Thread trainBThread = new Thread(new TrainB(intersection));

        trainAThread.start();
        trainBThread.start();
    }

    private static class TrainA implements Runnable {
        private Intersection intersection;
        private final Random random = new Random();

        public TrainA(Intersection inter) {
            intersection = inter;
        }

        @Override
        public void run() {
            while(true) {
                long sleepingTime = random.nextInt(5);
                try {
                    Thread.sleep(sleepingTime);
                } catch (InterruptedException e) {
                }

                intersection.takeRoadA();
            }
        }
    }

    private static class TrainB implements Runnable {
        private Intersection intersection;
        private final Random random = new Random();

        public TrainB(Intersection inter) {
            intersection = inter;
        }

        @Override
        public void run() {
            while(true) {
                long sleepingTime = random.nextInt(5);
                try {
                    Thread.sleep(sleepingTime);
                } catch (InterruptedException e) {
                }

                intersection.takeRoadB();
            }
        }
    }

    private static class Intersection {
        private final Object roadA = new Object();
        private final Object roadB = new Object();

        public void takeRoadA() {
            synchronized (roadA) {
                System.out.printf("Road A is locked by thread %s \n", Thread.currentThread().getName());

                synchronized (roadB) {
                    System.out.println("Train is passing through road A");

                    try {
                        Thread.sleep(1);
                    } catch (InterruptedException e) {
                    }
                }
            }
        }

        public void takeRoadB() {
            synchronized (roadB) {
                System.out.printf("Road B is locked by thread %s \n", Thread.currentThread().getName());

                synchronized (roadA) {
                    System.out.println("Train is passing through road B");

                    try {
                        Thread.sleep(1);
                    } catch (InterruptedException e) {
                    }
                }
            }
        }
    }

}
