package com.spring.kafka.product.repositories;

import com.spring.kafka.product.daos.CartDao;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;
import java.util.Optional;

public interface CartRepository extends JpaRepository<CartDao, Integer> {
	public Optional<List<CartDao>> findByUserId(int userId);
}
