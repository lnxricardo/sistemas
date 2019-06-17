<?php

class Dba{
    private $pdo;

    public function __construct(){
        $conn = [
            'dbname' => 'db_inventario',
            'dbhost' => 'localhost',
            'dbuser' => 'ricardo',
            'dbpass' => '123'
        ];

        try {
            $this->pdo = new PDO("mysql:dbname=".$conn['dbname'].";host=".$conn['dbhost'], $conn['dbuser'], $conn['dbpass']);
           
        } catch (PDOExpetion $e) {

            echo 'Erro: '.$e->getMessage();
        }
    }

    public function addEmpresa($empresa, $contato, $telefone){
        $sql = $this->pdo->prepare("INSERT INTO clientes (empresa, contato, telefone) VALUES (:empresa, :contato, :telefone)");
        $sql->bindValue(':empresa', $empresa);
        $sql->bindValue(':contato', $contato);
        $sql->bindValue(':telefone', $telefone);
        $sql->execute();
        return true; 
        exit;   
    }

       public function addCpu($marca, $modelo){
        $sql = $this->pdo->prepare("INSERT INTO processador (marca, modelo) VALUES (:marca, :modelo)");
        $sql->bindValue(':marca', $marca);
        $sql->bindValue(':modelo', $modelo);
        $sql->execute();
        return true; 
        exit;   
    }

     public function addHD($tamanho){
        $sql = $this->pdo->prepare('INSERT INTO hd (tamanho) VALUES (:tamanho)');
        $sql->bindValue(':tamanho', $tamanho);
        $sql->execute();
        return true;
     }

     public function addRam($clock, $capacidade){
        $sql = $this->pdo->prepare('INSERT INTO tbl_ram (clock, capacidade) VALUES (:clock, :capacidade)');
        $sql->bindValue(':clock', $clock);
        $sql->bindValue(':capacidade', $capacidade);
        $sql->execute();
        return true;
     }





}