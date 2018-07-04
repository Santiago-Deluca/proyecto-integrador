<?php
session_start();
//setcookie('email','',$vencimiento,'/');
session_destroy();
header("Location: index.php");
?>
