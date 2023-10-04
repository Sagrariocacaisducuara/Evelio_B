<?php 
declare(strict_types=1);

class Facturacion{
    private int $nro_factura;
    private int $nro_reserva;
    private DateTime $fecha_emision; 
    private float $monto_total;

    public function __construct(int $nro_factura, int $nro_reserva, DateTime $fecha_emision, float $monto_total){
        $this->nro_factura=$nro_factura;
        $this->nro_reserva=$nro_reserva;
        $this->fecha_emision=$fecha_emision;
        $this->monto_total=$monto_total;
    }

    public function set_nro_factura($nro_factura){
        $this->nro_factura=$nro_factura;
    }
    public function get_nro_factura(){
        return $this->nro_factura;
    }

    public function set_nro_reserva($nro_reserva){
        $this->nro_reserva=$nro_reserva;
    }
    public function get_nro_reserva(){
        return $this->nro_reserva;
    }
    
    public function set_fecha_emision($fecha_emision){
        $this->fecha_emision=$fecha_emision;
    }
    public function get_fecha_emision(){
        return $this->fecha_emision;
    }

    public function set_monto_total($monto_total){
        $this->monto_total=$monto_total;
    }
    public function get_monto_total(){
        return $this->monto_total;
    }
}
$fecha_emision = DateTime::createFromFormat('Y-m-d', '2023-10-04');
$facturacion=new Facturacion(1,1,$fecha_emision,500.00);
echo 'El numero de factura:',$facturacion->get_nro_factura(),'<br>';
echo 'El numero de reserva:',$facturacion->get_nro_reserva(),'<br>';
echo 'La fecha de emision:',$facturacion->get_fecha_emision()->format('Y-m-d'),'<br>';
echo 'El monto total:',$facturacion->get_monto_total(),'mil','<br>';
echo $facturacion->set_monto_total(800.00);
echo 'El monto total de la factura:',$facturacion->get_nro_factura(),' fue actualizado a: ',$facturacion->get_monto_total(),'mil';
?>