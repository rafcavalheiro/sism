<?php
	session_start();
	include_once("conexao.php");
	include_once("seguranca.php");
	$equipamento = $_GET['nome'];
	
	//Executa consulta
	$resultado = mysql_query("SELECT * FROM arduino_consumo INNER JOIN tabela_equipamento ON arduino_consumo.cod_equipamento = tabela_equipamento.cod_equipamento WHERE nome = '$equipamento'");
	$linhas = mysql_num_rows($resultado);
	ini_set('default_charset','UTF-8');
?>
<!-- Inicio navbar -->
<br>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		
	  </button>
	  <a class="navbar-brand" href="administrativo.php">SISM</a>	  
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Monitoramentos<span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=7">Listar Monitoramento</a></li>
			<li><a href="administrativo.php?link=8">Pesquisar Monitoramento</a></li>
			<li><a href="administrativo.php?link=9">Cadastrar Equipamento</a></li>
			<li><a href="administrativo.php?link=11">Gerar Gráficos</a></li>
			<li><a href="administrativo.php?link=12">Listar Equipamentos</a></li>
			</ul>
		</li>				
	  </ul>	
 <p style="line-height: 0.15em"><br></p>	  
	  <div align="right">	 	
			    <a href='sair.php'><button type='button' class='btn btn-danger'>Sair</button></a>					 
		</div>		  
	</div><!--/.nav-collapse -->	
  </div>
</nav>
<!-- Fim navbar -->
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
    
	<div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <p style="line-height: 100%"></p>
        <h1>Monitoramentos</h1>
      </div>	  
	  <div align="left">	 
		<input type="button" class="btn btn-success"" value="Atualizar Valores" onClick="history.go(0)">	 
	  </div>
	  <div class="row">	   
		<div align="right">	 	
			    <a href='administrativo.php?link=8'><button type='button' class='btn btn-primary'>Pesquisar Monitoramento</button></a>									
		</div>
	  </div>
	  <br>
	  <div align="left">
						<?php
							$result = mysql_query("SELECT SUM(ROUND(consumo,4)) AS value_sum FROM arduino_consumo INNER JOIN tabela_equipamento ON arduino_consumo.cod_equipamento = tabela_equipamento.cod_equipamento WHERE nome = '$equipamento'"); 
							$row = mysql_fetch_assoc($result); 
							$sum = $row['value_sum'];
							
							echo "<div class='alert alert-info'><strong>
							<b><th>EQUIPAMENTO: $equipamento</th></b><br>						
							<b><th>CONSUMO TOTAL KWH:</th></b> $sum
							</strong></div>";
						?>
					</div>						
			<div align="left">
				<?php
					$result = mysql_query("SELECT SUM(ROUND(tarifa,2)) AS value_sum FROM arduino_consumo INNER JOIN tabela_equipamento ON arduino_consumo.cod_equipamento = tabela_equipamento.cod_equipamento WHERE nome = '$equipamento'"); 
					$row = mysql_fetch_assoc($result); 
					$sum = $row['value_sum'];
					
					echo "<div class='alert alert-warning'><strong>
							<b><th>TARIFA TOTAL R$:</th></b> $sum
							</strong></div>";
					
				?>
			</div>	
			<div align="left">
				<?php
					$result = mysql_query("SELECT TIMESTAMP(data) AS value_sum FROM arduino_consumo INNER JOIN tabela_equipamento ON arduino_consumo.cod_equipamento = tabela_equipamento.cod_equipamento WHERE nome = '$equipamento'"); 
					$row = mysql_fetch_assoc($result); 
					$sum = $row['value_sum'];
					
					echo "<div class='alert alert-info'><strong>
							<b><th>MONIORAMENTO INCIADO EM:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			<div align="left">
				<?php
					$result = mysql_query("SELECT TIMESTAMP(MAX(data)) AS value_sum FROM arduino_consumo INNER JOIN tabela_equipamento ON arduino_consumo.cod_equipamento = tabela_equipamento.cod_equipamento WHERE nome = '$equipamento'"); 
					$aux = mysql_fetch_assoc($result); 
					$sum = $aux['value_sum'];
										
					echo "<div class='alert alert-danger'><strong>
							<b><th>MONITORAMENTO ENCERRADO EM:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			<br>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>COD_EQUIPAMENTO</th>
                <th>CONSUMO</th>  
				<th>TARIFA</th>				
				<th>DATA</th>	
				<th>AÇÕES</th>		
              </tr>
            </thead>
            <tbody>			
              <?php
					while($linhas = mysql_fetch_array($resultado)){
						echo "<tr>";
							echo "<td>".$linhas['id']."</td>";
							echo "<td>".$linhas['cod_equipamento']."</td>";
							echo "<td>".$linhas['consumo']."</td>";
							echo "<td>".$linhas['tarifa']."</td>";
							echo "<td>".$linhas['data']."</td>";												
			   ?> 
			   <td> <a href='administrativo.php?link=10&cod_equipamento=<?php echo $linhas['cod_equipamento']; ?>'><button type='button' class='btn btn-sm btn-info'>Ver Equipamento</button></a>							
				       
						<?php
						echo "</tr>";
					}
						?>	
            </tbody>  
		</table>			
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