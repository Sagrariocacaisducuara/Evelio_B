<?php

class Aprendiz {
    private $idAprendiz;
    private $nombres;
    private $apellidos;
    private $correo;

    public function getIdAprendiz() {
        return $this->idAprendiz;
    }

    public function setIdAprendiz($idAprendiz) {
        $this->idAprendiz = $idAprendiz;
    }

    public function getNombres() {
        return $this->nombres;
    }

    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
}

class Ficha {
    private $codigoFicha;
    private $aprendices = array();
    private static $contador = 0; 

    public function __construct() {
        self::$contador++;
    }

    public static function getContador() {
        return self::$contador;
    }

    public function getCodigoFicha() {
        return $this->codigoFicha;
    }

    public function setCodigoFicha($codigoFicha) {
        $this->codigoFicha = $codigoFicha;
    }

    public function getAprendices() {
        return $this->aprendices;
    }

    public function addAprendiz($aprendiz) {
        $this->aprendices[] = $aprendiz;
    }
}

class Programa {
    private $codigoPrograma;
    private $nombrePrograma;

    public function getCodigoPrograma() {
        return $this->codigoPrograma;
    }

    public function setCodigoPrograma($codigoPrograma) {
        $this->codigoPrograma = $codigoPrograma;
    }

    public function getNombrePrograma() {
        return $this->nombrePrograma;
    }

    public function setNombrePrograma($nombrePrograma) {
        $this->nombrePrograma = $nombrePrograma;
    }
}

class Cliente {
    private $idCliente;
    private $nombre;
    private $correo;
    private static $contadorPedidos = 0;

    public function __construct($idCliente, $nombre, $correo) {
        $this->idCliente = $idCliente;
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public static function ContadorPedidos() {
        self::$contadorPedidos++;
    }
    public static function obtenerContadorPedidos() {
        return self::$contadorPedidos;
    }

    //  getters y setters
}

class Pedido {
    private $idPedido;
    private $cliente;

    public function __construct($idPedido, $cliente) {
        $this->idPedido = $idPedido;
        $this->cliente = $cliente;
    }

    //  getters y setters 
}

class Proveedor {
    private $tipoProveedor;
    private $nombre;
    private $ciudad;
    private $correo;
    private $telefono;
    private $direccion;

    public function __construct($tipoProveedor, $nombre, $ciudad, $correo, $telefono, $direccion) {
        $this->tipoProveedor = $tipoProveedor;
        $this->nombre = $nombre;
        $this->ciudad = $ciudad;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    //  getters y setters
}

class Producto {
    private $nombre;
    private $precio;
    private $proveedor;

    public function __construct($nombre, $precio, $proveedor) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->proveedor = $proveedor;
    }

    // getters y setters 
}
$ficha2 = new Ficha();
$ficha2->setCodigoFicha("2560664C");  

$programa2 = new Programa();
$programa2->setCodigoPrograma("12345");
$programa2->setNombrePrograma("ProgramaXYZ");


$aprendiz3 = new Aprendiz();
$aprendiz3->setIdAprendiz("3");
$aprendiz3->setNombres("Laura");
$aprendiz3->setApellidos("Gonzalez");
$aprendiz3->setCorreo("laura@gmail.com");

$ficha2->addAprendiz($aprendiz3);


$cliente2 = new Cliente(2, "Ana", "ana@yahoo.com");
$pedido2 = new Pedido(2, $cliente2);

$proveedor2 = new Proveedor("tecnológico", "Javier", "Medellín", "javier@example.com", "987654321", "Carrera 7 #34");
$producto2 = new Producto("smartphone", 249.99, $proveedor2);


echo "<b>"."Ficha 2: ". "</b>" . $ficha2->getCodigoFicha() . "</br>";
echo "<b>". "Programa 2: ". "</b>" . $programa2->getNombrePrograma() . "</br>";
echo "<b>". "Aprendices en la ficha 2: ". "</b>" . count($ficha2->getAprendices()) . "</br>";
echo "<b>". "Número de fichas creadas: ". "</b>" . Ficha::getContador() . "</br>";
echo "<b>". "Número de pedidos del cliente 2: ". "</b>" . Cliente::obtenerContadorPedidos() . "</br>";