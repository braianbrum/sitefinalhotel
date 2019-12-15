<?php 


class Post{
    private $id_post;
    private $datadia;
    private $hora;
    private $imagem;
    private $texto;
    private $id_usuario;


    private $connection;
    private $tabela;
    public function construct(){
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         

        $this->tabela="post";


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


 public function AddPost(){
     $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
     
    $sql="INSERT INTO post (datadia , hora , imagem , texto, id_usuario) VALUES ('$this->datadia','$this->hora','$this->imagem', '$this->texto', '$this->id_usuario')";
    //var_dump($sql);die;
    $resultado = mysqli_query($this->connection, $sql);
    //var_dump($this->connection);
    return $resultado;
  

}
public function listarPost(){
        
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    
    $sql=  "SELECT  * FROM post";
    $resultado= mysqli_query($this->connection,$sql);    
    //echo $sql;
    
   
    $retorno = null;
    while($res= mysqli_fetch_assoc($resultado)){


        //var_dump($res);die;
        $ObjPost= new Post();
        $ObjPost->id_post=$res['id_post'];
        $ObjPost->datadia=$res['datadia'];
        $ObjPost->hora=$res['hora'];
        $ObjPost->imagem=$res['imagem'];
        $ObjPost->texto=$res['texto'];
        $ObjPost->id_usuario=$res['id_usuario'];
        $retorno[]=$ObjPost;
    }

    
         return  $retorno; 
    }

public function retornarUnicoPost(){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $sql="SELECT *  FROM post WHERE id_post='id_post'";

    $resultado = mysqli_query($this->connection,$sql);
    $retorno = null;
    

    if($res = mysqli_fetch_assoc($resultado)){

        $ObjPost= new Post();
        $ObjPost->id_post=$res['id_post'];
        $ObjPost->datadia=$res['datadia'];
    $ObjPost->imagem=$res['imagem'];
    $ObjPost->texto=$res['texto'];
    $ObjPost->id_usuario=$res['id_usuario'];

    $retorno= $ObjPost;
    }
    return $retorno;
}



public function editarPost($ObjPost){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    $sql = "UPDATE post SET id_post = '$this->id_post' WHERE id_post= '$this->id_post'";
    //var_dump($this->nome, $sql);die;
    //echo $sql;
  $resultado= mysqli_query($this->connection,$sql);

 //var_dump($resultado);
  return $resultado;
  
   }



public function excluirPost(){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $sql="DELETE * FROM  post WHERE   id_post='$this->id_post'";
    $resultado= mysqli_query($this->connection, $sql);
    return $resultado;

}

public function insertPost(Posts $post){
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    
    $connection;

    try{
$connection= new PDO('mysql: host=127.0.0.1; dbname=hotel, root', '');


$connection = beginTransaction();

$sql = "INSERT  post(datadia,hora, imagem, texto, id_usuario) value (:id_post,:datadia,:hora,:imagem,:texto ,:id_usuario)";



$prepareStament = $connection->prepare($sql);

$prepareStament = bindVlaue("id_post" ,$post->getid_post());
$prepareStament = bindVlaue("datadia" ,$post->getdatadia());
$prepareStament = bindVlaue("hora" ,$post->gethora());
$prepareStament = bindVlaue("imagem" ,$post->getimagem());
$prepareStament = bindVlaue("texto" ,$post->gettexto());
$prepareStament = bindVlaue("id_usuario" ,$post->getid_usuario());



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