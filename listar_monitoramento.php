<?php

include_once("conexao.php");
include_once("seguranca.php");

$resultado = mysql_query("SELECT * FROM arduino.arduino_consumo ORDER BY 'id'");
$linhas = mysql_num_rows($resultado);
ini_set('default_charset','UTF-8');
?>
    <div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <p style="line-height: 2em"><br></p>
        <h1>Monitoramentos</h1>
      </div>
	  <div class="row">	
	  <div align="left">	 
		<input type="button" class="btn btn-success"" value="Atualizar Valores" onClick="history.go(0)">	 
	  </div>
	  <div align="right">	  
		<a align="right" href='administrativo.php?link=8'><button type='button' class='btn btn-primary'>Filtrar Monitoramento</button></a>	 
	  </div>
		<BR>	  
		<div align="left">
				<?php
					$result = mysql_query('SELECT SUM(ROUND(consumo,4)) AS value_sum FROM arduino_consumo'); 
					$row = mysql_fetch_assoc($result); 
					$sum = $row['value_sum'];
					
					echo "<div class='alert alert-success'><strong>
							<b><th>CONSUMO TOTAL KWH:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			
			<div align="left">
				<?php
					$result = mysql_query('SELECT SUM(ROUND(tarifa,2)) AS value_sum FROM arduino_consumo'); 
					$row = mysql_fetch_assoc($result); 
					$sum = $row['value_sum'];
					
					echo "<div class='alert alert-warning'><strong>
							<b><th>TARIFA TOTAL R$:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			<div align="left">
				<?php
					$result = mysql_query("SELECT TIMESTAMP(data) AS value_sum FROM arduino_consumo"); 
					$aux = mysql_fetch_assoc($result); 
					$sum = $aux['value_sum'];
										
					echo "<div class='alert alert-info'><strong>
							<b><th>MONITORAMENTO INICIADO EM:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			
			<div align="left">
				<?php
					$result = mysql_query("SELECT TIMESTAMP(MAX(data)) AS value_sum FROM arduino_consumo"); 
					$aux = mysql_fetch_assoc($result); 
					$sum = $aux['value_sum'];
										
					echo "<div class='alert alert-danger'><strong>
							<b><th>MONITORAMENTO ENCERRADO EM:</th></b> $sum
							</strong></div>";
				?>
			</div>	
			
		<p style="line-height: 2em"><br></p>	
	  </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-hover">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>                
				<th>POTÊNCIA W</th> 
                <th>CONSUMO KWH</th>     
				<th>TARIFA $</th> 	
				<th>COD EQUIPAMENTO</th>				
				<th>DATA</th>	
				<th>AÇÕES</th>		
              </tr>
            </thead>
            <tbody>			
              <?php
					while($linhas = mysql_fetch_array($resultado)){
						echo "<tr>";
							echo "<td>".$linhas['id']."</td>";
							echo "<td>".$linhas['potencia_w']."</td>";
							echo "<td>".$linhas['consumo']."</td>";
							echo "<td>".$linhas['tarifa']."</td>";
							echo "<td>".$linhas['cod_equipamento']."</td>";
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