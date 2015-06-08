<?php

/* 
 * Autor:Wesley da silva 
 * Data:09/06/2015
 * Aluno controle 
 * Esse arquivo vai trabalhar com as variaveis e fazer os encaminhamentos
 * dos dados para classes necessarias
 * 
 * Os não se pode criar objetos em arquivos que vao ser incorporados
 * aprendizado de hoje
 */
 
//###parte dos includes ###################
    include '../modelo/aluno/AlunoClass.php';
    include '../include/config/ConfigClass.php';
//###############################################
//--------------objetos------------------------
   $Aluno= new AlunoClass();    
   $Con=new Configuracao();
   $Con->conectar();//cria a conexao com o banco porque a classe aluno vai precisar
      

//#############recebe as variáveis da visao aluno ###############################
   
   $acao=$_POST['acao'];//variavel com finalidade de controlar o controler
   $alu_nome=mysql_escape_string($_POST['alu_nome']);
   $alu_rg=mysql_escape_string($_POST['alu_rg']);
   $alu_cpf=mysql_escape_string($_POST['alu_cpf']);
   $alu_nasci=mysql_escape_string($_POST['alu_nasci']);
   $alu_cadas=mysql_escape_string($_POST['alu_cadas']);
   $alu_mae=mysql_escape_string($_POST['alu_mae']);
   $alu_pae=mysql_escape_string($_POST['alu_pae']);
   $alu_email=mysql_escape_string($_POST['alu_email']);
   $alu_telefone=mysql_escape_string($_POST['alu_telefone']);
   $alu_telefone1=mysql_escape_string($_POST['alu_telefone1']);
   $alu_ativo=mysql_escape_string($_POST['alu_ativo']);
   $id_endereco=mysql_escape_string($_POST['id_endereco']);//variavel de outra classe 
   
//##########################final variaveis da classe Aluno ###########################

//----------------------------funcoes ou acoes----------------------------------------

if($acao == "cadastrar")
    { 
      $Aluno->setAlu_ativo($alu_ativo);
      $Aluno->setAlu_cadas($alu_cadas);
      $Aluno->setAlu_cpf($alu_cpf);
      $Aluno->setAlu_email($alu_email);
      $Aluno->setAlu_mae($alu_mae);
      $Aluno->setAlu_nasci($alu_nasci);
      $Aluno->setAlu_nome($alu_nome);
      $Aluno->setAlu_rg($alu_rg);
      $Aluno->setAlu_pae($alu_pae);
      $Aluno->setAlu_telefone($alu_telefone);
      $Aluno->setAlu_telefone1($alu_telefone1);
      $Aluno->setId_endereco($id_endereco);  
      if($Aluno->CadastrarAlunos())
          {
            echo "<script>alert('Cadastrado com sucesso!!');</script>"
          . '<script> window.location="../visao/aluno/index.php";</script>';
          }
    }   
   

   

?>
