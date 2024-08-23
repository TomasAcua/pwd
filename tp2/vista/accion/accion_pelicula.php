<?php

include_once "../../control/Pelicula.php";
include_once "../../utils/functions.php";

$datos = darDatosSubmitted();

if ($_POST){

     $pelicula = new Pelicula();
     $pelicula->setTitulo($datos['titulo']);
     $pelicula->setActores($datos['actores']);
     $pelicula->setDirector($datos['director']);
     $pelicula->setGuion($datos['guion']);
     $pelicula->setProduccion($datos['produccion']);
     $pelicula->setAnio($datos['anio']);
     $pelicula->setNacionalidad($datos['nacionalidad']);
     $pelicula->setGenero($datos['genero']);
     $pelicula->setDuracion($datos['duracion']);
     $pelicula->setSinopsis($datos['sinopsis']);

     $textoEdad = $pelicula->devolverRestriccionEdad();
     $contenido = '<body>
    <div class="container mt-5">
         <div class="alert alert-success">
             <h4 class="alert-heading">La película introducida es</h4>
            <p class="cusP fs-4">
                T&iacute;tulo: '.$pelicula->getTitulo().'<br/>
                Actores: '.$pelicula->getActores().'<br/>
                Director: '.$pelicula->getDirector().'<br/>
                Gui&oacute;n: '.$pelicula->getGuion().'<br/>
                Producci&oacute;n: '.$pelicula->getProduccion().'<br/>
                A&ntilde;o: '.$pelicula->getAnio().'<br/>
                Nacionalidad: '.$pelicula->getNacionalidad().'<br/>
                G&eacute;nero: '.$pelicula->getGenero().'<br/>
                Duraci&oacute;n: '.$pelicula->getDuracion().'min<br/>
                Sinopsis: '.$pelicula->getSinopsis().'
            </p>
        </div>
    </div>
</body>';
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Película</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>

    <?php
    echo $contenido;
    ?>


    </body>
</html>