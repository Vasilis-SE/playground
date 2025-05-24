package com.spring.kafka.user.repositories;

import com.spring.kafka.user.daos.UserDao;
import org.springframework.data.jpa.repository.JpaRepository;

public interface UserRepository extends JpaRepository<UserDao, Integer> {
}
