<?php
  require_once "autoload.php";
  $dbJson = new Json();
  $dbSql = new mysql();
  $cantidad = 0;

  $json = file_get_contents("usuarios.json");
  $array = json_decode($json,true);

  foreach($array as $usuarios) {
    foreach($usuarios as $usuario) {
      if ($usuario['email'] == $email) {
        $nuevoUsuario = new Usuario($usuario["username"], $usuario["email"], $usuario["password"], $usuario["avatar"]);
	  	$dbSql->guardarUsuario($usuario);
	  	$cantidad++;
      }
    }
  }
  echo "Usuarios copiados: ".$cantidad;
?>
