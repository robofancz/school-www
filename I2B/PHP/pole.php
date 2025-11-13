<?php
$num = 0;
$ovoce = "../data/ovoce.txt";

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <style>
        h1, h4 {
            color: red;
        }

    </style>
    <title>Pole</title>
</head>
<body>
    <h1>Pole - Array</h1>
    <?php
        echo "Pole je datová struktura, sdružující daný konečný počet prvků";
        echo "<br>";
        echo "Pole je v podstatě proměnná, která může obsahovat více hodnot najednou";
        echo "<br>";
        echo "Poloha každého prvku v poli je jednoznačně určena jeho indexem";
        echo "<br>";
        echo "Indexování prvků v poli začíná na nule";
        echo "<br>";
        echo "<h4>Definice pole po prvcích</h4>";
        $nova_zakyne = "Eva";

        $jmeno[0] = "Jan";
        $jmeno[1] = "Petr";
        $jmeno[2] = "Anna";
        $jmeno[3] = $nova_zakyne;


        echo "<br>";
        echo "<h4> Definice pole v jednom kroku</h4>";
        $obili = array("pšenice", "ječmen", "oves", "rye");


        echo $jmeno;
        echo "<br>";
        echo $jmeno[0]; 
        echo "<br>";
        echo $jmeno[1];
        echo "<br>";
        echo $jmeno[2];
        echo "<br>";
        echo $jmeno[3];
        echo "<br>";
        // Vypsání celého pole
        echo "<h4>Celá pole:</h4>";
        echo "<pre>";
        print_r($jmeno);
        echo "</pre>";
        echo "<br>";
        print_r($jmeno);
        // Určení počtu prvků v poli
        $pocet_prvku = count($jmeno);
        echo "<br>";
        echo "Počet prvků v poli: " . $pocet_prvku;

    ?>

    <h4>Práce s prvky pole</h4>
    <?php
        // Přidání prvku na libovolné místo 
        $jmeno[6] = "Siflidá";
        echo "<br>";
        print_r($jmeno);

        $jmeno[5] = "Květoslat";
        echo "<br>";
        print_r($jmeno);

        // Změna hodnoty existujícího prvku (Opětovné nadefinování)
        $jmeno[5] = "Xena";
        echo "<br>";
        print_r($jmeno);

        // Přidání nového prvku na konec pole
        $jmeno[] = "Lukrecie";
        echo "<br>";
        print_r($jmeno);


        // Odebrání prvku pole
        unset($jmeno[5]);
        echo "<br>";
        print_r($jmeno);

        // // Seřazení pole podle abecedy
        // sort($jmeno);
        // echo "<br>";
        // print_r($jmeno);
    ?>
    <h4>Řazení prvků v poli</h4>
    <?php
    // Prvky můžeme řadit buď podle hodnotu nebo podle hdnoty indexu
    // řazení může probíhat vzestupně, nebo sestupně
    // podle hodnoty je to buď příkaz asort anebo arsort
    // podle indexu je to příkaz ksort anebo arsort

        sort($jmeno);
        echo "<br>";
        print_r($jmeno);

        asort($jmeno);
        echo "<br>";
        print_r($jmeno);

        asort($jmeno);
        echo "<br>";
        print_r($jmeno);

        ksort($jmeno);
        echo "<br>";
        print_r($jmeno);
    ?>
    <h4>Asociativní pole</h4>
    <?php
        //takové pole, které místo indexů vuyžívá klíče, což je řetězec, který lidem usnadní orioentaci v datech

        $kraje = array(
                        "A" => "Hlavní město Praha",
                        "B" => "Středočeský kraj",
                        "C" => "Jihočeský kraj",
                        "D" => "Plzeňský kraj",
                        "E" => "Karlovarský kraj"
                );
        print_r($kraje);
        echo "<br>";

        
    ?>
    <h4>Funkce Explode</h4>
    <?php
        // explode umožní vytvořit z řetězce s jasně daným oddělovačem pole, kde potom můžete pracovat s jednotlivými prvky

        $text = "škoda, VW, Audi, BMW, Mercedes, Toyota";
        echo $text;
        echo "<br>";
        // Syntaxe: explode(oddělovač, zdroj dat, maximální počet částí)
        $auta = explode(", ", $text);
        print_r($auta);
    ?>


</body>
</html>