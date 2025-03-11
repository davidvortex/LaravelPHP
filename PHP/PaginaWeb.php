<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    Usando el motodo GET
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


        <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo" value="Masculino">
            Masculino:
        </label>
        <label>
            <input type="radio" name="sexo" value="Femenino">
            Femenino:
        </label>
        <br>


        <p>Roles:</p>
        <label>
            <input type="checkbox" name="roles[]" value="Administrador">
            Administrador:
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Auxiliar">
            Auxiliar:
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Clientes">
            Clientes:
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <br>


    <hr>
    Usando el motodo POST

    <form action="Introduccion.php" method="POST">
        <label>
            Nombre:
            <input type="text" name="nombre3">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <br>
    <br>


    <hr>
    Usando el motodo REQUEST

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