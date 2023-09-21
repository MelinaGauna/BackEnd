<?php
$usuario = $_POST ["usuario"];
$password = $_POST ["pass"];

$ckusuario = "admin";
$ckpass = 1234;

if ($usuario==$ckusuario && $password==$ckpass) {
    header ("location:https://www.google.com");

}   else {
    echo "Incorrecto";
    header ("location:https://www.omelet.com/error");
}

?>
