<?php
include_once '../A/cabecalho.html';
?>
<body style="background-color:#d0d2e2;">
<br>
<br>
    <table class="11" border="1" style="background-color: white;padding:30px;" >
<tr>
    <th id="cliente"style="background-color:skyblue"><img src="../img/cliente.png" height="200px" width="200px"><h1>CLIENTES</h1></img></th>
    <th id="usuario" style="background-color:green"><img src="../img/usuario.png"  height="200px" width="200px"><h1>USUÁRIO</h1></img></th>
    <th id="post" style="background-color:greenyellow"><img src="../img/mouse.png"  height="200px" width="200px"><h1>POSTAGENS</h1></img></th>
    <th id="quarto" style="background-color:orange"><img src="../img/quarto.png"  height="200px" width="200px"><h1>QUARTOS</h1></img></th>
    <th id="reserva" style="background-color:brown"><img src="../img/reserva.jpg"  height="200px" width="200px"><h1>RESERVAS</h1></img></th>
    <th id="login" style="background-color:grey"><img src="../img/login.png"  height="200px" width="200px"><h1>LOGIN</h1></img></th>
                                
    


</tr>
<td class="cliente" style="background-color:skyblue;"><a href="../clientes/AddCliente.php" style="text-decoration:none;color:black;"class="1">CADASTRE UM CLIENTE</a></td>
<td class="usuario"style="background-color:green;"><a href="../usuarios/AddUsuario.php" style="text-decoration:none;color:black;"class="2">CADASTRE-SE</a></td>
<td class="post" style="background-color:greenyellow"><a href="../Post/AddPost.php" style="text-decoration:none;color:black;" class="3">FAZER POSTAGEM</a></td>
<td class="quarto" style="background-color:orange;"><a href="../Quarto/AddQuarto.php" style="text-decoration:none;color:black;" class="4">CADASTAR QUARTO</a></td>
<td class="reserva" style="background-color:brown;"><a href="../reservas/AddReserva.php" style="text-decoration:none;color:black;"class="5">VIZUALIZAR RESERVAS</a></td>
<td class="login " style="background-color:grey;"><a href="../Login/editarlogin.php" style="text-decoration:none;color:black;"class="6">EDITAR PERFIL</a></td></tr>


</tr>
<td class="cliente" style="background-color:skyblue;"><a href="../clientes/listarCliente.php" style="text-decoration:none;color:black;"class="1" class="1">TODOS OS CLIENTES</a></td>
<td class="usuario" style="background-color:green;"><a href="../Login/Login.php" style="text-decoration:none;color:black;"class="2">LOGIN</a></td>
<td class="post" style="background-color:greenyellow;"><a href="../post/listarPost.php" style="text-decoration:none;color:black;" class="3">TODAS AS POSTAGENS</a></td>
<td class="quarto"style="background-color:orange;"><a href="../quartos/editarQuarto.php" style="text-decoration:none;color:black;" class="4">EDITAR QUARTO</a></td></tr>










</table>	
<br>
<br>
<script type="text/javascript" src="../lib/jquery.v3.4.1.min.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>				
</body>
<?php
include_once '../H/rodape.php';
?>