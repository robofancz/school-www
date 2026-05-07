<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce se soubory</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    <h1>Práce se soubory</h1>
    <h2>Přečtení obsahu celého souboru</h2>
    <?php
    function dd($data) {
            echo '<pre>';
            die(var_dump($data));
            echo '</pre>';
        }
    //fce readfile("cesta\název.pripona");
    //pouze přečte obsah (od začátku do konce) a nemá žádná nastavení
    echo("<p>");
    readfile("..\data\informace2.txt");
    echo("</p>");
    ?>
    <p>
        Pokud potřebujeme se souborem dále pracovat (číst, zapisovat, upravovat), musíme ho otevřít a přidat mu příslušná oprávnění.
    </p>
    <h2>Otevření souboru</h2>
    <?php
        //Příkaz fopen("cesta\název.pripona", "oprávnění");
        /*
        Základní oprávnění: 
            "r" ... read only
            "w" ... write
            "a" ... append
            "x" ... create file if file does not exist + write
        Rozěířená oprávnění:
            "w+" ... write + read
            "a+" ... append + read
        */
        
        //otevření souboru se většinou ukládá do proměnné, protože může být využito opakovaně a je možné snadno vytvořit zpětnou vazbu (která standardně chybí....)

        //Otevřeme soubor informace.txt pro čtení a tuto operaci uložíme do přoměnné $soubor
        $soubor = fopen("../data/informace.txt" , "r"); 
        //$soubor by měla obsahovat informaci, jestli funkce fopen() skončila úspěšně nebo ne
        
    ?>
    <h3>Vytvoření zpětné vazby při otevření souboru</h3>
    <?php
        if ($soubor==TRUE) {
            echo("<div class='uspech'>Otevření souboru proběhlo úspěšně</div>");
        }
        else{
            echo("<div class='chyba'>Nepovedlo se.</div>");
        }

        /*
            Velmi často se zpětná vazba pouze v případě, že nastala chyba. V opodstatněných případech rovnou dojde k ukončení celého programu (například selhání načtení primárních dat....).
        */
       
            // fopen("../data2/informace.txt", "r") or die("<span class='chyba'>Soubor nenalezen, program byl ukončen");
            echo ("pokračujeme");
    ?>
    <h2>Uzavření souboru</h2>
    <p>
        pokud končíme práci se souborem, měli spojení na něj uzavřít. Důvodem je to, že bez uzavření by k němu nemohly získat přístup ostatní procesy.
    </p>
    <p>
        Uzavření proběhne pomocí funkce fclose($soubor);
    </p>
    <?php
    dd($_SERVER);
        fclose($soubor);
    ?>
    
</body>
</html>