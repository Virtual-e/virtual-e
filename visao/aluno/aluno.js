/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function lista_alunos()
  {
    ajax=new XMLHttpRequest();
        //id=document.getElementById("id").value;
        id="listar";
        ajax.open("POST","../../controle/aluno/alunoControle.php","true");
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send("acao="+id);
        document.getElementById("lista_alunos").innerHTML="<center style='margin-top:40px;'><img src=../../img/ajax-loader.gif height=32 width=32><br>carregando...</center>";
        ajax.onreadystatechange=function ()
           {   
               
              
               if(ajax.readyState==4 && ajax.status==200)
                  {
                      document.getElementById("lista_alunos").innerHTML=ajax.responseText;
                       
                  }
           }
    }
    
    function listaPagina()
    {
      ajax=new XMLHttpRequest();
        //id=document.getElementById("id").value;
        //id="listar";
        ajax.open("GET","_listar.php","true");
        //ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send();
        document.getElementById("listar_pagina").innerHTML="<center style='margin-top:40px;'><img src=../../img/ajax-loader.gif height=32 width=32><br>carregando...</center>";
        ajax.onreadystatechange=function ()
           {   
               
              
               if(ajax.readyState==4 && ajax.status==200)
                  {
                      document.getElementById("listar_pagina").innerHTML=ajax.responseText;
                       
                  }
           }  
        
    }
function ordenarNome()
 {
   ajax=new XMLHttpRequest();
        //id=document.getElementById("id").value;
        id="ordenarNome";
        ajax.open("POST","../../controle/aluno/alunoControle.php","true");
        ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        ajax.send("acao="+id);
        document.getElementById("lista_alunos").innerHTML="<center style='margin-top:40px;'><img src=../../img/ajax-loader.gif height=32 width=32><br>carregando...</center>";
        ajax.onreadystatechange=function ()
           {   
               
              
               if(ajax.readyState==4 && ajax.status==200)
                  {
                      document.getElementById("lista_alunos").innerHTML=ajax.responseText;
                       
                  }
           }  
     
 }    