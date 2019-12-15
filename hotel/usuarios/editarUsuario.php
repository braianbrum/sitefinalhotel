<?php

include_once '../A/cabecalho.php';




include_once '../class/classUsuario.php';
$ObjUsuarios= new Usuario();
$id = $_GET['id'];
$retorno = $ObjUsuarios->retornarUnicoUsuario($id);






?>

<form action='editarOKusuario.php' method='POST'>

Nome:<input type="text"  name='nome' value="<?php echo $retorno->nome; ?>"/></br>
Sobrenome:<input type="text" name='sobrenome' value="<?php echo $retorno->sobrenome;?>"/></br>
Email:<input type="email" name='email' value="<?php echo $retorno->email; ?>"/></br>
Senha:<input type="password" name="senha" value="<?php echo $retorno->senha;?>"/></br>
Telefone:<input type="number" name="telefone" value="<?php echo $retorno->telefone;?>"/></br>
Endereco:<input type="text" name="endereco" value="<?php echo $retorno->endereco;?>"/></br>
Cidade:<input type="text" name="cidade" value="<?php echo $retorno->cidade;?>"/></br>
Documento de Indetificacao:<input type="number" name="doc_identificacao" value="<?php echo $retorno->doc_identificacao;?>"/></br>
 
 <input type='hidden' name='id_usuario' value="<?php echo $retorno->id_usuario;?>"/></br>

 <input type="submit" value='editar Usuario'/>

</form>

<?php
include_once '../H/rodape.php';
?>