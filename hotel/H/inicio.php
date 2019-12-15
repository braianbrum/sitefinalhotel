 
 <?php

include_once '../H/cabecalho.php';
include_once '../class/classPost.php';
$ObjPost= new Post();
$Post= $ObjPost->listarPost();
 

?>

 <section>
    <ul>

                            <?php 
                            
                            
                            foreach($Post as $item){
								?>
							
								<hr>
											<div style="background-color:white;">
										
                                                    POSTADO:<?php echo $item->datadia ?></br>
                                                    hora:<?php echo $item->hora ?> </br></br>
													<img src="../img/<?php echo $item->imagem; ?>" alt=""  width ='400' height='250' style="padding-left:400px;"/>
							</br></br>
													<h1 style="padding-left:30px;"><?php echo $item->texto ?></h1>
														
											
								
								
									
								</div>
</hr>
								<?php
                                
							}
        
							 
?>
                            
                       




<?php include_once '../H/rodape.php'; ?>