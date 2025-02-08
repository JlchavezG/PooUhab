<?php 
 // crear la clase -> clase padre
 class vehiculo{
    public $marca;
// crear un constructor  
    public function __construct($marca){
        $this->marca = $marca;
    }   
    public function mostrarMarca(){
        echo "La marca del Vehiculo es $this->marca.<br>";
    }
}
// crear una clase hija 
class Moto extends vehiculo{
    public $tipo;

    public function __construct($marca,$tipo)
    {
       parent::__construct($marca); // llamando al constructor de la clase padre
       $this->tipo = $tipo; 
    }
    public function mostrarTipo(){
        echo "Esta moto es de tipo $this->tipo.<br>";
    }
}
// crear el objeto de la clase hija 
$moto1 = new Moto("Yamaha","Deportiva");
$moto2 = new Moto("Susuky","Deportiva");

// usuar metodos heredados y propios 
$moto1->mostrarMarca(); // muestra la marca del vehiculo
$moto1->mostrarTipo(); // mostra el tipo deportivo
$moto2->mostrarMarca(); // muestra la marca del vehiculo
$moto2->mostrarTipo(); // mostra el tipo deportivo

?>