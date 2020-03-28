<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'helpers/utils.php';
$categoria = Utils::showCategorias();
var_dump($categoria);
?>

				<ul>
					<li>
						<a href="<?=base_url?>">Inicio</a>
					</li>
					<?php while($categoria = $categorias->fetch_object()): ?>
						<li>
							<a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?=$cat->nombre?></a>
						</li>
					<?php endwhile; ?>
				</ul>

