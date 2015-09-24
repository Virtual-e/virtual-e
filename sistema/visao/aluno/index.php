<!DOCTYPE html>
<!--
   Autor:Wesley da Silva Pereira 
   data: 23/09/2015
   view da classe referente ao aluno
-->
<?php include '../../config/ClassConecta.php';
      $conn = new Config();
      $conn->Conecta();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>.::ALUNO::.</title>
    </head>
    <body>
        <?php
            include './frmAluno.php';
        ?>
        
    </body>
</html>
