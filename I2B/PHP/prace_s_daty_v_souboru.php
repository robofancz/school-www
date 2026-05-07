<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práce s daty v souboru</title>
    <link rel="stylesheet" href="../css/formular.css">
</head>
<body>
    <?php
    function dd($data) {
            echo '<pre>';
            die(var_dump($data));
            echo '</pre>';
        }
        // dd($_SERVER);
    ?>
    
    <h1>Práce s daty v souboru</h1>
    <h2>Čtení dat</h2>
    <?php
        //Otevřete soubor "data/*.txt" pro čtení a tuto proceduru uložte do proměnné $file
        //Přidejte zpětnouvazbu v případě chyby, které běh programu ukončí
        $file = fopen("../data/informace.txt", "r") or die("<span class='chyba'>Nastala chyba při otevírání souboru.</span>");

        echo("<p>Ke čtení dat ze souboru použijeme příkaz fread('odkud čteme', 'kolik čteme dat (B)');</p>");

        $read=fread($file, 30);
        echo ($read);
        $read=fread($file, 30);
        echo ($read);

        //přečtení celého souboru
            //od aktuálního umístění kurzoru
        echo fread($file, filesize("../data/informace.txt"));


        fclose($file);
    ?>
    <h2>Zápis do souboru</h2>
    <p>
        Pokud zapisujeme do souboru a soubor neexistuje, měl by se vytvořit automaticky
    </p>
    <?php
        //otevřte/vytvořte soubor data_zapis.txt pro zápis. Operaci uložte do proměnné $file2
        $file2 = fopen("../data/data_zapis.txt", "w");

        //Zápis do souboru probíhá pomocí příkazu fwrite("kam zapisujeme", "co zapisujeme")

        fwrite($file2, "Ola mi hente ");
        //Pokud zapíšeme opakovaně data vez uzavření souboru, v zápisu se pokračuje
        fwrite($file2, "me ablo hente ");
        //Pokud zapíšeme opakovaně
        fclose($file2);

        //Pokud bychom znovu otevřeli soubor a začali do něj zapisovat, předchozí data by se přepsala
        // $file3 = fopen("../data/data_zapis.txt", "w");

        // fwrite($file3, "nexte hunde");



        // dd($_SERVER);

    ?>
    <h2>Připsání dat k datům existujícím</h2>
    <?php
        //otevřte soubor "data\data_zapis.txt" s oprávněním pro přepisování dat
        $file3 = fopen("../data/data_zapis.txt", "a");

        //Zapište do souboru další řetězec a ten by se měl objevit na konci souboru a zachovat předchozí data
        //pokud chceme zapisovat na nový řádék, můžeme řetězec zařít sekvencí \n
        fwrite($file3, "\nme ablo engles");
        fclose($file3);

        $data4 = fopen("../data/data_zapis.txt", "r");
        //cviční vypište obsah souboru
        echo fread($data4, filesize("../data/data_zapis.txt"));

        fclose($data4);


    ?>
</body>
</html>