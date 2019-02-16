import com.sun.org.apache.xpath.internal.functions.FuncStringLength;

import java.util.ArrayList;
import java.util.List;

public class Person {
    private String name;
    private int age;

    public Person(String name, int age) {
        this.name = name;
        this.age = age;
    }

    public String getName() {
        return name;
    }

    public int getAge() {
        return age;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public static List<Person> getListPerson() {
        List<Person> listPerson = new ArrayList<>();
        listPerson.add(new Person("Anh", 22));
        listPerson.add(new Person("Su", 22));
        listPerson.add(new Person("Faker", 22));
        listPerson.add(new Person("Zark", 27));
        listPerson.add(new Person("Thinh", 25));
        listPerson.add(new Person("Hien", 17));
        listPerson.add(new Person("Thinh", 18));
        listPerson.add(new Person("Zark", 10));
        return listPerson;
    }

    @Override
    public String toString() {
        return "[name=" + name + " age=" + age + "]";
    }

    // sắp xếp theo tên
    public static void sortPerson(List<Person> people) {
        people.sort((o1, o2) -> o1.getName().compareTo(o2.getName()));
        System.out.println(people);
    }

    // sắp xếp theo tên và tuôi
    public static void sortPersonByNameAndAge(List<Person> people) {
        people.sort((o1, o2) -> {
            if (o1.getName().equals(o2.getName())) {
                return o1.getAge() - o2.getAge();
            }
            return o1.getName().compareTo(o2.getName());
        });
        people.forEach(person -> System.out.println(person));
    }
    // trả về giá trị số kí tự của một chuỗi
    public static int getLength(String s){
        return s.length();
    }


}
