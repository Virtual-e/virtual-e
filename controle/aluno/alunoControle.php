<?php

/*
 * Classe responsavel pelo controle da visao aluno
 * Autor:Wesley da Silva Pereira
 * Data:17/03/2015
 */
$ordem=0;
$acao=$_POST["acao"];
//sleep(2);
  include '../../modelo/aluno/alunoClass.php';
    $aluno=new alunoClass;
if($acao=="listar")
    {
   
    echo '<table border=1>
      <th onclick="ordenarNome();"style=" cursor:pointer;" >Nome<img src="../../img/az.png" style="margin-left:3px;"></th><th>ID_aluno</th>';
    $aluno->listarAlunos();
       echo ' </tr>
     </table>';
    }
if($acao=="ordenarNome")
     { 
     
    echo '<table border=1>
      <th onclick="ordenarNome();" style=" cursor:pointer;" >Nome<img src="../../img/az.png" style="margin-left:3px;"></th><th>ID_aluno</th>';
    $aluno->ordenarNome("asc");
       echo ' </tr>
     </table>';
    $ordem++;   
     }
                    
                                                                                                                  
?>                                      