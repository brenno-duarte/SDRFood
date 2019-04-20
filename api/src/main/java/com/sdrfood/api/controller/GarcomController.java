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

import com.sdrfood.api.entity.Garcom;
import com.sdrfood.api.repository.GarcomRepository;

@RestController
@RequestMapping(value = "/api")
public class GarcomController {
	
	@Autowired
	GarcomRepository garcomRepo;
	
	@GetMapping(value = "/garcons")
	public List<Garcom> listar(){
		return garcomRepo.findAll();
	}
	
	@PostMapping(value = "/garcons")
	public Garcom salvar(@RequestBody Garcom garcom){
		return garcomRepo.save(garcom);
	}
	
	@PutMapping(value = "/garcons")
	public Garcom atualizar(@RequestBody Garcom garcom){
		return garcomRepo.save(garcom);
	}
	
	@DeleteMapping(value = "/garcons")
	public void deletar(@RequestBody Garcom garcom){
		garcomRepo.delete(garcom);
	}
}
