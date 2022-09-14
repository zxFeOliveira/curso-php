<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo '$numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br> $texto";

$objeto = 'caneta';
echo "<br> Eu tenho cinco $objetos";
echo "<br> Eu tenho cinco {$objeto}s.";
echo "<br> Eu tinha cinco { $objeto}s mas perdi tres {$objeto }s."; //evitar espaços dentro das chaves
