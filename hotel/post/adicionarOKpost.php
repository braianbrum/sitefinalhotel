
<?php

include_once '../H/cabecalho.php';

//echo "<pre>";
//print_r($_POST);
include_once '../class/classPost.php';
$ObjPost = new Post();

$ObjPost->datadia= $_POST["datadia"];
$ObjPost->hora=$_POST["hora"];
$ObjPost->imagem=$_FILES["imagem"]['name'];
$ObjPost->texto=$_POST["texto"];
$ObjPost->id_usuario=$_POST["usuario"];

//print_r($_FILES);
$nome= $_FILES['imagem']['name'];
$nomeTemporario= $_FILES["imagem"]["tmp_name"];
$destino="../img/".$nome;
if(move_uploaded_file($nomeTemporario, $destino)){
    //echo "imagem enviada";
}
$retorno= $ObjPost->AddPost();

if($retorno)
    
    echo "Postado com sucesso!!!";

else
     echo "Não foi fazer postagem ";


 include_once '../H/rodape.php';
?>

