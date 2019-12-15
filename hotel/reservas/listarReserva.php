<?php 
include_once '../H/cabecalho.php';
include_once '../class/classReservas.php';

$ObjReservas = new Reserva();

$listarReservas  = $ObjReservas->listarReserva();
?>

<div style="padding-left:300px;background-color:white;">
<h1>RESERVAS</h1>
<br>
<table border='5'>

<thead style="background-color:grey;">
    <th>nome</th>
    <th>documento de identidade</th>
    <th>telefone</th>
    <th>data inicial</th>
    <th>data final</th>
 
</thead>
<tbody style="background-color:skyblue;">


<?php
foreach($listarReservas as $linha){
    echo "<tr>";
    echo "<td>".$linha->nome."</td>";
    echo "<td>".$linha->doc."</td>";
    echo "<td>".$linha->telefone."</td>";
    echo "<td>".$linha->di."</td>";
    echo "<td>".$linha->df."</td>";


 
}

?>
</tbody>
</table>
</br></br>
</div>
<?php
include_once '../H/rodape.php';
?>