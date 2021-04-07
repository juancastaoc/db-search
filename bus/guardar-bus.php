<?php
    $placa = $_REQUEST ["placa"];
    $capacidad = $_REQUEST ["capacidad"];
    $conductor = $_REQUEST ["conductor"];
    
    
    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = "INSERT INTO bus (id,placa,capacidad,conductor) VALUES (NULL,'$placa','$capacidad','$conductor')";
    
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);

    //4. Ejecuto la sentencia

    $result = $q->execute();
     
    if ($result){
        echo   "El bus se registro con exito";
    }
    else {
        echo "Se presento un error al registrar el bus de placa $placa";
    }









    

?>