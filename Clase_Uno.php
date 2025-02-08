<?php
// Paso 1 crear o definir la clase 
class Coche
{
    // Paso 2 determinar la propiedades 
    public $marca;
    public $color;
    public $pais;
    private $estado; // propiedad privada

    // Paso 3 contructor (se ejecuta al crear el objeto)
    public function __construct($marca, $color, $pais)
    {
        $this->marca = $marca; // asignando valor a la propiedad marca
        $this->color = $color; // asignar el valor color
        $this->pais = $pais; // asigno el pais
        $this->estado = "Detenido";
    }
    // Paso 4 Crear el metodo para mostrar la informacion 
    public function arrancar(){
        $this->estado = "En marcha";
        echo "El coche esta arrancando.<br>";
    }

    public function detener(){
        $this->estado = "Detenido";
        echo "El coche esta detenido.<br>";
    }
    public function mostrarEstado(){
        echo "El coche $this->marca esta actualmente $this->estado.<br>";
    }


    public function mostrarInformacion()
    {
        echo "Este Coche es un $this->marca de color $this->color y del pais de $this->pais.<br>";
    }
}
// Paso 5 Crear la instacia del Objeto darle valores a cada una de las variables
$Coche1 = new Coche("VW","Negro","Alemania");
$Coche2 = new Coche("BMW","Rojo","Alemania");
$Coche3 = new Coche("Ford","Blanco","EUA");
// Paso 6 mandar a llamar toda la informacion para imprimir 
$Coche1->mostrarInformacion();
$Coche1->mostrarEstado(); //  Muestra el estado Detenido
$Coche1->arrancar(); // cambia el estado a marcha
$Coche1->mostrarEstado();
$Coche1->detener();
$Coche1->mostrarEstado();
$Coche2->mostrarInformacion();
$Coche3->mostrarInformacion();
