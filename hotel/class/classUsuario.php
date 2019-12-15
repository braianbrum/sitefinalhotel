<?php

class Usuario{
    
    private $id_usuario;
    private $nome;
    private $sobrenome;
    private $email;
    private $senha;
    private $telefone;
    private $endereco;
    private $cidade;
    private $doc_identificacao;

    private $connection;//conexao com o banco
    private $tabela;// tabela alvo da classe

    public function __construct(){
    
        $this->connection = mysqli_connect("localhost", "root","", "hotel")
        or die("não rolou");

        $this->tabela="usuarios";

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
    public function AddUsuarios(){
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");

        $sql=  "INSERT INTO  $this->tabela(nome,sobrenome,email,senha,telefone,endereco,cidade,doc_identificacao) values ('$this->nome','$this->sobrenome','$this->email','$this->senha','$this->telefone','$this->endereco','$this->cidade','$this->doc_identificacao')";

        $resultado = mysqli_query($this->connection,$sql);
        echo $sql;
        return $resultado;
    }
    public function listarUsu(){
        
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
         
        $sql=  "SELECT  * FROM usuarios";
        $resultado= mysqli_query($this->connection,$sql);    
        //echo $sql;
        
        $retorno = null;
        while($res= mysqli_fetch_assoc($resultado)){

           // var_dump($res);die;
            $ObjUsuarios= new Usuario();
            $ObjUsuarios->id_usuario=$res['id_usuario'];
            $ObjUsuarios->nome=$res['nome'];
            $ObjUsuarios->sobrenome=$res['sobrenome'];
            $ObjUsuarios->email=$res['email'];
            $ObjUsuarios->senha=$res['senha'];
            $ObjUsuarios->telefone=$res['telefone'];
            $ObjUsuarios->endereco=$res['endereco'];
            $ObjUsuarios->cidade=$res['cidade'];
            $ObjUsuarios->doc_identificacao=$res['doc_identificacao'];
            $retorno[]=$ObjUsuarios;
        }

        
             return  $retorno; 
        }
   
        public function retornarUnicoUsuario($a){
    
    
            $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
            $sql="SELECT * FROM usuarios WHERE id_usuario = '$a'";
            
            $resultado= mysqli_query($this->connection,$sql);
            $retorno=null;
        
        
            if($res = mysqli_fetch_assoc($resultado)){
                //var_dump($res);
                $ObjUsuarios = new Usuario();
                $ObjUsuarios->id_usuario=$res['id_usuario'];
                $ObjUsuarios->nome=$res['nome'];
                $ObjUsuarios->sobrenome=$res['sobrenome'];
                $ObjUsuarios->email=$res['email'];
                $ObjUsuarios->senha=$res['senha'];
                $ObjUsuarios->telefone=$res['telefone'];
                $ObjUsuarios->endereco=$res['endereco'];
                $ObjUsuarios->cidade=$res['cidade'];
              
                $ObjUsuarios->doc_identificacao=$res['doc_identificacao'];
        
                $retorno = $ObjUsuarios;
            }
        
            //var_dump($retorno);
            return $retorno;
        
        
        
        
        }
        
        
        public function editarUsuario($ObjClientes){
            $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
            $sql = "UPDATE usuarios SET nome = '$this->nome' WHERE id_usuario= '$this->id_usuario'";
            //var_dump($this->nome, $sql);die;
            //echo $sql;
          $resultado= mysqli_query($this->connection,$sql);
       
         //var_dump($resultado);
          return $resultado;
          
           }
       
        


   public function excluirUsuario(){
    
    $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
  
   
    $sql="DELETE * FROM usuarios WHERE id_usuario='$this->id_usuario'";
    $resultado= mysqli_query($this->connection,$sql);
 echo $sql;

 //var_dump($reusltado);
    return $resultado;

}


public function Login(){


    $sql= "SELECT * FROM usuarios WHERE email='$this->email' and senha='$this->senha'";
    
    $resultado= mysqli_query($this->connection,$sql);
             $retorno=null;
             
             if($res = mysqli_fetch_assoc($resultado)){
                 $ObjUsuarios= new Clientes();
                 $ObjUsuarioss->nome=$res['nome'];
                 $ObjUsuarios->sobrenome=$res['sobrenome'];
                 $ObjUsuarios->email=$res['email'];
                 $ObjUsuarios->senha=$res['senha'];
                 $ObjUsuarios->telefone=$res['telefone'];
                 $ObjUsuarios->endereco=$res['endereco'];
                 $ObjUsuarios->doc_identifiacaco=$res['doc_identificacao'];
                 
                 $retorno= $ObjUsuarios;
             }
             return $retorno;
             
    
    }



    

    public function insertUsuario(Clientes $usuarios){
        
        $this->connection=mysqli_connect("localhost", "root","", "hotel") or die("não rolou");
        $connection;
        try{
            $connection= new PDO('mysql: host=127.0.0.1;dbname=hotel, root', ' ');

            $connection = biginTransaction();
            $sql = "INSERT clientes(nome,sobrenome,email,senha,telefone,endereco,cidade,doc_identificacao) value (:nome.:sobrenome,:email,:senha,:telefone,:endereco,:cidade,:doc_identificacao)";

            $prepareStament= $connection->prepare($sql);

            $prepareStament= bindValue(":nome", $usuarios->getnome());
            $prepareStament= bindValue(":sobrenome", $usuarios->getsobrenome());
            $prepareStament= bindValue(":email",$usuarios->getemail());
            $preparestament= bindValue(":senha", $usuarios->getsenha());
            $prepareStament= bindValue(":telefone", $usarios->gettelefone());
            $preparestament= bindValue(":endereco", $usuarios->getendereco());
            $perpareStament= bindValue(":cidade", $usuarios->getcidade());
            $prepareStament= bindValue(":doc_identificacao",$usuarios->getdoc_identificacao());


            

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