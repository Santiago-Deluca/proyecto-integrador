<?php
// Hacemos instancias generales, que son las mismas para todos los archivos.
$db = new Mysql();   // Esta variable nos permite instanciar bases de datos a pedido, si quisieramos trabajar con mysql, solamente ponemos new Mysql en vez de new Json y el resto del código funcionaría igual
$session = new Session();

 ?>
