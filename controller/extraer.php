
<?php
  require_once ('../model/conexion.php');
  

     $sql1 = "SELECT nombre, cedula, telefono_fijo, telefono_movil, otros_telefonos, email FROM datos ORDER BY id DESC
     LIMIT 1";
     
?>
<!-- Estan solo los campos a mostrar en la verificacion -->
<!-- Cambie el Where por el ORDER BY -->