<?php
include "conecta_mysql.php";
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$nacionalidade = $_POST['nacionalidade'];
$profissao = $_POST['profissao'];
$contato = $_POST['contato'];
$email = $_POST['email'];
$data_nasc = $_POST['data_nasc'];


$sql = "INSERT INTO paciente (nome,cpf,sexo,endereco,cidade,estado,nacionalidade,profissao,contato,email,data_nasc) 
VALUES('$nome','$cpf','$sexo','$endereco','$cidade','$estado','$nacionalidade','$profissao','$contato','$email','$data_nasc')";
$resultado = mysqli_query($conexao,$sql) or die("Não foi possível executar
a SQL: ".mysqli_error($conexao));

 mysqli_close($conexao);
header("location: home1.php");
?>