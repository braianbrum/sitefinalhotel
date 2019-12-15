<?php
include_once '../H/cabecalho.php';

?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color: #02051a"><div style="background-color: white">
        <h1 style="background-color:white;padding-left:500px;"  >LOGIN</h1>
        
        <form method="POST" action='login_ok.php' style="padding-left:500px;" >
            Email:<input type='email'  name='email'/></br>
            Senha:<input type='password' name='senha'/></br>
            <input type='submit' value="ENVIAR" style="background-color:skyblue"/>
			</br></br>
			Se você não está logado: <a href="../Login/adicionarLog.php" style="color:blue">cadastre-se aqui</a>
        </form>
</div>
</br>
    </body>
</html>

<?php

include_once '../H/rodape.php';

?>