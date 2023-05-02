<?php
    $n1 = 'a';
    $result = 'a';

    if(isset($_POST['sexo'])){
        $n1 = $_POST['n1'];
        if($n1 == 'F' || $n1 == 'f'){
            $result = 'Feminino';
        }
        else if($n1 == 'M' || $n1 == 'm'){
            $result = 'Masculino';
        }
        else
            $result = 'Sexo Invalido';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <div class="titulo"><h4 class="text-primary">Sexo</h4><br></div>
  <form method="post">
      <div class="mb-3">
        <label class="form-label">Digite F ou M</label>
        <input type="text" name="n1" class="form-control" value="F">
      </div>
      <button type="submit" name="sexo" class="btn btn-primary">Calcular</button>
        <p>Sexo: <?= $result ?> </p>
    </form>

</body>
</html>
