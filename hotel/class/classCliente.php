<?php

class Cliente{
    private $id_cliente;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $cidade;
    private $doc_identificacao;

    private $connection;
    private $tabela;

    public function construct(){
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");

        $this->tabela="clientes";

    }
    public function destruct(){

        unset($this->connection);

    }

    public function __get($name){

        return $this->$name;
    }

    public function __set($name, $value){
        $this->$name=$value;
    }
    public function AddCli(){

        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");

        $sql="INSERT INTO clientes (nome , sobrenome , email , senha , telefone , endereco, doc_identificacao, cidade) VALUES ('$this->nome','$this->sobrenome','$this->email','$this->senha','$this->telefone','$this->endereco','$this->doc_identificacao','$this->cidade')";
        var_dump($sql);die;
        $resultado = mysqli_query($this->connection, $sql);
        //var_dump($this->connection);
        return $resultado;
      

    }
        
    
    public function listarCli(){
        
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         
        $sql=  "SELECT  * FROM clientes";
        $resultado= mysqli_query($this->connection,$sql);    
        //echo $sql;
        
        $retorno = null;
        while($res= mysqli_fetch_assoc($resultado)){

           // var_dump($res);die;
            $ObjClientes= new Cliente();
            $ObjClientes->id_cliente=$res['id_cliente'];
            $ObjClientes->nome=$res['nome'];
            $ObjClientes->sobrenome=$res['sobrenome'];
            $ObjClientes->email=$res['email'];
            $ObjClientes->senha=$res['senha'];
            $ObjClientes->telefone=$res['telefone'];
            $ObjClientes->endereco=$res['endereco'];
            $ObjClientes->cidade=$res['cidade'];
            $ObjClientes->doc_identificacao=$res['doc_identificacao'];
            $retorno[]=$ObjClientes;
        }

        
             return  $retorno; 
        }




    
public function retornarUnicoCliente($a){
    
    
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
    $sql="SELECT * FROM clientes WHERE id_cliente = '$a'";
    
    $resultado= mysqli_query($this->connection,$sql);
    $retorno=null;


    if($res = mysqli_fetch_assoc($resultado)){
        //var_dump($res);
        $ObjClientes = new Cliente();
        $ObjClientes->id_cliente=$res['id_cliente'];
        $ObjClientes->nome=$res['nome'];
        $ObjClientes->sobrenome=$res['sobrenome'];
        $ObjClientes->email=$res['email'];
        $ObjClientes->senha=$res['senha'];
        $ObjClientes->telefone=$res['telefone'];
        $ObjClientes->endereco=$res['endereco'];
        $ObjClientes->cidade=$res['cidade'];
      $ObjClientes->doc_identificacao=$res['doc_identificacao'];

        $retorno = $ObjClientes;
    }

    //var_dump($retorno);
    return $retorno;




}




 public function editarCliente($ObjClientes){
     $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
     $sql = "UPDATE clientes SET nome = '$this->nome' WHERE id_cliente= '$this->id_cliente'";
     //var_dump($this->nome, $sql);die;
     //echo $sql;
   $resultado= mysqli_query($this->connection,$sql);

  //var_dump($resultado);
   return $resultado;
   
    }

public function excluirCliente(){
    
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
  
   
    $sql="DELETE * FROM clientes WHERE id_cliente='$this->id_cliente'";
    $resultado= mysqli_query($this->connection,$sql);
 echo $sql;

 var_dump($reusltado);
    return $resultado;

}


      
           public function Login(){

            $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         
$sql= "SELECT * FROM clientes WHERE email='$this->email' and senha='$this->senha'";

$resultado = mysqli_query($this->connection,$sql); 
echo $sql; 
         $retorno=null;
         
         if($res = mysqli_fetch_assoc($resultado)){
             $ObjClientes= new Cliente();
            $ObjClientes->nome=$res['nome'];
            $ObjClientes->sobrenome=$res['sobrenome'];
             $ObjClientes->email=$res['email'];
           $ObjClientes->senha=$res['senha'];
           $ObjClientes->telefone=$res['telefone'];
            $ObjClientes->endereco=$res['endereco'];
            $ObjClientes->cidade=$res['cidade'];
            $ObjClientes->doc_identificacao=$res['doc_identificacao'];
             
             $retorno= $ObjClientes;
         }
   
             return $retorno;
             
    
   }

    public function insertCliente(Clientes $clientes){
        
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
        $connection;
        try{
            $connection= new PDO('mysql: host=127.0.0.1;dbname=hotel, root', ' ');

            $connection = biginTransaction();
            $sql = "INSERT clientes(nome,sobrenome,email,senha,telefone,endereco,cidade,doc_identificacao) value (:nome.:sobrenome,:email,:senha,:telefone,:endereco,:cidade,:doc_identificacao)";

            $prepareStament= $connection->prepare($sql);

            $prepareStament= bindValue(":nome", $clientes->getnome());
            $prepareStament= bindValue(":sobrenome", $clientes->getsobrenome());
            $prepareStament= bindValue(":email",$clientes->getemail());
            $preparestament= bindValue(":senha", $clientes->getsenha());
            $prepareStament= bindValue(":telefone", $clientes->gettelefone());
            $preparestament= bindValue(":endereco", $clientes->getendereco());
            $perpareStament= bindValue(":cidade", $clientes->getcidade());
            $prepareStament= bindValue(":doc_identificacao",$clientes->getdoc_identificacao());


            

            $prepareStament-> execute();
            $connection->commit();

            return "sucesso";
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