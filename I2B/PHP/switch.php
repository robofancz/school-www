<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
        .muz{
            color: blue;
        }
        .zena{
            color: red;
        }
        .ostatni{
            color: green;
        }
    </style>
</head>
<body>
    
<h1>Větvení Programu</h1>
<h2>Větvení pomocí switch</h2>
<p>
    Jedná se o jednoduché větvení které lze použít za specifických podmínek: 
</p>
<li>
    <ul>
        procujeme jen s jednou proměnnou
    </ul>
    <ul>
        nesmí se jednat o interval ale o konkrétní hodnoty
    </ul>
</li>
<p>
    Lze ho vždy nahradit větvením if .. else
</p>
<p>
    Umožňujenám vyhnout se složitým podmínkám
</p>

<?php
    /*
        Obecný zápis:

        switch($promenna)
        {
            case 'hodnota1':
                příkaz;
                .
                .
                .
                break;

            case 'hodnota2':
                příkaz;
                .
                .
                .
                break;
            .
            .
            .
            default: 
            //provede se tehdy když není splněna žádná další varianta
                příkaz;
        }
    */

    //Proměnná $gender může obsahovat hodnoty M, Ž a X. Pomocí větvení switch nechte pro každou kategorii vypsat informaci a barevně ji zvýrazněte (např. identifikujete se jako MUŽ)
    $gender = "M";
    
    switch ($gender) {
        case 'M':
            echo ("Idenfikujete se jako <span class='muz'>MUŽ</span>");
            break;
        
        case 'Ž':
            echo ("Idenfikujete se jako <span class='zena'>ŽENA</span>");
            break;

        case 'X':
            echo ("Idenfikujete se jako <span class='ostatni'>JINÉ</span>");
            break;
        default:
            echo("Chyba");
            break;
    }


    echo ("<br><br>");
    //Předchozí příklad modifikujte tak, že každou s kategorií rozdělíte podle věku na 0-40, 40-100 a ostatní. Výpis upravte podle odpovídající kategorie

    $gender2 = "M";
    $vek = 52;

    switch ($gender2) {
        case 'M':
            echo ("Idenfikujete se jako <span class='muz'>MUŽ </span>");
            if ($vek>=0&&$vek<40)
            {
                echo ("Jste ve věkové kategorii 0-40");
            }
            elseif ($vek>=40&&$vek<100)
            {
                echo ("Jste ve věkové kategorii 40-100");
            }
            elseif ($vek>=100) {
                echo ("Jste ve věkové kategorii 100+");
            }
            else 
            {
                echo ("špatně zadané prametry");
            }

            break;
        
        case 'Ž':
            echo ("Idenfikujete se jako <span class='zena'>ŽENA</span>");
            if ($vek>=0&&$vek<40)
            {
                echo ("Jste ve věkové kategorii 0-40");
            }
            elseif ($vek>=40&&$vek<100)
            {
                echo ("Jste ve věkové kategorii 40-100");
            }
            elseif ($vek>=100) {
                echo ("Jste ve věkové kategorii 100+");
            }
            else 
            {
                echo ("špatně zadané prametry");
            }
            break;

        case 'X':
            echo ("Idenfikujete se jako <span class='ostatni'>JINÉ</span>");
            if ($vek>=0&&$vek<40)
            {
                echo ("Jste ve věkové kategorii 0-40");
            }
            elseif ($vek>=40&&$vek<100)
            {
                echo ("Jste ve věkové kategorii 40-100");
            }
            elseif ($vek>=100) {
                echo ("Jste ve věkové kategorii 100+");
            }
            else 
            {
                echo ("špatně zadané parametry");
            }
            break;
        default:
            echo("Chyba");
            break;
    }
?>






</body>
</html>