<?php
   require '../persistence/dao_cliente.php';
   
   $objetoCliente = new Cliente();
   $objetoCliente->setNome($_REQUEST['nome']);
   $objetoCliente->setCpf($_REQUEST['cpf']);
   $objetoCliente->setEmail($_REQUEST['email']);
   $objetoCliente->setEndereco($_REQUEST['endereco']);
   
   $dao = new DAOCliente();
   $dao->cadastrarCliente($objetoCliente); 
 	
	header('Location: ../view/view_cliente.php');
	exit;
?>