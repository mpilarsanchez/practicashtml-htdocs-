<?php

setcookie("idioma", "ES", time() +15);
setcookie("moneda", "AR", time() + 60 * 60);

//PARA BORRAR: setcookie("moneda", "", time() -1);
//UNA COOLIE SIN TIEMPO ES QUE LA COOKIE VA A DURAR
//PARA SIEMPRE HASTA QUE SE CIERRE EL NAVEGADOR
echo "Se guardaron las cookies";
 ?>
