<div class="titulo">Variáveis</div>

<?php
$numeroA =13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
echo $somaDosNumeros, '<br>';

echo isset($somaDosNumeros);
echo '<br>';
unset($somaDosNumeros);
echo !isset($somaDosNumeros);
echo '<br>';
var_dump($somaDosNumeros);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "String";
echo '<br>' . $variavel;

// Nomes de variáveis
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //evitar!
//$6var = 'invalida';
//$%var7 = 'invalida';
//$var8% = 'invalida';

echo '<br>';

var_dump($_SERVER["HTTP_HOST"]);
