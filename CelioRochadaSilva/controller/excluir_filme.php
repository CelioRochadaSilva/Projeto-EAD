<?php
       require '../persistence/dao_filme.php';
   
   $objetoDao = new DAOFilme();
   $objetoDao->removerFilme($_REQUEST['codigo']);
 	
	header('Location: ../view/view_filme.php');
	exit;
?>