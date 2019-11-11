<?php

require './Sources/DAO/GarcomDAO.php';

class GarcomController {

    public function listar($request, $response){
        $garcom = new GarcomDAO();
        $listar = $garcom->getGarcons();
        $res = $response->withJson($listar);

        return $res;
    }

    public function listarUnico($request, $response){
        $id = $request->getAttribute('id');
        
        $garcom = new GarcomDAO();
        $listar = $garcom->getOnlyGarcom($id);
        $res = $response->withJson($listar);

        return $res;
    }

    public function inserir($request, $response){
        $nome = $request->getParam('nome');
        $dt_nasc = $request->getParam('nasc');
        $fone = $request->getParam('fone');
        $rua = $request->getParam('rua');
        $bairro = $request->getParam('bairro');
        $num = $request->getParam('num');
        $cpf = $request->getParam('cpf');
        $escolaridade = $request->getParam('escolaridade');

        $garcomDAO = new GarcomDAO();
        $garcom = new Garcom();

        $garcom->setNome($nome);
        $garcom->setDt_nasc($dt_nasc);
        $garcom->setFone($fone);
        $garcom->setRua($rua);
        $garcom->setBairro($bairro);
        $garcom->setNum($num);
        $garcom->setCpf($cpf);
        $garcom->setEscolaridade($escolaridade);
        $garcomDAO->insertGarcom($garcom);

        $res = $response->withJson([
            'message' => 'Garcom cadastrado com sucesso'
        ]);

        return $res;
    }

    public function atualizar($request, $response){
        $id = $request->getAttribute('id');
        $nome = $request->getParam('nome');
        $dt_nasc = $request->getParam('nasc');
        $fone = $request->getParam('fone');
        $rua = $request->getParam('rua');
        $bairro = $request->getParam('bairro');
        $num = $request->getParam('num');
        $cpf = $request->getParam('cpf');
        $escolaridade = $request->getParam('escolaridade');

        $garcomDAO = new GarcomDAO();
        $garcom = new Garcom();

        $garcom->setNome($nome);
        $garcom->setDt_nasc($dt_nasc);
        $garcom->setFone($fone);
        $garcom->setRua($rua);
        $garcom->setBairro($bairro);
        $garcom->setNum($num);
        $garcom->setCpf($cpf);
        $garcom->setEscolaridade($escolaridade);
        $garcomDAO->updateGarcom($garcom, $id);

        $res = $response->withJson([
            'message' => 'Garcom alterado com sucesso'
        ]);

        return $res;
    }

    public function deletar($request, $response){
        $id = $request->getAttribute('id');       
        $garcomDAO = new GarcomDAO();
        $garcomDAO->deleteGarcom($id);

        $res = $response->withJson([
            'message' => 'Garcom deletado com sucesso'
        ]);

        return $res;
    }
}