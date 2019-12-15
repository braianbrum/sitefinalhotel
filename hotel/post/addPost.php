<?php

include_once "../H/cabecalho.php";
include_once "../class/classUsuario.php";
$user = new Usuario();
$retorno = $user->listarUsu();

?>

<body style="background-color: #02051a;">
<div id="formaularioPost" style="background-color:white";>
<h1 style="padding-left:500px;" >POSTAGENS</h1>
<form method="POST" action="adicionarOKpost.php" enctype="multipart/form-data" style="padding-left:500px;">
data:<input type="date" name="datadia"/></br></br>
hora:<input type="time" name="hora"></br></br>
imagem<input type="file" name="imagem"></br></br>
Usuário<select name="usuario">
    <option value="">Selecione um Usuário</option>
    <?php foreach($retorno as $linha){
        //var_dump($linha->nome);die;
    ?>
        <option value="<?php echo $linha->id_usuario ?>"><?php echo $linha->nome ?></option>
    <?php
    }?>
</select>
</br>
</br>
<textarea type="input" name="texto"></textarea>
</br></br>
<button type="reset"  name="CANCELAR" style="background-color:orange;">CANCELAR</button>
<button type="submit" name="POSTAR" style="background-color:green;">POSTAR</button>
</form>
</br>
</br>
</body>

<?php include_once "../H/rodape.php";
?>