<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Ruta</title>
</head>
<body>
    <form action="guardar-ruta.php" method="POST">

        ruta <input type="text" name ="ruta"/><br><br> 
        
        horario:

        <select name="horario" id="horario">
            <option value="1">07:00 A 08:00</option>
            <option value="2">07:00 A 09:00</option>   
            <option value="3">07:00 A 10:00</option>
            <option value="4">07:00 A 11:00</option>
            <option value="5">07:00 A 12:00</option>
            <option value="6">07:00 A 13:00</option>
            <option value="7">07:00 A 14:00</option>
            <option value="8">07:00 A 15:00</option>
            <option value="9">07:00 A 16:00</option>
            <option value="10">07:00 A 17:00</option>
            <option value="11">07:00 A 18:00</option>
            <option value="12">07:00 A 19:00</option>
        </select> <br> <br>
        
        costo <input type="text" name="costo"/><br><br>
        
       
        <input type="submit" value="Guardar ruta" >

        <!---<input type="radio" value="1">one</option> 
            <select name="" id=""></select> -->


    </form>


    
</body>
</html>