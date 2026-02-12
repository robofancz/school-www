<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cykly test</title>
    <style>
        body{
            background-color: grey;
            color: white;
        }
        table{
            background-color: orange;
            border-style: dashed;
            border-color: black;
            border-width: 3px;
        }
        tr{
        }
        td:hover{
            background-color: blue;
        }
        td{
            background-color: magenta;
            border-style: double;
            border-color: green;
            border-width: 2px;
        }
    </style>
</head>
<body>
    <h1>Test Cykly 27. 1. 2026</h1>
    <p>Martin Doulík I2B S1</p>
    <hr>
    <h4>1. Pomocí cyklu FOR vypište čísla dělitelná pěti na intervalu  od 1 do 100 (obě hodnoty jsou součástí intervalu) a spočítejte, kolik jich je</h4>
    <?php
        $pocet = 0;
        for ($i=1; $i <=100 ; $i++) { 
            if ($i%5==0) {
                $pocet++;
                echo ($i . " | ");
            }
        }
        echo ("<br>Počet čísel odpovídajících podmínkám je: $pocet");
    ?>

    <hr>

    <h4>2. Pomocí cyklu WHILE vyberte z intervalu od 1000 do 1 čísla dělitelná sedmi a zapište je do pole</h4>
    <?php
    
    $a=1000;
        while ($a >= 1) {
            if ($a%7==0) {
                $interval[]=$a;
            }
            $a--;
        }
    ?>

    <hr>

    <h4>3. Pole z příkladu dva vypište do tabulky, zalomte řádky po 10 hodnotách. Tabulku zformátujte v hlavičce (alespoň 10 vlastností tabulky a jejích prvků)</h4>
    <?php
        $radek = 0;
        echo("<table>");
        echo("<tr>");
        foreach ($interval as $key=>$value) {
            echo("<td>");
            echo($value);
            echo("</td>");
            $radek++;
            if ($radek%10==0) {
                echo("</tr><tr>");
            }
        }
        echo("</tr></table>");
    ?>
</body>
</html>