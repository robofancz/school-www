<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cykly cviceni</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
    table{
    width: 500px;
    border: double 3px gray;
    background-color: azure;
    padding: 3px;
    }
    td{
        padding:1.5px;
        background-color: goldenrod;
        border:1px solid black;
        text-align: center;
    }
    td:hover{
        background-color: green;
    }
    th{
        background-color: red;
        font-size: 16px;
    }
    </style>
</head>
<body>
    <h4>1. Pole města vypište do tabulky. která bude mít dva sloupce. V prvním se bude nacházet zkratka města a v druhém název. Tabulku formátujte a dejte jí hlavičku</h4>
    <?php
        $mesta = [
        'Pa' => 'Paris',
        'Ne' => 'New York',
        'Lo' => 'London',
        'To' => 'Tokyo',
        'Be' => 'Berlin',
        'Sy' => 'Sydney',
        'Mu' => 'Munich',
        'Ho' => 'Hong Kong',
        'Ro' => 'Rome',
        'Ma' => 'Madrid',
        'Br' => 'Brussels',
        'Os' => 'Oslo',
        'Be' => 'Beijing',
        'Se' => 'Seoul',
        'Bu' => 'Buenos Aires',
        'Lo' => 'Los Angeles',
        'Ca' => 'Cairo',
        'Du' => 'Dubai',
        'Ka' => 'Kuala Lumpur',
        'Vi' => 'Vienna',
        'Bo' => 'Boston',
        'Am' => 'Amsterdam',
        'Mo' => 'Moscow',
        'Me' => 'Mexico City',
        'Pi' => 'Paris',
        'Sa' => 'San Francisco',
        'Mi' => 'Milan',
        'St' => 'Stockholm',
        'Ch' => 'Chicago',
        'Ma' => 'Manchester',
        'Pa' => 'Paris',
        'Li' => 'Lima',
        'Co' => 'Colombo',
        'In' => 'Istanbul',
        'Be' => 'Beijing',
        'Lo' => 'Los Angeles',
        'Ke' => 'Kiev',
        'Ku' => 'Kuwait City',
        'Wi' => 'Wellington',
        'Ri' => 'Rio de Janeiro',
        'Da' => 'Dallas',
        'Be' => 'Berlin',
        'Ho' => 'Houston',
        'Do' => 'Dubai',
        'Be' => 'Berlin'
    ];

    echo ("<table>");
    echo ("<th colspan='2'>Města a jejich zkratky</th>");
    echo("<tr>");

    foreach ($mesta as $key => $value) {
        echo("<td>");
        echo($key);
        echo("</td><td>");
        echo($value);
        echo("</td>");
        echo("</tr><tr>");
    }
      echo("</tr>");
    echo("</table>");
    ?>
    <hr>


    <h4>2. Pomocí cyklu while vytvořte pole $licha, které bude obsahovat lichá čísla z intervalu od 100 do 0. Pole vypište pomocí cyklu foreach.</h4>
    <?php
        $cislo=100;
        while ($cislo >= 0) {
            if ($cislo%2!=0) {
                $licha[]=$cislo;
            }
            $cislo--;
        }
        foreach ($licha as $value) {
            echo($value . " | ");
        }
    ?>
    <hr>
    <h4>3. Pokud je hodnota proměnné $teplota kladná  snižujte její hodnoty pomocí cyklu for až k 0 a za každou hodnotou vypište ☀️, pokud je záporná, zvyšujte ji k 0 pomocí cyklu do...while a za každou hodnotou vypište ❄️</h4>
    <?php
        $teplota = -15;

        if ($teplota>0) {
            for ($i=$teplota; $i >0 ; $i--) { 
            echo ($i . " ☀️");
            }
        }
        elseif($teplota<0){
           do {
            echo ($teplota . " ❄️");
            $teplota++;
           } while ($teplota < 0);
        }
        else{
            echo ("Teplota je 0.");
        }

        
    ?>


</body>
</html>