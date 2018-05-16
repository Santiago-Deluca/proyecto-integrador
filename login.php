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
<<<<<<< HEAD
    <section class="cuerpo">
      <div class="panel-body">
          <h2 class="text-center">Inicia sesión</h2>
          <button class="btn btn-block btn-facebook" ng-click="login.authenticate('facebook')">
            <i class="fa fa-facebook"></i> Conéctate con Facebook
          </button>
          <br>
          <div class="signup-or-separator">
=======

    <section class="cuerpo">
      <div class="panel-body">
          <h2 class="text-center">Inicia sesión</h2>
          <button>
            Conéctate con Facebook
          </button>
          <br>
          <div>
>>>>>>> 78a117a02084829e1072ffd1c99ce452072c10e3
            <h6 class="text">o</h6>
            <hr>
          </div>

<<<<<<< HEAD
          <form method="post" ng-submit="login.login()" name="loginForm" class="ng-pristine ng-invalid ng-invalid-required">
            <div class="form-group has-feedback">
              <input class="form-control input-lg ng-pristine ng-invalid ng-invalid-required ng-touched" type="text" name="email" ng-model="login.email" placeholder="Introduce tu email" required="" autofocus="">
              <span class="fa fa-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input class="form-control input-lg ng-pristine ng-untouched ng-invalid ng-invalid-required" type="password" name="password" ng-model="login.password" placeholder="Y tu contraseña" required="">
              <span class="fa fa-lock form-control-feedback"></span>
            </div>
            <button type="submit" ng-disabled="loginForm.$invalid" class="btn btn-lg btn-block btn-primary" disabled="disabled">Inicia sesión</button>
            <br>
            <p class="text-center">
              <a href="/forgot">¿Has olvidado tu contraseña?</a>
            </p>
            <p class="text-center text-muted">
              <small>¿Aún no estás registrado? <a href="/signup">Abre tu cuenta aquí.</a></small>
              <!--<button class="btn btn-block btn-google-plus" ng-click="login.authenticate('google')">
              <span class="fa fa-google-plus"></span> Sign in with Google
              </button>-->
            </p>
          </form>
        </div>
=======
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
>>>>>>> 78a117a02084829e1072ffd1c99ce452072c10e3

        <div class="volver">
          <a href="home.php">Volver</a>
        </div>
      </section>
      <?php
          include ("footer.php");
      ?>
  </body>
</html>
