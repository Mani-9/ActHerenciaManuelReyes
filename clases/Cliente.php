<?php
    include_once('Persona.php');
    class Cliente extends Persona{
        public $nit="";
        public function verDatos(){
            return "<br>NIT: ". $this->nit
                .parent::verDatos();
        }
    }

?>