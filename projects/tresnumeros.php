<?php
    $n1 = 0;
    $n2 = 0;
    $n3 = 0;
    $nmaior = 0;
    $result = 0;

    if(isset($_POST['maior'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];
        $n3 = (int)$_POST['n3'];
        if($n1 > $n2 && $n1 > $n3){
            $result = 'numero 1';
        }
        else if($n2 > $n1 && $n2 > $n3)
            $result = 'numero 2';
        else if($n3 > $n1 && $n3 > $n2)
            $result = 'numero 3';
            else
            $result = 'valores iguais';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <div class="titulo"><h4 class="text-primary">Três números</h4><br></div>
  <form method="post">
      <div class="mb-3">
        <label class="form-label">Primeiro número:</label>
        <input type="number" name="n1" class="form-control" value="0">
      </div>
      <div class="mb-3">
        <label class="form-label">Segundo número:</label>
        <input type="number" name="n2" class="form-control" value="0">
      </div>
      <div class="mb-3">
        <label class="form-label">Terceiro número:</label>
        <input type="number" name="n3" class="form-control" value="0">
      </div>
      <button type="submit" name="maior" class="btn btn-primary">Calcular</button>
        <p>O maior número é: <?= $result ?> </p>
    </form>

</body>
</html>