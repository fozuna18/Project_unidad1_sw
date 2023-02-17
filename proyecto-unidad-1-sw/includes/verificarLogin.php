<?php
session_start();

$uCliente = "cliente";
$pCliente = "123";
$uAdmi = "administrador";
$pAdmi = "asd";

if ($_POST) {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    //consulta para comprobar las credenciales del usuario
    if ($username == $uCliente && $password == $pCliente) {
        //comprobar la contraseña
        $usuario = $username;

        //utilizar una sesion para guardar los datos del usuario logueado
        $_SESSION['usuario'] = $usuario;
        if (isset($_SESSION['error_login'])) {
            session_unset();
        }
        header('Location: catalogo.php');
    }
    elseif($username == $uAdmi && $password == $pAdmi){
        //comprobar la contraseña
        $usuario = $username;

        //utilizar una sesion para guardar los datos del usuario logueado
        $_SESSION['usuario'] = $usuario;

        if (isset($_SESSION['error_login'])) {
            session_unset();
        }
        header('Location: administrador.php');
    }
    else{
        //mensaje de error
        $_SESSION['error_login'] = "Login incorrecto!! Verifica tus datos";
        header("Location: error.php");
    } 
}


