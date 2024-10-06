<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <form action="29.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre"><br>
        Ingrese mail:
        <input type="text" name="mail"><br>
        Ingrese la fecha de nacimiento (dd/mm/aaaa):
        <input type="text" name="dia" size="2">
        <input type="text" name="mes" size="2">
        <input type="text" name="anio" size="4"><br>
        Seleccione el curso:
        <select name="codigocurso">
            <?php
            $conexion = new mysqli("localhost", "root", "", "phpfacil");
            if ($conexion->connect_error) {
                die("Problemas en la conexión: " . $conexion->connect_error);
            }
            $registros = $conexion->query("SELECT codigo, nombrecur FROM cursos");
            if (!$registros) {
                die("Problemas en el select: " . $conexion->error);
            }
            while ($reg = $registros->fetch_assoc()) {
                echo "<option value=\"{$reg['codigo']}\">{$reg['nombrecur']}</option>";
            }
            $conexion->close();
            ?>
        </select><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>

