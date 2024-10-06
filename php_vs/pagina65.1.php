<html> 
<head> 
<title>Problema</title> 
</head> 
<body> 
<?php 
$dato=date("L"); 
if ($dato==1) 
  echo "Es un Año bisiesto"; 
else {
  echo "Es un Año no bisiesto";
 }
echo "<br>"; 


echo "Día de la semana:"; 
$dato=date("w"); 
switch ($dato) { 
  case 0: echo "Domingo"; 
          break; 
  case 1: echo "Lunes"; 
          break; 
  case 2: echo "Martes"; 
          break; 
  case 3: echo "Miércoles"; 
          break; 
  case 4: echo "Jueves"; 
          break; 
  case 5: echo "Viernes"; 
          break; 
  case 6: echo "Sábado"; 
          break; 
} 
?> 
<br><br>
<a href="ejercicio65.php">Volver al inicio</a>
</body> 
</html> 