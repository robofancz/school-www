<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Větvení test</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <h2>1.</h2>
    <?php
        $rasa = "člověk";

        switch ($rasa) {
            case 'člověk':
                echo ("<p class='clovek'> Hodnota proměnné " . '$rasa' . " je člověk. </p>");
                break;

            case 'ufon':
                echo ("<p class='ufon'> Hodnota proměnné " . '$rasa' . " je ufon. </p>");
                break;

            case 'marťan':
                echo ("<p class='martan'> Hodnota proměnné " . '$rasa' . " je marťan. </p>");
                break;
            
            default:
                echo ("<p class='neznama'> Neznámá entita. </p>");
                break;
        }
    ?>
    <br>
    <h2>2.</h2>
    <?php
        $vek = 18;
        if ($vek>=0 && $vek<=18) {
            if ($vek == 0) {
                echo("Nový přírůstek");
            }
            else {
                echo("Jste v kategorii 0-18");
            }
        }
        elseif ($vek>18 && $vek<=40) {
            echo("Jste v kategorii 18-40");
        }
        elseif ($vek>40 && $vek<100) {
            echo("Jste v kategorii 40-100");
        }
        elseif ($vek<0) {
            echo("Věk nemůže být záporný");
        }
        else {
            echo ("Jste v kategorii 100+");
        }

    ?>
</body>
</html>
