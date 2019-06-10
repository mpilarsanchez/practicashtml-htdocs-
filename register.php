<?php
include("validations.php");
$nombre="";
$email="";
$errores =[];
if ($_POST) {

// Leer los datos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];
  $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
  $pass_confirm = $_POST["pass_confirm"];
  $pass_verify = password_verify($pass, $pass_hash);
  $avatar = $_FILES["avatar"];
  $ext = pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
  $size = $_FILES["avatar"]["size"]/1000;

  if(strlen($nombre) < 5) {
    $errores []= "El nombre debe teber al menos 5 caracteres";
  }
  if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
      $errores[] ="El mail no tiene el formato correcto <br>";
    }
    if (strlen($pass) < 8) {
      $errores[] ="La contraseña debe tener al menos 8 digitos";
    }
    if (!preg_match('`[a-z]`', $pass)){
      $errores[] = "La clave debe tener al menos una letra";
    }
    if (!preg_match('`[0-9]`',$pass)){
      $errores[] = "La clave debe tener al menos un caracter numérico";
    }
    if ($pass !== $pass_confirm) {
      $errores[] = "Las contranseñas no verifican";
    }
    if($ext != "jpg" && $ext !="jpeg" && $ext != "png"){
      $errores[] = "no es el formato adecuado";
    }
    if ($size > 500){
    $errores[] = "archivo muy pesado";
    }

  if(empty($errores)){
    //guardar los datos en un archivo
    save_registered_user($nombre, $email, $pass_hash, $id, $avatar);
    header("location: register_success.html");

  }
}

?>
 <html>
   <body>
    <form action="register.php" method="post" enctype="multipart/form-data">
      <label for="nombre">Nombre Usuario:</label>
      <input type="text" name="nombre" required value="<?=$nombre?>">
      <br>
      <label for="email">E-mail:</label>
      <input type="email" name="email" value="<?=$email?>">
      <br>
      <label for="password">Contraseña:</label>
      <input type="password" name="pass">
      <br>
      <label for="pass_confirm">Confirmación Contraseña: </label>
      <input type="password" name="pass_confirm">
      <br>
      <label for="id">id:</label>
      <input type="id" name="id">
      <br>
      <label for="avatar">Avatar:</label>
      <input type="file" name="avatar" required>
      <br>
      <input type="submit">
    </form>
 
    <ul>
      <?php foreach ($errores as $error) :?>
        <li><?=$error?></a></li>
      <?php endforeach; ?>
    </ul>
   </body>
 </html>
