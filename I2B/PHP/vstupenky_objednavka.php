<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstupenky</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    <?php
        $cena_dospely = $_GET["cena_dospely"];
        $cena_dite=$_GET["cena_dite"];
        $pocet_dospely=$_GET["dospely"];
        $pocet_deti=$_GET["dite"];
        $datum=$_GET["datum"];
    ?>
    <div class="container">
        <table>
            <tr>
                <th colspan="2">
                    Shrnutí objednávky
                </th>
            </tr>
            <?php
                // print_r($_GET);
                foreach ($_GET as $key => $value) {
                    echo("<tr>");
                    echo("<td>$key</td>");
                    echo("<td>$value</td>");
                    echo("</tr>");
                }
            ?>
            <tr>
                <th colspan ="2">
                    Práce s daty:
                </th>
            </tr>
            <tr>
                <td>
                    <label for="">Cena Dospělý:</label>
                </td>
                <td>
                    <?php
                    echo($cena_dospely*$pocet_dospely . "Kč");
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Cena Děti:</label>
                </td>
                <td>
                    <?php
                    echo($cena_dite*$pocet_deti . "Kč");
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Cena celkem:</label>
                </td>
                <td>
                    <?php
                        echo(($cena_dite*$pocet_deti) + ($cena_dospely*$pocet_dospely) . " Kč");
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Datum Akce:</label>
                </td>
                <td>
                    <?php
                    //Nastavení českého formátu data:
                        //budu pracovat s $datum definovanou na začátku souboru
                    /*
                    Teorie:
                        fce date("požadovaný formát data","číselný údaj o datu");
                        vlastnosti pro správný výpis českého formátu:
                            j ... den bez nuly na začátku
                            n ... měsíc bez nuly na začátku
                            Y ... rok se čtyčmi číslicemi
                        fce strtime();
                            -vrátí počet vteřin, které uplynuly od od 1. 1. 1970 do zvoleného data
                    */

                        echo date("j. n. Y", strtotime($datum));
                    ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="center">
                    <a href="vstupenky.php">
                        <button>
                            Zpět
                        </button>
                    </a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>