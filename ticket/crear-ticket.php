<?php

    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = "SELECT id, nombre FROM  clientes"; 
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);
    //4. Ejecuto la sentencia
    $result = $q->execute();
    $clientes = $q->fetchAll();

    //2. Construir la sentencia
    $sql = "SELECT id, ruta FROM  rutas"; 
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);
    //4. Ejecuto la sentencia
    $result = $q->execute();
    $rutas = $q->fetchAll();
   
    //2. Construir la sentencia
    $sql = "SELECT id, placa FROM  bus"; 
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);
    //4. Ejecuto la sentencia
    $result = $q->execute();
    $bus = $q->fetchAll();

    //2. Construir la sentencia
    $sql = "SELECT id, costo FROM  rutas"; 
    //3. Preparar la sentencia 
    $q = $cnx ->prepare($sql);
    //4. Ejecuto la sentencia
    $result = $q->execute();
    $costo = $q->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ticket</title>
</head>
<body>
    <form action="guardar-ticket.php" method="POST">

        fecha <input type="text" name ="fecha"/><br><br>

        Cliente:
        <select name="clientes" id="">
<?php
        for ($i=0; $i<count($clientes); $i++){
?>        
        <option value="  <?php echo $clientes [$i] ["id"] ?> "> 
        <?php echo $clientes [$i] ["nombre"] ?>          
        </option>
<?php   

        }
?>
        </select>

        <input type="radio" name="genero" value="0">femenino</option> 
        <input type="radio" name="genero" value="1">masculino</option><br><br>

        Rutas:
        <select name="rutas" id="">
<?php
        for ($i=0; $i<count($rutas); $i++){
?>        
        <option value="  <?php echo $rutas [$i] ["id"] ?> "> 
        <?php echo $rutas [$i] ["ruta"] ?>          
        </option>
<?php   

        }
?>
        </select>

        Bus de Placa:
        <select name="bus" id="">
<?php
        for ($i=0; $i<count($bus); $i++){
?>        
        <option value="  <?php echo $bus [$i] ["id"] ?> "> 
        <?php echo $bus [$i] ["placa"] ?>          
        </option>
<?php   

        }
?>
        </select> <br> <br>

        Costo:
        <select name="rutas" id="">
<?php
        for ($i=0; $i<count($costo); $i++){
?>        
        <option value="  <?php echo $costo [$i] ["id"] ?> "> 
        <?php echo $costo [$i] ["costo"] ?>          
        </option>
<?php   

        }
?>
        </select><br><br>


        
            
        <input type="submit" value="Guardar-ticket" >

        <!---<input type="radio" value="1">one</option> 
            <select name="" id=""></select> -->


    </form>
      
</body>
</html>