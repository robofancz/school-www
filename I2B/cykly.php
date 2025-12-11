<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cykly</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
        h1,h2,h3{
            text-allign:center;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Cykly</h1>
    <p>
        Cyklus je blok průkazů, který se provede jednou, nebo vícekrát, dokud se nesplní podmínka
    </p>

    <h2>Cykly kontrolující podmínku na začátku</h2>
    <p>
        může se stát, že vyklus neproběhne ani jednou
    </p>

    <h3>Cyklus FOR</h3>
    <?php
        /*
            for (start; podmínka ; změna) { 
                # code...
            }
        */

        //pomocí cyklu for vypište hodnoty proměnné a od 0 do 20.

        for ($a=0; $a < 20; $a++) { 
            echo ($a . ", ");
        }

        //Občas pracujeme s proměnnou, která už byla deklarována. Vypište hodnoty $b od její stávající hodnoty do 20

        echo ("<br><hr>");

        $b = 5;

        for ($b; $b <= 20; $b++) { 
            echo ($b . "|");
        }

        echo ("<br><hr>");
        //Vypište hodnoty $c od 20 do 1. Každou hodnotu nechte vypsat na nový řádek;

        for ($c=20; $c >0 ; $c--) { 
            echo ($c . "<br>");
        }

        echo ("<br><hr>");
        //Vypište hodnoty $d z intervalu od -30 do 30. Každým průchodem cyklu se hodnota proměnné zvýší o 3. Hodnoty oddělte vhodným odělovačem.
        for ($d=-30; $d <=30; $d=$d+3) { 
            echo ($d . ", ");
        }

        echo("<br><hr>");
        //vypište pomocí cyklu for násobky 3 na intervalu <-40,30>
        
        for ($d=-40; $d <=30 ; $d++) { 
            if ($d%3==0) {
                echo($d . " | ");
            }
        }

        echo("<br><hr>")
        //
        
        
    ?>
    
</body>
</html>