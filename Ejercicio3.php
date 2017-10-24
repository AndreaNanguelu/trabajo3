<html>
<head>
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta charset="utf-8"/>
</head>
<body>
<h1><center>PROGRAMACIÓN DE APLICACIONES WEB</h1></center>
<h4>Mostrar una tabla de 1 por 10</h4>
<?php
echo "<h2>BUCLE WHILE</h2><br>";
echo "<table border=1>";
    for($i=0; $i<10; $i++)
    {
        echo "<tr>";
        echo "<td>";
        echo "Linea ".$i."<br>";
        echo "</td>";
        echo "<tr>";
        
    }
        echo "</table>";
?>
<footer>
<p>ANDREA LIZETH NANGUELU ALCOCER</p>
</footer>
<a href ="index.php">Regresar al menú</a>
</body>
</html>