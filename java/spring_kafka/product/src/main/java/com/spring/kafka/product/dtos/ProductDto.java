package com.spring.kafka.product.dtos;

import lombok.*;


@Builder
@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
public class ProductDto {
	private int id;
	private String name;
	private double price;
}
