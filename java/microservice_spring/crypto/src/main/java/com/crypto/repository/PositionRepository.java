package com.crypto.repository;

import com.crypto.dao.PositionDao;
import org.springframework.context.annotation.Profile;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;
import java.util.Optional;

public interface PositionRepository extends JpaRepository<PositionDao, Long> {
    Optional<List<PositionDao>> findByUserId(int userid);

    @Profile("development")
    @Modifying
    @Transactional
    @Query(value = "TRUNCATE TABLE position", nativeQuery = true)
    void truncateTable();

}
