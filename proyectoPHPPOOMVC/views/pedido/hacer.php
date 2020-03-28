<?php if(isset($_SESSION['identity'])): ?>
<h1>Hacer pedido</h1>
<a href ="<?= base_url?>carrito/index"class="button">Ver los productos y el pedido</a>
<br/>
<h3>Dirección para el envio:</h3>
	<form action="<?=base_url.'pedido/add'?>" method="POST">
		<label for="provincia">Provincia</label>
		<input type="text" name="provincia" required />
		
		<label for="localidad">Ciudad</label>
		<input type="text" name="localidad" required />
		
		<label for="direccion">Dirección</label>
		<input type="text" name="direccion" required />
		
		<input type="submit" value="Confirmar pedido" />
	</form>
<?php else:?>
<h1>Necesitas estar identificado</h1>

<?php endif;?>
