<?php
  require_once "librerias/validacion_registro.php";
  $Login = false;
  if ($_POST){
    $errores = validar_formulario($_POST);
    if (empty($errores)) {
      $Login = validarUsuario($_POST);
      if ($Login) {
        inicioSesion($_POST);
        header('Location: home.php');
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Oswald|PT+Sans" rel="stylesheet">
    <title>Home</title>
  </head>
  <body>
    <?php
      include ("head.php");
    ?>

    <section class="cuerpo">
      <form id="login" action="" method="post">      
        <div class="container">
          <div class="panel">
            <h3 class="text_login">Ingresar:</h3>
            <span class="error"><?php echo (!$Login && $_POST) ? "Contraseña Incorrecta" : ""  ; ?> </span>

            <div class="mini_container">
              <label for="email" >Email:</label><br/>
              <input type="text" name="email" class="espacio_de_relleno" id="email"  maxlength="50" placeholder="Ingrese su email" value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : (isset($_POST['email']) ? $_POST['email'] : '') ?>" /><br/>
              <span id="mail_error" class="error"><?php echo isset( $errores["email"]) ? $errores["email"] : ""  ; ?></span>
            </div>

            <div class="mini_container">
              <label for="password" >Contaseña*:</label><br/>
              <input type="password" name="password" class="espacio_de_relleno" id="password"  maxlength="50" placeholder="Ingrese su contraseña" />
              <span id="password_error" class="error"><?php echo isset( $errores["password"]) ? $errores["password"] : ""  ; ?></span>
            </div>

            <div class="mini_container">
              <input type="checkbox" name="recordar" value="recordar" <?php echo isset($_COOKIE['email']) ? "checked" : ""; ?>> Recordar Usuario<br>
            </div>

            <input  type="submit" class="submit" name="Submit" value="Ingresar" />

            <h4 class="text_login">
              <a href="">¿Has olvidado tu contraseña?</a>
            </h4>
            <h4 class="text_login">
              <small>¿Aún no estás registrado?
                <a href="registro.php">Registrate aqui.</a>
              </small>
            </h4>
          </div>

          <div class="imagenes_decoracion_login">
            <p>"La comida es mucho mejor cuando se comparte"</p>
            <img class="imagenes"src="images/personas_comiendo.jpg" alt="foto_personas">
          </div>
        </div>
      </form>
    </section>
    <?php
      include ("footer.php");
    ?>

  </body>
</html>
