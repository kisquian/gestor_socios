<?php
 include_once('inc/includes.php');

  // Listado de usuarios
  $usuario = new Usuario();
  $listaUsuarios = $usuario->listarUsuarios();

  


if (isset($_SESSION["userLogged"])) {
  	header("location: http://localhost/index.php");
} else {
 include_once('../app/views/vista_registro.php');
}