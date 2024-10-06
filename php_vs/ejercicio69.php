<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Problema</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            width: 33%;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body>
    <?php 
    function retornarColorHexa($rojo, $verde, $azul) {
        return sprintf("#%02X%02X%02X", $rojo, $verde, $azul);
    }
    ?>
    <table border="1">
        <tr>
            <td bgcolor="<?php echo retornarColorHexa(255, 0, 0); ?>">Cuadro rojo</td>
            <td bgcolor="<?php echo retornarColorHexa(0, 255, 0); ?>">Cuadro verde</td>
            <td bgcolor="<?php echo retornarColorHexa(0, 0, 255); ?>">Cuadro azul</td>
        </tr>
    </table>
</body>
</html>
