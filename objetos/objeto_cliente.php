<?php
    //Incluir el archivo Cliente.php para poder utilizar   
    //el código que contienen
    include_once('../clases/Cliente.php');
    //crear un objeto de tipo cliente = instanciar la clases
    $cliente = new Cliente(); 
    $cliente-> nit="112233-4";
    $cliente-> telefono=12345678;
    $cliente-> apellido="Prueba";
    $cliente-> asignarNombre=("Cliente");
    $cliente-> direccion=("zona1");
    echo $cliente->verDatos();
?>