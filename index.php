<!DOCTYPE html>
<!--
Virtual-e Sistema de Gerenciamento Escolar
Autor:Wesley da Silva Pereira 7º Periodo de Sistemas de Informação
Unicerp Patrocinio MG

-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-1.11.3.js"></script>
        <title>Virtual-e</title>
      
    </head>
    <body>
      <?php include './include/config/ConfigClass.php'; 
       $conn= new Configuracao();
       $conn->conectar();
       include './modelo/endereco/ClassEndereco.php';
       $endereco= new ClassEndereco();
       ?>
        <table border="1">
            
            <td>Cidade</td><td>Cep</td><td>bairro</td><td>rua</td>
           <?php  $endereco->ListarEnderecos(); ?>
        </tr>
    </table>
      
    </body>
</html>
 