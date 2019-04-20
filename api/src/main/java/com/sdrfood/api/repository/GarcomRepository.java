package com.sdrfood.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.sdrfood.api.entity.Garcom;

@Repository
public interface GarcomRepository extends JpaRepository<Garcom, Integer>{

}
