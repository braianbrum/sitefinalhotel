<?php

include_once '../H/cabecalho.php';

if(!isset($_GET['id_cliente'])){

    header("Location:listarCliente.php");


}

include_once '../class/classCliente.php';
$ObjClientes = new Cliente();
$ObjClientes->id_cliente =$_GET['id_cliente'];

$retorno= $ObjClientes->excluirCliente();

if($retorno)
echo "excluido com sucesso!!!";

else

echo "não excluido";


include_once '../H/rodape.php';


?>