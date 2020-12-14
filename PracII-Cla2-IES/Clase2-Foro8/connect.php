<?php

$host = 'localhost';
$user= 'root';
$pass = '';
$db = 'ies_practica';

$mysqli = new mysqli ($host, $user , $pass , $db );

if ($mysqli->connect_error ) {
    die ( 'Error de Conexión (' . $mysqli->connect_errno . ')'.$mysqli->connect_error );
}

$nombre=$_POST['nombre'];
$estadoid=$_POST['estadoid'];
$fechaactualizacion=$_POST['fechaactualizacion'];

$sql = "INSERT INTO 'foro8' ('nombre', 'estadoid', 'fechaactualizacion') VALUES ('$nombre', '$estadoid', '$fechaactualizacion')";

$mysqli->query($sql);

echo "Nombre: ",$_POST['nombre'];
echo "Estado: ",$_POST['estadoid'];
echo "Fecha de actualizacion: ",$_POST['fechaactualizacion'];
?>