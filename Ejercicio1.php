<html>
<head>
    <title>Ejercicio 1</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta charset="utf-8"/>
</head>
<body>
<center><h1>PROGRAMACIÓN DE APLICACIONES WEB</h1></center>
<h4>Hacer un programa que sume,reste, multiplique y divida dos variables</h4>
<?php
    $numero1=10;
    $numero2=5;
    //SUMA
    $suma=$numero1+$numero2;
    echo "$numero1+$numero2"."<br>";
    echo "suma = ".$suma. "<br>";
    //RESTA
    $resta=$numero1-$numero2;
    echo "$numero1-$numero2"."<br>";
    echo "resta = ".$resta. "<br>";
    //MULTIPLICA
    $multiplica=$numero1*$numero2;
    echo "$numero1*$numero2"."<br>";
    echo "multiplica = ".$multiplica. "<br>";
    //DIVIVIR
    $dividir=$numero1/$numero2;
    echo "$numero1/$numero2"."<br>";
    echo "dividir = ".$dividir. "<br>";
?>
<footer>
<p>ANDREA LIZETH NANGUELU ALCOCER</p>
</footer>
<a href ="index.php">Regresar a menú</a>
</body>
</html>