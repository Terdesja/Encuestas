<?php

   
       $host = "localhost";
       $user = "root";
       $password = "Unicornio13*";  //Cambia la contraseña aquii
       $db = "encuestas";
      
         $conn = new mysqli($host, $user, $password, $db);

         if ($conn->connect_error) {
            die('Conexion Fallida mejorar codigo');
         }
     
         
   

   
   ?>