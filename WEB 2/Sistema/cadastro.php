
<html>
<head>

<title>Cadastro</title>

<script type="text/javascript"> 

function validaCampo() { 
	

	if(document.cadastro.nome.value=="")

		 { alert("O Campo nome � obrigat�rio!");

		  return false; } 
	  else 
		  if(document.cadastro.email.value=="") 

					  { alert("O Campo email � obrigat�rio!"); return false; } 

		  else 
			  if(document.cadastro.endereco.value=="") 

			  { alert("O Campo endere�o � obrigat�rio!"); return false;
			  }
			  else 
				  if(document.cadastro.cidade.value=="") 
					  { alert("O Campo Cidade � obrigat�rio!"); return false;
			  } 
				  else 
					  if(document.cadastro.estado.value=="") 
						  { alert("O Campo Estado � obrigat�rio!"); return false; 
						  } 
					  else 
						  if(document.cadastro.bairro.value=="") 
							  { 
							  alert("O Campo Bairro � obrigat�rio!");
							  return false;
							   } 
						  else 
							  if(document.cadastro.pais.value=="") 
								  { alert("O Campo pa�s � obrigat�rio!"); return false; 
								  }
							   else 
								   if(document.cadastro.login.value=="") 
									   { alert("O Campo Login � obrigat�rio!"); return false; 
									   } 
								   else 
										   if(document.cadastro.senha.value=="") 
										   { alert("Digite uma senha!"); return false; } else return true; 
	   }


</script>
<body>
<center>
<TABLE width="95%"   bgcolor="black" background="WHITE" style="
border: white 5px solid;padding: 10px;border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;margin: 2px; ">
<tr><td>
<center>
<font color="#1E90FF"> <h2> CADASTRO ONLINE </h2></font>
</center>
</td></tr>

</TABLE> 
<form name="cadastro" method="post" action="conect.php"  onsubmit="return validaCampo(); return false;">
<table width="95%"   height="30%" bgcolor="black" background="WHITE" style="
border: white 5px solid;padding: 10px;border-radius:20px;  -moz-border-radius: 20px; -webkit-border-radius: 20px;margin: 2px;COLOR: WHITE; ">

<tr>
<td width="69">Nome:</td>
<td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Email:</td>
<td><input name="email" type="text" id="email" size="70" maxlength="60" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Sexo:</td>
<td><input name="sexo" type="radio" value="Masculino" checked="checked" />
Masculino
<input name="sexo" type="radio" value="Feminino" />
Feminino <span class="style1">*</span> </td>
</tr>
<tr>
<td>DDD:</td>
<td><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
Telefone:
<input name="telefone" type="text" id="telefone" />
<span class="style3">Apenas n�meros</span> </td>
</tr>
<tr>
<td>Endere�o:</td>
<td><input name="endereco" type="text" id="endereco" size="70" maxlength="70" />
<span class="style1">*</span></td>
</tr>
<tr><td>Cidade:</td>
<td><input name="cidade" type="text" id="cidade" maxlength="20" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Estado:</td>
<td><select name="estado" id="estado">
<option>Selecione...</option>
<option value="AC">AC</option>
<option value="AL">AL</option>
<option value="AP">AP</option>
<option value="AM">AM</option>
<option value="BA">BA</option>
<option value="CE">CE</option>
<option value="ES">ES</option>
<option value="DF">DF</option>
<option value="MA">MA</option>
<option value="MT">MT</option>
<option value="MS">MS</option>
<option value="MG">MG</option>
<option value="PA">PA</option>
<option value="PB">PB</option>
<option value="PR">PR</option>
<option value="PE">PE</option>
<option value="PI">PI</option>
<option value="RJ">RJ</option>
<option value="RN">RN</option>
<option value="RS">RS</option>
<option value="RO">RO</option>
<option value="RR">RR</option>
<option value="SC">SC</option>
<option value="SP">SP</option>
<option value="SE">SE</option>
<option value="TO">TO</option>
</select>
<span class="style1">* </span></td>
</tr>
<tr>
<td>Bairro:</td>
<td><input name="bairro" type="text" id="bairro" maxlength="20" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Pa�s:</td>
<td><input name="pais" type="text" id="pais" maxlength="20" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Login:</td>
<td><input name="login" type="text" id="login" maxlength="12" />
<span class="style1">*</span></td>
</tr>
<tr>
<td>Senha:</td>
<td><input name="senha" type="password" id="senha" maxlength="12" />
<span class="style1">*</span></td>
</tr>
<tr>
<td colspan="2"><input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />
Desejo receber novidades e informa��es sobre o conte�do deste site. </td>
</tr>
<tr>
<td colspan="2"><p>
<input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" />
<input name="limpar" type="reset" id="limpar" value="Limpar" />
<span class="style1">* Campos com * s�o obrigat�rios! </span></p>
<p> </p></td>
</tr>
</table>
</form>


</center>




</body>
</html>