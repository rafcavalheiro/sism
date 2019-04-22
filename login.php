<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Integrado a Smart Meter</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="128x128" href="assets/ico/apple-touch-icon-128-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="128x128" href="assets/ico/apple-touch-icon-128-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-64-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
		<?php
				unset(  $_SESSION['UsuarioId'],            		
						$_SESSION['UsuarioNome'],         						
						$_SESSION['UsuarioEmail'],        
						$_SESSION['UsuarioLogin'],       
						$_SESSION['UsuarioSenha'],        
						$_SESSION['UsuarioNivel_Acesso']);			
					
		?>
		
		<!-- Top content -->
        <div class="top-content">        	
            <div class="inner-bg">
			    <div class="container">
					<div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SISM -</strong> SISTEMA INTEGRADO A SMART METER</h1>
                            <div class="description">
                            	
                            </div>
                        </div>
                    </div>
					
					 <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Acesso</h3>
                            		<p>Entre com nome de usuário e senha:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" class="login-form" method="POST" action= "valida_login.php">
											
			                    	<div class="form-group">
			                    		<label class="sr-only" for="usuario">Usuário</label>
			                        	<input type="text" name="usuario" placeholder="Nome..." class="form-control" id="usuario">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="senha">Senha</label>
			                        	<input type="password" name="senha" placeholder="Senha..." class="form-control" id="senha">
			                        </div>			                        
									<button type="submit" class="btn btn-primary">Entrar!</button>	
			                    </form>
								<p class="text-center text-danger"> 
										<?php 
										if(isset($_SESSION['LoginErro'])){
											echo $_SESSION['LoginErro'];
											unset ($_SESSION['LoginErro']);
										}
										?>
										
								</p>								    
		                    </div>
                        </div>
                    </div>
                    					
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>