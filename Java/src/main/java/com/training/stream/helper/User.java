package com.training.stream.helper;

public class User {
    private String firstName;
    private String lastName;
    private int age;
    private boolean sex;

    public User(String fn, String ln, int a, boolean s) {
        firstName = fn;
        lastName = ln;
        age = a;
        sex = s;
    }

    public String getFirstName() {
        return firstName;
    }

    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public void setLastName(String lastName) {
        this.lastName = lastName;
    }

    public int getAge() {
        return age;
    }

    public void setAge(int age) {
        this.age = age;
    }

    public boolean getSex() {
        return sex;
    }

    public void setSex(boolean sex) {
        this.sex = sex;
    }
}
