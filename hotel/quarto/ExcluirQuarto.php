<?php

include_once '../H/cabecalho.';

if(!isset($_GET['nro_porta']);

header("Location:ListarQuarto.php");

}

include_once '../class/ClassQuarto.php';

$ObjQuartos = new Quarto();
$ObjQuartos->nro_quarto=$_GET['reservas_id_reservas'];

if($retorno)
echo "excluindo com sucesso!!!";

else

echo "ERRO ao excluir";

include_once '../H/rodape.html';




?>