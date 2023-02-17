<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="REFRESH" content="5;URL=../index.php"> 
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        <title>Document</title>
    </head>
    <body>
        <?php if(isset($_SESSION['error_login'])): ?>
            <div class="alerta-error">
               <h1><?= $_SESSION['error_login']?></h1>
            </div>
        <?php endif;?>
    </body>
</html>

