<?php

try{
    $sql = "INSERT INTO datos VALUES(:name, :nacionalidad, : sexo, :cedula, :fecha,:pais,:conyugal,:telefono_fijo,:telefono_movil,:otros_telefonos,:email,:consejoc,:consejo,:vivienda,:terreno,:condicion,:material,:estructura,:techo,:puerta,:puerta_principal,:habitaciones,:baños,:ventanas,:ventanas_condicion,:lavamanos,:lavamanos_condicion,:declaracion)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':nacionalidad', $nacionalidad);
        $stmt->bindParam(':sexo', $sexo);
        $stmt->bindParam(':cedula', $cedula);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':pais', $pais);
        $stmt->bindParam(':conyugal', $conyugal);
        $stmt->bindParam(':telefono_fijo', $telefono_fijo);
        $stmt->bindParam(':telefono_movil', $telefono_movil);
        $stmt->bindParam(':otros_telefonos', $otros_telefonos);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':consejoc', $consejoc);
        $stmt->bindParam(':consejo', $consejo);
        $stmt->bindParam(':vivienda', $vivienda);
        $stmt->bindParam(':terreno', $terreno);
        $stmt->bindParam(':condicion', $condicion);
        $stmt->bindParam(':material', $material);
        $stmt->bindParam(':estructura', $estructura);
        $stmt->bindParam(':techo', $techo);
        $stmt->bindParam(':puerta', $puerta_principal);
        $stmt->bindParam(':puerta_principal', $puerta_principal);
        $stmt->bindParam(':habitaciones', $habitaciones);
        $stmt->bindParam(':baños', $baños);
        $stmt->bindParam(':ventanas', $ventanas);
        $stmt->bindParam(':ventanas_condicion', $ventanas_condicion);
        $stmt->bindParam(':poceta', $poceta);
        $stmt->bindParam(':poceta_condicion', $poceta_condicion);
        $stmt->bindParam(':lavamanos', $lavamanos);
        $stmt->bindParam(':lavamanos_condicion', $lavamanos_condicion);
        $stmt->bindParam(':declaracion', $declaracion);
} catch(PDOException $msj){
    die('Error de conexion '.$msj->getMessage());
}



?>