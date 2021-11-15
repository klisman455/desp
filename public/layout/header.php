<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
session_start();
if(empty($_SESSION)){
    header("locattion: login.php");
}

    echo "<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
  <div class='container'>
    <a class='navbar-brand' href='#'>systema</a>
    <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
      <div class='navbar-nav'>
        <a class='nav-link' href='bienvenido.php'>inicio</a>";
    if ($_SESSION["tipo"] == "estudiante") {
        echo "<a class='nav-link' href='notasMostrar.php'>notas mostrar</a>
         <a class='nav-link' href='matricula.php'>matricula</a>";
    } else {
        echo "<a class='nav-link' href='notarRegistro.php'>ingresa notas/a>
         <a class='nav-link' href='asistenciaMarcar.php'>asistencia</a>";
    }
    echo "<a class='nav-link' href='cerrar.php'>logout</a>
      </div>
    </div>
  </div>
</nav>";

    ?>
<div class="container mt=3">
