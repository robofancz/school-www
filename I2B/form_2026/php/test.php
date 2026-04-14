<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Formuláře</title>
    <link rel="stylesheet" href="../styly/stylopis_test.css">
</head>
<body>
    
<div class="obal">
    <form action="#" method="post">
        <table>
            <tr>
                <th colspan="2">Test-formuláře</th>
            </tr>
            <tr>
                <td>
                    <label for="text">Text</label>
                </td>
                <td>
                    <input type="text" name="text" id="text" max="20">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="volba">Volba</label>
                </td>
                <td>
                    <select multiple name="volba[]" id="volba" class="select">
                        <option value="">Ano</option>
                        <option value="">Ne</option>
                        <option value="">Možná</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="checkbox">Checkbox</label>
                </td>
                <td>
                    <input type="checkbox" name="checkbox" id="checkbox">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Odeslat" class="button">
                </td>
            </tr>
        </table>
        <br><br><br>
        <table>
            <tr>
                <th colspan="2">Výpis zadaných údajů</th>
            </tr>
                <?php
                    foreach ($_POST as $key => $value) {
                        echo ("<tr><td>");
                        echo ($key);
                        echo("<td/>");
                        echo($value);
                        echo("</td></tr>");
                    }
                ?>
        </table>
    </form>
</div>
    
</body>
</html>
