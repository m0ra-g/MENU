<?php 
session_start(); //ingresar los datos del código verificador
?> 
<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero']) 
echo "Ingresó los valores correctos"; 
else 
echo "Ingresó los valores incorrectos"; 
?> 
<br><br>
    <a href="case58.php">Volver a la página de inicio</a>
</body> 
</html> 