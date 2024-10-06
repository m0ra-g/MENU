<!DOCTYPE html>
<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php 
    $entero = 255;
    $letra = 65;
    $real = 10.776;

    // Mostrar el valor entero en diferentes formatos
    echo " VARIABLES CON FUNCIONES PRINTF","<br>";

    printf("Valor entero en formato decimal: %d <br>", $entero);
    printf("Valor entero en formato hexadecimal (minúsculas): %x<br>", $entero);
    printf("Valor entero en formato hexadecimal (mayúsculas): %X<br>", $entero);
    printf("Valor entero en formato binario: %b<br>", $entero);
    printf("Valor entero en formato octal: %o<br>", $entero);

    // Mostrar el valor entero como carácter ASCII
    printf("Valor entero como carácter ASCII: %c<br>", $letra);

    echo "<br>";

    // Mostrar el valor de tipo double en diferentes formatos
    printf("Impresión de un valor de tipo double: %f <br>", $real);
    printf("Impresión de un valor de tipo double con 2 decimales: %.2f <br>", $real);
    ?> 
    <br> 
    <a href="pagina68.php">Algunas utilidades de estas conversiones</a> 
</body>
</html>
