<?php
session_start(); //Siempre al inicio del programa 
//Suponer que el usuario se auentico 

$_SESSION['usuario']="Darwin"; 
$_SESSION['rol']="Estudiante"; 
echo "Sesión iniciada"; 
echo "<a href= 'bienvenida.php'> Ir a la pagina de bienvenida </a>"; 

?>