<?php 

include_once '../H/cabecalho.php';



include_once '../class/classPost.php';

$ObjPost = new Post();

$ObjPost->id_post=$_POST['id_post'];
$ObjPost->datadia= $_POST['datadia'];
$ObjPost->hora= $_POST['hora'];
$ObjPost->imagem= $_POST['imagem'];
$ObjPost->texto= $_POST['texto'];


$retorno = $ObjPost->editarPost($ObjPost);
if($retorno)

echo "EDITADO COM SUCESSO";

else 

echo "ERRO AO EDITAR";


include_once '../H/rodape.php';

?>