<?php
if (isset($_REQUEST['pos'])) {
        $inicio = $_REQUEST['pos'];
    } else {
        $inicio = 0;
    }
                
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpfacil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Problemas en la conexión: " . $conn->connect_error);
}

$sql = "SELECT alu.codigo as codigo, nombre, mail, codigocurso, nombrecur
        FROM alumnos as alu
        INNER JOIN cursos as cur ON cur.codigo = alu.codigocurso
        LIMIT ?, 2";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $inicio);
$stmt->execute();
$result = $stmt->get_result();

$impresos = 0;
while ($reg = $result->fetch_assoc()) {
    $impresos++;
    echo "Código: " . $reg['codigo'] . "<br>";
    echo "Nombre: " . $reg['nombre'] . "<br>";
    echo "Mail: " . $reg['mail'] . "<br>";
    echo "Curso: " . $reg['nombrecur'] . "<br>";
    echo "<hr>";
}

if ($inicio == 0) {
    echo "anteriores ";
} else {
    $anterior = $inicio - 2;
    echo "<a href=\"case49.php?pos=$anterior\">Anteriores </a>";
}

if ($impresos == 2) {
    $proximo = $inicio + 2;
    echo "<a href=\"case49.php?pos=$proximo\">Siguientes</a>";
} else {
    echo "siguientes";
}

$conn->close();
?>