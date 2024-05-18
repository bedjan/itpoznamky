Itnetwork přednáškové odkazy
----------------------------

[Osnova IT network](https://docs.google.com/spreadsheets/d/1d5wQRV8CgZAq5DwNVWny5UGvSOvb54ADlsRKIix4MEg/edit?pli=1#gid=0)    
[1. Webové stránky krok za krokem](https://www.itnetwork.cz/html-css/webove-stranky)
[2. Základní konstrukce jazyka Java](https://www.itnetwork.cz/java/zaklady)    [3. Objektově orientované programování v Javě](https://www.itnetwork.cz/java/oop)    
[4. Kolekce a proudy v Javě](https://www.itnetwork.cz/java/kolekce-a-proudy)    
[5. MySQL/MariaDB databáze krok za krokem](https://www.itnetwork.cz/mysql)    
[6. Základní konstrukce jazyka JavaScript](https://www.itnetwork.cz/javascript/zaklady)    
[7. Základy Spring Boot frameworku pro Javu](https://www.itnetwork.cz/java/spring-boot/zaklady)    
[8. Databáze a Hibernate ve Spring Boot](https://www.itnetwork.cz/java/spring-boot/blog)    
[9. Základy React](https://www.itnetwork.cz/javascript/react/zaklady)    
[10. Kompletní kurz CSS frameworku Bootstrap](https://www.itnetwork.cz/html-css/bootstrap/kurz)

* * *
[Web to markdown](https://urltomarkdown.com/)
* * *

# Obsah Přednášek: 





# 1.  Webové stránky krok za krokem

* * *
# Lekce 1 - Úvod do HTML
Vítejte v první lekci **kurzu o tvorbě webových stránek**. Naučíme se zde používat **jazyk HTML**, který je základem pro tvorbu webů. Sám o sobě je velmi jednoduchý a všechny webové stránky ho využívají. Složitější weby HTML míchají s několika dalšími jazyky, např. s **CSS**, které si v kurzu také uvedeme. Projdeme zde úplné **základy HTML a CSS** a vytvoříme své **první webové stránky**, které také **nahrajeme na internet**. Budou vypadat takto:

![Výsledné webové stránky - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/html_hobi_web.png)

Minimální požadavky kurzu
-------------------------

Na tento kurz nepotřebujete žádné speciální znalosti, stačí běžná práce s počítačem ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Příprava nástrojů
-----------------

Začněme přípravou nástrojů.

### Instalace Visual Studio Code

K psaní HTML kódu nebudeme používat editory typu Poznámkový blok, jelikož jim chybí mnoho funkcí. Mezi ně patří zejména **přehledné zvýrazňování kódu** nebo **podpora kódování češtiny** a **konců řádek**. Stáhněme si tedy nějaký chytřejší editor. Skvělým pomocníkem, ale také nástrojem pro vývoj složitějších projektů, je [Visual Studio Code](https://code.visualstudio.com/). Je zadarmo a funguje na všech platformách. Tento editor si nyní stáhneme a nainstalujeme.

Pokročilejší uživatelé mohou použít placená profesionální IDE jako například [WebStorm](http://www.jetbrains.com/webstorm/) nebo [PhpStorm](http://www.jetbrains.com/phpstorm/), pokud plánujete později pracovat i v [PHP](https://www.itnetwork.cz/php).

### Dropbox nebo OneDrive

Kromě editoru potřebujeme nějaký nástroj, který bude **zálohovat a verzovat naši práci**. Nemůžeme se spolehnout na to, že stránku prostě budeme ukládat, protože jsme lidé a ne stroje. Lidé dělají chyby a když přijdete o několikadenní nebo dokonce několikatýdenní práci, může to zabolet. Je dobré naučit se na toto myslet hned od začátku. Velmi doporučuji program **Dropbox**, který je extrémně jednoduchý a sám vaše soubory **verzuje** (tedy zachovává změny v čase a je možné se vrátit ke starším verzím projektu) a zároveň **synchronizuje** s webovým úložištěm. I kdybyste si projekt omylem smazali, přepsali, ukradli vám notebook nebo vám zkolaboval pevný disk, vaše data zůstanou v bezpečí. Dropbox také umožňuje sdílet jeden projekt mezi více vývojáři. Více o Dropboxu viz tento [článek, který obsahuje zároveň pozvánku do Dropboxu s 0,5 GB prostoru navíc](https://www.itnetwork.cz/software/dropbox-revoluce-v-prenaseni-zalohovani-a-sdileni-souboru). Podobně funguje i program OneDrive od Microsoft, který již můžete mít nainstalovaný a pokud jej máte nastavený, měl by zálohovat vaši plochu a dokumenty.

Jako další verzovací nástroj se hojně používá [GIT](https://www.itnetwork.cz/software/git), jeho nastavení ale vydalo na samostatný kurz a Dropbox/OneDrive zatím pro naše účely bohatě postačuje.

Jazyk HTML
----------

HTML je tzv. **značkovací jazyk** a skládá se ze značek, tzv. **tagů**. Tagy slouží k tomu, abychom jimi mohli **obalovat text**, a tak mu **dávat** určitý **význam** (např. "toto je důležitý text", "toto nadpis", "seznam", "tabulka"). Pro tento účel slouží obvykle **otevírající a ukončovací/uza­vírací tagy**, kterými **ohraničíme danou oblast** textu a přidělíme jí tak význam. Těmto tagům se potom říká _párové_ a brzy si je ukážeme.

HTML _není_ programovací jazyk, protože neumožňuje provádět žádné logické operace, slouží pouze k sestavování dokumentů. Programovací jazyky pak často HTML generují nebo upravují, což si ukážeme v navazujících kurzech. Dříve se HTML používalo i na designování stránek, ale protože vzniklý kód byl pak nepřehledný, oddělil se design do samostatného souboru a v HTML řešíme pouze obsah stránky.

Tagy se píší do špičatých závorek, např. `<title>`, což, jak dále zjistíme, označuje titulek stránky. Velmi specifickým tagem je odkaz, který umožňuje procházet mezi jednotlivými stránkami, a tak je provázat. Od toho zkratka HTML (**H**yper**T**ext **M**arkUp **L**anguage = **odkazovací a značkovací jazyk**).

### Tag vs. element

V HTML se budeme setkávat také s pojmem _element_, čímž se myslí **prvek, který na stránku pomocí tagů vkládáme**. Tagy jsou tedy textové značky, pomocí kterých definujeme elementy. Např. pomocí tagů `<title>` a `</title>` definujeme element titulku. Pomůckou může být, že **tag vždy referuje na kód**, zatímco **element** na výsledný prvek ve stránce jako v **dokumentu**.

Naše první webová stránka
-------------------------

HTML stránku je velmi jednoduché vytvořit, je to vlastně jen **textový soubor**. Soubory s HTML kódem mají obvykle příponu `.html` nebo někdy i jen `.htm`. Úvodní soubor webové stránky je zvykem pojmenovávat `index.html`. Právě tento soubor bude potom internetový server hledat jako první, když naše stránky nahrajeme na internet a někdo na ně vstoupí.

Pojďme si tento soubor nyní vytvořit a s ním také prázdnou internetovou stránku.

### Vytvoření složky

Jelikož náš web bude mít časem více souborů, vytvoříme si na něj prvně složku, např. `prvni_web/`. Ideálně v zálohované složce Dropboxu nebo ve složce OneDrive, aby byla naše práce zálohovaná:

![Vytvoření složky v OneDrive - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/onedrive2.png)

Pokud se vám tyto nástroje nastavit nepodaří, můžete si složku vytvořit např. na ploše nebo v dokumentech a nastavit si je později.

### Vytvoření HTML souboru

Spusťme si VS Code a klikněme v horním menu na _Soubor -> Nový soubor_:

![Vytvoření HTML stránky ve VS Code - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/vscode_new_file.png?v=2)

Do pole pro název souboru zadáme `index.html` a potvrdíme Enter:

![Vytvoření HTML souboru ve VS Code - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/vscode_new_file_name.png?v=2)

Je velmi důležité dodržet přesné názvy souborů, protože při nahrání na [linuxový](https://www.itnetwork.cz/linux) server může tento server rozlišovat velká a malá písmena. **Všechna písmena v názvu souboru jsou proto malá.**

Soubor nyní do naší složky uložíme pomocí menu _Soubor -> Uložit_ nebo pomocí klávesové zkratky Ctrl + S.

Pokud se nechcete zdržovat s neustálým ukládáním nebo máte strach, že byste změny ukládat zapomínali, zaškrtněte si v _Menu -> Soubor -> Automatické ukládání_.

Nyní máme skutečně HTML soubor, se kterým můžeme ve VS Code dále pracovat.

### Otevření stránky v prohlížeči

Přepneme se do průzkumníka Windows a otevřeme si naši složku `prvni_web/`. Soubor `index.html` v ní uložený otevřeme ve webovém prohlížeči, kde uvidíme prázdnou stránku:

index.html

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

### Kódování UTF-8

V některých editorech je potřeba nastavit způsob kódování (nejen) českých znaků, k čemuž v dnešní době slouží moderní univerzální kódování `UTF-8`. Visual Studio Code bere `UTF-8` jako výchozí, a proto se s nastavováním nemusíme trápit. Pokud se však chcete ujistit, že opravdu používáte UTF-8, na dolní liště vpravo byste kromě informace o tom, kde se nacházíte v kódu nebo jaký jazyk používáte, měli vidět právě nápis _UTF-8_:

![UTF-8 ve VS Code - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/vscode_utf8.png)

Je velmi důležité, abyste své stránky editovali pouze v editorech, co `UTF-8` podporují, jinak dojde k rozbití diakritiky. Například je špatný nápad vytvořit stránky ve VS Code a poté do nich něco dopsat v Poznámkovém bloku.

V další lekci, [Struktura HTML stránky](https://www.itnetwork.cz/html-css/webove-stranky/html-struktura), si ukážeme, jak vypadá struktura HTML stránky a vytvoříme si první stránku s krátkým textem.



# Lekce 2 - Struktura HTML stránky
V minulé lekci, [Úvod do HTML](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-uvod-do-html), jsme si nainstalovali editor Visual Studio Code, ukázali si HTML jazyk a vytvořili první html soubor.

V dnešním **tutoriálu kurzu Statického webu** si ukážeme, jakou **strukturu má HTML stránka** a vysvětlíme si **elementární potřebné tagy**. Společně s představením struktury si začneme tvořit **obsah naší první stránky**, který si nakonec **prohlédneme ve webovém prohlížeči**.

Struktura HTML stránky
----------------------

Může být překvapením, že HTML stránka musí obsahovat kromě obsahu pro uživatele také **další informace pro prohlížeč a vyhledávače**. Proto má určitou **strukturu**, která tyto informace odděluje od našeho obsahu.

### `<!DOCTYPE>`

Na začátek souboru `index.html` vložíme tzv. tag `DOCTYPE`. Pokud nevíte, kde se na české klávesnici píší špičaté závorky, je to pomocí Pravého Alt a následujících kláves:

![Větší než; menší než na české klávesnici - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/klavesnice/vetsimensi.jpg)

Přidáme řádek:

```
<!DOCTYPE html>
```


Tím **definujeme, že textový soubor je HTML dokumentem**. Vykřičníku si nevšímejte, prostě se tam píše ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

### Hlavička `<head>` a tělo `<body>`

Dále definujeme samotný HTML dokument. Ten je rozdělen na 2 části:

*   **Hlavičku** - Ta obsahuje **informace pro prohlížeč** a vyhledávače.
*   **Tělo** - Zde nalezneme samotný **obsah** webové **stránky**.

Vložme nyní hlavičku a tělo do našeho dokumentu. Hlavičku si necháme zatím prázdnou, do těla vložíme text, který na své stránce chceme mít. Bude to vypadat takto:

```
<!DOCTYPE html>

<html lang="cs-cz">
    <head></head>
    <body>Vítejte na mé stránce!</body>
</html>
```


Prvně otevíráme tag `<html>`. Tím sdělujeme, že odtud bude začínat naše HTML stránka. Následuje **hlavička**, která je vložena mezi tagy `<head>` a `</head>`. A dále **tělo** mezi tagy `<body>` a `</body>`. Nakonec ukončíme i samotnou HTML stránku pomocí `</html>`.

Kód si jistě zaslouží další vysvětlení, pusťme se do něj.

#### Párové tagy

Všimněte si, že konec hlavičky `</head>` se od začátku hlavičky `<head>` liší lomítkem `/`. Takto se píší tzv. **párové tagy**. Párové proto, že jsou dva (**začátek a konec**) a **mezi nimi je vložen jejich obsah**, zde konkrétně za moment vložíme obsah hlavičky. Stejně to máme i s tělem (tag `<body>`), kde definujeme jeho začátek a konec s lomítkem a celá HTML stránka je pak uzavřena v `<html>` a `</html>`.

Ukončovací lomítko píšeme vždy po první lomené závorce, ne na konci. Častá chyba začátečníků je psát chybně např. `<body/>` namísto `</body>`.

#### Atributy tagů

Některé tagy vyžadují zadat také _atributy_, což jsou doplňující parametry. Vkládáme je do otevírajícího tagu a jejich hodnotu píšeme do uvozovek `""` za znak `=`. U tagu `<html>` si všimněte atributu `lang="cs-cz"`, který definuje jazyk stránky. Zde říká, že HTML stránka je v češtině. Pokud bychom chtěli specifikovat, že se jedná o slovenštinu, hodnota by byla `sk`. K atributům se ještě vrátíme.

#### Odsazování

Když vkládáme jeden element do druhého, **odsadíme** řádek pomocí klávesy Tab nebo 4 mezer. Odsazování nemá na funkčnost žádný vliv, ale pomáhá nám jasně vidět, že je `<head>` a `<body>` zleva odskočené, a tudíž patří do výše otevřeného `<html>` elementu.

### Obsah hlavičky

Přesuňme se do hlavičky, kam nyní přidáme ještě několik informací.

#### Kódování

Mezi `<head>` a `</head>` vložme **informaci o kódování**. Dělá se to tagem `<meta>` (jako _metadata_) s následujícím atributem:

```
...

    <head>
        <meta charset="utf-8" />
    </head>
...
```


Prohlížeči jsme tímto sdělili, že je stránka kódována v `UTF-8`, bude tak vědět, jak zobrazit speciální znaky jako např. `č`. Zde je nutné dodat, že toto je pouze informace pro prohlížeč a je nutné stránku v UTF-8 opravdu uložit (což za nás řeší VS Code). Hlavičku jsme také roztáhli na více řádek, protože do ní budeme ještě přidávat elementy. Opět si všimněte dalšího odsazení elementu `<meta ...>` zleva, protože je nyní zanořený jak v elementu `<html>`, tak v `<head>`.

#### Nepárové tagy

Možná jste zaregistrovali lomítko na konci tagu `<meta charset="utf-8" />`. Takto se mohou ukončovat **nepárové tagy**. To jsou ty, které nemají dvě části (začátek a konec), ale **píší se pouze jednou**. Mezi ně právě tag `<meta ... >` patří. U každého tagu si během kurzu řekneme, jestli je párový nebo nepárový.

**Uzavírání nepárových tagů** lomítkem na konci **není povinné** a zda jej psát je otázka preferencí. Výhody jsou, že je na první pohled vidět, že tag nemá nikde dále v kódu uzavírací značku a také, že je dokument kompatibilní s XML, kde se všechny značky musí uzavírat. Pokud vám tato praktika nesedí, lze psát jen např. `<meta charset="utf-8">`. _Párové_ tagy je samozřejmě nutné uzavírat vždy, jinak by nebylo poznat, kde končí. V kurzu budeme uzavírat i nepárové tagy, abychom se vždy zamysleli nad uzavíráním tagů.

#### Titulek `<title>`

Jako další řádek přidejme do hlavičky titulek. Jedná se o párový tag s názvem `<title>`, dovnitř tagu napíšeme text titulku:

```
...

    <head>
        <meta charset="utf-8" />
        <title>Moje první webová stránka</title>
    </head>
...
```


Celkový kód naší stránky nyní vypadá takto:

```
<!DOCTYPE html>

<html lang="cs-cz">
    <head>
        <meta charset="utf-8" />
        <title>Moje první webová stránka</title>
    </head>
    <body>Vítejte na mé stránce!</body>
</html>
```


Pokud nemáte aktivní automatické ukládání, soubor uložíme klávesovou zkratkou Ctrl + S.

### Náš web v prohlížeči

Pokud máte stránku již otevřenou v prohlížeči, stačí ji obnovit klávesovou zkratkou Ctrl + R nebo F5. Případně si soubor `index.html` ve složce s projektem otevřete v prohlížeči znovu. Jak na to jsme si popisovali v lekci [Úvod do HTML](https://www.itnetwork.cz/html-css/webove-stranky). V prohlížeči **uvidíme náš první web**. Bude vypadat jako obrázek níže ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Všimněte si i našeho titulku v textu záložky:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Gratuluji, máte svou první webovou stránku! 🏆

HTML stránku lze definovat i jinak a jistě se setkáte s odlišnými definicemi. Ta uvedená v dnešní lekci je však nejstručnější a nejmodernější. Pokud do stránky neuvedete hlavičku nebo např. element `<body>`, nebude validní a nemusí se ve všech prohlížečích vykreslit správně.

### Snippety Emmet

VS Code nám umožňuje usnadnit si psaní zdlouhavých kódů pomocí předpřipravených šablon.

Když budeme chtít příště napsat podobnou HTML strukturu, můžeme si ve VS Code ulehčit práci napsáním vykřičníku `!` na samostatný řádek a stisknutím klávesy Enter:

![Makro na vygenerování HTML sturktury ve VS Code - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/vscode_structure_macro.png)

VS Code nám potom **HTML strukturu samo vygeneruje**. Tato struktura se ovšem může lišit s každou verzí VS Code, může mít různé věci navíc a může v ní být potřeba přepsat atribut `lang` na `"cs"`, aby byl obsah vyhledávači chápán jako český.

Obsah vygenerovaný pomocí VS Code po odenterování vykřičníku bude dle verze podobný tomuto:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
```


Kód obsahuje i nějaké věci, které si vysvětlíme až v navazujícím kurzu. Nicméně upravit jej do naší podoby je lehčí, než psát jej celý znovu. U nějaké další stránky tuto funkci můžete použít.

### Bonus - Rozšíření Live Server

Na závěr si ukažme ještě takový bonus.

Abychom se mohli rychleji podívat, **jak naše stránka ve skutečnosti vypadá**, můžeme využít takzvaného **live serveru**. Ten umožní živé **zobrazení našeho projektu** i ve chvíli, kdy měníme jeho kód, aniž bychom soubor museli ukládat. Tuto službu musíme ale do programu Visual Studio Code **instalovat jako rozšíření** (je zcela zdarma, ale nejedná se o oficiální funkčnost a tak není garantováno, že bude s každou verzí VS Code fungovat).

Pokud si jej chcete zkusit, postupujte následovně:

1.  Otevřete nabídku rozšíření _Extensions_ (poslední ikona čtverečků v levém svislém menu)

![Ikony extensions ve VS Code - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/vscode_plugins_icon.png)

2.  Do vyhledávacího pole zadejte heslo "Live Server" a toto rozšíření nainstalujte.

Jakmile máte rozšíření nainstalované, můžete kliknout na možnost otevřít s live serverem (_Open With Live Server_), kterou najdete jako první možnost po kliknutí pravým tlačítkem myši na soubor `index.html`. Stejnou možnost najdete v menu, které vyvoláte kliknutím pravým tlačítkem myši přímo do stránky `index.html` ve VS Code, kam píšeme kód:

![Otevření souboru s live serverem - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/open_with_live_server.png)

V příští lekci, [Základní HTML tagy](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-zakladni-tagy), si uvedeme základní HTML tagy, které budete pro váš web potřebovat.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64cd66c10d852)

# Lekce 3 - Základní HTML tagy
V minulé lekci, [Struktura HTML stránky](https://www.itnetwork.cz/html-css/webove-stranky/html-struktura), jsme si ukázali, jak vypadá struktura HTML stránky a vytvořili jsme si první stránku s krátkým textem.

Dnes si v HTML tutoriálu uvedeme **základní HTML tagy** a vytvoříme svou první informačně hodnotnou stránku.

Odstavce `<p>`
--------------

Minule jsme pro zjednodušení text vložili jen tak do `<body>`. V HTML by měl být souvislý text ale ideálně rozdělen do odstavců, které označujeme tagem `<p>` (jako anglicky _paragraph_). Tag `<p>` je párový a obaluje text, který má uvnitř odstavce být. Před text tedy píšeme tag `<p>`, za textem odstavec uzavřeme tagem `</p>`. Ve výchozím stylování se před a za odstavcem pak vykreslí mezery a všechny řádky odstavce se vypíší na jeden řádek.

V naší stránce smažeme text v `<body>` a místo něj vložíme několik odstavců:

```
<!DOCTYPE html>

<html lang="cs-cz">
    <head>
        <meta charset="utf-8" />
        <title>Moje první webová stránka</title>
    </head>
    <body>
        <p>Toto je první odstavec</p>
        <p>Toto je první věta druhého odstavce.
    Toto je druhá věta druhého odstavce</p>
    </body>
</html>
```


Stránku uložíme a obnovíme okno prohlížeče. Výsledek vypadá takto:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Všimněte si, že odřádkování v HTML kódu nezpůsobí odřádkování výsledného textu, viz dále.

### Odsazování

Protože v `<body>` jsou nyní vnořené další tagy, rozepsali jsme jej na několik řádek a jeho obsah odsadili zleva o další úroveň. Je tak krásně vidět, jaký tag je v kterém vnořený.

Kód samozřejmě můžeme psát i úplně hloupě, např. většinu do jednoho řádku:

```
<!DOCTYPE html>

<html lang="cs-cz"><head>
<meta charset="utf-8" />
<title>Moje první webová stránka</title>
    </head>
    <body><p>Toto je první odstavec</p><p>Toto je první věta druhého odstavce. Toto je druhá věta druhého odstavce</p></body>
</html>
```


Určitě ale vidíte, že není vůbec jasné, kam vkládat další značky a budeme je také zapomínat uzavírat nebo je uzavřeme na špatném místě. **Proto píšeme elementy na samostatné řádky a každý vnořený element odsadíme zleva.**

### Odřádkování v HTML

Jak je vidět, v HTML **nehraje** vůbec žádnou **roli odřádkování**. Druhý odstavec máme napsaný na 2 řádky, ale zobrazí se jako jeden řádek. Prohlížeč totiž přechod na nový řádek na stránce zobrazí jen jako mezeru.

#### Tag `<br>`

Pokud bychom z nějakého důvodu chtěli v odstavci odřádkovat, využijeme nepárový tag `<br />` (jako _line **br**eak_ - konec/zalomení řádku). Vypadalo by to nějak takto:

```
<p>Toto je první odstavec</p>
<p>Toto je první věta druhého odstavce.<br />
Toto je druhá věta druhého odstavce</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Častou chybou je používání dvou `<br /><br />` za sebou k oddělování odstavců namísto tagu `<p>`, to je špatně.

Zvýraznění textu v HTML - Frázové tagy a nadpisy
------------------------------------------------

Když je nějaká část textu důležitá, sdělíme to uživateli, prohlížeči a vyhledávačům pomocí zvýrazňovacích tagů. Uživateli se bude text lépe číst, vyhledávače se zas budou na důležité části textu více soustředit a naše stránky tak navštíví více lidí. Jedná se hlavně o tzv. frázové tagy a nadpisy. Frázové proto, že nám umožňují v textu zvýraznit nějakou frázi (část). Na optimalizaci webů pro vyhledávače nejen pomocí zvýrazňování se potom soustředí tzv. [SEO](https://www.itnetwork.cz/seo), o kterém si také budeme průběžně něco zmiňovat.

### Kurzíva `<em>` a tučný text `<strong>`

Text v tagu `<em>` (_emphasis_ - zvýraznění) se zobrazí jako kurzíva (italika). Ale to není vše. Říkali jsme si, že HTML slouží hlavně k definování _významu_. Text v `<em>` se bere jako **důležitý**, internetové vyhledávače (např. Google) se o něj pak zajímají více, než o ostatní text a na tato klíčová slova na naše stránky pak přivedou více návštěvníků. Samozřejmě ale nemůžeme udělat celý text na stránce v `<em>`, to by nemělo žádný efekt ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Podobně text v tagu `<strong>` je vnímán jako silně zvýrazněný (strong emphasis), tedy jako **ještě důležitější**. Prohlížeč ho zobrazí jako tučné písmo.

Ve starých materiálech můžete narazit na zvýraznění textu tagy `<b>` (_bold_) a `<i>` (_italic_). Ovšem ty text pouze vykreslí jiným stylem a jeho význam pro prohlížeče se vůbec nezmění. Proto se již pro zvýraznění nepoužívají.

Zvýraznění si můžeme vyzkoušet, zdůrazníme na stránce teď důležitou skutečnost. Kód píšeme stále mezi `<body>` a `</body>`:

```
...

<body>
    <p>Pro zneškodnění výbušniny přestřihněte <strong>červený</strong> drát, modrý drát může zapříčinit explozi.</p>
    <p>Spusťte editor registru příkazem <em>regedit.exe</em>. <strong>Neručím za případné škody!</strong></p>
</body>

...
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Frázové tagy pro zvýraznění jsou **řádkové**. Nezačínají na stránce tedy nový blok, ale pokračují v existujícím řádku. Proto je ani v kódu nedáváme na nový řádek. Na samostatné řádky vkládáme pouze blokové elementy, např. zde odstavce `<p>`.

Tagy samozřejmě můžeme kombinovat, např. text udělat tučný i kurzívou:

```
<p><strong><em>Tento text bude vykreslen jako kurzíva i jako tučný.</em></strong></p>
```


#### Překřížení HTML tagů

Dejte si pozor, aby byly tagy ukončeny ve správném pořadí!

V příkladu výše první ukončíme kurzívu, protože jsme ji otevřeli jako poslední. Např. takto překřížené tagy jsou chybou a některé prohlížeče nemusí zvýraznění správně pochopit:

```
<p><strong><em>Tagy kolem tohoto textu jsou překřížené a může se špatně vykreslit.</strong></em></p>
```


### Podtržení `<u>`

K podtržení textu existuje tag `<u>` (_underline_). Ten se však příliš nepoužívá, protože lidé jsou zvyklí, že podtržené jsou odkazy. Přesto si jej pro úplnost vyzkoušejme, i když byste jej na webu neměli používat. Veškerý další kód vkládáme stále mezi `<body>` a `</body>`, pokud nebude uvedeno jinak:

```
<p>Často vídávám psát <u>připoměl</u>, i když to není gramaticky správně.</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

### Přeškrtnutí `<s>`

Přeškrtnutý text označíme opět párovým tagem `<s>` (_strike_ - přeškrtnutý). Jedná se o text, který již není aktuální nebo korektní (např. minulá cena zboží nebo zdůraznění nesprávného tvrzení/postupu).

Ukázka:

```
<p>Vítejte v České republice. Za hodinu internetu nyní na cestách zaplatíte
<s>10 Kč</s> 200 Kč.</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

### Optické zvýraznění `<mark>`

Jako poslední si zmiňme tag `<mark>`, který slouží k optickému zvýraznění nějaké části textu. Tento text **není důležitý pro vyhledávače** (jako v případě `<strong>`), ale pro uživatele. Můžeme zvýraznit v textu důležitou skutečnost, prohlížeč tento text vykreslí se žlutým pozadím:

```
<p>Během roku se návštěvnost webu itnetwork.cz <mark>zvýšila o 300 %</mark>.</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Pokud vám výše zmíněné tagy připomněly tlačítka v MS Wordu, máte pravdu. Jedná se o základní typografii, která je přítomna ve většině textových editorů.

Frázových tagů existuje ještě několik, ale pro potřeby našeho prvního webu je nyní nevyužijeme. Zájemce odkáži na manuálový kurz [HTML od A do Z](https://www.itnetwork.cz/html-css/html5). Vy budete ve většině případů používat hlavně tag `<strong>`, jelikož si tohoto textu poté všímá vyhledávač.

### Nadpisy `<h1>` - `<h6>`

Nadpisy jsou považovány za nejvýraznější text. Zapisují se párovým tagem `<h*>` (_header_), resp. `<h1>` až `<h6>`. HTML poskytuje **6 úrovní nadpisů**, kde `<h1>` je nadpis nejvyšší úrovně a `<h6>` je nadpis úrovně nejnižší. Kromě velikosti nadpisů zde hraje roli především **důležitost pro vyhledávače** - dohledatelnost obsahu, který do nadpisů vložíme. Nadpis `<h1>` je vnímán jako nejvýznamnější, nadpis `<h6>` pak jako nejméně významný, ale stále lépe dohledatelný, než prostý text.

Nadpis `<h1>` by měla být ta úplně první věc na stránce a měl by obsahovat název stránky. Jako další by měly následovat nadpisy `<h2>`, které rozdělují stránku na další podsekce. Další nadpisy se využívají již méně často, zejména ke členění textu v článku.

Nadpisy jsou na rozdíl od frázových tagů **blokové** tagy, podobně, jako odstavce. To znamená, že nadpis zabírá vždy celý řádek.

Ukažme si příklad nadpisu:

```
<h1>Můj první web</h1>
    <p>Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Projekt - HoBiho portfolio
--------------------------

Začněme pracovat na jednoduchém osobním webu, který budeme během kurzu postupně rozšiřovat a vylepšovat, až ho nakonec nahrajeme na internet. Web s nadpisy a zvýrazněním textu by mohl vypadat například takto:

```
<h1>Můj první web</h1>
    <p>Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.</p>

<h2>O mně</h2>
    <p>Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.</p>
    <p>Rád čtu a někdy (hlavně v létě) i sportuju.</p>
    <p>Mým hlavním koníčkem (a doufám že jednou i zaměstnáním) je <strong>programování</strong>!</p>

<h2>Dovednosti</h2>
    <p>V prváku jsem začal ve škole s programovacím jazykem PASCAL. Hledal jsem na internetu nějaké lepší jazyky a náhodou jsem narazil na itnetwork.cz, kde se nyní učím <strong>HTML</strong> a <strong>Javu</strong>. Základy těchto jazyků ovládám.</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Tímto máme hotovou první jednoduchou stránku, která má zároveň informační hodnotu a mohla by teoreticky již viset na internetu. Výsledný kód máte opět níže ke stažení i včetně celé HTML struktury.

V příští lekci, [Obrázky a odkazy v HTML](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-obrazky-odkazy), si ukážeme přidání obrázků a odkazů na webovou stránku.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Projekt](https://www.itnetwork.cz/api/Articles-Article/file/4e3949ef01a3e)

# Lekce 4 - Obrázky a odkazy v HTML
V minulé lekci, [Základní HTML tagy](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-zakladni-tagy), jsme se naučili zvýrazňovat text a používat nadpisy. Vytvořili jsme si také první stránku jednoduchého webu.

Dnes si v HTML tutoriálu ukážeme přidání obrázků a odkazů na naší vytvořenou webovou stránku.

Obrázky `<img>`
---------------

Co by to bylo za web bez obrázků? Obrázky vložíme pomocí nepárového tagu `<img />` (_image_ - obrázek). Setkáváme se s dalším tagem, který vyžaduje **atributy** (již jsme jimi dříve specifikovali např. jazyk `lang` v elementu `<html>` nebo kódování v `<meta>`). Víme, že atribut je doplňující informace k tagu. U obrázků typicky uvádíme 2 atributy:

*   `src` (_source_) - **cestu k souboru obrázku** a
*   `alt` (_alternate text_ - alternativní text) - **popis obrázku** pro vyhledávače, lidi s hlasovými čtečkami a jako alternativní obsah pro případ, že se obrázek nezobrazí

Dobrou praktikou je mít všechny obrázky k webu v nějaké složce, aby se nemíchaly s dalšími soubory.

Vytvoříme si tedy ve složce s webem `prvni_web/` novou složku, kterou pojmenujeme `obrazky/`. Do ní si vložíme obrázek, který budeme chtít na stránce zobrazit. Můžete si stáhnout a použít zkušební obrázek níže a to tak, že na něj kliknete pravým tlačítkem myši a zvolíte možnost _Uložit obrázek jako..._. Následně jej uložíte do složky `obrazky/`:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/avatar.jpg)

Nyní si v kódu zkusíme vložit tento obrázek do nového odstavce:

```
<p>
    <img src="obrazky/avatar.jpg" alt="Programátor HoBi" />
</p>
```


Atribut `alt` bývá často vynecháván, ale to je chyba. Hraje totiž svou roli např. **ve vyhledávačích obrázků** (Google Images) nebo v hlasových čtečkách.

Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Obrázek je pomerně velký, za moment si ukážeme, jak jej zmenšit.

### Proč se obrázek nezobrazí - Nejčastější chyby

Obrázek je první součást naší stránky, která závisí na dalších souborech. Pokud jej špatně vložíme, nezobrazí se.

Častou chybou je, že v atributu `src` uvedeme celou **absolutní cestu** k obrázku **v našem počítači**, např. `C:\users\Karel\OneDrive\prvni_web\obrazky\avatar.jpg`. Když potom nahrajeme web na internet, návštěvník na svém počítači bude mít těžko naši složku `Karel/` s naším diskem a obrázek se mu nezobrazí.

Proto **píšeme vždy jen relativní část cesty od složky, ve které se nachází stránka, na které obrázek používáme**. Obrázek musíme do složky samozřejmě nahrát, naše stránka musí být v nadřazené složce a názvy složek a souboru obrázku a souboru uvedeném v HTML kódu se musí na písmeno shodovat.

Opět nezapomeneme na rozlišování malých a velkých písmen, nezaměníme `.jpeg` za `.jpg` a naopak. Také v názvech souborů (i HTML stránek, i obrázků) **nikdy nepoužíváme diakritiku**, obrázek by se na jiných operačních systémech nemusel načíst. Raději se vyhýbáme i mezerám v názvech souborů, které nahradíme např. pomlčkami `-`.

Pokud máte s vložením obrázku přesto problémy, stáhněte si ukázkové řešení na konci lekce.

### Typy obrázků pro web

Až budou naše stránky nahrané na internetu, stažení obrázku bude nějakou dobu trvat. Tuto skutečnost musíme mít na paměti. Používejte tedy úsporné formáty, jako jsou JPEG, PNG nebo WebP, kde má výsledný obrázek malou velikost díky kompresi. JPEG se zpravidla používá na velké obrázky a fotky, PNG na ikony, nákresy a obrázky, kde jsou jednobarevné plochy. Při použití formátu JPEG volíme kvalitu okolo 90%, jinak obrázek obsahuje ošklivé artefakty. U velkých fotografií můžeme sáhnout s kvalitou trochu níže, aby soubor nebyl příliš velký. WebP je pak formát navržený přímo pro web, který je moderní úspornější alternativou k předchozím dvěma formátům.

Rozhodně se vyhněte formátu BMP, který je bezkompresní nebo formátu GIF, který u neanimovaných obrázků jen zbytečně poškodí paletu.

### Nastavení výšky a šířky obrázku

Výšku a šířku obrázku je možné nastavit pomocí atributů `width` a `height`. Hodnoty můžeme zadat buď číslem (např. `width="64"`) a budou označovat velikost v pixelech, nebo procenty (např `width="50%"`). Pokud je zadán jen jeden atribut, další se dopočítá tak, aby zůstal zachován poměr stran. Opět si však musíme uvědomit, že obrázek by měl být na webu v té velikosti, ve které se bude zobrazovat. Měli bychom ho tedy prvně zmenšit v grafickém editoru (např. Paint.NET), a ne ho nahrát na web veliký a zmenšit si ho až v HTML. Prohlížeč by jinak musel načíst celý velký obrázek, zmenšit ho a až potom ho zobrazit. To by jistě chvíli trvalo.

S těmito znalostmi si můžeme zkusit obrázek zmenšit a kód upravit do následující podoby:

```
<p>
    <img src="obrazky/avatar.jpg" alt="Programátor HoBi" width="30%" height="30%" />
</p>
```


Výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

To je k obrázkům vše.

Odkazy `<a>`
------------

Posledním a možná nejdůležitějším tagem, který si tu zmíníme, je odkaz. Vložíme ho tagem `<a>` (_anchor_ - zakotvit, připoutat). Tag `<a>` je párový a obaluje text, který má být odkazem. Zadáváme mu atributy:

*   `href` (_Hypertext REFerence_ - hypertextový odkaz), kde je cílová stránka, na kterou odkaz vede.
*   Někdy se hodí, aby se stránka otevřela v nové záložce prohlížeče, v tom případě přidáme atribut `target` (_target_ - cíl) s hodnotou `_blank` (_blank_ - čistý).

Ukázka kódu s odkazem:

```
<a href="http://www.google.com">odkaz na Google</a>
```


Nemusíme se odkazovat jen na stránky, ale také na soubory. Kliknutí na odkaz potom vyvolá jejich stažení.

Ukázka kódu pro stažení souboru:

```
<a href="http://www.mujweb.cz/soubor.zip">Stáhnout soubor.zip</a>
```


### Řádkové a blokové elementy

Již jsme nakousli, že HTML elementy se dělí na **řádkové a blokové**:

*   **Blokové** jsou elementy, které za běžných okolností nedává smysl dávat vedle sebe. Roztahují se přes celou šířku stránky, pokud je nenastavíme jinak. Jedná se např. o odstavce a nadpisy.
*   **Řádkových**, např. obrázků, může být pak na jednom řádku více vedle sebe a nezabírají celou šířku stránky.

Důležitý rozdíl mezi nimi je také ten, že **řádkové elementy mohou v sobě obsahovat zas jen řádkové elementy**, zatímco **blokové mohou v sobě obsahovat jak řádkové, tak blokové**. Odkaz je element řádkový, stejně jako všechny elementy, co jsme si zatím zmínili, kromě nadpisů, které jsou blokové. **Do odkazu tedy můžeme dát klidně i obrázek, ale ne nadpis**. Když bychom chtěli odkaz v nadpisu, vložíme odkaz do nadpisu, nikoli nadpis do odkazu.

✗ Špatně

```
<a href="https://www.google.com"><h1>Strýček Google</h1></a>
```


**✔ Správně**

```
<h1>Strýček <a href="https://www.google.com">Google</a></h1>
```


Rozšíření projektu - Obrázky a odkazy
-------------------------------------

Když vložíme vše, co jsme se dnes naučili, do kódu webu, bude vypadat takto:

```
<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8" />
    <title>Moje první webová stránka</title>
</head>

<body>
    <h1>Můj první web</h1>
    <p>Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.</p>
    <p><img src="obrazky/avatar.jpg" alt="Programátor HoBi" width="30%" height="30%" /></p>

    <h2>O mně</h2>
    <p>Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.</p>
    <p>Rád čtu a někdy (hlavně v létě) i sportuju.</p>
    <p>Mým hlavním koníčkem (a doufám že jednou i zaměstnáním) je <strong>programování</strong>!</p>

    <h2>Dovednosti</h2>
    <p>V prváku jsem začal ve škole s programovacím jazykem PASCAL. Hledal jsem na internetu nějaké lepší jazyky a náhodou jsem narazil na itnetwork.cz, kde se nyní učím <strong>HTML</strong> a <strong>Javu</strong>. Základy těchto jazyků ovládám.</p>

    <p>Tato stránka je vytvořena podle HTML tutoriálů na <a href="http://www.itnetwork.cz" target="_blank">itnetwork</a>.</p>
</body>

</html>
```


A výsledek:

Moje první webová stránka

file:///C:/User­s/David/OneDri­ve/prvni\_web/in­dex.html

Po kliknutí na odkaz se ITnetwork otevře v nové stránce.

### Vytvoření podstránky - Kontakt

Na závěr si vyzkoušejme ještě jednoduchou navigaci v rámci stránky. Vytvoříme si ve VS Code nový HTML soubor `kontakt.html`. Pro snadnější práci si můžeme celou složku `prvni_web/` otevřít ve VS Code tak, že na ni v průzkumníku Windows klikneme pravým tlačítkem myši, zvolíme _Zobrazit více možností_ (Windows 11+) a pak možnost _Otevřít v Code_ (ve Windows 10 a starších bude rovnou možnost _Otevřít v Code_). Nové soubory a složky pak můžeme snadno vytvářet kliknutím na levý panel se souborovou strukturou webu. Klikneme tedy na prázdné místo pod `index.html` pravým tlačítkem myši a zvolíme možnost "Nový soubor", poté vyplníme název `kontakt.html`.

Půjde o kontaktní stránku, na kterou přejdeme ze stránky hlavní (z `index.html`) a naopak z kontaktní stránky se budeme moci na hlavní stranu vrátit.

Kód nové stránky bude následující:

```
<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8" />
    <title>Kontaktujte mě</title>
</head>

<body>
    <h1>Kontakt</h1>
    <p><img src="obrazky/email.png" alt="email" /></p>
    <p>
    Pokud mi chcete něco sdělit, napište mi email na <strong>hobi (zavináč) hobi (tečka) cz.</strong>
    </p>

    <p><a href="index.html">Zpět na hlavní stranu</a></p>
</body>

</html>
```


Stránku uložíme do složky s webem. Obrázek (ikonku) emailu si můžete stáhnout níže a vložit do složky `obrazky/`:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/email.png)

Nebo si vybrat vlastní z webu [http://www.iconfinder.com](http://www.iconfinder.com/), kde máte k dispozici tisíce ikonek pro vaše webové stránky. Ikony jsou zadarmo, u každé je napsaná licence, některé můžete použít libovolně, u některých je třeba uvést odkaz na autora. Takových webů, které nám pomohou s tvorbou grafiky, si během kurzu zmíníme ještě několik.

Zkusme si stránku `kontakt.html` otevřít v prohlížeči. Bude vypadat asi takto:

Kontaktujte mě

file:///C:/User­s/David/OneDri­ve/prvni\_web/kon­takt.html

Po kliknutí na odkaz níže se z ní vrátíme zpět na hlavní stránku. Aby byla navigace kompletní, dejme ještě do hlavní stránky odkaz na kontaktní stránku, třeba do odstavce "O mně":

```
<p>Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT. Kontaktovat mě můžete na <a href="kontakt.html">kontaktní stránce</a>.</p>
```


Máme hotovou obousměrnou navigaci v rámci našeho webu! ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Dnešní kód je jako vždy ke stažení níže.

V následujícím cvičení, [Řešené úlohy k 1.-4. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-obrazky-odkazy), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/5199f5d932d19)

# Řešené úlohy k 1.-4. lekci HTML a CSS
V minulé lekci, [Obrázky a odkazy v HTML](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-obrazky-odkazy), jsme se naučili do stránek vkládat obrázky a odkazy.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Danzbo](https://www.itnetwork.cz/images/img/person.png)
    
    > Po pauze od učení HTML, mě toto cvičení velmi bavilo ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Danzbo  
    
*   ![Jan Doskočil](https://www.itnetwork.cz/images/img/person.png)
    
    > To cvičení s domem mi dalo chvíli zabrat, velmi dobré na procvičení odkazů.
    
    Jan Doskočil  
    
*   ![Jaroslav Janik](https://www.itnetwork.cz/images/img/person.png)
    
    > Super cvičení, hlavně to poslední.
    
    Jaroslav Janik  
    
*   ![Vladimír Maliniak](https://www.itnetwork.cz/images/img/person.png)
    
    > Hezké cvičení na zapamatování odkazů ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png), sice chvíli zabralo ale fajne ![;)](https://www.itnetwork.cz/images/img/smileys/wink.png)
    
    Vladimír Maliniak  
    
*   ![Zbyněk Pokorný](https://www.itnetwork.cz/images/img/person.png)
    
    > Ty cvičení celkem dobrý až na to třetí s tím hradem. Tím sem se celkem potrápil, ale na konec jsem to zvládl. Fakt dobře připravené.
    
    Zbyněk Pokorný  
    
*   ![Tomáš Raibr](https://www.itnetwork.cz/images/img/person.png)
    
    > Mission complete
    
    Tomáš Raibr  
    

Jednoduchý příklad
------------------

Vytvořte HTML dokument s příslušnou strukturou, nastavte titulek stránky na "Kos Černý" a do dokumentu vložte následující text rozčleněný do 3 odstavců (zdroj: [http://cs.wikipedia.org/…%8Dern%C3%BD](https://cs.wikipedia.org/wiki/Kos_%C4%8Dern%C3%BD)).

Text:

```
Kos černý (Turdus merula) je pták žijící v celé Evropě a v jižní Asii, byl introdukován i do Austrálie a na Nový Zéland. Díky své přizpůsobivosti se adaptoval na život v blízkosti člověka a úspěšně žije a hnízdí i v těsném sousedství lidských sídel. Samci jsou nepřehlédnutelní svým charakteristickým černým peřím a žlutým zobákem, upozorňují na sebe také melodickým zpěvem.

Kos černý je středně velký pták, o něco menší než hrdlička zahradní. Dospělý samec je matně černý s oranžově žlutým zobákem a žlutým kroužkem okolo očí. Samice je hnědavá s bělavějším hrdlem a nezřetelně skvrnitou hrudí, nohy jsou téměř černé, zobák má tmavý, jen částečně oranžový. Mláďata jsou podobná samici, jsou ale světlejší a mohou mít hnědě tečkovanou hruď a světlé podélné proužky na zádech. Samice ani mláďata nemají oční kroužek.

Po celé Evropě je populace kosa černého rozdělena na dvě oddělené subpopulace, které se liší způsobem života ve vztahu k člověku. Původní, lesní populace, stále žije skrytým způsobem života v jehličnatých i listnatých lesích, populace městská, urbánní, se přizpůsobila životu v intravilánech obcí a v současnosti početně převyšuje lesní kosy. Městští kosové jsou právě ti, se kterými člověk běžně přichází do kontaktu.
```


Podoba výsledného dokumentu:

Kos Černý

Cvičení z ITnetwork.cz

Pokročilý příklad
-----------------

Vytvořte HTML dokument s následujícím textem a obrázkem tak, aby vypadal jako na screenshotu níže.

Text:

```
Jsme česká IT sociální síť s širokou komunitou aktivních členů. Hostujeme největší databázi volně dostupných článků a tutoriálů o programování a IT obecně na českém internetu. Na ITnetwork přicházejí nováčci a stávají se z nich zkušení programátoři. A jak víte, ajťáci se v životě mají nemají vůbec špatně. Můžeš si tu vytvořit portfolio a nahrávat své aplikace, na které získáš zpětnou vazbu a hodnocení. I zkušení programátoři zde samozřejmě naleznou nové materiály, inspiraci a výzvy.
```


Obrázek:

![Logo ITnetwork - Webové stránky krok za krokem](https://www.itnetwork.cz/images/193/html/cviceni/itnetwork.png)

Podoba výsledného dokumentu:

Obrázek a zvýraznění

Cvičení z ITnetwork.cz

Příklad pro náročné - BONUS
---------------------------

Vytvořte 7 HTML dokumentů, které reprezentují jednotlivé lokace v online hře. Lokace obsahují vždy nadpis, obrázek a odstavec textu. Název a textový popis si vymyslete, obrázky jsou níže ke stažení. Pod textem se nacházejí odkazy na okolní lokace, realizované pomocí obrázkových odkazů (šipek) na okolní dokumenty. Jak jsou na sebe lokace naodkazované znázorňuje tato mapa:

![Cvičení k HTML – Mapa lokací - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/csp/cviceni/mapa.png)

Ukázka obrazovky jedné lokace:

Dům

Cvičení z ITnetwork.cz

Níže máte ke stažení potřebné obrázky.

### Obrázky šipek pro odkazy

![Šipka nahoru - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/nahoru.png) ![Šipka doleva - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/doleva.png) ![Šipka doprava - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/doprava.png) ![Šipka dolů - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/dolu.png)

### Obrázky lokací

![Dům - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/dum.png) ![Hrad - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/hrad.png) ![Les - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/les.png) ![Les bez straky - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/les2.png) ![Rybník - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/php/cviceni/rybnik.png)

V příští lekci, [Tabulky v HTML](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-tabulky-a-seznamy), si ukážeme tabulky.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

K absolvování tohoto cvičení prosím splň všechny příklady tím, že je úspěšně odevzdáš k otestování.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/5453c5bc36679)

# Lekce 5 - Tabulky v HTML
V předešlém cvičení, [Řešené úlohy k 1.-4. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-obrazky-odkazy), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním **HTML tutoriálu** si ukážeme, jak se dělají **tabulky**, které na našich stránkách budeme občas potřebovat. Určitě jste někdy v [Excelu](https://www.itnetwork.cz/ms-office/excel) vytvářeli tabulku, např. na rozvrh hodin nebo jako přehled výdajů za novou kuchyň. Tabulky nám umožňují přehledně vypsat text nebo jiné HTML elementy do **řádků** a **sloupců**. Můžeme tak vytvořit např. katalog produktů nebo kontakty na lidi ve firmě. Například na ITnetwork se tabulky mimo jiné využívají na výpis programů a tutoriálů.

V dávné minulosti se tabulky dokonce používaly na rozvržení celé stránky. Dnes už jsou pro tyto účely ovšem lepší nástroje a **používání tabulek omezujeme opravdu jen na případy, kdy chceme uživateli zobrazit přehledně nějaká data**. Rozvržení elementů na stránce si ukážeme dále v kurzu.

Tabulka `<table>`
-----------------

Vytvořme si první, jednoduchou HTML tabulku. Ve VS Code si vytvořme nový HTML soubor `tabulka.html`. HTML strukturu si můžeme nyní v novém prázdném souboru zkusit vygenerovat pomocí napsání `!` a stisknutí klávesy Enter, jak jsme si již ukazovali. Výsledkem bude kód podobný tomuto:

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
```


Přepíšeme atribut `lang` na hodnotu `cs-cz` a strukturu máme připravenou. Element `<meta>` s atributem `viewport` definuje styly pro mobilní zařízení a dostaneme se k němu až v navazujícím kurzu. Můžete jej v kódu ponechat, nijak nám nevadí.

Dále mezi `<body>` a `</body>` vložíme jednoduchou tabulku. Kód si hned vysvětlíme:

```
<table border="1">
    <tr>
        <td>Buňka 1</td>
        <td>Buňka 2</td>
        <td>Buňka 3</td>
    </tr>
    <tr>
        <td>Buňka 4</td>
        <td>Buňka 5</td>
        <td>Buňka 6</td>
    </tr>
</table>
```


Všimněte si opět přehledného odsazení kódu zleva podle zanoření elementů.

Soubor uložíme a otevřeme v prohlížeči. Výsledek bude vypadat takto:

Jednoduchá tabulka

file:///C:/User­s/David/OneDri­ve/prvni\_web/ta­bulka.html

#### Tabulka

Celou tabulku jsme uzavřeli mezi párové tagy `<table>` a `</table>`.

#### Rámeček tabulky `border`

Protože stylování webových stránek se budou věnovat samostatné lekce, my si zde prozradíme pouze **atribut** `border`. Ten označuje tloušťku rámečku tabulky. Pokud jej neuvedeme, má hodnotu `0`, tedy je vypnutý. Výše jsme ho nastavili na `1` pixel, abychom rámeček tabulky vůbec viděli. Změnu barvy a stylu rámečku si ukážeme až dále v kurzu, kdy se budeme věnovat stylování.

### Řádky tabulky `<tr>`

Každý řádek tabulky uzavřeme do párového tagu `<tr>` (jako **t**able **r**ow - řádek tabulky).

### Buňky tabulky `<td>`

Jednotlivé buňky jsou poté v řádku obalené opět párovým tagem `<td>` (jako **t**able **d**ata).

Tabulka s hlavičkou
-------------------

Tabulka může mít navíc i hlavičkový řádek, případně patičku. Asi vás nepřekvapí, že pro to existují podobné tagy jako pro hlavičku a tělo HTML stránky. Celá tabulka bude opět v tagu `<table>`.

### Hlavička `<thead>`

Hlavičkou tabulky se myslí první řádek `<tr>`, který popisuje, co hodnoty ve sloupcích znamenají. Obvykle je dobrý nápad takový řádek přidat, protože tabulka je potom přehlednější.

První řádek `<tr>` tabulky pak většinou obalujeme do párového elementu `<thead>` (jako **t**able **h**ead). Toto obalení není povinné, ale zvyšuje přehlednost kódu tabulky.

#### Hlavičková buňka `<th>`

Když do řádku vkládáme buňky hlavičky, namísto `<td>` pro ně používáme tag `<th>` (jako **t**able **h**ead).

### Tělo tabulky `<tbody>`

Tělo tabulky, což je část tabulky bez hlavičky, potom obalíme do tagu `<tbody>` (jako **t**able **b**ody). Ten opět slouží pro přehlednost a teoreticky jej můžeme vynechat, ovšem za cenu nepřehlednějšího kódu.

### Patička tabulky `<tfoot>`

Za `<tbody>` může následovat podobně `<tfoot>`, obsahující _patičku_ tabulky. Tam může být např. celkový součet, celkové hodnocení a další shrnující informace všech řádků tabulky. Do patičky pak vkládáme řádek `<tr>` a do něj běžné buňky `<td>`.

Mohlo by vás napadnout, že jako existuje `<th>`, mohlo by existovat i `<tf>`, ale není tomu tak.

### Ukázka HTML tabulky s hlavičkou - Tabulka produktů

Nejlépe vše pochopíme na další ukázce. Vytvoříme si tabulku s několika notebooky a jejich parametry. Ikonky notebooků jsem pro vás připravil, stáhněte si je níže a uložte si je do složky `obrazky/`, která bude ve složce s naší stránkou `tabulka.html`:

![Notebook - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/nb1.png) ![Notebook - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/nb2.png) ![Notebook - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/nb3.png)

Naši jednoduchou tabulku výše nyní přetvoříme na pokročilejší, vložte místo ní kód níže:

```
<table border="1">
  <thead>
    <tr>
        <th>Náhled</th>
        <th>Typ</th>
        <th>Procesor</th>
        <th>Graf. karta</th>
        <th>Skladem</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td><img src="obrazky/nb1.png" alt="Notebook"></td>
        <td>AB8AC9</td>
        <td>Intel Atom</td>
        <td>Nvidia</td>
        <td>Ano</td>
    </tr>
    <tr>
        <td><img src="obrazky/nb2.png" alt="Notebook"></td>
        <td>GS8DGF</td>
        <td>AMD</td>
        <td>ATI</td>
        <td>Ano</td>
    </tr>
    <tr>
        <td><img src="obrazky/nb3.png" alt="Notebook"></td>
        <td>KG1862A</td>
        <td>Neuvedeno</td>
        <td>Neuvedeno</td>
        <td>Ne</td>
    </tr>
  </tbody>
</table>
```


Výsledek:

Jednoduchá tabulka

file:///C:/User­s/David/OneDri­ve/prvni\_web/ta­bulka.html

Vidíme, že tabulka má hlavičku. Text v hlavičce je tučný a centrovaný. Jinak zde není zatím nic nového.

Slučování buněk tabulky
-----------------------

Sousední buňky v tabulce můžeme **slučovat** podobně jako v již zmíněném Excelu.

### Sloučení buněk vodorovně - `colspan`

Pokud budeme slučovat **sloupce v nějakém řádku**, zapíšeme buňku jen jednou a dáme ji atribut `colspan` (jako column span - rozpětí sloupců). Ten bude mít hodnotu s číslem, kolik buněk propojuje.

V tabulce, kterou jsme si vytvořili výše, se nabízí propojit buňky s textem "Neuvedeno" v jednu. Hodnota `colspan` buňky bude tedy 2 (spojujeme 2 buňky v řádku). Druhou buňku z HTML kódu úplně smažeme. Kód posledního řádku tedy upravíme takto:

```
<tr>
    <td><img src="obrazky/nb3.png" alt="Notebook"></td>
    <td>KG1862A</td>
    <td colspan="2">Neuvedeno</td>
    <td>Ne</td>
</tr>
```


A výsledek:

Jednoduchá tabulka

file:///C:/User­s/David/OneDri­ve/prvni\_web/ta­bulka.html

### Sloučení buněk svisle - `rowspan`

Obdobně můžeme spojovat i **řádky v nějakém sloupci** a to pomocí atributu `rowspan` (row span - rozpětí řádků). Ten udává, přes kolik řádků se buňka roztáhne.

Spojme ještě dvě buňky s textem "Ano". Jednu buňku opět úplně vymažeme, té horní dáme atribut `rowspan` s hodnotou `2`. První dva řádky budou tedy vypadat takto:

```
<tr>
    <td><img src="obrazky/nb1.png" alt="Notebook"></td>
    <td>AB8AC9</td>
    <td>Intel Atom</td>
    <td>Nvidia</td>
    <td rowspan="2">Ano</td>
</tr>
<tr>
    <td><img src="obrazky/nb2.png" alt="Notebook"></td>
    <td>GS8DGF</td>
    <td>AMD</td>
    <td>ATI</td>
</tr>
```


Výsledek:

Jednoduchá tabulka

file:///C:/User­s/David/OneDri­ve/prvni\_web/ta­bulka.html

To je prozatím k tabulkám vše. Jak se text v tabulkách styluje a zarovnává a jak se buňkám nastavuje velikost si ukážeme později. Dříve se k tomu používaly speciální atributy, které jsou však nyní zastaralé a tak je zde nebudeme uvádět. Nově se pro vše používá stylovací jazyk CSS, který si brzy uvedeme.

### Sémantika v HTML

Již jsme si zmínili, že by se tabulky neměly používaly pro tvorbu tzv. layoutu stránky (rozdělení stránky na navigační lištu, logo a obsah). I když by se toto využití tabulky mohlo nabízet, však hezky zarovnáme části stránky do sloupců a řádků, je to z _významového_ hlediska nevhodné. Když hovoříme o **významu jednotlivých elementů na stránce**, používáme často pojem **sémantika**.

**Použití tabulky na rozvržení stránky je tedy nesémantické**, protože i když se web vykreslí správně, tabulka má obsahovat nějaké hodnoty a ne celý webový obsah. Zkuste si vzpomenout na rozdíl mezi tagy `<strong>` a `<b>`. Oba vypadají stejně, ale zvýrazňovat text tagem `<b>` je nesémantické, protože tento tag nedává textu absolutně žádný vyšší význam, jen říká, že se má k vykreslení použít tučný font. Naopak `<strong>` říká: "Tento text je důležitý!". **Sémantika je to, co to znamená, ne to, jak to vypadá**. Je velmi důležitá, protože sémantické webové stránky mají potom výhodu ve vyhledávačích a mají často vyšší návštěvnost. Pokud vás toto téma zajímá, více se dozvíte [v kurzu o SEO](https://www.itnetwork.cz/html-css/seo).

Pro dnešní lekci to bude vše ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V příští lekci, [Seznamy v HTML a zopakování tabulky](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-seznamy), si ukážeme seznamy a přidáme do našeho webu navigaci.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/4e3966296d17c)

# Lekce 6 - Seznamy v HTML a zopakování tabulky
V minulé lekci, [Tabulky v HTML](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-tabulky-a-seznamy), jsme si vysvětlili tabulky.

Dnes si v HTML tutoriálu opět rozšíříme náš web přidáním tabulky, kterou jsme se nově naučili. Dále si zmíníme HTML seznamy, což je poslední téma před CSS a designem webových stránek.

Rozšíření projektu - Podstránka dovednosti
------------------------------------------

Vytvoříme opět novou podstránku. Ve VS Code si otevřete celou složku `prvni_web/`, pokud ještě nemáte, a to kliknutím na možnost _Otevřít v Code_ v průzkumníku Windows. Kliknutím pod současné HTML soubory v levém panelu pravým tlačítkem myši a volbou _Nový soubor_ přidáme soubor `dovednosti.html`.

Vyplníme si vše potřebné (`DOCTYPE`, `<html>`, `<head>`, `<body>`, např. pomocí napsání `!` a stisknutí Enter).

Do těla nové stránky vložíme tabulku s našimi dovednostmi. Tabulka bude mít dva řádky:

*   v prvním bude ikona jazyka, který ovládáme,
*   v druhém popis toho, co v daném jazyce umíme.

Ikony si můžete stáhnout níže a uložit do složky `obrazky/`:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/html.png) ![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/java.png) ![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/pascal.png)

Nebo opět získat nějaké vlastní pomocí webového nástroje [Iconfinder](http://www.iconfinder.com/). Celý výsledný kód naší podstránky by mohl vypadat takto:

```
<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8" />
    <title>Dovednosti</title>
</head>

<body>
    <h1>Dovednosti</h1>

    <table>
        <tr>
            <td>
                <img src="obrazky/html.png" alt="HTML" />
            </td>
            <td>
                <img src="obrazky/java.png" alt="Java" />
            </td>
            <td>
                <img src="obrazky/pascal.png" alt="Pascal" />
            </td>
        </tr>
        <tr>
            <td>
                <h2>HTML</h2>
                <p>S HTML začínám a umím vytvořit jednoduché webové stránky, jako jsou tyto.</p>
            </td>
            <td>
                <h2>Java</h2>
                <p>Javu se učím z tutoriálů na ITnetwork.cz, dokáži tvořit jednoduché konzolové i okenní aplikace.</p>
            </td>
            <td>
                <h2>Pascal</h2>
                <p>Pascal nás učí ve škole, ale raději se učím moderní jazyky z ITnetwork.</p>
            </td>
        </tr>
    </table>

    <p><a href="index.html">Zpět na hlavní stranu</a></p>
</body>

</html>
```


Stránku uložíme a otevřeme v prohlížeči:

Dovednosti

dovednosti.html

Prakticky jsme tedy použili tabulku na našich stránkách. Do stránky jsme také opět vložili odkaz na centrální `index.html`. Stránku zatím z indexu odkazovat nemusíme, později si na ni přidáme navigaci.

Seznamy v HTML
--------------

Seznam používáme vždy, když potřebujeme vyjmenovat položky, které se sebou nějak souvisí. Může se jednat např. o seznam použité literatury, o číslované kroky v tutoriálu nebo o navigační menu. Určitě je dobře znáte jako "odrážky" např. z [MS Wordu](https://www.itnetwork.cz/ms-office/zaklady-microsoft-word).

V HTML máme k dispozici 3 typy seznamů:

1.  Neuspořádaný seznam `<ul>`
2.  Uspořádaný seznam `<ol>`
3.  Slovníček pojmů `<dl>`

### 1\. Neuspořádaný seznam `<ul>`

Prvním typem seznamu je **neuspořádaný seznam**. Zapisujeme jej pomocí párového tagu `<ul>` (_Unordered List_ - neuspořádaný seznam). Tag potom obaluje položky seznamu. Položky v něm jsou **neočíslované (neuspořádané)** a standardně se zobrazují pomocí **odrážek**. Ačkoli je seznam chápán jako neuspořádaný, pořadí prvků v kódu na vykreslené stránce samozřejmě zůstane zachováno.

#### Položky seznamu `<li>`

Tag `<li>` (_List Item_ - položka seznamu) označuje jednu položku seznamu a nejčastěji obaluje text. Může však obsahovat i obrázky a další libovolné elementy. Tag `<li>` je párový, ale zavírací tag lze vynechat. My si jej pro přehlednost budeme uvádět.

Vytvoříme si nový soubor `seznam.html` a vložíme do něj opět HTML strukturu pomocí `!` a Enter, v lekci ji již nebudeme opakovat. Ukažme si jednoduchý příklad neuspořádaného seznamu, který vložte do elementu `<body>`:

```
<h2>Co jsem se dnes naučil</h2>
<ul>
  <li>Vytvářet tabulky</li>
  <li>Slučovat buňky</li>
  <li>Co je to sémantika</li>
  <li>Vytvořit uspořádaný seznam</li>
</ul>
```


Uložíme. A výstup vypadá takto:

Seznamy v HTML

index.html

Pomocí `<ul>` se často řeší navigační menu, během kurzu si to ukážeme.

### 2\. Uspořádaný seznam `<ol>`

Uspořádaný seznam (_Ordered List_) použijeme, pokud z hlediska _významu_ záleží na pořadí položek. **Položky jsou zde řazeny dle nějakého klíče**, tím je nejčastěji priorita nebo posloupnost akcí. Zápis je naprosto stejný, jako u neuspořádaného seznamu, použijeme však párový tag `<ol>`. Do něj pak vložíme opět položky seznamu `<li>`. Místo odrážek nám u položek seznamu prohlížeč v základním stylu zobrazí **číslice**:

```
<h2>Můj prioritní jídelníček</h2>
<ol>
  <li>Špagety</li>
  <li>Smetanový sos</li>
  <li>Hamburger</li>
  <li>Cheese burger</li>
  <li>Brokolice</li>
</ol>
```


Výsledek vypadá takto:

Můj prioritní jídelníček

index.html

#### Atributy

Na rozdíl od neuspořádaného seznamu má element `<ol>` několik atributů:

*   `reversed` - Pokud je atribut uveden, **položky seznamu budou číslovány opačně**, tedy sestupně. Jako hodnota se obvykle uvádí `reversed` (`reversed = "reversed"`), ale může se uvést i prázdná nebo žádná.
*   `start` - Hodnota atributu určuje první číslo v seznamu, zadáváme jako číslo.
*   `type` - Nastavuje typ číslování, můžeme nastavit hodnoty: `1`, `A`, `a`, `I`, `i` pro arabské číslice, latinská písmena a římské číslice.

I elementu `<li>` můžeme přidat atribut:

*   `value` - U uspořádaného seznamu označuje číslo dané položky. Následující položky se poté **automaticky číslují** od této hodnoty.

#### Příklad uspořádaného seznamu s atributy

Zkusme si ještě pokročilejší příklad:

```
<ol reversed="reversed" start="4" type="I">
  <li>Položka</li>
  <li>Položka</li>
  <li>Položka</li>
</ol>
```


Výsledek bude vypadat takto:

Pokročilejší příklad HTML seznamů

index.html

### 3\. Slovníček pojmů `<dl>`

Posledním typem seznamu je **slovníček pojmů**, pro který používáme tag `<dl>` (_Definition List_). Oproti prvním dvoum typům slovníček pojmů obsahuje 2 typy položek, a to:

#### 1\. Vysvětlovaný pojem `<dt>`

Vysvětlovaný pojem vkládáme to tagu `<dt>` (_Definition Term_).

#### 2\. Definice `<dd>`

Pojem vysvětlíme v tagu `<dd>` (_Definition Definition_).

Pojďme si udělat ukázku:

```
<h2>Slovníček pojmů k článku</h2>
<dl>
    <dt>Tutoriál</dt>
        <dd>Názorný návod k použití, většinou krok za krokem</dd>
    <dt>ITnetwork</dt>
        <dd>Akreditované rekvalifikační zařízení</dd>
    <dt>Seznam</dt>
        <dd>Množina položek, které spolu nějakým způsobem souvisí</dd>
</dl>
```


A výsledek:

Slovníček pojmů k článku

index.html

Těšte se na další lekce, protože zanedlouho bude náš web vypadat opravdu k světu ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím cvičení, [Řešené úlohy k 5. a 6. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-tabulky-seznamy), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/519b381fd68de)

# Řešené úlohy k 5. a 6. lekci HTML a CSS
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Řešené úlohy k 5. a 6. lekci HTML a CSS

V minulé lekci, [Seznamy v HTML a zopakování tabulky](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-seznamy), jsme si uvedli seznamy a rozšířili znalosti HTML tabulek.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

# Lekce 7 - Úvod do CSS (kaskádových stylů)
V předešlém cvičení, [Řešené úlohy k 5. a 6. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-tabulky-seznamy), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Zatím jsme se v našem HTML tutoriálu úspěšně vyhýbali stylování stránek. Pojďme to nyní napravit! Vysvětlíme si, k čemu slouží CSS a ukážeme si, jak vypadá. V dnešní lekci nebudeme kódovat a pouze si téma představíme.

Historie jazyka HTML
--------------------

Abychom co nejlépe pochopili podstatu jazyka CSS, udělejme si velmi krátkou odbočku do historie vývoje internetu a jazyka HTML.

První internet se nazýval Arpanet a vznikl v 60. letech 20. století jako armádní projekt USA v době studené války. Později byl uvolněn mezi veřejnost a připojovaly se k němu univerzity a výzkumné ústavy. Tehdy vůbec nevypadal jako dnes, protože se přes něj přenášely pouze textové soubory.

Až v 90. letech se v evropském výzkumném ústavu CERN rodí jazyk HTML a standard WWW. Tedy web, jak jej známe dnes. HTML mělo sloužit pro sdílení interních dokumentů v ústavu. Jazyk HTML byl vytvořen za účelem **rozlišit jednotlivé části dokumentu** od prostého textu (např. "toto je nadpis", "toto je seznam", "toto je tabulka") a hlavně, aby mohl **propojovat** jednotlivé dokumenty pomocí **odkazů**. Vznikaly první webové prohlížeče.

Jak se web dostával mezi lidi, HTML se rozvíjelo a přidávaly se do něj nové a nové tagy. Navzdory původnímu účelu HTML se jednalo i o tagy, které **nepřidělovaly žádný význam, ale elementy nějak stylovaly**. Prohlížeče se předháněly, kolik tagů podporují a chrlily nové a nové značky. Problémem bylo, že v HTML dokumentech se rázem objevilo 60% "balastu", který sloužil pouze k obarvování textu, k zarovnání nadpisů na střed nebo k nastavení fontu písma. Tento problém narůstal až do HTML verze 4, kdy se **stylování přímo v HTML označilo za zastaralé a přestalo se používat**.

Odstrašující příklad zastaralého webu
-------------------------------------

Podívejte se sami, jak mohl vypadat **zastaralý HTML 3 dokument**, který se autor snažil ostylovat (ukážeme si jen část `<body>`, hlavička pro nás není zajímavá):

```
<body bgcolor="#0395c3" text="white">
    <h1 align="center"><font color="#0a294b">Web v HTML 3</font></h1>
    <p>Když chci všechny nadpisy na stránce tmavě modré a centrované, musím to do každého psát znovu a znovu. Můj kód je plný zastaralých atributů align a zastaralých tagů font.</p>

    <h2 align="center"><font color="#0a294b">Další nadpis</font></h2>
    <p>Opět do nadpisu musím napsat, že ho chci centrovaný a tmavě modrý. Ve stránce se již téměř nevyznám.</p>

    <table align="center" cellpadding="10" cellspacing="0" border="1" bgcolor="white" bordercolor="#0a294b">
        <tr><td valign="top" align="center"><font color="#0a294b">Tato tabulka</font></td><td valign="top" align="center"><font color="#0a294b">obsahuje</font></td></tr>
        <tr><td valign="top" align="center"><font color="#0a294b">příliš mnoho</font></td><td valign="top" align="center"><font color="#0a294b">zbytečných atributů</font></td></tr>
    </table>

    <br />

    <table align="center" cellpadding="10" cellspacing="0" border="1" bgcolor="white" text="white" bordercolor="#0a294b">
        <tr><td valign="top" align="center"><font color="#0a294b">Tato tabulka je úplně</font></td><td valign="top" align="center"><font color="#0a294b">stejně stylovaná, jako</font></td></tr>
        <tr><td valign="top" align="center"><font color="#0a294b">ta nahoře, ale stejně musím</font></td><td valign="top" align="center"><font color="#0a294b">všechny styly psát znovu.</font></td></tr>
    </table>
    <h2 align="center"><font color="#0a294b">Smutné je</font></h2>

    <p>Že hodně návodů na internetu vás bude učit psát web právě takto.</p>
    <p align="center"><img src="obrazky/smutny.png" alt="Smutný" /></p>

    <p align="center"><font size="4" color="#0a294b" face="arial">Proto používejte zejména ITnetwork, kde učíme, jak psát web moderně. </font></p>

    <p align="center"><font size="4" color="#0a294b" face="arial">Tento odstavec je tmavě modrý a centrovaný stejně jako ten výše, ale já to musím stejně napsat znovu.</font></p>
</body>
```


Výsledný web by potom vypadal takto:

Odstrašující web v HTML

odstrasujici.html

Všimněte si, kolik procent kódu zabírá samotný obsah webu a kolik procent "balast", který slouží jen ke stylování. Styly se také opakují zbytečně pořád dokola. **Nevýhod jsou desítky**, např.:

*   **nepřehlednost** kódu,
*   stránka je několikrát větší a **déle se načítá**,
*   je **potlačován význam** elementů a tedy i základní účel jazyka HTML,
*   příliš mnoho tagů **mate vyhledávače** (např. Google) a ty pak stránky chybně chápají a indexují.
*   ...

O tvorbě webů bez CSS se bohužel můžete stále chybně dočíst v jiných a starých návodech na internetu.

Představme si, že máme web, který má 50 stránek podobné této. A my se rozhodneme, že se nám modré tabulky s modrým písmem již nelíbí a že chceme zelené s tmavě zeleným písmem. Co uděláme? Ano, budeme muset **přepsat stovky tagů** na jinou barvu. Asi sami vidíte, že takhle to nepůjde. Proto byl vyvinut jazyk CSS.

Jazyk CSS
---------

CSS (Cascading Style Sheets) je jazyk speciálně vyvinutý pro stylování HTML. **Kaskádový** proto, že ve stylech funguje **dědičnost**. Když tedy např. dáme buňce tabulky červenou barvu písma, tuto barvu písma automaticky dostanou i všechny odstavce textu v této buňce. Samozřejmě stále můžeme nějakému odstavci dodatečně barvu změnit, vždy platí ten konkrétnější styl.

Nejlepší je, že jeden a **ten samý CSS styl můžeme aplikovat třeba na 100 stránek** a všechny budou vypadat stejně. Když se rozhodneme něco změnit, změníme jednu řádku ve stylu a **změny se samy projeví na všech stránkách**. CSS k sobě přesouvá veškeré stylování HTML dokumentu, kód se tedy čistí, je přehledný a odpadají duplicity.

Ukážeme si ještě, jak by vypadal ten samý dokument s použitím CSS:

```
<body>
    <h1>Web využívající CSS</h1>
    <p>Když chci všechny nadpisy na stránce tmavě modré a centrované, jednoduše styl jednou definuji v souboru CSS. Můj HTML kód je čistý a styl je zapsán pouze jednou a platí pro všechny nadpisy.</p>

    <h2>Další nadpis</h2>
    <p>Nadpis výše se sám ostyloval, jelikož to bylo jednou pro všechny nadpisy definováno v CSS.</p>

    <table>
        <tr>
            <td>Tato tabulka</td>
            <td>obsahuje</td>
        </tr>
        <tr>
            <td>jen definici tabulky</td>
            <td>a text.</td>
        </tr>
    </table>

    <br />

    <table>
        <tr>
            <td>Tato tabulka je úplně</td>
            <td>stejně stylovaná, jako</td>
        </tr>
        <tr>
            <td>ta nahoře, jednoduše</td>
            <td>se použije ten samý styl.</td>
        </tr>
    </table>

    <h2>Dobré je</h2>

    <p>Že toto čtete a již tedy víte, jak se to dělá správně.</p>
    <p class="centrovany"><img src="obrazky/vesely.png" alt="Veselý" /></p>

    <p class="velky centrovany">Na ITnetwork.cz se dočtete jak na to.</p>

    <p class="velky centrovany">Tento odstavec používá styl s větším textem, který je jednou definován v CSS.</p>
</body>
```


Výsledek:

Web využívající CSS

css.html

To je poměrně zásadní rozdíl, že? Porovnejte si první kód ještě jednou s kódem výše. Určitě jste si také všimli atributů `class`, které přiřazují elementu nějaký styl, definovaný v externím CSS souboru.

A jak CSS vypadá?
-----------------

Dnes to bude opravdu jen nahlédnutí, pracovat sami budeme příště. CSS soubor pro stránku výše by se jmenoval např. `styl.css` a vypadal by asi takto:

```
body {
    background-color: #0395c3;
    color: white;
}
h1,
h2 {
    text-align: center;
    color: #0a294b;
}
table {
    margin: 0 auto;
    background-color: white;
    border-collapse: collapse;
}
table td {
    text-align: center;
    padding: 10px;
    border: 1px black solid;
    color: black;
}
.centrovany {
    text-align: center;
}
.velky {
    color: #0a294b;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
}
```


Co přesně kód znamená si vysvětlíme dále v kurzu. Vidíme ale, že **každý styl je zde definovaný jen jednou a pak se přiřazuje elementům na stránce**.

Ke stránce výše by se styl napojil vložením tohoto řádku do hlavičky `<head>`:

```
<link rel="stylesheet" type="text/css" href="styl.css" />
```


Vše si ale ukážeme až příště. Podstatou dnešní lekce bylo ukázat, jaké problémy vedly ke vzniku CSS a proč nepoužívat zastaralé, leč stále funkční stylovací tagy.

V příští lekci, [Typové CSS selektory a zarovnání textu](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-zakladni-css-selektory-atributy), si ukážeme použití CSS a naučíme se, jak zarovnávat text.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.
[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/4e3a6988715b1)

# Lekce 8 - Typové CSS selektory a zarovnání textu
V minulé lekci, [Úvod do CSS (kaskádových stylů)](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-uvod-do-css), jsme si ukázali, k čemu CSS slouží a jak vypadá stránka, která jej používá.

Dnes si v **CSS tutoriálu** podrobně popíšeme, jak se přes CSS stylují webové stránky. Představíme si **typové selektory** a naučíme se **zarovnávat text**.

Vytvoření CSS souboru ve VS Code
--------------------------------

Stylovat budeme náš rozpracovaný web. Otevřeme si složku `prvni_web/` ve VS Code a přidáme do ní nový soubor `styl.css`:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/vscode_soubor_css.png)

CSS je stejně jako HTML pouze textový soubor. Soubor uložíme.

### Napojení CSS stylu na HTML stránku

Nyní musíme naší HTML stránku na tento CSS soubor _napojit_. Otevřeme si `index.html` a do hlavičky (`<head>`) přidáme element `<link>`. Můžeme jej vložit např. pod určení kódování, které bývá pro přehlednost prvním údajem v hlavičce:

```
...
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    ...
```


`<link />` je nepárový tag k určení vztahu mezi dvěma dokumenty. Nejčastěji se používá právě pro připojení CSS dokumentu, nebo k přidání ikony k naší stránce (přidání ikony si ukážeme později). Elementu jsme dále vyplnili následující atributy:

*   `rel` je atribut, který definuje vztah (_relationship_) mezi HTML dokumentem a připojeným dokumentem. Hodnota `stylesheet` je v překladu všeříkající "šablona stylů".
*   `href` je zkratka pro hypertextový odkaz (_Hypertext REFerence_), do kterého vkládáme cestu k připojovanému souboru.
*   `type` určuje typ dokumentu, který připojujeme. Zde říká, že obsah připojovaného dokumentu je typu CSS.

Nyní se bude tato stránka stylovat podle toho, co napíšeme do CSS.

Selektory
---------

CSS je založeno na tzv. **selektorech**. Jak již z názvu vyplývá, **selektory umožňují vybrat** (_select_ - vybrat) **prvky na stránce** podle určitých kritérií a potom tyto prvky **ostylovat**. CSS dokument nemá na rozdíl od HTML žádnou speciální strukturu a kromě selektorů do něj již není potřeba psát cokoli navíc.

### Typový selektor

Úplně nejjednodušší je tzv. **typový selektor**, který na stránce jednoduše **vybere všechny elementy daného typu**. Budeme-li chtít např. vybrat všechny nadpisy `<h1>` na stránce, CSS kód bude vypadat následovně:

```
h1 {
}
```


Stylujeme tedy elementy určitého typu, zde `<h1>`. Za selektorem následuje blok ze složených závorek `{}`, do kterého se píší **vlastnosti** elementů, které chceme stylovat.

Složené závorky napíšeme na klávesnici pomocí Pravého Alt + B, resp. N:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/klavesnice/slozenezavorky.jpg)

#### Vlastnost `text-align` - Zarovnání obsahu

Uveďme si první CSS vlastnost, bude jí `text-align`. Tato vlastnost znamená v překladu _zarovnání textu_, přesnější je však zarovnání obsahu. Můžeme pomocí ní totiž zarovnat jakékoli _řádkové_ elementy v daném bloku (např. obrázky).

Zkusme si text v nadpisech `<h1>` na stránce vycentrovat. CSS kód by vypadal takto:

```
h1 {
    text-align: center;
}
```


Vlastnosti, které chceme v daném selektoru upravovat, vkládáme do složených závorek selektoru. Za názvem vlastnosti následuje dvojtečka `:`, její hodnota a poté následuje středník `;`.

Středník na české klávesnici zapíšeme pomocí klávesy pod Escape:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/klavesnice/strednik.jpg)

V bloku `{}` jednotlivé řádky odsazujeme zleva pomocí klávesy Tabulátor nebo pomocí 4 mezer. Je tak vizuálně jasné, že tyto vlastnosti patří pod daný selektor.

Hned si první styl vyzkoušíme na naší HTML stránce. Do CSS souboru `styl.css` vložíme kód výše a uložíme. Přepneme se do prohlížeče a otevřeme stránku `index.html`. Měli bychom vidět takovýto výsledek:

Moje první webová stránka

index.html

Nadpis první úrovně má vycentrovaný text.

#### Uvedení více selektorů

Pokud bychom chtěli centrovat i nadpisy druhé úrovně, **nemusíme kód znovu opisovat. Stačí jen nad daný blok stylů připsat další selektor**, v tomto případě i pro nadpisy `<h2>`. Jednotlivé selektory oddělujeme **čárkou** `,`:

```
h1, h2 {
    text-align: center;
}
```


Takový zápis je ekvivalentní tomuto zápisu:

```
h1 {
    text-align: center;
}

h2 {
    text-align: center;
}
```


Jak ale můžeme vidět, druhý zápis je poněkud objemný, a především v něm dochází k **duplicitě kódu**. To je vždy špatná praktika.

V IT se často odvolává na tzv. **[best practices](https://www.itnetwork.cz/navrh/best-practices-pro-vyvoj-softwaru)**, zažité a ozkoušené praktiky zkušených. Jednou z nich je **DRY**, což je zkratka z Don't Repeat Yourself. Víceméně nám říká, že bychom **nikdy neměli psát ten samý kód vícekrát**. Určitě vás napadlo, že je to minimálně **nepřehledné** a v dlouhých souborech se pak špatně vyzná. Je tu však ještě jedno úskalí - dříve či později se u duplicitního kódu totiž stane, že jej **změníme a zapomeneme změnit jeho další výskyty**, čímž nějakou část projektu rozbijeme a nemusíme si toho ani všimnout.

Ve chvíli, kdy chceme skupině elementů nastavit totožné vlastnosti, raději upřednostníme první způsob a zkombinujeme více selektorů v jeden.

Výsledek:

Moje první webová stránka

index.html

Již tedy umíme centrovat text. Centrování samozřejmě nemusíme používat jen pro nadpisy. Úplně stejně funguje pro odstavce, buňky tabulky a další elementy. Většina CSS vlastností není vázána na konkrétní typ elementu.

##### Hodnoty vlastnosti `text-align`

Do vlastnosti `text-align` můžeme uvést tyto hodnoty:

*   `left` - Zarovná text nalevo.
*   `right` - Zarovná text napravo.
*   `center` - Zarovná text na střed.
*   `justify` - Zarovná text do bloku, aby byl každý řádek stejně dlouhý.

Poslední hodnotu `justify` je vhodné používat pouze v případě, že je element s textem dostatečně široký (alespoň kolem 800px), jinak dochází ke vzniku neúhledných mezer, kterým se říká v typografii _řeky_. V tisku se toto řeší rozdělováním slov, prohlížeč bohužel za nás slova v textu jednoduše nerozdělí.

To je pro dnešek vše. Kód k dnešní lekci je opět ke stažení v příloze.

V příští lekci, [Barvy v CSS](https://www.itnetwork.cz/html-css/webove-stranky/barvy-v-css), si ukážeme stylování barvy textu (color) a možnosti zadávání barev.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/4e3be5cc247f0)

# Lekce 9 - Barvy v CSS
V minulé lekci, [Typové CSS selektory a zarovnání textu](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-zakladni-css-selektory-atributy), jsme si ukázali použití CSS a naučili jsme se zarovnávat text.

V tomto **tutoriálu Statického webu** budeme pokračovat se stylováním CSS podle selektorů. Dnes se soustředíme na **barvu textu** a jak ji můžeme různými způsoby zapsat.

Vlastnost `color` - Barva textu
-------------------------------

Ukažme si, jakým způsobem bychom změnili barvu textu. Slouží k tomu CSS vlastnost `color`. Hodnotu barvy můžeme zadat několika způsoby:

1.  textovou konstantou
2.  třemi hodnotami RGB
3.  jednou hodnotou v šestnáctkové soustavě

Postupně si je projděme.

### 1\. Textové konstanty

Prvním způsobem zadání barvy v CSS je použití **barevné konstanty**. Máme jich k dispozici 16, jsou to: `aqua`, `black`, `blue`, `fuchsia`, `gray`, `green`, `lime`, `maroon`, `navy`, `olive`, `purple`, `red`, `silver`, `teal`, `white` a `yellow`. Bohužel se jedná o barvy velmi ošklivé a **kromě černé a bílé je nemá smysl používat**. CSS nabízí mnoho dalších barevných konstant (jmen barev), které však bohužel nejsou součástí oficiální specifikace, a proto by se neměly používat.

Můžeme si zkusit nastavení barvy přidat mezi vlastnosti v selektoru pro nadpisy `<h1>` a `<h2>`. Styl bude nyní vypadat takto:

```
h1, h2 {
    text-align: center;
    color: blue;
}
```


Pokud je vlastností v selektoru více, jednoduše je píšeme na samostatné řádky. Styl si uložme a obnovme stránku, měli byste vidět něco podobného:

Moje první webová stránka

index.html

### 2\. RGB

Častějším způsobem je zadat barvu jako **RGB** (**R**ed, **G**reen, **B**lue). Pro lepší zapamatování si na úvod uveďme krátký vtip:

> Baví se dva webaři:
> 
> *   Já jsem sbalil novou holku, je krásná, 90-60-90...
> *   Cože? Tmavě fialová?

Určitě víte, že v počítači má každá barva 3 složky: červenou, zelenou a modrou. To vychází z optiky, jelikož každý bod na vaší obrazovce je složen z různě intenzivních světel těchto barev. Zadáním těchto tří složek namícháme naprosto libovolnou barvu a nejsme tak omezeni barvami, které nám někdo připravil:

![RGB - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5344/grafika/420px-additivecolormixiing.svg.png)

Zadání té samé modré jako nabízí konstanta `blue` by přes RGB vypadalo následovně:

```
color: rgb(0, 0, 255);
```


Protože potřebujeme zadat hned 3 hodnoty, musíme použít CSS funkci `rgb()` a předat barvy v závorce `()`, oddělené čárkami `,`.

První nula výše označuje, že červená složka má hodnotu `0`, druhá, že zelená složka má hodnotu `0`, poslední, že modrá složka má maximální hodnotu. Tou je `255`. Tyto velké rozdíly jsou důvodem, proč výchozí barvy nevypadají dobře, v reálu není nic takto úplně modré.

3\. Šestnáctková soustava - HEX
-------------------------------

Dostáváme se k poslednímu způsobu zápisu barev. Nelekejte se matematického pojmu, zadávání barev pomocí hexadecimální soustavy je **nejjednodušší zápis**. Jedná se opět o **RGB zápis**, který již známe. Jen kromě číslic `0` - `9` používá i písmena `A` - `F`. Díky tomu si vystačíme s méně číslicemi a můžeme pak všechny složky barvy uvést jako jednu hodnotu, aniž bychom potřebovali používat CSS funkci `rgb()`.

Úplně modrou barvu bychom zapsali takto:

```
color: #0000FF;
```


Zápis barvy v šestnáctkové soustavě začíná mřížkou `#`, dále následuje dvojice čísel pro každou ze složek RGB (2 pro červenou, 2 pro zelenou a 2 pro modrou). Maximální hodnota 255 se zde zapíše jako `FF`.

Mřížku `#` na české klávesnici zapíšeme pomocí Pravého Alt + X:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/klavesnice/hashtag.jpg)

Můžeme si vyzkoušet, že oba zápisy nám nadpis obarví na tu samou barvu, jako původní konstanta `blue`.

Ačkoli hodnota je špatně čitelná pro lidi, každý lepší grafický editor (např. [Photoshop](https://www.itnetwork.cz/photoshop/zaklady)) nám u barvy ukáže její HTML zápis. Pro výběr barev můžete použít i náš [online nástroj Colorpicker](https://www.itnetwork.cz/html-css/webove-nastroje/colorpicker-vyber-html-css-barev), kde jednoduše vyberete barvu a aplikace vám vypíše její HTML notaci.

Pojďme našim nadpisům nastavit takový odstín modré, aby stránka nevypadala jako papoušek:

```
h1, h2 {
    text-align: center;
    color: #0a294b;
}
```


Je to taková tmavě modrá, ale stále ne černá, vypadá docela příjemně. A toto je výsledek naší dnešní práce:

Moje první webová stránka

index.html

V příští lekci, [Třídní selektor a stylování textu v CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-css-stylovani-textu), si ukážeme, jak centrovat obrázky pomocí třídního selektoru a změnu fontu písma.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64d114e593919)

# Lekce 10 - Třídní selektor a stylování textu v CSS
V minulé lekci, [Barvy v CSS](https://www.itnetwork.cz/html-css/webove-stranky/barvy-v-css), jsme si ukázali stylování barvy textu (color) a možnosti zadávání barev.

Dnes se v **CSS tutoriálu** naučíme **centrovat obrázky** pomocí **třídního selektoru**. Dále začneme s CSS vlastnostmi pro **změnu fontu písma**.

Centrování obrázků v CSS
------------------------

Na naší stránce máme jeden obrázek:

Moje první webová stránka

index.html

Určitě by vypadalo lépe, kdyby byl obrázek ve středu stránky. Centrování je v CSS poměrně věda a během kurzu se naučíme několik způsobů, jak centrovat různé prvky na stránce.

### Vlastnost `text-align`

Vlastnost `text-align` již známe, používali jsme ji k centrování textu a také jsme si říkali, že s ní lze centrovat i jiné řádkové elementy. Přesně to teď uděláme.

Obrázek obecně vycentrujeme tak, že ho prvně **vložíme do odstavce** `<p>` nebo jiného blokového elementu. My ho v odstavci již máme. Tomuto odstavci pak v CSS přidělíme vlastnost `text-align` s hodnotou `center`.

### Omezení typového selektoru

Zatím známe jen typový selektor, takže umíme centrovat obsah jen všech odstavců. Pokud bychom do CSS napsali toto:

```
p {
    text-align: center;
}
```


Vycentrovali bychom obsah všech odstavců na stránce. Výsledek by vypadal asi takto:

Moje první webová stránka

index.html

Takové odstavce jsou velmi špatně čitelné. Dnes se naučíme, jak ostylovat jen některé elementy na stránce.

### Třídní selektor `.`

Ne vždy chceme stylovat úplně všechny elementy určitého typu. Z toho důvodu nám CSS nabízí další 2 selektory:

*   **selektor třídní**
*   **ID selektor**.

Třídní selektor funguje tak, že **některé elementy na stránce zařadíme pomocí HTML atributu `class` do nějaké "třídy"**. Elementy s tímto atributem se potom ostylují podle toho, jaké vlastnosti daná třída v CSS má.

Zkusme si tedy vycentrovat obsah jen určitých odstavců. K tomuto účelu si vytvořme třídu `.centrovany`. **Třídní selektor začíná vždy tečkou** a pokračuje názvem třídy. Třídu si můžeme pojmenovat, jak se nám zlíbí, ale měli bychom používat jen malá písmena a pomlčky.

Z názvu třídy by mělo být jasné, co dělá (vyhneme se tedy názvům jako `.trida15` a podobně). Ideálně bychom názvy tříd neměli vázat ani na konkrétní barvy, protože je můžeme někdy v budoucnu změnit. Např. třída `.zluta` není vhodný název třídy a dle toho, k čemu na webu slouží, by se mohla jmenovat např. `.sleva`.

#### Definování stylů pro třídu v CSS

Přesuneme se do našeho souboru `styl.css` a v něm definujeme třídní selektor na třídu s názvem `.centrovany`. Dále vše funguje stejně, jako u typového selektoru. Dovnitř selektoru vložíme nám známou vlastnost `text-align` s hodnotou `center`. Celý náš CSS soubor teď vypadá takto:

```
h1, h2 {
    text-align: center;
    color: #0a294b;
}

.centrovany {
    text-align: center;
}
```


#### Přiřazení třídy vybraným elementům na stránce

Styl máme připravený, teď ho můžeme přiřadit jakýmkoli elementům na stránce. Přejdeme do `index.html` a náš odstavec s obrázkem zařadíme do třídy `.centrovany`. Uděláme to přidáním atributu `class="centrovany"` (zde již tečku nepíšeme):

```
<p class="centrovany">
    <img src="obrazky/avatar.jpg" alt="Programátor HoBi" width="30%" height="30%" />
</p>
```


Uložíme a vyzkoušíme. Výsledek:

Moje první webová stránka

index.html

Obsah ve všech elementech se třídou `.centrovany` bude nyní zarovnaný na střed. Jak již o `text-align` bylo řečeno dříve, název je poněkud matoucí. Jedná se o zarovnání obsahu, nikoli pouze textu.

Jeden element můžeme zařadit hned do několika tříd najednou. Jednoduše jejich názvy oddělíme v atributu `class` mezerou.

Stylování textu v CSS
---------------------

Nyní si ostylujeme lépe text na naší stránce a zmíníme si k tomu několik CSS vlastností.

### Vlastnost `font-family` - Font písma

Font textu změníme pomocí vlastnosti `font-family`. Výchozí písmo na webu je starší patkový `Times New Roman`, který se na web příliš nehodí a používá se spíše v tištěných dokumentech.

Druhů písma (fontů) se na jedné stránce obvykle příliš mnoho nekombinuje, většinou jsou jen 2 - jedno písmo na nadpisy a další na zbytek textu na stránce.

Zkusíme si nastavit pro stránku font `Verdana`. Dáme ho do typového selektoru `body`, čímž budou mít toto písmo nastavené všechny elementy v těle stránky, pokud neuvedeme jinak. Nadpisům nastavíme písmo `Arial`.

Do CSS tedy přidejme typový selektor `body` a upravme ten na nadpisy:

```
body {
    font-family: Verdana;
}

h1, h2, h3, h4, h5, h6 {
    text-align: center;
    color: #0a294b;
    font-family: Arial;
}
```


Ke stylu nadpisů jsme do selektoru přidali i další 4. Kdybychom je náhodou použili, tak aby vypadaly jako ostatní.

Výsledek na naší stránce vypadá nyní takto:

Moje první webová stránka

index.html

### Web safe fonty

S fonty je samozřejmě problém v tom, že když použijeme nějaký, který máme v počítači jen my, ostatním, kteří toto písmo nemají, se web zobrazí výchozím fontem. Z toho důvodu se buď určité písmo ke stránce připojí (což si hned ukážeme), nebo se použije jeden z fontů, které jsou na většině počítačů. Na webech se nejčastěji používají tyto fonty (i když např. na Linuxu je třeba nějaké doinstalovat):

*   `Arial`
*   `Times New Roman`
*   `Verdana`
*   `Georgia`
*   `Comic Sans MS`
*   `Arial Black`
*   `Impact`
*   `Lucida Console`
*   `Tahoma`

Web je opět v příloze ke stažení.

V příští lekci, [Stylování textu v CSS - Google fonty, velikost fontu a stín](https://www.itnetwork.cz/html-css/webove-stranky/stylovani-textu-v-css-google-fonty-velikost-fontu-a-stin), si ukážeme stylování písma pomocí Google fontů a nastavíme velikost a stín písma.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/519ca4c705211)

# Lekce 10 - Třídní selektor a stylování textu v CSS
V minulé lekci, [Barvy v CSS](https://www.itnetwork.cz/html-css/webove-stranky/barvy-v-css), jsme si ukázali stylování barvy textu (color) a možnosti zadávání barev.

Dnes se v **CSS tutoriálu** naučíme **centrovat obrázky** pomocí **třídního selektoru**. Dále začneme s CSS vlastnostmi pro **změnu fontu písma**.

Centrování obrázků v CSS
------------------------

Na naší stránce máme jeden obrázek:

Moje první webová stránka

index.html

Určitě by vypadalo lépe, kdyby byl obrázek ve středu stránky. Centrování je v CSS poměrně věda a během kurzu se naučíme několik způsobů, jak centrovat různé prvky na stránce.

### Vlastnost `text-align`

Vlastnost `text-align` již známe, používali jsme ji k centrování textu a také jsme si říkali, že s ní lze centrovat i jiné řádkové elementy. Přesně to teď uděláme.

Obrázek obecně vycentrujeme tak, že ho prvně **vložíme do odstavce** `<p>` nebo jiného blokového elementu. My ho v odstavci již máme. Tomuto odstavci pak v CSS přidělíme vlastnost `text-align` s hodnotou `center`.

### Omezení typového selektoru

Zatím známe jen typový selektor, takže umíme centrovat obsah jen všech odstavců. Pokud bychom do CSS napsali toto:

```
p {
    text-align: center;
}
```


Vycentrovali bychom obsah všech odstavců na stránce. Výsledek by vypadal asi takto:

Moje první webová stránka

index.html

Takové odstavce jsou velmi špatně čitelné. Dnes se naučíme, jak ostylovat jen některé elementy na stránce.

### Třídní selektor `.`

Ne vždy chceme stylovat úplně všechny elementy určitého typu. Z toho důvodu nám CSS nabízí další 2 selektory:

*   **selektor třídní**
*   **ID selektor**.

Třídní selektor funguje tak, že **některé elementy na stránce zařadíme pomocí HTML atributu `class` do nějaké "třídy"**. Elementy s tímto atributem se potom ostylují podle toho, jaké vlastnosti daná třída v CSS má.

Zkusme si tedy vycentrovat obsah jen určitých odstavců. K tomuto účelu si vytvořme třídu `.centrovany`. **Třídní selektor začíná vždy tečkou** a pokračuje názvem třídy. Třídu si můžeme pojmenovat, jak se nám zlíbí, ale měli bychom používat jen malá písmena a pomlčky.

Z názvu třídy by mělo být jasné, co dělá (vyhneme se tedy názvům jako `.trida15` a podobně). Ideálně bychom názvy tříd neměli vázat ani na konkrétní barvy, protože je můžeme někdy v budoucnu změnit. Např. třída `.zluta` není vhodný název třídy a dle toho, k čemu na webu slouží, by se mohla jmenovat např. `.sleva`.

#### Definování stylů pro třídu v CSS

Přesuneme se do našeho souboru `styl.css` a v něm definujeme třídní selektor na třídu s názvem `.centrovany`. Dále vše funguje stejně, jako u typového selektoru. Dovnitř selektoru vložíme nám známou vlastnost `text-align` s hodnotou `center`. Celý náš CSS soubor teď vypadá takto:

```
h1, h2 {
    text-align: center;
    color: #0a294b;
}

.centrovany {
    text-align: center;
}
```


#### Přiřazení třídy vybraným elementům na stránce

Styl máme připravený, teď ho můžeme přiřadit jakýmkoli elementům na stránce. Přejdeme do `index.html` a náš odstavec s obrázkem zařadíme do třídy `.centrovany`. Uděláme to přidáním atributu `class="centrovany"` (zde již tečku nepíšeme):

```
<p class="centrovany">
    <img src="obrazky/avatar.jpg" alt="Programátor HoBi" width="30%" height="30%" />
</p>
```


Uložíme a vyzkoušíme. Výsledek:

Moje první webová stránka

index.html

Obsah ve všech elementech se třídou `.centrovany` bude nyní zarovnaný na střed. Jak již o `text-align` bylo řečeno dříve, název je poněkud matoucí. Jedná se o zarovnání obsahu, nikoli pouze textu.

Jeden element můžeme zařadit hned do několika tříd najednou. Jednoduše jejich názvy oddělíme v atributu `class` mezerou.

Stylování textu v CSS
---------------------

Nyní si ostylujeme lépe text na naší stránce a zmíníme si k tomu několik CSS vlastností.

### Vlastnost `font-family` - Font písma

Font textu změníme pomocí vlastnosti `font-family`. Výchozí písmo na webu je starší patkový `Times New Roman`, který se na web příliš nehodí a používá se spíše v tištěných dokumentech.

Druhů písma (fontů) se na jedné stránce obvykle příliš mnoho nekombinuje, většinou jsou jen 2 - jedno písmo na nadpisy a další na zbytek textu na stránce.

Zkusíme si nastavit pro stránku font `Verdana`. Dáme ho do typového selektoru `body`, čímž budou mít toto písmo nastavené všechny elementy v těle stránky, pokud neuvedeme jinak. Nadpisům nastavíme písmo `Arial`.

Do CSS tedy přidejme typový selektor `body` a upravme ten na nadpisy:

```
body {
    font-family: Verdana;
}

h1, h2, h3, h4, h5, h6 {
    text-align: center;
    color: #0a294b;
    font-family: Arial;
}
```


Ke stylu nadpisů jsme do selektoru přidali i další 4. Kdybychom je náhodou použili, tak aby vypadaly jako ostatní.

Výsledek na naší stránce vypadá nyní takto:

Moje první webová stránka

index.html

### Web safe fonty

S fonty je samozřejmě problém v tom, že když použijeme nějaký, který máme v počítači jen my, ostatním, kteří toto písmo nemají, se web zobrazí výchozím fontem. Z toho důvodu se buď určité písmo ke stránce připojí (což si hned ukážeme), nebo se použije jeden z fontů, které jsou na většině počítačů. Na webech se nejčastěji používají tyto fonty (i když např. na Linuxu je třeba nějaké doinstalovat):

*   `Arial`
*   `Times New Roman`
*   `Verdana`
*   `Georgia`
*   `Comic Sans MS`
*   `Arial Black`
*   `Impact`
*   `Lucida Console`
*   `Tahoma`

Web je opět v příloze ke stažení.

V příští lekci, [Stylování textu v CSS - Google fonty, velikost fontu a stín](https://www.itnetwork.cz/html-css/webove-stranky/stylovani-textu-v-css-google-fonty-velikost-fontu-a-stin), si ukážeme stylování písma pomocí Google fontů a nastavíme velikost a stín písma.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace]https://www.itnetwork.cz/api/Articles-Article/file/519ca4c705211)

# Lekce 11 - Stylování textu v CSS - Google fonty, velikost fontu a stín
V minulé lekci, [Třídní selektor a stylování textu v CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-css-stylovani-textu), jsme si ukázali, jak centrovat obrázky pomocí třídního selektoru a změnu fontu písma.

Dnes budeme v **HTML/CSS tutoriálu** pokračovat s **CSS vlastnostmi** pro **změnu fontu písma**, tentokrát za pomoci **Google fontů**. Ukážeme si, jak změnit **velikost písma** a přiřadit mu **stín**.

Google fonts
------------

Jistě jste si všimli, že moderní webové stránky využívají velice často jiné fonty než ty, které jsme zmínili minule. Pokud budete chtít svůj web ozvláštnit, můžete použít font z externího zdroje. Skvělým pomocníkem jsou [Google Fonts](https://fonts.google.com/). Ukážeme si tedy práci s nimi a nainstalujeme si pěkný font `Poppins`.

### Způsoby vložení fontu

Možností, jak přidat nový font z externího zdroje jako jsou Google fonts, je několik:

*   Můžeme jej **importovat** pomocí speciálního pravidla `@import` v CSS
*   Můžeme na něj odkázat pomocí `<link>` v hlavičce HTML souboru
*   Můžeme si font **stáhnout** přímo k nám na web a pracovat s ním podobně jako například s obrázky.

Odkazovat na externí zdroje může být lákavě jednoduché. Dobrá praktika ovšem je **spoléhat se u ostrých webů co nejméně na ostatní stránky**. Nemusí se to zdát pravděpodobné, ale v minulosti se již několikrát stalo, že i Google měl několikahodinový výpadek nebo byl přetížený.

My tedy zvolíme třetí variantu a font si stáhneme. Zároveň si ukážeme i variantu přidání písma pouhým odkazem na Google Fonts.

### Vyhledání fontu

Na [Google Fonts](https://fonts.google.com/) vyhledáme font [Poppins](https://fonts.google.com/specimen/Poppins). Font je obvykle dostupný v různých tloušťkách. My budeme potřebovat tloušťku **Regular 400** pro běžný text na stránce a **Extra Bold 800** pro nadpisy. Tyto tloušťky si můžeme vybrat tlačítky "+ Select..." nebo nemusíme a tím necháme zvolené všechny varianty:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/google-fonts.png)

Google Fonts nám po zaklikání automaticky v pravé části stránky vygeneruje kód jak pro pravidlo `@import`, tak pro element `<link>` v případě, že bychom na font chtěli pouze odkázat.

### Import fontu do naší stránky

Pokud bychom se tedy rozhodli na font jen odkázat, stačilo by na začátek našeho CSS souboru přidat jediný řádek:

```
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap');
```


A nyní bychom mohli již font "Poppins" používat.

### Stažení fontu do složky

My ale půjdeme jistější cestou a font si stáhneme. Zvolené varianty fontu si můžete stáhnout zvlášť odkazem _Download all_ v pravém panelu. Nebo si můžete stáhnout úplně celou rodinu fontu tlačítkem _Download Family_ nahoře na stránce.

Pro fonty vytvoříme ve složce s naším webem `prvni_web/` podsložku `fonty/`. Složku můžete vytvořit jak ve VS Code, tak v Průzkumníku Windows:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/653a932f50fa4_vytvoreni_slozky_fonty.png)

Tam rozbalíme soubory z archivu `.zip`, který jsme stáhli. Měli bychom tam mít především zmíněné soubory `Poppins-ExtraBold.ttf` a `Poppins-Regular.ttf`:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/653a92bcdc03e_slozka_s_fonty.png)

### Přidání fontů do CSS pomocí `@font-face`

Nyní si do našeho CSS souboru `styl.css` přidáme další kód a to na úplný začátek. Pomocí speciálního pravidla `font-face` si definujeme nový font s názvem `Poppins`, abychom jej mohli používat při stylování:

```
@font-face {
    font-family: Poppins;
    src: url(fonty/Poppins-Regular.ttf);
    font-weight: normal;
}
@font-face {
    font-family: Poppins;
    src: url(fonty/Poppins-ExtraBold.ttf);
    font-weight: bold;
}
```


Nejdůležitějšími vlastnostmi tohoto pravidla jsou:

*   `font-family` k určení **názvu** fontu, kterým se na tento font budeme odkazovat,
*   `src` s cestou k **souboru** se samotným fontem. Cesty k souborům zapisujeme v CSS pomocí funkce `url()`.
*   **Tloušťka** písma, pro jakou se má font z odkazovaného souboru použít, kterou definujeme vlastností `font-weight`. Jak můžeme vidět, jeden námi definovaný font může podporovat několik tlouštěk. Více se těmto pravidlům věnujeme v navazujících kurzech, v lekcích [Text a písmo - Barva a typ písma](https://www.itnetwork.cz/html-css/css3/zaklady/text-a-pismo-1-cast) a [Text a písmo - Velikost, styl, dekorování, výška řádku](https://www.itnetwork.cz/html-css/css3/zaklady/text-a-pismo-2-cast).

Elementům nastavujeme tloušťku písma taktéž pomocí vlastnosti `font-weight`.

### Nastavení fontu webu

A jsme ve finále ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Nyní můžeme font "Poppins" používat. V selektoru `body` jej konečně nastavíme celému webu:

```
body {
    font-family: "Poppins";
}
```


A nezapomeňme vymazat `font-family: Arial;` ze selektorů nadpisů. Celý náš soubor `styl.css` nyní vypadá takto:

```
@font-face {
    font-family: Poppins;
    src: url(fonty/Poppins-Regular.ttf);
    font-weight: normal;
}

@font-face {
    font-family: Poppins;
    src: url(fonty/Poppins-ExtraBold.ttf);
    font-weight: bold;
}

body {
    font-family: "Poppins";
    color: #414042;
}

h1, h2, h3, h4, h5, h6 {
    text-align: center;
    color: #0a294b;
}

.centrovany {
    text-align: center;
}
```


A naše stránka nyní vypadá takto:

Moje první webová stránka

index.html

A jak prohlížeč pozná, jak tlustý Poppins na co aplikovat? Ve výchozím stylu jsou nadpisy tučné (mají nastavenou tloušťku `bold`) a odstavce používají normální tloušťku (`normal`). Sice jsme nastavili `font-family: Poppins;` celému `<body>`, ale prohlížeč se podle tloušťky písma v daném elementu vždy podívá ještě po konkrétní variantě, kterou jsme v CSS definovali (např. s `font-weight: bold;`).

Vlastnost `font-size` - Velikost písma
--------------------------------------

Velikost písma nastavujeme pomocí vlastnosti `font-size`. Podobně jako u barev máme několik možností, jak velikost zadat. Jsou to zejména:

1.  pixely
2.  em
3.  rem

### 1\. Pixely

První možností je zadat velikost textu v pixelech. Ve `styl.css` nastavme všemu textu v `<body>` velikost písma `14` pixelů:

```
body {
    font-family: "Poppins";
    font-size: 14px;
    color: #414042;
}
```


Výhoda je, že font bude všude stejně velký, což se hodí zejména pro nastavení hlavního písma pro celé `<body>`. Přidali jsme ještě barvu písma (vlastnost `color`).

### 2\. `em`

Druhým způsobem, jak velikost zadat, jsou tzv. jednotky `em`. Hodnota zadaná pomocí `em` označuje, kolikrát je písmo větší než velikost písmena "M" současného písma. Jedná se tedy o jednotku **relativní**. Výhodné je všude používat `em`, jelikož když se rozhodneme pro větší písmo naší stránky, změníme jen písmo pro `<body>` a všechna další písma se nám zvětší sama. Nastavme si nadpis `<h2>` o něco větší, na hodnotu `1.7em` (tedy o `70%` větší, než současný text):

```
h2 {
    font-size: 1.7em;
}
```


Všimněte si, že je k oddělení desetinných míst použita tečka `.`, nikoli čárka `,`.

A výsledek na naší stránce:

Moje první webová stránka

index.html

_Všimněte si, že děláme opravdu jen malé změny. Není důvod, proč dělat nadpisy křiklavě červené a dvoumetrové._

Nastavení velikosti a fontu písma se většinou spojuje do jedné CSS vlastnosti `font`. Místo:

```
font-family: "Poppins";
font-size: 14px;
```


Tedy můžeme napsat jen:

```
font: 14px "Poppins";
```


CSS obsahuje několik takovýchto zkratkových vlastností jako je `font`, které umožňují nastavit několik dalších jiných vlastností najednou. Je lepší je používat, protože kód je potom kratší. Znát potřebujete obě varianty, protože je budete potkávat v cizím kódu nebo je můžete potřebovat, když budete chtít nastavit jen některé vlastnosti a zkratková vlastnost by jich vyžadovala zadat více.

### 3\. jednotky `rem`

Jednotka `rem` funguje úplně stejně jako `em`. Ovšem bere se relativně k velikosti písmene `M` ve fontu **elementu `<html>`**, nikoli v nadřazeném elementu. Výhoda je, že tedy nezáleží, kde je daný element vložený, velikost se vždy nastaví jako násobek velikosti písma, která je nastavená elementu `<html>`, styluje se vždy podle tohoto stejného elementu.

Vlastnost `text-shadow` - Stín písma
------------------------------------

Písmu můžeme velmi jednoduše přidat stín pomocí CSS vlastnosti `text-shadow`. Ukažme si to například na našich nadpisech (později můžeme tuto vlastnost zase odebrat):

```
text-shadow: 3px 3px 7px #666666;
```


Parametry jsou:

*   První 2 parametry jsou **pozice** stínu. Říkáme, že leží `3` pixely napravo od textu a `3px` dole.
*   Třetí parametr je **rozostření**, čím vyšší hodnota, tím je text rozostřenější. Při hodnotě `1px` je ostrý.
*   Posledním parametrem je **barva**, zde šedá.

Výsledek:

Moje první webová stránka

index.html

Stínů může mít písmo i více než jen jeden. Definice více stínů píšeme taktéž do vlastnosti `text-shadow`, akorát je oddělujeme čárkou. Zkusme si písmu přidat ještě druhý světlemodrý stín:

```
text-shadow: 2px 2px 0 #88abd1, 3px 3px 7px #666666;
```


Platí, že později zadaný stín se vykreslí hlouběji než dříve zadaný stín. Světlemodrý stín se tedy vykreslí nad původním stínem, protože je zapsaný dříve:

Moje první webová stránka

index.html

U písma se toho dá stylovat opravdu mnoho. To nejzákladnější jsme si ukázali, kompletní popis naleznete jako vždy ve zdejším [CSS 3 kurzu - Text a písmo](https://www.itnetwork.cz/html-css/css3/zaklady/text-a-pismo-3-cast).

Nezapomeňte vložit link na `styl.css` do všech html podstránek, jinak se vám na nich styly nezobrazí. ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V příští lekci, [HTML layout](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-layout-a-pozadi), začneme pracovat na layoutu, tedy rozložení stránky na navigační menu, obsahovou část a patičku.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64d5047d3d686)

# Lekce 12 - HTML layout
V minulé lekci, [Stylování textu v CSS - Google fonty, velikost fontu a stín](https://www.itnetwork.cz/html-css/webove-stranky/stylovani-textu-v-css-google-fonty-velikost-fontu-a-stin), jsme si ukázali stylování písma pomocí Google fontů a nastavili velikost a stín písma.

Dnes v **HTML/CSS tutoriálu** začneme pracovat na layoutu, pomocí kterého přidáme naší stránce **hlavičku** a **patičku**. Po dokončení několika následujících lekcí dotáhneme své webové stránky do této podoby:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/final_web_view.png)

Abychom tohoto výsledku dosáhli, musíme se naučit, jak pomocí CSS _pozicovat_ prvky na stránce.

Rozložení stránky
-----------------

Jistě víte, že webové stránky mají určité rozložení prvků, kterému se často říká **layout**. U většiny webových stránek nalezneme:

*   **hlavičku** s logem webu,
*   v ní nebo pod ní **navigaci** na nejdůležitější podstránky,
*   dále samotný **článek** s obsahem a
*   na konci **patičku** s informací, kdo web vytvořil.

Níže jsou tyto části zvýrazněné na layoutu, který budeme vytvářet:

![Součásti layoutu stránky - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/layout_highlighted.png)

Pro tyto elementy HTML poskytuje nové tagy, které si hned představíme.

Každá podstránka na našem webu má pak toto stejné rozložení. Např. tedy jak stránka "O mně", tak stránka "Dovednosti" bude obsahovat tu stejnou hlavičku, navigaci, článek a patičku. Jen v obsahu článku se od sebe samozřejmě jednotlivé stránky odlišují. Layout si vložíme do každé podstránky webu jako HTML kód a jeho elementy poté napozicujeme pomocí CSS tak, aby se zobrazovaly na správných místech.

V minulosti se k vytvoření layoutu používaly tzv. rámy, které ale byly již z HTML odstraněny, jsou nevalidní a proto je nebudeme používat. Navigace byla v minulosti také často v levém sloupci, později se přemístila do vodorovného menu pod hlavičku.

Začněme tím nejjednodušším, a to polem s článkem.

### Článek `<article>`

Na našem webu nyní máme jen článek s informacemi o nás. Ten jsme jako článek nijak neoznačovali, protože na webu nic dalšího nebylo. Když na web nyní chceme přidat hlavičku a patičku, **je třeba část s článkem označit** jako článek pomocí párového tagu `<article>`, aby se s hlavičkou a patičkou nepletl.

Když tagy na layout jako `<article>` a další ještě neexistovaly, všechny části stránky se obalovaly do elementů `<div>`. Z toho ovšem nebylo poznat, o jakou část stránky se jedná, a proto se k tvorbě layoutů již nepoužívá. Element `<div>` nenese **žádný význam** pro webové vyhledávače, proto bychom se jej měli snažit používat co nejméně. Slouží k seskupování logicky souvisejících **blokových** elementů. Tento element většinou používáme v kombinaci s CSS styly. Využijeme jej v situacích, kdy potřebujeme skupinu elementů od zbytku obsahu odlišit pouze **vizuálně**, ale ne sémanticky.

Samotný článek často neobsahuje jen text, ale také další doplňující informace jako titulek, autora, datum publikace, hodnocení a podobně. Proto existují další tagy, kterými lze element `<article>` ještě logicky rozdělit. Zpravidla ho rozdělujeme alespoň na dvě části a to:

*   na **hlavičku** s titulkem článku a
*   na **sekci** s obsahem článku.

Slouží k tomu tagy `<header>` a `<section>`. Ukažme si opět o jaké části výsledného webu se jedná:

![Součásti layoutu článku - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/article_layout_highlighted_2.png)

V HTML kódu by se článek s rozložením definoval takto:

```
<article>
    <header>
        <h1>O mně</h1>
    </header>

    <section>
        <p>Text článku...</p>
    </section>
</article>
```


Máme zde tedy článek `<article>`, který dále obsahuje hlavičku `<header>` s nadpisem článku. Tagem `<section>` označujeme část článku, ve které je jeho obsah. Článku můžeme přidat i patičku tagem `<footer>`, kde se zobrazí třeba _datum jeho publikace_ a _hodnocení_. V hlavičce by potom mohl být uvedený autor a podobně. My pro jednoduchost zůstaneme jen u výše uvedené struktury.

### Hlavičky v HTML

Jak jste si možná právě uvědomili, **již se bavíme o třetí hlavičce v HTML**. Abychom si je nepletli, pojďme si je zopakovat:

*   hlavička HTML dokumentu `<head>` není vidět a obsahuje informace pro prohlížeč a vyhledávače
*   hlavičku stránky s logem a navigací si vytvoříme až dále
*   hlavička článku `<header>` zpravidla obsahuje nadpis článku

Úprava `index.html`
-------------------

Pojďme nyní nové znalosti konečně aplikovat do souboru `index.html`. Zde část s článkem webu označíme jako článek a ještě ji logicky rozdělíme na hlavičku a obsah, což nám později pomůže vytvořit dané rozložení webu.

Za značkou `<body>` tedy otevřeme element `<article>` s článkem a v něm element `<header>` s nadpisem `<h1>`:

```
...
<body>
    <article>
        <header>
            <h1>O mně</h1>
...
```


Hlavičku následně zavřeme pomocí `</header>` a otevřeme `<section>` pro obsah článku, ve kterém bude zbytek obsahu stránky. Protože obsah na stránce jsme vytvořili někdy v začátku kurzu, drobně jej rovnou upravíme, aby odpovídal cílenému vzhledu webu:

```
        </header>
        <section>

            <img src="obrazky/avatar.jpg" class="avatar" alt="Programátor HoBi" />

            <p>
                Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.
            </p>

            <p>
                Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.
                Kontaktovat mě můžete na <a href="kontakt.html">kontaktní stránce</a>.
            </p>

            <p>
                Rád čtu a někdy (hlavně v létě) i sportuju.
            </p>

            <p>
                Mým hlavním koníčkem (a doufám že jednou i zaměstnáním) je <strong>programování</strong>!
            </p>

            <h2>Dovednosti</h2>
            <p>
                Co umím, jsem sepsal na stránce <a href="dovednosti.html">dovednosti</a>.
            </p>
        </section>


    </article>
</body>
```


Obsah a článek nezapomeneme úplně na konci zavřít pomocí `</section>` a `</article>`.

Obrázku jsme přiřadili třídu `class="avatar"`, abychom jej mohli dále v kurzu stylovat. Rovnou ji využijeme pro zmenšení obrázku, který by nám zabíral moc velký prostor. Obrázek `<img>` nebudeme chtít dále jinak stylovat, proto kolem něj již není odstavec s centrovací třídou, ani nemá atributy k nastavení šířky a výšky s procenty. Pro zmenšení obrázku do souboru `styl.css` přidáme:

```
.avatar {
    width: 300px;
}
```


A máme hotovo. Naše stránka teď bude vypadat takto:

Moje první webová stránka

index.html

Web naleznete jako vždy v příloze ke stažení.

V příští lekci, [Pozadí webu a velikost elementů](https://www.itnetwork.cz/html-css/webove-stranky/pozadi-webu-a-velikost-elementu), si ukážeme stylování pozadí webové stránky a nastavíme výšku a šířku elementů.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51a4daeaddbb0)

# Lekce 13 - Pozadí webu a velikost elementů
V minulé lekci, [HTML layout](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-layout-a-pozadi), jsme započali tvorbu layoutu.

V dnešním **HTML/CSS tutoriálu** se podíváme na stylování pozadí pomocí vlastnosti `background`, naučíme se **nastavit výšku a šířku elementů** a další užitečné styly.

Vlastnost `background` - Nastavení pozadí
-----------------------------------------

Nyní se začneme zajímat o **pozadí stránky**. Zatímco dříve bylo běžné využívat barvy, pracovat s texturami a vytvářet barevný a veselý web (který ovšem neztrácel na čitelnosti!), dnes je moderní držet se zásad minimalismu. Pozadí většinou zůstává bílé, někdy ve světlých odstínech šedé. Pokud vás kombinování barev zajímá, více se o něm můžete dočíst v [lekci Jak na barvy](https://www.itnetwork.cz/html-css/user-experience/ux-jak-na-barvy) z kurzu [User Experience](https://www.itnetwork.cz/html-css/user-experience).

Ve `styl.css` nastavíme **jednobarevné pozadí** na elementu `<body>` pomocí vlastnosti `background`. I s předchozími styly bude selektor `body` v CSS souboru vypadat takto:

```
body {
    font: 14px "Poppins";
    color: #414042;
    background: #F9F9F9;
}
```


Výsledkem je světle šedé pozadí, čímž jsme se zas trochu přiblížili finálnímu webu:

Moje první webová stránka

index.html

### Obrázek na pozadí

Zmiňme si jen, jak by to vypadalo, pokud bychom chtěli na pozadí využít nějaký **obrázek**. Může se jednat o fotografii, ale třeba i šum nebo texturu. Do vlastnosti `background` můžeme vložit `url` daného obrázku. Vypadalo by to například takto:

```
background: url('obrazky/pozadi.png');
```


K tomu je nutné podotknout dvě věci:

*   Vždy je lepší odkazovat na obrázek, který máme fyzicky ve složce projektu než na nějaký externí na internetu.
*   Je dobré počítat s tím, že načíst obrázek je datově náročnější než vykreslit barvu, a může se stát, že se obrázek z různých důvodů nenačte. Pro takový případ je dobré stejně ještě připsat nějakou barvu, která bude v pozadí místo daného obrázku:

```
background: url('obrazky/pozadi.png') #F9F9F9;
```


Vlastnost `background` je opět pouze zkratkou za spoustu jiných vlastností, které se dají použít pro nastavení pozadí. Barvu pozadí bychom mohli například nastavit taktéž pomocí vlastnosti `background-color`, obrázek bychom však pomocí ní do pozadí nenastavili.

O stylování pozadí by toho vydalo na několik lekcí, zájemce opět odkážeme na [český CSS 3 manuál - Pozadí](https://www.itnetwork.cz/html-css/css-manual/pozadi). V našem webovém portfoliu budeme využívat na pozadí pouze barvy ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Vlastnosti `width` a `height` - Výška a šířka elementů
------------------------------------------------------

Na stránce máme obrázek našeho avatara, kterému jsme v CSS již nastavili menší šířku, nicméně dané vlastnosti jsme detailně neprobrali. Pojďme to napravit.

Výšku a šířku elementů nastavujeme pomocí CSS vlastností `height` (výška) a `width` (šířka). Těmto vlastnostem můžeme nastavit především tyto hodnoty:

*   Číselnou hodnotu s jednotkou - například pixely `px`, šířky písmene "M" `em` nebo procenta `%`
*   `auto` - velikost se vypočítá a zvolí automaticky. Jedná se o výchozí hodnotu
*   `max-content` - skutečná maximální šířka nebo výška obsahu. U textového obsahu to znamená, že se obsah vůbec nezalomí, i kdyby měl přetéct
*   `min-content` - skutečná minimální šířka nebo výška obsahu. Například v případě šířky je to u textového obsahu šířka nejdelšího slova

Obě vlastnosti mají poté ještě minimální a maximální varianty, máme tedy `min-height`, `min-width`, `max-height` a `max-width`. Vlastnostmi `min-height` a `min-width` nastavujeme **minimální** velikost daného elementu a vlastnostmi `max-height` a `max-width` jeho **maximální** velikost. Při počítání velikosti elementu mají tyto vlastnosti přednost před vlastnostmi `height` a `width`.

To znamená, že pokud bychom elementu nastavili šířku `width` na `200px` a `max-width` na `100px`, tak element bude široký pouze `100px`.

Nyní si v souboru `styl.css` na základě získaných vědomostí nastavíme také výšku hlavičky článku na `80px`. Do CSS přidáme nový selektor:

```
article header {
    height: 80px;
}
```


Nové selektory můžete přidávat jednoduše na konec CSS souboru. Nebo je ideálně seřaďte tak, aby byly ty podobné u sebe a nestylovali jsme např. barvu hlavičky na začátku souboru a písmo hlavičky na konci souboru. Pokud dva selektory nepracují se stejnou vlastností stejného elementu, na jejich pořadí v CSS souboru nezáleží. Jinak platí, že pozdější selektor přepisuje ten, který byl v souboru dříve.

### Složitější selektory

Objevuje se nám zde **nový typ CSS selektoru**, a to takový, kde jednotlivé elementy neoddělujeme čárkou, ale pouze **mezerou**. Selektor `article header` vybere všechny hlavičky všech článků na stránce (tedy všechny elementy `<header>`, vložené v elementu `<article>`).

Jelikož na stránce budeme mít vždy jen jeden článek a v něm jednu hlavičku, bude to fungovat správně. V tuto chvíli by jistě stačilo vybrat i jen element `<header>`, protože na stránce jiný není. V budoucnu ale bude další hlavička s logem i na začátku stránky, proto zde vkládáme na první místo ono `article`, abychom upřesnili, že zde myslíme hlavičku `<header>` v článku, nikoli stránky.

Daný zápis by fungoval i v případě, že by byl `<header>` vložen v článku třeba ještě takto do tagu `<div>`:

```
<article>
    <div>
        <header>
        ...
        </header>
    </div>
    ...
</article>
```


Selektoru stačí, že `<header>` bude někde uvnitř `<article>`.

Kdybychom chtěli, aby selektor vybral jen přímo vnořený element (hovoříme o _dítěti_ - `child`), použijeme znak `>`:

```
article > header {
}
```


Nyní by se `<header>` v příkladu výše nevybral, jelikož není přímo v `<article>`, ale je přímým potomkem elementu `<div>`.

To bylo jen malé odbočení, abychom si rozšířili zásobu selektorů. Jaký použijete je na vás.

### Vlastnost `max-width` - Maximální šířka

Dnešní monitory jsou hodně široké a kdyby byl článek přes úplně celou šířku prohlížeče, museli bychom jezdit očima dlouhou vzdálenost a špatně by se četl. Weby proto omezují maximální šířku svých článků, nejvíce je to asi vidět na novinových webech, kde jsou krátké články, které jsou velmi úzké. Náš článek `<article>` omezíme na maximální šířku `960px` pomocí vlastnosti `max-width`. Přidáme další selektor:

```
article {
    max-width: 960px;
}
```


### `margin 0 auto` - Centrování bloků

Článek je nyní užší, ale je přilepený na levé hraně monitoru (a uživatel sedí obvykle veprostřed ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) ). Proto článek vycentrujeme. Dostáváme se do situace, kdy potřebujeme vycentrovat blokový element (`<article>`) v blokovém elementu (`<body>`). Nejjednodušší způsob, který funguje pouze pro jeden element, je nastavit vlastnost `margin`. Ta nám udává velikost vnějšího okraje daného elementu, tedy odsazení od okolních elementů. My zde nastavíme velikost horního a dolního okraje na `0` a velikost bočních okrajů na hodnotu `auto`, která zajistí stejné odsazení z obou stran.

Vlastnosti `margin` se budeme blíže věnovat dále v kurzu, proto toto její použití můžeme zatím chápat pouze jako takovou kouzelnou formulku, pomocí které lze centrovat blokové elementy.

Styl článku upravíme do následující podoby:

```
article {
    max-width: 960px;
    margin: 0 auto;
}
```


Ostylování nadpisů
------------------

Podle předlohy nyní nastylujme všechny typy nadpisů (`<h1>` - `<h6>` v článku `<article>`). Do CSS přidáme:

```
article h1,
article h2,
article h3,
article h4,
article h5,
article h6 {
    color: #00386B;
}
```


**Všechny** původní selektory nadpisů `h1`, `h2`, `h3`, `h4`, `h5` a `h6` ze souboru odebereme. Už je nebudeme potřebovat.

Dále upravíme font prvních dvou úrovní nadpisů. To uděláme zvlášť pomocí dalších selektorů:

```
article h1 {
    font-size: 2.3em;
    font-weight: bold;
    text-transform: uppercase;
    width: max-content;
}

article h2 {
    font-size: 2em;
}
```


Použili jsme následující vlastnosti:

*   `font-size` - Nadpisu `<h1>` jsme nastavili velikost písma na 2,3 násobek písma rodiče a nadpisu `<h2>` na dvojnásobek.
*   `font-weight` - Pro tučný text jsme nastavili hodnotu na `bold`, pro normální text by to byla hodnota `normal`. Nadpisy jsou jako výchozí tučné, ale je dobré znát možnosti nastavení.
*   `text-transform` - První nadpis se vykreslí celý VELKÝMI PÍSMENY pomocí hodnoty `uppercase`.
*   `max-content` - Šířku prvního nadpisu jsme omezili jen na šířku jeho obsahu, abychom jej později v kurzu mohli snáze podtrhnout. U dalších nadpisů nám nevadí, že element je širší, než text v nadpisu.

Zbylé styly
-----------

Dále přidáme selektory pro úpravu odstavců `<p>` a odkazů `<a>` v obsahu článku `<section>`:

```
article section p {
    line-height: 1.8em;
}

article section a {
    color: #EF6534;
}
```


U odstavců jsme zvýšili mezeru mezi řádky `line-height` a odkazy jsme nabarvili na oranžovo.

A zde vidíme výsledek dnešní lekce (všimněme si, že se odsazení ze stran mění v závislosti na velikosti okna):

Moje první webová stránka

index.html

I k dnešní lekci najdete soubor s naším projektem přímo pod článkem.

V následujícím cvičení, [Řešené úlohy k 7.-13. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-zakladni-css-styly), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64d22d08c46fa)

# Řešené úlohy k 7.-13. lekci HTML a CSS
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Řešené úlohy k 7.-13. lekci HTML a CSS

V minulé lekci, [Pozadí webu a velikost elementů](https://www.itnetwork.cz/html-css/webove-stranky/pozadi-webu-a-velikost-elementu), jsme si ukázali stylování pozadí webové stránky a nastavili výšku a šířku elementů.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Vytvořte k následujícímu HTML dokumentu CSS soubor tak, aby měl tyto parametry:

# Lekce 14 - Obtékání v HTML - Float, Stín
V předešlém cvičení, [Řešené úlohy k 7.-13. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-zakladni-css-styly), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Naposled jsme v **HTML/CSS tutoriálu** skončili vložením tagu `<article>`, ve kterém se nacházela hlavička (`<header>`) a sekce s článkem (`<section>`). Naše stránka vypadá asi takto:

Moje první webová stránka

index.html

Dnes si ukážeme, jak k lepšímu rozvržení naší stránky využijeme **obtékání prvku** a **posuneme tímto náš obrázek vpravo vedle textu**. Podíváme se také jak lze využít **nastavení stínu**.

Plovoucí obsah (`float`)
------------------------

Float umožňuje nastavit **obtékání elementu dalším obsahem** - například pokud chceme do textu umístit obrázek a chceme, aby jej text nějakým způsobem obklopoval (tak, jako to známe například z [Wordu](https://www.itnetwork.cz/ms-office/zaklady-microsoft-word) a jiných textových editorů).  

Dříve se používal `float` k pozicování elementů v layoutu vedle sebe. Toto užití je dnes už špatně. Používáme k tomu flexbox, o kterém si povíme později. Nikdy bychom `float` neměli používat k vytváření layoutu stránky!

Někdo si myslí, že se `float` už nemá vůbec používat. Float jako takový ovšem špatně není a je to naprosto validní vlastnost k obtékání elementů v textu.

Vlastnost `float` použijeme na obrázek s naším avatarem, který má již přiřazenou třídu `.avatar`.

V CSS nyní upravíme selektor pro třídu `.avatar`, kde jsme doposud měli definovanou pouze šířku. K ní vložíme tyto další vlastnosti:

```
.avatar{
    float: right;
    width: 300px;
    padding-left: 10px;
    filter: grayscale(1);
}
```


Ty nám umožní nastavit následující:

*   vlastnost `float` s hodnotou `right` umožní, že obrázek bude **umístěn vpravo a obtékán textem zleva**

Rovnou jsme obrázku nastavili i několik dalších věcí:

*   vlastnost `padding`, o které si povíme dále v kurzu, zajistí odsazení obrázku, aby se text nenalepil přímo na fotografii
*   a přidání černobílého vzhledu díky vlastnosti `filter: greyscale(1);`, kde `grayscale` může nabývat číselné hodnoty `0`, `0.1`, `0.2`, ... až `1` podle toho, na kolik chceme obrázek "zčernobílit". Hodnotu vlastnosti `grayscale` lze uvádět také v procentech. Můžeme si vyzkoušet zadat např. hodnotu `0.5` (nebo `50%`), abychom věděli, že i takové možnosti stylování CSS nabízí.

Floatem lze do textu vložit i jiné elementy než obrázky, je jim ovšem vždy potřeba **nastavit pevnou šířku**.

### Ukončení obtékání (`clear`)

Někdy se může stát, že je text kratší, než je výška obrázku. Obrázek pak může začít obtékat další element, který je za textem a stránka by se nám rozhodila. Proto na konec textu vložíme element s vlastností `clear`. Na takový "čistič" nesmíme zapomenout a obtékání na konci obsahu takto zastavit. Proto si jej nyní rovnou přidáme.

Na konec `<section>` tedy přidáme `<div>` se třídou `cistic`, tedy celým zápisem `<div class="cistic"></div>`:

```
<section>
    <img src="obrazky/avatar.jpg" class="avatar" alt="Programátor HoBi"/>

    <p>
        Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.
    </p>

    <p>
        Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.
        Kontaktovat mě můžete na <a href="kontakt.html">kontaktní stránce</a>.
    </p>
    ...

    <div class="cistic"></div>

</section>
```


Následně si v CSS souboru pro tuto třídu vytvoříme selektor `.cistic`.

```
.cistic {
    clear: both;
}
```


Vlastnost `clear` nabývá hodnot `left`, `right` nebo `both`, podle toho, z jaké strany chceme obtékání plovoucích elementů ukončit. Obvykle chceme jednoduše na konci textu ukončit všechno obtékání, protože dále již text nepokračuje, a vložíme tam tedy jednoduše `<div>` s `clear: both`.

Výsledkem tedy je, že je fotka v šedých tónech a obtékána textem, což je nejlépe vidět při zmenšení prohlížeče:

Moje první webová stránka

index.html

Stín
----

Se stínem jsme se již v CSS setkali, byl to stín u textu pomocí CSS3 vlastnosti `text-shadow`. Stín můžeme nastavit libovolnému elementu na stránce pomocí vlastnosti `box-shadow`. Ukážeme si to na elementu `<article>` s článkem, i když stín v designu není, abychom si vlastnost vyzkoušeli. Pak stín zas odebereme. Do selektoru `article` přidáme nastavení `box-shadow`:

```
article {
    margin: 0 auto;
    ...
    box-shadow: 2px 2px 7px #1c2228;
}
```


Zadali jsme několik hodnot:

*   První 2 hodnoty (`2px` `2px`) jsou pozice stínu.
*   Třetí hodnotou (`7px`) je rozostření.
*   Poslední hodnotou je barva.

Vlastnost ostyluje obdélníkový stín okolo elementu. Podívejme se na výsledek:

Moje první webová stránka

index.html

Po vyzkoušení si vlastnost `box-shadow` s uvedenými hodnotami ze selektoru `article` **smažeme**.

V příští lekci, [Rámeček a boxmodel v CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-ramecek-stin-boxmodel), si vysvětlíme tzv. boxmodel a dokončíme oblast s článkem.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.
[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51a5d4386ec3b)

# Lekce 15 - Rámeček a boxmodel v CSS
V minulé lekci, [Obtékání v HTML - Float, Stín](https://www.itnetwork.cz/html-css/webove-stranky/pozicovani-v-html-flexbox-float-a-grid), jsme se naučili používat float k obtékání elementu obsahem a jak můžeme u elementů nastavit stín.

V dnešním HTML/CSS tutoriálu dokončíme pole s článkem a naučíme se další nové vlastnosti HTML a CSS.

Referenční tlačítko
-------------------

Vytvoříme si tlačítko odkazující na podstránku s našimi referencemi (soubor `reference.html` si můžeme vytvořit, budeme na něm však pracovat až později. Nyní to tedy není nutné).

Do `index.html` vložíme na konec `<section>` následující řádky:

```
<p class="tlacitko-odstavec">
    <a href="reference.html" class="reference-tlacitko">Moje reference</a>
</p>
```


Naše nové tlačítko bude tvořeno právě přidaným odkazem `<a>`. Budeme tedy stylovat třídu `.reference-tlacitko`, třídu `.tlacitko-odstavec` využijeme v pozdější lekci.

### Pozadí a písmo

Do našeho CSS souboru si napíšeme nový selektor `.reference-tlacitko`. Nejprve tlačítku přidáme nám již známé vlastnosti:

```
.reference-tlacitko {
    background: #70B73A;
    color: white;
    font-size: 0.9em;
    text-transform: uppercase;
}
```


Tlačítku jsme nastavili zelené pozadí, barvu textu na bílou, velikost písma a výpis textu velkými písmeny.

### Podtržení textu - `text-decoration`

Jelikož se jedná o odkaz (na další stránku), tak by se nám ve výchozím nastavení text tlačítka podtrhl. To by ovšem nevypadalo moc dobře. Proto tuto "dekoraci" zrušíme přidáním vlastnosti `text-decoration` s hodnotou `none`:

```
.reference-tlacitko {
    ...
    text-decoration: none;
}
```


### Vnitřní odsazení - `padding`

Dále pomocí vlastnosti `padding` odsadíme text tlačítka od jeho okrajů, aby na ně nebyl tak moc nalepený:

```
.reference-tlacitko {
    ...
    padding: 12px 25px;
}
```


Shora a zdola jsme nastavili odsazení na `12` pixelů a ze stran na `25` pixelů.

Tuto vlastnost si blíže popíšeme dále v lekci.

### Zakulacení rohů - `border-radius`

U tlačítek většinou chceme, aby byly rohy oblé. Proto našemu tlačítku ještě nastavíme zakulacené rohy. K tomu využijeme vlastnost `border-radius`, kterou nastavujeme, jak moc se zakulatí rohy tzv. **rámečku**. Celý kód selektoru vypadá takto:

```
.reference-tlacitko {
    background: #70B73A;
    color: white;
    font-size: 0.9em;
    text-transform: uppercase;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 25px;
}
```


Nyní má tlačítko všechny své rohy zaoblené s poloměrem `25` pixelů:

Moje první webová stránka

index.html

Vlastnost `border-radius` umožňuje nastavení různých zakulacení jednotlivých rohů. Hodnoty zapisujeme postupně za sebou v pořadí levý horní, pravý horní, pravý dolní a levý dolní roh a oddělujeme je mezerami. Naši hodnotu bychom mohli tedy rozepsat takto:

```
border-radius: 25px 25px 25px 25px;
```


Zakulacení například pouze levého horního a pravého dolního rohu bychom nastavili následovně:

```
border-radius: 25px 0 25px 0;
```


My je však necháme všechny zaoblené s poloměrem `25` pixelů.

Občas se stane, že chceme zobrazovat kulatou fotku (například profilové obrázky velice často bývají v kruhu) - toho docílíme rovněž pomocí vlastnosti `border-radius`.

Rámeček - `border`
------------------

Rámeček můžeme dále stylovat především pomocí vlastnosti `border`. Tuto vlastnost v našem projektu příliš nevyužijeme, ale protože je důležité ji znát, vysvětlíme si některé její možnosti.

Pro představu, jak rámeček funguje, můžeme například vlastnost `border` vložit do selektoru `article`:

```
article {
    margin: 0 auto;
    ...
    border: 3px solid green;
}
```


Výše uvedený zápis vlastnosti `border` s hodnotami `3px solid green` je zkráceným zápisem těchto vlastností:

*   `border-width: 3px;` - šířka rámečku: 3px
*   `border-style: solid;` - styl čáry: plný
*   `border-color: green;` - barva rámečku: zelená

S tímto zkráceným stylem zápisu se budete v praxi často setkávat.

### Styly čáry - `border-style`

Jako styl čáry můžeme použít hodnoty:

*   `none` - Bez rámečku.
*   `hidden` - Rámeček se nevykreslí, ale zabírá místo.
*   `dotted` - Tečkovaný.
*   `dashed` - Čárkovaný.
*   `solid` - Plná čára.
*   `double` - Dvojitý.
*   `groove` - 3D rámeček s efektem _groove_.
*   `ridge` - 3D rámeček s efektem _ridge_.
*   `inset` - 3D rámeček s efektem _inset_.
*   `outset` - 3D rámeček s efektem _outset_.
*   `inherit` - Zdědí styl čáry rámečku nadřazeného elementu.

Poslední 3D styly jsou dobře vidět jen s širokým rámečkem. Všechny hodnoty podrobněji vysvětlujeme a ukazujeme na příkladech v kurzu CSS3, konkrétně v lekcích [Okraje a rámečky v CSS3](https://www.itnetwork.cz/html-css/css3/zaklady/okraje-a-ramecky-v-css-3) a [Pokročilejší okraje a rámečky v CSS3](https://www.itnetwork.cz/html-css/css3/zaklady/pokrocilejsi-okraje-a-ramecky-v-css-3).

### Strany rámečku

Rámeček nemusí být nutně kolem celého elementu, ale může být třeba jen na některých jeho stranách. Vlastnost `border` s hodnotou `3px solid green` bychom totiž mohli rozepsat na horní, pravou, dolní a levou stranu rámečku:

```
border-top: 3px solid green;
border-right: 3px solid green;
border-bottom: 3px solid green;
border-left: 3px solid green;
```


Tyto jednotlivé zápisy je pak možné ještě dále rozepsat i na `border-top-width`, `border-top-style` atd.

My si pomocí spodního rámečku vytvoříme podtržení hlavního nadpisu v našem článku `<article>`. Upravme si tedy selektor `article h1`:

```
article h1 {
    font-size: 2.3em;
    font-weight: bold;
    text-transform: uppercase;
    border-bottom: 4px solid #EF6534;
}
```


Stránka s rámečky nyní vypadá takto:

Moje první webová stránka

index.html

Vlastnost `border` s hodnotami `3px solid green` ze selektoru `article` jsme si vyzkoušeli a **nyní ji smažeme**.

Podrobněji se rámečkům a jejich vlastnostem věnujeme v kurzu [Základy CSS3](https://www.itnetwork.cz/html-css/css3/Zaklady).

Odsazení - `margin` a `padding`
-------------------------------

V předchozích lekcích jsme se již setkali s vlastností `padding` a `margin`. Nyní si pojďme lépe vysvětlit, jak tyto vlastnosti fungují.

Rozdíl mezi paddingem a marginem se vysvětluje na tzv. **boxmodelu** (česky někdy bývá přeloženo jako "krabičkový model"), který vypadá takto:

![Box model v CSS pro HTML element - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/css/boxmodel.png)

Na obrázku vidíme element a rámeček (`border`) kolem něj. Rozestup mezi rámečkem a obsahem elementu se nazývá `padding`. Rozestup mezi rámečkem a okolím elementu se nazývá `margin`. Zjednodušeně řečeno: `padding` je **vnitřní** odsazení, `margin` to **vnější**.

Pokud chceme nastavit odsazení na všechny strany stejné, tak můžeme použít takovýto zápis vlastností `padding` a `margin`:

```
padding: 20px;

margin: 20px;
```


Vlastnosti `padding` a `margin` lze však rozepsat i na jednotlivé strany:

```
padding-top: 20px;
padding-right: 20px;
padding-bottom: 20px;
padding-left: 20px;

margin-top: 20px;
margin-right: 20px;
margin-bottom: 20px;
margin-left: 20px;
```


Zápis výše bychom použili v případě, že bychom chtěli nastavit třeba jen okraj z jedné strany nebo z každé strany jiný. Jednotlivé hodnoty můžeme uvést i ve shrnujícím zápisu, který je v pořadí **horní, pravý, dolní, levý**:

```
padding: 20px 20px 20px 20px;
margin: 20px 20px 20px 20px;
```


Jako třetí typ zápisu se někdy používá uvedení pouze dvou hodnot:

```
padding: 20px 20px;
margin: 20px 20px;
```


Zde první hodnota udává okraj **svislý** (horní a dolní) a druhá **vodorovný** (levý a pravý).

### Nastavení odsazení

Nyní si nastavíme odsazení některým elementům na našem webu. Využijeme k tomu již existující selektory. Začneme odstavci `<p>` v elementu `<article>`, kterým nastavíme dolní vnější okraj (`margin-bottom`) na `1.5em`:

```
article section p {
    margin-bottom: 1.5em;
    line-height: 1.8em;
}
```


Elementu `<article>` přidáme ještě `padding`, abychom ho měli hezky odsazený:

```
article {
    padding: 50px 50px 10px 50px;
}
```


Dále přidáme horní a dolní vnitřní okraj nadpisům všech úrovní, které se v článku nacházejí:

```
article h1,
article h2,
article h3,
article h4,
article h5,
article h6 {
    padding: 10px 0;
    color: #00386B;
}
```


Některé elementy, jako třeba nadpisy a odstavce, mají nastavenu výchozí hodnotu `margin`. Nám se to v článku u nadpisu první úrovně ovšem nehodí, proto ji nastavíme na `0` ze všech stran:

```
article h1 {
    margin: 0;
    font-size: 2.3em;
    font-weight: bold;
    text-transform: uppercase;
    width: max-content;
    border-bottom: 4px solid #EF6534;
}
```


### Výpočet velikosti elementu - vlastnost `box-sizing`

S boxmodelem úzce souvisí vlastnost `box-sizing`, jejíž výchozí hodnotou je `content-box`. Představme si, že nastavíme šířku nějakého elementu např. na `100px` a dále mu nastavíme `padding` nebo rámeček z každé strany na `10px`. Element bude zabírat celkem `120px`, protože se k šířce připočítají ještě okraje. To může být u vytváření layoutu problematické.

Proto existuje ještě hodnota `border-box`, která udává, že se do nastavené šířky a výšky započítává i velikost `padding` a šířka rámečku. Tím se stane, že **náš element zůstane pořád stejně široký** (oněch `100px`), protože přidaný `padding` nebo rámeček zaberou jeho vnitřní prostor a jeho obsah se tím v našem příkladu zmenší na `80px`.

Tuto vlastnost si ukážeme na elementu `<body>`. U něj v budoucnu budeme chtít nastavit minimální výšku na výšku celé obrazovky, aby se nám patička zobrazovala vždy na konci stránky, a zároveň mu budeme chtít nastavit i `padding`. Nastavíme proto hodnotu vlastnosti `box-sizing` na `border-box`:

```
body {
    font: 14px "Poppins";
    background: #f9f9f9;
    color: #414042;
    box-sizing: border-box;
}
```


Takto nyní vypadá náš web:

Moje první webová stránka

index.html

Kód z dnešního HTML/CSS tutoriálu naleznete jako vždy ke stažení v příloze níže. Rámeček však nebudeme v příštích lekcích používat, jedná se pouze o ukázku. To co si však na našem budoucím webu ponecháme je referenční tlačítko ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím cvičení, [Řešené úlohy k 14.-15. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-stylovani-a-pozicovani), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51aa453838daa)

# Řešené úlohy k 14.-15. lekci HTML a CSS
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Řešené úlohy k 14.-15. lekci HTML a CSS

V minulé lekci, [Rámeček a boxmodel v CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-ramecek-stin-boxmodel), jsme si ukázali rámeček a boxmodel. Dokončili jsme také pole s článkem.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Občas je intuitivní, když nějaký odkaz vypadá jako

# Lekce 16 - Navigační menu, patička a HTML entity
V předešlém cvičení, [Řešené úlohy k 14.-15. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-stylovani-a-pozicovani), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Na dnešní HTML/CSS tutoriál máme slíbenou tvorbu **navigačního menu** v hlavičce **a tvorbu patičky**.

Hlavička
--------

Na hlavičku použijeme opět tag `<header>`. Ten jsme již použili k definici hlavičky článku `<article>`, nyní ho použijeme k definici hlavičky celého `<body>`. Vyhledávače díky tagu poznají, že se jedná o hlavičku a budou se podle toho chovat. Opět zopakuji, že v minulosti se k tomuto používaly tagy `<div>`, což je nyní nesémantické. Ve stránce plné tagů `<div>` se nevyzná ani kodér, ani vyhledávač.

Hned za začátek `<body>` si tedy vložme tag `<header>`:

```
<header>

</header>
```


V hlavičce se budou nacházet dvě věci: **logo a navigační menu**.

### Logo

Logo vložíme do elementu `<div>` a opatříme ho atributem `id` s hodnotou `logo`:

```
<div id="logo">
    <h1>Honza<span>Bittner</span></h1>
    <small>webdeveloper</small>
</div>
```


Do loga jsme vložili nadpis `<h1>` a doprovodný text. Objevují se nám zde dva nové tagy:

*   `<span>` - slouží k seskupení **řádkových** elementů nebo **části textu**, aby je bylo možné snadno nastylovat. Stejně jako tag `<div>` tento tag nenese žádný význam a používá se tedy pouze pro stylování.
*   `<small>` - slouží k označení textu s **nízkým významem**, například k vedlejším poznámkám. Často se do něj píše třeba copyright, my v něm nyní máme vloženo "webdeveloper".

Možná vás zarazilo, že na stránce budeme mít dva nadpisy první úrovně (jeden ve článku a druhý v logu), když jsme na začátku kurzu řekli, že `<h1>` má být na stránce pouze jednou. Trochu toto tvrzení poupravíme. Stará specifikace HTML neumožňovala 2 nadpisy první úrovně na jedné stránce. HTML s tím od verze 5 nemá problém, **pokud jsou nadpisy vloženy v headeru**. I logicky je to lepší, jelikož nadpis má jak webová stránka, tak článek v ní zobrazený.

#### Atributy `id` a `class`

S těmito atributy jsme se již setkali, i tak si ale ještě připomeneme, v čem se vlastně liší. Atribut `id` má podobný význam jako atribut `class`, slouží k přiřazení stylu určitému elementu. Rozdíl oproti `class` je v tom, že element s určitým `id` (např. s `id="logo"` výše) **může být v celém HTML dokumentu pouze jeden**. Určitou `class` jsme mohli přiřadit kolika elementům jsme chtěli. ID se využívá tedy ke stylování **unikátních prvků** na stránce. Ukázkovým příkladem je právě logo, které je na každé stránce jen jedno. K tomuto tématu se ještě vrátíme u stylování.

Jako druhý prvek do headeru vložíme navigační menu. K vymezení navigační oblasti slouží tag `<nav>`. Jeho použití se opět oproti tagu `<div>` vyplatí, jelikož **vyhledávače pochopí, že se jedná o navigaci**.

Otázkou zůstává, jaký element použijeme k reprezentaci samotného navigačního menu. Pokud vás napadá tabulka, tak tu používat nebudeme. Tabulka je určena k prezentaci tabulkových hodnot. Mohlo by vás napadnout dát za sebe několik divů jako tlačítka, to už je trochu lepší, ale pořád nesémantické.

Zkusme se sami sebe zeptat: "Co je to navigace?". **Navigace je seznam** několika odkazů na nejdůležitější podstránky webu. Z toho důvodu umístíme mezi tagy navigace seznam, který vytvoříme pomocí tagu `<ul>` a položek `<li>`. Navigace bude vypadat asi takto:

```
<nav>
    <ul>
        <li class="aktivni"><a href="index.html">Domů</a></li>
        <li><a href="omne.html">O mně</a></li>
        <li><a href="dovednosti.html">Dovednosti</a></li>
        <li><a href="reference.html">Reference</a></li>
        <li><a class="kontakt-tlacitko" href="kontakt.html">Kontakt</a></li>
    </ul>
</nav>
```


Všimněte si, že jsme první položce seznamu dali třídu `.aktivni`. U každé podstránky webu nastavíme tuto třídu té položce v menu, ve které se nyní nacházíme. Pro uživatele to bude přínosné, jelikož se bude na našem webu lépe orientovat. Položce "Kontakt" jsme přidali třídu `.kontakt-tlacitko` - jistě tedy podle logiky pojmenovávání tříd tušíte, že ji nakonec ostylujeme podobně jako naše referenční tlačítko, aby byl web trochu zajímavější a záložka s kontakty nešla přehlédnout. ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Nové HTML soubory, na které se v elementech `<a>` odkazujeme, si vytvoříme později.

Když si nyní stránku zobrazíme v prohlížeči, bude poněkud nevzhledná, jelikož jsme na hlavičku ještě neaplikovali žádný styl:

Moje první webová stránka

index.html

Ke stylování se dostaneme příště, uvidíte, jak je CSS mocné.

Patička
-------

Přidejme si nyní na konec `<body>` i patičku. Podobně jako existuje tag `<header>`, existuje i tag `<footer>`, který slouží k označení patičky. Může se jednat o patičku článku nebo o patičku celého `<body>`. Na konec `<body>` si tedy vložme tag `<footer>`:

```
<footer>

</footer>
```


Do patičky stránky patří informace o copyrightu, rok vytvoření a kdo web vytvořil. U větších webů bývá zvykem do patičky umisťovat navigaci, i když osobně mi to přijde zmatečné. Umístěme do ní následující kód:

```
Vytvořil &copy;HoBi 2021 pro <a href="https://itnetwork.cz">itnetwork.cz</a>
```


Sekvence `&copy;` označuje speciální znak **©**. Tyto znaky vkládáme pomocí tzv. HTML entit.

HTML entity
-----------

Možná vás již napadlo, co budete dělat, až budete potřebovat do textu vaší stránky zapsat nějaký ze znaků, které využívá jazyk HTML. Jsou to zejména znaky `<`, `>`, `"` a `&`. Ačkoli se pravděpodobně nic nestane, když znak v textu použijete, bude vaše stránka nevalidní. Prohlížeče s některými chybami v HTML kódu počítají, nicméně to není důvodem k tomu, abychom je dělali a už vůbec se nedá spolehnout na to, že nám to vždy projde.

Tento kód je tedy špatně:

```

<p>Tvrdil, že a > b, ale to nebyla pravda.</p>
```


Problém je samozřejmě v tom, že tyto znaky (zde většítko `>`) zmatou prohlížeč, který si myslí, že otevíráme nějaký HTML tag. Z tohoto důvodu několik znaků zapisujeme pomocí tzv. **HTML entit**.

Pro napsání komentáře je v ukázce použit speciální tag `<!-- -->`. Komentáře slouží pouze pro poznámky vývojáře, prohlížeči jsou ignorovány.

Nejdůležitější entity jsou tyto:


|Znak|Číslo entity|Název entity|Popis              |
|----|------------|------------|-------------------|
|    |&#160;      |&nbsp;      |Nedělitelná mezera |
|"   |&#34;       |&quot;      |Uvozovka           |
|'   |&#39;       |&apos;      |Apostrof           |
|&   |&#38;       |&amp;       |Ampersand          |
|<   |&#60;       |&lt;        |Menšítko           |
|>   |&#62;       |&gt;        |Většítko           |
|€   |&#8364;     |&euro;      |Euro               |
|©   |&#169;      |&copy;      |Copyright          |
|®   |&#174;      |&reg;       |Registrovaná známka|
|™   |&#8482;     |&trade;     |Ochranná známka    |


Pomocí entit lze zapsat úplně všechny znaky. **Je nutné je používat k vložení znaků, které jsou rezervované pro jazyk HTML.** Můžeme je použít i k vložení znaků, které se na klávesnici špatně píší (např. copyright). Entitu můžeme zapsat buď pomocí názvu nebo pomocí kódu (název se preferuje kvůli lepší čitelnosti).

_Když dáme za sebe několik nedělitelných mezer `nbsp;`, prohlížeč z nich neudělá jednu jako u mezery normální, ale ponechá všechny. Začátečníci, kteří neznají `margin` a `padding`, takto odsazují elementy, což je naprosto špatně a proto se tomu vyhněte._

Využití nedělitelné mezery je např. v textu za předložkami a spojkami, kdy nechceme, aby se mezera zalomila a znak zůstal na samostatném řádku.

Opravme si ukázku výše, aby byla validní:

```
<p>Tvrdil, že a &gt; b, ale to nebyla pravda.</p>
```


K tématu validity se ještě vrátíme na konci kurzu, každopádně bychom se o ni měli snažit a kdo vám bude říkat opak, tak HTML a CSS nerozumí.

### Vložení zdrojových kódů

Pomocí HTML entit se na stránky vkládají např. zdrojové kódy HTML, kdy chceme, aby se tagy pouze zobrazily, ale neaplikovaly:

```
<pre>
<code>
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Titulek&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        Tělo
    &lt;/body&gt;
&lt;/html&gt;
</code>
</pre>
```


Takto jsou do stránky vloženy i kódy v této lekci, využití je tedy např. pro výukové materiály. Všimněte si tagu `<code>`, který slouží pro označení oblasti se zdrojovým kódem. Dále tu máme tag `<pre>`. Používá se v případě, kdy chceme zobrazit předformátovaný text tak, jak jsme ho zapsali. Tedy aby prohlížeč neumazal naše mezery, tabulátory a konce řádků. Takový text se vypíše přesně jak je zapsaný a neproporcionálním písmem.

Výsledek:

K převedení HTML kódu nebo jiného textu na entity můžete použít [Online převodník speciálních HTML znaků na entity a zpět](https://www.itnetwork.cz/html-css/webove-nastroje/html-prevod-specialnich-znaku-na-entity-a-zpet).

Dnešní práce je jako vždy ke stažení v příloze.

V další lekci, [Stylování hlavičky HTML stránky a flexbox](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-hlavicky) , ostylujeme hlavičku a ukážeme si flexbox.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51ade9c6a1135)

# Lekce 17 - Stylování hlavičky HTML stránky a flexbox 
V minulé lekci, [Navigační menu, patička a HTML entity](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-navigacni-menu-paticka-entity), jsme si připravili HTML kód hlavičky a patičky.

Dnes si v **HTML/CSS tutoriálu** ostylujeme **hlavičku** a **patičku stránky**. Ukážeme si také **přeskládání položek elementu** pomocí **flexboxu**.

Připomeňme si na začátek, jakého výsledku vlastně chceme dosáhnout:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/final_web_view.png)

Hlavička
--------

Pusťme se nejprve do stylování hlavičky. Do našeho CSS souboru si vložíme nový selektor, který postupně naplníme vlastnostmi. Začneme těmi, které již dobře známe:

```
body > header {
    height: 100px;
    width: 100%;
    background: #00386B;
    color: white;
}
```


Pomocí `height` a `width` hlavičce nastavujeme výšku na `100px` a šířku na `100%` šířky elementu, ve kterém je obsažena. Hlavičku tak budeme mít roztaženou přes celou stránku. Vlastnostmi `background` a `color` dáváme barvu pozadí a písmu.

### Flexbox

Pro uspořádání hlavičky se naučíme využívat **Flexbox** (_Flexible Box_). Jedná se o **jednorozměrnou "přepravku", která nám umožňuje skládat položky nějakého elementu za sebe**. Jednorozměrná zde znamená, že se řeší rozložení pouze v jednom směru - buď do řádku, nebo do sloupce.

Flexbox nám kromě směru skládání položek umožňuje navíc snadno nastavit, v jakém pořadí se mají položky skládat, kolik místa mají jednotlivé položky zabírat, jaké mají mít mezi sebou mezery a mnohé další.

Abychom tedy mohli umístit elementy v hlavičce (logo a navigační menu) vedle sebe, tak přidáme vlastnost `display` s hodnotou `flex`. Z hlavičky se tak stane právě _flexbox_:

```
body > header {
    height: 100px;
    width: 100%;
    background: #00386B;
    color: white;
    display: flex;
}
```


Díky tomu, že je nyní hlavička _flexboxem_, tak jí můžeme nastavit vlastnost `justify-content`. Tato vlastnost definuje, jak velký je prostor mezi a kolem položek. V našem případě bude řešit prostor napravo a nalevo od každé položky _flexboxu_, jelikož my máme nastavený směr našeho _flexboxu_ na řádky (výchozí hodnota).

Této vlastnosti můžeme nastavit vcelku hodně hodnot. My využijeme hodnotu `space-evenly`, která zajistí, že každá položka bude mít kolem sebe stejně prostoru:

```
body > header {
    height: 100px;
    width: 100%;
    background: #00386B;
    color: white;
    display: flex;
    justify-content: space-evenly;
}
```


O dalších hodnotách se dočtete v CSS3 kurzu, v lekci [Pozice prvku v CSS3](https://www.itnetwork.cz/html-css/css3/zaklady/pozice-prvku-v-css3).

Protože `<body>` má ve výchozím stavu nastavený `margin`, tak by se nám hlavička zobrazila odsazená od okraje stránky, což by nevypadalo pěkně. Proto mu v našem existujícím selektoru `body` nastavíme `margin` na `0`:

```
body {
    font: 14px "Poppins";
    background: #f9f9f9;
    color: #414042;
    box-sizing: border-box;
    margin: 0;
}
```


### Logo

Logo jsme vložili do HTML jako `<div>`, což je pro zopakování **element určený pouze ke stylování** a nemající žádný další význam. V logu máme pouze elementy s textem. Rádi bychom v něm však ještě měli jednoduchý obrázek. To zařídíme pomocí CSS, konkrétně tak, že jej umístíme na pozadí daného elementu `<div>`. Je to alternativa k vložení loga přes obrázek pomocí HTML tagu `<img>`. Výhodou je, že se s obrázkem lépe pracuje a lépe se pozicuje, když je na pozadí. Do obsahu článku (pro vložené ilustrační fotografie apod.) se tento přístup příliš nehodí, v rozvržení je naopak užitečný.

Jako obrázek loga použijeme tento:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/logo.png)

Obrázek si stáhněte z článku pomocí pravého tlačítka myši a uložte do naší složky `obrazky/` pod názvem `logo.png`.

Nabízí se i použití nějaké pěkné ikony, kde je hledat již víte.

Pro nastylování tagu `<div>` loga si do našeho CSS souboru napíšeme nový ID selektor. Začneme nastavením výšky a vnějšího okraje `margin`:

```
#logo {
    height: 40px;
    margin: auto 0 auto 20px;
}
```


Výšku loga jsme nastavili na `40` pixelů. Vnější okraj jsme pak nastavili shora a zespodu na automatický (`auto`), díky čemuž se hodnota automaticky dopočítá a logo se vertikálně vycentruje v dostupném prostoru, zprava na `0` a zleva na `20` pixelů.

Dále z loga uděláme _flexbox_, který bude skládat elementy do sloupce (`flex-direction: column`). Děláme tak proto, abychom mohli **jeho obsah** vertikálně (ve směru sloupce) vycentrovat pomocí dnes již zmiňované vlastnosti `justify-content` s hodnotou `center`:

```
#logo {
    height: 40px;
    margin: auto 0 auto 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
```


Naučili jsme se tedy další způsob, jak centrovat obsah, tentokrát svisle ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

#### Obrázek v pozadí

Nyní si již přidáme do pozadí loga stažený obrázek. Velikost obrázku nastavíme na 40x40 pixelů a zařídíme, aby se v pozadí neopakoval. Ve výchozím chování se totiž obrázek opakuje tak, aby vyplnil celou dostupnou plochu:

```
#logo {
    height: 40px;
    margin: auto 0 auto 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: url('obrazky/logo.png') no-repeat;
    background-size: 40px 40px;
}
```


Používáme zde nám již známou vlastnost `background`, která je v tomto případě zkratkou za vlastnosti:

*   `background-image` - slouží k nastavení obrázku v pozadí. Adresu obrázku jí předáme pomocí funkce `url()`.
*   `background-repeat` - určuje, jestli se má obrázek opakovat, případně jak. My nastavujeme hodnotu `no-repeat`, aby se neopakoval. O dalších hodnotách se dočtete v CSS3 kurzu, v lekci [Pozadí elementů: velikost, pozice a přichycení v CSS3](https://www.itnetwork.cz/html-css/css3/pokrocile-vlastnosti-a-animace/pozadi-elementu-velikost-pozice-a-prichyceni-v-css-3/).

Dále zde pak ještě máme novou vlastnost `background-size`, kterou určujeme velikost obrázku v pozadí.

Kdybychom si nyní web zobrazili, tak by se nám text i obrázky překrývaly. Takové chování však nechceme, proto všem elementům v logu nastavíme vnější okraj zleva na `50px`. Napíšeme si nový selektor, kterým vybereme všechny přímé potomky elementu s ID `logo`. Všechny elementy jakéhokoliv typu vybíráme pomocí hvězdičky `*`:

```
#logo > * {
    margin: 0 0 0 50px;
}
```


#### Stylování elementů loga

Ostylujeme také nadpis `<h1>`, konkrétně tloušťku písma, velikost písma a výšku řádku:

```
#logo h1 {
    font-weight: normal;
    font-size: 1.5em;
    line-height: 1.2em;
    color: white;
}
```


Dále si ostylujeme obsah nesémantického tagu `<span>`, který slouží pouze ke stylování. Chceme zvýraznit příjmení Bittner, proto mu nastavíme tučný font a vypíšeme jej velkými písmeny:

```
#logo h1 span {
    font-weight: bold;
    text-transform: uppercase;
}
```


Nakonec ještě nastavíme velikost písma i tagu `<small>`:

```
#logo small {
    text-transform: uppercase;
    font-size: 0.85em;
}
```


Takhle nyní bude vypadat naše logo a navigace:

Moje první webová stránka

index.html

Příloha našeho rozpracovaného webu je opět připojena pod článkem.

V další lekci, [Stylování navigačního menu pomocí flexboxu](https://www.itnetwork.cz/html-css/webove-stranky/stylovani-navigacniho-menu-pomoci-flexboxu), nastylujeme navigačním menu.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51af353338cfb)

# Lekce 18 - Stylování navigačního menu pomocí flexboxu
V minulé lekci, [Stylování hlavičky HTML stránky a flexbox](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-hlavicky) , jsme ostylovali hlavičku a ukázali si flexbox.

Dnes se budeme v **HTML/CSS tutoriálu** věnovat **stylování naše navigačního menu**. Ukážeme si, jak mu změnit **uspořádání položek** tak, aby byly vedle sebe s mezerami a byly **dobře čitelné**. Přidáme i **změnu vzhledu položek po najetí myší**.

Nejprve seznamu v navigaci **změníme odrážky**. Dělá se to CSS vlastností `list-style-type`, k výběru máme následující hodnoty:

*   `circle` - kruhové,
*   `decimal` - číslované,
*   `decimal-leading-zero` - číslované na 2 místa (před čísla menší než 10 přidá nulu),
*   `disc` (výchozí) - vyplněný kruh,
*   `lower-alpha` - malá písmena latinské abecedy,
*   `lower-greek` - malá písmena řecké abecedy,
*   `lower-latin` - malá písmena latinské abecedy,
*   `lower-roman` - římské číslice malými písmeny,
*   `none` - bez odrážek,
*   `square` - čtvercové,
*   `upper-alpha` - velká písmena latinské abecedy,
*   `upper-greek` - velká písmena řecké abecedy,
*   `upper-latin` - velká písmena latinské abecedy,
*   `upper-roman` - římské číslice velkými písmeny,
*   `inherit` - zdědí typ odrážek od rodičovského elementu.

Jak různé typy vypadají máme ukázáno v CSS3 kurzu, v lekci [Seznamy v CSS3](https://www.itnetwork.cz/html-css/css3/zaklady/seznamy-v-css3). Nás bude nyní zajímat hodnota `none`, která **odrážky vypne**.

Nastavíme tedy tento styl danému seznamu a zároveň mu **vypneme vnější okraje** (tím zmizí volné místo nahoře). Dále si ze seznamu uděláme _flexbox_, aby se nám prvky menu zobrazovaly vedle sebe, což již dobře známe:

```
nav ul {
    margin: 0;
    list-style-type: none;
    display: flex;
}
```


Výsledek pak vypadá takto:

Moje první webová stránka

index.html

### Vycentrování pomocí flexboxu

Položky seznamu budeme chtít mít **vertikálně vycentrované**. Ukážeme si nový způsob, jak toho dosáhnout pomocí _flexboxu_. Již víme, že pomocí vlastnosti `justify-content` definujeme, jak velký je prostor mezi a kolem položek obsahu podél směru _flexboxu_. Řešíme pomocí ní tedy umístění položek ve směru _flexboxu_ (pro nás nyní v řádku). Existuje však i vlastnost pro definici umístění ve druhém směru, a to vlastnost `align-items`. Této vlastnosti můžeme opět nastavit mnoho hodnot, my použijeme hodnotu `center` pro vycentrování položek:

```
nav ul {
    margin: 0;
    list-style-type: none;
    display: flex;
    align-items: center;
    height: 100%;
}
```


Zároveň jsme ještě seznam roztáhli přes celou výšku navigačního menu (`height: 100%`), aby jeho položky byly opravdu ve středu menu:

Moje první webová stránka

index.html

Zbývá nějak **domluvit položkám seznamu, aby vedle sebe vypadaly lépe**. Přidáme jim proto nějaké **odsazení** pomocí `padding` a `margin`, **změníme velikost fontu a výšku řádku**:

```
nav ul li {
    padding: 0 25px;
    margin: 0 5px;
    font-size: 1em;
    line-height: 4.3em;
}
```


**Odkazy** nebudeme chtít modré, ale **bílé**. Obarvit je není nic těžkého. Jak vypnout podtržení a vypsat je velkými písmeny již také víme:

```
nav ul a {
    color: white;
    padding: 8px 0;
    text-decoration: none;
    text-transform: uppercase;
}
```


### Akce položky po najetí myší - `hover`

Zbývá jen **nastavit podtržení aktivní položce** (položce stránky, na které se aktuálně vyskytujeme) a položce, na kterou najedeme myší. Styl budou mít stejný, proto si pro ně napíšeme pouze jeden selektor. Využijeme zde parametru (pseudoselektoru) `:hover`, **který spouští akci po najetí myší** na prvek na stránce. Aktivní položku vybereme pomocí třídy `aktivni`:

```
nav ul a:hover, .aktivni a {
    border-bottom: 2px solid #EF6534;
}
```


Výsledek vypadá takto:

Moje první webová stránka

index.html

Projekt pro kontrolu naleznete jako vždy ke stažení v příloze.

V následujícím cvičení, [Řešené úlohy k 16.-18. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-entity-a-seznamy), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64d24700249d6)

# Řešené úlohy k 16.-18. lekci HTML a CSS
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Řešené úlohy k 16.-18. lekci HTML a CSS

V minulé lekci, [Stylování navigačního menu pomocí flexboxu](https://www.itnetwork.cz/html-css/webove-stranky/stylovani-navigacniho-menu-pomoci-flexboxu), jsme nastylovali navigačním menu.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Pomocí tagů

# Lekce 19 - Fixní menu a pozicování v CSS
V předešlém cvičení, [Řešené úlohy k 16.-18. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-entity-a-seznamy), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Dnešní HTML/CSS tutoriál věnujeme stylování a dokončíme layout (rozložení) webu.

Kontaktní a referenční tlačítko
-------------------------------

Začneme tím, že si ostylujeme kontaktní a referenční tlačítko, která jsme si už v HTML kódu předpřipravili. Proč zvýraznit v navigačním menu podstránku s kontakty? Jednoduše proto, že uživateli (například zákazníkovi, zaměstnavateli...) chceme co nejvíc usnadnit možnost kontaktovat nás. Navrhuji tedy použít oranžovou barvu, která je příjemně výrazná a nepřehlédnutelná:

```
.kontakt-tlacitko {
    background: #EF6534;
    padding: 10px 20px;
    border-radius: 20px;
}
```


Stylizace tohoto tlačítka je velice podobná našemu referenčnímu tlačítku, jen je o něco menší. Obě tlačítka nyní upravíme, pokud na ně uživatel najede myší (použijeme opět pseudoselektor `:hover`):

```
.kontakt-tlacitko:hover,
.reference-tlacitko:hover {
    filter: brightness(115%) contrast(85%);
    border: 0;
}
```


Pomocí vlastnosti `filter` za použití funkcí `brightness()` (světlost) a `contrast()` (kontrast) zesvětlujeme oblast tlačítka po najetí myší. Nastavením vlastnosti `border` na hodnotu `0` zabraňujeme podtrhávání textu "Kontakt" v horním menu.

Naše stránka vypadá nyní takto:

Moje první webová stránka

index.html

Patička
-------

Nyní se vrhneme na stylování patičky.

### Pozadí `<html>`

Pokud bude mít někdo velký monitor nebo si otevře nějakou podstránku, kde je málo obsahu, bude okno prohlížeče vyšší, než je naše stránka. Pod stránkou se pak vykreslí prázdné bílé místo. Toho se zbavíme buď tak, že stránku roztáhneme (což by vyžadovalo další použití flexboxu) nebo jen jednoduše nastavíme celé stránce šedé pozadí. Tak konec stránky splyne s patičkou, kterou vytváříme. Na obrázku níže je znázorněno bílé místo pod stránkou, které se obarvilo na barvu patičky a vypadá to, jako by tam patička pokračovala:

![Prodloužení patičky webu v HTML a CSS - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/prodlouzeni_paticky.png)

Elementu `<html>` tedy nastavíme stejně tmavé pozadí, jako má patička. Do _styl.css_ tedy přidáme:

```
html {
    background: #414042;
}
```


Jinak zde kolem patičky není moc co vymýšlet. Nastavíme výšku na `100px`, `padding`, barvu textu, pozadí a ve vlastnosti `box-sizing` zvolíme hodnotu `border-box`, aby byla výška patičky opravdu oněch `100px` i po přidání `padding`:

```
footer {
    box-sizing: border-box;
    text-align: center;
    height: 100px;
    color: white;
    background: #414042;
    padding: 50px 0 0 0;
    clip-path: polygon(0 30px, 100% 0, 100% 105%, 0 105%);
}
```


Nejzajímavější je pravděpodobně použití vlastnosti `clip-path` s funkcí `polygon()` (mnohoúhelník). Tato vlastnost ořízne obsah elementu podle předaného tvaru. My jako tvar používáme mnohoúhelník vytvořený zmiňovanou funkcí `polygon()`, která bere souřadnice tří a více bodů mnohoúhelníku. Tyto souřadnice jsou relativní k danému elementu, tedy bod `0 0` se nachází v levém horním rohu elementu a bod `100% 100%` v pravém dolním rohu. Mohli bychom použít třeba i elipsu `ellipse()` nebo kruh `circle()`, to by však k našemu designu nepasovalo.

Hodnota 105 % (místo očekávatelných 100 %) u `clip-path` je zde proto, že Chrome při zoomování stránky občas vykreslí clip-path o 1px menší a patička pak přesně nedoléhá k pozadí.

Podobně jako odkaz v hlavičce nastylujeme i odkaz v patičce:

```
footer a {
    color: white;
    text-decoration: none;
}
```


To bylo jednoduché, že? Výsledek:

Moje první webová stránka

index.html

Hlavička s navigačním menu se skvěle hodí k tomu, abychom na ni aplikovali zajímavou vlastnost - **fixní pozici**. Hlavičku pomocí ní zafixujeme na horní hraně okna stránky, takže když se bude rolovat dolů, hlavička bude stále vidět. To je důležité pro možnost orientovat se rychle na webu bez nutnosti pořád rolovat. U dlouhých článků by to pro uživatele mohlo být zbytečně zdlouhavé.

Pozici určitému elementu nastavujeme pomocí CSS vlastnosti `position`. V HTML máme 4 typy pozic:

### Statická pozice (`static`)

Všechny elementy v HTML mají jako výchozí statickou pozici. Element je jednoduše zobrazen na té pozici, na které je definován a to s ohledem na ostatní elementy na stránce. Všechny naše elementy mají nyní fixní pozici, jednoduše řečeno zobrazují se tam, kde mají ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

### Relativní pozice (`relative`)

Pokud nastavíme elementu relativní pozici, můžeme mu v CSS definovat vlastnosti `left`, `right`, `top` a `bottom`. Zde můžeme pomocí pixelů nebo procent nastavit, o kolik má být element posunutý oproti své originální pozici. Pokud elementu např. nastavíme levou pozici na `20px`, zobrazí se `20px` napravo od svého původního místa.

Pokud je vpravo od tohoto elementu jiný element, tak se tento jiný element neposune, ale bude elementem zleva _překryt_. Který element bude na popředí můžeme nastavit pomocí vlastnosti `z-index`. Elementy výše mají vyšší číselné hodnoty (např. `z-index: 20;`), elementy níže nižší.

### Absolutní pozice (`absolute`)

Absolutní pozice zobrazí element na daných souřadnicích bez ohledu na jeho originální pozici v HTML obsahu. Pokud tedy nastavíme elementu `left` na `20px`, zobrazí se element `20px` od levého okraje okna. Pokud jsou pod ním jiné elementy, překryje je.

### Fixní pozice (`fixed`)

Fixní pozice funguje podobně, jako pozice absolutní, ale souřadnice se počítají v oblasti, která je vidět. Rolování scrollbarem tedy nemá na takové prvky vliv, zůstávají na svém místě, i když se ostatní obsah posouvá.

Právě tuto pozici použijeme pro naši hlavičku. Přesuneme se k našemu selektoru `body > header`, ve kterém přidáme vlastnost `position` s hodnotou `fixed`:

```
body > header {
    height: 100px;
    width: 100%;
    background: #00386B;
    color: white;
    display: flex;
    justify-content: space-evenly;
    position: fixed;
    z-index: 1;
    top: 0;
}
```


Hlavičce jsme taktéž nastavili `z-index` na hodnotu `1`, díky čemuž se hlavička bude zobrazovat nad všemi ostatními elementy. Pokud bychom `z-index` nestanovili, překrýval by nám v tomto případě hlavičku náš obrázek. Dále jsme pak přidali i vlastnost `top` s hodnotou `0`, aby se hlavička zobrazovala vždy na horní hraně okna stránky.

Menu zůstává na svém místě, i když stránkou rolujeme.

Pozicování používejte jen v případě, že víte, co děláte. Zpravidla se používá jen velmi zřídka a je velkou chybou sestavovat web zadáváním desítek absolutních souřadnic.

Tímto jsme náš web v podstatě dokončili. Pojďme si však ještě probrat a osvětlit některé aspekty stylování, které jsme v předchozích lekcích pouze nakousli.

Podpora různých rozlišení
-------------------------

Je samozřejmě dost nereálné, abychom vytvořili řešení na míru pro všechny typy zařízení, a tedy pro všechna možná rozlišení, která dnes existují. Náš první web však vyvíjíme primárně pro desktop. Klasické rozlišení monitoru je dnes `1024x768` a vyšší.

Tvorbě responzivních stránek, tedy těch, které se dokáží přizpůsobovat různým velikostem displejů, se věnuje kurz [Responzivní webdesign](https://www.itnetwork.cz/html-css/responzivni-webdesign).

Pokud bychom však nechali obsah článku, aby se roztáhnul přes celou šíři monitoru, uživatel by nám nejspíš nepoděkoval - a ani by to nevypadalo hezky. Většinou se proto doporučuje nastavit maximální šířku na `960px` a obsah vycentrovat. My jsme tak již učinili, když jsme elementu `<article>` v CSS nastavili toto:

```
article {
    margin: 0 auto;
    max-width: 960px;
    padding: 50px 50px 10px 50px;
}
```


Upravíme si ještě selektor `body`, ve kterém tělu stránky `<body>` nastavíme:

*   `padding` na `100` pixelů seshora, aby nám hlavička nepřekrývala jeho obsah,
*   `min-width` na `960` pixelů, aby se nám stránka nedeformovala při přílišném zmenšení.

```
body {
    font: 14px "Poppins";
    background: #f9f9f9;
    color: #414042;
    box-sizing: border-box;
    margin: 0;
    padding: 100px 0px 0px 0px;
    min-width: 960px;
}
```


Takto vypadá po dnešních úpravách náš web:

Moje první webová stránka

index.html

Gratuluji vám, pokud jste se dostali sami až sem, máte jednak hotový layout a jednak umíte slušně HTML a CSS. Dnešní kód je jako vždy ke stažení v příloze.

V příští lekci, [Meta tagy, tvorba podstránek a kontaktní formulář](https://www.itnetwork.cz/html-css/webove-stranky/meta-tagy-tvorba-podstranek-a-kontaktni-formular), si představíme meta tagy a dokončíme jednotlivé podstránky našeho webu, abychom ho mohli nahrát na internet.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51b088d59a189)

# Lekce 20 - Meta tagy, tvorba podstránek a kontaktní formulář
V minulé lekci, [Fixní menu a pozicování v CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-fixni-menu), jsme dokončili layout, tedy rozvržení stránky.

V dnešním HTML/CSS tutoriálu začneme dokončovat jednotlivé podsekce našeho webu tak, aby byl připravený na nahrání na webhosting.

Prvně si představíme trochu blíže meta tagy a dokončíme kontaktní stránku. Podstránky _domů_, _dovednosti_ a _kontakt_ máme již rozpracované.

V hlavičce stránky nám chybí poslední věc. Až bude web online, všimnou si ho internetové vyhledávače a jeho podstránky si tzv. zaindexují. Zjednodušeně řečeno si uloží, co na nich je, aby je pak mohli zobrazovat mezi výsledky, když někdo něco hledá. To je pro nás velmi důležité, protože právě takhle se na náš web dostanou návštěvníci.

Do každé podstránky vložíme 2 informace pro vyhledávače pomocí tagu `<meta>`. První informací je krátký popisek toho, co je na stránce. Další je seznam několika klíčových slov, které opět souvisí s obsahem stránky. Tag `<meta>` již známe, používali jsme ho k určení kódování stránky. Ještě jednou zopakuji, že kód vkládáme do hlavičky `<head>`. Každá stránka má samozřejmě v popisu něco jiného, pro `index.html` by to mohlo vypadat takto:

```
<meta name="description" content="Osobní portfolio programátora HoBiho." />
<meta name="keywords" content="portfolio, programátor, HoBi" />
```


Tagu jsme nejprve nastavili jeho název atributem `name`, pro popisek `description` a pro klíčová slova `keywords`. Obsah jsme pak zadali do atributu `content`.

Když jsme u meta informací, můžeme vložit i údaje o tom, kdo stránku vytvořil:

```
<meta name="author" content="HoBi" />
```


### Ikona prohlížeče

V hlavičce zůstaňme ještě na poslední okamžik a nastavme našim webovým stránkám **favicon**. Jedná se o tu **malou ikonku**, která se zobrazí v záložce vašeho webového prohlížeče. Ikonku si můžeme stáhnout na [Iconfinder](https://www.iconfinder.com/), ve velikosti 16x16 pixelů ve formátu **ico**, a uložíme ji do složky `obrazky/`. Do hlavičky přidáme odkaz na ikonu:

```
<link rel="shortcut icon" href="obrazky/ikona.ico" />
```


Výsledek:

![Web s ikonou v záložce webového prohlížeče - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/web_ikona.png)

V některých verzích Google Chrome se ikona na lokálních stránkách nezobrazí.

V našem navigačním menu máme již připravené odkazy na podstránky. Nyní si je začneme postupně připravovat.

Vytvoření podstránek
--------------------

Asi si kladete otázku, jakým způsobem docílíme toho, aby se všechny podstránky na našem webu zobrazovaly v námi vytvořeném layoutu.

### Rámce

V minulosti se k tomuto účelu využívaly _rámce_ (tag `<frameset>`), které umožňovaly layout definovat pouze jednou a podstránky se zobrazovaly v rámcích. Tento způsob však představoval mnoho problémů zejména pro internetové vyhledávače, proto byly rámce **ve verzi HTML5 odstraněny a označeny za nevalidní**. V dnešní době je velkou chybou rámce používat.

### Tabulkový layout

Druhým způsobem, bohužel o nic šťastnějším, je použití tabulky k vytvoření layoutu. Tabulka má totiž ve vykreslování buněk mírné odlišnosti a umožňuje vložení řádkového rámu (`<iframe>`) tak, aby se jeho výška přizpůsobovala výšce okna. Do rámu je následně možné zobrazovat danou podstránku webu. **Použití tabulky je však v layoutu velmi nesprávné a nesémantické**, protože tabulka slouží pro označení tabulky, nikoli celé stránky. Navíc dochází opět k problémům s rámcem ve vyhledávačích.

Těmito problémy je konkrétně to, že celé stránky běží na jedné URL s rámem. Na podstránky se nelze podle adresy odkazovat a pokud ano, zobrazí se ve špatné šířce a bez layoutu. S rámy tedy nemůžeme někomu říci: podívej se na mé dovednosti, tady je odkaz: [http://adresa.cz/dovednosti.html](http://adresa.cz/dovednosti.html). Musíme mu říci: jdi na adresa.cz a klikni na dovednosti. Asi si dokážete představit, že při větším počtu podstránek je to poněkud nepraktické. Rovněž vaše [SEO](https://www.itnetwork.cz/html-css/seo) (optimalizace webu pro vyhledávače) nebude nic moc.

### Serverový jazyk

**Správné řešení** je použití dalšího programovacího jazyka, který běží na straně serveru a který nám obsah článku do podstránek sám vkládá. Nebo naopak do podstránek vkládá layout. Takovým jazykem je např. velmi používané _PHP_, na které však zatím nemáme zkušenosti. Můžete si o něm přečíst v [příslušné sekci](https://www.itnetwork.cz/php) až web dokončíme, ale nyní na něj ještě není ten pravý čas.

Důvodem vysvětlení této teorie jsou zastaralé tutoriály na internetu, které učí nováčky používat rámce nebo tabulky pro layout. Nyní víte, že se to už pár let nedělá ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

### Kopírování

Asi jste si všimli, že ani jeden z výše zmíněných způsobů zatím nekoresponduje s layoutem, který jsme si vytvořili. Naše řešení bude prosté, layout jednoduše nakopírujeme pro každou podstránku. Každá stránka našeho webu tedy v sobě bude mít ten samý layout, ale v něm jiný obsah. Kopírování layoutu do více souborů je poněkud nepraktické, ale zatím je to pro nás nejschůdnější cesta, která je validní a na podstránky se lze odkazovat.

Již víme, že `index.html` se jmenuje stránka, která se zobrazí ve chvíli, když na web přijdeme. Tedy stránka, **domovská neboli úvodní**.

Podstránky
----------

Pojďme tedy upravit stávající podstránky webu tak, aby obsahovaly layout. Začněme stránkou kontaktní.

### Kontakt

Stránku `kontakt.html` přepíšeme tak, aby v ní byl náš layout a uvnitř `<section>` v jednom odstavci poupravený obsah původní stránky `kontakt.html`:

```
<!DOCTYPE html>
<html lang="cs-cz">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Kontakt na programátora HoBiho, programování na zakázku." />
    <meta name="keywords" content="kontakt, programátor, HoBi, zakázka, programování" />
    <meta name="author" content="HoBi" />
    <link rel="shortcut icon" href="obrazky/ikona.ico" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Kontaktujte mě</title>
</head>

<body>
    <header>
        <div id="logo"><h1>Honza<span>Bittner</span></h1><small>webdeveloper</small></div>
        <nav>
            <ul>
                <li><a href="index.html">Domů</a></li>
                <li><a href="omne.html">O mně</a></li>
                <li><a href="dovednosti.html">Dovednosti</a></li>
                <li><a href="reference.html">Reference</a></li>
                <li class="aktivni"><a class="kontakt-tlacitko" href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <article>
            <header>
                <h1>Kontakt</h1>
            </header>

            <section>
                <p>
                    <img src="obrazky/email.png" alt="email" class="vlevo" />
                    Pokud mi chcete něco sdělit, napište mi email na <strong>hobi (zavináč) hobi (tečka) cz nebo využijte formuláře níže</strong>.
                </p>
            </section>
            <div class="cistic"></div>
    </article>

    <footer>
        Vytvořil &copy;HoBi 2021 pro <a href="https://itnetwork.cz">itnetwork.cz</a>
    </footer>
</body>
</html>
```


Změnili jsme titulek v hlavičce stránky, nadpis v hlavičce článku a nastavili třídu `aktivni` položce _Kontakt_ v menu.

Obrázku uvnitř článku jsme ještě přidali třídu `vlevo` pro jeho zarovnání nalevo od textu. Tohoto chování dosáhneme pomocí vlastnosti `float`, čímž z obrázku uděláme plovoucí obsah. K "vyčištění" `float` používáme `<div>` se třídou `cistic`. To již známe z lekce [Stylování hlavičky HTML stránky a flexbox](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-hlavicky).

Připišme si tedy do CSS souboru nový selektor:

```
.vlevo {
    float: left;
}
```


#### Kontaktní formulář

Pro registrované členy nabízí ITnetwork jednoduchý kontaktní formulář, který si můžete umístit na své stránky. Formulář funguje tak, že do něj návštěvník zadá zprávu a on vám ji odešle na email. Službu najdete v sekci [služby](https://www.itnetwork.cz/html-css/webove-nastroje) pod názvem **MailForm**. Jistě se na vaše nové stránky bude hodit.

**Vytvořte si vlastní MailForm** pomocí odkazu výše, aby vám zprávy chodily **na email, který máte vyplněný v profilu**. Nekopírujte kód MailFormu z řešení k této lekci, je to pouze ukázka vložení a zpráva tak nepřijde na váš email!

Po vytvoření formuláře získáme kód, který si vložíme do našeho HTML souboru `kontakt.html` na konec elementu `<section>`:

```
<section>
    <p>
        <img src="obrazky/email.png" alt="email" class="vlevo" />
        Pokud mi chcete něco sdělit, napište mi email na <strong>hobi (zavináč) hobi (tečka) cz nebo využijte formuláře níže</strong>.
    </p>
    <p class="centrovany">
        <iframe frameborder="0" scrolling="no" width="500px" height="220px"
            src="http://www.itnetwork.cz/service/mail_form.php?hash=kod-vaseho-mailformu">
        </iframe>
    </p>
</section>
```


Všimněte si použití naší třídy `centrovany` k vycentrování rámce se službou. Tag `<iframe>` je pro nás nový, umožňuje do stránky vložit rámec s jinou podstránkou. Důležitý je zejména atribut `src`, kam umisťujeme adresu podstránky. Tag `<iframe>` (jako **i**nline **frame** - řádkový rámec) není na rozdíl od elementů `<frameset>` a `<frame>` nevalidní a můžeme ho používat.

Za výsledek se určitě nemusíme stydět:

Kontaktujte mě

kontakt.html

Web v aktuálním stádiu naleznete jako vždy ke stažení v příloze.

V příští lekci, [Stylování tabulek v HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-tabulek-a-galerie-fotek), upravíme sekci dovednosti a budeme stylovat tabulku.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51b331b2e5f27)

# Lekce 21 - Stylování tabulek v HTML a CSS
V minulé lekci, [Meta tagy, tvorba podstránek a kontaktní formulář](https://www.itnetwork.cz/html-css/webove-stranky/meta-tagy-tvorba-podstranek-a-kontaktni-formular), jsme si představili meta tagy a začali dokončovat jednotlivé podstránky.

Dnes v **HTML/CSS tutoriálu** upravíme sekci dovednosti a budeme **stylovat tabulku**.

Dovednosti
----------

Stránku **Dovednosti** již máme z části připravenou z prvních dílů seriálu. Opět ji upravíme tak, aby v ní byl vložený celý layout, jako jsme to již udělali se stránkou `kontakt.html`.

Hlavička `<head>` stránky `dovednosti.html` bude vypadat takto:

```
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Mé dovednosti, mezi které patří programování v Javě, Pascalu a HTML" />
    <meta name="keywords" content="programátor, hobi, dovednosti, java, html, pascal" />
    <meta name="author" content="HoBi" />
    <link rel="shortcut icon" href="obrazky/ikona.ico" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Dovednosti</title>
</head>
```


Dále na začátek elementu `<body>` přidáme `<header>` s logem a navigačním menu `<nav>`. V navigačním menu nezapomeneme přiřadit třídu `aktivni` tagu `<li>` s odkazem právě na `dovednosti.html`:

```
<header>
    <div id="logo">
        <h1>Honza<span>Bittner</span></h1>
        <small>webdeveloper</small>
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Domů</a></li>
            <li><a href="omne.html">O mně</a></li>
            <li class="aktivni"><a href="dovednosti.html">Dovednosti</a></li>
            <li><a href="reference.html">Reference</a></li>
            <li><a class="kontakt-tlacitko" href="kontakt.html">Kontakt</a></li>
        </ul>
    </nav>
</header>
```


Pod výše přidaný `<header>` vložíme článek `<article>`, jehož hlavním obsahem bude naše již vytvořená tabulka s dovednostmi. Tuto tabulku tedy převedeme do tagu `<section>` a článku ještě nastavíme nadpis `<header>`:

```
<article>
        <header>
            <h1>Dovednosti</h1>
        </header>

        <section>
            <table>
                <tr>
                    <td>
                        <img src="obrazky/html.png" alt="HTML" />
                    </td>
                    <td>
                        <img src="obrazky/java.png" alt="Java" />
                    </td>
                    <td>
                        <img src="obrazky/pascal.png" alt="Pascal" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>HTML</h2>
                        <p>S HTML začínám a umím vytvořit jednoduché webové stránky, jako jsou tyto.</p>
                    </td>
                    <td>
                        <h2>Java</h2>
                        <p>Javu se učím z tutoriálů na itnetwork.cz, dokáži tvořit jednoduché konzolové i okenní aplikace a programovat objektově.</p>
                    </td>
                    <td>
                        <h2>Pascal</h2>
                        <p>Pascal nás učí ve škole, ale raději se učím moderní jazyky z ITnetwork.</p>
                    </td>
                </tr>
            </table>
        </section>
</article>
```


Stránce na konec `<body>` ještě přidáme také `<footer>` stejně, jako ho již máme na stránkách předtím:

```
<footer>
    Vytvořil &copy;HoBi 2021 pro <a href="https://itnetwork.cz">itnetwork.cz</a>
</footer>
```


### Stylování tabulky

Protože již známe CSS trochu lépe, tabulku si ostylujeme. Jako první ji dáme nějaké ID, abychom ji mohli v CSS jednoznačně vybrat. Nabízí se `dovednosti`:

```
<table id="dovednosti">
```


Hlavním problémem je, že nemáme sloupce (buňky) stejně široké. Že to tak vypadá je jen náhoda, jelikož text je ve všech buňkách podobně dlouhý. Připíšeme-li něco do jedné z buněk, buňky se rozšíří. Každé buňce proto nastavíme šířku na `33%` a nějaký `padding`.

Do CSS souboru si tedy přidáme nový selektor:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
}
```


Výsledek:

Dovednosti

dovednosti.html

Jak vidíte, obsah v buňce tabulky se ve výchozím nastavení centruje svisle. To se nám nehodí, protože bychom chtěli mít nadpisy ve stejné výšce, zarovnané shora. To nastavíme opět všem buňkám pomocí CSS vlastnosti `vertical-align` s hodnotou `top`:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
    vertical-align: top;
}
```


Naše stránka nyní vypadá takto:

Dovednosti

dovednosti.html

K zarovnání na střed použijeme hodnotu `middle`, k zarovnání dolů `bottom`. **Tato vlastnost funguje pouze u tabulek, v ostatních elementech se bohužel takto jednoduše centrovat nedá.** Opět narážíme na nechvalně proslulé centrování v CSS.

Neukazovali jsme si ještě, jak se styluje rámeček tabulky. Je to velmi podobné jako stylování rámečku ostatních elementů, avšak tabulka má rámeček dvojitý. Zkusme si opět v tom samém selektoru nastavit rámeček všech buněk na šedý, `1px` tlustý:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
    vertical-align: top;
    border: 1px solid gray;
}
```


Výsledek po nastavení rámečku vypadá takto:

Dovednosti

dovednosti.html

Vidíme, že to není úplně to, co bychom chtěli. Rámečky slijeme pomocí vlastnosti `border-collapse`, nastavené na hodnotu `collapse`. Tu však nenastavíme buňkám, ale celé tabulce:

```
#dovednosti {
    border-collapse: collapse;
}
```


Výsledek již vypadá dle očekávání:

Dovednosti

dovednosti.html

Poslední vadou na kráse naší tabulky jsou nevycentrované obrázky v prvním řádku. Budeme chtít vycentrovat obsah jen tohoto jednoho řádku a zbytek řádků nechat zarovnaný doleva (dlouhý vycentrovaný text je špatně čitelný). Možností je více, a tou nejjednodušší je dát řádku naši třídu `centrovany`:

```
...
<table id="dovednosti">
    <tr class="centrovany">
        ...
```


Dokončili jsme tedy další podstránku, celý její kód naleznete v příloze na konci článku.

### Úprava `index.html`

Aby stránka `index.html` souhlasila s požadovaným designem, tak si z jejího článku ještě odebereme odkaz na nově upravenou stránku s dovednostmi. Element `<section>` upravíme do následující podoby:

```
<section>
    <img src="obrazky/avatar.jpg" class="avatar" alt="Programátor HoBi" />
    <p>
        Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.
    </p>

    <p>
        Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.
        Kontaktovat mě můžete na <a href="kontakt.html">kontaktní stránce</a>.
    </p>

    <p>
        Rád čtu a někdy (hlavně v létě) i sportuju.
    </p>

    <p>
        Mým hlavním koníčkem (a doufám že jednou i zaměstnáním) je <strong>programování</strong>!
    </p>

    <p class="tlacitko-odstavec">
        <a href="reference.html" class="reference-tlacitko">Moje reference</a>
    </p>
    <div class="cistic"></div>
</section>
```


Naši dnešní práci najdete opět v příloze.

V příští lekci, [Galerie obrázků v HTML/CSS](https://www.itnetwork.cz/html-css/webove-stranky/galerie-obrazku-v-htmlcss), web dokončíme. Připravíme si poslední sekci referencí a vložíme do ní galerii. Ukážeme si doplněk Lightbox.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51b8a64859dee)

# Lekce 21 - Stylování tabulek v HTML a CSS
V minulé lekci, [Meta tagy, tvorba podstránek a kontaktní formulář](https://www.itnetwork.cz/html-css/webove-stranky/meta-tagy-tvorba-podstranek-a-kontaktni-formular), jsme si představili meta tagy a začali dokončovat jednotlivé podstránky.

Dnes v **HTML/CSS tutoriálu** upravíme sekci dovednosti a budeme **stylovat tabulku**.

Dovednosti
----------

Stránku **Dovednosti** již máme z části připravenou z prvních dílů seriálu. Opět ji upravíme tak, aby v ní byl vložený celý layout, jako jsme to již udělali se stránkou `kontakt.html`.

Hlavička `<head>` stránky `dovednosti.html` bude vypadat takto:

```
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Mé dovednosti, mezi které patří programování v Javě, Pascalu a HTML" />
    <meta name="keywords" content="programátor, hobi, dovednosti, java, html, pascal" />
    <meta name="author" content="HoBi" />
    <link rel="shortcut icon" href="obrazky/ikona.ico" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Dovednosti</title>
</head>
```


Dále na začátek elementu `<body>` přidáme `<header>` s logem a navigačním menu `<nav>`. V navigačním menu nezapomeneme přiřadit třídu `aktivni` tagu `<li>` s odkazem právě na `dovednosti.html`:

```
<header>
    <div id="logo">
        <h1>Honza<span>Bittner</span></h1>
        <small>webdeveloper</small>
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Domů</a></li>
            <li><a href="omne.html">O mně</a></li>
            <li class="aktivni"><a href="dovednosti.html">Dovednosti</a></li>
            <li><a href="reference.html">Reference</a></li>
            <li><a class="kontakt-tlacitko" href="kontakt.html">Kontakt</a></li>
        </ul>
    </nav>
</header>
```


Pod výše přidaný `<header>` vložíme článek `<article>`, jehož hlavním obsahem bude naše již vytvořená tabulka s dovednostmi. Tuto tabulku tedy převedeme do tagu `<section>` a článku ještě nastavíme nadpis `<header>`:

```
<article>
        <header>
            <h1>Dovednosti</h1>
        </header>

        <section>
            <table>
                <tr>
                    <td>
                        <img src="obrazky/html.png" alt="HTML" />
                    </td>
                    <td>
                        <img src="obrazky/java.png" alt="Java" />
                    </td>
                    <td>
                        <img src="obrazky/pascal.png" alt="Pascal" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <h2>HTML</h2>
                        <p>S HTML začínám a umím vytvořit jednoduché webové stránky, jako jsou tyto.</p>
                    </td>
                    <td>
                        <h2>Java</h2>
                        <p>Javu se učím z tutoriálů na itnetwork.cz, dokáži tvořit jednoduché konzolové i okenní aplikace a programovat objektově.</p>
                    </td>
                    <td>
                        <h2>Pascal</h2>
                        <p>Pascal nás učí ve škole, ale raději se učím moderní jazyky z ITnetwork.</p>
                    </td>
                </tr>
            </table>
        </section>
</article>
```


Stránce na konec `<body>` ještě přidáme také `<footer>` stejně, jako ho již máme na stránkách předtím:

```
<footer>
    Vytvořil &copy;HoBi 2021 pro <a href="https://itnetwork.cz">itnetwork.cz</a>
</footer>
```


### Stylování tabulky

Protože již známe CSS trochu lépe, tabulku si ostylujeme. Jako první ji dáme nějaké ID, abychom ji mohli v CSS jednoznačně vybrat. Nabízí se `dovednosti`:

```
<table id="dovednosti">
```


Hlavním problémem je, že nemáme sloupce (buňky) stejně široké. Že to tak vypadá je jen náhoda, jelikož text je ve všech buňkách podobně dlouhý. Připíšeme-li něco do jedné z buněk, buňky se rozšíří. Každé buňce proto nastavíme šířku na `33%` a nějaký `padding`.

Do CSS souboru si tedy přidáme nový selektor:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
}
```


Výsledek:

Dovednosti

dovednosti.html

Jak vidíte, obsah v buňce tabulky se ve výchozím nastavení centruje svisle. To se nám nehodí, protože bychom chtěli mít nadpisy ve stejné výšce, zarovnané shora. To nastavíme opět všem buňkám pomocí CSS vlastnosti `vertical-align` s hodnotou `top`:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
    vertical-align: top;
}
```


Naše stránka nyní vypadá takto:

Dovednosti

dovednosti.html

K zarovnání na střed použijeme hodnotu `middle`, k zarovnání dolů `bottom`. **Tato vlastnost funguje pouze u tabulek, v ostatních elementech se bohužel takto jednoduše centrovat nedá.** Opět narážíme na nechvalně proslulé centrování v CSS.

Neukazovali jsme si ještě, jak se styluje rámeček tabulky. Je to velmi podobné jako stylování rámečku ostatních elementů, avšak tabulka má rámeček dvojitý. Zkusme si opět v tom samém selektoru nastavit rámeček všech buněk na šedý, `1px` tlustý:

```
#dovednosti td {
    width: 33%;
    padding: 10px;
    vertical-align: top;
    border: 1px solid gray;
}
```


Výsledek po nastavení rámečku vypadá takto:

Dovednosti

dovednosti.html

Vidíme, že to není úplně to, co bychom chtěli. Rámečky slijeme pomocí vlastnosti `border-collapse`, nastavené na hodnotu `collapse`. Tu však nenastavíme buňkám, ale celé tabulce:

```
#dovednosti {
    border-collapse: collapse;
}
```


Výsledek již vypadá dle očekávání:

Dovednosti

dovednosti.html

Poslední vadou na kráse naší tabulky jsou nevycentrované obrázky v prvním řádku. Budeme chtít vycentrovat obsah jen tohoto jednoho řádku a zbytek řádků nechat zarovnaný doleva (dlouhý vycentrovaný text je špatně čitelný). Možností je více, a tou nejjednodušší je dát řádku naši třídu `centrovany`:

```
...
<table id="dovednosti">
    <tr class="centrovany">
        ...
```


Dokončili jsme tedy další podstránku, celý její kód naleznete v příloze na konci článku.

### Úprava `index.html`

Aby stránka `index.html` souhlasila s požadovaným designem, tak si z jejího článku ještě odebereme odkaz na nově upravenou stránku s dovednostmi. Element `<section>` upravíme do následující podoby:

```
<section>
    <img src="obrazky/avatar.jpg" class="avatar" alt="Programátor HoBi" />
    <p>
        Vítejte na mém prvním webu, psát weby se teprve učím, ale myslím, že mi to docela jde.
    </p>

    <p>
        Jmenuji se Honza Bittner a je mi 16 let. Chodím na Střední průmyslovou školu v České Lípě na obor IT.
        Kontaktovat mě můžete na <a href="kontakt.html">kontaktní stránce</a>.
    </p>

    <p>
        Rád čtu a někdy (hlavně v létě) i sportuju.
    </p>

    <p>
        Mým hlavním koníčkem (a doufám že jednou i zaměstnáním) je <strong>programování</strong>!
    </p>

    <p class="tlacitko-odstavec">
        <a href="reference.html" class="reference-tlacitko">Moje reference</a>
    </p>
    <div class="cistic"></div>
</section>
```


Naši dnešní práci najdete opět v příloze.

V příští lekci, [Galerie obrázků v HTML/CSS](https://www.itnetwork.cz/html-css/webove-stranky/galerie-obrazku-v-htmlcss), web dokončíme. Připravíme si poslední sekci referencí a vložíme do ní galerii. Ukážeme si doplněk Lightbox.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51b8a64859dee)

# Lekce 22 - Galerie obrázků v HTML/CSS
V minulé lekci, [Stylování tabulek v HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-tabulek-a-galerie-fotek), jsme upravili sekci dovednosti a naučili se stylovat tabulku.

Dnes v **HTML/CSS tutoriálu** web kompletně **dokončíme**. Přidáme sekci **reference** a naučíme se **stylovat galerii obrázků**. Ukážeme si použití webového doplňku **Lightbox**, který je napsaný v jazyce **JavaScript**.

Reference
---------

Na stránce s referencemi si **vytvoříme malou galerii obrázků** s aplikacemi a weby, které jste vytvořili. Galerie obrázků se vám určitě hodí nejen na obrázky vašich prací, ale třeba i na fotky a podobně. Já si půjčím obrázek tohoto webu a místní ukázkové aplikace v Javě a Pascalu. Použiji tedy tyto 3 obrázky:

Obrázky si uložíme do naší složky `/obrazky`.

### Galerie obrázků

Začněme tím, že si ke každému obrázku vytvoříme miniaturu. Bylo by velkou chybou zobrazovat náhledy jako velké obrázky, jelikož se dlouho stahují. Proto si ve svém oblíbeném grafickém editoru (GIMPu, [PhotoShopu](https://www.itnetwork.cz/photoshop), ...) zmenšete své obrázky, já jsem všem nastavil výšku na `128px` a k jejich názvu jsem připojil `_nahled`. Zmenšené obrázky opět uložme do složky `/obrazky`.

### Vytvoření podstránky `reference.html`

Vytvoříme si podstránku `reference.html` tak, jako všechny podstránky. Do hlavičky opět vložíme nějaké tagy s metadaty, odkaz na CSS soubor a definici ikony a titulku stránky:

```
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Aplikace od HoBiho." />
    <meta name="keywords" content="aplikace, programátor, HoBi, reference" />
    <meta name="author" content="HoBi" />
    <link rel="shortcut icon" href="obrazky/ikona.ico" />
    <link rel="stylesheet" href="styl.css" type="text/css" />
    <title>Reference</title>
</head>
```


V `<body>` budeme opět mít `<header>`, `<article>` a `<footer>`. Část `<header>` si nakopírujeme např. z `index.html` a nezapomeneme položce stránky, na které se vyskytujeme (_Reference_) přiřadit třídu `aktivni`:

```
<body>
    <header>
        <div id="logo"><h1>Honza<span>Bittner</span></h1><small>webdeveloper</small></div>
        <nav>
            <ul>
                <li><a href="index.html">Domů</a></li>
                <li><a href="omne.html">O mně</a></li>
                <li><a href="dovednosti.html">Dovednosti</a></li>
                <li class="aktivni"><a href="reference.html">Reference</a></li>
                <li><a class="kontakt-tlacitko" href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav>
    </header>

    <article>
    </article>

    <footer>
        Vytvořil &copy;HoBi 2021 pro <a href="https://itnetwork.cz">itnetwork.cz</a>
    </footer>
</body>
```


Část `<article>` bude mít taktéž stejnou strukturu jako zbylé stránky. Do `<header>` vložíme nadpis a do `<section>` hlavní obsah stránky:

```
<article>
        <header>
            <h1>Reference</h1>
        </header>

        <section>
            <p>Níže naleznete ukázky mých dosavadních prací. Mohu vám nabídnout tvorbu podobného softwaru na zakázku.</p>

            <div id="reference">
                <a href="obrazky/kalkulacka_java.png" title="Kalkulačka v Javě">
                    <img src="obrazky/kalkulacka_java_nahled.png" alt="Kalkulačka v Javě" />
                </a>
                <a href="obrazky/miny_pascal.png" title="Miny v Pascalu">
                    <img src="obrazky/miny_pascal_nahled.png" alt="Miny v Pascalu" />
                </a>
                <a href="obrazky/hobi_web.jpg" title="Web v HTML a CSS">
                    <img src="obrazky/hobi_web_nahled.jpg" alt="Web v HTML a CSS" />
                </a>
            </div>
        </section>
</article>
```


V kódu jsme si vytvořili `<div>`, ve kterém jsou poskládané za sebou jednotlivé náhledy. Každý náhled odkazuje na originální (velký) obrázek. U odkazu jsme nastavili atribut `title`, ten můžeme nastavit každému prvku v HTML. Jeho text se zobrazí jen tehdy, když na element najedeme kurzorem myši:

### Stylování galerie

Trochu naši galerii vylepšíme přes CSS. Určitě jste si všimli připraveného ID `reference`. Nastavíme obrázkům v galerii `border`, `padding`, `margin` a stín:

```
#reference img {
    border: 1px solid gray;
    padding: 6px;
    box-shadow: 3px 3px 6px #999999;
    margin-right: 6px;
}
```


Nic by nás zde nemělo překvapit. S těmito vlastnostmi jsem se již setkali.

Naše galerie nyní vypadá takto:

Pokud na náhled klikneme, zobrazí se velký obrázek. Efekt je ale poněkud ošklivý, celá stránka zmizí a obrázek je nevzhledně umístěn v levém horním rohu, na prázdné stránce. Ukážeme si, jak to vyřešit lépe.

### Lightbox

Lightbox je webový doplněk, napsaný v jazyce **JavaScript**. Právě JavaScript se používá na dynamické prvky moderních webů, jako je např. vyskakovací okno s galerií obrázků, kterou jistě dobře znáte z mnoha webů. Přes JavaScript je také např. řešeno navigační menu zde na ITnetwork.

Projekt je zadarmo a dostupný na adrese [https://github.com/…h/lightbox2/](https://github.com/lokesh/lightbox2/). Stáhnout si ho můžeme přes zelené tlačítko s textem _Code_. Po kliknutí na tlačítko se nám rozbalí menu a úplně na konci seznamu je ke stažení _archiv ZIP_ (_Download ZIP_). Soubory, které potřebujeme, jsou ve složce `dist/`. V ní jsou složky `js/`, `images/` a `css/`, které rozbalíme a vložíme do složky s naším webem. Podobně, jako musíme CSS připojit k HTML, musíme k HTML připojit i tento skript, aby se na stránce spustil. Do hlavičky stránky `<head>` vložíme následující odkazy na potřebné skripty a i na CSS soubor lightboxu:

```
<link rel="stylesheet" href="styl.css" type="text/css" />
<link rel="stylesheet" href="css/lightbox.min.css" type="text/css" media="screen" />
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/lightbox.min.js"></script>
```


Nyní přidáme všem odkazům v galerii atribut `rel` s hodnotou `lightbox[reference]`:

```
<div id="reference">
    <a href="obrazky/kalkulacka_java.png" title="Kalkulačka v Javě" rel="lightbox[reference]">
        <img src="obrazky/kalkulacka_java_nahled.png" alt="Kalkulačka v Javě" />
    </a>
    <a href="obrazky/miny_pascal.png" title="Miny v Pascalu" rel="lightbox[reference]">
        <img src="obrazky/miny_pascal_nahled.png" alt="Miny v Pascalu" />
    </a>
    <a href="obrazky/hobi_web.jpg" title="Web v HTML a CSS" rel="lightbox[reference]">
        <img src="obrazky/hobi_web_nahled.jpg" alt="Web v HTML a CSS" />
    </a>
</div>
```


Stránku obnovte a klikněte na náhled. Výsledek je velmi působivý:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/html-staticky/reference-lightbox.png)

Pokud přidáte na kteroukoli stránku do hlavičky potřebné skripty a poté na nějaký odkaz na obrázek použijete `rel="lightbox"`, zobrazí se v LightBoxu. Pokud navíc uvedete jméno galerie v hranatých závorkách, bude LightBox tyto obrázky chápat jako z jedné galerie a nechá vás mezi nimi přecházet pomocí myši nebo šipek.

Podstránku _O mně_ si jistě již zvládneme dokončit sami. Můžeme si do ní napsat pár slov o tom, co nás k programování přivedlo 🙂 Tímto tedy máme web hotový. Dnešní výsledek máte jako vždy ke stažení v příloze článku.

V následujícím cvičení, [Řešené úlohy k 19.-22. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-pokrocile-pozicovani-a-stylovani), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/64d3a1dde6c6d)

# Řešené úlohy k 19.-22. lekci HTML a CSS
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Řešené úlohy k 19.-22. lekci HTML a CSS

V minulé lekci, [Galerie obrázků v HTML/CSS](https://www.itnetwork.cz/html-css/webove-stranky/galerie-obrazku-v-htmlcss), jsme si připravili poslední sekci referencí, vložili do ní galerii a finalizovali náš web.

Následující 3 cvičení vám pomohou procvičit znalosti webdesignu, tedy HTML/CSS z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Vytvořte jednoduchou HTML stránku a do

# Lekce 23 - Nahrání webu na internet - Webhosting, doména, FTP klient
V předešlém cvičení, [Řešené úlohy k 19.-22. lekci HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/html-css-resene-priklady-pokrocile-pozicovani-a-stylovani), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním **HTML/CSS tutoriálu** pro své hotové webové stránky zaregistrujeme **webhosting, doménu** a pak je konečně **nahrajeme na internet** ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Svou českou doménu (.cz) si můžete koupit od společnosti cz.nic (resp. vám nákup zprostředukuje daný webhosting) a stojí asi 250 Kč na rok. Jedná se tedy v rámci kurzu samozřejmě o dobrovolný krok. Pokud chcete v IT pracovat, doporučujeme mít nějaké své stránky, které můžete budoucím zaměstnavatelům ukázat. Pokud vlastní web nechcete, nemusíte si ji pořizovat a celou tuto lekci můžete přeskočit.

Registrace webhostingu a domény
-------------------------------

**Webhosting** je prostor na vzdáleném serveru, kam můžeme nahrát naše stránky. **Doména** je pak adresa, přes kterou budou naše stránky z internetu přístupné. Webhosting i doména pro jednoduché stránky jako ty naše jsou velmi levná záležitost, obvykle se pohybují v řádech desítek korun měsíčně.

Existují i tzv. freehostingy, které jsou zadarmo a přístupné přes doménu třetího řádu. Jsou ale poměrně nespolehlivé, do stránek nám vloží reklamu, doména je ošklivá a neobsahují spoustu služeb, které by nám mohly chybět. Pokud se chceme v oblasti webů rozvíjet a učit, určitě zvolme placený hosting.

### Výběr webhostingu

Z českých hostingů máme dobré zkušenosti s [Websupport](https://www.websupport.cz/). Má kvalitní podporu, data zálohuje a má propracovanou administraci, kde si můžeme nastavit spoustu funkcí a vyzkoušet si zajímavé technologie. Proto jsme i pro kurz zvolili právě Websupport.

Přejdeme na web [https://www.websupport.cz](https://www.websupport.cz/) a v navigačním menu zvolíme _Webhosting_. Níže na stránce si vybereme možnost _Prozkoumat hosting_:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/webhosting.png)

Na další stránce si vybereme z nabídky webhostingu:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/nabidka_webhostingu.png)

Nám bude stačit nejnižší varianta _Simple_, která podporuje i [PHP](https://www.itnetwork.cz/php) a umožní nám tak do webu později přidávat dynamické prvky, jako diskuze a podobně. Po kliknutí na _Objednat_ přejdeme do košíku, kde vidíme objednanou službu, délku trvání a cenu služby:

![Webhosting v košíku - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/souhrn_objednavky_hosting.png)

Nyní nebudeme klikat na tlačítko "Pokračovat v objednávce", ale přidáme si k objednávce i doménu.

Pokud již nějakou doménu máte nebo si ji koupíte zvlášť (lze také na webu websupport), je možné si pak webhosting jen zdarma na 14 dní **vyzkoušet­**. Tuto možnost zvolíte mezi platebními údaji a takto uzavřete a odešlete objednávku. (Objednávka hostingu s doménou tuto možnost nenabízí.)

### Výběr domény

Přejedeme myší po horním menu na záložku _Domény_ a ihned se nám otevře submenu, kde zvolíme _Registrace domény_. Nyní si vymyslete adresu pro svůj nový web. Doporučujeme volit co nejkratší doménu bez pomlček a s koncovkou `.cz`, pro osobní portfolio např. z vašeho příjmení. Stiskneme ikonu lupy a hned vidíme, zda je daná doména volná a níže vidíme i které další koncovky (.cz, .com, .eu, ...) jsou pro danou adresu volné:

![Ověření volné domény - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/koupit_domenu.png)

Doménu vložíme do košíku kliknutím na tlačítko _Koupit_. Nyní můžeme pokračovat volbou _Pokračovat do košíku_.

Domény se zpravidla kupují na jeden rok a po roce je potřeba je **prodloužit**, jinak o ně můžete přijít. Při neprodloužení webhostingu "jen" přijdete o data na webovém prostoru. Neprodloužené _domény_ jsou však větší problém, protože je často rychle najdou roboti a následně je skoupí spekulanti. Tu samou doménu tedy již nemusí jít na rozdíl od webhostingu znovu koupit.

### Rekapitulace a platba

V košíku nyní vidíme rekapitulaci objednávky:

![Náhled košíku - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/kosik_domena_hosting.png)

V dalším kroku formuláře po kliknutí na _Pokračovat v objednávce_ se nám otevře okno pro přihlášení či novou registraci:

![Registrace - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/registrace_prihlaseni.png)

V našem případě budeme vytvářet novou registraci, proto klineme na _Vytvořit nový účet_. Zde vyplníme potřebné údaje a potvrdíme souhlasy s obchodními podmínkami a poskytnutím údajů třetí straně (jde o poskytnutí údajů potřebným registrátorům domény či SSL certifikátu, můžeme si zde k tomuto přečíst _Více informací_):

![Nový účet - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/vytvorit_ucet.png)

Následuje volba fakturačního profilu, který si můžeme případně upravit a výběr platební metody.

Toto shrnutí potvrdíme klikem na _Pokračujte na shrnutí_. Dále se dostaneme na _Souhrn objednávky_, kde odsouhlasíme zaškrtnutím checkboxu obchodní podmínky a klikneme na _Dokončit objednávku_. Objednávka se pak odešle.

### Administrace

Jakmile proběhne vyplnění údajů, systém nás již během nákupu přihlásí do administrace. Tu najdeme v pravém horním rohu:

![Administrace účtu - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/admin_ucet.png)

Zde si pak po kliknutí na služby můžeme zobrazit všechny služby s potřebnými údaji. Najdeme zde také své faktury i další kontakty a podporu:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/ukazka_administrace.png)

Prostor na internetu máme, hurá na něj web nahrát!

Nahrání webu na webhosting
--------------------------

K nahrávání souborů na vzdálený počítač se používá protokol FTP (File Transfer Protocol), přesněji tedy jeho zabezpečená varianta **SFTP**. Abychom přes FTP na webhosting něco nahráli, potřebujeme **FTP klienta**. To je program, který nám umožní spravovat naše soubory na serveru. Lze k tomu využít buď webovou aplikaci nebo desktopového FTP klienta. Využijeme druhou variantu, jelikož je pro práci se soubory praktičtější.

### FTP klient

Ukážeme si práci s programem _FileZilla_. Z webu [https://filezilla-project.org/](https://filezilla-project.org/) stáhneme FileZilla client (stačí základní verze) a nainstalujeme.

**Nikdy nenahrávejte obsah na FTP přes Průzkumníka Windows nebo přes Total Commander!** Tyto nástroje nepřevádí kódování zdrojových souborů (binary/ASCII) a také hůře zvládají výpadky.

### FTP účet

K navázání přenosu souborů s naším webem potřebujeme znát **jméno a heslo k FTP účtu** webu. Před prvním přihlášením do FTP je třeba si FTP účet vytvořit. Údaje můžeme vytvořit přímo z administrace a poslat je na konkrétní email. V sekci _Služby_ vyhledáme svou doménu a klikneme na ni. Dále klikneme v levém menu na _FTP účty_ a vpravo nahoře klikneme na tlačítko _Vytvořit nový FTP účet_:

![FTP účty - Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/websupport_webhosting/ftp_ucty.png)

Když pak někdy později potřebujeme znovu zjistit naše údaje, tak v sekci _Služby_ klineme na svou doménu. Dále pak zvolíme v levém menu _FTP účty_ a pak klikneme na název loginu a následně se nám zobrazí všechny přihlašovací údaje a taktéž možnost úpravy nastavení anebo změny hesla.

### Připojení na FTP přes FileZilla

Nyní přistoupíme k práci s FileZillou. Program spustíme a v horní části obrazovky, hned pod ikonkami, vidíme pole pro vyplnění našich údajů:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/webglobe_webhosting/fzprvni_spojeni.png)

Pole _Hostitel_ je nutné vyplnit ve formátu `sftp://ftp.xxxxx.yy`, v našem příkladu tedy `sftp://ftp.honzadeveloper.cz`. Dále vyplníme údaje z administrace Websupport a klikneme na _Rychlé připojení_.

V tuto chvíli se nás FileZilla dialogovým oknem zeptá, zda důvěřujeme danému hostiteli a má nás připojit. Před kliknutím na _OK_ ještě zatrhneme možnost "Vždy důvěřovat..." a FileZilla si zapamatuje tento klíč a příště se již ptát nebude. Potvrdíme tedy _OK_. A jsme přihlášení.

Připojovací údaje si později můžeme ve FileZille uložit přes Site manager, abychom je nemuseli vyplňovat pokaždé znovu. **Pokud se připojení nezdaří**, je možné, že se nám **změnila IP adresa** a že ji je nutné znovu přidat do administrace Websupport.

### Nahrání souborů

Okno programu je nyní rozděleno do 2 částí:

*   Vlevo vidíme **soubory v našem počítači**,
*   vpravo pak **prostor na našem hostingu**.

V horní části okna můžeme sledovat všechny kroky FileZilly, které právě dělá a jejich historii.

Následně **otevřeme v pravém okně** připojeného hostingu složku `public_html/`. Pokud je v ní nějaký obsah, tak ho **odstraníme**. **V levém okně** si **otevřeme obsah složky s naším webem**. Nyní jednoduše myší přetáhneme všechny soubory webu z levého okna do pravého okna. Je třeba, aby se vaše hlavní stránka jmenovala `index.html`. Výsledek po nahrání na server vypadá ve FileZille takto:

![Webové stránky krok za krokem](https://www.itnetwork.cz/images/5/html/webglobe_webhosting/fz_pretazeni_souboru.png)

Gratuluji vám, máte nyní pěkný a moderní web na kvalitním webhostingu! Vyťukejte do prohlížeče adresu a vyzkoušejte si ho! ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Kam dál
-------

Náš web nyní vypadá pěkně, není ovšem přizpůsobený na malé obrazovky mobilních zařízení. O tom pojednávají navazující kurzy:

*   [Responzivní webdesign](https://www.itnetwork.cz/html-css/responzivni-webdesign) a
*   [Bootstrap](https://www.itnetwork.cz/html-css/bootstrap).

Pokud se chcete více soustředit na backend, můžete se zatím spokojit jen s těmito základy HTML a přejít již na webové kurzy nejrůznějších programovacích jazyků.

Kompletní web máte opět v příloze a já se na vás těším u dalších kurzů na ITnetwork 🙂

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

[Aplikace](https://www.itnetwork.cz/api/Articles-Article/file/51bb4e9b40cb4)

# Učební pomůcka na HTML - Tahák
[HTML a CSS](https://www.itnetwork.cz/html-css) [Statický web](https://www.itnetwork.cz/html-css/webove-stranky) Učební pomůcka na HTML - Tahák

V minulé lekci, [Nahrání webu na internet - Webhosting, doména, FTP klient](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-nahrani-stranek-na-internet), jsme si ukázali, jak nahrát web na webhosting a jaký webhosting vybrat.

Stále si nemůžete zapamatovat nejdůležitější pojmy a ztrácíte se ve vašich zápiscích? Ve spolupráci s našimi lektory prezenčních školení jsme pro vás vytvořili vymazlený tahák, který se vejde na **1 oboustrannou A4**. Právě toto množství informací se nám v praxi prokázalo jako ideální pro udržení pojmů jednoho tématického okruhu v hlavě. Pomůže vám uložit si ty **nejdůležitější HTML 5 tagy** a stane se vaším nepostradatelným pomocníkem při výuce i praxi.

Tahák má celkem 4 strany a pojímá následující problematiku:

*   HTML 5 tagy
    *   Struktura
    *   Textové tagy
    *   Layout
    *   Tabulky
    *   Seznamy
    *   Multimédia
    *   Formuláře
    *   Ostatní
    *   Zastaralé (nepoužívejte)
*   Struktura HTML dokumentu
*   Struktura rozložení

Náhled strany 1/4:

![Tahák HTML 5 tagů](https://www.itnetwork.cz/images/5/html/webdesign_tahak_html.png)

Archiv ke stažení obsahuje jak oboustranné PDF, tak PDF se třemi obyčejnými stranami, abyste si mohli zvolit variantu jednodušší k vytisknutí na vaší konkrétní tiskárně.

[Archiv](https://www.itnetwork.cz/api/Articles-Article/file/5c2fa38c4d789)

# Zdrojákoviště
V předchozím kvízu, [Kvíz - Základy HTML a CSS](https://www.itnetwork.cz/html-css/webove-stranky/zaverecny-test-zaklady-html-a-css), jsme si ověřili nabyté zkušenosti z kurzu.

Webové šablony pro vaše weby, které si můžete stáhnout, uzpůsobit a použít. Vyřešíte tak grafiku i kód layoutu vašich webových stránek.

[Archiv](https://www.itnetwork.cz/html-css/webove-stranky/zdrojove-kody)





* * *

# 2. Základní konstrukce jazyka Java

* * *

# 3. Objektově orientované programování v Javě

* * *

# 4. Kolekce a proudy v Javě

* * *

# 5. MySQL/MariaDB databáze krok za krokem

* * *

# 6. Základní konstrukce jazyka JavaScript

* * *

# 7. Základy Spring Boot frameworku pro Javu

* * *

# 8. Databáze a Hibernate ve Spring Boot

* * *

# 9. Základy React

* * *

# 10. Kompletní kurz CSS frameworku Bootstrap

* * *
