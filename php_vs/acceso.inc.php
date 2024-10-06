<?php
// Create a new mysqli object
$mysqli = new mysqli("localhost", "root", "", "agenda");

// Check connection
if ($mysqli->connect_error) {
    die("<p>No se ha podido establecer la conexion con MySQL.</p>");
}

// Check database selection
if (!$mysqli->select_db("agenda")) {
    die("<p>No se ha podido establecer la conexion con la base de datos.</p>");
}
?>