<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Bus</title>
</head>
<body>
    <form action="guardar-bus.php" method="POST">

        placa <input type="text" name ="placa"/><br><br> 
        capacidad: 
        <select name="capacidad" id="capacidad">
            <option value="15">15 Pasajeros</option>
            <option value="25">25 Pasajeros</option>
            <option value="35">35 Pasajeros</option>
            <option value="42">42 Pasajeros</option>        
        </select>   <br><br> 

        Nombre conductor <input type="text" name="conductor"/><br><br>
        
       
        <input type="submit" value="Registrar bus" >

        <!---<input type="radio" value="1">one</option> 
            <select name="" id=""></select> -->


    </form>


    
</body>
</html>