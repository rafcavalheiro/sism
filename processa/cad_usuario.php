<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
ini_set('default_charset','UTF-8');

$nome 		  = $_POST["nome"];
$email 		  = $_POST["email"];
$login 		  = $_POST["login"];
$senha 		  = $_POST["senha"];
$nivel_acesso = $_POST["nivel_acesso"];

$query = mysql_query ("INSERT  INTO arduino.tabela_usuario (nome, email, login, senha, nivel_acesso, data_cadastro) VALUES ('$nome','$email','$login','$senha','$nivel_acesso', NOW())");
if(mysql_affected_rows() != 0){
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2'>
		<script type=\"text/javascript\">
			alert(\"Usuário cadastrado com sucesso\");
		</script>
	";
	
}else{/*redireciona para a index em caso de usuario invalido*/
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2'>
		<script type=\"text/javascript\">
			alert(\"Usuário ou Senha inválidos\");
		</script>
	";
}
?>