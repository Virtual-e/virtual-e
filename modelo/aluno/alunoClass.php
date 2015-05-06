<?php

/*
 * Autor:Wesley da Silva Pereira
 * Data:13/03/2015
 */


 /* Classe aluno
  * vai conter os dados referente ao aluno
 *
 * 
 */
$ordem=1;
include '../../banco/conectaClass.php';
class alunoClass
{
    private $id_aluno;
    private $id_endereço;//chave estrangeira
    private $alu_mae;
    private $alu_nome;
    private $alu_pai;
    private $alu_datanasci;
    private $alu_datacad;
    private $alu_cpf;
    private $alu_rg;
    private $alu_email;
    private $alu_telefone;
    //variaveis da chave estrangeira endereço
    private $id_logradouro;
    //variaveis da chave logradouro
    private $id_cidade;//chave estrangeira
    private $logr_rua;
    private $logr_numero;
    private $logr_bairro;
    //variaveis chave estrangeira cidade
    private $id_uf;//chave estrangeira uf
    private $id_cep;//chave estrangeira cep
    private $cid_nome; 
    //variaveis chave cep
    private $cep_numero;
    //variaveis chave uf
    private $uf_nome;
    
   //final declaração variaveis
   
   function getId_aluno() {
       return $this->id_aluno;
   }

   function getId_endereço() {
       return $this->id_endereço;
   }

   function getAlu_mae() {
       return $this->alu_mae;
   }

   function getAlu_nome() {
       return $this->alu_nome;
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

   function getAlu_telefone() {
       return $this->alu_telefone;
   }

   function getId_logradouro() {
       return $this->id_logradouro;
   }

   function getId_cidade() {
       return $this->id_cidade;
   }

   function getLogr_rua() {
       return $this->logr_rua;
   }

   function getLogr_numero() {
       return $this->logr_numero;
   }

   function getLogr_bairro() {
       return $this->logr_bairro;
   }

   function getId_uf() {
       return $this->id_uf;
   }

   function getId_cep() {
       return $this->id_cep;
   }

   function getCid_nome() {
       return $this->cid_nome;
   }

   function getCep_numero() {
       return $this->cep_numero;
   }

   function getUf_nome() {
       return $this->uf_nome;
   }

   function setId_aluno($id_aluno) {
       $this->id_aluno = $id_aluno;
   }

   function setId_endereço($id_endereço) {
       $this->id_endereço = $id_endereço;
   }

   function setAlu_mae($alu_mae) {
       $this->alu_mae = $alu_mae;
   }

   function setAlu_nome($alu_nome) {
       $this->alu_nome = $alu_nome;
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

   function setAlu_telefone($alu_telefone) {
       $this->alu_telefone = $alu_telefone;
   }

   function setId_logradouro($id_logradouro) {
       $this->id_logradouro = $id_logradouro;
   }

   function setId_cidade($id_cidade) {
       $this->id_cidade = $id_cidade;
   }

   function setLogr_rua($logr_rua) {
       $this->logr_rua = $logr_rua;
   }

   function setLogr_numero($logr_numero) {
       $this->logr_numero = $logr_numero;
   }

   function setLogr_bairro($logr_bairro) {
       $this->logr_bairro = $logr_bairro;
   }

   function setId_uf($id_uf) {
       $this->id_uf = $id_uf;
   }

   function setId_cep($id_cep) {
       $this->id_cep = $id_cep;
   }

   function setCid_nome($cid_nome) {
       $this->cid_nome = $cid_nome;
   }

   function setCep_numero($cep_numero) {
       $this->cep_numero = $cep_numero;
   }

   function setUf_nome($uf_nome) {
       $this->uf_nome = $uf_nome;
   }

   
    
    
//fim pegar e setar variaveis
/*
 * Daqui pra baixo so funções com banco de dados insert updates deletes
 * lembrando endereço chave estrangeira
 */
   
   /*primeira função listar alunos
    * 
    */
   
   function listarAlunos()
        {
           $conn=new conectaClass();
           $conn->Conectar();
           $sql="select * from listar_Alunos";
           $resultado=mysql_query($sql);
           $lista=0;
           while($linha= mysql_fetch_array($resultado))
                {
                 
                if($par==0){//zebrar a tabela
                echo '<tr bgcolor="silver" style=" cursor:pointer;">';
                }else
                    {
                     echo '<tr bgcolor="white" style=" cursor:pointer;">';
                    }
                echo '<td>'.$linha["alu_nome"].'</td>';  
                echo '<td>'.$linha["id_aluno"].'</td>';
                $lista++;
                $par=$lista%2;
                }
           
        }
        function ordenarNome($manolo)
          { 
            if($ordem==0){
                
            $conn=new conectaClass();
           $conn->Conectar();
           $sql="select * from listar_Alunos order by alu_nome asc";
           $resultado=mysql_query($sql);
           $lista=0;
           while($linha= mysql_fetch_array($resultado))
                {
                 
                if($par==0){//zebrar a tabela
                echo '<tr bgcolor="silver" style=" cursor:pointer;">';
                }else
                    {
                     echo '<tr bgcolor="white" style=" cursor:pointer;">';
                    }
                echo '<td>'.$linha["alu_nome"].'</td>';  
                echo '<td>'.$linha["id_aluno"].'</td>';
                $lista++;
                $par=$lista%2;
                
                }
           
          }
            if($ordem==1){
                 $conn=new conectaClass();
           $conn->Conectar();
           
           $sql="select * from listar_Alunos order by alu_nome desc";
           $resultado=mysql_query($sql);
           $lista=0;
           while($linha= mysql_fetch_array($resultado))
                {
                 
                if($par==0){//zebrar a tabela
                echo '<tr bgcolor="silver" style=" cursor:pointer;">';
                }else
                    {
                     echo '<tr bgcolor="white" style=" cursor:pointer;">';
                    }
                echo '<td>'.$linha["alu_nome"].'</td>';  
                echo '<td>'.$linha["id_aluno"].'</td>';
                $lista++;
                $par=$lista%2;
                
               }
}
         

$ordem=0;
                    }
}
                      