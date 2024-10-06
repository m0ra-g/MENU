<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema</title>
</head>
<body>
<?php
$conexion = new mysqli("localhost", "root", "", "hola");

if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$nombre = $conexion->real_escape_string($_POST['nombre']);
$mail = $conexion->real_escape_string($_POST['correo']);
$codigocurso = (int)$_POST['codigocurso'];

$sql = "INSERT INTO chao (nombre, correo, codigocurso) VALUES ('$nombre', '$mail', $codigocurso)";

if ($conexion->query($sql) === TRUE) {
    echo "El alumno fue registrado!.";
} else {
    echo "Problemas en el registro: " . $conexion->error;
}

$conexion->close();
?>
</body>
</html>

