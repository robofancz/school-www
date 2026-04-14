<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    <h1>Sběr dat</h1>
    <p>
        formulář s metodou GET v aktuálním souboru, tabulka formátující formulář, hlavička tabulky, pole popsaná pomocí labelu, pole typu: text, radio (3x), date, select, submit
    </p>
    <h1>Cvičení</h1>
    <p>
        Vytvořte pole textarea, nastavte ho tak, aby se z něj dala sbírat data a nastylujte ho tak, aby byl co nejpodobnější prvku select (včetně :hover)
    </p>
    <div class="container">
        <form action="#" method="get">
            <table>
                <tr>
                    <th colspan="2">
                        Informace o  morčeti
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="name">Jméno</label>
                    </td>
                    <td>
                        <input type="text" name="name" id="name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">Pohlaví:</label>
                    </td>
                    <td>
                        <input type="radio" name="gender" id="gender" value="kluk">Kluk <br>
                        <input type="radio" name="gender" id="gender" value="holka">Holka <br>
                        <input type="radio" name="gender" id="gender" value="nevim">Nevím <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dob">Datum Narození:</label>
                    </td>
                    <td>
                        <input type="date" name="dob" id="dob">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="color">Barva:</label>
                    </td>
                    <td>
                        <select name="color[]" id="color" multiple>
                            <option value="modra">Modra</option>
                            <option value="ruzova">Ruzova</option>
                            <option value="zelena">Zelena</option>
                            <option value="red">Červená</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="comment">Komentář k morčeti</label>
                    </td>
                    <td>
                        <textarea name="comment" id="comment" maxlenght="256"></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center" colspan="2" >
                        <input type="submit" value="Odeslat">
                        <button type="reset">
                            <img src="../images/obrazek2.jpg" alt="">
                        </button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
        /*
        V PHP existují "superproměnné" $_GET a $_POST (název musí být zapsán velkými písmeny), které v sobě združují hodnoty odeslané příslušnou metodou z formuláře. Před prvním odesláním formuláře jsou tyto proměnné prázdné. Jejich obsah se přepíše při každém dalším odeslání formuláře(z toho důvodu se nehodí pro delší skadování dat). Vzhledem k tomu, že obsahují více než jednu informaci, jedná se vlastně o pole (asociativní, často vícerozměrné) a ohledem na to s nimi musíme pracovat.
        */

        print_r($_GET);
    ?>
    <h2>Výpis pole pomocí fce foreach()</h2>
    <p>
        Pole vypište pomocí fce foreach() do tabulky tak, že tabulka bude obsahovat hlavičku popisujcí její obsah a bude mít dva sloupce, v levém bude název prvku a v pravém jeho hodnota
    </p>

    <div class="container">
        <table >
            <tr>
                <th colspan="2">Informace o morčeti</th>
            </tr>
            <?php
                foreach ($_GET as $key => $value) {
                    echo("<tr> <td>");
                    echo($key . "</td>");
                    echo("<td> $value </td></tr>");
                }
            ?>
        </table>
    </div>


    <h3>Výpis prvků vnořeného pole</h3>
    <?php
        /*
        Abychom dokázali vypsat i obsah vnořeného pole, musíme ho dokázat odlišit od ostatních prvků jiného typu. K tomu použijeme fci gettype(), která vrátí informaci o datovém typu.

        echo(gettype($hodnota));
        */

    ?>

    <div class="container">
        <table >
            <tr>
                <th colspan="2">Informace o morčeti</th>
            </tr>
            <?php
                foreach ($_GET as $key => $value) {
                    echo("<tr> <td>");
                    echo($key . "</td>");
                    if (gettype($value)=="array") {
                        echo("<td>");
                        foreach ($value as $temp) {
                        echo("$temp | ");    
                        }
                        echo("</td></tr>");
                    }
                    else {
                        echo("<td> $value </td></tr>");
                    }
                }
            ?>
        </table>
    </div>

    <h3>Uložení konkrétní hodnoty z formuláře do proměnné</h3>
    <?php
        /*
        nejedná se o nic jiného, než vytvoření nové proměnné, do které uložíme konkrétní prvek z pole $_GET nebo $_POST. Prvek indentifikujeme pomocí jeho klíče.

        $promenna = $_METODA["klic"];
        
        */

        $name=$_GET["name"];
        echo $name."<br>";

        $color=$_GET["color"];
        foreach ($color as $key => $value) {
            echo ($value."<br>");
        }
    ?>


        

       

</body>
</html>