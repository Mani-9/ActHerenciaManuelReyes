<?php
    include_once('Empleado.php');
    class Ventas extends Empleado{
        public $tipoDeContratacion="";
        public $comicionPorVenta=0;

        public function calcularSueldoLiquido(){
            $sueldoLiquido = parent::calcularSueldoLiquido() + $this->comicionPorVenta;
            return $sueldoLiquido;
        }
        public function verDatos(){
           return parent::verDatos()
           ."<br>Tipo Contratacion: ". $this->tipoDeContratacion
           ."<br>Comisión: ". $this->comicionPorVenta; 
        }
    }

?>