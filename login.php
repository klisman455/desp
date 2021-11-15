<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bg-ligth">  /*para poder poner fondo */
<div class="text-center mt-5">

    <h1>login Sistema</h1>
<form class="mt-5" method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <div class="mb-1"><input class="form-control" type="text" name="cod_estudiante" placeholder="Ingrese usuario"><br></div>
    <div class="mb-1 "><input class="form-control" type="text" name="clave" placeholder="Ingrese contraseña"><br></div>
    <input class="btn btn-primary w-50" type="submit" value="Login">

</form>
<?php

if(!empty($_POST)){
    $cod_estudiante = (int)$_POST["cod_estudiante"];
    $clave = (int)$_POST["clave"];

    require_once "app/controladores/UsuarioController.php";
    $usuarioController = new UsuarioController();
    if($usuarioController->login($cod_estudiante,$clave)){
        header("location: bienvenido.php");
    }else{
        echo "<div class='alert-danger mt-3'>Usuario y/o contraseña incorrectos12</div>";
    }
}
?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
