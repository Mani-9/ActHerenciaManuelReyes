<?php
    include_once('Persona.php');
    class Empleado extends Persona{
        public $codigo=0;
        public $nivelAcademico="";
        public $sueldoBase=0;
        private $bonificacion=350;
        private $igss=0;

        public function calcularSueldoLiquido(){
            $this->igss= $this->sueldoBase *4.83/100;
            $sueldoLiquido = $this->sueldoBase + $this->bonificacion - $this->igss;
            return $sueldoLiquido;
        }
        public function verDatos(){
            return "<br>Código de empleado: ". $this->codigo
            .parent::verDatos()
            ."<br>Nivel Academico: ". $this->nivelAcademico
            ."<br> Sueldo Base: ". $this->sueldoBase
            ."<br> Bonificaion: ". $this->bonificacion
            ."<br> IGSS: ". $this->igss;

        }
    }

?>