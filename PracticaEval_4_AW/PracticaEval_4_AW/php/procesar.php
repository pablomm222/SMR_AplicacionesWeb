<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inscripción recibida</title>
</head>
<body>
    <!-- CAMBIA: pon tu nombre y apellidos -->
    <h1>Práctica 3 de PABLO MARTÍNEZ</h1>
    <h2>Inscripción recibida</h2>

    <?php
        // ESCRIBE AQUÍ TU CÓDIGO PHP:
        // 1. Recoge el nombre, la edad y el ciclo que llegan del formulario
        // 2. Muestra un saludo con el nombre y el ciclo
        // 3. Muestra si es mayor de edad (18 o más) o menor de edad

         // Recojo el nombre enviado por el campo con name, recojo la edad y la convierto en un número entero con intval, recojo el ciclo seleccionado en el formulario
         // muestro el saludo uniendo el texto con las variables creadas
        $nombre = $_POST['nombre'];
        $edad = intval($_POST['edad']);
        $ciclo = $_POST['ciclo'];

        echo "Hola, " . $nombre . ". Te has inscrito en " . $ciclo;

        // Si la edad es 18 o más, muestro que es mayor de edad, si no es mayor de edad con else  muestro que es menor de edad
        if ($edad >= 18) {
            echo "Eres mayor de edad (" . $edad . " años)";
        } else {
            echo "Eres menor de edad (" . $edad . " años)";
        }
    ?>

    <p><a href="formulario.html">Volver al formulario</a></p>
</body>
</html>