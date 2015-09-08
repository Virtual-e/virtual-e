<?php



/* 
 * Classe que contém a conexão com o banco de dados 
 * será feita em pdo um novo modelo de conexao onde usa 
 * objeto em si. Pdo é o caralho vou usar é objeto feito por mim  mesmo.
 * Data:08/09/2015
 * Autor: Wesley da Silva Pereira 
 * Formando no curso de sistemas de informação 
 */


/**
 * Essa classe é responsavel por conectar ao banco de dados
 * e foi atribuido dois erros possiveis 0001 erro na abertura do caminho como o banco
 * e 0002 erro ao encontrar o banco de dados esse erro são mostrados em janelas com 
 * javascript
 *
 * @author wesley
 */
class Config 
{
  private $usuario="root";
  private  $senha="root";
  private $banco="virtual-e1";
  private $caminho="localhost";
 
  public function  Conecta()
          {
             $con= mysql_connect($this->caminho, $this->usuario, $this->senha) or die ("<script>alert('Erro #0001 erro na conexao');</script>");
             $bd= mysql_select_db($this->banco) or die ("<script>alert('Erro #0002 erro ao encontrar o banco de dados!');</script>");
          }
  

}
    

