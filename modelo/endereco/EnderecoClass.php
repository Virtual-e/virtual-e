<?php

/*/*
 * Autor:Wesley da silva 
 * Data:08/06/2015
 * 
 */
include '../../include/config/ConfigClass.php';
$Con = new Configuracao();
$Con->conectar();

class EnderecoClass {
    
    private  $id_endereco;
    private  $id_cidade;//chave tb_endereco
    private  $id_uf; //chave tb_uf
    private  $id_rua;//chave tb_rua
    private  $id_bairro;//chave tb_bairro
    //########tabela endereço ##############
     
    //##########tabela uf ###############
    private $uf_nome;
    //###########tabela bairro ###########
    private $bai_nome="alameda das bucetas";
    //###########tabela rua ##############
    private $rua_nome;
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

    function getRua_nome() {
        return $this->rua_nome;
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

    function setRua_nome($rua_nome) {
        $this->rua_nome = $rua_nome;
    }

    function setRua_numero($rua_numero) {
        $this->rua_numero = $rua_numero;
    }

    function setCid_nome($cid_nome) {
        $this->cid_nome = $cid_nome;
    }
    
    //##tabelas sem chave estrangeira############
    function CadastrarUf()
     {   
         $sql="insert into tb_uf (id_uf,uf_nome) value (null,'$this->uf_nome')";//100% salvando
         $query=  mysql_query($sql) or die("erro ao gravar "); 
     }
     function  CadastrarRua()
     {
         $sql="insert into tb_rua (id_rua,rua_nome,rua_numero) values (null,'$this->rua_nome','$this->rua_numero')";
         $query=  mysql_query($sql) or die("Erro ao gravar");//100%salvando
     }
     function CadastraBairro()
      {
         $sql="insert into tb_bairro (id_bairro,bai_nome) values (null,'$this->bai_nome')";
         $query=  mysql_query($sql) or die("Erro ao gravar");//100%salvando
      }
    //###############final tabelas de cadastros sem chave #############################
    //----------------inicio listagem das tabelas sem chave --------------------------//
    function ListarUF()
      {
        $sql="select * from tb_uf";
        $query=  mysql_query($sql);
        
          echo ' <input list="browsers" name="browser">
                 <datalist id="browsers">';
        while($linha=  mysql_fetch_array($query))
                {   
                      
                    echo "<option value=".$linha['uf_nome'].">";
                }
               echo  "</datalist>";
      }
      
      
      
}
