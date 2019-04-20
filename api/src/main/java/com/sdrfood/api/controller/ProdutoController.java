package com.sdrfood.api.controller;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.sdrfood.api.entity.Produto;
import com.sdrfood.api.repository.ProdutoRepository;

@RestController
@RequestMapping(value = "/api")
public class ProdutoController {
	
	@Autowired
	ProdutoRepository produtoRepo;
	
	@GetMapping(value = "/produtos")
	public List<Produto> listar(){
		return produtoRepo.findAll();
	}
	
	@PostMapping(value = "/produtos")
	public Produto salvar(@RequestBody Produto produto) {
		return produtoRepo.save(produto);
	}
	
	@PutMapping(value = "/produtos")
	public Produto alterar(@RequestBody Produto produto) {
		return produtoRepo.save(produto);
	}
	
	@DeleteMapping(value = "/produtos")
	public void deletar(@RequestBody Produto produto) {
		produtoRepo.delete(produto);
	}
}
