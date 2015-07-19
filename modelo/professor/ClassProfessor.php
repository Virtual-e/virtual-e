<?php

/*
 * Classe Professor
 * Autor:wesley da silva pereira
 * Data: 19/07/2015
 * 
 */


class ClassProfessor 
{
     private $id_professor;//chave que liga ao endereço
     private $pro_nome;
     private $pro_datanasci;
     private $pro_datacad;
     private $pro_mae;
     private $pro_pai;
     private $pro_cpf;
     private $pro_rg;
     private $pro_email;
     private $pro_email1;
     private $pro_telefone;
     private $pro_telefone1;
     private $pro_formacao;
     private $pro_descricao;
     
     
     function getId_professor() {
         return $this->id_professor;
     }

     function getPro_nome() {
         return $this->pro_nome;
     }

     function getPro_datanasci() {
         return $this->pro_datanasci;
     }

     function getPro_datacad() {
         return $this->pro_datacad;
     }

     function getPro_mae() {
         return $this->pro_mae;
     }

     function getPro_pai() {
         return $this->pro_pai;
     }

     function getPro_cpf() {
         return $this->pro_cpf;
     }

     function getPro_rg() {
         return $this->pro_rg;
     }

     function getPro_email() {
         return $this->pro_email;
     }

     function getPro_email1() {
         return $this->pro_email1;
     }

     function getPro_telefone() {
         return $this->pro_telefone;
     }

     function getPro_telefone1() {
         return $this->pro_telefone1;
     }

     function getPro_formacao() {
         return $this->pro_formacao;
     }

     function getPro_descricao() {
         return $this->pro_descricao;
     }

     function setId_professor($id_professor) {
         $this->id_professor = $id_professor;
     }

     function setPro_nome($pro_nome) {
         $this->pro_nome = $pro_nome;
     }

     function setPro_datanasci($pro_datanasci) {
         $this->pro_datanasci = $pro_datanasci;
     }

     function setPro_datacad($pro_datacad) {
         $this->pro_datacad = $pro_datacad;
     }

     function setPro_mae($pro_mae) {
         $this->pro_mae = $pro_mae;
     }

     function setPro_pai($pro_pai) {
         $this->pro_pai = $pro_pai;
     }

     function setPro_cpf($pro_cpf) {
         $this->pro_cpf = $pro_cpf;
     }

     function setPro_rg($pro_rg) {
         $this->pro_rg = $pro_rg;
     }

     function setPro_email($pro_email) {
         $this->pro_email = $pro_email;
     }

     function setPro_email1($pro_email1) {
         $this->pro_email1 = $pro_email1;
     }

     function setPro_telefone($pro_telefone) {
         $this->pro_telefone = $pro_telefone;
     }

     function setPro_telefone1($pro_telefone1) {
         $this->pro_telefone1 = $pro_telefone1;
     }

     function setPro_formacao($pro_formacao) {
         $this->pro_formacao = $pro_formacao;
     }

     function setPro_descricao($pro_descricao) {
         $this->pro_descricao = $pro_descricao;
     }


}
