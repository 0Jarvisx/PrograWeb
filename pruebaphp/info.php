<?php
 function conexion(){
 $host = 'localhost';
 $usuario = 'root'; //NUNCA USAR USUARIO ROOT, SOLO SE USA DE PRUEBA
 $password = 'Elian140204';
 $database = 'prueba';
 $conexion = mysql_connect($host, $usuario, $password, $database);
 if($conexion){
 echo "CONEXIÓN EXITOSA"
 mysqli_query($conexion, "SET NAMES 'utf8'");
 } else {
 echo "CONEXIÓN FALLIDA ".mysqli_error();
 }
 return $conexion;
 }
 $resultado = conexion();
 mysqli_close()
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Prueba PHP</title>
</head>
<body>
 <h1> <?php $resultado = conexion(); ?> </h1>
</body>
</html>