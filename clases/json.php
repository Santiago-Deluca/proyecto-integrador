<?php
class Json extends DB {

  public function guardarUsuario(Usuario $usuario){
    // Pasamos el usuario de objeto a array asociativo para manejar la función cómo se hacía antes, sin generar mayores cambios.
    $usuarioAGuardar = [];
    $usuarioAGuardar["username"] = $usuario->getUsername();

    $usuarioAGuardar["password"] = $usuario->getPassword();
    $usuarioAGuardar["email"] = $usuario->getEmail();
    $usuarioAGuardar["avatar"] = $usuario->getAvatar();


    $json_content= file_get_contents("usuarios.json");  // descargamos el contenido del archivo json
    $array= json_decode($json_content,true);            // pasamos a array el contenido del archivo json
    $array["usuarios"][]= $usuarioAGuardar;                // le agregamos un registro al array de usuario
    $jsonFinal= json_encode($array);                // lo pasamos a json
    file_put_contents("usuarios.json",$jsonFinal);  // y los ponemos de nuevo en el archivo
  }

    

  public function retornaUsuario($email) {
    $json = file_get_contents("usuarios.json");
    $array = json_decode($json,true);
    foreach($array as $usuarios) {
          foreach($usuarios as $usuario) {
              if ($usuario['email'] == $email) {
                  $nuevoUsuario = new Usuario($usuario["username"], $usuario["email"], $usuario["password"], $usuario["avatar"]);
                  return $nuevoUsuario;
              }
          }
      }

    return false;
  }
}

 ?>
