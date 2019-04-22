<?php
	session_start();
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

    <title>SISM - Usuário</title>   
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">   
    <link href="assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">   
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">   
    <link href="theme.css" rel="stylesheet">    
    <script src="assets/js/ie-emulation-modes-warning.js"></script>    
  </head>

  <body role="document">
  
   <?php 
    include_once("menu_usuario.php");
        // se a variavel nao for definida
	if(isset ($_GET['link']) == ''){
			require_once ("bem_vindo.php"); // inclua a pagina0.php
		}else{
			$link = $_GET['link']; // inclua a variavel $link
		
	$link = $_GET["link"]; // recebendo a variavel ($link) que vem da url
	
	 // array das paginas
	$pagina[1] 	= "bem_vindo.php";	
	$pagina[7] 	= "listar_monitoramento.php"; //Cuidado com a numeração do array de páginas
	$pagina[8] 	= "busca_monitoramento.php";
	$pagina[9] 	= "cadastrar_equipamento.php";
	$pagina[10] = "visualiza_equipamento.php";
	$pagina[11] = "plota_grafico.html";
	$pagina[12] = "listar_equipamento.php";
	
		
	if (!empty ($link)) // se a variavel link nao estiver vazia
	{
		if (file_exists($pagina[$link])) //se o arquivo existir
		{
			require_once $pagina[$link]; // inclua o arquivo
		}else{
			require_once ("bem_vindo.php"); // senao inclua o pagina0.php
		}
		
	}else{
		require_once ("bem_vindo.php");
	}
		
	}
  ?>


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

