<?php

include_once '../H/cabecalho.php';
include_once '../class/classCliente.php';

$ObjClientes= new  Cliente();

$listarClientes = $ObjClientes->listarCli();

?>
<div style="padding-left:80px;background-color:white;">

<h1>CLIENTES CADASTRADOS</h1>
<br>
<table border='5'>

<thead style="background-color:grey;">
    <th>id_cliente</th>
    <th>nome</th>
    <th>sobrenome</th>
    <th>email</th>
    <th>telefone</th>
    <th>endereco</th>
    <th>cidade</th>
    <th>doc_identificacao</th>
</thead>
<tbody style="background-color:skyblue;">

<?php
foreach($listarClientes as $linha){
    echo "<tr>";
    echo "<td>".$linha->id_cliente."</td>";
    echo "<td>".$linha->nome."</td>";
    echo "<td>".$linha->sobrenome."</td>";
    echo "<td>".$linha->email."</td>";
    echo "<td>".$linha->telefone."</td>";
    echo "<td>".$linha->endereco."</td>";
    echo "<td>".$linha->cidade."</td>";
    echo "<td>".$linha->doc_identificacao."</td>";




    echo"<td><a href='editarCliente.php?id=".$linha->id_cliente."'>Editar</a></td>";
        echo "</tr>"; 
  



}

?>
</tbody>
</table>
</br></br>
</div>
<?php
include_once '../H/rodape.php';
?>