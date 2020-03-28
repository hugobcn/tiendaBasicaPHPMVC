<h1>GestionarCategorias</h1>

<a href="<?=base_url?>categoria/crear" class="button button-small">CrearCat</a>


<table >
    <tr>
        <th>id</th>
        <th>nombreCat</th>
    </tr>
    
<?php while($cat =$categorias->fetch_object() ): ?>
<tr>
    <td><?=$cat->id; ?></td>
    <td><?=$cat->nombre; ?></td>
</tr>
    
<?php endwhile; ?>

</table>
