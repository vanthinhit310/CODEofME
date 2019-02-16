import java.util.Scanner;

public class ex_one {
    public static void main(String[] args) {
        int n, sum = 0, tempSort;
        Scanner scanner = new Scanner(System.in);
        do {
            System.out.println("Nhập vào số phần tử của mảng");
            n = scanner.nextInt();
        } while (n < 0);
        int array[] = new int[n];
        System.out.println("Nhập các phần tử cho mảng");
        for (int i = 0; i < n; i++) {
            System.out.println("Nhập phần tử thứ " + i + ":");
            array[i] = scanner.nextInt();
        }

        // In ra mảng
        System.out.println("\n Mảng ban đầu: ");
        for (int i = 0; i < n; i++) {
            System.out.println(array[i] + "\t");
        }
        //Tính tổng các phần tử có trong mảng
        for (int i = 0; i < n; i++) {
            sum += array[i];

        }
        System.out.println("Tổng các phần tử trong mảng là: " + sum);
        // Sắp xếp các phần tử theo thứ tự giảm giần
        for (int i = 0; i < n - 1; i++) {
            for (int j = i + 1; j <= n - 1; j++) {
                if (array[i] < array[j]) {
                    tempSort = array[j];
                    array[j] = array[i];
                    array[i] = tempSort;
                }
            }
        }
        System.out.println("\n Mảng sau khi sắp xếp: ");
        for (int i = 0; i < n; i++) {
            System.out.println(array[i] + "\t");
        }
        System.out.println("Phần tử nhỏ nhất trong mảng là : " + array[n - 1]);
    }
}
