<?php

require_once './Sources/Model/Garcom.php';
require_once './Sources/DB/DB.php';

class GarcomDAO extends DB {

    public function getGarcons(){
        $sql = "SELECT * FROM tb_garcom";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $res;
    }

    public function getOnlyGarcom(int $id){
        $sql = "SELECT * FROM tb_garcom WHERE idG = $id";
        $stmt = DB::prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_OBJ);

        return $res;
    }

    public function insertGarcom(Garcom $garcom){
        $sql = "INSERT INTO tb_garcom (nome,dt_nasc,fone,rua,bairro,num,cpf,escolaridade)
        VALUE (:nome,:dt_nasc,:fone,:rua,:bairro,:num,:cpf,:escolaridade)";

        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $garcom->getNome());
        $stmt->bindValue(':dt_nasc', $garcom->getDt_nasc());
        $stmt->bindValue(':fone', $garcom->getFone());
        $stmt->bindValue(':rua', $garcom->getRua());
        $stmt->bindValue(':bairro', $garcom->getBairro());
        $stmt->bindValue(':num', $garcom->getNum());
        $stmt->bindValue(':cpf', $garcom->getCpf());
        $stmt->bindValue(':escolaridade', $garcom->getEscolaridade());
        $stmt->execute();
    }

    public function updateGarcom(Garcom $garcom, int $id){
        $sql = "UPDATE tb_garcom SET 
        nome = :nome,
        dt_nasc = :dt_nasc,
        fone = :fone,
        rua = :rua,
        bairro = :bairro,
        num = :num,
        cpf = :cpf,
        escolaridade = :escolaridade 
        WHERE idG = $id";

        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $garcom->getNome());
        $stmt->bindValue(':dt_nasc', $garcom->getDt_nasc());
        $stmt->bindValue(':fone', $garcom->getFone());
        $stmt->bindValue(':rua', $garcom->getRua());
        $stmt->bindValue(':bairro', $garcom->getBairro());
        $stmt->bindValue(':num', $garcom->getNum());
        $stmt->bindValue(':cpf', $garcom->getCpf());
        $stmt->bindValue(':escolaridade', $garcom->getEscolaridade());
        $stmt->execute();
    }

    public function deleteGarcom(int $id){
        $sql = "DELETE FROM tb_garcom WHERE idG = $id";

        $stmt = DB::prepare($sql);
        $stmt->execute();
    }
}