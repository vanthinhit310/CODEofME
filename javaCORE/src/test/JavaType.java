package test;

import java.util.Random;

public class JavaType {
    public static void main(String[] args) {
        int a = 10;
        int b = 12;
        int c = 11;
        int d = 13;
        int[] arr = {a, b, c, d};
        Random r = new Random();
        int ran = r.nextInt(arr.length);
        System.out.println(arr[ran]);
    }
}
