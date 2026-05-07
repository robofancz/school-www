<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce s číslelnými hodnotami</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    <h1>Práce s číslelnými hodnotami</h1>
    <h2>Generátor náhodných čísel</h2>
    <p>
        Pro generování se používá fce mt_rand(min, max); 
    </p>
    <?php
        echo (mt_rand(1,10));
    ?>
    <p>
        Vytvořte formulář, ve kterém uživatel zadá minimální a maximální hodnotu a po odeslání se mu vygeneruje nádhodné číslo ze zvoleného intervalu a vypište ho na konec té samé tabulky
    </p>
    <p>
        Přidejte pole, které umožní zvolit počet náhodných čísel, které se vypíšou (max 20) a vypište je na další řádek tabulky i s informací, kolik jich je
    </p>
    <div class="container">
        <table>
            <form action="#" method="get">
                <tr>
                    <th colspan="2">Generátor náhodného čísla z intervalu</th>
                </tr>
                <tr>
                    <td>
                        <label for="min">Zadejte minimální hodnotu intervalu</label>
                    </td>
                    <td>
                        <input type="number" name="min" id="min">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="max">Zadejte maximální hodnotu intervalu</label>
                    </td>
                    <td>
                        <input type="number" name="max" id="max">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="nastred">
                        <input type="submit" value="Generovat">
                    </td>
                </tr>
            </form>
            <tr>
                <td colspan="2">
                    <br>
                </td>
            </tr>
            <tr>
                <td>
                    Náhodně vygenerované číslo
                </td>
                <td>
                    <?php
                        $min=$_GET["min"];
                        $max=$_GET["max"];
                        if ($min<$max) {
                            echo (mt_rand($min, $max));
                        }
                        else{
                            echo (mt_rand($max, $min));
                            echo("</td></tr><tr><td colspan='2'>Hodnoty byly prohozeny z důvodu špatně zadaného rozsahu");
                        }
                    ?>
                </td>
            </tr>
        </table>
        
    </div>
    <br><br><br>
    <div class="container">
        <table>
            <form action="#" method="post">
                <tr>
                    <th colspan="2">
                        Výběr množstvý náhodných čísel
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="min">Zadejte minimální hodnotu: </label>
                    </td>
                    <td>
                        <input type="number" name="min" id="min">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="max">Zadejte maximální hodnotu: </label>
                    </td>
                    <td>
                        <input type="number" name="max" id="max">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="count">Zadejte množstvý čísel (max 20)</label>
                    </td>
                    <td>
                        <input type="number" name="count" id="count" max="20">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Vygenerovat">
                    </td>
                </tr>
            </form>
            <tr>
                <td colspan="2">
                    <?php
                    $count=$_POST["count"];
                    $min=$_POST["min"];
                    $max=$_POST["max"];
                    while ($count !=0) {
                        echo(mt_rand($min, $max));
                        echo(" | ");
                        $count--;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <br><br><br>
    <h2>Zaokrouhlování čísel</h2>
    <p>
        Existuje fce round(); která zaokrouhlí hodnotu na požadovaný počet desetinných míst.
    </p>
    <p>
        rand(hodnota, počet míst);
    </p>
    <p>
        počet míst může být záporný a potom zaokrouhlujete před desetinnou čárkou.
    </p>
    <div class="container">
        <table>
            <form action="#" method="get">
                <tr>
                    <th colspan="2">
                        Zaokrouhlování čísla
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="cislo">Číslo pro zaokrouhlení: </label>
                    </td>
                    <td>
                        <input type="text" name="cislo" id="cislo">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="carka">Zadejte na kolik desetiných míst chcete zaokrouhlit:</label>
                    </td>
                    <td>
                        <input type="number" name="carka" id="carka">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Zaokrouhlit">
                    </td>
                </tr>
            </form>
            <tr>
                <td>Zaokrouhlené číslo: </td>
                <td>
                    <?php
                    $cislo=$_GET["cislo"];
                    $carka=$_GET["carka"];
                    echo(round($cislo, $carka));
                    ?>
                </td>
            </tr>
        </table>
    </div>
    <h2>Nalezení minima a maxima v poli</h2>
    <p>Vytvořte pole 50 náhodných hodnot z intervalu -50,50</p>

    <?php
        for ($i=0; $i < 50; $i++) { 
            $pole_cisel[] = mt_rand(-50,50);
        }
        foreach ($pole_cisel as $hodnota) {
            echo($hodnota.", ");
        }
        $minimum=min($pole_cisel);
        echo("<br>Minimální hodnota v poli je: " . $minimum);
        $maximum=max($pole_cisel);
        echo("<br>Maximální hodnota v poli je: " . $maximum);
    ?>

    <h2>Převody mezi číslelnými soustavami</h2>
    
</body>
</html>