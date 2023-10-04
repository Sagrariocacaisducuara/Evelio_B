<?php
require ('Ahorros.php');
require ('Corriente.php');

$corriente2 = new Corriente("65745","4-36-34");

echo $corriente2->getNumeroChequera();
// echo "el cargo es: " . $ahorro->getSucursalApertura(), "<br>";
?>