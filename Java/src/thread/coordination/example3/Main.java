package thread.coordination.example3;

import java.io.IOException;

public class Main {

    public static void main(String[] args) {
        Thread inputThread = new Thread(new WaitingForUserInput());
        inputThread.setName("InputWaitingThread");

        Thread saveProgressThread = new Thread(new SaveProgress());
        saveProgressThread.setName("SaveProgressThread");
        saveProgressThread.setDaemon(true);

        inputThread.start();
        saveProgressThread.start();
    }

    private static class SaveProgress implements Runnable {
        private Integer interval = 5000;

        @Override
        public void run() {
            while (true) {
                try {
                    Thread.sleep(this.interval);
                    System.out.println("Progress was saved...");
                } catch (InterruptedException e) {
                    System.out.println("An exception was caught " + e);
                }
            }
        }
    }

    private static class WaitingForUserInput implements Runnable {

        @Override
        public void run() {
            try {
                while (true) {
                    char input = (char) System.in.read();
                    if (input == 'q') {
                        return;
                    }
                }
            } catch (IOException e) {
                System.out.println("An exception was caught " + e);
            }
        }

    }


}
