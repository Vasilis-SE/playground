package com.spring.kafka.user.producers;

import com.fasterxml.jackson.core.JsonProcessingException;
import com.fasterxml.jackson.databind.ObjectMapper;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.kafka.core.KafkaTemplate;
import org.springframework.stereotype.Component;


@Component
public class MessageProducer {

	@Autowired
	private KafkaTemplate<String, String> kafkaTemplate;

	private final ObjectMapper objectMapper = new ObjectMapper();

	public void sendMessage(String topic, Object message) {
		try {
			String json = objectMapper.writeValueAsString(message);
			kafkaTemplate.send(topic, json);
		} catch (JsonProcessingException e) {
			e.printStackTrace();
		}
	}
}
