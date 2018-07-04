<?php

class Usuario
{
  private $username;
  private $email;

  private $password;
  // private $repassword;
  private $avatar;

  public function __construct($username, $email, $usuario, $password, $avatar)
  {
    $this->username= $username;
    $this->email = $email;
    $this->usuario = $usuario;
    $this->password = $password;
    // $this->repassword = $repassword;
    $this->avatar = $avatar;
  }

  public function getPassword() {
    return $this->password;
  }

  public function setPassword($password) {
    $this->password = $this->hashPassword($password);
  }

  public function hashPassword() {
    $this->password = password_hash($this->password, PASSWORD_DEFAULT); // bcrypt es la encriptación PASSWORD_DEFAULT
  }

  public function getUsername () {
    return $this->nombre_completo;
  }

  public function setUsername ($nombre) {
    $this->nombre_completo = $nombre;
  }

  public function getEmail () {
    return $this->email;
  }

  public function setEmail ($email) {
    $this->email = $email;
  }



  public function getAvatar () {
    return $this->avatar;
  }

  public function setAvatar ($avatar) {
    $this->avatar = $avatar;
  }




}






 ?>
