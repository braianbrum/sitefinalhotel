<?php
include_once "../H/cabecalho.php";

?>

<body style="background-color: #02051a;">
<div id="formalarioQua" style="background-color:white;">
<h1 style="padding-left:500px;">Quartos</h1>
<form action="adicionarOkquarto.php" method="POST" style="padding-left:500px;">

descricao do Quarto:<textarea type="text" name="descricao_Quarto"></textarea></br></br>
preço:<input type="decimal" name="preco"/></br></br>

<button type="reset" name="CANCELAR" style="background-color:orange;">CANCELAR</button>
<button type="submit" name="CADASTRAR" style="background-color:green;">CADASTRAR</button>
</br></br>

</form>


</div>
</body>
<?php
include_once '../H/rodape.php';
?>