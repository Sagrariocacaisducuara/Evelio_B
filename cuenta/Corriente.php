<?php
require ("Cuenta.php");
class Corriente extends Cuenta{
    private $numero_chequera;
    public $fecha_emision;

    public function __construct(string $numero_chequera,string $fecha_emision,$num_cuenta,$saldo_pesos,$saldo_dolares){
        parent:: __construct($num_cuenta,$saldo_pesos,$saldo_dolares);
        $this->numero_chequera = $numero_chequera;
        $this->fecha_emision = $fecha_emision;
    }

    public function getNumeroChequera() {
        return $this-> numero_chequera;
    }
    public function setNumeroChequera() {
        $this->numero_chequera = $numero_chequera;
    }
    public function getFechaEmision() {
        return $this-> fecha_emision;
    }
    public function setFechaEmision() {
        $this ->fecha_emision = $fecha_emision;
    }

}

$corriente2 = new Corriente ("43545","456334");
echo $corriente2->getNumeroChequera();