<?php
include_once("conexao.php");
include_once("seguranca.php");

$id = $_GET['cod_equipamento'];
$result = mysql_query("SELECT * FROM arduino.tabela_equipamento WHERE cod_equipamento = '$id' LIMIT 1");
$linhas = mysql_fetch_assoc($result);
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
	  <div class="page-header">
	   <BLOCKQUOTE>
			<h1>Dados do Equipamento</h1>
	   </BLOCKQUOTE>
	</div>
	<div class="row">
	  <div class="col-md-2"><b>Cod:</b></div>
	  <div class="col-md-1"><?php echo $linhas['cod_equipamento'];?></div> 
	</div>
	
	<div class="row">
	  <div class="col-md-2"><b>Nome:</b></div>
	  <div class="col-md-2"><?php echo $linhas['nome'];?></div> 
	</div>
	
	<div class="row">
	  <div class="col-md-2"><b>Marca:</b></div>
	  <div class="col-md-1"><?php echo $linhas['descricao'];?></div> 
	</div>	
	
	<div class="row">
	  <div class="col-md-2"><b>Potência:</b></div>
	  <div class="col-md-1"><?php echo $linhas['consumo_kwh'];?></div> 
	</div>
	
	<div class="row">
	  <div class="col-md-2"><b>Voltagem:</b></div>
	  <div class="col-md-1"><?php echo $linhas['voltagem'];?></div> 
	</div>	
	
	<div class="row">
	  <div class="col-md-2"><b>Código do Usuário:</b></div>
	  <div class="col-md-2"><?php echo $linhas['cod_usuario'];?></div> 
	</div>
	
	<div class="row">
	  <div class="col-md-2"><b>Classificação Energética</b></div>
	  <div class="col-md-2"><?php echo $linhas['classificacao_energetica'];?></div> 
	</div>		
	
	<div class="row">
	  <div class="col-md-2"><b>Cadastro em:</b></div>
	  <div class="col-md-2"><?php echo $linhas['data_criacao'];?></div> 
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