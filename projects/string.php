<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="titulo">Tipo String</div>
<?php
ini_set('default_charset','utf-8');
echo 'Eu sou uma String';
echo '<br>';
var_dump("Eu também");
echo '<br>';

// concatenação
echo "nos tambem".' somos';
echo '<br>', "Também aceito ","virgulas";
echo '<br>';
echo "'teste' ". '"teste" '. '\'teste\' '."\"teste\" "."\\";

print "<br> também exite a função print";

echo '<p>---Funções---</p>';

//Funções
echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('MINIMIZADO');
echo '<br>'. ucfirst('só a primeira letra');
echo '<br>'. ucwords('todas as palavras');
echo '<br>'. strlen('Quanto carecteres?');
echo '<br>'. strlen("eu também");
echo '<br>'. mb_strlen("    mbém","utf-8");
echo '<br>'. substr('Só uma parte mesmo',6,7);
echo '<br>'. str_replace(' ', '-', 'Trocar isso isso');






?> 
</body>
</html>
