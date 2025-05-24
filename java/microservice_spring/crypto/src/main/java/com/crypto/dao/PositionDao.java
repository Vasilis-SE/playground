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
@Table(name = "position")
public class PositionDao {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id", nullable = false, updatable = false)
    private long id;

    @Column(name = "user_id", nullable = false, updatable = false)
    private int userId;

    @ManyToOne
    @JoinColumn(name = "crypto_id", nullable = false, insertable = true)
    private CryptoDao crypto;

    @Column(name = "position", nullable = false, precision = 10, scale = 3)
    private BigDecimal position;
}
