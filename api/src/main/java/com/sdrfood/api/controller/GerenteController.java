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

import com.sdrfood.api.entity.Gerente;
import com.sdrfood.api.repository.GerenteRepository;

@RestController
@RequestMapping(value = "/api")
public class GerenteController {
	
	@Autowired
	GerenteRepository gerenteRepo;
	
	@GetMapping(value = "/gerentes")
	public List<Gerente> listar(){
		return gerenteRepo.findAll();
	}
	
	@PostMapping(value = "/gerentes")
	public Gerente salvar(@RequestBody Gerente gerente) {
		return gerenteRepo.save(gerente);
	}
	
	@PutMapping(value = "/gerentes")
	public Gerente alterar(@RequestBody Gerente gerente) {
		return gerenteRepo.save(gerente);
	}
	
	@DeleteMapping(value = "/gerentes")
	public void deletar(@RequestBody Gerente gerente) {
		gerenteRepo.delete(gerente);
	}
}
