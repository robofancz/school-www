<?php
$text1 = "Říjen";
$rok = 2025;
$den = 9;

echo "<span class= 'den'>$den</span>" . " " . $text1 . " " . $rok;
echo "<br>";
echo "<br>";


$skola = "učitel | žák | tabule | křída | lavice | sešit | učebnice | třída | známka | pololetí | test | domácí úkol | přestávka | zvonění | ředitel | školník | družina | sborovna | rozvrh | školní jídelna | školní rok | vysvědčení | maturita | třídní schůzky | výlet | exkurze | kroužek | školní batoh | aktovka | propiska | tužka | guma | pravítko | pastelky | fixy | učivo | osnovy | školní řád | hodina | suplování | internet ve škole | informatika | tělocvik | výtvarná výchova | dějepis | matematika | chemie | fyzika | biologie | čeština";

$skola = explode("|", $skola);

asort($skola);

print_r($skola);

echo "<br>";
echo "<br>";


$skola[10] = "PODMÍNEČNÉ VYLOUČENÍ";

print_r($skola);
echo "<br>";
echo "<br>";



unset($skola[28]);
print_r($skola);
echo "<br>";
echo "<br>";


$skola[] = "HOTOVO";
print_r($skola);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .den {
            color: red;
        }
    </style>
</head>
<body>
    
</body>
</html>