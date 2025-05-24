package com.crypto.service;

import com.crypto.dao.CryptoDao;
import com.crypto.dao.PositionDao;
import com.crypto.dto.CryptoDto;
import com.crypto.dto.UserCryptoPositionDto;
import com.crypto.repository.CryptoRepository;
import com.crypto.repository.PositionRepository;
import lombok.SneakyThrows;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;


@Service
public class CryptoService {

    @Autowired
    private CryptoRepository cryptoRepository;

    @Autowired
    private PositionRepository positionRepository;

    @SneakyThrows
    public CryptoDto getCryptoBySymbol(String symbol) {
        Optional<CryptoDao> crypto = cryptoRepository.findBySymbol(symbol);
        if(crypto.isEmpty()) throw new Exception("Could not find crypto with the given symbol " + symbol);

        return CryptoDto.builder()
                .cryptoId(crypto.get().getCryptoId())
                .name(crypto.get().getName())
                .symbol(crypto.get().getSymbol())
                .currentPrice(crypto.get().getCurrentPrice())
                .build();
    }

    @SneakyThrows
    public List<UserCryptoPositionDto> getUserCryptoPositions(int userId) {
        Optional<List<PositionDao>> data = positionRepository.findByUserId(userId);
        if(data.isEmpty()) throw new Exception("Could not find any position in crypto for user " + userId);

        return data.get().stream()
                .map(positionDao -> UserCryptoPositionDto.builder()
                        .id(positionDao.getId())
                        .crypto(positionDao.getCrypto().getName())
                        .symbol(positionDao.getCrypto().getSymbol())
                        .position(positionDao.getPosition())
                        .value(positionDao.getCrypto().getCurrentPrice().multiply(positionDao.getPosition()))
                        .build())
                .toList();
    }

}
