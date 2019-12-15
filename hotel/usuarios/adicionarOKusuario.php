<?php

include_once '../A/cabecalho.php';

//echo "<pre>";
//print_r($_POST);
include_once '../class/classUsuario.php';
$ObjClientes = new Usuario();



$ObjClientes->nome=$_POST["nome"];
$ObjClientes->sobrenome=$_POST["sobrenome"];
$ObjClientes->email=$_POST["email"];
$ObjClientes->senha=$_POST["senha"];
$ObjClientes->telefone=$_POST["telefone"];
$ObjClientes->endereco=$_POST["endereco"];
$ObjClientes->cidade=$_POST["cidade"];
$ObjClientes->doc_identificacao=$_POST["doc_identificacao"];


$retorno= $ObjClientes->AddUsuarios();

if($retorno)
echo "Usuario adicionado com sucesso!!!";

else

 echo "Não foi possivel adicionar usuario";

 include_once '../H/rodape.php';
 
?>