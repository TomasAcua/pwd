<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cinem@s</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <form id="cinemaForm" action="../vista/accion/accion_pelicula.php" method="POST">
            <h3 class="text-center">🎬 Cinem@s</h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="actores">Actores</label>
                    <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="director">Director</label>
                    <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="guion">Guión</label>
                    <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="produccion">Producción</label>
                    <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Producción" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="anio">Año</label>
                    <input type="number" class="form-control" id="anio" name="anio" placeholder="Año" maxlength="4" required>
                    <small class="text-danger" id="anioError"></small>
                </div>
                <div class="form-group col-md-3">
                    <label for="nacionalidad">Nacionalidad</label>
                    <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="genero">Género</label>
                    <select class="form-control" id="genero" name="genero" required>
                        <option value="">Seleccionar género</option>
                        <option value="Comedia">Comedia</option>
                        <option value="Drama">Drama</option>
                        <option value="Terror">Terror</option>
                        <option value="Románticas">Románticas</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Otras">Otras</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="duracion">Duración (minutos)</label>
                    <input type="number" class="form-control" id="duracion" name="duracion" placeholder="Duración" maxlength="3" required>
                    <small class="text-danger" id="duracionError"></small>
                </div>
                <div class="form-group col-md-3">
                    <label>Restricciones de edad</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion_edad" id="todoPublico" value="Todo Público" required>
                        <label class="form-check-label" for="todoPublico">Todo Público</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion_edad" id="mayores7" value="Mayores de 7 años">
                        <label class="form-check-label" for="mayores7">Mayores de 7 años</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="restriccion_edad" id="mayores18" value="Mayores de 18 años">
                        <label class="form-check-label" for="mayores18">Mayores de 18 años</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="sinopsis">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#cinemaForm').on('submit', function(e) {
                let valid = true;

                // Validación del campo "Año"
                const anio = $('#anio').val();
                if (anio.length !== 4 || isNaN(anio)) {
                    $('#anioError').text('El año debe ser un número de 4 dígitos.');
                    valid = false;
                } else {
                    $('#anioError').text('');
                }

                // Validación del campo "Duración"
                const duracion = $('#duracion').val();
                if (duracion.length > 3 || isNaN(duracion)) {
                    $('#duracionError').text('La duración debe ser un número de hasta 3 dígitos.');
                    valid = false;
                } else {
                    $('#duracionError').text('');
                }

                // Evitar el envío del formulario si alguna validación falla
                if (!valid) {
                    e.preventDefault();
                }
            });
        });
    </script>
</body>
</html>
