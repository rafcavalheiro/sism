<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
ini_set('default_charset','UTF-8');

$id 		  = $_POST["cod_usuario"];
$nome 		  = $_POST["nome"];
$email 		  = $_POST["email"];
$login 		  = $_POST["login"];
$senha 		  = $_POST["senha"];
$nivel_acesso = $_POST["nivel_acesso"];

$query = mysql_query ("UPDATE  arduino.tabela_usuario set nome ='$nome', email = '$email', login ='$login', senha = $senha, nivel_acesso = '$nivel_acesso', data_modificacao = NOW() WHERE cod_usuario = '$id'");
if(mysql_affected_rows() != 0){
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2.php'>
		<script type=\"text/javascript\">
			alert(\"Alterações realizadas com sucesso\");
		</script>
	";
	
}else{/*redireciona para a index em caso de usuario invalido*/
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2.php'>
		<script type=\"text/javascript\">
			alert(\"Erro: Alterações não foram salvas\");
		</script>
	";
}
?>