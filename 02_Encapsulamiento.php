<?php
class MiClase {
    // Atributos publicos
    public $acceso = "public1"."<br>";
    public $acceso2 = "public2"."<br>";
    public $acceso3 = "public3"."<br>";

    // Métodos públicos para acceder a las propiedades publicos
    public function obtenerAcceso() {
        return $this->acceso;
    }

    public function obtenerAcceso2() {
        return $this->acceso2;
    }

    public function obtenerAcceso3() {
        return $this->acceso3;
    }
}

// Instancia
$objeto1 = new MiClase();

// Acceder a las propiedades publicas usando los métodos públicos
echo $objeto1->obtenerAcceso();
echo $objeto1->obtenerAcceso2();
echo $objeto1->obtenerAcceso3();



            //CLASE 2 PARA USAR EL MODFIFICADOR DE ACCESO PROTECTED



            class ClaseProtected{


                //Atributos
            protected $propiedad1 = "protected1 "."<br>";
            protected $propiedad2 = "protected2 "."<br>";
            protected $propiedad3 = "protected3 "."<br>";
                //Métodos
            protected function mostrar1(){
                return $this-> propiedad1;
            }
            protected function mostrar2(){
                return $this-> propiedad2;
            }
            protected function mostrar3(){
                return $this-> propiedad3;
                
            }
        
            }
            
          

            class Heredada extends ClaseProtected{
                public function accederProtected(){
                return $this->mostrar1();
                }
                public function accederProtected2(){
                    return $this->mostrar2();
                }
                public function accederProtected3(){
                    return $this->mostrar3();
                }
            }
            $obj = new Heredada();
        echo $obj -> accederProtected();
        echo $obj -> accederProtected2();
        echo $obj -> accederProtected3();
       


            //Clase con atributos y métodos declarados como private
class ClasePrivate{

private $privado1;
private $privado2;
private $privado3;


//Métodos para establecer valor
public function setPrivado1($privado1){
$this->privado1=$privado1;
}

public function setPrivado2($privado2){
    $this->privado2=$privado2;
    }

 public function setPrivado3($privado3){
        $this->privado3=$privado3;
        }

//Métodos para obtener valor
public function getPrivado1(){
    return $this->privado1;
}
public function getPrivado2(){
    return $this->privado2;
    
}
public function getPrivado3(){
    return $this->privado3;
}
}
$objetoPrivado = new ClasePrivate();

$objetoPrivado -> setPrivado1("private1"."<br>");
$objetoPrivado -> setPrivado2("private2"."<br>");
$objetoPrivado -> setPrivado3("private3"."<br>");

echo $objetoPrivado ->getPrivado1();
echo $objetoPrivado ->getPrivado2();
echo $objetoPrivado ->getPrivado3();

?>