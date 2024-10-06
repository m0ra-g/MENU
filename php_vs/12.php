<?php
// pertenece ejercicio 37 va con 11.php
// Conectar a la base de datos
$mysqli = new mysqli("localhost", "root", "", "hola");

// Check connection
if ($mysqli->connect_error) {
  die("Error al conectar a la base de datos: " . $mysqli->connect_error);
}

// Procesar el formulario
if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['curso'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $curso = $_POST['curso'];

  // Preparar la consulta
  $sql = "INSERT INTO chao (nombre, correo, codigocurso) VALUES (?, ?, ?)";
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param("sss", $nombre, $correo, $curso);
  $stmt->execute();

  // Verificar si la consulta fue exitosa
  if ($stmt->affected_rows > 0) {
    echo "<p>Alumno registrado con éxito.</p>";
  } else {
    echo "<p>Error al registrar alumno.</p>";
  }
}

// Listado de Alumnos
echo "<h1>Listado de Alumnos</h1>";

// Preparar la consulta
$sql = "SELECT * FROM chao";
$resultado = $mysqli->query($sql);

// Verificar si la consulta fue exitosa
if (!$resultado) {
  die("Error al consultar la base de datos: " . $mysqli->error);
}

// Mostrar los resultados
while ($reg = $resultado->fetch_assoc()) {
  echo "Nombre: " . $reg['nombre'] . "<br>";
  echo "Correo electrónico: " . $reg['correo'] . "<br>";
  echo "Curso: ";
  switch ($reg['codigocurso']) {
    case 1:
      echo "PHP";
      break;
    case 2:
      echo "ASP";
      break;
    case 3:
      echo "JSP";
      break;
  }
  echo "<br><br>";
}

// Cerrar la conexión
$mysqli->close();
?>