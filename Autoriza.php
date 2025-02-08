<?php 
    require_once 'app/Usuario.php';
    class Autoriza{
        private $usuariosRegistrados = [];

        public function __construct()
        {
            // crear los usuarios 
            $this->usuariosRegistrados[] = new Usuario("admin","1234");
            $this->usuariosRegistrados[] = new Usuario("Jose luis","jsl");
        }
        public function iniciarSesion($nombre,$password){
            foreach($this->usuariosRegistrados as $usuario){
                if($usuario->nombre === $nombre && $usuario->verificaPassword($password)){
                    session_start();
                    $_SESSION['usuario'] = $nombre;
                    return true;
                }
                 
            }
            return false;
        }
        
    }
?>