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
background-image:url(‘Suaimagemaqui’);
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

//Alterar o Texto que stá dentro das Aspas em baixo:
var text='LDK';
var delay=40; // altere aqui velocidade 
var Xoff=20; // distancia a contar para a direita do cursor (- Valores em negativo vão para a esquerda)
var Yoff=0; //distancia a contar para baixo desde o cursor (- Valores em negativo vão para cima)
var txtw=14; // Espaço que cada caracter ocupa
var beghtml='<font color="BLUE"><b>';  
var endhtml='</b></font>';  
//********** Não alterar o código seguinte **********\\
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
			<li><a href="desafio.php" title="Link 4">DESAFIO</a></li>
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
<td><BR><!-- Início Código Enquete -->
<script type="text/javascript">
	(function() {
		var ce = document.createElement('script'); ce.type = 'text/javascript'; ce.async = true;
		ce.src = 'http://s1.criarenquete.com.br/user.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ce, s);
	})();
</script>
<ce:enquete id="6363610" largura="200" altura="206" fonte-pergunta="arial" tamanho-fonte-pergunta="14px" tamanho-fonte-alternativa="14px" cor-fonte-pergunta="#000000" cor-fonte-alternativa="#000000" cor-botao="#000000" ver-resultado="false" ></ce:enquete>
<!-- Reporte BUG's: contato@criarenquete.com.br -->
<!-- Fim código enquete -->

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
<tr><td><center><h9><b>CURSO TÉCNICO EM INFORMÁTICA</b></h9></center></td></tr>
<tr><td><center><h9><b>DICLIPLINA:</b>PHP E MYSQL</h9></center></td></tr>
<tr><td><center><h9><b>PROFESSOR:</b>CARLOS HERRIQUE</h9></center></td></tr>

</table>
</center>
<br><br><br>
<center><h1><font color="white">Cadastro PHP</font></h1></center>
<div id="list">
<form action="checkbox.php" method="post">

<?php 
$materias[1]="Matemática;<br>";
$materias[2]="Português;<br>";
$materias[3]="Historia;<br>";
$materias[4]="Geografia<br>";
$materias[5]="Informática Basica;<br>";
$materias[6]="POO II;<br>";
$materias[7]="Banco de Dados;<br>";
$materias[8]="Física;<br>";
$materias[9]="Química;<br>";

?>
<center><h1><font color="black">Lista de Preferências</font></h1></center>
<ul><li>Marque as Diciplinas que Queira se Matricular</li></ul>
<?php foreach ($materias as $value){
?>
<input type="checkbox" name="prefe[]" value= "<?php echo $value;  ?> ">
<label><?php echo $value ;?></label>
<?php 
}
?>
<input type="submit" value="Enviar" name="enviar">

<center><h1><font color="black">Materias Preferidas</font></h1></center>
<?php 
$lista_mate = $_POST['prefe'];
foreach ($lista_mate as $value){
	echo "<p></p>" , $value;
	
}

?>
</form>
<form action="checkbox.php" method="post">

<?php 
$esportes[1]="Futebol;<br>";
$esportes[2]="Basquete;<br>";
$esportes[3]="Esgrima;<br>";
$esportes[4]="Ciclismo<br>";
$esportes[5]="Boxe;<br>";
$esportes[6]="Natação;<br>";


?>
<center><h1><font color="black">Lista de Preferências</font></h1></center>
<ul><li>Marque seus esportes preferidos</li></ul>
<?php foreach ($esportes as $value){
?>
<input type="checkbox" name="prefe[]" value= "<?php echo $value;  ?> ">
<label><?php echo $value ;?></label>
<?php 
}
?>
<input type="submit" value="Enviar" name="enviar">

<center><h1><font color="black">Esportes Preferidas</font></h1></center>
<?php 
$lista_esport = $_POST['prefe'];
foreach ($lista_esport as $value){
	echo "<p></p>" , $value;
	
}

?>
</form>




</div>

<div id="notas">
<center><h1><font color="black">Informe as Notas</font></h1></center>
<form action="checkbox.php" method="post">
<table>
<tr>
<td>Nota 01:</td>
<td><input type="text" name="not01" ></td>
</tr>
<tr>
<td>Nota 02:</td>
<td><input type="text" name="not02"></td>
</tr>
<tr>
<td>Nota 03:</td>
<td><input type="text" name="not03"></td>
</tr>
<tr>
<td><input type="submit" value="Enviar"></td>
</tr>

<tr>
<td>Maior Nota:</td>
<td><?php 
$nota01 = $_POST['not01'];
$nota02 = $_POST['not02'];
$nota03 = $_POST['not03'];
if (($nota01 > $nota02) && ($nota01 > $nota03)){
	$maior_not = $nota01;
}
if (($nota02 > $nota01) && ($nota02 > $nota03)){
	$maior_not = $nota02;
}
if (($nota03 > $nota01) && ($nota03 > $nota02)){
	$maior_not = $nota03;
}


?>
<input type="text" name="resutado" readonly="true" value= "<?php  echo $maior_not ;?> "/>
</td>
</tr>

</table>
</form>
</div>



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
<tr><th>Kassiane Lopes Façanha</th></tr>
<tr><th>2º Ano do Curso Técnico em Informática</th></tr>
<tr>
<td id="kassi">
 <CENTER><img alt="" src="day.jpg" width="50%" height="15%"  style=" background:black; color:black; border:black 3px solid; padding: clique aqui 10px;
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"></CENTER>
</td>
</tr>
<tr><th>Dayana Lobo da Silva</th></tr>
<tr><th>2º Ano do Curso Técnico em Informática</th></tr>
<tr>
<td id="kassi">
 <CENTER><img alt="" src="lili.jpg" width="50%" height="50%"  style=" background:black; color:black; border:black 3px solid; padding: clique aqui 10px;
 border-radius:20px; -moz-border-radius: 20px; -webkit-border-radius: 20px;"></CENTER>
</td>
</tr>
<tr><th>Liliane Ferreira Barbosa</th></tr>
<tr><th>2º Ano do Curso Técnico em Informática</th></tr>
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
NOTÍCIAS
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
ANÚNCIOS
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