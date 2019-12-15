<?php
include_once '../H/cabecalho.php';

if(!isset($_GET['id_post']){

    header("Location:listarPost.php");



}

include_once '../class/ClassPost.php';
$ObjPost = new Post();
$ObjPost->id_post=$_GET['id_post'];

if($retorno)
echo "Excluido com sucesso!!!";
else
echo "ERRO ao excluir";




include_once '../H/rodape.php';

?>
