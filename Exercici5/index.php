<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici5</title>
</head>
<body>
    <?php
        $array1 =array(1,2,3,4,5);
        $array2 =array(3,3,3);

        array_push($array2,4);
        echo "Imprimir la array con un cuarto miembro gracias a la array_push <br/>";
        print_r($array2);
        
        echo "<pre>Imprimir la array con un cuarto miembro gracias a la array_push  </pre>";
        $novaArray = array_merge($array1, $array2);
        print_r($novaArray);

    ?>
</body>
</html>