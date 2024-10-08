<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>

<body>

    <div id="navbar"></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 7 - Consigna</h3>
            <p>
                Crear una página con un formulario que contenga dos input de tipo text y un select. En
                los inputs se ingresarán números y el select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que
                procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                formulario:
            </p>

        </section>


        <h3>Resolución</h3>
        <form action="../vista/accion/accion_operar.php" method="post" onsubmit="return validar()" class="columna">
            <label for="op1" id="labeloperando1">Numero 1</label>
            <input type="text" name="op1" id="op1" required>
            <label for="operacion" >Operacion</label>
              <select name="operacion" id="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
            </select>
            <label for="op2" id="labelnumero2">Numero 2</label>
            <input type="text" name="op2" id="op2" required>
           
            <input type="submit" class="boton" value="Enviar">
        </form>
    </section>

</body>
<script src="/tp1/vista/js/navegacion.js"></script>
<script type="text/javascript">
    function validar() {
        const op1 = document.getElementById("op1").value;
        const op2 = document.getElementById("op2").value;
        if(op1 == "" || op2 == ""){
            alert("Debe ingresar ambos operandos");
            return false;
        }
        if (isNaN(op1) || isNaN(op2)) {
            alert("Los operandos deben ser numeros");
            return false;
        }
    }
</script>

</html>