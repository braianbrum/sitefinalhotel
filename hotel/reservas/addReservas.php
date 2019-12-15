<?php
include_once "../H/cabecalho.php";


?>

<body style="background-color: #02051a;">
<div id="formularioRes" style="background-color:white;">
    <form action="adicionarOKreserva.php" method-"POST" style="padding-left:500px";>
<h1 style="padding-left:10px;">RESERVAR</h1>
nome completo<input type="text" name="nome"></br></br>
documento de indentidade<input type="number" name="doc"></br></br>
telefone<input type="number" name="telefone"></br></br>
Data de Inícial<input type="date" name="di"/></br></br>
Data Final<input type="date" name="df"/></br></br>

<button type="reset" name="CANCELAR" style="background-color:orange;">CANCELAR </button>
<button type="submit" name="CADASTRAR" style="background-color:green;">RESERVAR</button>
</br></br>

</form>
</div>
</body>
<?php
include_once '../H/rodape.php';
?>
