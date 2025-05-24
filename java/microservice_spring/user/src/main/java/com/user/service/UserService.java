package com.user.service;

import com.user.dao.UserDao;
import com.user.dto.UserDto;
import com.user.repository.UserRepository;
import lombok.SneakyThrows;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.Optional;


@Service
public class UserService {

    @Autowired
    private UserRepository userRepository;

    @SneakyThrows
    public UserDto getUserById(int userId) {
        Optional<UserDao> user = userRepository.findById(userId);
        if(user.isEmpty()) throw new Exception("Could not find user with the given id...");

        return UserDto.builder()
                .userId(user.get().getUserId())
                .firstName(user.get().getFirstName())
                .lastName(user.get().getLastName())
                .build();
    }

}
