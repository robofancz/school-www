<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Větvení Cvičení</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>

    </style>
</head>
<body>
    <h1>Cvičení Větvení</h1>

    <?php
        //Pomocí větvení switch zjistěte, jestli se hodnota proměnné $smer J,S,Z,V... V případě těchto hodnot napište: Vydali jste se na SEVER/JIH/ZÁPAD/VÝCHOD. V ostatních případech napište: TUDY CESTA NEVEDE!

        $smer = "S";
        switch ($smer) {
            case 'J':
                echo ("Vydali jste se na Jih.");
                break;

            case 'S':
                echo ("Vydali jste se na Sever");
                break;
            
            case 'Z':
                echo("Vydali jste se na západ");
                break;

            case 'V':
                echo("Vydali jste se na východ");
                break;

            default:
                echo ("Tudy cesta nevede!");
                break;
        }

        echo("<br><br>");

        //Vypište hodnotu proměnné $cviceni pokud je násobkem 7 a je v intervalu <-50,-10) nebo (10,50>
        
        $cviceni = 21;
        if ($cviceni%7==0 && (($cviceni>=-50 && $cviceni<-10) || ($cviceni>10 && $cviceni<=50))) 
        {
            print_r($cviceni);
        }
        else 
        {
            echo ("Hodnota " . '$cviceni' . "Není v intervalu nebo není dělitelná 7.");
        }

        echo("<br><br>");

        //Na intervalu od 0 do 100 (číslo 100 je součástí intervalu) ověřte, jestli je číslo sudé, ale není dělitelné 3 nebo 5. Číslo vypište, v případě, že splní požadavky, jinak napište jen, že neodpovídá požadavkům.

        $cislo = 72;


        if ($cislo>0&&$cislo<=100) {
            if ($cislo%2==0) {                
                if ($cislo%3!=0||$cislo%5!=0) {
                    echo("Zadané číslo odpovídá požadavkům!");
                }
                else {
                    echo("Zadané číslo je dělitelné 3 nebo 5");
                }
            }
            else
            {
                echo ("Zadané číslo není sudé");
            }
        }
        else
        {
            echo("Zadané číslo není v intervalu.");
        }

    ?>  

</body>
</html>



