<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vstupenky Formular</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    
    <div class="container">
        <form action="vstupenky_objednavka.php" method="get">
            <input type="hidden" name="cena_dospely" value="390">
            <input type="hidden" name="cena_dite" value="195">
            <table>
                <tr>
                    <th colspan="2">
                        Objednávka Vstupenek
                    </th>
                </tr>
                <tr>
                    <td>
                        <label for="dospely">Dospělý:</label>
                    </td>
                    <td>
                        <input type="number" name="dospely" id="dospely" max="10" placeholder="Max 10.">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dite">Dítě</label>
                    </td>
                    <td>
                        <input type="number" name="dite" id="dite" max="5" placeholder="Max 5.">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="datum">Datum vstupu</label>
                    </td>
                    <td>
                        <input type="date" name="datum" id="datum" require>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="checkbox" name="souhlas" id="souhlas"> Souhlasím s podmínkami nákupu
                    </td>
                </tr>
                <tr >
                    <td colspan="2" style="align: center;">
                        <input type="submit" value="Objednat">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>