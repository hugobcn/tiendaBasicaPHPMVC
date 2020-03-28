<!DOCTYPE html  >
<html  lang="es">
    <head>
        <title>Tienda de Camisetas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="UTF-8">

        <link rel ="stylesheet" href="assets/css/styles.css"
    </head>
    <body>

        <h1>Tienda de Camisetas</h1>

        <!-- CABECERA  -->
        <header id ="header">
            <div id="logo">
                <img src="assets/img/camiseta.png" alt="camiseta loho"/>
                <a href ="index.php">
                    Tienda de Camisetas
                </a>
            </div>
        </header>

        <!-- MENU -->
        <nav id="menu">
            <ul>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
                <li>
                    <a href="#">Inicio</a>
                </li>
            </ul>
        </nav>

        <div id="content">

            <!-- BARRALATERAL  -->

            <aside id="lateral">
                
                <h3>Entrar Web</h3>

                <div id="login" class="block_aside">
                    <form action="#" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email">

                        <label for="password">password</label>
                        <input type="password" name="password">

                        <input type="submit" value="acceder">
                    </form>
                    <ul>
                        <li> <a href="#">Mis pedidos</a></li>
                        <li> <a href="#">Gestionar pedidos</a></li>
                        <li> <a href="#">Gestionar categorias</a></li>
                    </ul>
                  

                </div>    


            </aside>
        


        <!-- CONTENIDO CENTRAL  -->
        <div id="central">
            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta producto"/>
                <h2>Camiseta Azul</h2>
                <p> 30 €</p>
                <a href="#" class="button">Comprar</a>

            </div>

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta producto"/>
                <h2>Camiseta Azul</h2>
                <p> 30 €</p>
                <a href="#" class="button">Comprar</a>

            </div>

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta producto"/>
                <h2>Camiseta Azul</h2>
                <p> 30 €</p>
                <a href="#"  class="button">Comprar</a>

            </div>

            <div class="product">
                <img src="assets/img/camiseta.png" alt="camiseta producto"/>
                <h2>Camiseta Azul</h2>
                <p> 30 €</p>
                <a href="#" class="button">Comprar</a>

            </div>

        </div>
        <!-- PIE  -->
        <footer id="footer">
            <p>Desarollo por victor robles WEB &copy <?= date('Y') ?></p>
        </footer>
</div>

    </body>
</html> 

<?php
?>
