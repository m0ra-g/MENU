<?php
// Inicia la sesión
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
    // Recupera y muestra las variables de sesión almacenadas
    echo "Nombre de usuario recuperado de la variable de sesión: " . $_SESSION['usuario'];
    echo "<br><br>";
    echo "La clave recuperada de la variable de sesión: " . $_SESSION['clave'];
    ?>
    <br><br>

    <a href="ejercicio60.php">Volver a la página de inicio para ingresar otro usuario</a>
</body>
</html>
