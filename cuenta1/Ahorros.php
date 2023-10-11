<?php
include('Cuenta.php');

class Ahorros extends Cuenta {
    private $sucursal_apertura;
    private $fecha_apertura;
    private $tasa_interes;

    public function __construct(string $sucursal_apertura, string $fecha_apertura, float $tasa_interes, string $num_Cuenta, float $saldo_pesos, float $saldo_dolares){
        parent::__construct($num_Cuenta, $saldo_pesos, $saldo_dolares);

        $this->sucursal_apertura = $sucursal_apertura;
        $this->fecha_apertura = $fecha_apertura;
        $this->tasa_interes = $tasa_interes;
    }

    public function getSucursalApertura(){
        return $this->sucursal_apertura;
    }

    public function setSucursalApertura($sucursal_apertura){
        $this->sucursal_apertura = $sucursal_apertura;
    }

    public function getFechaApertura(){
        return $this->fecha_apertura;
    }

    public function setFechaApertura($fecha_apertura){
        $this->fecha_apertura = $fecha_apertura;
    }

    public function getTasaInteres(){
        return $this->tasa_interes;
    }

    public function setTasaInteres($tasa_interes){
        $this->tasa_interes = $tasa_interes;
    }
}

// $ahorros= new Ahorros ("bancaria","20-03-2023",200.0,"231132",200.44,2431.00);
// echo $ahorros->getSucursalApertura(),"<br>";


