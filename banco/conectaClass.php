<?php

/*
 * Autor:Wesley da silva Pereira
 * data:10/03/2015
 */
/*
 * Descrição: Classe responsavel por conectar a aplicação ao banco de dados
 * 
 */

class conectaClass {
    
    function Conectar()
    {
       //conecta agility hoster
       ///* 
       $senha="88081156";//essa aqui é a variavel da senha
       $localhost="localhost";//essa aqui é a variavel local do banco
       $banco="u505571816_bugyx";//nome do banco
       $usuario="u505571816_hujyl";  
       //*/ 
       /*
       $senha="root";//essa aqui é a variavel da senha
       $localhost="localhost";//essa aqui é a variavel local do banco
       $banco="virtual-e";//nome do banco
       $usuario="root"; // usuario
       //funcão conecta
        * 
        */
       $con= mysql_connect($localhost, $usuario, $senha)or die (mysql_errno());
       $db=  mysql_select_db($banco) or die ("banco não encontrado");
       //função seleciona banco;
    }
    
    
    
}

