<?php
// Conexión a la base de datos utilizando mysqli
$mysqli = new mysqli("localhost", "root", "", "phpfacil");

// Verificar conexión
if ($mysqli->connect_error) {
    die("Error de conexión: " . $mysqli->connect_error);
}

// Consulta SQL preparada
$stmt = $mysqli->prepare("SELECT codigo, nombre, codigocurso FROM alumnos WHERE mail = ?");
$stmt->bind_param("s", $_REQUEST['mail']);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $reg = $resultado->fetch_assoc();
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Curso: ";
    switch ($reg['codigocurso']) {
        case 1:
            echo "PHP";
            break;
        case 2:
            echo "ASP";
            break;
        case 3:
            echo "JSP";
            break;
    }
} else {
    echo "No existe un alumno con ese mail.";
}

// Cerrar conexión
$mysqli->close();
?>