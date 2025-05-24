package com.spring.kafka.user.services;

import org.apache.kafka.clients.consumer.ConsumerRecord;
import org.springframework.kafka.annotation.KafkaListener;
import org.springframework.kafka.core.KafkaTemplate;
import org.springframework.stereotype.Service;

import java.util.Map;
import java.util.UUID;
import java.util.concurrent.CompletableFuture;
import java.util.concurrent.ConcurrentHashMap;


@Service
public class KafkaRequestReplyService {
	private final KafkaTemplate<String, String> kafkaTemplate;
	private final Map<String, CompletableFuture<String>> pendingRequests = new ConcurrentHashMap<>();

	public KafkaRequestReplyService(KafkaTemplate<String, String> kafkaTemplate) {
		this.kafkaTemplate = kafkaTemplate;
	}

	public CompletableFuture<String> sendRequest(String topic, String request) {
		String correlationId = UUID.randomUUID().toString();
		CompletableFuture<String> future = new CompletableFuture<>();
		pendingRequests.put(correlationId, future);

		// Send request with correlation ID as a header
		kafkaTemplate.send(topic, request)
				.addCallback(
						success -> System.out.println("Request sent successfully"),
						failure -> future.completeExceptionally(failure)
				);

		return future;
	}

	@KafkaListener(topics = "user-reply-listener", groupId = "request-reply-group")
	public void listenForResponse(ConsumerRecord<String, String> record) {
		String correlationId = record.headers().lastHeader("correlationId").value().toString();
		String response = record.value();

		CompletableFuture<String> future = pendingRequests.remove(correlationId);

		if (future != null) {
			future.complete(response);
		}
	}

}
