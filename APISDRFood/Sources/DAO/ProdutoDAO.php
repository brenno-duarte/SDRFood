<?php

require_once './Sources/Model/Produto.php';
require_once './Sources/DB/DB.php';

class ProdutoDAO extends DB {

    public function getProdutos(){
        $sql = "SELECT * FROM tb_produto";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $res;
    }

    public function getOnlyProduto(int $id){
        $sql = "SELECT * FROM tb_produto WHERE idProd = $id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);

        return $res;
    }

    public function insertProduto(Produto $produto){
        $sql = "INSERT INTO tb_produto (nome,preco,categoria)
        VALUE (:nome,:preco,:categoria)";

        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':preco',$produto->getPreco());
        $stmt->bindValue(':categoria', $produto->getCategoria());
        $stmt->execute();
    }

    public function updateProduto(Produto $produto, int $id){
        $sql = "UPDATE tb_produto SET 
        nome = :nome,
        preco = :preco,
        categoria = :categoria
        WHERE idProd = $id";

        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $produto->getNome());
        $stmt->bindValue(':preco',$produto->getPreco());
        $stmt->bindValue(':categoria', $produto->getCategoria());
        $stmt->execute();
    }

    public function deleteProduto(int $id){
        $sql = "DELETE FROM tb_produto WHERE idProd = $id";

        $stmt = DB::prepare($sql);
        $stmt->execute();
    }
}