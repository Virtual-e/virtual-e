/* 
 *Dividir a logica do ajax não usa do jquery, assim vai fixar mais
 *o aprendizado do javascrip e do fluxo dos dados
 */


function ListarAlunos(campo)
{
 //var campo = window.document.getElementById('pagina').value;
 var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("myDiv").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("POST","../../controle/aluno/ControleAluno.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("acao=listar&pagina="+campo);
}

//chamar pagina aluno 



function ChamarAlunoView()
{
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("myDiv").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("GET","../../visao/aluno/index.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(null);
}

//chamar formulario de cadastro novo aluno 

function ChamarFormularioAluno()
{
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("myDiv").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("GET","../../visao/aluno/frmAluno.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send(null);
}

//popula combo cidade


function PopulaComboCidade(cep)
{
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("cidades").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("cidades").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("POST","../../controle/aluno/ControleAluno.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("acao=CbxCidade&cep="+cep);
}


//popula bairro


function PopulaBairro(cep)
{
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("bairro").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("bairro").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("POST","../../controle/aluno/ControleAluno.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("acao=CbxBairro&cep="+cep); 
}

//popula estado  



function PopulaEstado(cidade)
{
 
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("estado").innerHTML=xmlhttp.responseText;
    }
  if(xmlhttp.readyState==1)
      {
          document.getElementById("estado").innerHTML="<center><img src=../../include/imagens/loader.gif><br>Aguarde...</center>";
      }
  }
 
xmlhttp.open("POST","../../controle/aluno/ControleAluno.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("acao=CbxEstado&cidade="+cidade); 
}