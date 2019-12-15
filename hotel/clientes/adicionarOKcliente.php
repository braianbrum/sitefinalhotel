<?php

include_once '../H/cabecalho.php';

//echo "<pre>";
//print_r($_POST);
include_once '../class/classCliente.php';
$ObjClientes = new Cliente();



$ObjClientes->nome=$_POST["nome"];
$ObjClientes->sobrenome=$_POST["sobrenome"];
$ObjClientes->email=$_POST["email"];
$ObjClientes->senha=md5($_POST['senha']);
$ObjClientes->telefone=$_POST["telefone"];
$ObjClientes->endereco=$_POST["endereco"];
$ObjClientes->cidade=$_POST["cidade"];
$ObjClientes->doc_identificacao=$_POST["doc_identificacao"];


$retorno= $ObjClientes->AddCli();

//var_dump($retorno);

if($retorno)

    
    echo "Cadastrado com sucesso!!!";

else
     echo "ERRO ao cadastrar";


 include_once '../H/rodape.php';
?>

