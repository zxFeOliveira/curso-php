<div class="titulo">Desafio Precedência</div>

<?php
echo '<p>1. Qual o valor será impresso</p>';
echo '2 + 5 * 3 + (12/6) / (-8 + 2 ** 3) <br>';
echo 'R: ',2 + 5 * 3 + (12/6) / (-8 + 2 ** 3), '<br>'; //INF

echo '<p> Qual expressão imprime o valor 100? </p>';
echo 'a) (1 + 2) * 20 - 15 <br>'; //45
echo 'R: ', (1 + 2) * 20 - 15, '<br>';
echo 'b) 4 * 5 ** 2 <br>';
echo 'R: ', 4 * 5 ** 2 , '<br>'; //100
echo 'c) 2 ** 3 ** 4 / 1e25 <br>';
echo 'R: ', 2 ** 3 ** 4 / 1e25, '<br>'; //
echo 'd) 3 + (3 * 8) / 2 - 3 <br>'; //12
echo 'R: ', 3 + (3 * 8) / 2 - 3, '<br>';