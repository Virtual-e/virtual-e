<html>
<head>
<title>CADASTRAR ALUNO</title>
<link href="../../include/css/estilo.css" rel="stylesheet" type="text/css"/>
<script  type="text/javascript"  src="../../include/js/jquery-1.11.3.js"></script>
<script type="text/javascript">
     $(function ()
     {
         $(".aba:first").show();
         $("#nav-aba a").click(function()
         {   $(".aba").hide();
             var div=$(this).attr("href");
             $(div).show();
             return false;
         } );
     });

</script>
</head>
<body>
<div id="cadastros">
     <ul id="nav-aba">
		 <li><a href="#novo">NOVO</a></li>
         <li><a href="#editar">EDITAR</a></li>
         <li><a href="#deletar">DELETAR</a></li>
     </ul>
    <div id="listar" class="aba">
   <!--aqui vai ser listado os alunos cadastrados -->
   alunos cadastrados
   </div>
   <div  id="novo" class="aba">
   <!--aqui o formulario para novo aluno-->
   novo aluno
   </div>
   <div id="editar"class="aba">
   <!--aqui o formulario para editar lembrando que tem que buscar no banco -->
   editar
   </div>
   <div id="deletar"class="aba">
   <!--aqui somente pedir confirmação para excluir o usuario -->
   deletar
   </div>

</div>

</body>
</html>
