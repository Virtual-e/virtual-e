<?php

/*/*
 * Autor:Wesley da silva 
 * Data:08/06/2015
 * 
 */


class EnderecoClass {
    
    private  $id_endereco;
    private  $id_cidade;//chave tb_endereco
    private  $id_uf; //chave tb_uf
    private  $id_rua;//chave tb_rua
    private $id_bairro;//chave tb_bairro
    //########tabela endereço ##############
     
    //##########tabela uf ###############
    private $uf_nome;
    //###########tabela bairro ###########
    private $bai_nome;
    //###########tabela rua ##############
    private $rua_nosme;
    private $rua_numero;
    //#########tabela cidade############
    private $cid_nome;
    
    //######################final variaveis###########################
    
    function getId_endereco() {
        return $this->id_endereco;
    }

    function getId_cidade() {
        return $this->id_cidade;
    }

    function getId_uf() {
        return $this->id_uf;
    }

    function getId_rua() {
        return $this->id_rua;
    }

    function getId_bairro() {
        return $this->id_bairro;
    }

    function getUf_nome() {
        return $this->uf_nome;
    }

    function getBai_nome() {
        return $this->bai_nome;
    }

    function getRua_nosme() {
        return $this->rua_nosme;
    }

    function getRua_numero() {
        return $this->rua_numero;
    }

    function getCid_nome() {
        return $this->cid_nome;
    }

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    function setId_cidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    function setId_uf($id_uf) {
        $this->id_uf = $id_uf;
    }

    function setId_rua($id_rua) {
        $this->id_rua = $id_rua;
    }

    function setId_bairro($id_bairro) {
        $this->id_bairro = $id_bairro;
    }

    function setUf_nome($uf_nome) {
        $this->uf_nome = $uf_nome;
    }

    function setBai_nome($bai_nome) {
        $this->bai_nome = $bai_nome;
    }

    function setRua_nosme($rua_nosme) {
        $this->rua_nosme = $rua_nosme;
    }

    function setRua_numero($rua_numero) {
        $this->rua_numero = $rua_numero;
    }

    function setCid_nome($cid_nome) {
        $this->cid_nome = $cid_nome;
    }

 
}
