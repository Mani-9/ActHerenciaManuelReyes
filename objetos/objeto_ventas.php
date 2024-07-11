<?php
include_once('../clases/Ventas.php');

$ventas = new Ventas();
$ventas-> tipoDeContratacion="Empleado Permanente";
$ventas-> comicionPorVenta=1000;  
$ventas-> nit="112233-4";
$ventas-> telefono=12345678;
$ventas-> asignarNombre("Manuel");
$ventas-> apellido="Prueba";
$ventas-> direccion=("zona 1");

$ventas-> codigo=1;
$ventas-> nivelAcademico="Desarrollador de software";
$ventas-> sueldoBase=3500;

echo $ventas->calcularSueldoLiquido();
echo $ventas->verDatos();
?>