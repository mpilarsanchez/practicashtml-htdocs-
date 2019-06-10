<?php
$nombre="";
$email="";
if ($_POST) {

  $errores =[];
// Leer los datos del formulario
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $pass = $_POST["password"];
  $pass_hass = password_hash($contraseña, PASSWORD_DEFAULT);
  $pass_confirm = $_POST["pass_confirm"];
  $pass_verify = password_verify($contraseña, $hash);
  $avatar = $_FILES["avatar"];
  $ext = pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
  $size = $_FILES["avatar"]["size"]/1000;

    if (strlen($nombre < 5)) {
      echo " El nombre debe tener al menos 5 caracteres <br>";
    } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        echo "El mail no tiene el formato correcto <br>";
       }
//elseif ($password < 8) {
//           $errores[] ="La contraseña debe tener al menos 8 digitos";
//         }elseif (ctype_alnum($pass)){
//             $errores[] ="La clave debe ser alfanumérica";
//           }elseif ($pass != $pass_confirm){
//               $errores = "Las contraseñas no verifican";
//           }elseif($ext != "jpg" && $ext !="jpeg" && $ext != "png"){
//                $errores[] = "la imagen no tiene el formato adecuado";
//               } elseif ($size > 500){
//                    $errores[] = "la imagen es muy pesada";
//                  } else {
//                     echo "Estas registrado";
//                   }
// header("location: http://digitalhouse.com");
//   }
//  }

}
//1.CREAR EL ARCHIVO USUARIOS.JSON
$archivo = "usuarios.json";
$usuarios = [
  0 => [
    "nombre" => "$nombre";
    "email" => "$email";
  ]
];
//p/convertir el arrary de usuarios en json
$json = json_encode($usuarios);
//p guardar/ESCRIBIR usuarios en el archivo "usuarios.json"
file_put_contents($archivo, $json, FILE_APPEND);
//P LEER EL ARCHIVO usuarios.json  //RECUPERAMOS EL STRING COMPLETO CON LA INFORMACION
file_get_contents($archivo);
echo $archivo; //ENCONTRAMOS EL STRING COMPLETO EN ESTA PAGINA
//P MODIFICAR Y AGREGAR OTRO Usuario
$usuarios = json_decode($archivo, true);

 ?>




<html>

<body>
 <form action="presencial_registracion(06-06).php" method="post" enctype="multipart/form-data">
   <label for="nombre">Nombre Usuario:</label>
   <input type="text" name="nombre" value="<?=$nombre?>">
   <br>
   <label for="email">E-mail:</label>
   <input type="text" name="email" value="<?=$email?>">
   <br>
   <label for="password">Contraseña:</label>
   <input type="password" name="pass">
   <br>
   <label for="pass_confirm">Confirmación Contraseña:</label>
   <input type="pass_confirm" name="pass_confirm">
   <br>
   <label for="id">id:</label>
   <input type="id" name="id">
   <br>
   <label for="avatar">Avatar:</label>
   <input type="file" name="avatar">
   <br>
   <input type="submit">
  <!-- <?php if(count($errores) > 0) :?>
          <ul>
          <?php foreach ($errores as $error) : ?>
              <li><?=$error?></li>
               <?php endforeach; ?>
                 </ul>
     <?php endif; ?> -->

 </form>
</body>

</html>
