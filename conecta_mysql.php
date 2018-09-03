<?php
 // abrir conexao e selecionar o banco de dados
 $conexao = mysqli_connect("127.0.0.1:3306","root","","teste_tcc2");

 // tratamento de erros
 if (mysqli_connect_errno())
 {
 echo "Não foi possível conectar: " . mysqli_connect_error();
 }
?>