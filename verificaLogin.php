<?php
    
    $user = $_POST['user'];
    $senha = $_POST['senha'];

      // conctando ao BD
      include "conecta_mysql.php";

      $encontrou = false;
	  
	  	
      // executando a operação de SQL
      $resultado = mysqli_query($conexao, "SELECT * from usuario WHERE user='$user' AND senha='$senha'") 
      or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
      if($resultado){
          while($row = mysqli_fetch_array($resultado)) {
             if($row["user"] == $user && $row["senha"] == $senha)
             {
                $encontrou = true;
             }
             header ("Location: home.php");
          }
      }

      if(!$encontrou) echo "Erro no login!";
      header("refresh: 3; index.php");
	  
      // fechamento da conexão   
      mysqli_close($conexao);

?>
