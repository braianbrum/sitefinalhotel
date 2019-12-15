<?php
include_once '../H/cabecalho.php';


include_once '../class/classQuarto.php';
$ObjQuartos = new Quarto();
$nro_quarto = $_GET['nro_quarto'];

?>
<div style="background-color:white;padding-left:500px;">
<form action="editarOKquarto.php" method="POST" stye="padding-left:500px;">
<h2 stye="padding-left:500px;">EDITAR QUARTO</h2>
numero de quarto: <input type="number" value="<?php echo $retorno->nro_quarto;?>"/></br>
descricao do Quarto: <input type="text" value="<?php echo $retorno->descricaoQuarto;?>"/></br>
preco:<input type="decimal" value="<?php echo $retorno->preco;?>"/></br>


<input type='hidden' name='nro_quarto' value="<?php echo $retorno->nro_quarto;?>"/></br>

<input type="submit" value='editar Quarto'/>

</form>
</br>
</br>
</div>

<?php
include_once '../H/rodape.php';
?>