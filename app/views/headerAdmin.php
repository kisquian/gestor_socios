<?php if (isset($_SESSION["userLogged"])) { ?><a href="main.php">
<?php } else {  ?>
<a href="index.php">
<?php } ?>
	<h1 style="margin-top:10px">Gestor de socios de <small style="color:#B5B5B5;">A. L. R. L. U</small></h1>
</a>
<?php if (isset($_SESSION["userLogged"])) { ?>
<a href="write.php" class="button button-primary">Agregar socio</a>
<a href="../app/logout.php">Cerrar sesion</a><?php } ?>
<hr>
<div id="fixed">
	<a href="../index.php" class="button button-primary">Ver listado</a>
</div>

<?php if (isset($msg)) {
	echo $showMsg;
} ?>
