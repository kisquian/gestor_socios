<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <title>Gestión de Socios - A. L. R. L. U</title>

  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/skeleton.css">
  <link rel="stylesheet" href="../style.css">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="container">
    <?php include_once('headerAdmin.php') ?>
    

    <div class="row">

    <div class="u-full-width">
      <div id="posts">
        <h4>Socios</h4>
      <table class="u-full-width">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <?php
                $count = 0;
                foreach( $listaPosts as $pst ) { 
               ?>
                
                <tr>
                      <td><strong><?php echo $pst->id ?></strong></td>
                      <td><a <?php echo 'href="../post.php?id='. $pst->id.'"'; ?> ><?php echo $pst->nombre ?></a> <?php if ($pst->status == 0) { echo " - Borrador";}?></td>
                      <td><a  <?php echo 'href="../app/delete_post.php?id='. $pst->id.'"'; ?> >Borrar</a></td>
                      <td><a   <?php echo 'href="edit.php?id='. $pst->id.'"'; ?> >Editar</a></td>
                </tr>
              <?php
                 }
              ?>

        </tbody>
      </table>
      </div>
</div>




      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>