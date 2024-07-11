<?php
    //Incluir el archivo Cliente.php para poder utilizar   
    //el código que contienen
    include_once('../clases/Empleado.php');

    $empleado = new Empleado(); 
    $empleado-> nit="112233-4";
    $empleado-> telefono=12345678;
    $empleado-> asignarNombre("Manuel");
    $empleado-> apellido="Prueba";
    $empleado-> direccion=("zona 1");

    $empleado-> codigo=1;
    $empleado-> nivelAcademico="Desarrollador de software";
    $empleado-> sueldoBase=3500;
    
    echo $empleado->calcularSueldoLiquido();
    echo $empleado->verDatos();
?>