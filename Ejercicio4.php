<html>
<head>
    <title>Ejercicio 4</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta charset="utf-8"/>
</head>
<body>
<h1><center>PROGRAMACIÓN DE APLICACIONES WEB</h1></center>
<h4>Mostrar en pantalla cual es el mayor de dos números</h4>
<?php
$n1=23;
$n2=12;

if ($n1>$n2){
    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
    }
    elseif ($n1==$n2){
    echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
    }
    else{
    echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
    }
?>
<footer>
<p>ANDREA LIZETH NANGUELU ALCOCER</p>
</footer>
<a href ="index.php">Regresar al menú</a>
</body>
</html>