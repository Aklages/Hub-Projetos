<?php
    $n1 = 0;
    $result = 0;

    if(isset($_POST['calc'])){
        $n1 = (int)$_POST['n1'];
        if($n1 >= 0){
            $result = 'positivo';
        }
        else
        $result = 'negativo';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <div class="titulo"><h4 class="text-primary">Positivo ou Negativo</h4><br></div>
  <form method="post">
      <div class="mb-3">
        <label class="form-label">Digite um número</label>
        <input type="number" name="n1" class="form-control" value="0">
      </div>
      <button type="submit" name="calc" class="btn btn-primary">Calcular</button>
        <p>Seu número é: <?= $result ?> </p>
    </form>

</body>
</html>