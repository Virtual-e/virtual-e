<?php

/*
 * Classe aluno
 * Autor:wesley da silva pereira
 * Data: 19/07/2015
 * 
 */

class ClassAluno
{
  private $id_aluno;//chave que vai ligar o aluno a um endereço
  private $alu_nome;
  private $alu_mae;
  private $alu_pai;
  private $alu_datanasci;
  private $alu_datacad;
  private $alu_cpf;
  private $alu_rg;
  private $alu_email;
  private $alu_email1;
  private $alu_telefone;
  private $alu_telefone1;
  function getId_aluno() {
      return $this->id_aluno;
  }

  function getAlu_nome() {
      return $this->alu_nome;
  }

  function getAlu_mae() {
      return $this->alu_mae;
  }

  function getAlu_pai() {
      return $this->alu_pai;
  }

  function getAlu_datanasci() {
      return $this->alu_datanasci;
  }

  function getAlu_datacad() {
      return $this->alu_datacad;
  }

  function getAlu_cpf() {
      return $this->alu_cpf;
  }

  function getAlu_rg() {
      return $this->alu_rg;
  }

  function getAlu_email() {
      return $this->alu_email;
  }

  function getAlu_email1() {
      return $this->alu_email1;
  }

  function getAlu_telefone() {
      return $this->alu_telefone;
  }

  function getAlu_telefone1() {
      return $this->alu_telefone1;
  }

  function setId_aluno($id_aluno) {
      $this->id_aluno = $id_aluno;
  }

  function setAlu_nome($alu_nome) {
      $this->alu_nome = $alu_nome;
  }

  function setAlu_mae($alu_mae) {
      $this->alu_mae = $alu_mae;
  }

  function setAlu_pai($alu_pai) {
      $this->alu_pai = $alu_pai;
  }

  function setAlu_datanasci($alu_datanasci) {
      $this->alu_datanasci = $alu_datanasci;
  }

  function setAlu_datacad($alu_datacad) {
      $this->alu_datacad = $alu_datacad;
  }

  function setAlu_cpf($alu_cpf) {
      $this->alu_cpf = $alu_cpf;
  }

  function setAlu_rg($alu_rg) {
      $this->alu_rg = $alu_rg;
  }

  function setAlu_email($alu_email) {
      $this->alu_email = $alu_email;
  }

  function setAlu_email1($alu_email1) {
      $this->alu_email1 = $alu_email1;
  }

  function setAlu_telefone($alu_telefone) {
      $this->alu_telefone = $alu_telefone;
  }

  function setAlu_telefone1($alu_telefone1) {
      $this->alu_telefone1 = $alu_telefone1;
  }


    
}
