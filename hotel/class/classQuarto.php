<?php
class Quarto{


    private $nro_porta;
    private $descricaoQuarto;
    private $preco;
 




    private $connection;
    private $tabela;


    public function construct(){

        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");



        $this->tabela="quartos";

    }
    public function destruct(){

        unset($this->connection);

    }

    public function __get($name){

        return $this->$name;
    }

    public function __set($name,$value){

        $this->$name=$value;
    }
    public function AddQuarto(){

        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");

        $sql="INSERT INTO quartos (descricaoQuarto , preco) VALUES ('$this->descricaoQuarto','$this->preco')";

        $resultado = mysqli_query($this->connection, $sql);
        //var_dump($this->connection);
        return $resultado;
      

    }

public function listarQuarto(){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         
    $sql=  "SELECT  * FROM quartos";
    $resultado= mysqli_query($this->connection,$sql);    
    //echo $sql;
    
    $retorno = null;
    while($res= mysqli_fetch_assoc($resultado)){

       // var_dump($res);die;
        $ObjQuartos= new Quarto();
        $ObjQuartos->nro_porta=$res['nro_porta'];
        $ObjQuartos->descricaoQuarto=$res['descricaoQuarto'];
        $ObjQuartos->preco=$res['preco'];

        $retorno[]=$ObjQuartos;
    }

    
         return  $retorno; 
    }


public function retornarUnicoQuarto(){
    $sql= "SELECT * FROM $this->tabela where nro_quarto=$this->nro_quarto";

    $resultado= mysqli_query($this->connection,$sql);
    $retorno = null;
    if($res - mysqli_fetch_assoc($resultado)){

        $ObjQuartos = new Quarto();

        $ObjQuartos->nro_porta=$res['nro_porta'];
        $ObjQuartos->descricaoQuarto=$res['descricaoQuarto'];
        $ObjQuartos->preco=$res['preco'];

        $retorno = $ObjQuartos;
    }
    return $retorno;
}


public function editarQuarto($ObjQuartos){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    $sql = "UPDATE quartos SET nro_porta = '$this->nro_quarto' WHERE nro_porta= '$this->nro_porta'";
    //var_dump($this->nome, $sql);die;
    //echo $sql;
  $resultado= mysqli_query($this->connection,$sql);

 //var_dump($resultado);
  return $resultado;
  
   }


public function excluirQuarto(){
    $sql = "DELETE * FROM quartos WHERE nro_porta='$this->nro_porta'";
    $resultado= mysqli_query($this->connection,$sql);
    return $resultado;
}

public function insertQuarto(Quartos $quartos){
    $connection;

    try{
        $connection= new PDO('mysql: host=127.0.0.1; dbname=hotel, root', '');

        $connection = beginTransaction();
        $sql = "INSERT quartos(nro_porta, descricaoQuarto,preco) value (:nro_porta, :descricaoQuarto,:preco)";

        $prepareStament=  $connection->prepare($sql);

        $prepareStement= bindValue(":nro_porta", $quartos->getnro_porta());
        $prepareStament= bindValue(":descricaoQuarto", $quartos->getdescricaoQuarto());
        $prepareStament= bindValue(":preco", $quartos->getpreco());

        $prepareStament-> execute();
        $connection->commit();

        return "secuesso";
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