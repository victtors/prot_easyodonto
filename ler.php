<?php
 // conctando ao BD
 include "conecta_mysql.php";

 // executando a operação de SQL
 $resultado = mysqli_query($conexao, "SELECT * FROM paciente");

 if($resultado){
 while($row = mysqli_fetch_array($resultado) ){
 echo $row["id"]." - ".$row["nome"]." - ".$row["cpf"]."<br/>";
 }
 }
 // fechamento da conexão
 mysqli_close($conexao);
?>


              <form method='POST' action='ler.php'>
                <?php
                  include "ler.php";
                ?>
              </form>