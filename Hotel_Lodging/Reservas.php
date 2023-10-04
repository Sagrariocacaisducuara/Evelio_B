<?php


class Reservas{
    private $nro_reserva;
    private $nro_habitacion;
    private $id_cliente;
    private $fecha_entrada;
    private $fecha_salida;
    private $estado;


//constructo que inicia la clase y sus propiedades
    public function __construct(int $nro_reserva, int $nro_habitacion, int $id_cliente, string $fecha_entrada, string $fecha_salida){
        $this->nro_reserva=$nro_reserva;
        $this->nro_habitacion=$nro_habitacion;
        $this->id_cliente=$id_cliente;
        $this->fecha_entrada=$fecha_entrada;
        $this->fecha_salida=$fecha_salida;

    }

//METODO SET Y GET PARA EL NUMERO DE LA RESERVA
    public function set_nro_reserva($nro_reserva){
        $this->nro_reserva=$nro_reserva;
    }
    public function get_nro_reserva(){
        return $this->nro_reserva;
    }

//METODO SET Y GET PARA EL NUMERO DE LA HABITACION

    public function set_nro_habitacion($nro_habitacion){
        $this->nro_habitacion=$nro_habitacion;
    }
    public function get_nro_habitacion(){
        return $this->nro_habitacion;
    }

// METODO SET Y GET PARA EL ID DEL CLIENTE
    public function set_id_cliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }
    public function get_id_cliente(){
        return $this->id_cliente;
    }

//METODO SET Y GET PARA LAS FECHAS DE ENTRADA Y FECHAS DE SALIDA
    public function set_fecha_entrada($fecha_entrada){
        $this->fecha_entrada=$fecha_entrada;
    }
    public function get_fecha_entrada(){
        return $this->fecha_entrada;
    }

    public function set_fecha_salida($fecha_salida){
        $this->fecha_salida=$fecha_salida;
    }
    public function get_fecha_salida(){
        return $this->fecha_salida;
    }

}
//INSTANCIA DE OBJETOS DE LA CLASE RESERVAS
$reserva=new Reservas(1,2,1,'2023-10-03','2023-10-10');

//ejecucion 

echo "el nuemero de la habitacion que reservo es: " . $reserva->get_nro_habitacion(); 

echo "<br>";
echo "<br>";

echo "la fecha en que se realizo la reserva fue: " . $reserva->get_fecha_entrada(), "<br>",

$reserva->set_fecha_entrada("2023-09-07"), "<br>";

echo "la nueva reserva actualizada  fue el:  " . $reserva->get_fecha_entrada();


?>