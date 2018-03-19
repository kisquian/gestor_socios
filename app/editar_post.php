<?php
include_once('models/Post.php');

if( isset($_POST))
{
  // Input hidden en el código
  $idPost = intval($_POST['idPost']);
  var_dump($idPost);

  $data = new stdClass();
  $data->nombre       = filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->apellidos     = filter_var($_POST['apellidos'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->cedula     = filter_var($_POST['cedula'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->fnac     = filter_var($_POST['fnac'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->direccion     = filter_var($_POST['direccion'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->dpto     = filter_var($_POST['dpto'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->telfijo     = filter_var($_POST['telFijo'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->telmovil     = filter_var($_POST['telMovil'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->email     = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->titulo     = filter_var($_POST['titulo'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->generacion     = filter_var($_POST['generacion'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->formaDePago     = filter_var($_POST['formaDePago'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->empresa     = filter_var($_POST['empresa'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->ciudadDeEmpresa     = filter_var($_POST['ciudadDeEmpresa'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->puestoDeEmpresa     = filter_var($_POST['puestoDeEmpresa'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->fechaAdhesion     = filter_var($_POST['fechaAdhesion'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->content     = filter_var($_POST['content'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->status     = filter_var($_POST['status'], FILTER_SANITIZE_SPECIAL_CHARS);



  if( $data->nombre && $data->content ) 
  {
    $post = new Post();
    $post->editarPost( $idPost, $data );
    header("location:../index.php?msg=post_editado");
  }else{
    header("location:../index.php?msg=error_datos_requeridos");
  }

}else{
  header("location:../index.php?msg=no_data");
}