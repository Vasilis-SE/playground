package com.spring.kafka.user.dtos;

import com.fasterxml.jackson.annotation.JsonIgnore;
import lombok.*;


@Getter
@Setter
@Builder
@AllArgsConstructor
@NoArgsConstructor
public class UserDto {
	private int id;
	private String username;

	@JsonIgnore
	private String password;

	private int isBlocked;
}
