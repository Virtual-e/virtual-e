<?php

/*
 *Classe Responsavel pela Configuração do sistema
 *Autor:wesley da silva pereira 
 * Data: 07/16/2015
 * 
 */


class Configuracao {
    
   /*declarando as variaveis de conexao com o banco de dados
    * vou utilizar ainda 
    */ 
    public function conectar()
            {
       //conecta agility hoster
       /* 
       $senha="88081156";//essa aqui é a variavel da senha
       $localhost="localhost";//essa aqui é a variavel local do banco
       $banco="u505571816_bugyx";//nome do banco
       $usuario="u505571816_hujyl";  
       */ 
       
       $senha="root";//essa aqui é a variavel da senha
       $localhost="localhost";//essa aqui é a variavel local do banco
       $banco="virtual-e";//nome do banco
       $usuario="root"; // usuario
       //funcão conecta
       
       $con= mysql_connect($localhost, $usuario, $senha)or die("Opa erro no servido, sistema em manutenção...");
       $db=  mysql_select_db($banco) or die ("banco não encontrado");
       //função seleciona banco;
              
       
       
            }
 
    
}
