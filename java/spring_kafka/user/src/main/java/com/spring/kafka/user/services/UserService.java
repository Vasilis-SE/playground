package com.spring.kafka.user.services;

import com.spring.kafka.user.daos.UserDao;
import com.spring.kafka.user.dtos.UserCartRequestDto;
import com.spring.kafka.user.dtos.UserDto;
import com.spring.kafka.user.producers.MessageProducer;
import com.spring.kafka.user.repositories.UserRepository;
import lombok.SneakyThrows;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.Optional;

@Service
public class UserService {

	@Autowired
	private UserRepository userRepository;

	@Autowired
	private MessageProducer messageProducer;

	@SneakyThrows
	private UserDto findUserById(int userid) {
		Optional<UserDao> user = userRepository.findById(userid);
		if(!user.isPresent()) throw new Exception("Could not find user...");

		return UserDto.builder()
				.id(user.get().getId())
				.username(user.get().getUsername())
				.password(user.get().getPassword())
				.isBlocked(user.get().getIsBlocked())
				.build();
	}

	public UserDto getUserById(int userid) {
		return findUserById(userid);
	}

	@SneakyThrows
	public void getUserWithCart(UserCartRequestDto userCartRequestDto) {
		UserDto user = findUserById(userCartRequestDto.getUserid());
		messageProducer.sendMessage("fetch-user-cart", userCartRequestDto);
	}

}
