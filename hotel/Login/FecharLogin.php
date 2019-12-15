 <?php
 
 include_once '../H/cabecalho.php';
 
session_start();
 
 

 
include_once '../class/classCliente.php';


$objClientes= new Clientes();
$objClientes->email = $_POST['email'];
$objClientes->senha= $_POST['senha'];

$resultado = $objClientes->Login();
if($resultado){
   $_SESSION['email']= $objClientes->email;
   $_SESSION['senha'] = $objClientes->senha;
   $_SESSION['login'] = true;
   $_SESSION['comum'] = true;
  
      
   
    header("location:../H/inicio.php");
}
    else{
        echo "nao logado";
    
	}
	
	include_once '../H/rodape.php';

?>
