<?php

ob_start();
if(($_SESSION['UsuarioId'] == "") || ($_SESSION['UsuarioNome'] == "") || ($_SESSION['UsuarioEmail'] == "") || ($_SESSION['UsuarioLogin'] == "") || ($_SESSION['UsuarioSenha'] == "") || ($_SESSION['UsuarioNivel_Acesso'] == "")|| ($_SESSION['UsuarioData_Cadastro'] == "")|| ($_SESSION['UsuarioData_Modificacao'] == "")){
	
	unset($_SESSION['UsuarioId'],          
		  $_SESSION['UsuarioNome'],       
		  $_SESSION['UsuarioEmail'],       
		  $_SESSION['UsuarioLogin'],        
		  $_SESSION['UsuarioSenha'],   
		  $_SESSION['UsuarioNivel_Acesso'],	
		  $_SESSION['UsuarioData_Modificacao'],		  
		  $_SESSION['UsuarioData_Cadastro']);
	
	//Mensagem de erro
	$_SESSION['LoginErro'] = "Area Restrita para usuarios cadastrados";
	
	//Redireciona o usuário para area de login
	header("Location: login.php");
}

?>