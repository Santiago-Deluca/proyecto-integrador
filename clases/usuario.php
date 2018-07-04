<?php

class Usuario
{
  private $name;
  private $username;
  private $email;
  private $password;
  // private $repassword;
  private $avatar;

  public function __construct($name, $username, $email, $password, $avatar)
  {
    $this->name= $name;
    $this->username= $username;
    $this->email = $email;
    $this->password = $password;
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

  public function getName () {
    return $this->name;
  }

  public function setName ($name) {
    $this->name = $name;
  }

  public function getUsername () {
    return $this->username;
  }

  public function setUsername ($username) {
    $this->username = $username;
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
