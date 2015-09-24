<html>
    <head>
        <title>CADASTRAR ALUNO</title>
        <link href="../../include/css/estilo.css" rel="stylesheet" type="text/css"/>
        <script  type="text/javascript"  src="../../include/js/jquery-1.11.3.js"></script>
        <script type="text/javascript">
            $(function ()
            {
                $(".aba:first").show();
                $("#nav-aba a").click(function ()
                {
                    $(".aba").hide();
                    var div = $(this).attr("href");
                    $(div).show();
                    return false;
                });
            });

        </script>
    </head>
    <body>
        <img id="barra-cima" src="../../include/imagens/barracima.png"/>
        <div id="cadastros">
            <ul id="nav-aba">
                <li><a href="#novo">NOVO</a></li>
                
            </ul>
            <div id="listar" class="aba">
                <!--aqui vai ser listado os alunos cadastrados -->
                Alunos Cadastrados no Sistema
                <?php
                include './_viewAluno.php';
                
                $viewAluno = new _viewAluno();
                ?>
                <table id="tabela">
                    <tr><td>ALUNO</td><td>NASCIMENTO</td><td>CPF</td><td>CEP</td><td>UF</td><td>CIDADE</td><td>BAIRRO</td><td>RUA</td><td>NUMERO</td><td>VISUALIZAR</td><td>DELETAR</td><td>EDITAR</td></tr>
                  
                 <?php   $viewAluno->listarEndereco(); ?>
              
                </table>
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
