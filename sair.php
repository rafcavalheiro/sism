<?php

Session_Start();
Session_Destroy();

//Remove todas as informações das variavéis globais
unset($_SESSION['UsuarioId'],          
				$_SESSION['UsuarioNome'],       
				$_SESSION['UsuarioEmail'],       
				$_SESSION['UsuarioLogin'],        
				$_SESSION['UsuarioSenha'],       
				$_SESSION['UsuarioData_Cadastro']);
				
//Redireciona o usuário para area de login
	header("Location: login.php");
?>