<?php 
include('utils.php');

if($_POST) {
	if (isset($_POST['usuario']) && isset($_POST['clave1']) && !empty($_POST['usuario']) && !empty($_POST['clave1'])) {
		$nom_tienda = $_POST['nom_tienda'];
		$direccion = $_POST['direccion'];
        $usuario = $_POST['usuario'];
        $clave1 = $_POST['clave1'];
        $clave2 = $_POST['clave2'];
        
        
        if($clave1 == $clave2)
        {
            $sql_insert = "INSERT INTO tienda
		    (nombre_tienda, dir_tienda, usuario_tienda, clave_tienda)
		    VALUES ('$nom_tienda','$direccion','$usuario','$clave1')";

		    echo $sql_insert;
		    $conn->query($sql_insert);

		    if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		    } else {
			    redirect('../index.php');
            }
        }
        else
        {
           header('Location: ../registro_tienda.php?error_message=Contraseñas incorrectas!');
		    exit; 
        }



	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../registro_tienda.php');
	exit;
}
?>