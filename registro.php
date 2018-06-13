<?php
require_once "validacion_registro.php";
  if ($_POST){
  $errores = validacion_registro($_POST);
  $errorExiste =datos_existentes($_POST);
   if (empty($errores) && empty($errorExiste)) {
     $usuario = crearUsuario($_POST);
     guardarUsuario($usuario);
      // $avatar=subirAvatar($_POST);
     header('Location: login.php');
   }
  }
//
// if ($_POST) {
//   $original = $_FILES["avatar"];
//
//   if ($original["error"] === UPLOAD_ERR_OK) { //UPLOAD_ERR_OK es equivalente a 0
//     $nombreViejo = $original["name"]; // Nombre original del archivo
//     $extension = pathinfo($nombreViejo, PATHINFO_EXTENSION); // Extensión del archivo subido
//
//     $nombreNuevo = $original["tmp_name"]; // Nombre temporal en el servidor
//
//     $archivoFinal = dirname(__FILE__); // Agarramos el archivo donde estamos parados ahora mismo
//     $archivoFinal .= "/images/"; // .= nos permite concatenar, en este caso es lo mismo que poner $archivoFinal = $archivoFinal . "/img/"
//     $archivoFinal .= uniqid() . "." . $extension; // uniqid genera un ID "único" para la foto
//
//     // var_dump($nombreNuevo, $archivoFinal);exit;
//
//     move_uploaded_file($nombreNuevo, $archivoFinal); // movemos el archivo a la ubicación final
//   }
// }

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
      <form id="register" action="" method="post">
        <div class="container">
          <div class="panel">
            <h3 class="text_login">Registrarse:</h3>
            <span class="error"><?php echo isset( $errorExiste["username"]) ? $errorExiste["username"] : ""  ; ?> </span>
            <span class="error"><?php echo isset( $errorExiste["email"]) ? $errorExiste["email"] : ""   ; ?> </span>
              <div class="mini_container">
              <label for="name" >Nombre completo: </label>  <br/>
              <input type="text" name="name" class="espacio_de_relleno" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"  maxlength="50" /><br/>
              <span class="error"> <?php echo isset( $errores["name"]) ? $errores["name"] : ""  ; ?></span>
              </div>


            <div class="mini_container">
              <label for="username" >Nombre de usuario*:</label><br/>
              <input type="text" name="username" class="espacio_de_relleno" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>" maxlength="50" /><br/>
              <span id="username_error" class="error"><?php echo isset( $errores["username"]) ? $errores["username"] : ""  ; ?></span>
            </div>

            <div class="mini_container">
              <label for="email" >Ingrese su email*:</label><br/>
              <input type="email" name="email" class="espacio_de_relleno" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" maxlength="50"  />
              <span id="email_error" class="error"><?php echo isset( $errores["email"]) ? $errores["email"] : ""  ; ?></span>
            </div>


            <div class="mini_container">
              <label for="password" >Contaseña*:</label><br/>
              <input type="password" name="password" class="espacio_de_relleno" id="password"  maxlength="50" placeholder="Ingrese su contraseña" />
              <span id="password_error" class="error"><?php echo isset( $errores["password"]) ? $errores["password"] : ""  ; ?></span>
            </div>

            <div class="mini_container">
              <label for="repassword" >Repetir Contaseña*:</label><br/>
              <input type="password" name="repassword" class="espacio_de_relleno" id="repassword" maxlength="50" placeholder="Repita su contraseña" />
              <span id="repassword_error" class="error"><?php echo isset( $errores["repassword"]) ? $errores["repassword"] : ""  ; ?></span>
            </div>

            <div class="mini_container">
              Cargar imagen:
              <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000"/> -->
               <input type="file" name="avatar" id=""/>
             <span id="avatar_error" class="error"><?php echo isset( $errores["avatar"]) ? $errores["avatar"] : ""  ; ?></span>
            </div>


            <input  type="submit" class="submit" name="Submit" value="Registrarme" />
          </div>

          <div class="imagenes_decoracion_registro">
            <p>"No existe modernidad sin una buena tradicion!"</p>
            <img class="imagenes"src="images/imagen3.jpg" alt="foto_plato">
          </div>
        </div>
      </form>
    </section>
    <?php
      include ("footer.php");
    ?>
  </body>
</html>
