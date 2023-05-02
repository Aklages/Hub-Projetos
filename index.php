<?php
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Login</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src='main.js'></script>
</head>
<body class="bg-primary bg-opacity-50">
  <div class="container bg-primary-subtle position-absolute top-50 start-50 translate-middle rounded"style="width: 30rem; padding: 2rem">
    <h1 class="text-center text-primary">< HUB-PROJETOS ></h1>
    <form action="home.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label text-primary">Usuário</label>
        <input type="text" name="user" class="form-control text-primary" id="inputmatricula">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label text-primary">Senha</label>
        <input type="password" class="form-control text-primary" id="inputsenha">
      </div>
    <button type="submit" class="btn btn-primary">Logar</button>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
      <div>
        <p style="margin-top: 2rem; margin-bottom: 0rem">Esqueceu a senha? <a href="#">clique aqui!</a></p>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>