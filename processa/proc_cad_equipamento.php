<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
ini_set('default_charset','UTF-8');

$nome 		  			  = $_POST["nome"];
$descricao 		          = $_POST["descricao"];
$consumo_kwh		      = $_POST["consumo_kwh"];
$voltagem		          = $_POST["voltagem"];
$classificacao_energetica = $_POST["classificacao_energetica"];
$cod_usuario = $_SESSION['UsuarioId']; 




$query = mysql_query ("INSERT  INTO arduino.tabela_equipamento (nome, descricao, consumo_kwh, voltagem, classificacao_energetica,cod_usuario,data_criacao) 
VALUES ('$nome','$descricao','$consumo_kwh','$voltagem','$classificacao_energetica',$cod_usuario,NOW())");

if(mysql_affected_rows() != 0){
	
	if($_SESSION['UsuarioNivel_Acesso'] == 1 ){
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=12'>
		<script type=\"text/javascript\">
			alert(\"Equipamento cadastrado com sucesso\");
		</script>
	    ";
	}else{
		echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/usuario.php?link=12'>
		<script type=\"text/javascript\">
			alert(\"Equipamento cadastrado com sucesso\");
		</script>
	    ";
	}
	
	
}else{/*redireciona para a index em caso de usuario invalido*/
	
	echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
		http://localhost/sism/adm/administrativo.php?link=7'>
		<script type=\"text/javascript\">
			alert(\"Ocorreu um erro - Tente novamente\");
		</script>
	";
}
?>