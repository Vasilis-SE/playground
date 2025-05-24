package com.crypto.dao;

import jakarta.persistence.*;
import lombok.*;

import java.math.BigDecimal;


@Entity
@Builder
@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
@ToString
@Table(name = "crypto")
public class CryptoDao {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false, updatable = false)
    private int cryptoId;

    @Column(name = "name", nullable = false, length = 40)
    private String name;

    @Column(name = "symbol", nullable = false, length = 6)
    private String symbol;

    @Column(name = "price", nullable = false, precision = 16, scale = 5)
    private BigDecimal currentPrice;

}
