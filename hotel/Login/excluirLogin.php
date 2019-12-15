<?php


if(!isset($_GET['email'])){

    
}
include_once '../class/Login.class.php';
$objLogin= new Login();
$objLogin->email=$_GET['email'];
$retorno= $objLogin->excluirLogin();

//print_r($retorno);

if($retorno)
    echo "Login excluido com sucesso";
else
     echo "ERRO ao excluir Login";

?>


