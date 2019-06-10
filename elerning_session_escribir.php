<?php
session_start();//para utilizar la sesion del usuario que se conecta

$_SESSION["color"] = "Rojo";
$_SESSION["comida"] = "Asado";

echo "Ya escribimos sesión";
 ?>
