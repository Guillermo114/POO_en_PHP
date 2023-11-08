<?php
class Animal{
        function sonidoAnimal(){
            return "sonido animal";
        }
}
class Perro extends Animal{
    function sonidoAnimal()
    {
        return "wof wof"."<br>";
    }
    
}

class Gato extends Animal{
    function sonidoAnimal()
    {
        return "miau miau";
    }
}

$perro = new Perro();
$gato = new Gato();

echo $perro->sonidoAnimal();
echo $gato->sonidoAnimal();

?>