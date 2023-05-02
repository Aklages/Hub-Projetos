<?php
    $n1 = 0;
    $n2 = 0;
    $result = 0;
    $s = 0;
    $calc = 'somar';

    if(isset($_POST['calcular'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $s = ($n1 + $n2) / 2;
        if($s >= 7 && $s != 10){
            $result = "Aprovado";
        }
        else if($s < 7){
            $result = "Reprovado";
        }
        else if($s == 10){
            $result = "Aprovado com distincao";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="titulo"><h4 class="text-primary">Nota</h4><br></div>
    
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Primeiro número</label>
        <input type="number" name="n1" class="form-control" value="0">
      </div>
      <div class="mb-3">
        <label class="form-label">Segundo número</label>
        <input type="number" name="n2" class="form-control" value="0">
      </div>
      <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
        <p>Status: <?= $result ?> </p>
    </form>

</body>
</html>