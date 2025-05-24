package com.crypto.controller;

import com.crypto.dto.CryptoDto;
import com.crypto.dto.UserCryptoPositionDto;
import com.crypto.service.CryptoService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.*;

import java.util.List;


@RestController
@RequestMapping("/api/v1")
public class CryptoController {

    @Autowired
    private CryptoService cryptoService;


    @GetMapping("/crypto/{symbol}")
    @ResponseStatus(HttpStatus.OK)
    public CryptoDto getUserById(@PathVariable String symbol) {
        return cryptoService.getCryptoBySymbol(symbol);
    }

    @GetMapping("/positions/{userId}")
    @ResponseStatus(HttpStatus.OK)
    public List<UserCryptoPositionDto> getUserCryptoPositions(@PathVariable Integer userId) {
        return cryptoService.getUserCryptoPositions(userId);
    }

}
