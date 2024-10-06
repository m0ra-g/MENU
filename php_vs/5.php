<?php
     if (isset($_POST['gender']) && isset($_POST['lastname']) && $_POST['lastname'] != "") { 
        if($_POST['gender'] == 0) { 
           echo "Hola Sr. "; 
        } else { 
           echo "Hola Sra. "; 
        } 
        echo "<b>{$_POST['lastname']}</b>, encantado de saludarte.\n"; 
    } else { 
        if (isset($_POST['submitbutton'])) { 
            echo "Por favor rellena todos los campos" ; 
        } 
    } 
?>