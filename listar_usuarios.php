<?php
$resultado = mysql_query("SELECT * FROM arduino.tabela_usuario ORDER BY 'id'");
$linhas = mysql_num_rows($resultado);
ini_set('default_charset','UTF-8');
?>
    <div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <p style="line-height: 100%"></p>
	  <p style="line-height: 2em"><br></p>
        <h1>Lista de Usuarios</h1>
      </div>
	  <div class="row">	   
		<div align="right">	 	
			    <a href='administrativo.php?link=3&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-success'>Cadastrar</button></a>					 
		</div>
	  </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>E-MAIL</th>
                <th>LOGIN</th>
				<th>SENHA</th>
				<th>NIVEL DE ACESSO</th>
				<th>DATA DO CADASTRO</th>
				<th>DATA DE MODIFICAÇÃO</th>
				<th>AÇÕES</th>
              </tr>
            </thead>
            <tbody>			
              <?php
					while($linhas = mysql_fetch_array($resultado)){
						echo "<tr>";
							echo "<td>".$linhas['cod_usuario']."</td>";
							echo "<td>".$linhas['nome']."</td>";
							echo "<td>".$linhas['email']."</td>";
							echo "<td>".$linhas['login']."</td>";
							echo "<td>".$linhas['senha']."</td>";
							echo "<td>".$linhas['nivel_acesso']."</td>";
							echo "<td>".$linhas['data_cadastro']."</td>";
							echo "<td>".$linhas['data_modificacao']."</td>";
							
			   ?> <td> <a href='administrativo.php?link=5&cod_usuario=<?php echo $linhas['cod_usuario']; ?>'><button type='button' class='btn btn-sm btn-info'>Visualizar</button></a>
							
				       <a href='administrativo.php?link=4&cod_usuario=<?php echo $linhas['cod_usuario']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
							 
					   <a href='processa/deleta_usuario.php?cod_usuario=<?php echo $linhas['cod_usuario']; ?>'><button type='button' class='btn btn-sm btn-danger'>Deletar</button></a>
						<?php
						echo "</tr>";
					}
						?>			
            </tbody>  
		</table>			
        </div>
      </div>	  
     </div> <!-- /container -->