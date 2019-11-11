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
	private String produto1;
	private String produto2;
	private String produto3;
	private String produto4;
	private String produto5;
	private String produto6;
	private String produto7;
	private String produto8;
	private String produto9;
	private String produto10;

	public Conta() {

	}

	public Conta(Integer id, Integer numero_mesa, String produto1, String produto2, String produto3, String produto4,
			String produto5, String produto6, String produto7, String produto8, String produto9, String produto10) {
		super();
		this.id = id;
		this.numero_mesa = numero_mesa;
		this.produto1 = produto1;
		this.produto2 = produto2;
		this.produto3 = produto3;
		this.produto4 = produto4;
		this.produto5 = produto5;
		this.produto6 = produto6;
		this.produto7 = produto7;
		this.produto8 = produto8;
		this.produto9 = produto9;
		this.produto10 = produto10;
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

	public String getProduto1() {
		return produto1;
	}

	public void setProduto1(String produto1) {
		this.produto1 = produto1;
	}

	public String getProduto2() {
		return produto2;
	}

	public void setProduto2(String produto2) {
		this.produto2 = produto2;
	}

	public String getProduto3() {
		return produto3;
	}

	public void setProduto3(String produto3) {
		this.produto3 = produto3;
	}

	public String getProduto4() {
		return produto4;
	}

	public void setProduto4(String produto4) {
		this.produto4 = produto4;
	}

	public String getProduto5() {
		return produto5;
	}

	public void setProduto5(String produto5) {
		this.produto5 = produto5;
	}

	public String getProduto6() {
		return produto6;
	}

	public void setProduto6(String produto6) {
		this.produto6 = produto6;
	}

	public String getProduto7() {
		return produto7;
	}

	public void setProduto7(String produto7) {
		this.produto7 = produto7;
	}

	public String getProduto8() {
		return produto8;
	}

	public void setProduto8(String produto8) {
		this.produto8 = produto8;
	}

	public String getProduto9() {
		return produto9;
	}

	public void setProduto9(String produto9) {
		this.produto9 = produto9;
	}

	public String getProduto10() {
		return produto10;
	}

	public void setProduto10(String produto10) {
		this.produto10 = produto10;
	}

}
