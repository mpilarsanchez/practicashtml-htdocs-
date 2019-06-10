<?php
if ($_POST){
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  if (strlen($_POST["nombre"]) == 0) {
    echo "No llenaste el nombre <br>";
  }
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    echo "El mail no tiene el formato correcto <br>";
  }
if (($_POST["nombre"] == true) && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true)) {
  header("location: http://digitalhouse.com");
 }
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="presencial_persistencia_validacion(04-06).php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" value="">
      <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email" value="">
        <br>
        <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
