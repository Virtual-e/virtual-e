<!DOCTYPE html>
<!--
  Autor:Wesley da silva Pereira
  Data:08/06/2015
-->

<?php include '../../modelo/endereco/EnderecoClass.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../../controle/AlunoControle.php" method="post">
           Nome:<input type="text"  name="alu_nome">
            Data nascimento:<input type="text" name="alu_nasci">
            RG:<input type="text" name="alu_rg"><br>
            Cpf:<input type="text" name="alu_cpf">
            data Cadastro:<input type="text" name="alu_cadas">
            nome Mae:<input type="text"  name="alu_mae">
            nome Pai:<input type="text"  name="alu_pae">
            email:<input type="text" name="alu_email"><br>
            telefone:<input type="text" name="alu_telefone">
            telefone2:<input type="text" name="alu_telefone1">
            <input type="hidden" name="alu_ativo" value="1">
            endereo<input type="number" name="id_endereco">
            <input type="hidden" name="acao" value="cadastrar">
            <input type="submit">
        </form>
        <?php $end= new EnderecoClass();  
       
        
          
        ?>
    </body>
</html>
 