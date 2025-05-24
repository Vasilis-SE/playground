package com.crypto.config;

import com.crypto.dao.CryptoDao;
import com.crypto.dao.PositionDao;
import com.crypto.repository.CryptoRepository;
import com.crypto.repository.PositionRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.context.annotation.Profile;
import org.springframework.stereotype.Component;

import java.math.BigDecimal;
import java.util.*;


@Component
@Profile("development")
public class DbLoaderConfig implements CommandLineRunner {

    @Autowired
    private CryptoRepository cryptoRepository;

    @Autowired
    private PositionRepository positionRepository;

    private List<CryptoDao> cryptoData;
    private List<PositionDao> positionData;

    public DbLoaderConfig() {
        cryptoData = new ArrayList<>();
        positionData = new ArrayList<>();
    }

    private void loadCryptoData() {
        cryptoData.add(CryptoDao.builder()
                .name("Bitcoin")
                .symbol("BTC")
                .currentPrice(new BigDecimal(103240.62))
                .build());

        cryptoData.add(CryptoDao.builder()
                .name("Etherium")
                .symbol("ETH")
                .currentPrice(new BigDecimal(2481.76))
                .build());

        cryptoData.add(CryptoDao.builder()
                .name("XRP")
                .symbol("XRP")
                .currentPrice(new BigDecimal(2.53))
                .build());

        if(cryptoRepository.count() == cryptoData.size()) {
            cryptoData = cryptoRepository.findAll();
            return;
        }

        for (int i = 0; i < cryptoData.size(); i++)
            cryptoData.set(i, cryptoRepository.save(cryptoData.get(i)));
    }

    private void loadPositionData() {
        positionData.add(PositionDao.builder()
                .userId(1)
                .crypto(cryptoData.get(0))
                .position(new BigDecimal(14.53))
                .build());

        positionData.add(PositionDao.builder()
                .userId(1)
                .crypto(cryptoData.get(2))
                .position(new BigDecimal(53232.521))
                .build());

        positionData.add(PositionDao.builder()
                .userId(2)
                .crypto(cryptoData.get(1))
                .position(new BigDecimal(3.667))
                .build());

        if (positionRepository.count() == positionData.size()) {
            positionData = positionRepository.findAll();
            return;
        }

        for (int i = 0; i < positionData.size(); i++)
            positionData.set(i, positionRepository.save(positionData.get(i)));
    }

    @Override
    public void run(String... args) throws Exception {
        loadCryptoData();
        loadPositionData();
    }
}
