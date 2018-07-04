<?php

// Creamos un autoload SIMPLE para poder hacer un require_once automático de los archivos que necesitemos
spl_autoload_register(function ($nombre) {

  // Controlamos con file_exists si los archivos existen, de ser así, los requerimos
  if (file_exists('clases/' . strtolower($nombre) . '.php')) {

    require_once 'clases/' . strtolower($nombre) . '.php';

  } else if (file_exists('interfaces/' . strtolower($nombre) . '.php')) {

    require_once 'interfaces/' . strtolower($nombre) . '.php';

  }
});

 ?>
