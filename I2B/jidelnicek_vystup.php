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

    <div class="container">
        <?php
        $days=$_GET['days'];

        $soubor = fopen("../data/jidlo.csv", 'r') or die("Nepovedlo se otevřít zdrojová data");

        for ($i=0; $i < $days; $i++) {
            echo(fgets($soubor));
        }

        //Promlém je ve formátu a nevyužití potenciálu formátu csv:
            //Existuje příkaz fgetcsv(); který vezme jeden řádekv VSC souboru a pracuje s ním jako s polem
    ?>
    </div>
    
    <br><br>
    <div class="conainer">
        <?php
        $obed_CSV=fgetcsv($soubor);


        echo("<br>");


        echo("<table>");
        echo("<tr>");
        foreach ($obed_CSV as $pomocna) {
            echo ("<td>".$pomocna. "</td>");
        }
        echo("</tr>");
        echo("</table>");

        fclose($soubor);

    ?>
    </div>
    
    <br><br>
    <div class="container">
        <?php
            //Vezměte hodnotu z formuláře a na jejím základě vypište požadovaný počet hodnot do tabulky. Tabulka bude mít záhlaví (datum, polévka, hlavní jídlo, dezert) a v každém sloupci se vypíší požadované hodnoty. Datum nastavte tak, aby zobrazovalo v českém formátu.


            $soubor2 = fopen("../data/jidlo.csv", 'r') or die("Nepovedlo se otevřít zdrojová data");
            $obed_CSV=fgetcsv($soubor2);
            $datum=$obed_CSV[0];
            $date = DateTime::createFromFormat('Y-m-d', $datum);
            $pomoc=0;

            echo("<table>");
            echo("<tr><th class='center'>Vybraná jídla</th></tr>");
            echo("<tr><td>Datum</td><td>Polévka</td><td>Hlavní jídlo</td><td>Dezert</td></tr>");
            // echo date("j. n. Y", strtotime($datum));
            
            while (($row=fgetcsv($soubor2))!==false&&$pomoc<$days) {
                echo "<tr>";
                $datum = $row[0];
                $date = DateTime::createFromFormat('Y-m-d', $datum);
                echo "<td>" . $date->format('d. m. Y') . "</td>";
                for ($i = 1; $i < count($row); $i++) {
                    echo "<td>" . $row[$i] . "</td>";
                }
                echo "</tr>";
                $pomoc++;
            }


            // echo("<td>");
            // echo $date->format('d. m. Y'); 
            // echo("</td>");

            

            echo("</table>");
        ?>
    </div>
    
</body>
</html>