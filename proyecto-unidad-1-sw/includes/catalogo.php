<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Servicios que se ofrecen</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--encabezado de bienvenida y carrito-->
        <header>
            <?php if(isset($_SESSION['usuario'])): ?>
                <div class="bienvenida">
                    <h1>Bienvenido, <?= $_SESSION['usuario'];?></h1>
                    <form action="cerrarSesion.php">
                        <input type="submit" class="btn-logout" value="Cerrar Sesión">
                    </form>
                </div>
            <?php endif; ?>
            <div class="carrito">
                <ul>
                    <form action="procesarTotal.php" method="POST">
                        <input hidden type="text" name="total" id="total" value="">
                        <input hidden type="text" name="nombres" id="nombres" value="">
                        <input type="submit" class="btn-total" value="Mostrar total">
                        <!--<p id="total"></p>-->
                    </form>
                    <i class="fa fa-shopping-cart"></i>
                    <span class="contador" id="contador"></span>
                </ul>
            </div>
        </header>

        <!--catalogo-->
        <section class="serviciosDisponibles">
            <main class="mainServicios">
                <h2>Servicios disponibles</h2>

                <section class="contenedorServicios">                    
                    <div class="servicios">
                        <img src="../assets/img/salon.jpg" alt="Salón de evento">

                        <div class="descripcionServicios">
                            <h3 class="nombre">Renta del salón de evento</h3>
                            <span>$</span><span class="precio" id="precio1">10000</span>
                            <button type="submit" class="btn-añadir" id="btn-añadir" name="btn-añadir" onclick="agregarCarrito(id)">Añadir al carrito</button>
                        </div>
                    </div>

                    <div class="servicios">
                        <img src="../assets/img/manteleria.png" alt="Manteleria">

                        <div class="descripcionServicios">
                            <h3 class="nombre">Manteleria</h3>
                            <span>$</span><span class="precio" id="precio2">1000</span>
                            <button disabled = true type="submit" class="btn-añadir" id="btn-añadir2" onclick="agregarCarrito(id)">Añadir al carrito</button>
                        </div>
                    
                    </div>

                    <div class="servicios">
                        <img src="../assets/img/aire.jpg" alt="Salón de evento">

                        <div class="descripcionServicios">
                            <h3 class="nombre">Aire acondicionado</h3>
                            <span>$</span><span class="precio" id="precio3">1500</span>
                            <button type="submit" class="btn-añadir" id="btn-añadir3" onclick="agregarCarrito(id)">Añadir al carrito</button>
                        </div>
                    
                    </div>

                    <div class="servicios">
                        <img src="../assets/img/inmobiliario.jpg" alt="Salón de evento">

                        <div class="descripcionServicios">
                            <h3 class="nombre">Inmobiliario para 30 personas</h3>
                            <span>$</span><span class="precio" id="precio4">3000</span>
                            <button type="submit" class="btn-añadir" id="btn-añadir4" onclick="agregarCarrito(id)">Añadir al carrito</button>
                        </div>
                    
                    </div>

                    <div class="servicios">
                        <img src="../assets/img/sonido.jpeg" alt="Salón de evento">

                        <div class="descripcionServicios">
                            <h3 class="nombre">Equipo de audio</h3>
                            <span>$</span><span class="precio" id="precio5">2000</span>
                            <button type="submit" class="btn-añadir" id="btn-añadir5" onclick="agregarCarrito(id)">Añadir al carrito</button>
                        </div>
                    </div>
                </section>
            </main>
        </section>
        <script src="../assets/scripts/script.js"></script>
    </body>
</html>