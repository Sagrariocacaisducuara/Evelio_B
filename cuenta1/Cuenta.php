<?php
class Cuenta {
    private string $num_Cuenta;
    private float $saldo_pesos;
    public float $saldo_dolares;

    public function __construct(string $num_Cuenta, float $saldo_pesos, float $saldo_dolares){
        $this -> num_Cuenta = $num_Cuenta;
        $this -> saldo_pesos = $saldo_pesos;
        $this -> saldo_dolares = $saldo_dolares;

    }

    public function getNumCuenta() {
        return $this -> num_Cuenta;
    }


    public function getSaldoPesos(){
        return $this -> saldo_pesos;
    }

    public function getSaldoDolares(){
        return $this -> saldo_dolares;
    }

}
$miCuenta = new Cuenta("12345", 22.000, 30000);

echo "El numero de cuenta es:  " . $miCuenta->getNumCuenta() . "<br>";
echo "El saldo en pesos es de:  " . $miCuenta->getSaldoPesos() . "<br>";
echo "El saldo en dolares es de:  " . $miCuenta->getSaldoDolares() . "<br>";

