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
        <script type="text/javascript" src="../administracao/adminAjax.js"> </script>
        <title></title>
    </head>
    <body>
        <br><br>
            <button style="color: black; font-weight: 200; margin-left: 30px; " >CADASTRAR</button>&nbsp;
         
  
           <table border="1" id="tabela">
            <tr><td align="center">NOME</td><td align="center">CPF</td><td align="center">RG</td>
            <td align="center">NASCIMENTO</td><td align="center">MÃE</td><td align="center">PAI</td>
            <td align="center">E-MAIL</td>
            </tr> 
          <?php sleep(3); ?>      
          <?php $Aluno->ListarAlunos(); ?>
             
        </table>
            
      
    </body>
</html>
