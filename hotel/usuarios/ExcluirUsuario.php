<?php
include_once '../A/cabecalho.php';

if(!isset($_GET['id_usuario'])){
    header("Location:ListarUsuario.php");

}
include_once '../class/classUsuario.php';
$ObjUsuarios = new Usuario();
$ObjUsuarios->id_usuario=$_GET['id_usuario'];
$retorno= $ObjUsuarios->ExcluirUsuario();

if($retorno)
echo "excluido com Sucesso!!!";
else
echo "não excluido";

include_once '../H/rodape.php';


?>