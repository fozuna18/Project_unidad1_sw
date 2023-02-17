<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administración</title>
        <link rel="stylesheet" href="../assets/css/styleAdmi.css" type="text/css">
    </head>
    <body>
        <div class="menu">
            <nav id="menu">
                <h3><?= $_SESSION['usuario'];?></h3>
                <br>
                <ul class="menu-side">
                    <li>
                        <a href="administrador.php">Inicio</a>
                    </li>
                    <li>
                         <a href="cerrarSesion.php">Cerrar sesion</a>
                    </li>
                </ul>
            </nav>
        </div>
        <h2>Dashboard Administrador</h2>
        <div class="board">
            <div class="titulo_grafica">
                <h3 class="t_grafica">Servicios contratados durante el mes</h3>
            </div>
            <div class="sub_board">
                <div class="sep_board"></div>
                <div class="cont_board">
                    <div class="graf_board">
                        <div class="barra">
                            <div class="sub_barra b5">
                                <div class="tag_g">30</div>
                                <div class="tag_leyenda">Salón de eventos</div>
                            </div>
                        </div>
                        <div class="barra">
                            <div class="sub_barra b4">
                                <div class="tag_g">26</div>
                                <div class="tag_leyenda">Manteleria</div>
                            </div>
                        </div>
                        <div class="barra">
                            <div class="sub_barra b3">
                                <div class="tag_g">17</div>
                                <div class="tag_leyenda">Aire acondicionado</div>
                            </div>
                        </div>
                        <div class="barra">
                            <div class="sub_barra b2">
                                <div class="tag_g">12</div>
                                <div class="tag_leyenda">Inmobiliario</div>
                            </div>
                        </div>
                        <div class="barra">
                            <div class="sub_barra b1">
                                <div class="tag_g">10</div>
                                <div class="tag_leyenda">Equipo de audio</div>
                            </div>
                        </div>
                    </div>
                    <div class="tag_board">
                        <div class="sub_tag_board">
                            <div>31</div>
                            <div>30</div>
                            <div>25</div>
                            <div>20</div>
                            <div>15</div>
                            <div>10</div>
                            <div>5</div>
                            <div>0</div>
                        </div>
                    </div>
            </div> 
                <div class="sep_board"></div>
        </div>    
        </div>
    </body>
</html>