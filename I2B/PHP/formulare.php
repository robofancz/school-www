<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuláře</title>
    <link rel="stylesheet" href="../css/base.css">
</head>
<body>
    
    <h1>Formuláře</h1>
    <p>
        Formulář je rozhraní, které umožnuje zadávat vstupní data z webové stránky. Tato data se následně seberou a vyhodnotí a je možné na ně adekvátně reagovat. Nejběžnější prvky formuláře jsou textová pole, tlačítka, přepínače, výběry....
    </p>
    <p>
        S příchodem HTML 5.x je možnosti formulárů výrazně rozšířily a zvýšil se počet formulářových polí. Tato pole mají nyní poměrně přesně definovaný obsah a formát dat, což výrazně zjednodušuje jejich automatické zpracovávání.
    </p>
    <p>
        Nedílnou součástí je formát formuláře, kdy pro nastavení vhodného rozložení často používáme tabulky a vlastnosti jednotlivých prvků nastavujeme pomocí CSS.
    </p>
    <h2>Vytvoření formuláře</h2>
    <p>
        Formulář se vytovří pomocí párového příkazu "FORM". Efekt tohoto příkazu není nijak viditelný na výsledné stránce, pouze vymezí prostor formuláře a nastvaví jeho chování (pokud by se pole formuláře pole nenacházela uvnitř FORMu, nebylo by možné z nich sebrat data). Povinné vlastnosti formuláře jsou METHOD, která nastaví metodu odeslání dat a ACTION, která nastvaní, kde se odeslaná data zpracují. 
    </p>
    <h3>Metody odeslání dat</h3>
    <p>
        K odeslání dat používáme metodu GET nebo metodu POST. Každá funguje odlišně a každá se používá v jiné situaci. <b>Metoda GET</b> se používá většinou tam, kde může nastat situace, že odeslaná data budeme chtít nějak "sdílet". Příkladem je vyhledávání v e-shopech nebo vyhedávačích. Tato metoda není vhodná pro osobní nebo citlivá data, protože odeslané informace se viditelně zobrazí v adresním řádku a lze je jednodušr přečíst. Dalším omezením je možnost odeslat max cca 3000 znaků.
    </p>
    <p>
        Oproti tune <b>metoda POST</b> po odeslání nemodifikuje adresní řádek, data lze nasdílet, neexistuje limit pro odeslaná data. 
    </p>
    <h3>Nastavení cíle zpracování dat</h3>
    <p>
        Pomocí atributu ACTION se nastaví, kde dojde ke zpracování odeslaných dat. Pokud se mají data zpracovat v aktuálním souboru, jako hodnota atributu ACTION se nastaví "#". V ostatních případech (v produkci podstatně obvyklejší řešení) se nastaví relativní cesta k souboru, který se má po odeslání zobrazit. 
    </p>
    <h2>Formulářová pole</h2>
    <p>
        Jedná se o interaktivní prvky různého typu, které umožňují zadávat různé hodnoty a informace.
    </p>
    <p>
        Každé formulářové pole by mělo být v rámci formuláře co nejlépe popsáno. K popisku pole je ideální používat příkaz label. Lze ho snadno stylovat a je vhodný i pro používání s čtečkami pro znevýhodněné. Příkaz label má atribut for, který se naváže na hodnotu atributu ID u formulářového pole.
    </p>
    <p>
        Každé formulářové pole, ze kterého chceme sebrat data, musí být jednoznačně identifikovatelné pomocí hodnoty atributu NAME="".
    </p>
    <h3>Formulářová pole typu INPUT</h3>
    <p>
        Vytváří se pomocí nepárového příkazu INPUT, který obsahuje povinný atribut TYPE, který umožní nastavit druh pole.
    </p>
    <h4>Textové pole</h4>
    <p>
        Používá se pro nespecificý (obecný) typ řetězce. 
    </p>

    <form action="#" method="get">
        <input type="text">
    </form>

</body>
</html>