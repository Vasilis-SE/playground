package com.example.protobuf;

import java.io.IOException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.example.protobuf.convert.ProtobufUtil;

@RestController
public class CourseController {
    @Autowired
    CourseRepository courseRepo;

    @RequestMapping("/courses/{id}")
    String customer(@PathVariable Integer id) throws IOException {

        try {
            return ProtobufUtil.toJson(courseRepo.getCourse(id));
        } catch (IOException e) {
            // TODO Auto-generated catch block
            e.printStackTrace();
        }

        return "";
    }
}
