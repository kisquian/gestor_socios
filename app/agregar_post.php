<?php
include_once('models/Post.php');


if( isset($_POST) ) {

  $data = new stdClass();
  $data->nombre       = filter_var($_POST['nombre'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->apellidos     = filter_var($_POST['apellidos'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->cedula     = filter_var($_POST['cedula'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->fnac     = filter_var($_POST['fnac'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->direccion     = filter_var($_POST['direccion'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->dpto     = filter_var($_POST['dpto'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->telfijo     = filter_var($_POST['telfijo'], FILTER_SANITIZE_SPECIAL_CHARS);
  $data->telmovil     = filter_var($_POST['telmovil'], FILTER_SANITIZE_SPECIAL_CHARS);
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

  $imagen = $_FILES['img'];

  $tempFile = $imagen['tmp_name'];
  $nombreArchivo = filter_var($imagen['name'], FILTER_SANITIZE_SPECIAL_CHARS);
  $destinoFinal = dirname(__FILE__) . '/../upload/';
  var_dump( $destinoFinal);

  $partesNombres = explode('.', strtolower($nombreArchivo));
  $nuevoNombreImagen = str_replace(' ', '_', $partesNombres[0]);
  $extension = end($partesNombres);
  $nuevoNombreImagen.= '_' . md5(uniqid()) . '.' . $extension;

  $archivoFinal = $destinoFinal .  $nuevoNombreImagen;

  $tiposArchivo = array('jpg', 'jpeg', 'gif', 'png');


  if( $data->nombre && $data->apellidos) {
      
      $post = new Post();
      

     if( in_array($extension, $tiposArchivo) ) {
          //Hago la subida
          if( copy($tempFile, $archivoFinal) ) {
            $post->agregarPost($data, $nuevoNombreImagen);
            header("location:../index.php?msg=post_added");
          }else{
            header("location:../index.php?msg=error_copiando_archivo");
          }
        }else{
          // La extension no está permitida
          header("location:../index.php?msg=error_extension_archivo");
        }

    
  } else {
     header("location:../admin/registro.php?msg=datos_requeridos");
     // Los campos con * son requeridos
  }

} else {
  header("location:../$returnPage?msg=no_data");
}