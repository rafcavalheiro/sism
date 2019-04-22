<?php

include_once("conexao.php");
include_once("seguranca.php");

$resultado = mysql_query("SELECT * FROM arduino.tabela_equipamento ORDER BY 'cod_equipamento'");
$linhas = mysql_num_rows($resultado);
ini_set('default_charset','UTF-8');
?>
    <div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <p style="line-height: 2em"><br></p>
        <h1>Equipamentos</h1>
      </div>
	  <div class="row">	
	  <div align="right">
		<a align="right" href='administrativo.php?link=8'><button type='button' class='btn btn-primary'>Pesquisar Monitoramento</button></a>	 
	  </div>
			
		<p style="line-height: 2em"><br></p>	
	  </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table  table-hover">
            <thead>
              <tr>
                <th>COD</th>                
				<th>NOME</th> 
                <th>DESCRIÇÃO</th>     
				<th>CONSUMO KWH</th> 	
				<th>VOLTAGEM</th>				
				<th>CLASS. ENERGÉTICA</th>	
				<th>COD_USUÁRIO</th>	
				<th>DATA CRIAÇÃO</th>				
              </tr>
            </thead>
            <tbody>			
              <?php
					while($linhas = mysql_fetch_array($resultado)){
						echo "<tr>";
							echo "<td>".$linhas['cod_equipamento']."</td>";
							echo "<td>".$linhas['nome']."</td>";
							echo "<td>".$linhas['descricao']."</td>";
							echo "<td>".$linhas['consumo_kwh']."</td>";
							echo "<td>".$linhas['voltagem']."</td>";
							echo "<td>".$linhas['classificacao_energetica']."</td>";	
							echo "<td>".$linhas['cod_usuario']."</td>";	
							echo "<td>".$linhas['data_criacao']."</td>";		
			   ?> 
			   <td> <a href='administrativo.php?link=13'><button type='button' class='btn btn-info'>Ver Monitoramento</button></a>							
				       
						<?php
						echo "</tr>";
					}
						?>	
            </tbody>  
		</table>			
        </div>
      </div>	  
     </div> <!-- /container -->