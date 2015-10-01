<?php

/* 
 * Autor:Wesley da Silva Pereira
 * Data:26/09/2015
 * Arquivo de controle do aluno esse aquivo vai fazer
 * a ligação entre a visão e a regra de negocio que 
 * vai ficar na Camada RG.
 */
include '../../config/ClassConecta.php';
$conectar=new Config();
$conectar->Conecta();
include '../../modelo/endereco/ClassEndereco.php';
$endereco=new ClassEndereco();
$acao=$_POST['acao'];
$pagina=$_POST['pagina'];
$cep=$_POST['cep'];
$cidade=$_POST['cidade'];
sleep(2);
switch ($acao)
{
case "listar": $endereco->ListarEndereco($pagina);
    break;
case "CbxCidade": $endereco->PreencheCombCidade($cep);
    break;
case "CbxBairro":$endereco->PreencheComboBairro($cep);
    break;
case "CbxEstado":$endereco->PreencheComboEstado($cidade);
    break;
default : echo "erro";
}
