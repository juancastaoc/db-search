<?php
    $fecha = $_REQUEST ["fecha"];
    $clientes = $_REQUEST ["clientes"];
    $genero= $_REQUEST ["genero"];
    $rutas = $_REQUEST ["rutas"];
    $bus = $_REQUEST ["bus"];
    $costo = $_REQUEST ["rutas"];
    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = "INSERT INTO ticket (id,fecha,id_ruta,id_cliente,genero,id_bus,costo) VALUES (NULL,'$fecha', '$rutas','$clientes', '$genero','$bus', '$costo')";
    
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);

    //4. Ejecuto la sentencia

    $result = $q->execute();
     
    if ($result){
        echo   "El ticket se guardó con exito";
    }
    else {
        echo "Se presento un error creando el ticket $id_cliente";
    }









    

?>