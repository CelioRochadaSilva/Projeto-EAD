<?php
	require '../persistence/dao_filme.php';
	$daoFilme = new DAOFilme();
	$listaFilmes = $daoFilme->listarFilmes();
	
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
	
	<form action="../controller/incluir_filme.php" method="post">
		<fieldset>
	  		<legend>Novo Filme</legend>
	
	  		<div class="form-group">
	    			<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título">
	  		</div>
	
	  		<div class="form-group">
	    			<input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">  
	  		</div>
	
	  		<div class="form-group">	
	  			<label>Status</label>
			    <select name="status">
					  <option value="Locado">Locado</option>
					  <option value="Disponível">Disponível</option>  
					  <option value="Danificado">Danificado</option>
				</select>
			</div>
	  	
	  		<div class="form-group">	
	  			<label>Gênero</label>
			    <select name="genero">
					  <option value="Drama">Drama</option>
					  <option value="Animação">Animação</option>  
					  <option value="Ação">Ação</option>
					  <option value="Romântico">Romântico</option>
					  <option value="Terror">Terror</option>
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
    		<h2 class="panel-title">Lista de Filmes</h2>
 	 	</div><!-- fim .panel-heading -->
		
		<div class="panel-body">  
  			<table class="table table-hover">
  				<tr>
  						<th>Código</th>
  						<th>Título</th>
  						<th>Gênero</th>
  						<th>Status</th>
  						<th>Valor</th>
  						<th></th>
  				</tr>
  				<?php
  					while ($objetoFilme = array_shift($listaFilmes)) {
  				?>	
    				<tr>
    					<td class="col-md-1"><?php echo $objetoFilme->getCodigo(); ?></td>
    					<td class="col-md-3"><?php echo $objetoFilme->getTitulo(); ?></td>
    					<td class="col-md-1"><?php echo $objetoFilme->getGenero(); ?></td>
    					<td class="col-md-1"><?php echo $objetoFilme->getStatus(); ?></td>
    					<td class="col-md-1"><?php echo "R$ ".$objetoFilme->getValor();?></td>
    					<td class="col-md-1">
    						<a class="btn btn-danger" href="../controller/excluir_filme.php?codigo=<?= $objetoFilme->getCodigo(); ?>" role="button">Excluir</a>  								
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