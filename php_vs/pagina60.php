<?php
// inicia la sesión
session_start();

// guarda los valores ingresados
$_SESSION['usuario'] = $_REQUEST['campousuario'];
$_SESSION['clave'] = $_REQUEST['campoclave'];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    Se almacenaron dos variables de sesión.<br><br>
   
    <a href="pagina60.1.php">Ir a la tercera página donde se recuperarán las variables de sesión</a>
</body>
</html>