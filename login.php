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
      <div class="panel-body">
          <h2 class="text-center">Inicia sesión</h2>
          <button>
            Conéctate con Facebook
          </button>
          <br>
          <div>
            <h6 class="text">o</h6>
            <hr>
          </div>

          <form method="post" name="loginForm">
            <div>
              <input type="text" name="email" placeholder="Introduce tu email">
              <span></span>
            </div>
            <div>
              <input name="password" placeholder="Y tu contraseña">
              <span></span>
            </div>
            <button type="submit" class="">Inicia sesión</button>
            <br>
            <p>
              <a href="">¿Has olvidado tu contraseña?</a>
            </p>
            <p>
              <small>¿Aún no estás registrado? <a href="">Abre tu cuenta aquí.</a></small>
            </p>
          </form>
        </div>

        <!--<div class="volver">
          <a href="home.php">Volver</a>
        </div>-->
      </section>

      <?php
          include ("footer.php");
      ?>
  </body>
</html>
