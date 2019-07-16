<?php
 
$questao1 = $_POST["qt1"];
$questao2 = $_POST["qt2"];
$questao3 = $_POST["qt3"];
$questao4 = $_POST["qt4"];
$questao5 = $_POST["qt5"];
$questao6 = $_POST["qt6"];
$questao7 = $_POST["qt7"];
$questao8 = $_POST["qt8"];
$questao9 = $_POST["qt9"];
$questao10 = $_POST["qt10"];
 
echo "<b>Questao 1</b> = ",$questao1,"<br>";
echo "<b>Questao 2</b>= ",$questao2,"<br>";
echo "<b>Questao 3</b> = ",$questao3,"<br>";
echo "<b>Questao 4</b> = ",$questao4,"<br>";
echo "<b>Questao 5</b> = ",$questao5,"<br>";
echo "<b>Questao 6</b> = ",$questao6,"<br>";
echo "<b>Questao 7</b> = ",$questao7,"<br>";
echo "<b>Questao 8</b>= ",$questao8,"<br>";
echo "<b>Questao 9</b>= ",$questao9,"<br>";
echo "<b>Questao 10</b> = ",$questao10,"<br><br><br>";
 
 
  $qt01 = "c";
 $qt02 = "c";
 $qt03 = "a";
 $qt04 = "c";
 $qt05 = "c";
 $qt06 = "c";
 $qt07 = "b";
 $qt08 = "b";
 $qt09 = "b";
 $qt10 = "c";
 
 
$acertou = 0;
$errou = 0;
 
if ($questao1 == $qt01)
{
    $acertou++;
    echo "<font color = blue> Questao 1 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 1 errada<br></font>";
}
 
if ($questao2 == $qt02)
{
    $acertou++;
    echo "<font color = blue> Questao 2 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 2 errada<br></font>";
}
 
if ($questao3 == $qt03)
{
    $acertou++;
    echo "<font color = blue> Questao 3 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 3 errada<br></font>";
}
 
if ($questao4 == $qt04)
{
    $acertou++;
    echo "<font color = blue> Questao 4 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 4 errada<br></font>";
}
 
if ($questao5 == $qt05)
{
    $acertou++;
    echo "<font color = blue> Questao 5 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 5 errada<br></font>";
}
 
if ($questao6 == $qt06)
{
    $acertou++;
    echo "<font color = blue> Questao 6 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 6 errada<br></font>";
}
 
if ($questao7 == $qt07)
{
    $acertou++;
    echo "<font color = blue> Questao 7 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 7 errada<br></font>";
}
 
if ($questao8 == $qt08)
{
    $acertou++;
    echo "<font color = blue> Questao 8 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 8 errada<br></font>";
}
 
if ($questao9 == $qt09)
{
    $acertou++;
    echo "<font color = blue> Questao 9 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 9 errada<br></font>";
}
 
if ($questao10 == $qt10)
{
    $acertou++;
    echo "<font color = blue> Questao 10 correta<br></font>";
}
else
{
    $errou++;
    echo "<font color = red> Questao 10 errada<br></font>";
}
 
$calc = 10;
$porcent = $calc * $acertou;
 
echo "<br><br> Voce <font color = blue>acertou</font> $acertou e <font color = red>errou</font> $errou.";
 
?>