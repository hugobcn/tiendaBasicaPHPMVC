<h3>Producto destacado</h3><br> 

<?php while ($product = $productos->fetch_object()): ?>
<div class="product">
    
    
                <?php if($product->imagen != null): ?>
                <img src="<?=base_url?>uploads/images/<?=$product->imagen?>" alt="camiseta producto"/>
                <?php else: ?>
                 <img src="<?= base_url ?>assets/img/camiseta.png" alt="camiseta producto"/>
                <?php endif; ?>
                 <br>
                <h2><a href="<?= base_url ?>producto/ver&id=<?= $product->id?>"><?=$product->nombre?></a></h2>
                
                <p> <?=$product->precio?></p>
                <a href=""<?= base_url ?>carrito/add&id=<?= $product->id?>"" class="button">Comprar</a>

            </div>
<?php endwhile; ?>
           
          

