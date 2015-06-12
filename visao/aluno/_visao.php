<!DOCTYPE html>
<!--
  Autor:Wesley da Silva pereira
  Data:11/06/2015
-->
 
<?php include '../../include/config/ConfigClass.php';
 include '../../modelo/aluno/AlunoClass.php';
 $Aluno = new AlunoClass();
  $con = new Configuracao();
  $con->conectar();
?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <link href="../../css/bootstrap.css" rel="stylesheet" />
        <link href="../../css/960_12_col.css" rel="stylesheet" />
        <title></title>
    </head>
    <body>
        <br<br>
           <table border="1" id="tabela">
            <tr><td align="center">NOME</td><td align="center">CPF</td><td align="center">RG</td></tr> 
                
          <?php $Aluno->ListarAlunos(); ?>
            
        </table>
            
      
    </body>
</html>
