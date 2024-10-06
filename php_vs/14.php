
<?php
//peetenece a ejercicio 37
// Create a new connection using mysqli
$conexion = new mysqli("localhost", "root", "", "hola");

// Check connection
if ($conexion->connect_error) {
    die("Problemas en la conexion: " . $conexion->connect_error);
}

// Prepare the query
$stmt = $conexion->prepare("INSERT INTO chao (nombre, correo, codigocurso) VALUES (?, ?, ?)");

// Bind the parameters
$stmt->bind_param("sss", $_REQUEST["nombre"], $_REQUEST["correo"], $_REQUEST["codigocurso"]);

// Execute the query
$stmt->execute();

// Close the connection
$conexion->close();

echo "El alumno fue resgistrado.";
?>