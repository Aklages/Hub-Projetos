<?php 
  header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Exercício</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src='main.js'></script>
</head>
<body class="bg-primary bg-opacity-50">
  <div class="container bg-primary-subtle position-absolute top-50 start-50 translate-middle rounded"style="width: 40rem; padding: 2rem">
    <h1 class="text-center text-primary">< Visualização dos Exercícios ></h1><br>
    <?php
      include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
    ?>
    <br>
    <a href="home.php">Voltar</a>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>