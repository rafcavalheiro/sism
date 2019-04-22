<!-- Inicio navbar -->
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
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuários<span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="administrativo.php?link=2">Listar</a></li>
			<li><a href="administrativo.php?link=3">Cadastrar</a></li>
			</ul>
		</li>
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