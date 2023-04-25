<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Projects</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src='main.js'></script>
</head>
<body class="bg-primary bg-opacity-50">
<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="projects.php">Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
      </ul>
      <div>
        <p style="margin:0rem"><?php echo("Bem vindo(a): " . $_POST["user"] . "!")?></p>
      </div>
      <div>
        <p style="margin:0rem; margin-right: 3rem; margin-left: 3rem;"><?php echo date("d/m/Y"); echo(" "); echo date("H:i:s");?></p>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Procurar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Procurar</button>
      </form>
      <div>
        <a style="margin:0rem; margin-left: 1rem; margin-right: 1rem" class="text-decoration-none" href="home.php">LogOut</a>
      </div>
    </div>
  </div>
</nav>
  <div class="container bg-primary-subtle position-absolute top-50 start-50 translate-middle rounded"style="padding: 2rem">
      <div class="container text-center">
          <div class="row">
              <div class="col">
              <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Atividade Calculadora</h5>
              <p class="card-text">Calculadora feita com php.</p>
              <a href="calculator.php" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>
              <div class="col">
              <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/201/200" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Atividade If/Else</h5>
              <p class="card-text">Atividade If/Else usando php.</p>
              <a href="ifelse.php" class="btn btn-primary">Ver Projeto</a>
            </div>
          </div>
        </div>
            <div class="col">
            <div class="card" style="width: 18rem;">
          <img src="https://picsum.photos/200/201" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Atividade Calculadora</h5>
            <p class="card-text">Atividade Calculadora</p>
            <a href="#" class="btn btn-primary">Ver Projeto</a>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>