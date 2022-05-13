<?php 
include('../../head.php');
include('../../menu.php');
?>
<div class="contenido">
	<div class="contenedor">
		<section class="titulo_contenedor">
			<h3>Agregar Rango</h3>
		</section>
		<form method="POST">
			<main class="form_main">
				<label class="elementoform">Ingrese el nombre del Rango</label>
				<input class="elementoform" type="text" name="nombreCargo">
				<input class="elementoform" type="submit" name="Aceptar" value="Agregar">
			</main>
		</form>		
	</div>
</div>
<?php
include("../../foot.php");
?>