<?php
include_once '../H/cabecalho.php';
?>
<html>
    <head>
        <title>usuario</title>
    </head>
    <body style="background-color: #02051a;">
    <div id="formularioCli">
        <form action="adicionarOKCliente.php" method="POST" enctype="multipart/form-data"  style="background-color:white;padding-left:500px;">
            <h2  style="padding-left:50px;">Cadastramento de usuário</h2>
            
            <form method="POST" action="adicionarOKcliente.php">
Nome:<input type="text" name="nome"/></br></br>
Sobrenome:<input type="text" name="sobrenome"/></br></br>
e-mail:<input type="email" name="email"/></br></br>
Senha:<input type="password" name="senha"/></br></br>
Telefone:<input type="number"   name="telefone"/></br></br>
Endereço:<input type="text" name="endereco"/></br></br>
Cidade:<input type="text" name="cidade"/></br></br>
Documento de identificação:<input type="number" name="doc_identificacao"/></br></br>
          
          <input type="submit" value="Enviar" style="background-color:blue;color:white"/>
        
          
    </form>
</br>
</br>
</div>
    </body>
                 
    
</html>
<?php

include_once '../H/rodape.php';

?>




