<?php

include_once '../H/cabecalho.php';
include_once '../class/classQuarto.php';

$ObjQuartos = new Quarto();

$listarQuartos = $ObjQuartos->listarQuarto();


?>
<div style="padding-left:300px;background-color:white;">
<h1 style="padding-left:100px;">QUARTOS </h1>
<br>
<table border='2'> 
<thead style="background-color:grey;">

<th>nro_porta</th>
<th>descricaoQuarto</th>
<th>preco</th>
</thead>
<tbody style="background-color:skyblue;">

<?php


foreach($listarQuartos as $linha){

    echo "<tr>";
      echo "<td>".$linha->nro_porta."</td>";
    echo "<td>".$linha->descricaoQuarto;"</td>";
    echo "<td>".$linha->preco;"</td>";

  
    

    

}




?>

</tbody>
</table></br></br>
<button style="font-size:20px;background-color:greenyellow;"><a href='../reservas/addReservas.php' style="text-decoration:none;color:black;">RESERVAR</a></button>
       
</div>
<?php

include_once '../H/rodape.php';
?>