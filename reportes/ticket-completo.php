<?php

use function PHPSTORM_META\elementType;

$where = '';

if (isset($_REQUEST ['costo'])){
    $costo =$_REQUEST['costo'];
    if ($costo !=""){
    $where = "WHERE r.costo = '$costo'";   
    }
}


if (isset($_REQUEST ['genero'])){
    $genero =$_REQUEST['genero'];
    if ($genero !=""){
        if($where == ""){
            $where = "WHERE cl.genero = '$genero'";
        }
        else{
           $where = "$where AND cl.genero = '$genero'"; 
        }   
    }
       
}





 





    //1. Conectando a la base de datos
    $host= "localhost";
    $dbname ="terminal";
    $usurname = "root";
    $password = "";

    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$usurname,$password);
    
    //2. Construir la sentencia
    $sql = " SELECT cl.nombre, cl.genero, cl.direccion, cl.celular, r.ruta, b.placa, r.costo FROM clientes as cl JOIN ticket tk ON cl.id = tk.id_cliente JOIN rutas r ON  tk.id_ruta = r.id	  JOIN bus b ON  b.id = tk.id_ruta $where  ORDER BY cl.nombre ASC ";
    //3. Preparar la sentencia 
   $q = $cnx ->prepare($sql);

    //4. Ejecuto la sentencia

    $result = $q->execute();

    $tickets = $q->fetchAll();
     
    var_dump($sql );  
  
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listado de tickes</title>
 </head>
 <body>


    <form action="ticket-completo.php">
        Genero
           <select name="genero">
            <option value="" >select</option>
            <option value="0">Femenino</option>
            <option value="1">Masculino</option>
        </select>
        <br><br>
        Costo <input type="number" name="costo">
       
        <br><br>
       <input type="submit" value="Buscar">
    <hr>
    </form>

    <h1>Listado de Tickets</h1>
    <table border ="1">
        <tr>
            <td>
                Nombre cliente
            </td> 
            <td>
                Genero
            </td>
            <td>
                Celular
            </td> 
            <td>
                Ruta
            </td> 
            <td>
                Direccion 
            </td> 
            <td>
                Placa
            </td>
            <td>
                Costo
            </td>
               
        </tr>

        
<?php
    for($i=0; $i<count($tickets); $i++) {
?>
       
       <tr>
            <td>
                <?php echo $tickets [$i] [ "nombre"]  ?>
            </td> 
            <td>
                <?php 
                $genero = $tickets [$i] [ "genero"]  ;
                if($genero == "0"){
                    echo "Femenino";
                }
                else {
                    echo "Masculino";
                }
                ?>
            </td> 
            <td>
                <?php echo $tickets [$i] [ "celular"]  ?>
            </td>
            <td>
                <?php echo $tickets [$i] [ "ruta"]  ?>
            </td> 
            <td>
                <?php echo $tickets [$i] [ "direccion"]  ?>
            </td> 
            <td>
                <?php echo $tickets [$i] [ "placa"]  ?>
            </td> 
            <td>
                <?php echo $tickets [$i] [ "costo"]  ?>
            </td> 
        </tr>
           
<?php           
    }
?>

      
     </table>
 </body>
 </html>   