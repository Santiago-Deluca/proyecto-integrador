<?php
// Creamos la clase validación de forma abstracta para no instanciarla, usamos los métodos de forma estática
abstract class Validacion {

  // Validamos datos del registro
  public static function validarDatos($datos, $db, $archivo){
    $errores = [];
    if ($datos["name"]=="") {
     $errores["name"]="Por favor ingrese su nombre";
    }
    if ($datos["email"]=="") {
      $errores["email"]="Por favor ingrese su email";
    }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      $errores["email"]="Por favor ingrese un email valido";
    }elseif(self::mailRepetido($datos["email"], $db)){
      $errores["email"] = "el email ya está en la base de datos, ingresá otro";
    }

    if ($datos["username"]=="") {
     $errores["username"]="Por favor ingrese su usuario";
    }
    if ($datos["password"]=="") {
      $errores["password"]= "Por favor ingrese una contraseña";
    }
    if ($datos ["repassword"]=="") {
      $errores["repassword"]= "Por favor reingrese su contraseña";
    }elseif ($datos["password"]!==$datos["repassword"]) {
      $errores["repassword"]="Las contraseñas no coinciden";
    }
    if (empty($archivo["avatar"])) {
      $errores["avatar"]="Por favor ingrese su foto perfil";
    }
    if (!$archivo) {
      $errores["avatar"]="Por favor ingrese su foto perfil";
    }
    if ($archivo["avatar"]["error"] != UPLOAD_ERR_OK) {
      $errores["avatar"]="ocurrió un error al subir su foto.";
    }

    return $errores;

  }

  // Validamos datos del login
  public static function validarDatosLogin($datos, $db){
    $errores = [];

    if ($datos["email"]=="") {
      $errores["email"]="Por favor ingrese su email";
    }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
      $errores["email"]="Por favor ingrese un email valido";
    }

    if ($datos["password"]=="") {
      $errores["password"]= "Por favor ingrese una contraseña";
    }

    if ($datos["password"]!="" && !self::comprobarLogin($datos['email'], $datos['password'], $db)) {
        $errores["password"]="No corresponde el email del usuario con la contraseña ingresada";# code...
    }

    return $errores;

  }

  // Comprobamos que el usuario y la contraseña coincidan con un usuario en la base de datos y su contraseña
  public static function comprobarLogin($email, $password, $db){
      $viejoUser = $db->retornaUsuario($email);
      $bandera = 0;
      if($viejoUser !== false) {
        if($viejoUser->getEmail() == $email && password_verify($password, $viejoUser->getPassword()))
        {
            $bandera = 1;
        }
      }

      return $bandera;
  }

  // Revisamos que el mail no exista actualmente en la base de datos
  public static function mailRepetido($email, $db)
  {
    $bandera = 0;
    $viejoUser = $db->retornaUsuario($email);

    if (!empty($viejoUser)) {
      //if ($viejoUser->getEmail() == $email) {
          $bandera = 1;
      //}
    }
    return $bandera;
  }
}
 ?>
