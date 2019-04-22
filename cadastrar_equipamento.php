    <div class="container theme-showcase" role="main">
	  <div class="page-header">
	  <p style="line-height: 0.15em"><br></p>	
	  <p style="min-width:50%"></p>  
	<h2>Cadastrar Equipamento</h2><br>	
		 
<div class="alert alert-info">
  <strong>Antes de iniciar um monitormamento!</strong> <p align="justify">Cadastre o equipamento que deseja monitorar. Após o cadastro informe o código do equipamento gerado na IDE do Arduino.</p>
</div>


      </div>
      <div class="row">
        <div class="col-md-12">
		<form class="form-horizontal" method ="POST" action = "processa/proc_cad_equipamento.php">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Equipamento</label>
			<div class="col-sm-2">
			  <input type="text" class="form-control" name="nome" placeholder="Nome">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Descrição</label>
			<div class="col-sm-2">
			  <input type="text" class="form-control" name="descricao" placeholder="Fornecedor - Modelo">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Potência em W</label>
			<div class="col-sm-2">
			  <input type="text" class="form-control" name="consumo_kwh" placeholder="Consumo kWh">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Voltagem</label>
			<div class="col-sm-2">
			  <input type="text" class="form-control" name="voltagem" placeholder="Voltagem V">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Classificação Energética</label>
			<div class="col-sm-2">
			<select class="form-control" name = "classificacao_energetica">
				  <option name = "A">A</option>
				  <option name = "B">B</option>
				  <option name = "C">C</option>
				  <option name = "D">D</option>
				  <option name = "E">E</option>
			</select>
			</div>
		  </div>
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">	
			  <div align="right"><button type='submit' class='btn btn-success btn-lg'>Cadastrar</button></div>			  
			</div>
		  </div>
		</form>
		</div>
		</div>		  
     </div> <!-- /container -->