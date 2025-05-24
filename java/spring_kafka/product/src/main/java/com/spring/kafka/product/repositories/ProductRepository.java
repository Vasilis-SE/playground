package com.spring.kafka.product.repositories;

import com.spring.kafka.product.daos.ProductDao;
import org.springframework.data.jpa.repository.JpaRepository;

public interface ProductRepository extends JpaRepository<ProductDao, Integer> {
}
