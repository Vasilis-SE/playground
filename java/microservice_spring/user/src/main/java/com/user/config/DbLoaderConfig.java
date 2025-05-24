package com.user.config;

import com.user.dao.UserDao;
import com.user.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.context.annotation.Profile;
import org.springframework.stereotype.Component;

@Component
@Profile("development")
public class DbLoaderConfig implements CommandLineRunner {

    @Autowired
    private UserRepository userRepository;

    private void loadUserData() {
        if(userRepository.count() > 0) return;

        userRepository.save(UserDao.builder().firstName("John").lastName("Doe").build());
        userRepository.save(UserDao.builder().firstName("Johnathan").lastName("Mayers").build());
        userRepository.save(UserDao.builder().firstName("Jessy").lastName("Wilds").build());
    }

    @Override
    public void run(String... args) throws Exception {
        loadUserData();
    }
}
