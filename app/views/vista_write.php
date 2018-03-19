


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

    <h1>Agregar socio</h1>
            <form id="frmRegister" action="../app/agregar_post.php" method="POST" enctype="multipart/form-data">
            <!-- Formulario -->
              
                <div class="row">
                  <div class="u-full-width">
                  <label for="nombre">Nombre</label>
                  <input class="u-full-width" type="text" placeholder="Juan" id="nombre" name="nombre" required>
                </div>

                <div class="u-full-width">
                  <label for="apellidos">Apellidos</label>
                  <input class="u-full-width" type="text" placeholder="Perez" id="apellidos" name="apellidos" required>
                </div>

                <div class="u-full-width">
                  <label for="cedula">Cedula</label>
                  <input class="u-full-width" type="text" placeholder="4123456-7" id="cedula" name="cedula" required>
                </div>

                <div class="u-full-width">
                  <label for="fnac">Fecha de Nacimiento</label>
                  <input class="u-full-width" type="date" placeholder="17/03/1991" id="fnac" name="fnac" required>
                </div>

                <div class="u-full-width">
                  <label for="direccion">Dirección</label>
                  <input class="u-full-width" type="text" placeholder="Avda. Italia 1234" id="direccion" name="direccion" required>
                </div>

                <div class="u-full-width">
                  <label for="dpto">Departamento</label>
                  <input class="u-full-width" type="text" placeholder="Departamento" id="dpto" name="dpto" required>
                </div>
                

                <div class="u-full-width">
                  <label for="telfijo">Tel. fijo</label>
                  <input class="u-full-width" type="text" placeholder="23115670" id="telfijo" name="telfijo" required>
                </div>

                <div class="u-full-width">
                  <label for="telmovil">Tel. celular </label>
                  <input class="u-full-width" type="text" placeholder="092123456" id="telmovil" name="telmovil" required>
                </div>

                <div class="u-full-width">
                  <label for="email">E-Mail</label>
                  <input class="u-full-width" type="text" placeholder="juan.perez@gmail.com" id="email" name="email" required>
                </div>

                <div class="u-full-width">
                  <label for="titulo">Titulo</label>
                  <input class="u-full-width" type="text" placeholder="Ingeniero Industrial" id="titulo" name="titulo" required>
                </div>

                <div class="u-full-width">
                  <label for="generacion">Generación</label>
                  <input class="u-full-width" type="text" placeholder="2000" id="generacion" name="generacion" required>
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
                  <input class="u-full-width" type="text" placeholder="Mi empresa S. A. " id="empresa" name="empresa" required>
                </div>

                <div class="u-full-width">
                  <label for="ciudadDeEmpresa">Ciudad de la empresa</label>
                  <input class="u-full-width" type="text" placeholder="Montevideo" id="ciudadDeEmpresa" name="ciudadDeEmpresa" required>
                </div>

                <div class="u-full-width">
                  <label for="puestoDeEmpresa">Puesto en la empresa</label>
                  <input class="u-full-width" type="text" placeholder="Supervisor" id="puestoDeEmpresa" name="puestoDeEmpresa" required>
                </div>

                <div class="u-full-width">
                  <label for="fechaAdhesion">Fecha de afiliación </label>
                  <input class="u-full-width" type="date" placeholder="05/05/2017" id="fechaAdhesion" name="fechaAdhesion" required>
                </div>

              <div class="u-full-width">
              <label for="img">Foto</label>
                      <input id="imagenRobot" name="img" type="file" />

            </div>

                <div class="u-full-width">
                <label for="content">Notas</label>
                <textarea class="u-full-width" placeholder="Contenido aqui" id="content" name="content" required></textarea>
              </div>

              <div class="u-full-width">
                <select name="status" id="" required>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>
              </div>
              </div>
              
              
                <input type="submit" class="button-primary" id="submitInput" value="Agregar socio" />
             
            <!-- Formulario -->
            </form>
      
    </div>

  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>