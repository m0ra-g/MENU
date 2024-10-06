<?php
// Create a new connection using mysqli
$conexion = new mysqli("localhost", "root", "", "hola");

// Check connection
if ($conexion->connect_error) {
    die("Problemas en la conexion: " . $conexion->connect_error);
}

// Prepare the query
$stmt = $conexion->prepare("UPDATE chao SET correo = ? WHERE correo = ?");

// Bind the parameters
$stmt->bind_param("ss", $_REQUEST["mailnuevo"], $_REQUEST["mailviejo"]);

// Execute the query
$stmt->execute();

echo "El correo electronico fue modificado con exito";

// Close the connection
$conexion->close();
?>