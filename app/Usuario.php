<?php 

class Usuario{
    public $nombre;
    private $password;

    // construir el objeto constructor
    public function __construct($nombre,$password)
    {
        $this->nombre = $nombre;
        $this->password = $password;
    }
    // metodo o funcion para validar el password 
    public function verificarPassword($passwordIngresado){
        return $this->password === $passwordIngresado;
    }
}
?>