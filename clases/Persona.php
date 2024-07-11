<?php
    class Persona{
    // atributos
    private $nombre="";
    public $apellido="";
    public $telefono="";
    public $direccion=""; 
    
    // setter & getter son métodos de acceso
    //metodo para asignar = método set
    public function asignarNombre($valor){
        $this->nombre=$valor;
    }
    //metodo para obtener get
    public function verNombre(){
        return $this->nombre;
    }
    public function nombreCompleto(){
        return "Nombre completo: " .$this->nombre. " ". $this->apellido;
    }
    public function verDatos(){
        return "<br>Nombre completo: ".
        "<br>".$this->nombre. " ". $this->apellido.
        "<br>Telefono: ".
        "<br>" .$this->telefono. " " .
        "<br>Direccion: ".
        "<br>". $this->direccion;
    }

}   

?>