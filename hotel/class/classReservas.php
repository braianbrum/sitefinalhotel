<?php 


class Reserva{
    private $nome;
    private $doc;
    private $telefone;
    private $di;
    private $df;


    private $connection;
    private $tabela;
    public function construct(){
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         

        $this->tabela="reservas";


    }
public function destruct(){
    unset($this->connection);
}

public function __get($name){

return $this->$name;


}

 public  function __set($name,$value){

    $this->$name=$value;
 }


 public function AddReserva(){
     $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
     
    $sql="INSERT INTO reservas (nome, doc, telefone, di, df) VALUES ('$this->nome', '$this->doc' , '$this->telefone' , '$this->di', '$this->df')";
    //var_dump($sql);die;
    echo $sql;
    $resultado = mysqli_query($this->connection, $sql);
    //var_dump($this->connection);
    return $resultado;
  

}
public function listarReserva(){
        
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    
    $sql=  "SELECT  * FROM reservas";
    $resultado= mysqli_query($this->connection,$sql);    
    //echo $sql;
    
   
    $retorno = null;
    while($res= mysqli_fetch_assoc($resultado)){


        //var_dump($res);die;
        $ObjReservas= new Reserva();
        $ObjReservas->nome=$res['nome'];
        $ObjReservas->doc=$res['doc'];
        $ObjReservas->telefone=$res['telefone'];
        $ObjReservas->di=$res['di'];
        $ObjReservas->df=$res['df'];
        $retorno[]=$ObjReservas;
    }

    
         return  $retorno; 
    }

public function retornarUnicoReserva($a){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $sql="SELECT *  FROM reservas WHERE doc='$a'";

    $resultado = mysqli_query($this->connection,$sql);
    $retorno = null;
    

    if($res = mysqli_fetch_assoc($resultado)){
//var_dump($res);
        $ObjReservas= new Reserva();
        $ObjReservas->nome=$res['nome'];
        $ObjReservas->doc=$res['doc'];
        $ObjReservas->telefone=$res['telefone'];
        $ObjReservas->di=$res['di'];
        $ObjReservas->df=$res['df'];

    $retorno= $ObjReservas;
    }
    //var_dump($retorno);
    return $retorno;
}



public function editarReserva($ObjReservas){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    $sql = "UPDATE reservas SET doc = '$this->doc' WHERE doc= '$this->doc'";
    //var_dump($this->nome, $sql);die;
    //echo $sql;
  $resultado= mysqli_query($this->connection,$sql);

 //var_dump($resultado);
  return $resultado;
  
   }



public function excluirReserva(){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $sql="DELETE * FROM  reservas WHERE   doc='$this->doc'";
    $resultado= mysqli_query($this->connection, $sql);
    return $resultado;

}

public function insertPost(Reservas $reservas){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $connection;

    try{
$connection= new PDO('mysql: host=127.0.0.1; dbname=hotel, root', '');


$connection = beginTransaction();

$sql = "INSERT  reservas(nome, doc, telefone, di, df) value (:nome,:doc,:telefone,:di,:df)";



$prepareStament = $connection->prepare($sql);

$prepareStament = bindVlaue("nome" ,$post->getnome());
$prepareStament = bindVlaue("doc" ,$post->getdoc());
$prepareStament = bindVlaue("telefone" ,$post->gettelefone());
$prepareStament = bindVlaue("di" ,$post->getdi());
$prepareStament = bindVlaue("df" ,$post->getdf());



$preparestament-> execute();
$connection->commit();

return "sucesso!!!";

    }

    catch(PDOException $exc){
        if(isset($connection)&&($connection->inTransaction())){
            $connection->rollBack();
        }
        echo $exc-> getMessage();
        return "FALHA";
        }
    
    
    finally {
        if(isset($connection)){
        unset($connection);
        }
    }
}




}



?>