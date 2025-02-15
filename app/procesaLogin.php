<?php 

// solicitar la libreria de autoriza 
require_once 'Autoriza.php';
// crear la clase de autorizacion 
$autoriza = new Autoriza();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // if anidado 
    if($autoriza->iniciarSesion($nombre,$password)){
        header("Location:escritorio.php");
        exit();
    } else {
        echo "<script>alert('Usuario  o contraseña incorrectos');window.location.href='../index.php'</script>";
    }
}

?>