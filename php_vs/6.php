<?php 
//corresponde al ejercicio 32s
 if (isset($_POST['pass'])) {
    $pass=$_POST['pass']; 
    if($pass == "quieropuntos"){
  $login = true; 
        }
    } 
 if ($login) { 
    echo "<p>Aqui empieza el arma secreta.</p>"; 
    } 
?> 
