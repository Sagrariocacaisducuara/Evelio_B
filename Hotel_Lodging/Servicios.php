<?php

class Servicios{
    private $id_servicio;
    private $nombre_servicio;
    private $descripcion_servicio;
    private $precio;

//constructo que inicia la clase y sus propiedades
    public function __construct(int $id_servicio, string $nombre_servicio, string $descripcion_servicio, float $precio){
        $this->id_servicio=$id_servicio;
        $this->nombre_servicio=$nombre_servicio;
        $this->descripcion_servicio=$descripcion_servicio;
        $this->precio=$precio;

    }
//METODO SET Y GET PARA EL ID DEL SERVICIO
    public function set_id_servicio($id_servicio){
        $this->id_servicio=$id_servicio;
    }
    public function get_id_servicio(){
        return $this->id_servicio;
    }

//METODO SET Y GET PARA EL NOMBRE DEL SERVICIO
    public function set_nombre_servicio($nombre_servicio){
        $this->nombre_servicio=$nombre_servicio;
    }
    public function get_nombre_servicio(){
        return $this->nombre_servicio;
    }

//METODO SET Y GET PARA LA DESCRIPCION DEL SERVICO 
    public function set_descripcion_servico($descripcion_servicio){
        $this->descripcion_servicio=$descripcion_servicio;
    }
    public function get_descripcion_servicio(){
        return $this->descripcion_servicio;
    }

//METODO SET Y GET PARA EL PRECIO DEL SERVICIO

    public function set_precio($precio){
        $this->precio=$precio;
    }
    public function get_precio(){
        return $this->precio;
    }
}

//INSTANCIA DE OBJETO DE LA CLASE ROLES
$servicio=new Servicios(1,'Restaurante','comida 24/7',10.99);
$servicio2=new Servicios(3,'Picina','picinas al aire libre',50.99);

//ejecucion 

echo "el primer servicio se llama: " . $servicio->get_nombre_servicio() . "  ".  "y su precio es" . "   ".  $servicio->get_precio() ; 

echo "<br>";
echo "<br>";

echo "el nombre del servicio2 es:  " .  $servicio2->get_nombre_servicio(), "<br>",

$servicio2->set_nombre_servicio("Lavanderia"), "<br>";

echo "el nuevo servicio actualizado  es:  " . $servicio2->get_nombre_servicio();


?>