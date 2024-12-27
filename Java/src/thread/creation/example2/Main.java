package thread.creation.example2;

public class Main {

    private static class NewThread extends Thread {
        @Override
        public void run() {
            System.out.println("Executing thread:");
            System.out.printf("\t > Id = %d\n", this.threadId());
            System.out.printf("\t > Name = %s\n", this.getName());
            System.out.printf("\t > Priority = %d\n", this.getPriority());
        }
    }


    public static void main(String[] args) throws Exception {
        NewThread nt1 = new NewThread();
        nt1.setName("first_thread");
        nt1.setPriority(Thread.MAX_PRIORITY);

        NewThread nt2 = new NewThread();
        nt2.setName("second_thread");

        nt1.start();
        nt2.start();
    }

}
