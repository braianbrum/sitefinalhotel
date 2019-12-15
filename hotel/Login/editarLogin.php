<?php


include_once '../class/Login.class.php';
include_once '../H/cabecalho.php';


$objLogin= new login();
$objLogin->email=$_GET['email'];
$retorno= $objLogin->editarLogin();

//print_r($retorno);



?>

<form  action="editarLogin_ok.php" method="POST"  style="background-color:white;padding-left:500px;">
    <h2  style="padding-left:50px;">Editar Login</h2>
   
    email:<input type="email" name="email"  value="<?php echo $retorno->email;?>"/></br></br>
senha:<input type="password" name="senha"  value="<?php echo $retorno->senha;?>"/></br></br>
    <input type="hidden"    name="id" value="<?php echo $retorno->email;?>"/>
    <input type="submit"/> 
</br>
</br>
</br>
</br>
</br>

</br>
</br>

</form>

</br>
</br>



<?php
include_once '../H/rodape.php';
?>
