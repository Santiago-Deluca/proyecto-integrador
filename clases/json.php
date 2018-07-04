<?php
class Json extends DB {

  public function guardarUsuario(Usuario $usuario){
    // Pasamos el usuario de objeto a array asociativo para manejar la función cómo se hacía antes, sin generar mayores cambios.
    $usuarioAGuardar = [];
    $usuarioAGuardar["name"] = $usuario->getName();
    $usuarioAGuardar["password"] = $usuario->getPassword();
    $usuarioAGuardar["username"] = $usuario->getUsername();
    $usuarioAGuardar["email"] = $usuario->getEmail();
    $usuarioAGuardar["avatar"] = $usuario->getAvatar();
    $usuarioAGuardar=json_encode($usuarioAGuardar);

    $json_content= file_get_contents("usuarios.json");  // descargamos el contenido del archivo json
    $array= json_decode($json_content,true);            // pasamos a array el contenido del archivo json
    $array["usuarios"][]= $usuarioAGuardar;                // le agregamos un registro al array de usuario
    $jsonFinal= json_encode($array);                // lo pasamos a json
    file_put_contents("usuarios.json",$jsonFinal);  // y los ponemos de nuevo en el archivo
  }




  public function retornaUsuario($email) {
    $json = file_get_contents("usuarios.json");
    $array = json_decode($json,true);

    $array = $array["usuarios"];

    for ($i=0; $i < count($array); $i++) {
      $usuario = json_decode($array[$i],true);
              if ($usuario['email'] == $email) {
                  $nuevoUsuario = new Usuario($usuario["name"], $usuario["username"], $usuario["email"], $usuario["password"], $usuario["avatar"]);
                  return $nuevoUsuario;
              }
          }
      }


  }


 ?>
