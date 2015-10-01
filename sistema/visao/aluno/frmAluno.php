<?php 
/*
 * Autor:Wesley da silva pereira
 * data: 30/09/2015
 * 
 * formulário para criação de um novo aluno no sistema
 * tentativa p/ ver se da certo
 */
?>
<fieldset>
    <form action="#" >
        <center><label>Dados Pessoais</label></center>
        <hr bgcolor="silver">
        Nome:<input type="text" name="txtalu_nome"> &nbsp; Data de Nascimento <input type="number" name="dt_dia"  size="1">/<input type="number" name="dt_mes" size="1">/<input type="number" name="dt_ano" size="3">
        &nbsp; CPF: <input type="number" name="txtalu_cpf"  size="10"> &nbsp; RG: <input type="number" name="txtalu_rg"  size="10"><br>
        <br>
        Nome da Mãe:<input type="text" name="txtalu_mae"> &nbsp; Nome do Pai:<input type="text" name="txtalu_pae"> Telefone:<input type="text" name="txtalu_teleonfe">
        <br><br>
        Telefone 2:<input type="email" name="txtalu_telefone1"> &nbsp; E-mail:<input type="text" name="txtalu_email"> &nbsp;E-mail 2:<input type="text" name="txtalu_email1">
        <hr>
         <center><label>Endereço</label></center>
         <br><br>
         CEP:<input type="text" name="txtend_cep"onblur="PopulaComboCidade(this.value); PopulaBairro(this.value);" > 
         
         &nbsp; Cidade:<select name="cidades" id="cidades"   onblur="PopulaEstado(this.value)">
             <option value="" selected="true">--cidade--</option>  
                </select>
         &nbsp;
         Bairro:<select name="bairro" id="bairro">
             <option value="-1" selected="true">--bairro--</option>  
                </select>
           &nbsp;
        Estado:<select name="estado" id="estado">
             <option value="-1" selected="true">--uf--</option>  
                </select>
    </form>
    
</fieldset>