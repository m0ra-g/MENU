<?php
// Create a new connection using mysqli
$conexion = new mysqli("localhost", "root", "", "hola");

// Check connection
if ($conexion->connect_error) {
    die("Problemas en la conexion: " . $conexion->connect_error);
}

// Prepare the query
$stmt = $conexion->prepare("SELECT * FROM chao WHERE correo = ?");

// Bind the parameter
$stmt->bind_param("s", $_REQUEST["correo"]);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $reg = $result->fetch_assoc();
    ?>
      <form action="16.php" method="post"> 
      Ingrese nuevo correo electronico: 
      <input type="text" name="mailnuevo" value="<?php echo $reg['correo'] ?>"> 
      <br> 
      <input type="hidden" name="mailviejo" value="<?php echo $reg['correo'] ?>"> 
      <input type="submit" value="Modificar"> 
      </form> 
    <?php
} else {
    echo "No existe alumno con dicho correo electronico";
}

// Close the connection
$conexion->close();
?>


    