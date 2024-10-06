<?php
//corresponde al case numero 21, 22 y 23 xd
   echo "<title>Ciclo while</title>";
    if($_POST) { 
    $number = $_POST['number']; 
    $counter = 1; 
    while ($counter <= $number) { 
    echo "Esto es un bucle!<br>\n"; 
    $counter++; 
    } 
    echo "fin del bucle.\n"; 
}
?>