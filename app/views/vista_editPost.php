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

      <form action="../app/editar_post.php" id="" method="POST">
        <input type="hidden" name="idPost" value="<?php echo $postData->id; ?>">
        <div class="row">
          <div class="u-full-width">
            <label for="nombre">Nombre</label>
            <input class="u-full-width" type="text" placeholder="Nombre" name="nombre" value="<?php echo $postData->nombre; ?>">
          </div>
          <div class="u-full-width">
            <label for="apellidos">Apellidos</label>
            <input class="u-full-width" type="text" placeholder="Apellidos" name="apellidos" value="<?php echo $postData->apellidos; ?>">
          </div>
          <div class="u-full-width">
            <label for="cedula">Cedula</label>
            <input class="u-full-width" type="text" placeholder="Cedula" name="cedula" value="<?php echo $postData->cedula; ?>">
          </div>
          <div class="u-full-width">
            <label for="fnac">Fecha de Nacimiento</label>
            <input class="u-full-width" type="date" placeholder="Fecha de Nacimiento" name="fnac" value="<?php echo $postData->fnac; ?>">
          </div>
          <div class="u-full-width">
            <label for="direccion">Dirección</label>
            <input class="u-full-width" type="text" placeholder="Dirección" name="direccion" value="<?php echo $postData->direccion; ?>">
          </div>
          <div class="u-full-width">
            <label for="dpto">Departamento</label>
            <input class="u-full-width" type="text" placeholder="Departamento" name="dpto" value="<?php echo $postData->dpto; ?>">
          </div>
          <div class="u-full-width">
            <label for="telFijo">Tel. Fijo</label>
            <input class="u-full-width" type="text" placeholder="Tel. Fijo" name="telFijo" value="<?php echo $postData->telFijo; ?>">
          </div>
          <div class="u-full-width">
            <label for="telMovil">Tel. Movil</label>
            <input class="u-full-width" type="text" placeholder="Tel. Movil" name="telMovil" value="<?php echo $postData->telMovil; ?>">
          </div>
          <div class="u-full-width">
            <label for="email">Email</label>
            <input class="u-full-width" type="text" placeholder="Email" name="email" value="<?php echo $postData->email; ?>">
          </div>
          <div class="u-full-width">
            <label for="titulo">Título</label>
            <input class="u-full-width" type="text" placeholder="Título" name="titulo" value="<?php echo $postData->titulo; ?>">
          </div>
          <div class="u-full-width">
            <label for="generacion">Generación</label>
            <input class="u-full-width" type="text" placeholder="Generación" name="generacion" value="<?php echo $postData->generacion; ?>">
          </div>
          <div class="u-full-width">
                  <label for="formaDePago">Forma de pago</label>
                  <select name="formaDePago" id="" required>
                  <option value="0">Mensual</option>
                  <option value="1">Trimestral</option>
                  <option value="2">Anual</option>
                </select>
                </div>
          <div class="u-full-width">
            <label for="empresa">Empresa</label>
            <input class="u-full-width" type="text" placeholder="Empresa" name="empresa" value="<?php echo $postData->empresa; ?>">
          </div>
          <div class="u-full-width">
            <label for="ciudadDeEmpresa">Ciudad de la empresa</label>
            <input class="u-full-width" type="text" placeholder="Ciudad de la empresa" name="ciudadDeEmpresa" value="<?php echo $postData->ciudadDeEmpresa; ?>">
          </div>
          <div class="u-full-width">
            <label for="puestoDeEmpresa">Puesto en la empresa</label>
            <input class="u-full-width" type="text" placeholder="Puesto en la empresa" name="puestoDeEmpresa" value="<?php echo $postData->puestoDeEmpresa; ?>">
          </div>
          <div class="u-full-width">
            <label for="fechaAdhesion">Fecha de Afiliación</label>
            <input class="u-full-width" type="date" placeholder="Fecha de Afiliación" name="fechaAdhesion" value="<?php echo $postData->fechaAfiliacion; ?>">
          </div>

          <div class="u-full-width">
            <label for="email">Contenido</label>
            <textarea class="u-full-width" type="email" placeholder="Contenido" name="content" cols="9" rows="9"><?php echo $postData->content; ?></textarea>
          </div>
          <div class="u-full-width">
            <label for="Status">Status</label>
                <select name="status" id="status" required>
                  <?php if ($postData->status == 1) { ?>
                    <option value="1" selected="selected">activo</option>
                  <option value="0">inactivo</option>
                  <?php } else { ?>
                  <option value="1">activo</option>
                  <option value="0" selected="selected">inactivo</option>
                  <?php } ?>
                </select>
              </div>
        </div>
        
        
        <input class="button-primary" type="submit" value="EDITAR" id="btnSubmit">
      </form>


      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</body>
</html>