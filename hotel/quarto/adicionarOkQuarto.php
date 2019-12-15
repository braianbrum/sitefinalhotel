<?php

include_once '../H/cabecalho.php';

//echo "<pre>";
//print_r($_POST);
include_once '../class/classQuarto.php';
$ObjQuartos = new Quarto();

//$ObjQuartos->nro_porta=$_POST["nro_porta"];
$ObjQuartos->descricaoQuarto=$_POST["descricao_Quarto"];//erro
$ObjQuartos->preco=$_POST['preco'];

$retorno = $ObjQuartos->AddQuarto();
if($retorno){

    
    echo "quarto Adicionado com sucesso!!!";
}
    else 
    echo "ERRO ao cadastrar Quarto";
    
include_once '../H/rodape.php';
?>