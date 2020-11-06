<?php

	require '../persistence/dao_locacao.php';
  require '../persistence/dao_filme.php';
  require '../persistence/dao_cliente.php';
	$daoLocacao = new DAOLocacao();
  $daoFilme = new DAOFilme();
  $daoCliente = new DAOCliente();
	$listaLocacoes = $daoLocacao->listarLocacoes();
  $listaFilmes = $daoFilme->listarFilmesDisponivel();
  $listaClientes = $daoCliente->listarClientes();
	
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>Locadora</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  
  <body>
 	<nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          	<a class="navbar-brand" href="../index.php">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
          <ul class="nav navbar-nav">
            <li class="active"><a href="view_filme.php">Filmes</a></li>
            <li><a href="view_cliente.php">Clientes</a></li>
            <li><a href="view_locacao.php">Locações</a></li>
            <li><a href="view_celiorocha.php">Celio Rocha</a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav>
    
<div class="jumbotron" style="background-image:url('red.jpeg'); color: #FFFFFF;">
  	<div class="container" >  
		<h1>Locadora de Filmes</h1>
	</div><!-- fim .container dentro do jumbotron -->
</div><!-- fim .jumbotron -->


<div class="container">
	
	<form action="../controller/incluir_locacao.php" method="post">
		<fieldset>
	  		<legend>Nova Locação</legend>
	
	  		<div class="form-group">
          <label>Data de Locação</label>
	    			<input type="text" value="<?php $data = date('d/m/Y'); echo $data; ?>" class="form-control" id="datalocacao" name="datalocacao" placeholder="dd/mm/aaaa">
	  		</div>
	
	  		<div class="form-group">
          <label>Data de Devolução</label>
	    			<input type="date" class="form-control" id="datadevolucao" name="datadevolucao" placeholder="dd/mm/aaaa">  
	  		</div> 

	  		<div class="form-group">	
	  			<label>Filme</label>
			    <select name="filme">
          <option value="selecionar">Selecionar</option>  
          <?php
            while ($objetoFilme = array_shift($listaFilmes)) {
          ?>  				
            <option value='<?= $objetoFilme->getTitulo(); ?>'<?= $objetoFilme->getTitulo() == $objetoFilme->getTitulo() ? "selected" : ""?> ><?= $objetoFilme->getTitulo(); ?></option>
					  <?php 
            }
            ?>
  				</select>
  			</div> 	  		

          <div class="form-group">  
         <label>Cliente</label>
          <select name="cliente">
          <option value="selecionar">Selecionar</option>  
          <?php
            while ($objetoCliente = array_shift($listaClientes)) {
          ?>  

            <option value='<?= $objetoCliente->getNome(); ?>'<?= $objetoCliente->getNome() == $objetoCliente->getNome() ? "selected" : ""?> ><?= $objetoCliente->getNome(); ?></option>
            <?php 
            }
            ?>
          </select>
        </div>
	  
	  		<button type="submit" class="btn btn-primary">
	  				<span class="glyphicon glyphicon-thumbs-up"></span>
	  				Cadastrar
			</button>
		</fieldset>  
	</form> 			
</div> <!-- fim .container 1 --> 

<div class="container">
 	<br /> <br /> 
</div> <!-- fim .container 2 -->
	
	
<div class="container">
  <div class="panel panel-default">
  		<div class="panel-heading">
    		<h2 class="panel-title">Lista das Locações</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Data da Locaçao</th>
  						<th>Data da Devolução</th>
  						<th>Filme</th>
  						<th>Cliente</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoLocacao = array_shift($listaLocacoes)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoLocacao->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo date('d/m/Y',strtotime($objetoLocacao->getDataLocacao())); ?></td>
    					<td class="col-md-1"><?php echo date('d/m/Y',strtotime($objetoLocacao->getDataDevolucao())); ?></td>
    					<td class="col-md-1"><?php echo $objetoLocacao->getFilme(); ?></td>
    					<td class="col-md-1"><?php echo $objetoLocacao->getCliente();?></td>
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_locacao.php?codigo=<?= $objetoLocacao->getCodigo(); ?>" role="button">Excluir</a>  								
    					</td>
    				</tr>
    			<?php
					}
    			?>
    				
    			</table>
    			
 		</div><!-- fim .panel-body -->
	</div><!-- fim .panel -->
</div><!-- fim .container 3 -->

    </body>
</html>