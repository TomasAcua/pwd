<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - PWD - TP1 </title>
    <link rel="stylesheet" href=".\css\estilos.css">
</head>

<body>
  
    <div id="navbar"></div>
    <section class="contenedor columna">
        <section class="consigna">
            <h3>Ejercicio 5 - Consigna</h3>
            <p>
                Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                un mensaje que indique el tipo de estudios que posee y su sexo.
                
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
            <label for="estudios">Nivel de estudios</label>
            <ul class="ulsimple"> 
                <li>
                    <input type="radio" name="estudios" id="noestudios" checked value="Sin estudios" required>
                    <label for="noestudios">No tiene estudios</label>
                </li>
                <li>
                    <input type="radio" name="estudios" id="primarios" value="Primaria Completa" required>
                    <label for="primarios">Estudios primarios</label>
                </li>
                <li>
                    <input type="radio" name="estudios" id="secundarios" value="Secundaria Completa" required>
                    <label for="secundarios">Estudios secundarios</label>
                </li>
            </ul>
            <label for="sexo">Sexo</label>
            <ul class="ulsimple">
                <li>
                    <input type="radio" name="sexo" id="masculino"  checked  value="masculino" required>
                    <label for="masculino">Masculino</label>
                </li>
                <li>
                    <input type="radio" name="sexo" id="femenino" value="femenino" required>
                    <label for="femenino">Femenino</label>
                </li>
                <li>
                    <input type="radio" name="sexo" id="otro" value="nobinario" required>
                    <label for="otro">No binario</label>
                </li>
            </ul>
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