<?php include_once("inc/globalVars.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $the_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="style.css">
  <?php include_once("ads/analyticstracking.php") ?>
</head>
<body>
  <div class="container">
    <?php include_once('header.php') ?>
    <div class="row">
      <div class="s">
        <?php if (isset($_SESSION["userLogged"])) { ?>
        <table class="u-full-width">
          
              <tr>
                <th>ID</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>C. I</th>
                <th>F. Nac</th>
                <th>Acciones</th>
              </tr>
              <?php
                $count = 0;
                  foreach( $listaPosts as $pst ) { ?>
                    <tr id="<?php echo $pst->id ?>">
                      <td><?php echo $pst->id ?></td>
                      <td><?php echo $pst->apellidos; ?></td>
                      <td><?php echo $pst->nombre; ?></td>
                      <td><?php echo $pst->cedula; ?></td>
                      <td><?php echo $pst->fnac; ?></td>
                      
                      
                      <td>
                        <a href="./app/delete_post.php?id=<?php echo $pst->id ?>" class="button button-primary" onclick="return confirm('¿Borrar a <?php echo $pst->nombre." ". $pst->apellidos;   ?> del sistema?')">Borrar</a>
                        <a href="admin/edit.php?id=<?php echo $pst->id ?>" class="button">Editar</a>
                        <a href="javascript:;" class="button buttonCollapsed">MAS INFORMACIÓN</a>
                        <p class="hiddenField">
                          <strong>Direccción:</strong> <?php echo $pst->direccion; ?> <br>
                          <strong>Telefonos:</strong> <?php echo $pst->telFijo; ?> - <?php echo $pst->telMovil; ?><br>
                          <strong>E-Mail:</strong> <a href="mailto:<?php echo $pst->email; ?>"><?php echo $pst->email; ?></a>
                          <br>
                          <strong>Título:</strong> <?php echo $pst->titulo; ?> (Gen. <?php echo $pst->generacion ?>)
                          <br>
                          <strong>Empresa:</strong> <?php echo $pst->empresa; ?> (<?php echo $pst->ciudadDeEmpresa; ?>) <br>
                          <strong>Puesto en la Empresa:</strong> <?php echo $pst->puestoDeEmpresa;?> <br></p>
                      </td>
                    </tr>
                    
                    
              <?php } //foreach  ?>
            <?php } else { //if user logued  ?>
              Debes iniciar sesión para ver el listado de socios.
            <?php } ?>
          </table>
      </div>
      <?php //include('sidebar.php') ?>
    </div>
  </div>
<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
    $(document).ready(function($) {
      $('.button.buttonCollapsed').on('click', function(event) {
        /* Act on the event */
        $(this).next().slideToggle('fast');
      });
    });
  </script>
</body>
</html>