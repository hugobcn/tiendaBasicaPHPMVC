<!-- BARRALATERAL  -->

<aside id="lateral">

    <?php if (!isset($_SESSION['identity'])): ?>  
        <h3>Entrar Web</h3>
    <?php else: ?>
        
    <div id="carrito" class="block_aside">
		<h3>Mi carrito</h3>
		<ul>
			<?php $stats = Utils::statsCarrito(); ?>
			<li><a href="<?=base_url?>carrito/index">Productos (<?=$stats['count']?>)</a></li>
			<li><a href="<?=base_url?>carrito/index">Total: <?=$stats['total']?> $</a></li>
			<li><a href="<?=base_url?>carrito/index">Ver el carrito</a></li>
		</ul>
	</div>    
        

        <h3><?= $_SESSION['identity']->nombre ?>  <?= $_SESSION['identity']->apellidos ?> </h3>
    <?php endif; ?>     

    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION['identity'])): ?>    
            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">password</label>
                <input type="password" name="password">

                <input type="submit" value="acceder">
            </form>
        <br>
        <a href="<?=base_url?>usuario/registro" class="button button-small">Registrate</a>
        <?php endif; ?>    
        <ul>
            <?php if (isset($_SESSION['identity']) && !isset($_SESSION['admin'])): ?>    
             <li> <a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
             <?php endif; ?>
            
            <?php if(isset($_SESSION['admin'])): ?>
             <li> <a href="<?=base_url?>pedido/mis_pedidos">Mis pedidos</a></li>
             <br>
            <li> <a href="<?=base_url?>categoria/index">Gestionar categorias</a></li>
            <li> <a href="<?=base_url?>producto/gestion">Gestionar productos</a></li>
             
            <li> <a href="<?=base_url?>pedido/gestion">Gestionar pedidos</a></li>
            <br>
            
            <?php endif; ?>
            
             <?php if (isset($_SESSION['identity'])): ?>    
             <li> <a href="<?=base_url?>usuario/logout">Cerrar Sesion</a></li>
             <?php endif; ?>
        </ul>   


    </div>    


</aside>



<!-- CONTENIDO CENTRAL  -->
<div id="central">
