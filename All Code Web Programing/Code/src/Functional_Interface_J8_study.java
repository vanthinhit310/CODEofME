import java.lang.reflect.Array;
import java.util.*;
import java.util.function.Consumer;
import java.util.function.Function;
import java.util.function.Predicate;
import java.util.stream.Collectors;
import java.util.stream.IntStream;
import java.util.stream.Stream;

public class Functional_Interface_J8_study {
    public static void testConsumer(List<String> list) {
        list.forEach(new Consumer<String>() {
            @Override
            public void accept(String s) {
                System.out.println(s);
            }
        });
        /**
         * Cú pháp lambda in ra tất cả giá trị của một list java 8
         * consumer thường được dùng với list, stream để xử lý với các phần tử bên trong.
         * */
        System.out.println("----------------------");
        list.forEach(s -> System.out.println(s));
    }

    public static void testPredicate(List<Integer> list) {
        /**
         * predicate thường được dùng với list, stream để kiểm tra từng phần tử lúc xóa, lọc…
         *lệnh removeIf sẽ thực hiện duyệt từng phần tử,
         *nếu method test của Predicate trả về true thì sẽ remove phần tử đó khỏi list
         * */
        list.removeIf(new Predicate<Integer>() {
            @Override
            public boolean test(Integer t) {
                return t < 0;
            }
        });
        list.forEach(t -> System.out.println(t));
        System.out.println("-------------------");
        /**
         * Sử dụng Predicate với cú pháp Lambda Expression
         * loại bỏ các phần tử lớn hơn 1
         * */

        list.removeIf(t -> t > 1);
        list.forEach(t -> System.out.println(t));
    }

    /**
     * Function thường dùng với Stream khi muốn thay đổi giá trị cho từng phần tử trong stream.
     * lưu ý là stream ko thể dùng lại nên phải khởi tạo lại
     */
    public static void testFunction(List<String> list) {
        // khởi tạo stream
        Stream<String> stream = list.stream();
        stream.map(new Function<String, String>() {
            @Override
            public String apply(String s) {
                return s.toUpperCase();
            }
        }).forEach(s -> System.out.println(s));
        System.out.println("-----------------");

        // Function với cú pháp Lambda Expression
        list.stream().map(s -> s.toLowerCase()).forEach(s -> System.out.println(s));

    }

    // Chuyển một list từ kiểu dữ liệu Int về kiểu Double.
    public static void intToDouble(List<Integer> list) {
        list.stream().map(p -> p.doubleValue()).forEach(p -> System.out.println(p));
    }
    /**
     *Sử dụng Supplier với cú pháp Lambda Expression:
     * tạo ra 1 list gồm 10 số 1 cách random:
     * */
    public static void testSupplier(){
        Random r = new Random();
        Stream.generate(()->r.nextInt(100)).limit(10).forEach(p -> System.out.print(p+" - "));
    }
    public  static void testStreamPrimitives(int a, int b){
        IntStream intStream = IntStream.range(a, b);
        System.out.println(intStream);
    }
    /**
     *Chúng ta có thể dùng stream collect() để tạo 1 List, Set, Map từ stream.
     * */
    public static void testStremToList(){
        Stream<String> stream = Stream.of("Thinh","Hien","Hau","Tan");
        List<String> stringList = stream.collect(Collectors.toList());
        System.out.println(stringList);
    }
    public static void testStreamToMap(){
        Stream<Integer> stream = Stream.of(2,4,6,8);
        Map<Integer,Integer> map = stream.collect(Collectors.toMap(i->i+1, i->i+5));
        System.out.println(map);
    }
    public static void testStreamToArray(){
        Stream<Integer> stream = Stream.of(2,4,6,8);
        Integer[] list = stream.toArray(Integer[]::new);
        System.out.println(Arrays.toString(list));
    }
    /**
     * Stream.filter() Trả về 1 stream với các phần tử khớp với Predicate
     * */
    public static void testStreamFillter(){
        Predicate<Integer> predicate = a -> a%3 ==0;
        List<Integer> list= Arrays.asList(1,3,5,7,9,11,15,20,27);
        System.out.println("Stream Fillter");
        list.stream().filter(predicate).forEach(e-> System.out.print(e+ " "));
    }
    public static void soNguyenTo(){
        Predicate<Integer> p = a-> (a%2 ==0);
        List<Integer> list = Arrays.asList(1,3,5,7,9,11,15,20,27,11,13);
        System.out.println("Các số chia hết cho 2 là");
        list.stream().filter(p).forEach(a-> System.out.println(a +" "));
    }
    public static void findDuplicate(){
        Predicate<String> p = a->a.contains("a");
        List<String> list = Arrays.asList("a","b","c","d","a","e","f","g","e","h","d","a");
        System.out.println("Tìm các phần tử giống");
        list.stream().filter(p).forEach(e-> System.out.print(e+" "));
    }

    public static void main(String[] args) {
        List<String> list1 = Arrays.asList("Thinh", "Hien", "Hau", "Tan", "Mai Thanh");

        List<Integer> list2 = new ArrayList<>();
        list2.add(-1);
        list2.add(-2);
        list2.add(-3);
        list2.add(-4);
        list2.add(0);
        list2.add(1);
        list2.add(2);
        list2.add(3);
        list2.add(4);
        list2.add(5);

        List<Integer> list3 = new ArrayList<>();
        list3.add(1);
        list3.add(19);
        list3.add(15);
        list3.add(10);


//        testConsumer(list1);
//        testPredicate(list2);
//        testFunction(list1);
//        intToDouble(list3);
        testSupplier();

    }

}
