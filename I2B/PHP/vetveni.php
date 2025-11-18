<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Větvení PHP</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
        h1, h2, h3{
            color: #333;
        }
        h1{
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <h1>Větvení programu</h1>
    <p>
        Umožňuje vykonat jen část programu na základě splnění nebo nesplnění vstupní podmínky.
    </p>
    <h2>Větvení typu IF() ... ELSE()</h2>
    <p>
        Univerzální typ větvení které lze využít v každé situaci
    </p>

<?php
    // IF();
        // funkce IF může existovat samostatně
        // větev IF musí být v rámci větvení vždy zapsána jako první
        // Jedno větvení může obsahovat jen jedno IF

    // Příklad: Rozhodněte jestli je hodnota $cislo kladná a vypište ji
    // $cislo = 1;
    // $cislo = -1;
    $cislo = 0;
    if ($cislo == 0)
    {
        echo("Cislo se = " . $cislo);
        echo("<br>Proměná číslo je nula");
    }
    elseif ($cislo > 0)
    {
        echo("Cislo se  = " . $cislo);
        echo("Proměnná číslo je kladné číslo");
    }
    else
    {
        echo("Cislo se  = " . $cislo);
        echo("Proměnná číslo je záporné číslo");
    }
?>
<p>
    Pomocí jen jednoho větvení rozdělte čísla na kladná, záporná, sudá a lichá. Nulu ošetřete v samostatné větvi. Pro každou kategorii vypište hodnotu proměnné a o jakou skupinu čísel se jedná.
</p>
<?php
    $cislo = -7;
    if ($cislo<0 && $cislo%2==0)
    {
        echo ($cislo . " je sudé a záporné");
    }
    elseif($cislo<0 && $cislo%2!=0)
    {
       echo ($cislo . " je liché a záporné");
    }
    elseif ($cislo> 0&& $cislo%2==0)
    {
        echo ($cislo . " je sudé a kladné");
    }
    elseif ($cislo>0 && $cislo%2!=0)
    {
        echo ($cislo . " je liché a kladné");
    }
    else
    {
        echo ($cislo . "je 0");
    }
?>

</body>
</html>