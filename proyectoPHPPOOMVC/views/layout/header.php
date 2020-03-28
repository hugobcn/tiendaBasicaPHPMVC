<?php
require_once 'helpers/utils.php';
require_once 'models/categoria.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');
#$categoria = Utils::showCategorias();
?>
<!DOCTYPE html  >
<html  lang="es">
    <head>
        <title>Tienda de Camisetas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="UTF-8">

        <link rel ="stylesheet" href="<?= base_url ?>assets/css/styles.css"
    </head>
    <body>

        <h1>Tienda de Camisetas</h1>

        <!-- CABECERA  -->
        <header id ="header">
            <div id="logo">
                <img src="<?= base_url ?>assets/img/camiseta.png" alt="camiseta loho"/>
                <a href ="<?= base_url ?>index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>

        <!-- MENU -->

        <?php $categorias = Utils::showCategorias(); ?>
        <nav id="menu">

            <ul>
                <li>
                    <a href="<?= base_url ?>">Inicio</a>
                </li>
                
                <?php while ($cat = $categorias->fetch_object()): ?>


                    <li>
                        <a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
                    </li>

                <?php endwhile; ?>
            </ul>
        </nav>

        <div id="content">
