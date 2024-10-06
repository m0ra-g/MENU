<html>
<head>
<title>correo</title>
</head>
<body>
<?php
$conexion = new mysqli("localhost", "root", "", "phpfacil");

if ($conexion->connect_error) {
    die("Problemas en la conexión: " . $conexion->connect_error);
}

$mailviejo = $conexion->real_escape_string($_REQUEST['mailviejo']);
$nombre = $conexion->real_escape_string($_REQUEST['nombre']);
$mail = $conexion->real_escape_string($_REQUEST['mail']);
$codigocurso = $conexion->real_escape_string($_REQUEST['codigocurso']);

$conexion->query("UPDATE alumnos SET nombre='$nombre', mail='$mail', codigocurso='$codigocurso' WHERE mail='$mailviejo'");

if ($conexion->affected_rows > 0) {
    echo "El curso fue modificado con éxito.";
} else {
    echo "No se pudo modificar el curso.";
}

$conexion->close();
?>
</body>
</html>

