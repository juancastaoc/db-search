<?php
    $cedula = $_REQUEST ["cedula"];
    $genero =$_REQUEST ["genero"];
    $nombre = $_REQUEST ["nombre"];
    $direccion = $_REQUEST ["direccion"];
    $celular = $_REQUEST ["celular"];
    
    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = "INSERT INTO clientes (id,cedula,genero,nombre,direccion,celular) VALUES (NULL,'$cedula','$genero','$nombre','$direccion','$celular')";
    
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);

    //4. Ejecuto la sentencia

    $result = $q->execute();
     
    if ($result){
        echo   "El cliente se guardo con exito";
    }
    else {
        echo "Se presento un error creando cliente $nombre";
    }









    

?>