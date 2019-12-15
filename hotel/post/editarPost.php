<?php
include_once '../H/cabecalho.php';


include_once '../class/classPost.php';
$ObjPost = new Post();
$id = $_GET['id_post'];
$retorno = $ObjPost->retornarUnicoPost($id);

?>


<form action="editarOKpost.php" method="POST" style="background-color:white;padding-left:500px;">
<h2 style="padding-left:9px;">EDITAR POSTAGEM</h2>
    data:<input type="date" name="datadia" value="<?php echo $retorno->datadia;?>"/></br></br>
hora:<input type="time" name="hora" value="<?php echo $retorno->hora;?>"/></br></br>
imagem:<input type="file" name="imagem" value="<?php echo $retorno->imagem;?>"></br></br>
Texto<textarea type="input" name="texto" value="<?php echo $retorno->texto;?>"></textarea></br></br>


<input type='hidden' name='id_post' value="<?php echo $retorno->id_post;?>"></br>
<input type="submit" value='editar Post'/>

</form>
<?php
include_once "../H/rodape.php";
?>

