<?php 

include_once '../H/cabecalho.php';



include_once '../class/classUsuario.php';

$ObjUsuarios = new Usuario();

$ObjUsuarios->id_usuario=$_POST['id_usuario'];
$ObjUsuarios->nome= $_POST['nome'];
$ObjUsuarios->sobrenome= $_POST['sobrenome'];
$ObjUsuarios->email= $_POST['email'];
$ObjUsuarios->senha= $_POST['senha'];
$ObjUsuarios->telefone= $_POST['telefone'];
$ObjUsuarios->endereco= $_POST['endereco'];
$ObjUsuarios->cidade= $_POST['cidade'];
$ObjUsuarios->doc_identificacao= $_POST['doc_identificacao'];

$retorno = $ObjUsuarios->editarUsuario($ObjUsuarios);
if($retorno)

echo "EDITADO COM SUCESSO";

else 

echo "ERRO AO EDITAR";


include_once '../H/rodape.php'

?>