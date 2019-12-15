<?php
include_once '../H/cabecalho.php';


include_once '../class/classCliente.php';
$ObjClientes= new Cliente();
$id = $_GET['id'];
$retorno = $ObjClientes->retornarUnicoCliente($id);





?>
<body  style="background-color:#d0d2e2;">
<div style="background-color:white;">
<form action="editarOKcliente.php" method="POST"  style="padding-left:200px;" >
    <h1  style="padding-left:400px;">EDITAR CLIENTE</h1>

Nome:<input type="text"  name='nome' value="<?php echo $retorno->nome; ?>"/></br>
Sobrenome:<input type="text" name='sobrenome' value="<?php echo $retorno->sobrenome;?>"/></br>
Email:<input type="email" name='email' value="<?php echo $retorno->email; ?>"/></br>
Senha:<input type="password" name="senha" value="<?php echo $retorno->senha;?>"/></br>
Telefone:<input type="number" name="telefone" value="<?php echo $retorno->telefone;?>"/></br>
Endereco:<input type="text" name="endereco" value="<?php echo $retorno->endereco;?>"/></br>
Cidade:<input type="text" name="cidade" value="<?php echo $retorno->cidade;?>"/></br>
Documento de Indetificacao:<input type="number" name="doc_identificacao" value="<?php echo $retorno->doc_identificacao;?>"/></br>
 
 <input type='hidden' name='id_cliente' value="<?php echo $retorno->id_cliente;?>"/></br>

 <input type="submit" value='editar Cliente'/>

</form>
</br></br></br></br>
</div>
</body>

<?php
include_once '../H/rodape.php';
?>


