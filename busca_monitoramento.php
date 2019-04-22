<?php
	//session_start();
	include_once("seguranca.php");
	include_once("conexao.php");
	
	ini_set('default_charset','UTF-8');
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Área de Monitoramento">
    <meta name="author" content="Rafael Cavalheiro">
    <link rel="icon" href="assets/ico/favicon.png">

    <title>SISM - Adminstrador</title>   
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">   
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">   
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">   
    <link href="theme.css" rel="stylesheet">    
    <script src="assets/js/ie-emulation-modes-warning.js"></script>    
  </head>

  <body role="document">

    <div class="container theme-showcase" role="main">
	  <div class="page-header"><br>
	   <p style="line-height: 100%"></p>
        <h1>Pesquisar Monitoramento</h1>
      </div>
	 
	  		 
<div class="alert alert-info">
  <strong>Filtrar Monitoramento.</strong> <p align="justify">Realize busca inserindo o nome de um equipamento monitorado.</p>
</div>
 <br>

      <div class="row">
        <div class="col-md-12">
		<form class="form-horizontal" method ="GET" action = "retorna_monitoramento.php"> 
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Buscar Monitoramento</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="nome" placeholder="Equipamento">
			</div>
		  </div>		 
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Pesquisar</button>
			</div>
		  </div>
		</form>
		</div>
		</div>		  
     </div> <!-- /container -->
	 
	  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
