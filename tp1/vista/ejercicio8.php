<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>

<body>

    <div id="navbar"></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 8 - Consigna</h3>
            <p>
                La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en
                función de la edad y de la condición de estudiante del cliente. Desea que sean los propios
                clientes los que puedan calcular el valor de sus entradas a través de una página web. Si
                es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual
                de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un
                formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con
                un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.
                Agregar un botón para limpiar el formulario y volver a consultar.
            </p>

        </section>


        <h3>Resolución</h3>
        <form action="../vista/accion/accion_calcularEntrada.php" method="post" onsubmit="return validar()" class="columna">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" min="0" max="150" required>
            <div class="fila">
            <label for="estudiante">¿Sos Estudiante?</label>
            <input type="checkbox" name="estudiante" id="estudiante">
            </div>
           
           <div class="fila">
            <input type="reset" class="boton" value="Limpiar"><input type="submit" class="boton" value="Enviar">
           </div> 
        </form>
    </section>

</body>
<script src="/tp1/vista/js/navegacion.js"></script>
<script type="text/javascript">
    function validar() {
      
    }
</script>

</html>