<?php
if ($_POST){
  //AGREGAMOS 4 CAMPOS P VALIDAR

  //EJERCICIO 1: El formulario que nos llega viaja por POST tiene un
  //<input type="text" name="nombre">
  //Tu tarea es completar la función validarNombre que
  //se fije si el texto esta vacío o no retornando un booleano


  function validarNombre() {
  $vacio = 0;
   if (strlen($_POST["nombre"]) == 0) {
     echo "no hay nombre";
    $vacio= false;
  }else{
    echo $_POST["nombre"];
     $vacio= true;
   }
 return $vacio;
}
validarNombre();

//EJERCICIO 2: El formulario que nos llega viaja por POST tiene un
//<input type="text" name="username">
//Tu tarea es completar la función validarUsername que se fije si
//el nombre de usuario tiene al menos 5 caracteres
//retornando un booleano

function validarUsername() {
$vacio = 0;
   if (strlen($_POST["username"]) < 5) {
    $vacio= false;
  }else{
     $vacio= true;
   }
 return $vacio;
}
validarUsername();

//EJERCICIO 3: El formulario que nos llega viaja por POST tiene un
//<input type="text" name="edad">
//Tu tarea es completar la función validarEdad que se fije si el valor
//enviado es un número entero y si es mayor (o igual) a 18 retornando un booleano
function validarEdad() {
  $vacio = 0;
if(is_integer($_POST["edad"]) && ($_POST["edad"] >= 18)){
  $vacio = true;
}else{
  $vacio = false;
}
 return $vacio;
}
validarEdad();
//EJERCICIO 4: El formulario que nos llega viaja por POST tiene un
//<input type="text" name="email">
// Tu tarea es completar la función validarEmail que se comporte del siguiente modo:
//Si el campo esta vacío debe retornar el texto "El campo esta vacio"
//Si el campo esta completo pero no es un email debe retornar el texto "El campo no es un email"
//Si el campo cumple ambas condiciones, debe retornar el texto "Correcto"
function validarEmail() {
  $textoValidacion = 0;
  if (strlen($_POST["email"]) == 0){
  $textoValidacion = "El campo esta vacio";
  }
  if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
   $textoValidacion = "El campo no es un email";
  }else{
  $textoValidacion = "Correcto";
}
  return $textoValidacion;
}
validarEmail();

//EJERCICIO 5: El formulario que nos llega viaja por POST tiene
 //al menos 2 campos para ingresar la contraseña y confirmarla
 //<input type="password" name="password">
 //<input type="password" name="confirmar">
// Tu tarea es completar la función validarPass que se comporte del siguiente modo:

 //Si los dos campos estan vacíos debe retornar el texto "Los dos campos de contraseña estan vacios"
 //Si solamente falta el campo 'password' retornar el texto "La contraseña esta vacia"
// Si solamente falta el campo 'confirmar' retornar el texto "Falta la confirmacion de contraseña"
 //Si los dos campos estan completos pero tienen valores distintos retornar el texto "Las contraseñas no verifican"
 //Si todo esta bien, retornar el texto "Correcto"
 function validarPass() {
   $textoValidacion = 0;
  if ((strlen($_POST["password"]) == 0) && (strlen($_POST["confirmar"]) == 0)) {
   $textoValidacion = "Los dos campos de contraseña estan vacios";
  }
   if (strlen($_POST["password"]) == 0 ){
   $textoValidacion = "La contranseña está vacía";
   }
   if (strlen($_POST["confirmar"]) == 0 ){
   $textoValidacion = "Falta la confirmacion de contraseña";
   }
   if ($_POST["password"] != $_POST["confirmar"]){
     $textoValidacion = "Las contraseñas no verifican";
   }else{
     $textoValidación = "Correcto";
   }
  return $textoValidacion;
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
    <form class="" action="validación_mumuki.php" method="post">
      <div class="">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="">
      </div>
      <div class="">
        <label for="">Usuario:</label>
        <input type="text" name="username" value="">
      </div>
      <div class="">
        <label for="">Email:</label>
        <input type="text" name="email" value="">
      </div>
      <div class="">
        <label for="">Edad:</label>
        <input type="text" name="edad" value="">
          </div>
          <div class="">
            <label for="">Contraseña:</label>
            <input type="text" name="password" value="">
              </div>
              <div class="">
                <label for="">Confirmar Contraseña:</label>
                <input type="text" name="confirmar" value="">
                  </div>
        <input type="submit" name="" value="Enviar">
    </form>

  </body>
</html>
