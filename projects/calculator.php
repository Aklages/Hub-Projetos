<?php
  $result = 0;

  if(isset($_POST["calcular"])){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $s = $_POST["sinal"];
    $result = 0;

    switch ($s){
      case '-':
        $result = $n1 - $n2;
      break;
    case '+':
        $result = $n1 + $n2;
      break;
    case '*':
        $result = $n1 * $n2;
      break;
    case '/':
        $result = $n1 / $n2;
      break;
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Calculator</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src='main.js'></script>
</head>
<body class="bg-primary bg-opacity-50">
    <h4 class="text-primary">Calculadora</h4><br>
    <form method="post">
      <div class="mb-3">
        <label class="form-label">Primeiro Número</label>
        <input type="number" name="n1" class="form-control" value="0">
      </div>
      <div class="mb-3">
        <label class="form-label">Segundo número</label>
        <input type="number" name="n2" class="form-control" value="0">
      </div>
      <div class="mb-3">
        <label class="form-label">Sinal</label>
        <input type="text" name="sinal" class="form-control" maxlength="1" value="+">
      </div>
      <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
      <div style="margin-top:1rem;">
        <?php echo("O resultado é: " . $result)?>
      </div>
  </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>