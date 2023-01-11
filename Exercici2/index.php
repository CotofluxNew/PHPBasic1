<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici2</title>
</head>
<body>
    <?php 

        $stringApintar = "Hello, World!";
        echo  $stringApintar;

        echo "<H1>Convertir a majúscules</h1>";
        echo strtoupper($stringApintar);

        echo "<H1>Imprimir per pantalla la longitud de la variable</h1>";
        echo strlen($stringApintar);

        echo "<H1>Imprimir per pantalla en ordre invers els carácters</h1>";
        echo strrev($stringApintar);

        $novaVariable = "Aquest és el curs de PHP";
        echo "<H1>Imprimeixo per pantalla les dues strings</h1>";
        echo $stringApintar." ".$novaVariable
    ?>
</body>
</html>