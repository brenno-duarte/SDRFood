package com.sdrfood.api.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.sdrfood.api.entity.Produto;

@Repository
public interface ProdutoRepository extends JpaRepository<Produto, Integer>{

}
