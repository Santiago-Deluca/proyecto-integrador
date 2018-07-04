<?php
   abstract class Validacion {

     public static function validacion_registro($datos){
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

    function validacion_avatar($avatar){
      $errorAvatar=[];
      if (empty($avatar)) {
        $errorAvatar["avatar"]="Por favor ingrese su foto perfil";
      }
      if ($avatar["error"] != UPLOAD_ERR_OK) {
        $errorAvatar["avatar"]="ocurrió un error al subir su foto.";
      }
      return $errorAvatar;
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

function validar_formulario($datos){
  $errores = [];
  if ($datos["email"]=="") {
    $errores["email"]= "Por Favor ingrese su usuario" ;
  }
  if($datos["password"]==""){
    $errores["password"]= "Por Favor ingrese su contraseña";
  }
  return $errores;
}

function validarUsuario($datos){
  $Login = false;
  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array = $array["usuarios"];
  for ($i=0; $i < count($array); $i++) {
    $user = json_decode($array[$i],true);
    if($user["email"]==$datos["email"]){
      if (password_verify($datos["password"],$user["password"])) {
        $Login = true;
      }
    }
  }
  return $Login;
}

// function subirAvatar($avatar){
//     $nombreViejo =$avatar["name"]; // Nombre original del archivo
//     $extension = pathinfo($nombreViejo, PATHINFO_EXTENSION); // Extensión del archivo subido
//     $nombreNuevo = $avatar["tmp_name"]; // Nombre temporal en el servidor
//     $archivoFinal = "\images\perfiles\\"; // .= nos permite concatenar, en este caso es lo mismo que poner $archivoFinal = $archivoFinal . "/img/"
//     $archivoFinal .= uniqid() . "." . $extension; // uniqid genera un ID "único" para la foto
//
//     $archivoFinalF = realpath(__DIR__ . '/..') . $archivoFinal; // Agarramos el archivo donde estamos parados ahora mismo
//     move_uploaded_file($nombreNuevo, $archivoFinalF); // movemos el archivo a la ubicación final
//     return ".".str_replace("\\","/",$archivoFinal);
// }

function getAvatar($datos){
  $json= file_get_contents("usuarios.json");
  $array= json_decode($json,true);
  $array = $array["usuarios"];
  for ($i=0; $i < count($array); $i++) {
    $user = json_decode($array[$i],true);
    if($user["email"]==$datos["email"]){
      $avatar = $user["avatar"];
    }
  }
  return $avatar;
}

// function validarAvatar($_FILE["avatar"]) {
//       $errores_avatar=[];
//    if($_FILE["avatar"]["error"] === UPLOAD_ERR_OK) {
//         $nombre = $_FILE["avatar"]["name"];
//         $ext = pathinfo($nombre, PATHINFO_EXTENSION);
//         if ($ext === "jpg") || ($ext === "png") {
//             return true;
//         } else {
//             return $errores_avatar= "La foto debe tener extension .jpg o .png";
//         }
//     }
//     return $errores_avatar["error"]="Su foto no ha podido ser cargada";
// }
// }
    adaptar esta funcion en el archivo session.php con objetos
// function inicioSesion($datos) {
// 	session_start();   //iniciar sesión
// 	//defino cuanto quiero que dure mi cookies (en este caso una hora)
// 	$vencimiento=time()+60*60*24*7;
// 	//defino cookies
//   if (isset($datos['recordar'])) {
// 	  setcookie('email',$datos['email'],$vencimiento,'/');
//   } else {
//     setcookie('email','',$vencimiento,'/');
//   }
// 	//definir el usuarios
// 	$_SESSION['email']=$datos['email'];
// }

}
