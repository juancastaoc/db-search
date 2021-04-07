<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>
    <form action="guardar-cliente.php" method="POST">

        cedula <input type="text" name ="cedula"/><br><br>
        <input type="radio" name="genero" value="0">femenino</option> 
        <input type="radio" name="genero" value="1">masculino</option><br><br>
        nombre <input type="text" name= "nombre"/><br/> <br>
        direccion <input type="text" name="direccion"/><br><br>
        celular <input type="text" name="celular"> <br> <br>
       
        <input type="submit" value="Guardar cliente" >




    </form>


    
</body>
</html>