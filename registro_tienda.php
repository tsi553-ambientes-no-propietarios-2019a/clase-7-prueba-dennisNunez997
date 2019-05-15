
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-squiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>

     <div class="contenedor">

          <div class="row">
               <div class="col-sm">
                    <form action="logica/registro.php" method="POST">
                         <h1>Registro de Tienda</h1>
                         <strong>Nombre de Tienda: </strong>
                         <input type="text" name="nom_tienda" placeholder="digite nombre de Tienda">
                         <br><br>
                         <strong>Direccion</strong>
                         <input type="text" name="direccion" placeholder="digite direccion">
                         <br><br>
                         <strong>Usuario</strong>
                         <input type="text" name="usuario" placeholder="digite usuario">
                         <br><br>
                         <strong>Clave</strong>
                         <input type="password" name="clave1" placeholder="digite clave">
                         <br><br>
                         <strong>Repetir la clave</strong>
                         <input type="password" name="clave2" placeholder="digite otra vez clave">
                         <br><br>
                         <button type="submit" class="btn btn-primary">Registrar</button>

                    </form>
 
               </div>
          </div>

   
     
</body>
</html>
