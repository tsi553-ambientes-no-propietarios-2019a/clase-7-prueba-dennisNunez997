<?php


session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario))
{
    header("location: index.php");
}else
{
    echo "<h1> Bienvenido $usuario </h1>";


}

?>

<?php
    $conexion=mysqli_connect('localhost','root','','prueba1');
?>


<!DOCTYPE html>
<html>
<head>
    <title>Mostrar datos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <br>
    <table border="1">
        <tr>
            <td><strong>codigo</strong></td>
            <td><strong>producto</strong></td>
            <td><strong>tipo</strong></td>
            <td><strong>cantidad</strong></td>
            <td><strong>precio</strong></td>
        </tr>
            <?php
            $sql="SELECT * from producto";
            $result = mysqli_query($conexion,$sql);
            
            while($mostrar=mysqli_fetch_array($result))
            {

            
            ?>
        <tr>
            <td><?php echo $mostrar['cod']?></td>
            <td><?php echo $mostrar['nomProd']?></td>
            <td><?php echo $mostrar['tipoProd']?></td>
            <td><?php echo $mostrar['canProd']?></td>
            <td><?php echo $mostrar['preProd']?></td>
        </tr>
        <?php
            }
        ?>
    </table>

    <br><br>

    <a class='btn btn-primary' href='logica/salir.php'role='button'>salir</a>
    <a class='btn btn-primary' href='nuevo_producto.php'>registrar productos</a>
   

</body>
</html>