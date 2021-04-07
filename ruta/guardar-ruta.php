<?php
    $ruta = $_REQUEST ["ruta"];
    $horario = $_REQUEST ["horario"];
    $costo = $_REQUEST ["costo"];
    
    
    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = "INSERT INTO rutas (id,ruta,horario,costo) VALUES (NULL,'$ruta','$horario','$costo')";
    
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);

    //4. Ejecuto la sentencia

    $result = $q->execute();
     
    if ($result){
        echo   "La ruta se guardo con exito";
    }
    else {
        echo "Se presento un error creando la ruta $ruta";
    }









    

?>