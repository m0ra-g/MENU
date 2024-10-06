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

$mail = $conexion->real_escape_string($_REQUEST['mail']);
$registros = $conexion->query("SELECT * FROM alumnos WHERE mail='$mail'");

if ($regalu = $registros->fetch_assoc()) {
?>
<form action="20.php" method="post">
<input type="hidden" name="mailviejo" value="<?php echo $regalu['mail']; ?>">
Nombre: <input type="text" name="nombre" value="<?php echo $regalu['nombre']; ?>"><br>
Mail: <input type="text" name="mail" value="<?php echo $regalu['mail']; ?>"><br>
Curso: <select name="codigocurso">
<?php
$cursos = $conexion->query("SELECT codigo, nombrecur FROM cursos");
while ($curso = $cursos->fetch_assoc()) {
    echo "<option value='{$curso['codigo']}'>{$curso['nombrecur']}</option>";
}
?>
</select><br>
<input type="submit" value="Modificar">
</form>
<?php
} else {
    echo "No existe un alumno con ese correo.";
}
$conexion->close();
?>
</body>
</html>

 

