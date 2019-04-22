<?php
include_once("conexao.php");
include_once("seguranca.php");

	$id = $_GET['cod_usuario'];
	//Executa consulta
	$result = mysql_query("SELECT *FROM arduino.tabela_usuario WHERE cod_usuario = '$id' LIMIT 1");
	$resultado = mysql_fetch_assoc($result);
	ini_set('default_charset','UTF-8');
?>
	<div class="container theme-showcase" role="main">
	  <div class="page-header">
	   <BLOCKQUOTE>
			<h1>Visualizar Usuário</h1>
	   </BLOCKQUOTE>
      </div>
	  
	  <div class="row">	   
		<div align="right">	 	
			    <a href='administrativo.php?link=2&cod_usuario=<?php echo $resultado['cod_usuario']; ?>'><button type='button' class='btn btn-primary'>Listar</button></a>
				<a href='administrativo.php?link=4&cod_usuario=<?php echo $resultado['cod_usuario']; ?>'><button type='button' class='btn btn-success'>Editar</button></a>
				<a href='administrativo.php?link=6&cod_usuario=<?php echo $resultado['cod_usuario']; ?>'><button type='button' class='btn btn-warning'>Deletar</button></a>		 
		</div>
	  </div>
	  
      <div class="row">	  
			<div class="col-md-12">
				<div class= "col-xs-3 col-sm-1 col-md-1">
					<b>Id:</b>
				</div>
				<div class= "col-xs-9 col-sm-11 col-md-11">
					<?php echo $resultado['cod_usuario'];?>
				</div>
				
				<div class= "col-xs-3 col-sm-1 col-md-1">
					<b>Nome:</b>
				</div>
				<div class= "col-xs-9 col-sm-11 col-md-11">
					<?php echo $resultado['nome'];?>
				</div>
				
				<div class= "col-xs-3 col-sm-1 col-md-1">
					<b>E-mail:</b>
				</div>
				<div class= "col-xs-9 col-sm-11 col-md-11">
					<?php echo $resultado['email'];?>
				</div>
				
				<div class= "col-xs-3 col-sm-1 col-md-1">
					<b>Usuário:</b>
				</div>
				<div class= "col-xs-9 col-sm-11 col-md-11">
					<?php echo $resultado['login'];?>
				</div>
				
				<div class= "col-xs-3 col-sm-1 col-md-1">
					<b>Nivel de Acesso:</b>
				</div>
				<div class= "col-xs-9 col-sm-11 col-md-11">
					<?php echo $resultado['nivel_acesso'];?>
				</div>
			</div>
		</div>		  
     </div> <!-- /container -->
	 