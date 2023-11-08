<?php   

// Clase abstracta que representa un medio de transporte 
abstract class Transporte{
    // Método abstracto para mover el transporte 
    abstract public function mover();
}

// Clase que representa un automóvil
class Automovil extends Transporte{
public function mover(){
return "El automóvil se está moviendo";}
}

// Clase concreta que representa una bicicleta 
class Bicicleta extends Transporte{
    public function mover(){
        return "La bicicleta se está moviendo.";
    }
} 

//Uso de las clases 
$auto = new Automovil();
echo $auto->mover(); // Imprime "El automóvil  se está moviendo"
echo "<br>";
$bici = new Bicicleta(); // Imprime "La bicicleta se está moviendo"
echo $bici->mover();


?>