<?php

//var_dump($_GET);
//array(2) { ["nombre"]=> string(7) "montoto" ["email"]=> string(24) "montoto@digitalhouse.com" }
  //echo('<pre>');
//echo  $_GET["nombre"];
  //echo('<pre>');
  //foreach ($_GET as $key => $value) {
    //echo "$key => $value <br>";
  //}

  foreach ($_POST as $key => $value) {
  echo "$key => $value <br>";

  }


var_dump(getallheaders());



 ?>
