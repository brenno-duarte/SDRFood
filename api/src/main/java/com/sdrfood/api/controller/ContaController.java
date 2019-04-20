package com.sdrfood.api.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.sdrfood.api.entity.Conta;
import com.sdrfood.api.repository.ContaRepository;

@RestController
@RequestMapping(value = "/api")
public class ContaController {
	
	@Autowired
	private ContaRepository contaRepo;
	
	@GetMapping(value = "/contas")
	public List<Conta> lista(){
		return contaRepo.findAll();
	}
	
	@GetMapping(value = "/contas/{id}")
	public Optional<Conta> listarUnico(@PathVariable(value = "id") Integer id) {
		return contaRepo.findById(id);
	}
	
	@PostMapping(value = "/contas")
	public Conta salvar(@RequestBody Conta conta) {
		return contaRepo.save(conta);
	}
	
	@PutMapping(value = "/contas")
	public Conta alterar(@RequestBody Conta conta) {
		return contaRepo.save(conta);
	}
	
	@DeleteMapping(value = "/contas")
	public void deletar(@RequestBody Conta conta) {
		contaRepo.delete(conta);
	}
}
