<?php

include_once '../H/cabecalho.php';
include_once '../class/classPost.php';


$ObjPost = new Post();

$listarP = $ObjPost->listarPost();
?>

<h1>TODAS AS POSTAGENS</h1>
<br>
<div style="background-color:white;">
<table border="2">

<thead>
<th style="background-color:grey;">id_post</th>
<th style="background-color:grey;">datadia</th>
<th style="background-color:grey;">hora</th>
<th style="background-color:grey;">imagem</th>
<th style="background-color:grey;">texto</th>
</thead>

<tbody>

<?php
foreach($listarP as $linha){
    echo "<tr>";
    echo "<td>".$linha->id_post."</td>";
    echo "<td>".$linha->datadia."</td>";
    echo "<td>".$linha->hora."</td>";
    echo "<td>".$linha->imagem."</td>";
    echo "<td>".$linha->texto."</td>";




  
        echo "</tr>"; 
  


}

?>
</tbody>
    
</table>
    </br>
</br>
</div>
</br>
</br>
<?php
include_once '../H/rodape.php';
?>

