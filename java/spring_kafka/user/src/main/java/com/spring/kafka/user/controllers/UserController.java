package com.spring.kafka.user.controllers;

import com.spring.kafka.user.dtos.UserDto;
import com.spring.kafka.user.producers.MessageProducer;
import com.spring.kafka.user.services.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.*;


@RestController
@RequestMapping("/api/v1")
public class UserController {

	@Autowired
	private UserService userService;

	@Autowired
	private MessageProducer messageProducer;

	@GetMapping("/user/{userid}")
	@ResponseStatus(HttpStatus.OK)
	public UserDto getUserById(@PathVariable int userid) {
		return userService.getUserById(userid);
	}


}
