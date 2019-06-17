<?php require 'header.php';

$query = new Dba();

if(isset($_POST['empresa']) && !empty($_POST['empresa']) && isset($_POST['contato']) && !empty($_POST['contato']) && isset($_POST['telefone']) && !empty($_POST['telefone'])){
    $empresa = addslashes($_POST['empresa']);
    $contato = addslashes($_POST['contato']);
    $telefone = addslashes($_POST['telefone']);

    $query->addEmpresa($empresa, $contato, $telefone);
    header('Location: index.php');


}else{
    echo "Favor preencher cadastro";
}