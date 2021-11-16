<?php
    require_once('../model/conexion.php');
    require_once('../controller/extraer.php');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="../assents/css/style.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body >
  <header>
    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item mr-auto">
						<a href="services.php" class="nav-link text-white">Porcentaje de encuenta</a>
					</li>
					<li class="nav-item mr-auto">
						<a href="about_us.php" class="nav-link text-white">Encuesta</a>
					</li>
					
				</ul>
      
    </nav>
  </header>
<div class="card" style="width: 24rem; height: 19rem; margin-top: 8rem; margin-left: 39rem">
  <div class="card-body">
    <h5 class="card-title">Verificacion De Su Informacion </h5>
    <h6 class="card-subtitle mb-2 text-muted"></h6>
    <?php $result = mysqli_query($conn, $sql1) or die(mysqli_error());

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      echo  " - Nombre Completo: " . $row["nombre"]. "<br>";
      echo  " - Cédula: " . $row["cedula"]. "<br>";
      echo  " - Teléfono fijo: " . $row["telefono_fijo"]. "<br>";
      echo  " - Teléfono Movil: " . $row["telefono_movil"]. "<br>";
      echo  " - Otro Teléfono: " . $row["otros_telefonos"]. "<br>";
      echo  " - Correo Electrónico: " . $row["email"]. "<br>";
  }
} else {
  echo "Sin registro que mostrar";
}


 ?>
  </div>
</div>
</body>
</html>