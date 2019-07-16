
<html>
    <head>
        <title>Home</title>

 
      <style >
     

#logo{
                 background: white;
                 width: 100%;
                 height: 400px;
                 margin:5px;
                 


            }
            
            
            #todo{
                background: #559955;
                width: 100%;
                height: 1500px;  
                border-radius:0;
-webkit-border-radius:20px;
-webkit-box-shadow:5px 5px  5px #AA0000;        
            }
 
            #esquerdo{
                background: white;
                width: 20%;
                height:630px;
                float: left;
                margin-left: 10px;
                margin-top: 10px;
                border-radius:0;
-webkit-border-radius:20px;
-webkit-box-shadow:5px 5px  5px #AA0000;	
            }
            
            #centro{
                background: white;
                width: 50%;
                height:1449px;
                float: left;
                margin-left: 69.5px;
                margin-top: 10px;
                border-radius:0;
-webkit-border-radius:20px;
-webkit-box-shadow:5px 5px  5px #AA0000;
              
            }
            
            #direita{
                background: #559955;
                width: 20%;
                height: 1100px;
                float: right;
                margin-right:10px;
                margin-top: 10px;
                border-radius:0;
-webkit-border-radius:20px;

            }
            
            #direita_superior{
                background:  white;
                width: 115%;
                height: 630px;
                float: right;
                margin-right:10px;
                margin-top: 10px;
                border-radius:0;
-webkit-border-radius:20px;
-webkit-box-shadow:5px 5px  5px #AA0000;
            }
            
.menu{
margin: 5;
padding: 5;

}
.menu ul{ 
list-style-type:none;
}
.menu li{
width: 350px;
height: 50px; 
padding: 0;
margin: 3px;
position: relative;
border-bottom: #999999inset;
list-style-type:none;
-webkit-border-radius: 7px;
}
.menu li ul{
width: 270px;
height: auto;
padding: 0;
margin: 5px;
border-left: #CCCCCC 5px inset;
display: none;
position: absolute;
left: 180px;
top: 0;
list-style-type:none;

}

/*nível inferior do menu com display: none*/

.menu a{
display: block;
text-decoration: none;
padding: 10px;
background-color:green;
font-family:Verdana;

font-size: 15px;
font-weight: 400;
color: #FFFFFF;
-webkit-border-radius: 7px;
}
.menu a:hover{
background-color:black;
text-decoration: none;
color: #FFFFFF;
}

/* hack para o IE não criar margens\*/ 
* html ul li { float: left; height: 1%; } 
* html ul li a { height: 1%; } 
/*End */ 

.menu li:hover ul, li.over ul{
display: block;
}

/*mostra nível inferior ao passar o cursor*/

.menu li.btnultimo{
border-bottom: none;
}



            
            
      
        </style>

     <script type="text/javascript">  
function validaCampo()  
{  
    if(document.cadastro.nome.value=="")  
    {  
        alert("O Campo nome é obrigatório!");  
        return false;  
    }  
    else  
    if(document.cadastro.email.value=="")  
    {  
        alert("O Campo email é obrigatório!");  
        return false;  
    }  
    else  
    if(document.cadastro.endereco.value=="")  
    {  
        alert("O Campo endereço é obrigatório!");
        return false;  
    }  
    else  
    if(document.cadastro.cidade.value=="")  
    {  
        alert("O Campo Cidade é obrigatório!");  
        return false;  
     }  
    else  
    if(document.cadastro.estado.value=="")  
    {  
        alert("O Campo Estado é obrigatório!");  
        return false;  
    }  
    else  
    if(document.cadastro.bairro.value=="")  
    {  
        alert("O Campo Bairro é obrigatório!");  
        return false;  
    }  
    else  
            {  
        alert("O Campo país é obrigatório!");  
        return false;  
    }  
       else  
    if(document.cadastro.login.value=="")  
    {  
        alert("O Campo Login é obrigatório!");  
        return false;  
    }
    else 
        if(document.cadastro.senha.value=="")  
    {  
        alert("Digite uma senha!");  
        return false;  
    }  
    else  
        return true;  
}  
</script>  
  
  
    </head>
     <body>
        <div id="logo">
            <img src="logo.png" width="100%" height="400px">
            
            
            
          
             
          
        </div>

              

              <div id="todo">
            
                           
                            
                      <div id="esquerdo">
                      <b> <center>  
      
 <ul class="menu">
<li><a href="home.php"><font Face="verdana" size="3px"><b>HOME</b></a></li>
<li><a href="disciplinas.php"><font Face="verdana" size="3px"><b>Disciplinas</b></a>

<li><a href="questionario.php"><font Face="verdana" size="3px"><b>Questionario</b></a></li>
<li><a href="cidades.php"><font Face="verdana" size="3px"><b>Cadastro de Alunos</b></a></li>

</ul>
</LI>


</ul>

</font>

<center>


                      
 
           </form>
           
                             </div>
                                    
                             <div id="centro">
                             <br>
                             <center><img src="brasao-ceara.png"width="200px"></center>
                             <font face="alegria"color="green"size="3px">
                             <center>
                             <h3>EEEP David Vieira da Silva<br>
                         Conheca Nossa Escola<br>
                            <br>
                            
 <h1>  Disciplinas </h1>
                         <br><h2>PHP:<p></h2><font face=""color="green"size="4px">A linguagem de programacao PHP foi criada em 1994 por Ramus Lerdorf. <br>

No inicio era formada por um conjunto de scripts voltados para a criacao

de paginas dinamicas que Ramus utilizava para monitorar o acesso ao seu

curriculo na internet. A medida que essa ferramenta foi crescendo em funcionalidades,

Ramus teve de escrever uma implementacao em C, a qual permitia as pessoas desenvolverem de 

forma muito simples suas aplicacoes para web. Ramus nomeou essa versao de PHP/FI

(Personal Home Pages/Forms Interpreter) e decidiu disponibilizar seu

codigo na web, em 1995, para compartilhar com outras pessoas bem

 como receber ajuda com bugs.</font></p>
 
 
 
 
 <br><h2>Banco de Dados:<p></h2>

                            <font face=""color="green"size="4px"> <p>

Bancos de dados ou bases de dados ao colecoes de 

informacoes que se relacionam de forma a criar um sentido.

 Sao de vital importancia para empresas, e ha duas decadas 

 se tornaram a principal peca dos sistemas de informacao.

  Normalmente existem por varios anos sem alteracoes em sua 

  estrutura.</font></p>
  
  
  
  <h2>HTML:</h2>
  <font face=""color="green"size="4px">  
  <p>

(abreviacao para a expressao inglesa HyperText Markup Language,

 que significa Linguagem de Marcacao de Hipertexto) A uma

  linguagem de marcacao utilizada para produzir paginas na Web.

   Documentos HTML podem ser interpretados por navegadores.

    A tecnologia e fruto do "casamento" dos padroes HyTime e SGML.

HyTime A um padrao para a representacao estruturada de

 hipermedia e conte?do baseado em tempo. Um documento a visto

 como um conjunto de eventos concorrentes dependentes de tempo 

 (como Audio, video, etc.), conectados por hiperligacoes.
                          
                            
                            
                          
                             </font>
                            
                             </center>
                             </font>

                                    </div>
                                     <div id="direita">
                                     
            
            <div id="direita_superior">
            <img src="inst.jpg" width="150px" height="100px"><br>
            <img src="download (7).jpg" width="150px" height="100px"><br>
             <img src="sasjah.jpg" width="150px" height="100px"><br>
            <br><img src="download (6).jpg" width="150px" height="100px"><br>
             <img src="download (4).jpg" width="150px" height="100px"><br>
              <img src="5031141113.jpg" width="150px" height="100px">
           
                                           </div>
                                           
                                           
</div>

        
     
              </div>  
        
    </body>
</html>
                                    