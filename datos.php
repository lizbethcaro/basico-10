<?php

    header("Content-Type: application/json; charset=UTF-8");

    $n = $_GET[ 'mivalor' ] ;
    $inicio = $_GET[ 'in' ];
    $final = $_GET[ 'fn' ];
    
    //$_GET[2];

    /*$renglon = "";

    $conexion = mysqli_connect( "localhost", "root", "", "bd_1prueba");
    $sql = "SELECT nombre FROM datos";
    $resultado = $conexion->query( $sql);

    //echo mysqli_num_rows( $resultado); //número de filas

    while( $fila = mysqli_fetch_array( $resultado))
    {
        $renglon .= '{"nombre":"'.$fila[0].'"},';
    }

    //$salida = '{"records":[{"nombre":"Deimi"},{"nombre":"Maria"},{"nombre":"Pablo"}]}';
    $salida = '{"records":['.$renglon.']}';

    $salida = str_replace( "},]}", "}]}", $salida);*/

    
    
    //$n = $n * 3;
    $datos = "";
    for( $i = $inicio; $i <= $final ; $i ++) 
    {
        $r = $n * $i;
        $datos .= ', { "nombre": "' . "$n x $i = $r" . '" }';
     }

     $datos = ltrim(  $datos, ", " );
    //$salida = '{"records":[{"nombre":"'.$n.'"}]}';
   
    $salida = '{"records":['. $datos . ']}';
   
  
    echo $salida;
    //echo $_GET[$salida];



