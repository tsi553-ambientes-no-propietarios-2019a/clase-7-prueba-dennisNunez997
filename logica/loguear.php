<?php
    require 'conexion.php';
    session_start();
    
    //datos de tienda
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $q= "SELECT COUNT(*) as contar from tienda where usuario_tienda = '$usuario' and clave_tienda = '$clave'"; 
    $consulta = mysqli_query($conexion,$q);
    $array=mysqli_fetch_array($consulta);
    var_dump($consulta);

    if($array['contar'] > 0)
    {
        $_SESSION['username'] = $usuario;
        header("location: ../inicio.php");
    }
    else
    {
        echo "datos incorrectos";
    }


?>