<?php

/*
 * Autor:Wesley da silva 
 * Data:08/06/2015
 * 
 */

/**
 * Classe responsavel pelos alunos
 * receber os dados e fazer tarefas de acesso ao banco de dados
 * 
 */
/*
include '../../include/config/ConfigClass.php';
$config=new Configuracao();
$config->conectar();
*/
class AlunoClass {
   private $alu_nome;
   private $alu_rg;
   private $alu_cpf;
   private $alu_nasci;
   private $alu_cadas;
   private $alu_mae;
   private $alu_pae;
   private $alu_email;
   private $alu_telefone;
   private $alu_telefone1;
   private $alu_ativo;
   private $id_endereco;//esse campo é chave estrangeira tem que puxar da classe endereço
   function getAlu_nome() {
       return $this->alu_nome;
   }
   function getAlu_ativo() {
       return $this->alu_ativo;
   }

   function setAlu_ativo($alu_ativo) {
       $this->alu_ativo = $alu_ativo;
   }

      function getAlu_rg() {
       return $this->alu_rg;
   }

   function getAlu_cpf() {
       return $this->alu_cpf;
   }

   function getAlu_nasci() {
       return $this->alu_nasci;
   }

   function getAlu_cadas() {
       return $this->alu_cadas;
   }

   function getAlu_mae() {
       return $this->alu_mae;
   }

   function getAlu_pae() {
       return $this->alu_pae;
   }

   function getAlu_email() {
       return $this->alu_email;
   }

   function getAlu_telefone() {
       return $this->alu_telefone;
   }

   function getAlu_telefone1() {
       return $this->alu_telefone1;
   }

   function getId_endereco() {
       return $this->id_endereco;
   }

   function setAlu_nome($alu_nome) {
       $this->alu_nome = $alu_nome;
   }

   function setAlu_rg($alu_rg) {
       $this->alu_rg = $alu_rg; 
   }

   function setAlu_cpf($alu_cpf) {
       $this->alu_cpf = $alu_cpf;
   }

   function setAlu_nasci($alu_nasci) {
       $this->alu_nasci = $alu_nasci;
   }

   function setAlu_cadas($alu_cadas) {
       $this->alu_cadas = $alu_cadas;
   }

   function setAlu_mae($alu_mae) {
       $this->alu_mae = $alu_mae;
   }

   function setAlu_pae($alu_pae) {
       $this->alu_pae = $alu_pae;
   }

   function setAlu_email($alu_email) {
       $this->alu_email = $alu_email;
   }

   function setAlu_telefone($alu_telefone) {
       $this->alu_telefone = $alu_telefone;
   }

   function setAlu_telefone1($alu_telefone1) {
       $this->alu_telefone1 = $alu_telefone1;
   }

   function setId_endereco($id_endereco) {
       $this->id_endereco = $id_endereco;
   }
//##################aqui termina a parte das variaveis #########################################

 //funções com o banco o primeiro o select pra fazer um pequeno testes mais necessario
 function ListarAlunos()
   {    

         $consulta="select * from tb_aluno";
         $resultado=  mysql_query($consulta) or die("erro nº 007  encontrar  tabela, enviar email para wesley_cras@hotmail.com");
         
             //listar funcionando 100%
          while($linha= mysql_fetch_array($resultado))
                {
                 echo"<tr>";
                 echo "<td>&nbsp; ".$linha['alu_nome']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_cpf']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_rg']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_nasci']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_mae']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_pae']."&nbsp; </td>";
                 echo "<td>&nbsp; ".$linha['alu_email']."&nbsp; </td>";
               
                }
              
         
   }
   function CadastrarAlunos()
     {   
   
       $consulta="INSERT INTO `virtual-e`.`tb_aluno` (`id_aluno`, `alu_nome`, `alu_cpf`, `alu_nasci`, `alu_cadas`, `alu_rg`, `alu_mae`, `alu_pai`, `alu_email`, `alu_ativo`, `id_endereco`, `alu_telefone`, `alu_telefone1`) VALUES (NULL, '$this->alu_nome', '$this->alu_cpf', '$this->alu_nasci', '$this->alu_cadas', '$this->alu_rg', '$this->alu_mae', '$this->alu_pae', '$this->alu_email','$this->alu_ativo', '$this->id_endereco', '$this->alu_telefone', '$this->alu_telefone1')";  
       $query=  mysql_query($consulta) or die("Erro nº 008 erro ao salvar,<br> enviar email para wesley_cras@hotmail.com");    
       return true;
     }
     function DeletarAluno($id)
     {
         $consulta="delete from tb_aluno where id_aluno='$id'";
         $query=  mysql_query($consulta) or die ("Erro 009 <br> erro ao excluir");
         //deletando funcionando 100%
     }
     function UpdateAluno($id)
     {   //update funcionando 100%
         $sql = "UPDATE `virtual-e`.`tb_aluno` SET `alu_nome` ='$this->alu_nome', `alu_cpf` = '$this->alu_cpf', `alu_nasci` ='$this->alu_nasci', `alu_cadas` = '$this->alu_cadas', `alu_rg` = '$this->alu_rg', `alu_mae` = '$this->alu_mae', `alu_pai` = '$this->alu_pae', `alu_email` = '$this->alu_email', `alu_telefone` = '$this->alu_telefone', `alu_telefone1` ='$this->alu_telefone1',`id_endereco` ='$this->id_endereco', `alu_ativo` ='$this->alu_ativo'  WHERE `tb_aluno`.`id_aluno` = '$id'";
         $query=  mysql_query($sql) or die ("erro ao fazer update");
     }
     
}
// ###final ações com o banco de dados ################