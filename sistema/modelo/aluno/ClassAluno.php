<?php

/*
 *  Classe Aluno contém os dados que o aluno deverá ter dentro do sistema
 * Data:24/09/2015
 * Autor: Wesley da Silva Pereira 
 * Formando no curso de sistemas de informação 
 */

/**
 * Description of ClassAluno
 *
 * @author wesley
 */
class ClassAluno 
{
    private $alu_nome;
    private $alu_datanasci;
    private $alu_datacad;
    private $alu_mae;
    private $alu_pae;
    private $alu_cpf;
    private $alu_email;
    private $alu_email1;
    private $alu_telefone;
    private $alu_telefone1;
    private $id_endereco;//chave estrangeira da tabela endereco
    
    
    /*
     * Funções para pegar e atribuir variaveis uma vez que elas foram 
     * declaradas como private.
     */
    
    function getAlu_nome() {
        return $this->alu_nome;
    }

    function getAlu_datanasci() {
        return $this->alu_datanasci;
    }

    function getAlu_datacad() {
        return $this->alu_datacad;
    }

    function getAlu_mae() {
        return $this->alu_mae;
    }

    function getAlu_pae() {
        return $this->alu_pae;
    }

    function getAlu_cpf() {
        return $this->alu_cpf;
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

    function getId_endereco() {
        return $this->id_endereco;
    }

    function setAlu_nome($alu_nome) {
        $this->alu_nome = $alu_nome;
    }

    function setAlu_datanasci($alu_datanasci) {
        $this->alu_datanasci = $alu_datanasci;
    }

    function setAlu_datacad($alu_datacad) {
        $this->alu_datacad = $alu_datacad;
    }

    function setAlu_mae($alu_mae) {
        $this->alu_mae = $alu_mae;
    }

    function setAlu_pae($alu_pae) {
        $this->alu_pae = $alu_pae;
    }

    function setAlu_cpf($alu_cpf) {
        $this->alu_cpf = $alu_cpf;
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

    function setId_endereco($id_endereco) {
        $this->id_endereco = $id_endereco;
    }

    /*
     * Daqui p/ baixo funções com o banco de dados
     */
    function ListarAlunos()
      {
          $sql = "select * from tb_aluno a inner join tb_endereco e on (a.id_endereco=e.id_endereco)";
            $query = mysql_query($sql);
            while ($linha = mysql_fetch_array($query)) {
                $alu_nome = $linha['alu_nome'];
                $alu_cpf=$linha['alu_cpf'];
                $alu_datanasci = $linha['alu_datanasci'];
                 echo"<td>".$alu_nome."</td>";
                 echo"<td>".$alu_datanasci."</td>";
                 echo"<td>".$alu_cpf."</td>"; 
                
      }
      }
    
    
}
