<?php 
declare(strict_types=1);

class Cliente{
    private int $id_cliente;
    private string $nombre;
    private string $apellido;
    private string $correo;
    private int $telefono;

    public function __construct(int $id_cliente, string $nombre, string $apellido, string $correo, int $telefono){
        $this->id_cliente=$id_cliente;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->correo=$correo;
        $this->telefono=$telefono;    
    }

    public function set_id_cliente($id_cliente){
        $this->id_cliente=$id_cliente;
    }
    public function get_id_cliente(){
        return $this->id_cliente;
    }

    public function set_nombre($nombre){
        $this->nombre=$nombre;
    }
    public function get_nombre(){
        return $this->nombre;
    }

    public function set_apellido($apellido){
        $this->apellido=$apellido;
    }
    public function get_apellido(){
        return $this->apellido;
    }

    public function set_correo($correo){
        $this->correo=$correo;
    }
    public function get_correo(){
        return $this->correo;
    }

    public function set_telefono($telefono){
        $this->telefono=$telefono;
    }
    public function get_telefono(){
        return $this->telefono;
    }
}
$cliente=new Cliente(1,'Juan','Lopez','oo@gmail.com',3021201251);
echo 'El id del cliente:',$cliente->get_id_cliente(),'<br>';
echo 'El nombre del cliente:',$cliente->get_nombre(),'<br>';
echo 'El apellido del cliente:',$cliente->get_apellido(),'<br>';
echo 'El correo del cliente:',$cliente->get_correo(),'<br>';
echo 'El telefono del cliente:',$cliente->get_telefono(),'<br>';
echo $cliente->set_telefono(3000200202);
echo 'El nuevo numero de telefono del cliente: ',$cliente->get_id_cliente(),' es','<br>',$cliente->get_telefono();

?>