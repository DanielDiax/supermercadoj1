<?php 


include('Sopa.php');
//Crear un objeto de la clase los objetos son variables
$ajiaco = new Sopa();

//acceder a un atributo

$ajiaco->cantidadAgua="2 litros";
echo($ajiaco->cantidadAgua);

//acceder a metodos
$ajiaco->disfrutarSopa();


?>