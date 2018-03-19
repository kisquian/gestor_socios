<a href="index.php"><h1 style="margin-top:10px">Gestor de socios de <small style="color:#B5B5B5;">A. L. R. L. U</small></h1></a>
<a class="button" href="search.php">Buscar un socio</a> 

<?php if (isset($_SESSION["userLogged"])) { ?>
<a href="admin/write.php" class="button button-primary">Agregar socio</a>
<a href="app/logout.php">Cerrar sesion</a><?php } else { ?>


<a href="admin/index.php">Iniciar sesión</a>

<?php  } ?>

<hr>

<div id="fixed">
	<a href="index.php" class="button button-primary">Ver listado</a>
</div>

<?php if (isset($msg)) {
	echo $showMsg;
} ?>