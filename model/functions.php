<?php

function insertar($tblname,$form_data){
    $fields = array_keys($form_data);
	$sql="INSERT INTO ".$tblname."(".implode(',', $fields).")  VALUES('".implode("','", $form_data)."')";
}



function Validate(array $fields){
     foreach($fields as $field){
      if(!isset($_POST[$field]) && empty($_POST[$field])){
        return 'the field' . $_POST[$field] . ' is requiered.';
      }
     }
   }

  $fields = [
    'name',
    'nacionalidad',
    'sexo',
    'cedula',
    'fecha',
    'pais',
    'conyugal',
    'telefono _fijo',
    'telefono_movil',
    'otros_telefonos',
    'email',
    'consejoc',
    'consejo',
    'vivienda',
    'terreno',
    'condicion',
    'material',
    'estructura',
    'techo',
    'puerta',
    'puerta_principal',
    'habitaciones',
    'baños',
    'ventanas',
    'ventanas_condicion',
    'poceta', 
    'poceta_condicion',
    'lavamanos',
    'lavamanos_condicion',
    'declaracion'
  ];
  
  validate($fields);

?>