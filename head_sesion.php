


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
            <!-- <a href="home.php">Home</a>
            <a href="faq.php">Preguntas frecuentes</a> -->
            <a href="" class="bienvenido"><h1>Bienvenido, <strong><?php echo isset(($_COOKIE['email'])) ? $_COOKIE['email'] : " "; ?></h1></a>
            <!-- <div class="foto_user"> -->
              <img src="images/perfiles/perfil1.jpg" alt="avatar" width=60px height=60px  style=border-radius:50%>
            <!-- </div> -->
            <a href="logout.php" class="desconectate"><h1>Logout</h1></a>
          </nav>
        </div>
    </header>
  </body>
</html>
