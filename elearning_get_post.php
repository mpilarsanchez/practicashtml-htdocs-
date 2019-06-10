<?php
//URL: http://localhost/http_get_post/elearning_get_post.php?nombre=Jon&apellido=Snow&casa=Stark&casa=Stark;
// var_dump($_GET);
// echo "<pre>";
// echo "Hola me llamo " . $_GET["nombre"]. " " . $_GET["apellido"];
//
// if (isset($_GET["casa"])){
//   echo "<br>";
//   echo "Soy de la casa ". $_GET["casa"];
// }else{
//   echo "<br>";
//   echo "No tengo casa :(";
// }

//PARA DETECTAR SI EL PEDIDO VINO POR POST
if ($_POST) {
//  echo "Vine por POST";
  //VALIDAR

  //REGISTRARLO
}

//PARA REDIRIGIR AL USUARIO
 //header("Location:exito.php"); exit;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>$_GET</h1>
    <form class="" action="resultados_get_post.php" method="post">
      <div class="">
        <input type="text" name="nombre" value="" placeholder="INGRESAR EL NOMBRE">
      </div>
      <div class="">
        <input type="text" name="email" value="">
      </div>
      <div class="">
        <input type="submit" name="" value="Enviar">
      </div>
    </form>
    <h1>$_POST</h1>
    <form class="" action="resultados_get_post.php" method="POST">
      <div class="">
        <input type="text" name="nombre" value="">
      </div>
      <div class="">
        <input type="text" name="email" value="">
      </div>
      <div class="">
        <input type="submit" name="" value="Enviar">
      </div>
    </form>
  </body>
</html>

<!-- Al completar el formulario y enviar si bien la pagina "resultados.php" no existe
podemos analizar la URL:http://localhost/http_get_post/resultados.php?nombre=Jon&email=jonsnow%40stark.com
Esto nos permite tomar la informacion del formulario a traves de $_GET y mostralo en pantalla o guardarlo
en una base de datos!!!!  -->
