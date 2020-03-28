


<?php if(isset($edit) && isset($pro) && is_object($pro)):  ?>
<h1>Editar producto <?= $pro->nombre?></h1>
 <?php $url_action = base_url."producto/save&id=".$pro->id; ?>
<?php else: ?>
<h1>Crear nuevo producto</h1>
<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>
<div class="form_container">
    <form action="<?= $url_action ?>" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input name="nombre" type="text" value="<?=isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>"/>

        <label for="descripcion">descripcion</label>
        <textarea name="descripcion"  ><?=isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>

        <label for="precio">precio</label>
        <input name="precio" type="text" value="<?=isset($pro) && is_object($pro) ? $pro->precio : ''; ?>"/>

        <label for="stock">stock</label>
        <input name="stock" type="number" value="<?=isset($pro) && is_object($pro) ? $pro->stock : ''; ?>"/>

        <label for="categoria">categoria</label>
        <select name="categoria" >
            <?php $categorias = Utils::showCategorias(); ?>   

            <?php while ($cat = $categorias->fetch_object()): ?>

            <option value="<?= $cat->id ?>" <?=isset($pro) && is_object($pro) && $cat->id == $pro->categoria_id ? 'selected' : ''; ?>>
					<?= $cat->nombre ?>
				</option>
                

            <?php endwhile; ?>  
        </select>

        <label for="imagen">imagen</label>
        
       <?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?=base_url?>uploads/images/<?=$pro->imagen?>" class="thumb"/> 
		<?php endif; ?>
                        <br>        
		<input type="file" name="imagen" />
        
        <input type="submit" value="Guardar"/>
    </form>
</div> 
