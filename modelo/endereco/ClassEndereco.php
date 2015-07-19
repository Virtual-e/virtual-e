<?php

/*
 * Classe generica endereço para o sistema
 * Autor:wesley da silva pereira
 * Data: 09/07/2015
 * 
 */


class ClassEndereco 
{
    private $id_endereco;
    private $end_rua;//tb_endereco
    private $id_pessoa;//chave para ligar pessoa a endereço
    private $end_numero;
    private $id_cidade;//chave da tabela cidade
    private $id_bairro;//chave da tabela bairro
    private $bai_nome;//tb_bairro
    private $cid_nome;//tb_cidade
    private $id_estado;//chave liga cidade a um estado
    private $est_nome;//tb_estado
    function getId_endereco() {
        return $this->id_endereco;
    }

    function getEnd_rua() {
        return $this->end_rua;
    }

    function getId_pessoa() {
        return $this->id_pessoa;
    }

    function getEnd_numero() {
        return $this->end_numero;
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

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    function setEnd_rua($end_rua) {
        $this->end_rua = $end_rua;
    }

    function setId_pessoa($id_pessoa) {
        $this->id_pessoa = $id_pessoa;
    }

    function setEnd_numero($end_numero) {
        $this->end_numero = $end_numero;
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


}
