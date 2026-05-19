<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jídělňíček</title>
    <link rel="stylesheet" href="..\css\formular.css">
</head>
<?php
function dd($data) {
            echo '<pre>';
            die(var_dump($data));
            echo '</pre>';
        }
        // dd($_SERVER);
    
?>
<body>
    <div class="container">
        <table>
            <form action="#" method="post">
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
                        <input type="date" name="date" id="date" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="soup">Polévka:</label>
                    </td>
                    <td>
                        <input type="text" name="soup" id="soup" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="main">Hlavní jídlo</label>
                    </td>
                    <td>
                        <input type="text" name="main" id="main" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="desert">Dezert:</label>
                    </td>
                    <td>
                        <input type="text" name="desert" id="desert" >
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
        
            $date=$_POST["date"];
            $soup=$_POST["soup"];
            $main=$_POST["main"];
            $desert=$_POST["desert"];

            

            $zaznam="$date, $soup, $main, $desert \n";

            $file = fopen("../data/jidlo.csv", "a");

            if ($_SERVER['REQUEST_METHOD']==='GET') {
               
            }
            else if ($_SERVER['REQUEST_METHOD'] === 'POST') 
                {
                if ($date!==''and $soup!==''and $main!==''and $desert!=='') {
                    fwrite($file, $zaznam);
                    header('Location: ' . $_SERVER['PHP_SELF'] . '?ulozeno=1');
                }
                else{
                    echo ("Vyplňte prosím všechna pole");
                }
            }
            else {
                echo("Vyplňte celý formulář");
            }           
            fclose($file);

            
            /*
            Rozšíření:
                -omezit zápis při první návštěvě
                -zajistit kompletnost vstupních dat
                -zobrazit uložená data
                -zamezit vícenásobnému uložení informace při obnovení stránky 
            */
        ?>
    </div>
    <?php
    //existuje globální proměnná $_SERVER, která obsahuje spoustu informací o našem serveru
    // dd($_SERVER);
    //Ošetření nekompletních dat:
        //Nastavení atributu require ke každému poli může narazit na problém nestandartního prohlížeče, který tento parametr nebude správně interpretovat. Proto je vhodné kromě něj provést kontrolu i při ukládání dat do souboru
        //Pokud do některého pole neuložíme data a sebereme z něj informace do proměnné, v proměnné se nachází hodnota '', proti které se můžeme snadno vymezit v podmínce větvení
    ?>
</body>
</html>