<?php
session_start();
if (isset($_SESSION)) {
  session_destroy();
  // eliminar todas las cookies
  if (isset($_SERVER['HTTP_COOKIE'])) {
      $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
      foreach($cookies as $cookie) {
          $parts = explode('=', $cookie);
          $name = trim($parts[0]);
          setcookie($name, null, time()-3600);
          setcookie($name, null, time()-3600, '/');
      }
  }
}

require_once "controladores/plantillaControlador.php";

//instanciar objeto
		$plantilla = new controladorPlantilla();
		$plantilla -> ctrTraerPlantilla();


