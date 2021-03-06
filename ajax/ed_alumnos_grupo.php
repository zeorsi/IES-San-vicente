<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {  
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");  
    header('Access-Control-Allow-Credentials: true');  
    header('Access-Control-Max-Age: 86400');   
}  
  
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))  
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");  
  
    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))  
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");  
}  


include 'database.php';

$grupo = $_GET['grupo'];

$database=open_database();

$result=execute_query("select alumnos.nombre nombre, alumnos.apellido1 apellido1, alumnos.apellido2 apellido2, grupos.nombre grupo from alumnos,grupos where alumnos.grupo='$grupo' and alumnos.grupo=grupos.codigo");

echo json_encode ($result)


?>