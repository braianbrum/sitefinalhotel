
<?php




//echo "<pre>";
//print_r($_POST);
include_once '../class/Login.class.php';
$objLogin = new Login();


$objLogin->email= $_POST["email"];
$objLogin->senha=$_POST["senha"];
$retorno = $objLogin->editarLogin();


if($retorno)
    
    echo Login editado com SUCESSO!!!;

else
     echo ERRO ao editar Login.;



?>