import java.util.List;

public class Test {
    public static void main(String[] args) {
        /*List<Person> people = Person.getListPerson();
        System.out.println(people);
        System.out.println("------------------");
        System.out.println("Sort by name:");
        Person.sortPerson(people);
        System.out.println("------------------");
        System.out.println("Sort by name and age:");
        Person.sortPersonByNameAndAge(people);*/

        String s = "Lê Văn Thịnh";
        System.out.println(Person.getLength(s));

        System.out.println("Dùng Stream để tạo một list");
        Functional_Interface_J8_study.testStremToList();

        System.out.println("Dùng Stream để tạo một map chứa key và value theo ý");
        Functional_Interface_J8_study.testStreamToMap();

        System.out.println("Dùng stream để tạo một mảng");
        Functional_Interface_J8_study.testStreamToArray();

        System.out.println("Công dụng của stream fillter");
        Functional_Interface_J8_study.testStreamFillter();

        Functional_Interface_J8_study.soNguyenTo();


        Functional_Interface_J8_study.findDuplicate();

    }
}
