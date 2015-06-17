/* 
 *teste de enviar dados via 
 *post em jsp
 */
function Cadastrar(acao)
{
var buceta=acao;     
var xmlhttp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==1)
{  
  document.getElementById("conteudo").innerHTML="<center><img src='../../img/ajax-loader.gif<br>Carregando...</center>'>";
  }  
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("conteudo").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("POST","../../controle/AlunoControle.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("acao="+buceta);
}

function Alunos()
{
var xmlhttp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==1)
{  
  document.getElementById("conteudo").innerHTML="<center><img src='../../img/ajax-loader.gif'><br>Carregando...</center>";
  
}     
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("conteudo").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","../aluno/_visao.php",true);

xmlhttp.send();
}

function adm()
{
var xmlhttp;
xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==1)
{  
  document.getElementById("conteudo").innerHTML="<center><img src='../../img/ajax-loader.gif'><br>Carregando...</center>";
  
}     
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("conteudo").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","adm.php",true);

xmlhttp.send();
}