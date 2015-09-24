<?php

/*
 * Classe generica Endereço serve para todos os usuarios 
 * do sistema.
 * Data:08/09/2015
 * Autor: Wesley da Silva Pereira 
 * Formando no curso de sistemas de informação 
 */

/*
 * Fluxo para salvar as tabelas
 * 1º tabela bairro
 * 2º tabela estado
 * 3º tabela cidade levando o id do estado
 * 4º tabela endereco levando id da cidade e bairro
 */

class ClassEndereco {
    /* --tb_endereço-- */

    private $end_rua;
    private $end_numero;
    private $end_cep;
    private $id_cidade; //fk referencia a chave da tb_cidade !!!!tem que ter um metodo para preencher um combobox
    private $id_bairro; //fk referencia a chava da tb_bairro! !!!tem que ter um metodo para preencher um combobox

    /* --tb_bairro-- */
    private $bai_nome;
    /* --tb_cidade-- */
    private $cid_nome;
    private $id_estado; //fk referencia a chave da tb_estado !!!!tem que ter um metodo para preencher um combobox
    /* --tb_estado-- */
    private $est_nome;

    function getEnd_rua() {
        return $this->end_rua;
    }

    function getEnd_numero() {
        return $this->end_numero;
    }

    function getEnd_cep() {
        return $this->end_cep;
    }

    function getId_cidade() {
        return $this->id_cidade;
    }

    function getId_bairro() {
        return $this->id_bairro;
    }

    function getBai_nome() {
        return $this->bai_nome;
    }

    function getCid_nome() {
        return $this->cid_nome;
    }

    function getId_estado() {
        return $this->id_estado;
    }

    function getEst_nome() {
        return $this->est_nome;
    }

    function setEnd_rua($end_rua) {
        $this->end_rua = $end_rua;
    }

    function setEnd_numero($end_numero) {
        $this->end_numero = $end_numero;
    }

    function setEnd_cep($end_cep) {
        $this->end_cep = $end_cep;
    }

    function setId_cidade($id_cidade) {
        $this->id_cidade = $id_cidade;
    }

    function setId_bairro($id_bairro) {
        $this->id_bairro = $id_bairro;
    }

    function setBai_nome($bai_nome) {
        $this->bai_nome = $bai_nome;
    }

    function setCid_nome($cid_nome) {
        $this->cid_nome = $cid_nome;
    }

    function setId_estado($id_estado) {
        $this->id_estado = $id_estado;
    }

    function setEst_nome($est_nome) {
        $this->est_nome = $est_nome;
    }

    function SalvarBairro() {
        $sql = "insert into tb_bairro values (null,'$this->bai_nome')";
        $salva = mysql_query($sql) or die("<script>alert('Erro 0004 erro ao salvar bairro!');</script>");
    }

    function SalvarEstado() {
        $sql = "insert into tb_estado values (null,'$this->est_nome') ";
        $query = mysql_query($sql) or die("<script>alert('Erro 0005 erro ao salvar estado!');</script>");
    }

    function SalvarCidade() {

        $sql = "select id_estado from tb_estado where est_nome='$this->est_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idestado = $linha['id_estado'];
        }
        $sql = "insert into tb_cidade values (null,'$this->cid_nome','$idestado')";
        $query = mysql_query($sql) or die("<script>alert('Erro 0006 erro ao salvar cidade!');</script>");
    }

    function SalvarEndereco() {
        $sql = "select * from tb_bairro where bai_nome='$this->bai_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idbairro = $linha['id_bairro'];
        }
        $sql = "select * from tb_cidade where cid_nome='$this->cid_nome'";
        $query = mysql_query($sql);
        while ($linha = mysql_fetch_array($query)) {
            $idcidade = $linha['id_cidade'];
        }
        $sql = "insert into tb_endereco values (null,'$this->end_rua','$this->end_numero','$this->end_cep','$idcidade','$idbairro')";
        $query = mysql_query($sql) or die("<script>alert('Erro 0007 erro ao salvar endereco!');</script>");
    }

    function PreencheCombCidade($cep) {
        $sql = "select * from tb_endereco e inner join tb_cidade c on (e.id_cidade=c.id_cidade) where end_cep='$cep' group by cid_nome";
        $query = mysql_query($sql);

        while ($linha = mysql_fetch_array($query)) {
            $idcidade = $linha['id_cidade'];

            $nomeCidade = $linha['cid_nome'];
            echo "<option value=$nomeCidade></option><br>";
        }
    }

    function PreencheComboBairro($cep) {
        $sql = "select * from  tb_endereco e inner join tb_bairro b on (e.id_bairro=b.id_bairro) where  end_cep='$cep' group by  bai_nome";
        $query = mysql_query($sql);

        while ($linha = mysql_fetch_array($query)) {
            $idbairro = $linha['id_bairro'];

            $nomebairro = $linha['bai_nome'];
            echo "<option value=$idbairro >$nomebairro</option><br>";
        }
    }
        function ListarEndereco() {
            $sql = "select * from  tb_endereco e inner join tb_bairro b on (e.id_bairro=b.id_bairro) inner join tb_cidade c on (e.id_cidade=c.id_cidade) inner join tb_estado uf on (c.id_estado=uf.id_estado) inner join tb_aluno a on (e.id_endereco=a.id_endereco)";
            $query = mysql_query($sql);
            while ($linha = mysql_fetch_array($query)) {
                $end_rua = $linha['end_rua'];
                $end_numero=$linha['end_numero'];
                $end_cep = $linha['end_cep'];
                $bai_nome=$linha['bai_nome'];
                $cid_nome=$linha['cid_nome'];
                $est_nome=$linha['est_nome'];
                $alu_nome = $linha['alu_nome'];
                $alu_cpf=$linha['alu_cpf'];
                $alu_datanasci = $linha['alu_datanasci'];
                 echo"<tr><td>".$alu_nome."</td>";
                 echo"<td>".$alu_datanasci."</td>";
                 echo"<td>".$alu_cpf."</td>"; 
                echo"<td>".$end_cep."</td>";
                echo"<td>".$est_nome."</td>";
                echo"<td>".$cid_nome."</td>";
                echo"<td>".$bai_nome."</td>";  
                echo"<td>".$end_rua."</td>";
                echo"<td>".$end_numero."</td>";
                echo"<td><a href='#'><img id=#lupa src=../../include/imagens/visualizar.png height=30 width=30 title=Visualizar></a> "; 
                echo"<td><a href='#'><img id=#lupa src=../../include/imagens/deletar.png height=30 width=30 title=Deletar></a> ";
                echo"<td><a href='#'><img id=#lupa src=../../include/imagens/editar.png height=30 width=30 title=editar></a> ";
            }
            echo "</tr>";
        }

    

}
