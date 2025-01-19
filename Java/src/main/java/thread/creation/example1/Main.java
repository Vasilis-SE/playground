package thread.creation.example1;

public class Main {

    public static void main(String[] args) throws Exception {
        Thread thread = new Thread(new Runnable() {

            @Override
            public void run() {
                System.out.println("Executing thread:");
                System.out.printf("\t > Id = %d\n", Thread.currentThread().threadId());
                System.out.printf("\t > Name = %s\n", Thread.currentThread().getName());
                System.out.printf("\t > Priority = %d\n", Thread.currentThread().getPriority());

                throw new RuntimeException("This is an unhandled exception...");
            }
        });

        thread.setUncaughtExceptionHandler(new Thread.UncaughtExceptionHandler() {
            @Override
            public void uncaughtException(Thread t, Throwable e) {
                System.out.printf("Uncaught exception %s on thread %s. Reason: %s",
                        e.getClass().getName(), t.getName(), e.getMessage());
            }
        });

        thread.setName("first_thread");
        thread.setPriority(Thread.MAX_PRIORITY);

        System.out.println("Before thread start");
        thread.start();
        System.out.println("After thread start");
    }

}
