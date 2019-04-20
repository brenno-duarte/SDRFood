package com.sdrfood.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.sdrfood.api.entity.Gerente;

@Repository
public interface GerenteRepository extends JpaRepository<Gerente, Integer>{

}
