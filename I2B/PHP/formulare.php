<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuláře</title>
    <link rel="stylesheet" href="../css/base.css">
    <style>
        label{
            color: red;
        }
        table{
            background-color: orange;
            border: black dotted 2px;
        }
        td{
            border:black 2px dotted;
            text-align: right;
        }
        th{
            text-align: center;
        }
    </style>
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

   
    <br>
    
    <br>
    
    <br>
    <form id="" action="#" method="get">
        <table>
            <tr>
                <th>Formulář</th>
            </tr>
            <tr>
                <td>
                    <label for="FirstName">Jméno: </label>
                </td>
                <td>
                    <input type="text" id="FirstName" name="FirstName" maxlength="20" required placeholder="John">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="SurName">Příjmení: </label>
                </td>
                <td>
                    <input type="text" id="SurName" name="SurName" maxlength="30" required placeholder="Doe">

                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Heslo: </label>
                </td>
                <td>
                    <input type="password" id="password" name="password" required minlength="5">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="day">Oblíbený den: </label>
                </td>
                <td>
                    <input type="radio" name="day" id="day" value="parek">Pátek <br>
                    <input type="radio" name="day" id="day" value="sobota" checked>Sobota <br>
                    <input type="radio" name="day" id="day" value="nedele">Neděle <br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="souhlas" id="souhlas"><label for="souhlas"> Souhlasím s tím být puppy boy 🥵🐶</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="year">Rok Narození:</label>
                </td>
                <td>
                    <input type="number" name="year" id="year" min="1900" max="2026" step="1" placeholder="rok narození ...." required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="count">Počet: </label>
                </td>
                <td>
                    0<input type="range" name="count" id="count" min="0" max="20">20
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Datum: </label>
                </td>
                <td>
                    <input type="date" name="date" id="date" min="2026-02-01">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="time">Čas: </label>
                </td>
                <td>
                    <input type="time" name="time" id="time" min="09:00" max="17:00" step="900">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="datetime">Datum a cas: </label>
                </td>
                <td>
                    <input type="datetime-local" name="datetime" id="datetime" value="2026-02-14T06:07">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="vzkaz">Napište nám</label>
                </td>
                <td>
                    <textarea name="vzkaz" id="vzkaz" cols="25" rows="6" maxlenght="120" placeholder="Nazor"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="ovoce" >Oblíbené ovoce</label>
                </td>
                <td>
                    <select name="ovoce" id="ovoce">
                        <option value="jablko">Jablko</option>
                        <option value="hruska">Hruška</option>
                        <option value="banan">Banán</option>
                        <optgroup>
                            <option value="kiwi">Kiwi</option>
                            <option value="mango">Mango</option>
                            <option value="tresen">Třešeň</option>
                        </optgroup>
                        <optgroup>
                            <option value="sevstka">švestka</option>
                            <option value="ananas">Ananas</option>
                        </optgroup> 
                    </select>
                </td>
            </tr>
        </table>
    </form>

    








    <br><br><br><br><br><br><br><br><br><br>
</body>
</html>