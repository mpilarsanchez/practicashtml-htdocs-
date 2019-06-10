<?php
$casas =[
"s"=> "Stark",
"l"=> "Lansiter",
"t"=>"Tully",
"m"=> "Martell",
"b"=>"Baratheon",
];
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="inicio_persistencia.php" method="post">
<!-- SI ENVIO CON METODO GET ESTO APARECE EN LA URL:
http://localhost/http_get_post/inicio_persistencia.php?nombre=arya&email=arya%40stark.com&casa=s
VEMOS QUE PARA LA CASA NO APARECE EL TEXTO CON EL NOMBRE DE LA CASA .... RECORDAR QUE EN UN <select class="" name="">
EN UN CHECKBOX Y EN UN RADIOBUTTON  NO SE ENVIA EL TEXTO QUE ENVIO EL USUARIO SINO QUE SE ENVIA LO QUE SE ENCUENTRA EN
EL VALUE
</select>-->

       <div class="">
         <label for="">Nombre:</label>
         <input type="text" name="nombre" value="">
       </div>
       <div class="">
         <label for="">Email:</label>
         <input type="text" name="email" value="">
       </div>
       <div class="">
         <label for="">Casa:</label>
         <select class="" name="casa">

           <!-- CADA UNA DE LAS OPCIONES LAS VAMOS A IMPRIMIR CON UN FOREACH (COMO TENEMOS CINCO
           CASAS SE VAN A IMPRIMIR 5 OPCIONES) EN DONDE EL VALUE VA A SER EL LADO IZQUIERDO
           DEL ARRAY Y EL TEXTO VA A SER EL NOMBRE DE LA CASA!!!! -->

           <?php foreach ($casas as $codigo => $casa) : ?>
             <option value="<?=$codigo?>">
               <?=$casa?>
             </option>
           <?php endforeach; ?>
      </select>
       </div>
       <input type="submit" name="" value="Enviar">
     </form>

   </body>
 </html>
