package com.crypto.repository;

import com.crypto.dao.CryptoDao;
import org.springframework.context.annotation.Profile;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.transaction.annotation.Transactional;

import java.util.Optional;

public interface CryptoRepository extends JpaRepository<CryptoDao, Integer> {
    Optional<CryptoDao> findBySymbol(String symbol);

    @Profile("development")
    @Modifying
    @Transactional
    @Query(value = "TRUNCATE TABLE crypto", nativeQuery = true)
    void truncateTable();

}
