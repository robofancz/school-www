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
    elseif ($cislo == 0)
    {
        echo ($cislo . "je 0");
    }
    else
    {
        echo ("špatně zadaná hodnota");
    }
?>
<h2>Větvení pomocí vloženého větvení</h2>
<?php
    $cislo3 = 42;
    echo ("Hodnota proměnné " . '$cislo3' .  " je: "  . $cislo3 . "<br>");
    if($cislo3>0)
    {
        echo ("Proměnná je kladná a ");
        if ($cislo3%2==0)
        {
            echo ("sudá.");
        }
        else
        {
            echo ("lichá.");
        }
    }
    elseif($cislo3<0)
    {
        echo ("Proměnná je záporná a ");
        if ($cislo3%2==0)
        {
            echo ("sudá.");
        }
        else
        {
            echo ("lichá.");
        }
    }
    elseif($cislo=0)
    {
        echo("Zadaná hodnota je 0");
    }
    else
    {
        echo ("špatně zadaná hodnota");
    }

    echo ("<br>");

    $promenna = 12;
    if ($promenna>=-500 && $promenna<=500)
    {
        if ($promenna%6==0)
        {
            echo("<p style = 'color: red'>$promenna</p>");
        }
        elseif ($promenna%7==0)
        {
            echo ("<p style = 'color: blue'>$promenna</p>");
        }
        else
        {
            echo ("Zadaná hodnota není dělitelná 6 ani 7");
        }
    }
    else
    {
        echo ("Zadaná hodnota není v poli -500, 500");
    }
?>

<h2 class>Switch</h2>

<?php
    
?>

</body>
</html>