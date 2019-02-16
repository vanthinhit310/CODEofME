package generic;

import java.lang.reflect.ParameterizedType;
import java.lang.reflect.Type;

public class CaclDemo<T extends Number> {

    private T number1, number2;
    T type;

    public Class getGenericType() {
        return type.getClass();
    }

    public CaclDemo(T number1, T number2) {
        this.number1 = number1;
        this.number2 = number2;
    }

    protected String getGenericName() {
        Type mySuperclass = getClass().getGenericSuperclass();
        Type tType = ((ParameterizedType)mySuperclass).getActualTypeArguments()[0];
        return tType.getTypeName();
    }

    public <T extends Number> T add() {
        if (getGenericType().getName().equals("Integer")) {
            return (T) new Integer(number1.intValue() + number2.intValue());
        }
        return (T) new Integer(0);
    }

    public static void main(String[] args) {
        CaclDemo<Integer> demo = new CaclDemo<>(1, 2);
        System.out.println(demo.getGenericName());
    }

}
