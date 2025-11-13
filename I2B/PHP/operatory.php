<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
        h1, h3{
            color: blue;
            text-align: center;
        }
        .operator{

        }
    </style>
</head>
<body>
    <h1>Operátory</h1>
    <h3>Aritmetické operátory</h3>
    <?php
        // Nadefinujte proměnné a, b, c a vložte do nich hodnoty
        $a = 42;
        $b = -8;
        $c = 3;

        // Definujte proměnnou výsledek a vložte do ní součet hodnot $a a $b
        $vysledek = $a + $b;
        echo $vysledek;

        echo ("<br>");

        // Vypište podíl funkcí $a a $c
        echo $a / $c;

        echo ("<br>");

        // Součet hodnot $a a $b vydělte $c
        echo ($a+$b)/$c;

        echo ("<br>");

        // Vypište hodnotu $b na $c
        echo $b**$c;

        echo ("<br>");

        $rc = '0701313202182'
    ?>
    <h3>Logické operátory</h3>
    <?php
    $f = 5;
    if ($f < 10 && $f >= -10) {
        echo "Hodnota $f je v rozmezí.";
    }
    else {
        echo "Hodnota $f není v rozmezí.";
    }
    ?>
    
</body>
</html>