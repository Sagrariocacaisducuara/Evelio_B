<?php
require('Persona.php');

class Empleado extends Persona{
    private string $Cargo;
    private float $Salario;


    public function __construct(string $Cargo, float $Salario, $Nombre, $Apellido,$Genero){

        //LLAMAR A CONSTRUCTOR DE LA SUPERCLASE DE PERSONA
        parent::__construct($Nombre,$Apellido,$Genero);


        $this->Cargo=$Cargo;
        $this->Salario=$Salario;
    }


//metodo para las clases de empleado
    public function getCargo() {
        return $this->Cargo;
    }

    public function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }


    public function getSalario() {
        return $this->Salario;
    }

    public function setSalario($Salario) {
        $this->Salario = $Salario;
    }



}

$empleado=new Empleado  ("Admin",50.00, "Juan", "Perez", "M");

echo $empleado->getSalario(), "<br>";

echo "el Nombre es: " . $empleado->getNombre(), "<br>"; 


?>