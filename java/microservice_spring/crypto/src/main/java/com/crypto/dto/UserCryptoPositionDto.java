package com.crypto.dto;


import lombok.*;

import java.math.BigDecimal;


@Builder
@ToString
@Getter
@Setter
@AllArgsConstructor
@NoArgsConstructor
public class UserCryptoPositionDto {
    private long id;
    private String crypto;
    private String symbol;
    private BigDecimal position;
    private BigDecimal value;
}
