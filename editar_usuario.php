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
	   <p style="line-height: 100%"></p>
	   <br>
        <h1>Editar Usuário</h1>
      </div>
      <div class="row">
        <div class="col-md-12">
		<form class="form-horizontal" method ="POST" action = "processa/edit_usuario.php">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="nome" placeholder="Nome Completo" value="<?php echo $resultado['nome']; ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-4">
			  <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?php echo $resultado['email']; ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuário</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="login" placeholder="Usuário" value="<?php echo $resultado['login']; ?>">
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-4">
			  <input type="text" class="form-control" name="senha" placeholder="Senha"> 
			</div>
		  </div>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Nivel de acesso</label>
			<div class="col-sm-4">
			<select class="form-control" name = "nivel_acesso">
				  <option>Selecione</option>
				  <option value = "1"
				  <?php
						if($resultado['nivel_acesso'] ==1){
							echo 'selected';
						}
				  ?>
				  >Adminstrador</option>
				  <option value = "2"
				  <?php
						if($resultado['nivel_acesso'] ==2){
							echo 'selected';
						}
				  ?>
				  >Usuário</option>
			</select>
			</div>
		  </div>
		  
		  <input type="hidden" name="id" value="<?php echo $resultado['cod_usuario'];?>"> 
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
		</div>
		</div>		  
     </div> <!-- /container -->