package com.spring.kafka.product.services;

import com.spring.kafka.product.daos.CartDao;
import com.spring.kafka.product.dtos.ProductDto;
import com.spring.kafka.product.repositories.CartRepository;
import lombok.SneakyThrows;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class CartService {

	@Autowired
	private CartRepository cartRepository;

	@SneakyThrows
	public List<ProductDto> fetchCartOfUser(int userId) {
		Optional<List<CartDao>> data = cartRepository.findByUserId(userId);
		if(!data.isPresent()) throw new Exception("Could not find data...");

		return data.get().stream()
				.map(cartDao -> {
					return ProductDto.builder()
							.id(cartDao.getProduct().getId())
							.name(cartDao.getProduct().getName())
							.price(cartDao.getProduct().getPrice())
							.build();
				})
				.toList();
	}

}
