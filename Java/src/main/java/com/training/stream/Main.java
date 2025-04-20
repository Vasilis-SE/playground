package com.training.stream;

import com.training.stream.helper.User;

import java.util.*;
import java.util.stream.Collectors;
import java.util.stream.Stream;

public class Main {

    private void processStreamOfStrings() {
        System.out.println("Simple stream of strings: ");
        List<String> listOfStrings = Arrays.asList("this", "This", "is", "a", "simple", "a", "message");

        List<String> sorted = new ArrayList<>();
        List<String> sortedDistinct = new ArrayList<>();
        List<String> sortedDistinctUppercase = new ArrayList<>();

        sortedDistinctUppercase = listOfStrings.stream()
                .sorted()
                .peek(s -> sorted.add(s))
                .distinct()
                .peek(s -> sortedDistinct.add(s))
                .map(String::toUpperCase)
                .toList();

        System.out.println("   > Sorted: " + sorted.stream()
                .map(Object::toString)
                .collect(Collectors.joining(" ")));

        System.out.println("   > Sorted + Distinct: " + sortedDistinct.stream()
                .map(Object::toString)
                .collect(Collectors.joining(" ")));

        System.out.println("   > Sorted + Distinct + Uppercase: " + sortedDistinctUppercase.stream()
                .map(Object::toString)
                .collect(Collectors.joining(" ")));

        System.out.println("----------");
    }

    private void processStreamOfIntegers() {
        System.out.println("Simple stream of integers: ");
        List<Integer> listOfIntegers = Arrays.asList(6,7,3,4,9,2,2,2,3,4,8,9,10,11);
        List<Integer> sortedResults = new ArrayList<>();

        List<Integer> results = listOfIntegers.stream()
                .sorted()
                .peek(num -> sortedResults.add(num))
                .distinct()
                .toList();

        System.out.println("   > Sorted: " + sortedResults.stream()
                .map(Object::toString)
                .collect(Collectors.joining(" ")));

        System.out.println("   > Sorted + Distinct: " + results.stream()
                .map(Object::toString)
                .collect(Collectors.joining(" ")));


        System.out.println("----------");
    }

    private void processStreamOfUsers() {
        System.out.println("Simple stream of users: ");
        List<User> listOfUsers = new ArrayList<>();
        listOfUsers.add(new User("Jonathan", "Mayers", 23, true));
        listOfUsers.add(new User("Agatha", "Lenon", 67, false));
        listOfUsers.add(new User("Emily", "Hailie", 43, false));

        System.out.println("   > Users under 50: " + listOfUsers.stream()
                .filter(user -> user.getAge() < 50)
                .map(user -> user.getFirstName() + " " + user.getLastName())
                .collect(Collectors.joining(", ")));

        System.out.println("   > Users that are women: " + listOfUsers.stream()
                .filter(user -> !user.getSex())
                .map(user -> user.getFirstName() + " " + user.getLastName())
                .collect(Collectors.joining(", ")));

        System.out.println("----------");
    }



    public static void main(String[] args) {
        Main main = new Main();
        main.processStreamOfIntegers();
        main.processStreamOfStrings();
        main.processStreamOfUsers();
    }

}
