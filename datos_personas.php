<?php

 header("Content-Type: application/json; charset=UTF-8");

 $n = $_GET['texto'];
 $conexion = mysqli_connect( "localhost", "root", "", "bd_1prueba");

 $sql = "SELECT * FROM datos WHERE nombres like '%$n%'";

 $resultado = $conexion->query($sql);

 $filas = $resultado->fetch_all(MYSQLI_ASSOC);
 $filas = json_encode( $filas);
 echo $filas;
  //echo json_encode( $filas );
 


?>