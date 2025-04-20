package com.training.thread.concurrency.example1;

public class Main {

    public static void main(String[] args) throws InterruptedException {
        InventoryCounter ic = new InventoryCounter();
        Thread incrementThread = new Thread(new ItemsIncrementThread(ic));
        Thread decrementThread = new Thread(new ItemsDecrementThread(ic));

        incrementThread.start();
        decrementThread.start();

        incrementThread.join();
        decrementThread.join();

        System.out.printf("Final item count is: %d \n", ic.getNumberOfItems());
    }

    private static class ItemsIncrementThread implements Runnable {
        InventoryCounter ic;

        public ItemsIncrementThread(InventoryCounter ic) {
            this.ic = ic;
        }

        @Override
        public void run() {
            for(int i=0; i<10000; i++)
                ic.incrementItems();
        }
    }

    private static class ItemsDecrementThread implements Runnable {
        InventoryCounter ic;

        public ItemsDecrementThread(InventoryCounter ic) {
            this.ic = ic;
        }

        @Override
        public void run() {
            for(int i=0; i<10000; i++)
                ic.decrementItems();
        }
    }

    private static class InventoryCounter {
        private int items;

        public InventoryCounter() {
            this.items = 0;
        }

        public synchronized void incrementItems() {
            this.items += 1;
        }

        public synchronized void decrementItems() {
            this.items -= 1;
        }

        public synchronized int getNumberOfItems() {
            return  this.items;
        }
    }
}
