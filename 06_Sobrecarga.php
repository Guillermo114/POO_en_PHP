<?php

class MiClase {

    //array usado para almacenar las propiedades y su valor
private $propiedadesSobrecargadas = array(); 

//Función para sobrecargar propiedades con el método mágico __set
public function __set($name, $value)
{  /* 
    $name es el parametro que recibirá la función y se asignará como propiedad
    al arreglo que se llama $propiedadesSobracargadas.
    */
    $this->propiedadesSobrecargadas[$name] = $value;
}

/* aqui la función get recibe el parametro que son los nombres de los atributos
a mostrar asi que no se manda a llamar con el nombre de la función, si no con el
nombre de la propiedad */
public function __get($name) {
    return $this->propiedadesSobrecargadas[$name];
}

}
$objeto = new MiClase();
//Asignando valores con el método mágico set
$objeto -> propiedad1 = "valor 1 ";
$objeto-> propiedad2 = "valor 2";
$objeto -> propiedad3 = 3;

echo $objeto->propiedad1;  // Salida: Hola
echo $objeto->propiedad2;  // Salida: 42
echo $objeto->propiedad3;
echo $objeto->propiedad4; //Salida: Error ya que no existe esa propiedad




?>