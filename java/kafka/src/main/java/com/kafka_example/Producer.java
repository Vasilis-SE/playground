package com.kafka_example;

import org.apache.kafka.clients.producer.ProducerConfig;
import org.apache.kafka.common.serialization.StringSerializer;
import java.util.Properties;
import org.apache.kafka.clients.producer.*;

public class Producer {

	public static void main(String[] args) {
		System.out.println("Starting kafka producer...");
		System.out.println(System.getProperty("java.class.path").replace(":", "\n"));
		String bootstrapServers = "host.docker.internal:9092";

		// create Producer properties
		Properties properties = new Properties();
		properties.setProperty(ProducerConfig.BOOTSTRAP_SERVERS_CONFIG, bootstrapServers);
		properties.setProperty(ProducerConfig.KEY_SERIALIZER_CLASS_CONFIG, StringSerializer.class.getName());
		properties.setProperty(ProducerConfig.VALUE_SERIALIZER_CLASS_CONFIG, StringSerializer.class.getName());

		// create the producer
		KafkaProducer<String, String> producer = new KafkaProducer<>(properties);

		// create a producer record
		ProducerRecord<String, String> producerRecord = new ProducerRecord<>("my-first-topic", "hello world");

		// send data - asynchronous
		producer.send(producerRecord);

		// flush data - synchronous
		producer.flush();
		// flush and close producer
		producer.close();
	}
}
