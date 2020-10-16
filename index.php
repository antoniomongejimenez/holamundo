<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hola Mundo</title> 
    </head>
    <body>
        <form action="saluda.php" method="get">
            <label for="nombre">Escribe tu nombre:</label>
            <input type="text" name="nombre" id="nombre"><br/>
            <label for="anyo">Escribe tu año de nacimiento:</label>
            <input type="text" name="anyo" id="anyo" size="10">
            <button type="submit">Saludar</button>
        </form>  
    </body>
</html>