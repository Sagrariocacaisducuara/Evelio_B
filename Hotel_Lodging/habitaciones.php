<?php 
declare(strict_types=1);

class Habitaciones{
    private int $nro_habitacion;
    private string $tipo;
    private float $precio;
    private string $disponibilidad;

    public function __construct(int $nro_habitacion, string $tipo, float $precio, string $disponibilidad){
        $this->nro_habitacion=$nro_habitacion;
        $this->tipo=$tipo;
        $this->precio=$precio;
        $this->disponibilidad=$disponibilidad;
    }

    public function set_nro_habitacion($nro_habitacion){
        $this->nro_habitacion=$nro_habitacion;
    }
    public function get_nro_habitacion(){
        return $this->nro_habitacion;
    }
    
    public function set_tipo($tipo){
        $this->tipo=$tipo;
    }
    public function get_tipo(){
        return $this->tipo;
    }

    public function set_precio($precio){
        $this->precio=$precio;
    }
    public function get_precio(){
        return $this->precio;
    }

    public function set_disponibilidad($disponibilidad){
        $this->disponibilidad=$disponibilidad;
    }
    public function get_disponibilidad(){
        return $this->disponibilidad;
    }
}

$habitaciones= new Habitaciones(6,'doble',90.00,'Disponible');
echo 'El numero de la habitacion:',$habitaciones->get_nro_habitacion(),'<br>';
echo 'El tipo de habitacion:',$habitaciones->get_tipo(),'<br>';
echo 'El precio de la habitacion:',$habitaciones->get_precio(),'<br>';
echo 'La disponibilidad:',$habitaciones->get_disponibilidad(),'<br>';
echo $habitaciones->set_tipo('suite junior');
echo 'El tipo de habitacion asignado al numero de habitacion: ',$habitaciones->get_nro_habitacion(),' fue cambiado por: ',$habitaciones->get_tipo();
?>