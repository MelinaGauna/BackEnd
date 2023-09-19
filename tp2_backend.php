<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1>TP2</h1>
<br>

<?php

$n=5;
$b=0;
$c=10;

if ($n > $b) {
    echo "La variable n es positiva";  
} else {
    echo "La variable n es negativa";
}

echo "</p>";

if ($n>1 & $n<10) {
    echo "La variable n es mayor a 1 y menor a 10";
}  echo "</p>";

if ($n>10 || $n<2) {
    echo "La variable n es mayor a 1 y menor a 10";
}  else {
    echo "La variable n no es mayor a 1 ni menor a 10";
} echo "</p>";
    echo "</p>";



$numero1=8;
$numero2=2;
if ($numero1>$numero2) {
    echo $numero1+$numero2;
    echo "</p>";
    echo $numero1-$numero2;
} elseif  ($numero1<$numero2) {
    echo $numero1*$numero2;
    echo $numero1/$numero2;
    echo $numero1%$numero2;
}
else {
    echo "Los numeros ingresados son iguales";
}






?>

</body>
</html>