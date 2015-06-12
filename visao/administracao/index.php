<!DOCTYPE html>
<!--
  Autor:Wesley da silva Pereira
  Data:08/06/2015
-->



<html>
    <head>
        <meta charset="UTF-8">
           <title>VIRTUAL-E</title>
        <link rel="stylesheet"  href="../../css/principal.css" type="text/css">
        <link href="../../css/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet"  href="../../css/960_12_col.css" type="text/css">
        
    </head>
    <body bgcolor="red">
        <div id="conteiner" class="container_12">
            <div id="cabecalho" class="grid_12">
                <?php include '../../include/layout/banner.php';    ?>
            </div>
            <div id="menu-horizontal" class="grid_12">
                <?php include '../../include/layout/menu.php'; ?>
            </div>
           <div id="conteudo" class="grid_12">
               <?php include '../../visao/aluno/_visao.php';     ?>
            </div>
            
            <div id="rodape" class="grid_12">
                <?php include '../../include/layout/rodape.php'; ?>
            </div>
        </div>     
   </body>
</html>
 