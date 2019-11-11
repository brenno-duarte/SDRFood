<?php

require './Sources/DAO/ProdutoDAO.php';

class ProdutoController {

    public function listar($request, $response){
        $produto = new ProdutoDAO();
        $listar = $produto->getProdutos();
        $res = $response->withJson($listar);

        return $res;
    }

    public function listarUnico($request, $response){
        $id = $request->getAttribute('id');
        
        $produto = new ProdutoDAO();
        $listar = $produto->getOnlyProduto($id);
        $res = $response->withJson($listar);

        return $res;
    }

    public function inserir($request, $response){
        $nome = $request->getParam('nome');
        $preco = $request->getParam('preco');
        $categoria = $request->getParam('categoria');

        $produtoDAO = new ProdutoDAO();
        $produto = new Produto();

        $produto->setNome($nome);
        $produto->setPreco($preco);
        $produto->setCategoria($categoria);
        $produtoDAO->insertProduto($produto);

        $res = $response->withJson([
            'message' => 'Produto cadastrado com sucesso'
        ]);

        return $res;
    }

    public function atualizar($request, $response){
        $id = $request->getAttribute('id');
        $nome = $request->getParam('nome');
        $preco = $request->getParam('preco');
        $categoria = $request->getParam('categoria');

        $produtoDAO = new ProdutoDAO();
        $produto = new Produto();

        $produto->setNome($nome);
        $produto->setPreco($preco);
        $produto->setCategoria($categoria);
        $produtoDAO->updateProduto($produto, $id);

        $res = $response->withJson([
            'message' => 'Produto alterado com sucesso'
        ]);

        return $res;
    }

    public function deletar($request, $response){
        $id = $request->getAttribute('id');       
        $produtoDAO = new ProdutoDAO();
        $produtoDAO->deleteProduto($id);

        $res = $response->withJson([
            'message' => 'Produto deletado com sucesso'
        ]);

        return $res;
    }
}