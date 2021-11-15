<?php
require_once "public/layout/header.php";

echo "<h1>Bienvenid@ <span class='text-primary'>" . $_SESSION["usuario"] . "</span> es: " . $_SESSION["tipo"] . "</h1>";
?>


