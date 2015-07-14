<?php

/* 
 * Autor:Wesley da silva pereria 
 * data:14/07/2015
 */
//inclui conexão
include '../../include/config/ConfigClass.php';
$con = new Configuracao();
$con->conectar();
//inclui classe endereco
include '../../modelo/endereco/ClassEndereco.php';
$ControleEndereco=new ClassEndereco();

//RECEBE TODAS AS VARIAVEIS DO FORMULARIO DA CAMADA VIEW
    $id_endereco=$_POST['txtid_endereco'];
    $end_numero=$_POST['txtend_numero'];
    $id_estado=$_POST['txtid_estado'];//chave referencia a tb_estado
    $est_nome=$_POST['txtest_nome'];
    $id_cidade=$_POST['txtid_cidade'];//chave  referencia a tb_cidade
    $cid_nome=$_POST['txtcid_nome'];
   $id_bairro=$_POST['txtid_bairro'];//chave referencia a tb_bairro
    $cep_numero=$_POST['txtcep_numero'];
    $bai_nome=$_POST['txtbai_nome'];
    $id_rua=$_POST['txtid_rua'];//chave referencia a tb_rua
    $id_cep=$_POST['txtid_cep'];//chave referancia a tb_cep
    $rua_nome=$_POST['txtrua_nome'];
    
//funcões da classe passa os dados pra classe
$ControleEndereco->setBai_nome($bai_nome);
$ControleEndereco->setCep_numero($cep_numero);
$ControleEndereco->setCid_nome($cid_nome);
$ControleEndereco->setEnd_numero($end_numero);
$ControleEndereco->setEst_nome($est_nome);
$ControleEndereco->setId_bairro($id_bairro);
$ControleEndereco->setId_cep($id_cep);
$ControleEndereco->setId_cidade($id_cidade);
$ControleEndereco->setId_endereco($id_endereco);
$ControleEndereco->setId_estado($id_estado);
$ControleEndereco->setId_rua($id_rua);
$ControleEndereco->setRua_nome($rua_nome);

$ControleEndereco->NovoEndereço();
