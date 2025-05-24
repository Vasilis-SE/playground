package com.spring.kafka.consumer;

import org.springframework.kafka.annotation.KafkaListener;

public class MessageConsumer {

	@KafkaListener(topics = "my-first-topic", groupId = "my-group-id")
	public void listen(String message) {
		System.out.println("Received message: " + message);
	}
}
