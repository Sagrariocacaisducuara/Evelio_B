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
    private static $contador = 0; // Contador estático

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
    private $proveedor; // Relación con Proveedor

    public function __construct($nombre, $precio, $proveedor) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->proveedor = $proveedor;
    }

    // getters y setters 
}

//  uso:
$ficha1 = new Ficha();
$ficha1->setCodigoFicha("2560664B");


$ficha2 = new Ficha();
$ficha2->setCodigoFicha("2560664A");


$aprendiz1 = new Aprendiz();
$aprendiz1->setIdAprendiz("12");
$aprendiz1->setNombres("Ruben");
$aprendiz1->setApellidos("Lozano");
$aprendiz1->setCorreo("rlozanotique@gmail.com");

$aprendiz2 = new Aprendiz();
$aprendiz2->setIdAprendiz("2");
$aprendiz2->setNombres("Jimena");
$aprendiz2->setApellidos("Gutierrez");
$aprendiz2->setCorreo("jimena.gutierrezz@soy.sena.edu.co");

$ficha1->addAprendiz($aprendiz1);
$ficha1->addAprendiz($aprendiz2);

$programa1 = new Programa();
$programa1->setCodigoPrograma("218120");
$programa1->setNombrePrograma("ADSO");


//+++++++parte cliente pedido++++++++++

$cliente1 = new Cliente(1, "Pablo", "Pablo@Hotmail.com");
$pedido1 = new Pedido(1, $cliente1);

Cliente::ContadorPedidos();



//++++++proveedor++++++
$proveedor1 = new Proveedor("juridico", "lucas", "bogota", "lucas@gmail.com", "123456789", "call 32 #4");
$producto1 = new Producto("computadores", 100.99, $proveedor1);

//++++++++ejecucion+++++++++

echo "<b>"."Ficha: ". "</b>" . $ficha2->getCodigoFicha() . "</br>";
echo "<b>". "Programa: ". "</b>" . $programa1->getNombrePrograma() . "</br>";
echo "<b>". "Aprendices en la ficha: ". "</b>" . count($ficha2->getAprendices()) . "</br>";
echo "<b>". "Número de fichas creadas: ". "</b>" . Ficha::getContador() . "</br>";
echo "<b>". "Número de pedidos del cliente: ". "</b>" . Cliente::obtenerContadorPedidos() . "</br>";