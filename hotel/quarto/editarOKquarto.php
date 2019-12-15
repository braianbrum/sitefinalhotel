<?php 

include_once '../H/cabecalho.html';



include_once '../class/classPost.php';

$ObjQuartos = new Post();

$ObjQuartos->nro_porta=$_POST['nro_porta'];
$ObjQuartos->descricaoQuarto= $_POST['descricaoQuarto'];
$ObjQuartos->preco= $_POST['preco'];



$retorno = $ObjQuartos->editarQuarto($ObjQuartos);
if($retorno)

echo "EDITADO COM SUCESSO";

else 

echo "ERRO AO EDITAR";


include_once '../H/rodape.html'

?>