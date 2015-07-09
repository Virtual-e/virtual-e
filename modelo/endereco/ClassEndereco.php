<?php

/*
 * Classe generica endereço para o sistema
 * Autor:wesley da silva pereira
 * Data: 09/07/2015
 * 
 */


class ClassEndereco 
{
   //criando variaveis segundo o documento de requisitos
   private $id_endereco;
   private $end_numero;
   private $id_estado;//chave referencia a tb_estado
   private $est_nome;
   private $id_cidade;//chave  referencia a tb_cidade
   private $cid_nome;
   private $id_bairro;//chave referencia a tb_bairro
   private $cep_numero;
   private $bai_nome;
   private $id_rua;//chave referencia a tb_rua
   private $id_cep;//chave referancia a tb_cep
   private $rua_nome;
   
   /*
    * Final das variaveis 
    * inicio dos getters in setters
    */
   function getId_endereco() {
       return $this->id_endereco;
   }

   function getEnd_numero() {
       return $this->end_numero;
   }

   function getId_estado() {
       return $this->id_estado;
   }

   function getEst_nome() {
       return $this->est_nome;
   }

   function getId_cidade() {
       return $this->id_cidade;
   }

   function getCid_nome() {
       return $this->cid_nome;
   }

   function getId_bairro() {
       return $this->id_bairro;
   }

   function getCep_numero() {
       return $this->cep_numero;
   }

   function getBai_nome() {
       return $this->bai_nome;
   }

   function getId_rua() {
       return $this->id_rua;
   }

   function getId_cep() {
       return $this->id_cep;
   }

   function getRua_nome() {
       return $this->rua_nome;
   }

   function setId_endereco($id_endereco) {
       $this->id_endereco = $id_endereco;
   }

   function setEnd_numero($end_numero) {
       $this->end_numero = $end_numero;
   }

   function setId_estado($id_estado) {
       $this->id_estado = $id_estado;
   }

   function setEst_nome($est_nome) {
       $this->est_nome = $est_nome;
   }

   function setId_cidade($id_cidade) {
       $this->id_cidade = $id_cidade;
   }

   function setCid_nome($cid_nome) {
       $this->cid_nome = $cid_nome;
   }

   function setId_bairro($id_bairro) {
       $this->id_bairro = $id_bairro;
   }

   function setCep_numero($cep_numero) {
       $this->cep_numero = $cep_numero;
   }

   function setBai_nome($bai_nome) {
       $this->bai_nome = $bai_nome;
   }

   function setId_rua($id_rua) {
       $this->id_rua = $id_rua;
   }

   function setId_cep($id_cep) {
       $this->id_cep = $id_cep;
   }

   function setRua_nome($rua_nome) {
       $this->rua_nome = $rua_nome;
   }

/*
 * Funções referente ao banco de dados 
 * segue os insert update e delete.
 * Para fazer referencia será colocado o número do requisito funcional
 * e a página onde o mesmo se encontra no documento, como o documento é provisorios
 * pode ser que a pagina em questão mude porém a referência do requisito não
 */
 
//RF0001- LISTAR ENDEREÇOS pág.5
    function ListarEnderecos()
     {
       $sql="SELECT * FROM tb_cidade,tb_cep,tb_estado,tb_bairro,tb_rua,tb_endereco";
       $busca=  mysql_query($sql) or die ("erro na busca");
       //vai ter que entregar em um tabela então adicionar umas tags html
       while ($linha = mysql_fetch_array($busca))
       {
         echo "<tr>";  
         echo "<td>".$linha['cid_nome']."</td>"; 
         echo "<td>".$linha['cep_numero']."</td>";
         echo "<td>".$linha['bai_nome']."</td>";
         echo "<td>".$linha['rua_nome']."</td>";
       }
     }
  
    
}
