<!DOCTYPE html>
<!--
   Autor:Wesley da Silva Pereira 
   data: 23/09/2015
   view da classe referente ao aluno
-->
<?php include '../../config/ClassConecta.php';    
   $connectar=new Config();
   $connectar->Conecta();


?>
<?php include './_viewAluno.php';
$endereco = new _viewAluno();
$endereco->listarEndereco();


?>

    
        
      
        
        

            