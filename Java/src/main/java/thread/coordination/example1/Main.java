package thread.coordination.example1;

public class Main {

    public static void main(String[] args) {
        Thread th = new Thread(new BlockingTask());
        th.start();

        th.interrupt();
    }


    public static class BlockingTask implements Runnable {

        @Override
        public void run() {
            try {
                Thread.sleep(5000000);
            } catch (InterruptedException e) {
                System.out.println("Exiting blocking thread...");
            }
        }
    }

}
