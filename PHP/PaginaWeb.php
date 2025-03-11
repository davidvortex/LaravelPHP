<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="Introduccion.php" method="GET">
        <label>
            Nombre:
            <input type="text" name="nombre2">
        </label>
        <br>
        <label>
            Edad:
            <input type="number" name="edad1">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    
    <form action="Introduccion.php" method="POST">
        <label>
            Nombre:
            <input type="text" name="nombre3">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>

    <form action="Introduccion.php" method="REQUEST">
        <label>
            Nombre:
            <input type="text" name="nombre4">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>