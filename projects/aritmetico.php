<div class="titulo"><h4 class="text-primary">Operações</h4></div>

<?php
ini_set('default_charset','utf-8');

echo 1+1, '<br>';
var_dump(1+1);
var_dump(1+1.0);
echo '<br>';
echo 1+2.5, '<br>';
echo 10-2, '<br>';
echo 2*5, '<br>';
echo 7/4, '<br>';
var_dump(7/4);
echo intdiv( 7,4), '<br>'; // força operação a ser feita apenas por números inteiros, ele apenas retira as casas decimais
echo round(7/4), '<br>'; // arrendonda para o valor inteiro mais próximo
echo 7 % 4, '<br>'; // modulo da divisao, mostra o que resta.
echo 7 % 2, '<br>';
echo 4 % 2, '<br>';
// echo 7 / 0, '<br>';
echo 4**2, '<br>'; // exponenciação = 4 elevado a 2

// Precedência de operadores:
//() >> ** >> / * % >> + -
echo '<p>Precedência</p>';
echo 2 + 3 * 4, '<br>';
echo (2 + 3) * 4, '<br>';
echo 2 + 3 * 4 ** 2, '<br>';
echo ((2+3)*4) ** 2, '<br>'; 
?>