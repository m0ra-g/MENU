<?php
// Create a new connection using mysqli
$conexion = new mysqli("localhost", "root", "", "hola");

// Check connection
if ($conexion->connect_error) {
    die("Problemas en la conexion: " . $conexion->connect_error);
}

// Prepare the query
$stmt = $conexion->prepare("SELECT id, nombre, codigocurso FROM chao WHERE correo = ?");

// Bind the parameter
$stmt->bind_param("s", $_REQUEST["correo"]);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $reg = $result->fetch_assoc();
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
    echo "No existe un alumno con ese correo.";
}

// Close the connection
$conexion->close();
?>

