
<html>
<head><title>LDK - Desenvolvimento em TI </title>

<style type="text/css">
/*- Menu 9--------------------------- */
	
#menu9 {
	width: 300px;
	margin: 20px;
	}
	
#menu9 li a {
	height: 32px;
  	voice-family: "\"}\""; 
  	voice-family: inherit;
  	height: 24px;
	text-decoration: none;
	}	
	
#menu9 li a:link, #menu9 li a:visited {
	color: #FFF;
	display: block;
	background:  url(menu9.gif);
	padding: 8px 0 0 35px;
	}
	
#menu9 li a:hover {
	color: #FFF;
	background:  url(menu9.gif) 0 -32px;
	padding: 8px 0 0 35px;
	}
	
#logo{

width: 98.5%;
height: 20%;


}
#esquerda{
margin: 9px;
width: 25%;
height: 300%;
float: left;

}
#conteudo{

width: 50%;
height: 300%;
float: left;

}
#direita{
width: 22%;
height: 300%%;
float: left;



}

}
#efeitocima {height:116px;
width:190px;
margin-left:auto;
margin-right: auto;
margin-top:50px;
z-index:100;}
#hovercima:hover{
background-repeat:no-repeat;
background-position: 0px -20px;
important;-webkit-transition: 0.15s ease-in;
-moz-transition: 0.15s ease-in;
transition: 0.15s ease-in;

}

.Qud {
background: #FFF;
border: 1px solid #DDD;
padding: 5px;
font-family: Arial;
font-size: 15px;
color: #222; 
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;}

#hovercima {display:inline-block;
height:196px;
width:720px;
background-repeat:no-repeat;
background-position: 0px 85px;
background-image:url(�Suaimagemaqui�);
important;-webkit-transition: 0.9s ease-in;
-moz-transition: 0.9s ease-in;
transition: 0.6s ease-in;}

p {
text-align: justify;
}
#kass{
width:10%;
}
#kassi{
-webkit-transition: all 0.5s linear;
-moz-transition: all 0.5s linear;
transition: all 0.5s linear;
-webkit-filter: grayscale(100%)}

#kassi:hover{-webkit-filter: grayscale(0%);}

 ::-webkit-scrollbar
 {width: 10px; height: 10px;}
 ::-webkit-scrollbar-track-piece
 {background-color: black; -webkit-border-radius: 3px;}
 ::-webkit-scrollbar-thumb:vertical
 {height: 6px; background-color: white; -webkit-border-radius: 3px;}
 ::-webkit-scrollbar-thumb:horizontal
 {width: 6px; background-color: white; -webkit-border-radius: 3px;}
</style>
<?php 
$est_civil = array ( 
'solteiro '=> array('id'=>'20'),
'casado '=> array('id'=>'10'),
'separado'=> array('id'=>'30'),
'divorciado '=> array('id'=>'34'),
'vi�vo'=> array('id'=>'50'),
);
?>
<script type="text/javascript">
//Created by Title bar Maker (http://www.bosiljak.hr/titlemaker)
function tb5_makeArray(n){
    this.length = n;
    return this.length;
}

tb5_messages = new tb5_makeArray(1);
tb5_messages[0] = "LDK DESENVOLVIMENTO";
tb5_rptType = 'infinite';
tb5_rptNbr = 5;
tb5_speed = 200;
tb5_delay = 2000;
var tb5_counter=1;
var tb5_currMsg=0;
var tb5_stsmsg="";
function tb5_shuffle(arr){
var k;
for (i=0; i<arr.length; i++){
    k = Math.round(Math.random() * (arr.length - i - 1)) + i;
    temp = arr[i];arr[i]=arr[k];arr[k]=temp;
}
return arr;
}
tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
    tb5_arr[i] = i;
	tb5_sts[i] = "_";
}
tb5_arr = tb5_shuffle(tb5_arr);
function tb5_init(n){
var k;
if (n == tb5_arr.length){
	if (tb5_currMsg == tb5_messages.length-1){
		if ((tb5_rptType == 'finite') && (tb5_counter==tb5_rptNbr)){
			clearTimeout(tb5_timerID);
			return;
		}
		tb5_counter++;
		tb5_currMsg=0;
	}
	else{
		tb5_currMsg++;
	}
	n=0;
	tb5_arr = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
	tb5_sts = new tb5_makeArray(tb5_messages[tb5_currMsg].length);
	for (var i=0; i<tb5_messages[tb5_currMsg].length; i++){
		tb5_arr[i] = i;
		tb5_sts[i] = "_";
	}
	tb5_arr = tb5_shuffle(tb5_arr);
	tb5_sp=tb5_delay;
}
else{
	tb5_sp=tb5_speed;
	k = tb5_arr[n];
	tb5_sts[k] = tb5_messages[tb5_currMsg].charAt(k);
	tb5_stsmsg = "";
	for (var i=0; i<tb5_sts.length; i++)
		tb5_stsmsg += tb5_sts[i];
		document.title = tb5_stsmsg;
		n++;
	}
	tb5_timerID = setTimeout("tb5_init("+n+")", tb5_sp);
}
function tb5_randomizetitle(){
	tb5_init(0);
}
tb5_randomizetitle();
</script>
 
<script>
 

 
$(document).ready(function() {
 
    //
 
 
 
//When you click on a link with class of poplight and the href starts with a #
 
$('a.poplight[href^=#]').click(function() {
 
    var popID = $(this).attr('rel'); //Get Popup Name
 
    var popURL = $(this).attr('href'); //Get Popup href to define size
 
 
 
    //Pull Query & Variables from href URL
 
    var query= popURL.split('?');
 
    var dim= query[1].split('&');
 
    var popWidth = dim[0].split('=')[1]; //Gets the first query string value
 
 
 
    //Fade in the Popup and add close button
 
    $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="http://static.tumblr.com/2bh9bxo/iTXmdcocj/sbdb.gif" class="btn_close" title="Volte My boo" alt="Close" /></a>');
 
 
    //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
 
    var popMargTop = ($('#' + popID).height() + 80) / 2;
 
    var popMargLeft = ($('#' + popID).width() + 80) / 2;
 
 
 
    //Apply Margin to Popup
 
    $('#' + popID).css({
 
        'margin-top' : -popMargTop,
 
        'margin-left' : -popMargLeft
 
    });
 
 
 
    //Fade in Background
 
    $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
 
    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies
 
 
 
    return false;
 
});
 
 
 
//Close Popups and Fade Layer
 
$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
 
    $('#fade , .popup_block').fadeOut(function() {
 
        $('#fade, a.close').remove();  //fade them both out
 
    });
 
    return false;
 
});
 
 
 
 
 
});
 
</script>
 
 


<script language="javascript">

//Alterar o Texto que st� dentro das Aspas em baixo:
var text='LDK';
var delay=40; // altere aqui velocidade 
var Xoff=20; // distancia a contar para a direita do cursor (- Valores em negativo v�o para a esquerda)
var Yoff=0; //distancia a contar para baixo desde o cursor (- Valores em negativo v�o para cima)
var txtw=14; // Espa�o que cada caracter ocupa
var beghtml='<font color="BLUE"><b>';  
var endhtml='</b></font>';  
//********** N�o alterar o c�digo seguinte **********\\
ns4 = (navigator.appName.indexOf("Netscape")>=0 && document.layers)? true : false;
ie4 = (document.all && !document.getElementById)? true : false;
ie5 = (document.all && document.getElementById)? true : false;
ns6 = (document.getElementById && navigator.appName.indexOf("Netscape")>=0 )? true: false;
var txtA=new Array();
text=text.split('');
var x1=0;
var y1=-1000;
var t='';
for(i=1;i<=text.length;i++){
t+=(ns4)? '<layer left="0" top="-100" width="'+txtw+'" name="txt'+i+'" height="1">' : '<div id="txt'+i+'" style="position:absolute; top:-100px; left:0px; height:1px; width:'+txtw+'; visibility:visible;">';
t+=beghtml+text[i-1]+endhtml;
t+=(ns4)? '</layer>' : '</div>';
}
document.write(t);
function moveid(id,x,y){
if(ns4)id.moveTo(x,y);
else{
id.style.left=x+'px';
id.style.top=y+'px';
}}
function animate(evt){
x1=Xoff+((ie4||ie5)?event.clientX+document.body.scrollLeft:evt.pageX);
y1=Yoff+((ie4||ie5)?event.clientY+document.body.scrollTop:evt.pageY);
}
function getidleft(id){
if(ns4)return id.left;
else return parseInt(id.style.left);
}
function getidtop(id){
if(ns4)return id.top;
else return parseInt(id.style.top);
}
function getwindowwidth(){
if(ie4||ie5)return document.body.clientWidth+document.body.scrollLeft;
else return window.innerWidth+pageXOffset;
}
function movetxts(){
for(i=text.length;i>1;i=i-1){
if(getidleft(txtA[i-1])+txtw*2>=getwindowwidth()){
moveid(txtA[i-1],0,-1000);
moveid(txtA[i],0,-1000);
}else moveid(txtA[i], getidleft(txtA[i-1])+txtw, getidtop(txtA[i-1]));
}
moveid(txtA[1],x1,y1);
}
window.onload=function(){
for(i=1;i<=text.length;i++)txtA[i]=(ns4)?document.layers['txt'+i]:(ie4)?document.all['txt'+i]:document.getElementById('txt'+i);
if(ns4)document.captureEvents(Event.MOUSEMOVE);
document.onmousemove=animate;
setInterval('movetxts()',delay);
}
</script>
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

</head>
<body background="FUNDO.png">


<div id="logo">

<center><img  src="LOGO.png" width="97%" height="170%">
</center>
</div>
<br><br><br><br><br><br><br>

<div id="esquerda"><CENTER>
<table width="70%"><tr><td bgcolor="white" style=" width:200px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
<marquee>SEJAM BEM VINDOS!!</marquee>
</td></tr></TABLE></CENTER>
<table><tr><td><center><div id="menu9">
		<ul>
			<li><a href="home2.php" title="Link 1">HOME</a></li>
			<li><a href="home.php" title="Link 2">LINGUAGENS</a></li>
			<li><a href="input.php" title="Link 3">INPUT</a></li>
			<li><a href="peso.php" title="Link 4">PESO</a></li>
			<li><a href="checkbox.php" title="Link 5">CHECKBOX</a></li>	
			<li><a href="radio.php" title="Link 4">RADIO</a></li>
			<li><a href="home1.php" title="Link 5">MOVEIS VIP</a></li>	
			<li><a href="dasafio.php" title="Link 4">DESAFIO</a></li>
			<li><a href="select.php" title="Link 5">SELECT</a></li>	
			<li><a href="tabela.php" title="Link 5">TABELA</a></li>	
			<li><a href="cadastro.php" title="Link 5">CADASTRO</a></li>	
			
		</ul>
</div>
<br /></center></td></tr></table>
<center>
<table><tr>
<th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">FACEBOOK
</th>
</tr>
<tr>
<td><BR><iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FLDK-Desenvolvimento-em-TI%2F397030497086629&amp;width=292&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:258px;" allowTransparency="true"></iframe><BR></td></tr></table>
<table>
<tr><th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">ENQUETE</th></tr>
<tr>
<td><BR><!-- In�cio C�digo Enquete -->
<script type="text/javascript">
	(function() {
		var ce = document.createElement('script'); ce.type = 'text/javascript'; ce.async = true;
		ce.src = 'http://s1.criarenquete.com.br/user.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ce, s);
	})();
</script>
<ce:enquete id="6363610" largura="200" altura="206" fonte-pergunta="arial" tamanho-fonte-pergunta="14px" tamanho-fonte-alternativa="14px" cor-fonte-pergunta="#000000" cor-fonte-alternativa="#000000" cor-botao="#000000" ver-resultado="false" ></ce:enquete>
<!-- Reporte BUG's: contato@criarenquete.com.br -->
<!-- Fim c�digo enquete -->

</td>
</tr>
</table>
</center>

</div>

<div id="conteudo">
<center>
<table>
<tr><td><center><img  src="brasao-ceara.png" width="30%" height="30%"> </center></td></tr>
<tr><td><center><h9><b>EEEP DAVID VIEIRA DA SILVA</b></h9></center></td></tr>
<tr><td><center><h9><b>CURSO T�CNICO EM INFORM�TICA</b></h9></center></td></tr>
<tr><td><center><h9><b>DICLIPLINA:</b>PHP E MYSQL</h9></center></td></tr>
<tr><td><center><h9><b>PROFESSOR:</b>CARLOS HERRIQUE</h9></center></td></tr>

</table>
</center>
<br><br><br>
<center>
CADASTRO
<table><tr><TD><img src=""></TD></tr></table>
<form name="cadastro" method="post" action="cadastro.php"  onsubmit="return validaCampo(); return false;">
<table width="625" border="0">
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

<?php

$nome= $_POST["nome"];
$email= $_POST["email"];
$ddd= $_POST["ddd"];
$tel= $_POST["telefone"];
$endereco= $_POST["endereco"];
$cidade= $_POST["cidade"];
$estado= $_POST["estado"];
$bairro = $_POST["bairro"];
$pais= $_POST["pais"];
$login= $_POST["login"];
$senha= $_POST["senha"];
$sexo= $_POST["sexo"];

$conexao = mysql_connect("localhost","root"); 
if (!$conexao)
die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysql_error());
$banco = mysql_select_db("clientes",$conexao);

$query = "INSERT INTO `clientes` ( `nome` , `email` , `sexo` , `ddd` , `telefone` , `endere�o` , `cidade` , `estado` ,
`bairro` , `pa�s` , `login` , `senha`  , `id` )
VALUES ('$nome', '$email', '$sexo', '$ddd', '$tel', '$endereco', '$cidade', '$estado', '$bairro', '$pais', '$login', '$senha',
, '')";
mysql_query($query,$conexao);

echo "Seu cadastro foi realizado com sucesso!Agradecemos a aten��o.";

?>
</center>
</div>
<div id="direita">
<CENTER>
<table>
<tr>
<th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">DESENVOLVEDORAS</th>
</tr>
<tr>
<td id="kassi">
 <CENTER><img alt="" src="18.jpg" width="50%" height="7%"  style=" background:black; color:black; border:black 3px solid; padding: clique aqui 10px;
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"></CENTER>
</td>
</tr>
<tr><th>Kassiane Lopes Fa�anha</th></tr>
<tr><th>2� Ano do Curso T�cnico em Inform�tica</th></tr>
<tr>
<td id="kassi">
 <CENTER><img alt="" src="day.jpg" width="50%" height="15%"  style=" background:black; color:black; border:black 3px solid; padding: clique aqui 10px;
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"></CENTER>
</td>
</tr>
<tr><th>Dayana Lobo da Silva</th></tr>
<tr><th>2� Ano do Curso T�cnico em Inform�tica</th></tr>
<tr>
<td id="kassi">
 <CENTER><img alt="" src="lili.jpg" width="50%" height="50%"  style=" background:black; color:black; border:black 3px solid; padding: clique aqui 10px;
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"></CENTER>
</td>
</tr>
<tr><th>Liliane Ferreira Barbosa</th></tr>
<tr><th>2� Ano do Curso T�cnico em Inform�tica</th></tr>
</table>

<table><tr><th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
PESQUISAR</th>

</tr><tr><td><br><form id="search" action="/search" method="get">
<input type="text" class="Qud" id="search-box" name="q" spellcheck="on" widdit="on" autocomplete="on">
<button type="submit" class="FiT" >Pesquisar</button>
</form></td></tr></table>
<center>
<table>
<tr><th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
NOT�CIAS
</th></tr>
<tr><td><BR><marquee direction="up" scrollamount="3"  height="200px" behavior="alternate"  onmouseover="this.stop()" onmouseout="this.start()">
<img src="noticias.jpg" width="100%">
<img src="noticias 1.jpg" width="100%" >
<img src="noticias 2.jpg"  width="100%">
<img src="noticias 3.jpg"  width="100%">
<img src="noticias 4.jpg"  width="100%">
<img src="noticias 5.jpg"  width="100%">
<img src="noticias 6.jpg"  width="100%"> 
</marquee></td></tr></table>
<br>
<table>
<tr><th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
AN�NCIOS
</th></tr>
<tr><td><BR><marquee direction="up" scrollamount="3" height="250px" behavior="alternate"  onmouseover="this.stop()" onmouseout="this.start()">
<img src="anuncios.jpg" width="100%">
<img src="anuncios 1.jpg" width="100%" >
<img src="anuncios 2.jpg"  width="100%">
<img src="anuncios 3.jpg"  width="100%">
<img src="anuncios 4.jpg"  width="100%">
<img src="anuncios 5.jpg"  width="100%">

</marquee></td></tr></table><br>
<table >

<tr>
<th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">
<center>CONTADOR DE VISITAS</center>
</th>

</tr>

<tr>

<td>
<BR>
 <CENTER>
 <div  align=center><center><a href='http://contador.s12.com.br'>
 <img src='http://contador.s12.com.br/img-aaC3550A-26.gif' border='0' alt='contador free'>
 </a>
 </center><script type='text/javascript' src='http://contador.s12.com.br/ad.js?id=aaC3550A'>
 </script>
 </div>
 </CENTER>
</td>
</tr>
</table>
</center>
<BR>

<table>
<tr>
<th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;">

DATA E HORA
</th>
</tr>
<tr>
<td><CENTER><BR>
<table border="0" align="center"><tr><td><embed src="http://www.cryd.com.br/relogios-feitos-em-flash/swf/12-09/364c.swf" quality="high" wmode="transparent" type="application/x-shockwave-flash" width="165" height="50"></embed></td></tr></table></CENTER>
</td>
</tr>
</table>
<BR>
<table>
<tr>
<th bgcolor="white" style="width:300px; height:30px;  border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"><center>VISITANTES ONLINE NO MAPA</center></th>
</tr>

</table>
<BR>
<table style="width: 10%;">
<tr >
<td >
 <CENTER >
 <script id="_wau9eo">var _wau = _wau || [];
_wau.push(["map", "0jqmjt8z3mr1", "9eo", "290", "210", "neosat", "star-blue"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/map.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
 </CENTER>
</td>
</tr>
</table>

</CENTER>


</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>

<div id="rodape">
<br>



</div>
</body>
</html>



</body>

</html>

