<?php
   require '../persistence/dao_filme.php';
   
   $objetoFilme = new Filme();
   $objetoFilme->setTitulo($_REQUEST['titulo']);
   $objetoFilme->setGenero($_REQUEST['genero']);
   $objetoFilme->setValor($_REQUEST['valor']);
   $objetoFilme->setStatus($_REQUEST['status']);
   
   $dao = new DAOFilme();
   $dao->cadastrarFilme($objetoFilme); 
 	
	header('Location: ../view/view_filme.php');
	exit;
?>