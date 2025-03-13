<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

    <h1>Formulario</h1>

    <!-- Formulario GET -->
    <h2>Usando el método GET</h2>
    <form action="Introduccion.php" method="GET">
        <label>
            Nombre: <input type="text" name="nombre2">
        </label>
        <br>
        <label>
            Edad: <input type="number" name="edad1">
        </label>
        <br>

        <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo" value="Masculino"> Masculino
        </label>
        <label>
            <input type="radio" name="sexo" value="Femenino"> Femenino
        </label><br>

        <p>Roles:</p>
        <label>
            <input type="checkbox" name="roles[]" value="Administrador"> Administrador
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Auxiliar"> Auxiliar
        </label>
        <label>
            <input type="checkbox" name="roles[]" value="Clientes"> Clientes
        </label>
        <br><br>

        <label>
            Imagen:<br><input type="file" name="imagen">
        </label>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <hr>

    <!-- Formulario POST -->
    <h2>Usando el método POST</h2>
    <form action="Introduccion.php" method="POST" enctype="multipart/form-data">
        <label>
            Nombre: 
            <input type="text" name="nombre3">
        </label>
        <br>
        <label>
            Edad: 
            <input type="number" name="edad2">
        </label>
        <br>

        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

        <!-- <p>Sexo:</p>
        <label>
            <input type="radio" name="sexo2" value="Masculino"> 
            Masculino
        </label>
        <label>
            <input type="radio" name="sexo2" value="Femenino"> 
            Femenino
        </label>
        <br> -->

        <p>Roles:</p>
        <label>
            <input type="checkbox" name="roles2[]" value="Administrador"> 
            Administrador
        </label>
        <label>
            <input type="checkbox" name="roles2[]" value="Auxiliar"> 
            Auxiliar
        </label>
        <label>
            <input type="checkbox" name="roles2[]" value="Clientes"> 
            Clientes
        </label>
        <br><br>

        <label>
            Imagen:
            <br><input type="file" name="imagen">
        </label>
        <br><br>

        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" cols="20" rows="10">  </textarea>
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <hr>

    <!-- Formulario REQUEST -->
    <h2>Usando el método REQUEST</h2>
    <form action="Introduccion.php" method="POST">
        <label>
            Nombre: 
            <input type="text" name="nombre4">
        </label>
        <br>
        <label>
            Edad: 
            <input type="number" name="edad3">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>
