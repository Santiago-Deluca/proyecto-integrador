<?php

class Session {

  public function __construct() {
    session_start();
  }

  public function login ($email, $password) {
    $_SESSION['email'] = $email;

      if(!empty($_POST['recordar'])){
        setcookie("email",$email,time()+(10*365*24*60*60));
      }else{
        if (isset($_COOKIE['email'])) {
           setcookie("email","");
        }
    }
  }

  public function estaLogueado() {
    if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
      return true;
    }
    return false;
  }

  public function logout() {
    session_destroy();
    foreach ($_COOKIE as $key => $value) {
      setcookie($key, '', -1);
    }








  }
}


 ?>
