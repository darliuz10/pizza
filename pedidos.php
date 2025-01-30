<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Recoge los datos del pedido//
$nombre = htmlspecialchars($_POST['nombre']);
$telefono = htmlspecialchars($_POST['telefono']);
$contrasena = htmlspecialchars($_POST['contrasena']);

//chekbox//
$pizza=[];
if (isset($_POST['pizza_margarita'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_margarita']);
}

$pizza=[];
if (isset($_POST['pizza_pepperoni'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_pepperoni']);
}

$pizza=[];
if (isset($_POST['pizza_hawaiana'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_hawaiana']);
}

$pizza=[];
if (isset($_POST['pizza_marinara'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_marinara']);
}

$pizza=[];
if (isset($_POST['pizza_carbonara'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_carbonara']);
}

$pizza=[];
if (isset($_POST['pizza_fungui'])) {
    $pizza[] = htmlspecialchars($_POST['pizza_fungui']);
}

//Mostrando datos//

echo "<h1>Datos Recibidos</h1> br <hr>";
echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Telefono:</strong> $telefono</p>";
echo "<p><strong>Contraseña:</strong> $contrasena</p>";
//Muestra los datos de seleccion//
echo"<p><strong>Pizza:<strong>".(empty($pizza)?"Ninguno":implode(",",$pizza))."</p>";
}else{
echo"<h1>Acceso no permitido</h1>";
}
?>