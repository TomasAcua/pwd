<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>

<body>
    <!--Formulario que envia el numero a vernumero.php-->
    <div id="navbar"></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 3 - Consigna</h3>
            <p>
                Crear una página php que contenga un formulario HTML como el que se indica en la
                imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                Cambiar el método Post por Get y analizar las diferencias
            </p>
        </section>

        <h3>Resolución</h3>
        <form action="../vista/accion/accion_persona.php" method="post" class="columna">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" required>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" required>
            <input type="submit" class="boton" value="Enviar">
        </form>





    </section>

</body>
<script src="/tp1/vista/js/navegacion.js"></script>

</html>