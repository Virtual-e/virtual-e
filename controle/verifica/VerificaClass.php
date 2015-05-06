<?php

/*
 * Autor:Wesley da Silva Pereira
 * data:11/03/2015
 */

/**
 * Essa Classe verifica se o usuario esta logado e o 
 * redireciona 
 */
class VerificaClass {
    function verificaLogin()
    {
        session_start();
        
        if($_SESSION['logado']==true)
            {
            header("location:./visao/index.php");
            }
    }
}
