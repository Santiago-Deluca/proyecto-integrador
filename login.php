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
      <div class="container">
        <div class="panel">
          <h3 class="text_login">Ingresar:</h3>
          <div class="mini_container">
            <label for="email" >Email:</label><br/>
            <input type="text" name="email" class="espacio_de_relleno" id="email" value="" maxlength="50" placeholder="Ingrese su email" /><br/>
            <span id="mail_error" class="error"></span>
          </div>
          <div class="mini_container">
            <label for="password" >Contaseña*:</label><br/>
            <input type="password" name="password" class="espacio_de_relleno" id="password"  maxlength="50" placeholder="Ingrese su contraseña" />
            <div id="password_error" class="error"></div>
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
    </section>
    <?php
      include ("footer.php");
    ?>
  </body>
</html>
