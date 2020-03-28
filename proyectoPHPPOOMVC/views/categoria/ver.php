<?php if (isset($categoria)): ?>
    <h1><?= $categoria->nombre ?></h1>
    <?php if ($productos->num_rows == 0): ?>
        <p>No hay productos para mostrar</p>
    <?php else: ?>
       
        <?php while ($product = $productos->fetch_object()): ?>
            <div class="product">
                <?php if ($product->imagen != null): ?>
                    <img src="<?= base_url ?>uploads/images/<?= $product->imagen ?>" alt="camiseta producto"/>
                <?php else: ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" alt="camiseta producto"/>
                <?php endif; ?>
                <h2><a href="<?= base_url ?>producto/ver&id=<?= $product->id?>"><?=$product->nombre?></a></h2>
                <p> <?= $product->precio ?></p>
                <a href="<?= base_url ?>carrito/add&id=<?= $product->id?>" class="button">Comprar</a>

            </div>
        <?php endwhile; ?>


    <?php endif; ?>
<?php else: ?>
    <h1>Categoria No existe</h1>
<?php endif; ?>

