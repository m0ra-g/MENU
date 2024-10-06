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
    $registros = $conexion->query("SELECT alu.codigo AS codigo, nombre, mail, codigocurso, fechanac, nombrecur FROM alumnos AS alu INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso");
    if (!$registros) {
        die("Problemas en el select: " . $conexion->error);
    }
    while ($reg = $registros->fetch_assoc()) {
        echo "Codigo: " . $reg['codigo'] . "<br>";
        echo "Nombre: " . $reg['nombre'] . "<br>";
        echo "Mail: " . $reg['mail'] . "<br>";
        echo "Fecha de Nacimiento: " . $reg['fechanac'] . "<br>";
        echo "Curso: " . $reg['nombrecur'] . "<br>";
        echo "<hr>";
    }
    $conexion->close();
    ?>
</body>
</html>