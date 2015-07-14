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
       $sql="select * from tb_aluno inner join tb_endereco on (tb_aluno.id_endereco=tb_endereco.id_endereco) inner join tb_estado on (tb_endereco.id_estado=tb_estado.id_estado) inner join tb_cidade on (tb_estado.id_cidade=tb_cidade.id_cidade) inner join tb_bairro on (tb_cidade.id_bairro=tb_cidade.id_cidade) inner join tb_rua on(tb_bairro.id_rua=tb_rua.id_rua) inner join tb_cep on (tb_bairro.id_cep=tb_cep.id_cep)";
       $busca=  mysql_query($sql) or die ("erro na busca");
       //vai ter que entregar em um tabela então adicionar umas tags html
       while ($linha = mysql_fetch_array($busca))
       {
         echo "<tr>";  
         echo "<td>".  utf8_encode($linha['cid_nome'])."</td>"; 
         echo "<td>".$linha['cep_numero']."</td>";
         echo "<td>".  utf8_encode($linha['bai_nome'])."</td>";
         echo "<td>".$linha['rua_nome']."</td>";
       }
     }
   
 //RF0005 - BUSCAR ENDEREÇO PELO ID_USUARIO

 function BuscarEnderecos($_id_aluno)
     {
       $sql="select * from tb_aluno inner join tb_endereco on (tb_aluno.id_endereco=tb_endereco.id_endereco) inner join tb_estado on (tb_endereco.id_estado=tb_estado.id_estado) inner join tb_cidade on (tb_estado.id_cidade=tb_cidade.id_cidade) inner join tb_bairro on (tb_cidade.id_bairro=tb_cidade.id_cidade) inner join tb_rua on(tb_bairro.id_rua=tb_rua.id_rua) inner join tb_cep on (tb_bairro.id_cep=tb_cep.id_cep) where tb_aluno.id_aluno='$_id_aluno'";
       $busca=  mysql_query($sql) or die ("erro na busca");
       //vai ter que entregar em um tabela então adicionar umas tags html
       while ($linha = mysql_fetch_array($busca))
       {
         echo "<tr>";  
         echo "<td>".  utf8_encode($linha['cid_nome'])."</td>"; 
         echo "<td>".$linha['cep_numero']."</td>";
         echo "<td>".  utf8_encode($linha['bai_nome'])."</td>";
         echo "<td>".$linha['rua_nome']."</td>";
       }
     }     
  
     //RF0002 NOVO ENDEREÇO
 function NovoEndereço ()
      {
         $sqltb_rua="insert into tb_rua (id_rua,rua_nome) values ($this->id_rua,'$this->rua_nome')";
         $salvatb_rua=  mysql_query($sqltb_rua) or die ("Erro em salvar tb_rua!!");
         $sqltb_cep="insert into tb_cep (id_cep,cep_numero) values ($this->id_cep,'$this->cep_numero')";
         $salvatb_cep=  mysql_query($sqltb_cep) or die ("Erro em salvar tb_cep!!");
         $sqltb_bairro="insert into tb_bairro (id_bairro,bai_nome,id_cep,id_rua) values ($this->id_bairro,'$this->bai_nome',$this->id_cep,$this->id_rua)";
         $salva_bairro=  mysql_query($sqltb_bairro) or die ("erro ao gravar tabela bairro");
         $sqltb_cidade="insert into tb_cidade (id_cidade,cid_nome,id_bairro) values ($this->id_cidade,'$this->cid_nome',$this->id_bairro)";
         $salvatb_cidade=  mysql_query($sqltb_cidade) or die ("erro salvar tabela cidade");
         $sqltb_estado="insert into tb_estado (id_estado,est_nome,id_cidade) values ($this->id_estado,$this->est_nome,$this->id_cidade)";
         $salvtb_estado=  mysql_query($sqltb_estado) or die ("erro ao salvar tabela estado");
         $sqltb_endereco="insert into tb_endereco (id_endereco,id_estado) values ($this->id_endereco,$this->id_estado)";
         $savatb_endereco=  mysql_query($sqltb_endereco) or die ("erro ao salvar tabela endereco");
         
      }    
//sql inner join  cid_nome, est_nome,cid_nome,rua_nome,bai_nome,cep_numero from tb_endereco inner join tb_estado on (tb_endereco.id_estado=tb_estado.id_estado)inner join tb_cidade on (tb_estado.id_cidade=tb_cidade.id_cidade) inner join tb_bairro on (tb_bairro.id_bairro=tb_cidade.id_bairro)inner join tb_rua on (tb_bairro.id_rua=tb_rua.id_rua)inner join tb_cep on (tb_bairro.id_cep=tb_cep.id_cep)    
}
