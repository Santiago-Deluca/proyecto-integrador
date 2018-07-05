<?php

class Mysql extends DB {
  private $conexion;

  // Usamos el constructor para instanciar la conexión a la base de datos y la guardamos en el atributo $conexión
  public function __construct() {
    $dsn = "mysql:host=localhost;dbname=proyecto;charset=utf8mb4;port=3306"; //En MAC (OSX) es 8889 el puerto
    $user = "root";
    $pass = "";

    $this->conexion = new PDO($dsn, $user, $pass); // Guardamos en el atributo $conexión el objeto PDO
  }


  // Insertamos un usuario en la base de datos
   public function guardarUsuario(Usuario $usuario) {
    $sql = 'INSERT INTO usuarios (name,username, email, password, avatar) VALUES (:name,:username,:email, :password, :avatar)';
    $query = $this->conexion->prepare($sql);

    $myName = $usuario->getName();
    $myUsername = $usuario->getUsername();
    $myEmail = $usuario->getEmail();
    $myPassword = $usuario->getPassword();
    $myAvatar = $usuario->getAvatar();

    $query->bindParam(":name", $myName);
    $query->bindParam(":username", $myUsername);
    $query->bindParam(":email", $myEmail);
    $query->bindParam(":password", $myPassword);
    $query->bindParam(":avatar", $myAvatar);

    $query->execute();
  }



  // Buscamos un usuario en la base de datos vía email, si no se encuentra, se devuelve false
  public function retornaUsuario($email) {
    $sql = 'SELECT * FROM usuarios WHERE email = :email';
    $query = $this->conexion->prepare($sql);

    $query->bindParam(":email", $email);

    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);

    if ($usuario !== false) {
      $nuevoUsuario = new Usuario( $usuario["name"],$usuario["username"], $usuario["email"], $usuario["password"], $usuario["avatar"]);
      return $nuevoUsuario;
    }
    return false;
  }
}


 ?>
