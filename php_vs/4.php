<?php
//corresponde al ejercicio numero 25
    if($_POST['gender'] == 0) { 
        echo "Hola Sr. "; 
    }
    else { 
    echo "Hola Sra. "; 
    }
    echo "{$_POST['lastname']}, encantado de saludarle.";
?>

