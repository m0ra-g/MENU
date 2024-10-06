<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion = new mysqli("localhost", "root", "", "hola");

if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$mailviejo = $conexion->real_escape_string($_REQUEST['correoviejo']);
$nombre = $conexion->real_escape_string($_REQUEST['nombre']);
$mail = $conexion->real_escape_string($_REQUEST['correo']);
$codigocurso = $conexion->real_escape_string($_REQUEST['codigocurso']);

$conexion->query("UPDATE chao SET nombre='$nombre', correo='$mail', codigocurso='$codigocurso' WHERE correo='$mailviejo'");

if ($conexion->affected_rows > 0) {
    echo "El curso fue modificado con éxito.";
} else {
    echo "No se pudo modificar el curso.";
}

$conexion->close();
?>
</body>
</html>
