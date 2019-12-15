
<?php
include_once '../H/cabecalho.php';
?>

<head></head>
<body>
    
    <form action="AddPostqq.php"  method="POST" enctype="multipart/form-data">
        data:<input type="date" name="datadia"></br>
        hora:<input type="time" name="hora"/><br>
        imagem<input type="file" name="imagem"/><br>
        texto:<input type="text" name="texto"></br>
        <input type="submit" name="Postar"></br>
    </form>
<body>

<?php
include_once '../H/rodape.php';
?>