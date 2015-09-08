<!DOCTYPE html>
<!--
Teste pra ver se essa porra ta gravando mesmo, grava essa porra todaaaaaaaaaaaa

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './sistema/config/ClassConecta.php';
        include './sistema/modelo/endereco/ClassEndereco.php';
        $conn = new Config();
        $conn->Conecta();
        $end = new ClassEndereco();
        $end->setBai_nome("marciano");
        echo $end->SalvarBairro();
        $end->setEst_nome("pa");
        echo $end->getId_bairro();
        $end->setCid_nome("patrocinio");
        $end->SalvarEstado();
        $end->SalvarCidade();
        $end->setEnd_rua("afonso pena");
        $end->setEnd_numero("10");
        $end->setEnd_cep("3872093");
        $end->SalvarEndereco();
        ?>
    </body>
</html>
