<?php
include "conecta_mysql.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];


$sql = "SELECT * FROM paciente WHERE nome='$nome' or cpf='cpf'";

$resultado = mysqli_query($conexao,$sql) or die("Não foi possível
executar a SQL: ".mysqli_error($conexao));

	$row = mysqli_fetch_array($resultado);
	echo $row;

mysqli_close($conexao);
?>