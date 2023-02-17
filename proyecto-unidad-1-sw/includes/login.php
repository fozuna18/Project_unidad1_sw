<?php require_once('includes/procesarError.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salon de Eventos</title>
        <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
    </head>
    <body class="center">
        <h1>Salón de Eventos.</h1>
        <!--login-->
        <div class="session">
            <form class="login" action="includes/verificarLogin.php" method="POST">
                <h1>Iniciar sesión</h1>
                
                <!--usuario-->
                <label for="inputUsername" class="labels">Usuario</label>
                <input type="text" id="inputUsername" class="form-control" placeholder="Nombre de Usuario" required autofocus name="username">
            
                <!--contraseña-->
                <label for="inputPassword" class="labels">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="password">

                <!--recordar-->
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="Recordarme"> Recordarme
                    </label>
                </div>

                <!--boton acceder-->
                <input class="btn-log" type="submit" value="Acceder">

                <!--pie de pagina-->
                <footer id="pie">
                    <p>Desarrollado por Fernando Daniel Ozuna Pérez &copy; 2023</p>
                </footer>

            </form>
            <?php borrarError(); ?>
        </div>
    </body>
</html>
