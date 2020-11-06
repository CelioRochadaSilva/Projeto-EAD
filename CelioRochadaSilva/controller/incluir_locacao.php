<?php
   require '../persistence/dao_locacao.php';
   
   $objetoLocacao = new Locacao();
   $objetoLocacao->setDataLocacao($_REQUEST['datalocacao']);
   $objetoLocacao->setDataDevolucao($_REQUEST['datadevolucao']);
   $objetoLocacao->setFilme($_REQUEST['filme']);
   $objetoLocacao->setCliente($_REQUEST['cliente']);
   
   $dao = new DAOLocacao();
   $dao->cadastrarLocacao($objetoLocacao); 
 	
	header('Location: ../view/view_locacao.php');
	exit;
?>