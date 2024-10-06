<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .header {
            width: 100%;
            background-color: #ffff00;
            text-align: center;
            padding: 10px 0;
        }
        .content {
            flex: 1;
            text-align: center;
            margin: 20px 0;
        }
        .footer {
            width: 100%;
            background-color: #cccccc;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?php 
    require_once("pagina61.php"); 
    cabeceraPagina("Titulo principal de la página"); 
    echo "<div class='content'>Este es el cuerpo de la página</div>"; 
    piePagina("Pie de la página"); 
    ?> 
</body>
</html>