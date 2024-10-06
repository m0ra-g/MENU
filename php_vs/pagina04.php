<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpfacil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Problemas en la conexion: " . $conn->connect_error);
}

$mail = $_REQUEST['mail'];

// Prepare and bind
$stmt = $conn->prepare("SELECT codigo FROM alumnos WHERE mail = ?");
$stmt->bind_param("s", $mail);

// Execute
$stmt->execute();

// Store result
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Prepare and bind
    $stmt = $conn->prepare("DELETE FROM alumnos WHERE mail = ?");
    $stmt->bind_param("s", $mail);

    // Execute
    $stmt->execute();

    echo "Se efectuó el borrado del alumno con dicho mail.";
} else {
    echo "No existe un alumno con ese mail.";
}

// Close connection
$conn->close();
?>