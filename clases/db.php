<?php

abstract class DB {
  // Funciones abstractas para obligar a los hijos a implementarlos
  abstract function guardarUsuario(Usuario $usuario);
  // abstract function guardarDatosNuevos($datos, $imagen);
  abstract function retornaUsuario($email);

  //Función para cargar fotos, heredada por todos los hijos


//  ver funcion guardaravatar en validacion_registro.php
  public function cargarfoto1($original){
    if ($original["error"] === UPLOAD_ERR_OK) { //UPLOAD_ERR_OK es equivalente a 0

      $nombreViejo = $original["name"]; // Nombre original del archivo
      $extension = pathinfo($nombreViejo, PATHINFO_EXTENSION); // Extensión del archivo subido
      //var_dump($extension);
      $nombreNuevo = $original["tmp_name"]; // Nombre temporal en el servidor

      $archivoFinal = realpath(dirname(__FILE__) . '/..'); // Agarramos el archivo donde estamos parados ahora mismo y subimos una carpeta
      $archivoFinal .= "/img/"; // .= nos permite concatenar, en este caso es lo mismo que poner
      $nombreFinal = uniqid() . "." . $extension; // uniqid genera un ID "único" para la foto
      $archivoFinal .= $nombreFinal;

      move_uploaded_file($nombreNuevo, $archivoFinal); // copiamos el archivo a la ubicación final
      return  "img/" . $nombreFinal;
    }
    // }else{
    //   return "img/avatar1.png" ;
    }


  }
}

?>
