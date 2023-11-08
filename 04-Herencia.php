<?php 

class Persona{

    //Atributos
   protected $nombre;
   protected $apellido;
   protected $edad;

    //MÉTODOS GETTERS
function getNombre(){
    return $this->nombre;
}
function getApellido(){
    return $this->apellido;
}
function getEdad(){
    return $this->edad;
}
}

class Estudiante extends Persona{
    function setEstudiante($nombre, $apellido, $edad){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->edad=$edad;
    }
}
$estudiante = new Estudiante();
$estudiante -> setEstudiante("Juan ", "Lara ", 25);
echo "Nombre: ".$estudiante->getNombre();
echo "<br>"."Apellido: ".$estudiante->getApellido();
echo "<br>"."Edad: ".$estudiante->getEdad();

?>