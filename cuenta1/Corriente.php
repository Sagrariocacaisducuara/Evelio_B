<?php
require("Cuenta.php");

class Corriente extends Cuenta {
    private $numero_chequera;
    public $fecha_emision;

    public function __construct(string $numero_chequera, string $fecha_emision, string $num_cuenta, float $saldo_pesos, float $saldo_dolares){
        parent::__construct($num_cuenta, $saldo_pesos, $saldo_dolares);
        $this->numero_chequera = $numero_chequera;
        $this->fecha_emision = $fecha_emision;
    }

    public function getNumeroChequera() {
        return $this->numero_chequera;
    }

    public function setNumeroChequera($numero_chequera) {
        $this->numero_chequera = $numero_chequera;
    }

    public function getFechaEmision() {
        return $this->fecha_emision;
    }

    public function setFechaEmision($fecha_emision) {
        $this->fecha_emision = $fecha_emision;
    }
}
$corriente2 = new Corriente("43545", "456334", "12345", 22.000, 30000);
echo "el numero de la chequera es: " . $corriente2->getNumeroChequera(), "<br>";
