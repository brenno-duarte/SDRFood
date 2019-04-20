package com.sdrfood.api.entity;

import java.io.Serializable;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name = "tb_conta")
public class Conta implements Serializable {

	private static final long serialVersionUID = 1L;
	
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Integer id;
	private Integer numero_mesa;
	private String comida;
	private String bebida;
	
	public Conta() {
		
	}
	
	public Conta(Integer id, Integer numero_mesa, String comida, String bebida) {
		super();
		this.id = id;
		this.numero_mesa = numero_mesa;
		this.comida = comida;
		this.bebida = bebida;
	}

	public Integer getId() {
		return id;
	}

	public void setId(Integer id) {
		this.id = id;
	}

	public Integer getNumero_mesa() {
		return numero_mesa;
	}

	public void setNumero_mesa(Integer numero_mesa) {
		this.numero_mesa = numero_mesa;
	}

	public String getComida() {
		return comida;
	}

	public void setComida(String comida) {
		this.comida = comida;
	}

	public String getBebida() {
		return bebida;
	}

	public void setBebida(String bebida) {
		this.bebida = bebida;
	}

}
