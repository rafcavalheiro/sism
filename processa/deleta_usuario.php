<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
ini_set('default_charset','UTF-8');

$id = $_GET["cod_usuario"];

$query = mysql_query("DELETE FROM arduino.tabela_usuario WHERE cod_usuario=$id");
if(mysql_affected_rows() != 0){
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2'>
		<script type=\"text/javascript\">
			alert(\"Usuário deletado com sucesso\");
		</script>
	";
	
}else{/*redireciona para a index em caso de usuario invalido*/
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=2>
		<script type=\"text/javascript\">
			alert(\"Usuário ou Senha inválidos\");
		</script>
	";
}
?>