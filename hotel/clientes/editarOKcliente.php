<?php 

include_once '../H/cabecalho.php';



include_once '../class/classCliente.php';

$ObjClientes = new Cliente();

$ObjClientes->id_cliente=$_POST['id_cliente'];
$ObjClientes->nome= $_POST['nome'];
$ObjClientes->sobrenome= $_POST['sobrenome'];
$ObjClientes->email= $_POST['email'];
$ObjClientes->senha= $_POST['senha'];
$ObjClientes->telefone= $_POST['telefone'];
$ObjClientes->endereco= $_POST['endereco'];
$ObjClientes->cidade= $_POST['cidade'];
$ObjClientes->doc_identificacao= $_POST['doc_identificacao'];

$retorno = $ObjClientes->editarCliente($ObjClientes);
if($retorno)

echo "EDITADO COM SUCESSO";

else 

echo "ERRO AO EDITAR";


include_once '../H/rodape.php'

?>