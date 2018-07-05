<?php
  require_once "autoload.php";
  $dbJson = new Json();
  $dbSql = new mysql();
  $cantidad = 0;

  $json = file_get_contents("usuarios.json");
  $array = json_decode($json,true);
  $array = $array["usuarios"];

  for ($i=0; $i < count($array); $i++) {
    $usuario = json_decode($array[$i],true);
    $nuevoUsuario = new Usuario($usuario["name"],$usuario["username"], $usuario["email"], $usuario["password"], $usuario["avatar"]);
    $dbSql->guardarUsuario($nuevoUsuario);
	  $cantidad++;
  }
  
  echo "Usuarios copiados: ".$cantidad;
?>
