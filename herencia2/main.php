<?php
require ('Empleado.php');

$empleado = new Empleado('Administrador',400, 'Ana', 'Ramirez', 'F');

echo "el cargo es: " . $empleado->getCargo(), "<br>";
echo "es empleado de : " . $empleado->getNombre(), "<br>";
echo "el salario es de   :" . $empleado->getSalario();
?>