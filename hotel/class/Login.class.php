<?php

class Login {
    
  

    
   
    private $email;
    private $senha;
    
    
    
    private $connection;//conexao com o banco
    private $tabela;// tabela alvo dessa classe
    
    public function __construct(){
    $this->conexao=mysqli_connect("localhost", "root", "", "hotel") or die ("Não rolou");
    
    
    $this->table="login";
    
}

     public function  __desctruct(){
         unset($this->conexao);
     }
     
     
     public function __get($name){  //guardar
         return $this->$name;
     
     }
     
     public function __set($name, $value){  //alterar
         
         $this->$name=$value;
         
     }
     
    
     
     
    
     public function Login(){
         
         $sql = "SELECT * FROM login where email='$this->email' and senha ='$this->senha'"; 
         
         $resultado= mysqli_query($this->connection,$sql);
         $retorno=null;
         
         if($res = mysqli_fetch_assoc($resultado)){
             
             $objLogin= new Login();
             $objLogin->id=$res['email'];
             $objLogin->nome=$res['senha'];
         
          
             $objLogin->senha=$res['senha'];
             
             $retorno= $objLogin;
         }
         return $retorno;
     }
     
     public function editarLogin(){
         $sql= "UPDATE $this->table SET  nome = '$this->nome', email ='$this->email' WHERE semha= '$this->senha'";
         
         
         $resultado= mysqli_query($this->conexao,$sql);
         return $resultado;
     }
      
     public function Excluirlogin(){
         $sql= "DELETE FROM $this->table WHERE email= email";
         $resultado=mysqli_query($this->conexao, $sql);
             return $resultado;
             
     }
     
}




