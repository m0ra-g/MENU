<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root", "", "phpfacil");
    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }
    $fechanacimiento = $_POST['anio'] . "-" . $_POST['mes'] . "-" . $_POST['dia'];
    $stmt = $conexion->prepare("INSERT INTO alumnos (nombre, mail, codigocurso, fechanac) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $_POST['nombre'], $_POST['mail'], $_POST['codigocurso'], $fechanacimiento);
    if ($stmt->execute()) {
        echo "El alumno fue dado de alta.";
    } else {
        die("Problemas en el select: " . $stmt->error);
    }
    $stmt->close();
    $conexion->close();
    ?>
    <br>
    <a href="30.php">ver listado de alumnos</a>
</body>
</html>


