<?php

class Roles{
    private $id_rol;
    private $nombre_rol;

//constructo que inicia la clase y sus propiedades
    public function __construct(int $id_rol, string $nombre_rol){
        $this->id_rol=$id_rol;
        $this->nombre_rol=$nombre_rol;

    }

//METODO SET Y GET PARA EL ID DEL ROL
    public function set_id_rol($id_rol){
        $this->id_rol=$id_rol;
    }
    public function get_id_rol(){
        return $this->id_rol;
    }
// METODO SET Y GET PARA EL NOMBRE DEL ROL
    public function set_nombre_rol($nombre_rol){
        $this->nombre_rol=$nombre_rol;
    }
    public function get_nombre_rol(){
        return $this->nombre_rol;
    }

}
//INSTANCIA DE OBJETO DE LA CLASE ROLES
$rol1=new Roles(1,'Administrador');
$rol2=new Roles(2,'Recepcionista');


//ejecucion 

echo "el primero rol se es el: " . $rol1->get_id_rol() . "  ".  "y se llama" . "   ".  $rol1->get_nombre_rol() ; 

echo "<br>";
echo "<br>";

echo "el nombre del rol2 es:  " .  $rol2->get_nombre_rol(), "<br>",

$rol2->set_nombre_rol("Aseo"), "<br>";

echo "el nuevo rol actualizado  es:  " . $rol2->get_nombre_rol();


?>