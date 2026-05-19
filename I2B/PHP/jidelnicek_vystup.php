<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jídělňíček</title>
    <link rel="stylesheet" href="..\css\formular.css">
</head>
<body>

    <div class="container">
        <table>
            <form action="#" method="get">
                <tr>
                    <th colspan="2">
                        Jídelní lístek
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="days">Počet dní</label>
                    </td>
                    <td>
                        <input type="number" name="days" id="days" max="10" min="1">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <input  type="submit" value="Vypsat">
                    </td>
                </tr>
            </form>
        </table>
    </div>

    <?php
        $days=$_GET['days'];

        $soubor = fopen("../data/jidlo.csv", 'r') or die("Nepovedlo se otevřít zdrojová data");

        for ($i=0; $i < $days; $i++) {
            echo(fgets($soubor));
            echo("<br>");
        }

        //Promlém je ve formátu a nevyužití potenciálu formátu csv:
            //Existuje příkaz fgetcsv(); který vezme jeden řádekv VSC souboru a pracuje s ním jako s polem

        $obed_CSV=fgetcsv($soubor);


        echo("<table>");
        echo("<tr>")
        foreach ($obed_CSV as $pomocna) {
            echo ("<td>".$pomocna. "</td>");
        }
        echo("</tr>");
        echo("</table>");

        fclose($soubor);

    ?>
    <div class="container">
        <?php
            //Vezměte hodnotu z formuláře a na jejím základě vypište požadovaný počet hodnot do tabulky. Tabulka bude mít záhlaví (datum, polévka, hlavní jídlo, dezert) a v každém sloupci se vypíší požadované hodnoty. Datum nastavte tak, aby zobrazovalo v českém formátu.

            
        ?>
    </div>
    
</body>
</html>