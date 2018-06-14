<?php
  require_once "librerias/validacion_registro.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <body>
	<header>
      <div class="cabecera-de-pagina">
        <div class="logo">
          <img src="images/Logo.png" alt="logo">
        </div>

       	<div class="menu-movil">
          <span></span>
          <span></span>
     	    <span></span>
        </div>
        <nav class="navegacion-principal">
          
          <img src="<?php echo getAvatar($_SESSION)?>" alt="avatar" width=60px height=60px  style=border-radius:50%>';
          
          <a href="" id="bienvenido">Bienvenido, <?php echo isset(($_SESSION['email'])) ? $_SESSION['email'] : " "; ?></a>          
          <a href="home.php">Home</a>
          <a href="faq.php">Preguntas frecuentes</a>
          <a href="logout.php">Logout</a>
        </nav>
      </div>
    </header>
  </body>
</html>
