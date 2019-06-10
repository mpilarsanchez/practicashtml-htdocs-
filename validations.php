<?php

function save_registered_user($nombre, $email, $pass_hash, $id, $avatar){
  $archivo = "usuarios.json";
  $usuarios = [
    {[
      "nombre" => $nombre,
      "email" => $email,
      "pass" => $pass_hash,
      "id" => $id,
      "avatar" => $avatar
    ]}
  ];
  //p/convertir el arrary de usuarios en json
  $usuario_json = json_encode($usuarios);
  //p guardar/ESCRIBIR usuarios en el archivo "usuarios.json"
  file_put_contents($archivo, $usuario_json, FILE_APPEND);
}

?>
