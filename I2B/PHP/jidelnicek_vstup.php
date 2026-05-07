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
                        <label for="date">Datum:</label>
                    </td>
                    <td>
                        <input type="date" name="date" id="date">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="soup">Polévka:</label>
                    </td>
                    <td>
                        <input type="text" name="soup" id="soup">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="main">Hlavní jídlo</label>
                    </td>
                    <td>
                        <input type="text" name="main" id="main">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="desert">Dezert:</label>
                    </td>
                    <td>
                        <input type="text" name="desert" id="desert">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <input type="submit" value="Uložit">
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <div class="container">
        <?php
            $date=$_GET["date"];
            $soup=$_GET["soup"];
            $main=$_GET["main"];
            $desert=$_GET["desert"];

            $zaznam="$date, $soup, $main, $desert \n";

            $file = fopen("../data/jidlo.csv", "a");
            fwrite($file, $zaznam);
            fclose($file);
        ?>
    </div>
</body>
</html>