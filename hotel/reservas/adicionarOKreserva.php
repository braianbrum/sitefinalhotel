<?php

include_once '../H/cabecalho.php';

//echo "<pre>";
//print_r($_POST);
include_once '../class/classReservas.php';
$ObjReservas = new Reserva();



$ObjReservas->nome=$_POST["nome"];
$ObjReservas->doc=$_POST["doc"];
$ObjReservas->telefone=$_POST["telefone"];
$ObjReservas->di=$_POST["di"];
$ObjReservas->df=$_POST["df"];


$retorno= $ObjReservas->AddReserva($ObjReservas);

//var_dump($retorno);

if($retorno)

    
    echo "Cadastrado com sucesso!!!";

else
     echo "ERRO ao cadastrar";


 include_once '../H/rodape.php';
?>

