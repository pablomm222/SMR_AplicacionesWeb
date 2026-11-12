<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> Nota media</title>
</head>
<body>
    <h1>Pablo Martínez</h1>
    <h2>Nota media</h2>

    <?php
    
        $modulo = "Aplicaciones Web";

        // Guardo tres notas y las sumo y después divido el resultado entre 3
        $nota1 = 7;
        $nota2 = 9;
        $nota3 = 8;

        $media = ($nota1 + $nota2 + $nota3) / 3;

        echo $modulo . ": mis notas son " . $nota1 . ", " . $nota2 . " y " . $nota3 . ". Mi media es " . $media . ".</p>";

        // Por ultimo he comprobado si la media llega a 5 para mostrar el resultado
        if ($media >= 5) {
            echo "Aprobado";
        } else {
            echo "Suspenso";
        }
    ?>
</body>
</html>