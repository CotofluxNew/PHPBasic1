<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
    <?php
        $x = 6;
        $y = 4;
        $n = 10.10;
        $m = 9.9;

        echo "El valor de cada variable es:<br/>";
        echo "Per X = ".$x."<br/>";
        echo "Per Y = ".$y."<br/>";
        echo "Per N = ".$n."<br/>";
        echo "Per M = ".$m."<br/>";
        echo "<br/>";
        echo "Con los valores X e Y <br/>";
        echo "La suma: x + y = ".$x+$y."<br/>";
        echo "La resta x - y = " .$x-$y."<br/>";
        echo "La producte x * y = ".$x*$y."<br/>";
        echo "La mòdul x % y = ".$x%$y."<br/>";
        echo "<br/>";
        echo "Con los valores N e M <br/>";
        echo "La suma: n + m = ".$n+$m."<br/>";
        echo "La resta n - m = " .$n-$m."<br/>";
        echo "La producte n * m = ".$n*$m."<br/>";
        echo "La mòdul n % m = ".$n%$m."<br/>";
        echo "<br/>";
        echo "Per a totes les variables X, Y, N, M:<br/>";
        echo "<br/>";
        echo "El doble de cada variable x2, y2, n2, m2 <br/> ";
        echo "x * x = ".pow($x,2)."<br/>";
        echo "y * y = ".pow($y,2)."<br/>";
        echo "n * n = ".pow($n,2)."<br/>";
        echo "m * m = ".pow($m,2)."<br/>";
        echo "<br/>";
        echo "La suma de totes x, y, n, m <br/> ";
        echo "x + y + n + m = ".$x+$y+$n+$m."<br/>";
        echo "<br/>";
        echo "El producte de totes x, y, n, m <br/> ";
        echo "x + y + n + m = ".$x*$y*$n*$m."<br/>";


    ?>
</body>
</html>