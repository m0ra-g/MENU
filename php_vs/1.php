
<?php
    $ejercicio=$_POST['txtNum'];
    switch ($ejercicio){
        case 1:
           phpinfo();
            break;

        case 2: 
            echo "hola mundo!";
            break;

        case 3:
            echo "<title>Hola Mundo</title>"; 
            echo "<h1>Famoso scrip Hola Mundo</h1>";
            break;

        case 4:
            echo "<title>Variables</title>"; 
            $nombre="Ramon";
            echo "Hola $nombre, un gusto conocerte!";
            break;

        case 5:
            echo "<title>Variables</title>";
            $nombre="Camila";
            echo "Hola ".$nombre.", encantado de conocerte!";
            break;

        case 6:
            echo "<title>Variables</title>";
            echo "<h1>Break en la ventana del navegador </h1>";
            $Name="Raul"; 
            echo "Hola $Name, encantado de conocerte<br>"; 
            echo "Gracias por estar aqui!";
           break;

        case 7:
            echo "<title>Variables</title>";
            echo "<h1>Break en la ventana del navegador con signo \ </h1>";
            $Name = "Ana"; 
            echo "Hola $Name, encantado de conocerte<br>\n"; 
            echo "Gracias por estar aqui!\n";
            break;

        case 8:
            echo "<title>Arrays</title>";
            echo "<h1>dia de la semana elejido: <br\n></h1>";
            $dia[0]="Lunes";
            $dia[1]="Martes";
            $dia[2]="Miercoles";
            $dia[3]="Jueves";
            $dia[4]="Viernes";
            $dia[5]="Sabado";
            $dia[6]="Domingo";
            //va a mostrar el dia 5 --> sabado
            echo $dia[5];
            break;

        case 9:
            echo "<title>Arrays de manera simplificada</title>";
            echo "<h1>introduccion a los arrays, metodo corto</h1>";
            /*Este es el metodo corto para la creacion de arrays, donde el array puede estar en una linea de codigo*/
            $dia = array( "domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado");
            //mostrara el dia domingo
            echo $dia[0];
            break;

        case 10:
            echo "<title>Operaciones aritmeticas basicas</title>";
            echo "<h1>Ejemplo de operaciones aritmeticas en PHP</h1>";
            $a = 9;
            $b = 7;
            echo $a + $b, "<br>";
            echo $a - $b, "<br>";
            echo $a * $b, "<br>";
            echo $a / $b, "<br>";
            $a++ ;
            echo $a,"<br>";
            $b--;
            echo $b,"<br>";
            break;

        case 11:
            echo "<title>Comparaciones numericas</title>";
            echo "<h1>Ejemplo de comparaciones numericas en PHP</h1>";
            echo"<h4>si aparece 1 el resultado es verdadero, si no aparece ningun numero el resultado es falso</h4>";
            $a = 4; 
            $b = 5; 
            $c = 5; 
            echo "A = 4<br>";
            echo "B = 5<br>";
            echo "C = 5<br>";
            echo "A es igual a B --> ";
            echo $a == $b, "<br>"; 
            echo "A es diferente a B--> ";
            echo $a != $b, "<br>"; 
            echo "A es menor que B --> ";
            echo $a < $b, "<br>"; 
            echo "A es mayor que B --> ";
            echo $a > $b, "<br>"; 
            echo "A es mayor o igual a B --> ";
            echo $a >= $c, "<br>"; 
            echo "A es menor o igual que B --> ";
            echo $a <= $c, "<br>";
            break;

        case 12:
            echo "<title>Operaciones logicas</title>";
            echo "<h1>Ejemplo de operaciones logicas en PHP</h1>";
            echo"<h4>si aparece 1 el resultado coincide, si no aparece ningun numero el resultado no cumple</h4>";
            $a = 7;
            $b = 7;
            $c = 12;
            echo "A = 7<br>";
            echo "B = 7<br>";
            echo "C = 12<br>";
            echo "A es igual a B y C es mayor que B -->";
            echo ($a == $b) && ($c > $b), "<br>";
            echo "A es igual a B y B es igual a C -->";
            echo ($a == $b) || ($b == $c), "<br>";
            echo "B es menor o igual que C -->";
            echo !($b <= $c), "<br>";
            break;

        case 13:
            echo "<Combinacion de comandos, operaciones y variables</title>";
            echo "<h1>Tabla de Multiplicar del 6</h1>";
            $a = 6;
            echo "Tabla de Multiplicar del 4 ", "<br>";
            echo "4 x 1 = ", $a * 1, "<br>";
            echo "4 x 2 = ", $a * 2, "<br>";
            echo "4 x 3 = ", $a * 3, "<br>";
            echo "4 x 4 = ", $a * 4, "<br>";
            echo "4 x 5 = ", $a * 5, "<br>";
            echo "4 x 6 = ", $a * 6, "<br>";
            echo "4 x 7 = ", $a * 7, "<br>";
            echo "4 x 8 = ", $a * 8, "<br>";
            echo "4 x 9 = ", $a * 9, "<br>";
            echo "4 x 10 = ", $a * 10, "<br>";
            break;

        case 14:
            echo "<title>Redondear operaciones</title>";
            echo "<h1>Ejemplo para calculos en PHP usando variables</h1>";
            echo "<h4>Variables declaradas: <br>";
            $precioneto = 97.43;
            $iva = 0.356;
            $resultado = $precioneto * $iva;
            echo "El precio es de ";
            echo $precioneto;
            echo " y el IVA el ";
            echo $iva;
            echo "% <br>";
            echo "Resultado: " ;
            echo round($resultado,2);
            echo " con ROUND() <br>";
            echo $resultado;
            echo " normal \n";
            echo "<br><br>";
            $resultado2 = sprintf("%01.2f", $resultado);
            echo "Usando la funcion SPRINTF se ve asi: ";
            echo $resultado2;
            break;

        case 15:
            echo "<title>Uso de If</title>";
            echo "<h1>Ejemplo condicional if</h1>";
            $a = 8;
            $b = 3;
            echo "Valor de A: ",$a,"<br>";
            echo "valor de B:",$b,"<br>";
            if ($a<$b)
            {
            echo "A es menor que B";
            }
            else
            {
            echo "A no es menor que B";
            }
            break;
    
        case 16:
            echo "<title>Uso de If y Else</title>";
            echo "<h1>Ejemplo condicional if, else y una funcion de fecha</h1>";
            $dia=date("11");
            if ($dia<=10)
            {
            echo "sitio activo";
            }
            else
            {
            echo "sitio fuera de servicio";
        }
            break;

        case 17:
            echo "<title>Uso de switch</title>";
            echo "<h1>Ejemplo condicional switch</h1>";
            /*Declaramos una variable con un valor de muestra */
            $posicion = "abajo";
            echo "La variable posicion es ",$posicion;
            echo "<br>";
            switch($posicion){
            case "abajo": 
        // Primer condicion si es abajo
            echo "La variable contiene el valor de abajo";
            break;
            case "arriba": //Segunda condicion del supuesto
            echo "La variable contiene el valor de arriba";
            break;
            default: //Condicion por default o si no es ninguna
            echo "La variable contiene otro valor distinto arriba y abajo";
            }
            break;
        
        case 18:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td><font color='$color'>$valor</font></td>\n"; 
                } 
             echo "<table border=1>";
                for($x=0; $x<=2; $x+=0.01){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                } 
            break;
        
        case 19:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                if ($valor % 2) 
                    $fondo = "#eeeeee"; 
                else 
                    $fondo = "#dddddd"; 
               
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n"; 
                } 
            echo "<table border=1>"; 
                $nrenglon = 0; 
                for ($x=0; $x<=2; $x+=0.01){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                }
            break;

        case 20:
            echo "<title>Tabla</title>";
            echo "<h3>Table seno y coseno</h3>";
            function muestra($valor) { 
                global $nrenglon; 
                if ($nrenglon % 2) 
                    $fondo = "#ffff00"; 
                else 
                    $fondo = "#ffffff"; 
               
                if ($valor < 0.5) 
                  $color = "red"; 
                else 
                  $color = "blue"; 
                echo "<td bgcolor='$fondo'><font color='$color'>$valor</font></td>\n"; 
                }
                echo "<table border=1>";
                $nrenglon = 0; 
                for ($x=0; $x<=2; $x+=0.05){ 
                  echo "<tr>"; 
                  muestra($x); 
                  muestra(sin($x)); 
                  muestra(cos($x)); 
                  echo "</tr>"; 
                }  
                break;

            case 21:
                echo "<title>Ciclo while</title>";
                echo "<form action=2.php method=post> 
                ¿Cuantas veces desea la repeticion? 
                <input type=text name=number> 
                <input type=submit value=Enviar>";   
                   break;

            case 22:
                echo "<title>Ciclo while</title>";
                echo "<form action=2.php method=post> 
                ¿Cuantas veces desea la repeticion? 
                <input type=text name=number> 
                <input type=submit value=Enviar>";
                break;

            case 23:
                // Redirigir a descarte3.php
                header("Location: descarte3.php");
                exit();
                break;

            case 24:
                echo "<title>Formulario</title>";
                echo "<form action=3.php method=post> 
                Introduce tu nombre: 
                <input type=text name=nombre> 
                <input type=submit>"; 
                break;

            case 25: 
                echo "<title>Formulario</title>";
                echo "<form action=4.php method=post> 
                <input type=radio name=gender value=0> Sr. 
                <input type=radio name=gender value=1> Sra.<br> 
                Tu apellido:<br> 
                <input type=text name=lastname> 
                <input type=submit>";  
                break;

            case 26:
                echo "<form action=4.php method=post> 
                <input type=radio name=gender value=0> Sr. 
                <input type=radio name=gender value=1> Sra.<br> 
                Tu apellido:<br> 
                <input type=text name=lastname> 
                <input type=submit name=submitbutton value=Envialo!>";
                break;

            case 27:
                echo "<title>contraceña</title>";
                echo "<form action=apendice.php method=post> 
                <input type=text name=pw>
                ingrese contracena
                <input type=submit value=Enviar>";
                  break;

            case 28:
                echo "<meta http-equiv=content-type content=text/html; charset=ISO-8859-1>";
                echo "<p>¡Enviame un e-mail!</p> 
                <form action=texto.txt method=post> 
                Tu direcciòn de e-mail: <br> 
                <input type=text name=Mail ><br> 
                Tu comentario: <br> 
                <textarea name=message cols=50 rows=5>
                </textarea><br> 
                <input type=submit value=Enviar> 
                </form>";
                $receiverMail = "tudireccion@tudominio.es"; // escribe aqui tu direcciòn 
                if (isset($_POST['Mail']) && $_POST['Mail'] != "") { 
                if (mail ($receivermail, "¡Tienes correo nuevo!", $_POST['message'], "From: 
                $_POST[Mail]")) { 
                echo "<p>Gracias por enviarme tu opiniòn.</p>\n"; 
                } 
                else { 
                echo "<p>Lo siento, ha ocurrido un error.</p>\n"; 
                } 
                }
                break; 

            case 29:
                echo "<h1>Contador Sencillo</h1>";
                echo "<p>Cantidad de visitas:";
                $fp = fopen("counter.txt", "r+");
                $counter = fgets($fp, 7);
                echo $counter;
                $counter ++;
                rewind($fp);
                fputs($fp, $counter);
                fclose($fp);
                break;

            case 30:
                //guestbook.txt pertenece aki
                echo "<meta http-equiv=content-type content=text/html; charset=iso-8859-1>
                <h1>Libro de visitas</h1>
                <form action=9.php method=post
                Tu comentario:<br>
                <textarea cols=55 rows=4 name=comment></textarea><br>
                Tu nombre:<br>
                <input type=text name=name><br>
                Tu e-mail:<br>
                <input type=text name=email><br>
                <input type=submit value=publica:>
                </form>";
                break;
                
            case 31:
                setcookie("check", 1);
                if (isset($_POST['submit'])) {
                setcookie("vote", 1);
                }
                echo "<meta http-equiv=content-type content=text/html; charset=iso-8859-1>";
                echo "<h1>Encuesta</h1>";
                echo "<h3>¿Que opinas de este curso de php?</h3>";
                echo "<form action=<";
                echo "$_SERVER[PHP_SELF]; method=post>";
                echo "<input type=radio name=reply value=0>";
                echo "Excelente, he aprendido mucho.<br>";
                echo "<input type=radio name=reply value=1>";
                echo "Mas o menos, es muy complicado.<br>";
                echo "<input type=radio name=reply value=2>";
                echo "¡Bah! para que quiero aprender php";
                echo "<br> <br>";
                if (empty($_POST['submit']) && empty($_COOKIE['voted'])) {
                //Mostrar el botòn submit solo si el formulario todavia
                // no se ha enviado y el usuario no ha votado.
                echo "<input name=submit type=submit value=vota!>";
                } else {
                echo "<p>Gracias por tu voto.</p>\n";
                //¿Formulario enviado? ¿cookies activas? ¿pero todavia no se ha votado?
                if (isset($_POST['reply']) && isset($_COOKIE['check']) && empty($_COOKIE['voted'])) {
                //Guardar nombre de archivo en la variable
                $file="results.txt";
                $fp=fopen($file, "r+");
                $vote=fread($fp, filesize($file));
                //Descomponer la string del archivo en array con coma como separador
                $arr_vote = explode("," , $vote); //explode convierte la string en array
                //¿que valor se ha selleccionado en el formulario?
                //¡El recuento aumenta en 1!
                $reply=$_POST['reply'];
                $arr_vote[$reply]++;
                //volver a montar la string
                $vote = implode(",", $arr_vote); // implode vincula elementos de la array a string
                rewind($fp);
                //Escribir nueva string en el archivo
                echo "fputs($fp, $vote)";
                echo "fclose($fp)";
                }
                }
                echo "</form>";
                echo "<p>";
                echo "[ <a href=results.txt target=_blank>ver resultados de la encuesta</a>]";
                echo "</p>";
                break;  
                              
            case 32:
                echo "<title>contraceña</title>";
                echo "<form action=6.php method=post> 
                Contraseña: 
                <input type=password name=pass> 
                <input type=submit value=Enviar> ";
                break;

            case 33:
                // Redirigir a 7.php
                header("Location: 7.php");
                exit();     
                break;

            case 34:
                $servername = "localhost"; 
                $username = "root"; 
                $password = "";
               
                $database = "agenda";
               
                 // Create a connection 
                 $conn = mysqli_connect($servername, 
                     $username, $password, $database);

                if($conn) {
                    echo "conectado a la base de datos"; 
                } 
                else {
                    die("Error". mysqli_connect_error()); 
                }
                echo "<form action=8.php method=post> 
                Ingrese su nombre: <br> 
                <input type=text name=nombre> 
                <input type=submit value=Enviar >
                <br>Ingrese su apellido: <br>
                <input type=text name=apellido> 
                <input type=submit value=Enviar>";                
                break;

            case 35:
                //CODIO FEO!!!!!!!!!!
                // Conexión a la base de datos
                $mysqli = new mysqli("localhost", "root", "", "agenda");

                // Verificar conexión
                if ($mysqli->connect_error) {
                    die("Conexión fallida: " . $mysqli->connect_error);
                }

                // Realizar una consulta
                $sql = "SELECT * FROM direcciones";
                $resultado = $mysqli->query($sql);
            
                if (!$resultado) {
                    die("Error en la consulta: " . $mysqli->error);
                    }
                
                // Obtener información de la consulta
                $campos = $resultado->field_count;
                $filas = $resultado->num_rows;
                echo "<p>Cantidad de filas: $filas</p>\n";
                echo "<table border='1' cellspacing='0'>\n"; // Empezar tabla
                echo "<tr>"; // Crear fila

                // Obtener nombres de los campos
                $field_info = $resultado->fetch_fields();
                foreach ($field_info as $field) {
                    echo "<th>{$field->name}</th>";
                }
                echo "</tr>\n"; // Cerrar fila

                // Mostrar resultados en la tabla
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>"; // Crear fila
                    foreach ($row as $value) {
                        echo "<td>$value </td>";
                    }
                    echo "</tr>\n"; // Cerrar fila
                }
                echo "</table>\n"; // Cerrar tabla

                // Cerrar conexión
                $mysqli->close();
                break;

            case 36:
                // Redirigir a 10.php
                header("Location: 10.php");
                exit();     
                break; 

            case 37:
                echo "<form action=14.php method=post> 
                Ingrese nombre: 
                <input type=text name=nombre><br> 
                Ingrese correo electronico: 
                <input type=text name=correo><br> 
                Seleccione el curso: 
                <select name=codigocurso> 
                <option value=1>PHP</option> 
                <option value=2>ASP</option> 
                <option value=3>JSP</option> 
                </select> 
                <br> 
                <input type=submit value=Registrar> 
                </form>";
                break;
            
            case 38:
                // Redirigir a 11.php
                header("Location: 11.php");
                exit();     
                break;
                
            case 39:
                echo "<form action=13.php method=post> 
                Ingrese el correo del alumno a consultar: 
                <input type=text name=correo> 
                <br> 
                <input type=submit value=buscar>";
                break;

            case 40 :
                echo "<form action=pagina04.php method=post>
                Ingrese el mail del alumno a borrar: 
                <input type=text name=mail><br> 
                <input type=submit value=buscar>";
                break;                
            
            case 41:
                // Create a new connection using mysqli
                $conexion = new mysqli("localhost", "root", "", "hola");

                // Check connection
                if ($conexion->connect_error) {
                    die("Problemas en la conexion: " . $conexion->connect_error);
                }
                // Prepare the query
                $stmt = $conexion->prepare("DELETE FROM chao");
                // Execute the query
                $stmt->execute();
                // Close the connection
                $conexion->close();
                echo "Se efectuó el borrado de todos los alumnos.";
                break;

            case 42:
                echo "<form action=15.php method=post> 
                Ingrese el correo electronico del alumno: 
                <input type=text name=correo><br> 
                <input type=submit value=buscar>";
                break;

            case 43:
                // Redirigir a 17.php
                header("Location: 17.php");
                exit();     
                break; 
                
            case 44:
                echo "<title>listado alumnos</title><br>";
                echo "<h1>Alumnos</h1>"; 

                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "phpfacil";
    
                // Creamos la conexion
                $conn = new mysqli($servername, $username, $password, $dbname);
                // verificamos la conexion
                if ($conn->connect_error) {
                die("Problemas en la conexión: " . $conn->connect_error);
                }
                $sql = "SELECT alu.codigo as codigo, nombre, mail, codigocurso, nombrecur
                  FROM alumnos as alu
                  INNER JOIN cursos as cur ON cur.codigo = alu.codigocurso";
                $result = $conn->query($sql);
                if (!$result) {
                die("Problemas en el select: " . $conn->error);
                }
                else {
                echo "";
                }
                while ($reg = $result->fetch_assoc()) {
                   echo "Código: " . $reg['codigo'] . "<br>";
                   echo "Nombre: " . $reg['nombre'] . "<br>";
                   echo "Mail: " . $reg['mail'] . "<br>";
                   echo "Curso: " . $reg['nombrecur'] . "<br>";
                   echo "<hr>";
                }
    
                $conn->close();
                break;

            case 45:
                // Crear una nueva conexión usando mysqli
                $conexion = new mysqli("localhost", "root", "", "phpfacil");

                // Verificar la conexión
                if ($conexion->connect_error) {
                    die("Problemas en la conexion: " . $conexion->connect_error);
                }

                // Preparar la consulta
                $stmt = $conexion->prepare("SELECT COUNT(*) as cantidad FROM alumnos");

                // Ejecutar la consulta
                $stmt->execute();

                // Obtener el resultado
                $result = $stmt->get_result();

                $reg = $result->fetch_assoc();

                echo "La cantidad de alumnos inscritos son : " . $reg['cantidad'];

                // Cerrar la conexión
                $conexion->close();
                break;
            
            case 46:
                echo "<form action=19.php method=post> 
                Ingrese el correo del alumno: 
                <input type=text name=mail><br> 
                <input type=submit value=buscar> ";
                break;
            
            case 47: 
                $conexion = new mysqli("localhost", "root", "", "phpfacil");

                if ($conexion->connect_error) {
                    die("Problemas en la conexión: " . $conexion->connect_error);
                }

                $sql = "SELECT COUNT(alu.codigo) AS cantidad, nombrecur 
                        FROM alumnos AS alu 
                        INNER JOIN cursos AS cur ON cur.codigo = alu.codigocurso 
                        GROUP BY alu.codigocurso";
                $resultado = $conexion->query($sql);

                if (!$resultado) {
                    die("Problemas en el select: " . $conexion->error);
                }

                while ($reg = $resultado->fetch_assoc()) {
                    echo "Nombre del curso: " . $reg['nombrecur'] . "<br>";
                    echo "Cantidad de inscritos: " . $reg['cantidad'] . "<br>";
                    echo "<hr>";
                }

                $conexion->close();
                break;
            
            case 48: 
                echo "<A href=22.php?tabla=2>Tabla del 2</A> <br> 
                <A href=22.php?tabla=3>Tabla del 3</A> <br> 
                <A href=22.php?tabla=5>Tabla del 5</A> ";
                break;

            case 49:
                // Redirigir a case49.php
                header("Location: case49.php");
                exit();     
                break; 
            
            case 50: 
                echo "<form action=23.php method=post enctype=multipart/form-data> 
                Seleccione el archivo: 
                <input type=file name=foto><br> 
                <input type=submit value=Enviar>";
                break;

            case 51:
                // Redirigir a 24.php
                header("Location: 24.php");
                exit();     
                break; 

            case 52:
                // Redirigir a case52.php
                header("Location: case52.php");
                exit();     
                break;

            case 53:
                // Redirigir a 26.php
                header("Location: 26.php");
                exit();     
                break;
            
            case 54:
                echo "<form action=pagina60.php method=post>
                Ingrese nombre de usuario:
                 <input type=text name=campousuario><br>
                Ingrese clave:
                <input type=password name=campoclave><br>
                <input type=submit value=confirmar>";
                break;

            case 55:
                  // Redirigir a ejercicio61.php
                  header("Location: ejercicio61.php");
                  exit();     
                  break;  

            case 56:
                echo "<form action=pagina62.php method=post>
                Ingrese la dirección de sitio web (www.google.com):
                <input type=text name=direccion size=30><br>
                <input type=submit value=Redireccionar>";
                if (isset($_POST['direccion'])) {
                    if ($direccion == "www.google.com") {
                        header("Location: https://www.youtube.com/watch?v=dOv-GPmKD8w&ab_channel=JIMMYSAN151");
                    } else {
                        header("Location: http://$direccion");
                    }
                }
                exit();
                break; 

            case 57:
                $ancho = 200; 
                $alto = 60;  
                $imagen = imageCreate($ancho, $alto); 
                $amarillo = ImageColorAllocate($imagen, 255, 255, 0); 
                ImageFill($imagen, 0, 0, $amarillo); 
  
                $rojo = ImageColorAllocate($imagen, 255, 0, 0); 
                $valoraleatorio = rand(100000, 999999); 
                ImageString($imagen, 5, 75, 20, $valoraleatorio, $rojo); 
  
                for ($c = 0; $c <= 10; $c++) { 
                $x1 = rand(0, $ancho); 
                $y1 = rand(0, $alto); 
                $x2 = rand(0, $ancho); 
                $y2 = rand(0, $alto); 
                ImageLine($imagen, $x1, $y1, $x2, $y2, $rojo);} 
                Header("Content-type: image/jpeg"); 
                ImageJPEG($imagen); 
                ImageDestroy($imagen); 
                break;

            case 58:
                // Redirigir a case58.php
                header("Location: case58.php");
                exit(); 
                break;

            case 59:
                // Redirigir a ejercicio65.php
                header("Location: ejercicio65.php");
                exit();     
                break;  

            case 60: 
                // Redirigir a ejercicio68.php
                header("Location: case60.php");
                exit();    
                             
            case 61:
                // Redirigir a 28.php
                header("Location: 28.php");
                exit();     
                break;    

            case 62:
                // Redirigir a ejercicio68.php
                header("Location: ejercicio68.php");
                exit();   
                break;

            case 63:
                // Redirigir a ejercicio69.php
                header("Location: ejercicio69.php");
                exit();   
                break;                
                            
            default:
            echo "<h1>opcion no disponible</h1>";
                break;
    }
?>