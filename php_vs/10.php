<html>
<head>
  <title>Introducir datos</title>
</head>
<body>
  <h1>Introducir datos</h1>
  <form action="10.php" method="post">
    <table>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre"></td>
      </tr>
      <tr>
        <td>Apellido:</td>
        <td><input type="text" name="apellido"></td>
      </tr>
      <tr>
        <td>Nacionalidad:</td>
        <td><input type="text" name="nacionalidad"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Introducir datos"></td>
      </tr>
    </table>
  </form>
</body>
</html>

<?php
//pertenece a ejercicio 36
// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "", "mi_bd");

// Check connection
if ($mysqli->connect_error) {
  die("Error al conectar a la base de datos: " . $mysqli->connect_error);
}

// Procesar el formulario
if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['nacionalidad'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $nacionalidad = $_POST['nacionalidad'];

  // Preparar la consulta
  $sql = "INSERT INTO personas (nombre, apellido, nacionalidad) VALUES (?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sss", $nombre, $apellido, $nacionalidad);
  $stmt->execute();

  // Verificar si la consulta fue exitosa
  if ($stmt->affected_rows > 0) {
    echo "<p>Datos introducidos con éxito.</p>";
  } else {
    echo "<p>Error al introducir datos.</p>";
  }
}

// Cerrar la conexión
$mysqli->close();
?>