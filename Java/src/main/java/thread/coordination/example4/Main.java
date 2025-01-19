package thread.coordination.example4;

import java.math.BigInteger;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Main {

    public static void main(String[] args) {
        List<Long> toCalc = Arrays.asList(3L, 10L, 23L, 423443323L, 46L, 173L);
        List<FactorialThread> listOfFactorialThreads = new ArrayList<>();

        for (Long num : toCalc) {
            FactorialThread newThread = new FactorialThread(num);
            newThread.setName("factorial_thread_of_" + num.toString());
            listOfFactorialThreads.add(newThread);
        }

        for (FactorialThread thread : listOfFactorialThreads) {
            thread.start();

            try {
                thread.join(3000);
            } catch (InterruptedException e) {
                System.out.printf("Thread %s was interrupted after exceeding X amount of ms...\n", thread.getName());
                continue;
            }
        }

        for (FactorialThread thread : listOfFactorialThreads) {
            if (!thread.getIsFinished()) {
                System.out.printf("Thread %s is not finished yet ...\n", thread.getName());
                continue;
            }

            System.out.printf("Thread %s finished and the factorial of %d is %d \n", thread.getName(), thread.getInput(), thread.getResult());
        }
    }

    public static class FactorialThread extends Thread {
        private final Long input;
        private BigInteger result;
        private Boolean isFinished;

        public FactorialThread(long i) {
            this.input = i;
            this.result = BigInteger.ONE;
            this.isFinished = false;
        }

        @Override
        public void run() {
            this.factorial();
            this.isFinished = true;
        }

        public void factorial() {
            for (long i = 1; i <= this.input; i++)
                this.result = this.result.multiply(new BigInteger(Long.toString(i)));
        }

        public boolean getIsFinished() {
            return this.isFinished;
        }

        public BigInteger getResult() {
            return this.result;
        }

        public Long getInput() {
            return this.input;
        }

    }

}
