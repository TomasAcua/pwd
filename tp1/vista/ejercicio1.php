<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>
<body>
    <!--Formulario que envia el numero a vernumero.php-->
    <div ></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 1 - Consigna</h3>
            <p>
                Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior
            </p>
        </section>

        <h3>Resolución</h3>

        <form action="accion\accion_numero.php" method="post">
            <label for="numero">Ingrese un numero</label>
            <input type="number" name="f_num" id="f_num" required>
            <input type="submit" class="boton" value="Enviar">
        </form>
    </section>
   
</body>

<script src="./js/navegacion.js"></script>

</html>