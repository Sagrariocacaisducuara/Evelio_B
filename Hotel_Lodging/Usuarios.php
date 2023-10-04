<?php


class Usuarios{
    private $nro_doc;
    private $nombre_usuario;
    private $contrasena;
    private $id_rol;

//constructo que inicia la clase y sus propiedades
    public function __construct(string $nro_doc, string $nombre_usuario, string $contrasena, int $id_rol){
        $this->nro_doc=$nro_doc;
        $this->nombre_usuario=$nombre_usuario;
        $this->contrasena=$contrasena;
        $this->id_rol=$id_rol;
    }

//METODO SET Y GET PARA NUMERO DE COUMENTO DEL USUSARIO
    public function set_nro_doc($nro_doc){
        $this->nro_doc=$nro_doc;
    }
    public function get_nro_doc(){
        return $this->nro_doc;
    }

//METODO SET Y GET PARA EL NOMBRE DEL USUARIO
    public function set_nombre_usuario($nombre_usuario){
        $this->nombre_usuario=$nombre_usuario;
    }
    public function get_nombre_usuario(){
        return $this->nombre_usuario;
    }

//METODO SET Y GET PARA LA CONTRASEÑA DEL USUARIO

    public function set_contrasena($contrasena){
        $this->contrasena=$contrasena;
    }
    public function get_contrasena(){
        return $this->contrasena;
    }

// METODO SET Y GET PARA EL ID DEL ROL

    public function set_id_rol($id_rol){
        $this->id_rol=$id_rol;
    }
    public function get_id_rol(){
        return $this->id_rol;
    }



}

//INSTANCIA DE OBJETO DE LA CLASE ROLES
$usuario=new Usuarios("234556",'camilo','96jm',1);
$usuario2=new Usuarios("1234567",'juan','oip',3);

//ejecucion 

echo "el primer usuario se llama: " . $usuario->get_nombre_usuario() . "  ".  "y su rol o id es" . "   ".  $usuario->get_id_rol() ; 

echo "<br>";
echo "<br>";

echo "el nombre del usuario2  es:  " .  $usuario2->get_nombre_usuario(), "<br>",

$usuario2->set_nombre_usuario("carlos"), "<br>";

echo "el nuevo nombre del usuario2 actualizado  es:  " . $usuario2->get_nombre_usuario();

?>