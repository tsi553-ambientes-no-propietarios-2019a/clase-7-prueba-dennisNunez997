<?php 
include('utils.php');

if($_POST) {
	if (isset($_POST['codigo']) && isset($_POST['nom_prod']) && !empty($_POST['tipo_prod']) && !empty($_POST['cant_prod']) && !empty($_POST['precio_prod'])) {
		$codigo = $_POST['codigo'];
		$nom_prod = $_POST['nom_prod'];
        $tipo_prod = $_POST['tipo_prod'];
        $cant_prod = $_POST['cant_prod'];
        $precio_prod = $_POST['precio_prod'];
        
        
        $sql_insert = "INSERT INTO producto
		(cod, nomProd, tipoProd, canProd, preProd)
		VALUES ('$codigo','$nom_prod','$tipo_prod','$cant_prod','$precio_prod')";
		echo $sql_insert;
		$conn->query($sql_insert); 
		if ($conn->error) {
		echo 'Ocurrió un error ' .  $conn->error;
		} else {
		    redirect('../inicio.php');
        }
        
        



	} else {
		header('Location: ../registro_tienda.php?error_message=Ingrese todos los datos!');
		exit;
	}
} else {
	header('Location: ../inicio.php');
	exit;
}
?>