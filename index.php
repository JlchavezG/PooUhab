<?php 
session_start();
if(isset($_SESSION['usuario'])){
    header("Location:Escritorio.php");
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <style>
        body{ font-family:Arial, Helvetica, sans-serif; text-align: center;}
        form{ display: inline-block; padding: 20px; border: 1px solid;}
    </style>
    <h1>Iniciar Sesion</h1>
    <form action="procesaLogin.php" method="post">
        <input type="text" name="nombre" placeholder="Usuario" require>
        <br><br>
        <input type="password" name="password" placeholder="password" require>
        <br><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>