<?php
//el usuario primero pide el formulario para llenar la informacion por GET
//Y UNA VEZ QUE YA LO LLENO LA INFORMACION VA A VIAJAR POR POST A LA MISMA
//URL Y TENEMOS QUE VALIDARLO... O SEA PASO 1) DETECTAR QUE EL PEDIDO VINO POR POST!!!--->
if ($_POST){
  //AGREGAMOS 4 CAMPOS P VALIDAR
  if (strlen($_POST["nombre"]) == 0) {
    echo "No llenaste el nombre <br>";
  }
  if (strlen($_POST["usuario"]) < 8) {
    echo "El usermame debe tener al menos 8 caracteres <br>";
  }
  if (is_numeric($_POST["edad"]) == false) {
     echo "La edad debe ser numérica <br>";
  }
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
   echo "El mail no tiene el formato correcto <br>";
  }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="validacion.php" method="post">
      <div class="">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="">
      </div>
      <div class="">
        <label for="">Usuario:</label>
        <input type="text" name="usuario" value="">
      </div>
      <div class="">
        <label for="">Email:</label>
        <input type="text" name="email" value="">
      </div>
      <div class="">
        <label for="">Edad:</label>
        <input type="text" name="edad" value="">
          </div>
        <input type="submit" name="" value="Enviar">
    </form>

  </body>
</html>
