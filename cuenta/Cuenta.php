<?php
class Cuenta {
    private string $num_cuenta;
    private float $saldo_pesos;
    public float $saldo_dolares;

    public function __construct(string $num_cuenta, float $saldo_pesos, float $saldo_dolares){
        $this -> num_cuenta = $num_cuenta;
        $this -> saldo_pesos = $saldo_pesos;
        $this -> saldo_dolares = $saldo_dolares;

    }

    public function getNumCuenta() {
        return $this -> num_cuenta;
    }


    public function getSaldoPesos(){
        return $this -> saldo_pesos;
    }

    public function getSaldoDolares(){
        return $this -> saldo_dolares;
    }

}

$cuenta =  new Cuenta ("12345", 22.000,30000);

// echo "El numero de cuenta es:  " . $Cuenta->getNumCuenta(), "<br>";
// echo "El saldo en pesos es de:  " . $Cuenta->getSaldoPesos(), "<br>";
// echo "El saldo en dolares es de:  " . $Cuenta->getSaldoDolares();
