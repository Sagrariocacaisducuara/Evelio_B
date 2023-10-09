<?php

// require('Corriente.php');
// $corriente2 = new Corriente("65745", "4-36-34", "12345", 22.000, 30000);


require('Ahorros.php'); 
$ahorros = new Ahorros("bancaria", "20-03-2023", 200.0, "231132", 200.44, 2431.00);

echo "La sucursal es: " . $ahorros->getSucursalApertura() . "<br>";


?>