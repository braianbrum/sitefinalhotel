<?php
include_once '../H/cabecalho.php';

?>
<body  style="background-color:#d0d2e2;">
    <div id="formularioCli" style="background-color:white;">
        <h1  style="padding-left:400px;">CADASTRAMENTO DE CLIENTES</h1>
        <form method="POST" action="adicionarOKcliente.php"  style="padding-left:500px;">
Nome:<input type="text" name="nome"/></br></br>
Sobrenome:<input type="text" name="sobrenome"/></br></br>
e-mail:<input type="email" name="email"/></br></br>
Senha:<input type="password" name="senha"/></br></br>
Telefone:<input type="number"   name="telefone"/></br></br>
Endereço:<input type="text" name="endereco"/></br></br>
Cidade:<input type="text" name="cidade"/></br></br>
Documento de identificação:<input type="number" name="doc_identificacao"/></br></br>

<div id="html_element" ></div>
      <br>

      <br>
<button type="reset" name="CANCELAR" style="background-color:orange;">CANCELAR</button>
<button type="submit" name="CADASTRAR" style="background-color:green;">CADASTRAR</button>


</form>


  
<script src="https://www.google.com/recaptcha/api.js?render=6LdONcQUAAAAAK1ewjAkFRIH902lz0waXO83hkmy"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LdONcQUAAAAAK1ewjAkFRIH902lz0waXO83hkmy', {action: 'homepage'}).then(function(token) {
       ...
    });
});
</script>



<script type="text/javascript">
      var onloadCallback = function() {
        grecaptcha.render('html_element', {
          'sitekey' : '6LdONcQUAAAAAK1ewjAkFRIH902lz0waXO83hkmy'
        });
      };
    </script>
  </head>
  <body>
    <form action="?" method="POST">
      <div id="html_element"></div>
      <br>
      <input type="submit" value="Submit">
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
    </script>
 <?php
include_once '../H/rodape.php';
?>
</body>