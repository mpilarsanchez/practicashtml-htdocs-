<?php
$contraseña = "monito123";

$hass = password_hash($contraseña, PASSWORD_DEFAULT);

var_dump($contraseña, $hash);

echo('<pre>');
$resultado = password_verify($contraseña, $hash);
var_dump($resultado);

//JASON p tomar achivos del servidor y agragarles o quitarles texto
//SERIA NUESTRA PRIMER Y RUDIMENTARIA BASE DE DATOS
//GUARDAMOS TEXTOS sin embargo lo oredenamos con un formato claro que nos
//permita manipular la informacion

//JASON ES UN FORMATO PARTICULAR PARA TRADUCIR DATOS EN UN string
//Y RECURPARA DESDE EL STRING TODOS LOS DATOS

//DATOS EN ARRAYS <---> STRING EN JASON
//SEGUIMOS MANIPULANDO LA INFORMACION EN ARRYAS ASOCIATIVOS PERO ANTES
// DE GUARDARLOS EN UN ARCHIVO DE TEXTO LO GUARDAMOS EN UN ARRAY FORMATO JASON

 //COMIENZA Y TERMINA CON }
 //nombre del dato : [
   //{"valor": ".."}
 //]
//}
echo('<pre>');
$autos = [
  0 => [
    "marca" => "Ford",
    "modelo" =>"Fiesta",
    "patente" =>"ABC123",
  ],
  1 => [
    "marca" => "Ranault",
    "modelo" =>"Sandero",
    "patente" =>"TRY098",
  ],
  1 => [
    "marca" => "Toyota",
    "modelo" =>"Corolla",
    "patente" =>"IUR987",
  ],
];

  $json = json_encode($autos);

  Var_dump($json);


  echo('<pre>');
  $arrayOriginal = json_decode($json);
  Var_dump($arrayOriginal);

  //esto devuelve por default un OBJETO Y NO EL ARRAY ASOCIATIVO ORIGINAL


//por esto agragamos como segundo parámetro true para aclararle a la funcion
//que no nos interesa trabajar con objetos

echo('<pre>');
// $autos = [
//   0 => [
//     "marca" => "Ford",
//     "modelo" =>"Fiesta",
//     "patente" =>"ABC123",
//   ],

//];
  // $json = json_encode($autos);
  //
  // file_put_contents("autos.json", $json);

  $archivos = file_get_contents("autos.json");
  //[{"marca":"Ford","modelo":"Fiesta","patente":"ABC123"}]


  //para convertirlo de nuevo en ARRAY
$autos = json_decode($archivos, true);

var_dump($autos);
 //array(1) {
  //[0]=>
  //array(3) {
    //["marca"]=>
    //string(4) "Ford"
    //["modelo"]=>
    //string(6) "Fiesta"
    //["patente"]=>
    //string(6) "ABC123"
  //}
//}
echo('<pre>');
$autos [] = [
  "marca" => "Ranault",
  "modelo" =>"Sandero",
  "patente" =>"TRY098",
];

var_dump($autos);
//agregamos un auto mas al array//

echo('<pre>');
$jsonFinal = json_encode($autos);//volvemos a convertir el archivo al string de json//

//una vez que tememos la version final del archivo lo sobreescribinos a traves de:
file_put_contents("autos.json", $jsonFinal); //con la ruta del archivo que queremos
//escribir y el string que queremos escribir









 ?>
