<html>
<head>
    <title>Ejercicio 2</title>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <meta charset="utf-8"/>
</head>
<body>
<h1><center>PROGRAMACIÓN DE APLICACIONES WEB</h1></center>
<h4>Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100</h4>
<?php
echo "<table border=1>";
$n=1;
for ($n1=1; $n1<=10; $n1++)
{
  echo "<tr>"; 
  for ($n2=1; $n2<=10; $n2++)
  {
      echo "<td>", $n, "</td>";
      $n=$n+1;
  }
  echo "</tr>";
}
echo "</table>";
?>
<footer>
<p>ANDREA LIZETH NANGUELU ALCOCER</p>
</footer>
<a href ="index.php">Regresar al menú</a>
</body>
</html>