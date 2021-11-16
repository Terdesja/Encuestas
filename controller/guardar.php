<?php
     include("../model/conexion.php");

      $name = $_POST['name'];
      $nacionalidad = $_POST['nacionalidad'];
      $sexo = $_POST['sexo'];
      $cedula = $_POST['cedula'];
      $fecha = $_POST['fecha'];
      $pais = $_POST['pais'];
      $conyugal = $_POST['conyugal'];
      $telefono_fijo = $_POST['telefono_fijo'];
      $telefono_movil = $_POST['telefono_movil'];
      $otros_telefonos = $_POST['otros_telefonos'];
      $email = $_POST['email'];
      $consejoc = $_POST['consejoc'];
      $consejo = $_POST['consejo'];
      $vivienda = $_POST['vivienda'];
      $terreno = $_POST['terreno'];
      $condicion = $_POST['condicion'];
      $material = $_POST['material'];
      $estructura = $_POST['estructura'];
      $techo = $_POST['techo'];
      $puerta = $_POST['puerta'];
      $puerta_principal= $_POST['puerta_principal'];
      $habitaciones = $_POST['habitaciones'];
      $baños = $_POST['baños'];
      $ventanas = $_POST['ventanas'];
      $ventanas_condicion = $_POST['ventanas_condicion'];
      $poceta = $_POST['poceta'];
      $poceta_condicion = $_POST['poceta_condicion'];
      $lavamanos = $_POST['lavamanos'];
      $lavamanos_condicion = $_POST['lavamanos_condicion'];
      $declaracion = $_POST['declaracion'];


      $sql =  "INSERT INTO datos(nombre, nacionalidad, sexo, cedula, fecha, pais,conyugal,telefono_fijo,telefono_movil,otros_telefonos,email,consejoc,consejo,vivienda,terreno,condicion,material,estructura,techo,puerta,puerta_principal,habitaciones,baños,ventanas,ventanas_condicion,poceta,poceta_condicion,lavamanos, lavamanos_condicion,declaracion) VALUES ('$name','$nacionalidad','$sexo','$cedula', '$fecha','$pais','$conyugal','$telefono_fijo', '$telefono_movil','$otros_telefonos', '$email', '$consejoc', '$consejo', '$vivienda', '$terreno','$condicion','$material','$estructura','$techo','$puerta','$puerta_principal','$habitaciones','$baños','$ventanas','$ventanas_condicion','$poceta','$poceta_condicion','$lavamanos','$lavamanos_condicion','$declaracion')";
      
      if ($conn->query($sql) === TRUE) {
        echo "se guardaron todos los datos";
        header('Location: ../view/index.php');
      }else{
        echo "error :". $sql. "<br>". $conn->error;
      }

  
   ?>
   