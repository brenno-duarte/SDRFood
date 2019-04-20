package com.sdrfood.api.repository;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.sdrfood.api.entity.Conta;

@Repository
public interface ContaRepository extends JpaRepository<Conta, Integer>{

}
