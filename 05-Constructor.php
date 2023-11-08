<?php
class Motocicleta{
    //Atributos
    private $color;
    private $cilindraje;
    private $modelo;

//Método constructor
public function __construct($color, $cilindraje, $modelo){
$this->color=$color;
$this->cilindraje=$cilindraje;
$this->modelo=$modelo;
}

//Metodos para mostrar
public function mostrarColor(){
return $this->color;
}
public function mostrarCilindraje(){
    return $this->cilindraje;
}
public function mostrarModelo(){
return $this->modelo;
}
    
}

$motoneta=new Motocicleta("roja", 150, "w150");

echo $motoneta -> mostrarColor();
echo "<br>".$motoneta -> mostrarCilindraje();
echo "<br>".$motoneta -> mostrarModelo();







?>