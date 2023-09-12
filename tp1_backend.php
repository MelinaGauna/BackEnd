<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

echo "Hola Mundo";

$saludo = "Hola Mundo";
echo $saludo;

$variable1 = 1000;
$variable2 = 200;
echo $variable1+$variable2;

echo $variable1-$variable2;

echo $variable1*$variable2;

echo $variable1/$variable2;

echo $variable1%$variable2;


$celsius = 20;
$fahrenheit = ($celsius * 9/5) + 32;
echo $fahrenheit;


$ladoA = 18;
$ladoB = 12;
$perimetrorectangulo = ($ladoA*2)+($ladoB*2);
echo $perimetrorectangulo;
$arearectangulo = $ladoA*$ladoB;
echo $arearectangulo;

$radio = 30;
$perimetrocirculo = 2 * M_PI * $radio;
echo $perimetrocirculo;
$areacirculo = M_PI * ($radio*$radio);
echo $areacirculo;



?>

</body>
</html>