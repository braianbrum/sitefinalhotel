 <?php
 
 include_once '../H/cabecalho.php';
 session_start();
 
include_once '../class/classCliente.php';

$ObjClientes= new Cliente();
$ObjClientes->email = $_POST['email'];
$ObjClientes->senha= $_POST['senha'];

$resultado = $ObjClientes->Login();
if($resultado){
   $_SESSION['email']= $ObjClientes->email;
   $_SESSION['senha'] = $ObjClientes->senha;
   $_SESSION['login'] = true;
   $_SESSION['comum'] = true;
  
      //print_r($_SESSION);
   
    echo "logado";
}
    else{
        echo "nao logado";
    
	}
	
	include_once '../H/rodape.php';

?>

