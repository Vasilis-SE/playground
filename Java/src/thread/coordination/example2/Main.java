package thread.coordination.example2;

import java.math.BigInteger;

public class Main {

    public static void main(String[] args) {
        Thread th = new Thread(new PowerComputationTask(new BigInteger("20000000"), new BigInteger("300000000000")));
        th.start();
        th.interrupt();
    }

    public static class PowerComputationTask implements Runnable {
        private BigInteger base;
        private BigInteger power;

        public PowerComputationTask(BigInteger b, BigInteger p) {
            this.base = b;
            this.power = p;
        }

        @Override
        public void run() {
            System.out.printf("%d^%d=%d", this.base, this.power, this.pow());
        }

        private BigInteger pow() {
            BigInteger result = BigInteger.ONE;

            for(BigInteger i = BigInteger.ZERO; i.compareTo(this.power) != 0; i = i.add(BigInteger.ONE)) {
                if(Thread.currentThread().isInterrupted()) {
                    System.out.println("Task has been interrupted...");
                    return BigInteger.ZERO;
                }

                result = result.multiply(this.base);
            }

            return result;
        }
    }

}
