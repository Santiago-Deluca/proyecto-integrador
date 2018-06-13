<?php
function validacion_registro($datos){
  $errores = [];
  if (empty($datos["name"])) {
   $errores["name"]="Por favor ingrese su nombre";
  }
  if (empty($datos["email"])) {
    $errores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="Por favor ingrese un email valido";
  }
  if (empty($datos["username"])) {
   $errores["username"]="Por favor ingrese su usuario";
  }
  if (empty($datos["password"])) {
    $errores["password"]= "Por favor ingrese una contraseña";
  }
  if (empty($datos ["repassword"])) {
    $errores["repassword"]= "Por favor reingrese su contraseña";
  }elseif ($datos["password"]!==$datos["repassword"]) {
    $errores["repassword"]="Las contraseñas no coinciden";
  }

  return $errores;


}

function datos_existentes($datos){
  $errorExiste=[];
    $json= file_get_contents("usuarios.json");
    $array= json_decode($json,true);
    $array = $array["usuarios"];

    for ($i=0; $i < count($array); $i++) {
      $user = json_decode($array[$i],true);
      if($datos["username"]==$user["username"]){
      $errorExiste["username"]="Ya existe un usuario con ese nombre por favor elija otro";
      }
      if ($datos["email"]==$user["email"])  {
      $errorExiste["email"]="Ya existe un usuario con ese email, si no recuerda sus datos puede resetear su contraseña";
      }

    }
    return $errorExiste;

}
function crearUsuario($datos){
  return [
    "nombre" => $datos["name"],
    "email" => $datos["email"],
    "username" => $datos ["username"],
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),
  ];

}
// function validarLogin($datos){
//   $errores = [];
//   if ($datos["username"]=="") {
//     $errores["username"]= "Por Favor ingrese su usuario" ;
//   }
//   if($datos["password"]==""){
//     $errores["password"]= "Por Favor ingrese su contraseña";
//   }
//   return $errores;
//
//
// }

function guardarUsuario($usuario){
  $user= json_encode($usuario);
  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array["usuarios"][]= $user;

  file_put_contents("usuarios.json",json_encode($array));
}

function validarUsuario($datos){

  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array = $array["usuarios"];
  for ($i=0; $i < count($array); $i++) {
    $user = json_decode($array[$i],true);
    if($user["username"]==$datos["username"]){
      if (password_verify($datos["password"],$user["password"])) {
        echo "BIENVENIDO ";
      }
    }

  }

}
