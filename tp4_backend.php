<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>TP 4</H1>    
    <br>

<?php

echo "Ejercicio 1";

for ($i = 1; $i <= 100; $i++) {
    print "<p>$i</p>\n";
}


echo "Ejercicio 2";

for ($ii = 100; $ii >= 1; $ii--) {
    print "<p>$ii</p>\n";
}


echo "Ejercicio 3";

for($par=2; $par<=100; $par=$par+2){
    print "<p>$par</p>\n";
}


echo "Ejercicio 4";

for($impar=1; $impar<=100; $impar= $impar+2){
    print "<p>$impar</p>\n";
}


echo "Ejercicio 5";
$i = 1;
$suma = 0;

while ( $i <= 20){
	$suma = $suma + $i;
	$i = $i + 1;
}
print "<p>$suma</p>\n";


echo "Ejercicio 6";
$i = 2;
$suma = 0;

while ( $i <= 20){
	$suma = $suma + $i;
	$i = $i + 2;
}
print "<p>$suma</p>\n";


?>

</body>
</html>