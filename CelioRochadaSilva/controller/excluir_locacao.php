<?php
       require '../persistence/dao_locacao.php';
   
   $objetoDao = new DAOLocacao();
   $objetoDao->removerLocacao($_REQUEST['codigo']);
 	
	header('Location: ../view/view_locacao.php');
	exit;
?>