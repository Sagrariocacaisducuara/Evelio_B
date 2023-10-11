
<!-- Función anónima simple: -->
<?php

$funcion = function($x, $y) {
    return $x + $y;
};
echo $funcion(2, 3); // Imprimirá 5


// Función anónima como argumento de otra función:

$cuadrado = function($n) {
    return $n * $n;
};

$lista = [1, 2, 3, 4, 5];
$cuadrados = array_map($cuadrado, $lista);
print_r($cuadrados); // Imprime el array de cuadrados.




// Función anónima con variables externas:

$factor = 10;
$multiplicar = function($n) use ($factor) {
    return $n * $factor;
};
echo $multiplicar(5); // Imprimirá 50


// Función anónima como clausura:

function operacion($operador) {
    return function($x, $y) use ($operador) {
        if ($operador == '+') {
            return $x + $y;
        } elseif ($operador == '-') {
            return $x - $y;
        }
    };
}

$suma = operacion('+');
echo $suma(3, 2); // Imprimirá 5



// Función anónima en un arreglo:

$operaciones = [
    function($x, $y) {
        return $x + $y;
    },
    function($x, $y) {
        return $x - $y;
    }
];

echo $operaciones[0](4, 2); // Imprimirá 6


// Arreglos asociativos en PHP:


// Arreglo asociativo con nombres y edades:

$personas = [
    "Juan" => 25,
    "María" => 30,
    "Pedro" => 22
];




// Arreglo asociativo de un producto
$producto = [
    "nombre" => "Smartphone",
    "precio" => 499.99,
    "marca" => "Samsung"
];




// Arreglo asociativo de colores:

$colores = [
    "rojo" => "#FF0000",
    "verde" => "#00FF00",
    "azul" => "#0000FF"
];




// Arreglo asociativo de información de un libro:

$libro = [
    "título" => "El Gran Gatsby",
    "autor" => "F. Scott Fitzgerald",
    "año" => 1925
];





// Arreglo asociativo de información de una receta

$receta = [
    "nombre" => "Sopa de tomate",
    "ingredientes" => ["tomates", "cebolla", "ajo"],
    "tiempo" => "30 minutos"
];







