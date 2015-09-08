<?php

/*
 * Classe generica Endereço serve para todos os usuarios 
 * do sistema.
 * Data:08/09/2015
 * Autor: Wesley da Silva Pereira 
 * Formando no curso de sistemas de informação 
 */

/*
 * Fluxo para salvar as tabelas
 * 1º tabela bairro
 * 2º tabela estado
 * 3º tabela cidade levando o id do estado
 * 4º tabela endereco levando id da cidade e bairro
 */

class ClassEndereco {
    /* --tb_endereço-- */

    private $end_rua;
    private $end_numero;
    private $end_cep;
    private $id_cidade; //fk referencia a chave da tb_cidade
    private $id_bairro; //fk referencia a chava da tb_bairro

    /* --tb_bairro-- */
    private $bai_nome;
    /* --tb_cidade-- */
    private $cid_nome;
    private $id_estado; //fk referencia a chave da tb_estado
    /* --tb_estado-- */
    private $est_nome;

    function getEnd_rua() {
        return $this->end_rua;
    }

    function getEnd_numero() {
        return $this->end_numero;
    }

    function getEnd_cep() {
        return $this->end_cep;
    }

    function getId_cidade() {
        return $this->id_cidade;
    }

    function getId_bairro() {
        return $this->id_bairro;
    }

    function getBai_nome() {
        return $this->bai_nome;
    }

    function getCid_nome() {
        return $this->cid_nome;
    }

    function getId_estado() {
        return $this->id_estado;
    }

    function getEst_nome() {
        return $this->est_nome;
    }

    function setEnd_rua($end_rua) {
        $this->end_rua = $end_rua;
    }

    function setEnd_numero($end_numero) {
        $this->end_numero = $end_numero;
    }

    function setEnd_cep($end_cep) {
        $this->end_cep = $end_cep;
    }

    function setId_cidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    function setId_bairro($id_bairro) {
        $this->id_bairro = $id_bairro;
    }

    function setBai_nome($bai_nome) {
        $this->bai_nome = $bai_nome;
    }

    function setCid_nome($cid_nome) {
        $this->cid_nome = $cid_nome;
    }

    function setId_estado($id_estado) {
        $this->id_estado = $id_estado;
    }

    function setEst_nome($est_nome) {
        $this->est_nome = $est_nome;
    }

    function SalvarBairro() {
        $sql = "insert into tb_bairro values (null,'$this->bai_nome')";
        $salva = mysql_query($sql) or die("<script>alert('Erro 0004 erro ao salvar bairro!');</script>");
    }

    function SalvarEstado() {
        $sql = "insert into tb_estado values (null,'$this->est_nome') ";
        $query = mysql_query($sql) or die("<script>alert('Erro 0005 erro ao salvar estado!');</script>");
    }

    function SalvarCidade() {

        $sql = "select id_estado from tb_estado where est_nome='$this->est_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idestado = $linha['id_estado'];
        }
        $sql = "insert into tb_cidade values (null,'$this->cid_nome','$idestado')";
        $query = mysql_query($sql) or die("<script>alert('Erro 0006 erro ao salvar cidade!');</script>");
    }

    function SalvarEndereco() {
        $sql = "select * from tb_bairro where bai_nome='$this->bai_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idbairro = $linha['id_bairro'];
        }
        $sql = "select * from tb_cidade where cid_nome='$this->cid_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idcidade = $linha['id_cidade'];
        }
        $sql = "insert into tb_endereco values (null,'$this->end_rua','$this->end_numero','$this->end_cep','$idcidade','$idbairro')";
        $query = mysql_query($sql) or die("<script>alert('Erro 0007 erro ao salvar endereco!');</script>");
    }

}
