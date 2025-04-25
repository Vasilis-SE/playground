package com.example.protobuf;

import java.util.Map;

import com.example.protobuf.models.Course;

public class CourseRepository {
    Map<Integer, Course> courses;

    public CourseRepository(Map<Integer, Course> courses) {
        this.courses = courses;
    }

    public Course getCourse(int id) {
        return courses.get(id);
    }
}