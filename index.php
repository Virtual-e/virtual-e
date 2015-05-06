<!DOCTYPE html>
<!--
Esse é o unico documento que o usuário vai ter acesso, daqui ele é levado 
para o controle e redirecionado para a index visão, depois de tratado se 
ele esta logado ou não e qual perfil
-->
<?php include './controle/verifica/VerificaClass.php';  ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Virtual-e</title>
    </head>
    <body>
       <?php  
         session_start();
         $_SESSION['logado']=true;//pra teste por enquanto
          
       
       ?>
        <?php  $verifica= new VerificaClass();  $verifica->verificaLogin();  ?>
    </body>
</html>
