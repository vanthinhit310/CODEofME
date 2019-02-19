package OOP.Inheritance;

import java.util.Calendar;

public class Person {
    public String name;
    public String code;
    public int birthDay;
    public String gender;

    public Person() {
        this.name = name;
        this.code = code;
        this.birthDay = birthDay;
        this.gender = gender;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getCode() {
        return code;
    }

    public void setCode(String code) {
        this.code = code;
    }

    public int getBirthDay() {
        return birthDay;
    }

    public void setBirthDay(int birthDay) {
        this.birthDay = birthDay;
    }

    public String getGender() {
        return gender;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }
    public int getAge(int birthDay){
        Calendar now = Calendar.getInstance();
        return (now.get(Calendar.YEAR) - birthDay);
    }

    public void showInfo() {
        System.out.println("Thông tin của Person:");
        System.out.println("Name: " + '\t' + name);
        System.out.println("Code: " + '\t' + code);
        System.out.println("Birthday: " + '\t' + birthDay);
        System.out.println("Gender: " + '\t' + gender);
        System.out.println("Age: " + '\t' + getAge(birthDay));

    }
}
