<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema</title>
</head>
<body>
<form action="18.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre"><br>
    Ingrese mail:
    <input type="text" name="correo"><br>
    Seleccione el curso:
    <select name="codigocurso">
    <?php
    $conexion = new mysqli("localhost", "root", "", "hola");

    if ($conexion->connect_error) {
        die("Problemas en la conexión: " . $conexion->connect_error);
    }

    $sql = "SELECT id, nombrecur FROM cursos";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        while ($reg = $resultado->fetch_assoc()) {
            echo "<option value=\"{$reg['id']}\">{$reg['nombrecur']}</option>";
        }
    } else {
        echo "<option>No hay cursos disponibles</option>";
    }

    $conexion->close();
    ?>
    </select>
    <br>
    <input type="submit" value="Registrar">
</form>
</body>
</html>