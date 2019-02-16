import java.lang.reflect.Array;

public class bubbleSort {
    public int[] bubble_Sort(int[] arr) {
        int temp;
        for (int i = 0; i < arr.length; i++) {
            for (int j = arr.length - 1; j >= 1; j--) {
                if (arr[j] > arr[j - 1]) {
                    temp = arr[j - 1];
                    arr[j - 1] = arr[j];
                    arr[j] = temp;
                }
            }
        }
        return arr;
    }

    public static void main(String[] args) {
        bubbleSort bubbleSort = new bubbleSort();
        int[] a = {18, 251, 5165, 1, 56, 3, 156, 216, 19};
        int[] arr = bubbleSort.bubble_Sort(a);
        for (int i = 0; i < arr.length; i++) {
            System.out.println(arr[i] + "\t");
        }
    }
}