<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;
echo '<br>';
echo var_dump(true);
echo '<br>';
echo var_dump(false);
echo '<br>';
echo is_bool(false);
echo '<br>';
echo is_bool(true);
echo '<br>';
echo is_bool('true');

// fazer as regras de conversões
echo '<p>Regras:</p>';
echo '<br>' . var_dump((bool) 0); //apenas 0 é false
echo '<br>' . var_dump((bool) 0.0); // false
echo '<br>' . var_dump((bool) 1); // verdadeiro
echo '<br>' . var_dump((bool) 20); // verdadeiro
echo '<br>' . var_dump((bool) -1); // valor negativo também é convertido para verdadeiro
echo '<br>' . var_dump((bool) ""); // String vazia, false
echo '<br>' . var_dump((bool) "0"); // String com zero, false
echo '<br>' . var_dump((bool) " "); // String com espaço, true
echo '<br>' . var_dump((bool) "00"); // String com mais de um zero, true

echo '<br>' . var_dump(!!""); // Dupla negação '!!' converte o valor para booleano
