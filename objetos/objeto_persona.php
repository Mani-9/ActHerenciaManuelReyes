<?php
// Referencia al archivo donde esta la clase
include_once('../clases/Persona.php');
    
//instnacial la clase = crear un objeto
$persona = new Persona();
//Asigne valor al atributo apellido el cual es publico
$persona->apellido=$_GET['txtApellido'];
//mostrando el contenido del atributo apellido el cual es publico
// echo "<br>Apellido: ".$persona->apellido;
$persona->telefono=$_GET['txtTel'];
$persona->direccion=$_GET['txtDireccion'];
// asignado nombre por medio de un método porque el atributo es privado
$persona->asignarNombre($_GET['txtNombre']);
//Mostrar el contenido del atributo nombre, es privado, por eso uso un método
//echo "<br>El nombre es: ". $persona->verNombre();
echo "<br>".$persona->verdatos();
    
?>

