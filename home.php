<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Oswald|PT+Sans" rel="stylesheet">
    <title>Home</title>
  </head>
  <body>
    <?php
      isset($_SESSION['email']) ? include ("head_sesion.php") : include ("head.php");
    ?>

    <section class="cuerpo">
      <div class="container">

        <div class="panel b20">

          <!--<h1 class="nombre-sitio">Nombre del sitio</h1>-->
          <p>La web 2.0 cambió el modo en el que las personas experimentan la realidad. En particular, dio inicio a una revolución en la que cada individuo tiene la posibilidad de aportar sin intermediarios al cuerpo de conocimiento de la humanidad, a la vez que puede acceder de forma instantánea a ese conocimiento inabarcable.</p>
          <p>Podemos compartir la experiencia de lo que vemos, la experiencia de lo que oímos, pero ¿dónde queda el sabor?</p>
          <p>Todos tenemos una receta. La que la abuela te mostró, y te lleva a esas mañanas de sol. La que siempre hace sonreir a tus chicos. La que aparece siempre en las historias de tus amigos.</p>
          <p>Yo quiero conocer la tuya, la de él, la de todos. Compartamos el sabor.</p>

        </div>
        <div class="panelb80">
          <img class="imagenesbanner" src="images/imagen1.jpg" alt="foto_banner">
        </div>
      </div>
      <div class="container">
        <h2>Cómo funciona</h2>
      </div>
      <div class="container">
        <div>
          <img class="imagenes_exp"src="images/exp1.png" alt="Explicacion 1">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp2.png" alt="Explicacion 2">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp3.png" alt="Explicacion 3">
        </div>
        <div>
          <img class="imagenes_exp"src="images/exp4.png" alt="Explicacion 4">
        </div>  
      </div>
    </section>

    <?php
      include ("footer.php");
    ?>
  </body>
</html>