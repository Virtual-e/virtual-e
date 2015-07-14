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
      ?>
        <form action="controle/endereco/ControleEndereco.php" method="post">
            teste de formulario 
            id_endereco:<input type="text" name="txtid_endereco"><br>
            id_estado:<input type="text" name="txtid_estado"><br>
            numero casa :<input type="text" name="txtend_numero"><br>
            <!--tabela estado -->
            nome estado:<input type="text" name="txtest_nome"><br>
            id_cidade:<input type="text" name="txtid_cidade"><br>
            <!--table cidade -->
            id_bairro:<input type="text" name="txtid_bairro" ><br>
            cid_nome:<input type="text" name="txtcid_nome"><br>
            id_cep:<input type="text" name="txtid_cep"><br>
            cep_numero:<input type="text" name="txtcep_numero"><br>
            bairro:<input type="text" name="txtbai_nome"><br>
            id_endereco:<input type="text" name="txtid_endereco"><br>
            nome rua:<input type="text" name="txtrua_nome"><br>
             id rua:<input type="text" name="txtid_rua"><br>
            <input type="submit" value="enviar">
        </form>
      
    </body>
</html>
 