<?php 
class persona {
    private string $Nombre;
    private string $Apellido;
    private string $Genero;

    public function __construct($Nombre,$Apellido,$Genero) {
        $this->Nombre = $Nombre;
        $this->Apellido = $Apellido;
        $this->Genero = $Genero;
    }

    public function saludo() {
        echo "Bienvenido a la funcion saludo de la clase {$this ->Nombre}";
    }

    public function getNombre() {
        return $this->Nombre;
    }
    public function setNombre() {
        $this->Nombre = $Nombre;
    }
    public function getApellido() {
        return $this->Apellido;
    }
    public function setApellido() {
        $this->Apellido = $Apellido;
    }

    public function getGenero(){
        return $this->Genero;
    }
    public function setGenero(){
        $this->Genero = $Genero;
    }

}

$Persona = new persona('Maria','Martinez','F');
//$Persona ->saludo();

?>

