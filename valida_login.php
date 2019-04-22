<?php

session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
include_once("conexao.php");
include_once("seguranca.php");

$result = mysql_query("SELECT * FROM arduino.tabela_usuario WHERE login= '$usuariot' AND senha='$senhat' LIMIT 1");

$resultado = mysql_fetch_assoc($result);
if(empty($resultado)){
	
	//Mensagem de erro
	$_SESSION['LoginErro'] = "Usuário ou senha inválidos";
	
	//Retorna para página de login
	header("Location: login.php");
}else{	
	//Define valores atribuidoos ao usuario	
	$_SESSION['UsuarioId']            = $resultado['cod_usuario'];	
	$_SESSION['UsuarioNome']          = $resultado['nome'];
	$_SESSION['UsuarioEmail']         = $resultado['email'];
	$_SESSION['UsuarioLogin']         = $resultado['login'];
	$_SESSION['UsuarioSenha']         = $resultado['senha'];
	$_SESSION['UsuarioNivel_Acesso']  = $resultado['nivel_acesso'];
	$_SESSION['UsuarioData_Cadastro'] = $resultado['data_cadastro'];
	$_SESSION['UsuarioData_Modificacao'] = $resultado['data_modificacao'];
	
	if($_SESSION['UsuarioNivel_Acesso'] == 1 ){
		
		header("Location: administrativo.php");	
		
	}else{
		
		header("Location: usuario.php");
	}	
}	
		
?>

