<?php


session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario))
{
    header("location: index.php");
}else
{
    echo "<h1> Bienvenido $usuario </h1>";

echo "<a href='logica/salir.php'>salir</a>";
echo "<br>";
echo "<a href='nuevo_producto.php'>registrar productos</a>";


}

?>