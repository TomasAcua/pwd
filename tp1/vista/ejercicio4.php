<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>

<body>

    <div id="navbar"></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 4 - Consigna</h3>
            <p>
                Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                persona es mayor de edad o no; (si la edad es mayor o igual a 18).
                Enviar los datos usando el método GET y luego probar de modificar los datos
                directamente en la url para ver los dos posibles mensajes.
            </p>
        </section>


        <h3>Resolución</h3>
        <form action="../vista/accion/accion_persona.php" method="get" onsubmit="return validar()" class="columna">
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
<script type="text/javascript">
    function validar() {
        const edad = document.getElementById("edad").value;
         if (edad < 0) {
            alert("La edad no puede ser negativa");
            return false;
        }
    }
</script>

</html>