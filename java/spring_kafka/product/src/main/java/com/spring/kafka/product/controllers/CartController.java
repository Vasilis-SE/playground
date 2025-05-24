package com.spring.kafka.product.controllers;

import com.spring.kafka.product.dtos.ProductDto;
import com.spring.kafka.product.services.CartService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.*;

import java.util.List;

@RestController
@RequestMapping("/api/v1")
public class CartController {

	@Autowired
	private CartService cartService;


	@GetMapping("/cart/{userid}")
	@ResponseStatus(HttpStatus.OK)
	public List<ProductDto> getMyAddresses(@PathVariable int userid) {
		return cartService.fetchCartOfUser(userid);
	}

}
