package com.crypto.dto;

import lombok.*;

import java.math.BigDecimal;


@Builder
@ToString
@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
public class CryptoDto {
    private int cryptoId;
    private String name;
    private String symbol;
    private BigDecimal currentPrice;
}
