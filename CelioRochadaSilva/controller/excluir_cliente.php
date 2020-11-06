<?php
       require '../persistence/dao_cliente.php';
   
   $objetoDao = new DAOCliente();
   $objetoDao->removerCliente($_REQUEST['codigo']);
 	
	header('Location: ../view/view_cliente.php');
	exit;
?>