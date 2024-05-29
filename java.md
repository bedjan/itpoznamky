# Lekce 1 - Úvod do jazyka Java
Vítejte u první lekce **populárního on-line kurzu programovacího jazyka Java**. Budeme se učit postupně, od úplných začátků až po **složité konstrukce**, **objektové modely** a např. **práci s databází**. S trochou trpělivosti a vytrvalosti se z tebe stane **dobrý programátor**.

![Kompletní kurzy programování v Javě - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/kompletni_kurzy_programovani_java.jpg)

Minimální požadavky kurzu
-------------------------

Na tento kurz nepotřebujete žádné speciální znalosti, stačí běžná práce s počítačem 🙂

Vývoj programovacích jazyků
---------------------------

Abychom plně porozuměli jazyku Java, ohlédneme se do minulosti na to, jak se programovací jazyky vyvíjely. Bude pro nás totiž důležité pochopit, jak Java pracuje a proč je dobré programovat právě v tomto jazyce.

### 1\. generace jazyků - Strojový kód

Procesor počítače umí vykonávat jen omezené množství jednoduchých instrukcí, které jsou uloženy jako **sekvence bitů**, jsou to tedy čísla. Ta se mu obvykle zadávají v **hexadecimální (šestnáctkové) soustavě**. Instrukce jsou tak elementární, že umožňují pouze např. **sčítání adres** nebo **skoky mezi instrukcemi**. Nelze např. jednoduše sečíst dvě čísla, musíme se na čísla dívat jako na adresy v paměti a takové sečtení čísel zabere několik instrukcí. Program sčítající dvě čísla by vypadal např. takto:

```
2104
1105
3106
7001
0053
FFFE
0000
```


Instrukce se procesoru předloží v **binární podobě**. Takovýto **kód je** samozřejmě **extrémně nečitelný** a **závisí na instrukční sadě** daného **CPU**. Určitě v tomto jazyce nebude jednoduché tvořit nějaké programy, bohužel **každý** program musí být nakonec do tohoto jazyka přeložen, aby mohl být na procesoru počítače spuštěn:

![Strojový kód - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/csp/strojovy_kod.png)

### 2\. generace jazyků - Assembler

Assembler (zkráceně ASM) není o nic jednodušší, než strojový kód, ale je **lidsky čitelný**. Jedná se o strojový kód, ve kterém mají instrukce **slovní označení** (kód), čili si člověk nemusí pamatovat čísla. Kódy instrukcí se poté přeloží na výše uvedený strojový kód. Stejný program by v ASM vypadal takto:

```
ORG 100
LDA A
ADD B
STA C
HLT
DEC 83
DEC –2
DEC 0
END
```


Vidíme, že je to poněkud lidštější, ale stále nezasvěcení lidé vůbec netuší, jak program funguje (včetně mne).

### 3\. generace jazyků

Jazyky v třetí generaci konečně **nabízí uživateli určitou abstrakci** nad tím, jak program vidí počítač, zaměřují se na to, jak program vidí člověk. Naše čísla jsou vnímána již jako **proměnné**, zdrojový kód připomíná **matematický zápis**.

Sečtení dvou čísel by v jazyce C vypadalo takto:

```
int main(void)
{
    int a, b, soucet;
    a = 83;
    b = -2;
    soucet = a + b;
    return 0;
}
```


Všichni asi tušíme, co program dělá, sečte čísla `83` a `-2` a výsledek uloží do proměnné `soucet`. U všech jazyků třetí generace je samozřejmě výhodou **vysoká čitelnost**.

S dalším vývojem šly jazyky ještě dál a přinesly objektově orientované programování, ale o tom až později.

Kategorie jazyků
----------------

Jazyky **třetí generace** můžeme v zásadě rozdělit do tří kategorií.

### 1\. Kompilované jazyky

Kompilované (neřízené) jazyky mají tedy svůj zdrojový kód v jazyce, kterému lidé dobře rozumí. Tento zdrojový kód se samozřejmě musí přeložit do strojového kódu, aby ho bylo možné na procesoru spustit. Tento překlad zajišťuje **překladač** (kompiler), který přeloží najednou celý program do stroj. kódu:

![Kompiler - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/csp/kompiler.png)

#### Výhody kompilace

Mezi hlavní výhody kompilace patří:

*   **Rychlost** - Jediné zbrždění spočívá v jednorázové kompilaci, přeložený program poté běží srovnatelně rychle, jako kdyby byl napsán např. v ASM.
*   **Nepřístupnost zdroj. kódu** - Program se šíří již zkompilovaný, není jej možné jednoduše modifikovat pokud zároveň nevlastníte jeho zdroj. kód.
*   **Snadné odhalení chyb ve zdroj. kódu** - Pokud zdrojový kód obsahuje chybu, celý proces kompilace spadne a programátor je s chybou seznámen. To značně zjednodušuje vývoj.

#### Nevýhody kompilace

Kompilace s sebou samozřejmě přináší několik nevýhod:

*   **Závislost na platformě** - Program je stále závislý na platformě, tedy na typu procesoru a operačním systému. Zkompilovaný program nemůžeme vzít a přenést na jinou platformu bez toho, aby byl na této platformě zkompilován.
*   **Nemožnost editace** - Jakmile se program jednou zkompiluje do strojového kódu, nelze ho editovat jinak, než opětovnou kompilací. To pochopitelně platí i pro výše zmíněné jazyky.
*   **Memory management** - Vzhledem k tomu, že počítač danému programu nerozumí a jen mechanicky vykonává instrukce, můžeme se někdy setkat s velmi nepříjemnými chybami s přetečením paměti. Kompilované jazyky obvykle nemají automatickou správu paměti a jsou to jazyky nižší (s nižším komfortem pro programátora). Běhové chyby způsobené zejména špatnou správou paměti se kompilací neodhalí.

Příkladem kompilovaných jazyků jsou např. jazyk C, jeho objektový následník C++ nebo Pascal/Delphi.

### 2\. Interpretované jazyky

Interpretace se snaží řešit **problém přenositelnosti programů** mezi různými platformami a také přichází s **vyšším komfortem pro programátora**. Interpret funguje podobně, jako kompiler, jen nepřekládá program celý najednou, ale překládá pouze to, co je v danou chvíli potřeba. (Interpreter znamená v angličtině tlumočník, tedy nejprve vyslechne jednu větu mluvčího a tu poté přeloží a vysloví. Překlad probíhá během proslovu, tedy běhu programu, po větách/instrukcích. Kompiler/překladač přeloží rozhovor celý najednou a poté ho celý přečte.). Můžeme si představit, že výše uvedený zdrojový kód by interpret četl po jednotlivých řádcích, tu část by vždy zkompiloval do strojového kódu a vykonal. Výsledek kompilace by zahodil a přesunul by se na další řádek. Možná vám to připadá jako plýtvání výkonem procesoru a je pravda, že tento způsob běhu programu také není zrovna nejrychlejší:

![Interpret - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/csp/interpret.png)

#### Výhody interpretu

Jaké může mít tedy tento postup **výhody**? Je jich hned několik:

*   **Přenositelnost** - Program je plně přenositelný, pokud existuje interpret pro danou platformu, půjde tam zdrojový kód programu spustit (a vývoj interpretu je snadnější, než vývoj kompilátoru).
*   **Jednodušší vývoj** - Ve vyšších jazycích jsme odstíněni od správy paměti, kterou za nás dělá tzv. **garbage collector** (řekneme si o něm v seriálu více). Často také nemusíme ani zadávat datové typy a máme k dispozici vysoce komfortní kolekce a další struktury.
*   **Stabilita** - Díky tomu, že interpret kódu rozumí, předejde chybám, které by zkompilovaný program jinak klidně vykonal. Běh interpretovaných programů je tedy určitě bezpečnější, dále umožňuje zajímavou vlastnost, tzv. **reflexi**, kdy program za běhu zkoumá sám sebe, ale o tom později.
*   **Jednoduchá editace** - Program můžeme vyvíjet po částech a nahrávat na cílové umístění, díky tomu, že se nemusí kompilovat, ho je možné jednoduše editovat "za běhu".

#### Nevýhody interpretu

Interpret má však tři zásadní **nevýhody**:

*   **Rychlost** - Interpretace může být mnohdy velmi pomalá a program tak plně nevyužívá výkon počítače.
*   **Často obtížné hledání chyb** - Díky kompilaci za běhu se chyby v kódu objeví až v tu chvíli, kdy je kód spuštěn. To může být někdy velmi nepříjemné.
*   **Zranitelnost** - Protože se program šíří v podobě zdrojového kódu, každý do něj může zasahovat nebo krást jeho části.

Příkladem interpretovaného jazyka je např. PHP. Na většině webů ten poměrně pohodlný jazyk výkonově stačí, ale například Facebook používá speciální kompilovanou verzi PHP, zájemci ať se podívají na projekt HipHop for PHP.

### 3\. Jazyky s virtuálním strojem

Napadlo vás, co by se stalo, kdyby se oba dva výše zmíněné způsoby spojily? Pokud ano, gratuluji, vynalezli jste **virtuální stroj**. Jedná se o **nejmodernější podobu jazyka**, která je v současné době také **nejrozšířenější** a **nejlepší volbou pro vývoj většiny aplikací**. Nebudu tajit, že do této kategorie spadá samotná Java nebo C#.

Zdrojový kód je nejprve přeložen do tzv. **mezikódu**, kterému se u Javy říká **bytecode**. Jedná se v podstatě o strojový (binární) kód, který má ale o poznání jednodušší instrukční sadu a přímo podporuje objektové programování. Tento mezikód je potom díky jednoduchosti relativně rychle interpretovatelný tzv. virtuálním strojem (tedy interpretem, v případě Javy je to tzv. JVM - Java Virtual Machine). Výsledkem je strojový kód pro náš procesor:

![Virtuální stroj - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/csp/virtualni_stroj.png)

#### Výhody virtuálního stroje

Určitě jste trochu vyděšeni, ale věřte, že jsme v podstatě **odstranili nevýhody interpreta i kompileru** a můžeme využívat mnohé z jejich **výhod**:

*   **Odhalení chyb ve zdrojovém kódu** - Díky kompilaci do bytekódu jednoduše odhalíme chyby ve zdrojovém kódu.
*   **Stabilita** - Díky tomu, že interpret kódu rozumí, zastaví nás před vykonáním nebezpečné operace a na chybu upozorní. Můžeme také provádět reflexi (i když pro bytekód, ale od toho jsme většinou odstíněni).
*   **Jednoduchý vývoj** - Máme k dispozici hitech datové struktury a knihovny, správu paměti za nás provádí garbage collector.
*   **Slušná rychlost** - Rychlost se u virtuálního stroje pohybuje mezi interpretem a kompilerem. Virtuální stroj již výsledky své práce po použití nezahazuje, ale dokáže je cachovat, sám se tedy optimalizuje při četnějších výpočtech a může dosahovat až rychlosti kompileru. Start programu bývá pomalejší, protože stroj překládá společně využívané knihovny.
*   **Málo zranitelný kód** - Aplikace se šíří jako zdrojový kód v bytekódu, není tedy úplně jednoduše lidsky čitelná.
*   **Přenositelnost** - Asi je jasné, že hotový program poběží na každém železe, na kterém se nachází virtuální stroj.

Java a JDK
----------

Java je distribuována ve třech edicích:

*   Java SE - Standardní Edici budeme používat pro začátek.
*   Java EE - Enterprise Edice není ve skutečnosti jiná Java, ale sada knihoven do JSE, která umožňuje vytvářet velké webové aplikace. Je poměrně komplikovaná, ale ve firmách extrémně žádaná. Pokud se ji naučíte, budete velmi žádaní programátoři.
*   Java ME - Mikro Edice běží v SIM kartách, pračkách a dalších elektronických zařízeních (Oracle tvrdí, že Java pohání 9 miliard zařízení).

**Pro spuštění** našich aplikací budeme potřebovat **JRE** (Java Runtime Environment), což je běhové prostředí obsahující virtuální stroj. **Pro vývoj** budeme pak potřebovat **JDK** (Java Development Kit), který obsahuje knihovny a nástroje pro vývojáře.

Java je zdarma pro nekomerční použití. Od verze 11 je však Java pro komerční účely placená.

Naštěstí existuje edice [OpenJDK](https://www.itnetwork.cz/java/pokrocile/zmena-licence-java11-sdk-a-openjdk), kterou lze používat **zdarma i pro komerční aplikace**.

Aplikace v Javě lze také spouštět přímo ve **webovém prohlížeči** pomocí Java Web Start. Ten se také automaticky stará o aktualizaci vaší aplikace.

Jazyky s virtuálním strojem ctí **objektově orientované programování** a jedná se o současný vrchol vývoje v této oblasti.

Existují i jazyky 4. a 5. generace, ale ty mají specifické použití a nebudeme se s nimi zde zatím zabývat.

Nyní víme, s čím to vlastně budeme pracovat.

V příští lekci, [Apache NetBeans, IntelliJ IDEA a první konzolová aplikace](https://www.itnetwork.cz/java/zaklady/java-tutorial-instalace-a-ovladani-netbeans-ide-konzolova-aplikace), si ukážeme práci s IDE (programátorským prostředím) NetBeans a IntelliJ. Vytvoříme si svůj první program.

# Lekce 2 - Apache NetBeans, IntelliJ IDEA a první konzolová aplikace
V minulé lekci, [Úvod do jazyka Java](https://www.itnetwork.cz/java/zaklady/java-tutorial-uvod-do-jazyka-java), jsme si řekli něco o jazyce jako takovém a také jsme pochopili, jak Java funguje.

V dnešním Java tutoriálu se zaměříme především na vývojová prostředí **NetBeans** a **IntelliJ**. Ukážeme si, jak se instalují, používají a **naprogramujeme si jednoduchou konzolovou aplikaci**.

Příprava prostředí
------------------

Začněme přípravou prostředí pro vývoj v Javě.

### Instalace JDK

Nejprve si musíme stáhnout tzv. **JDK** (Java Development Kit). To je soubor základních nástrojů, které potřebujeme pro vývoj v Javě a pro běh samotného NetBeans IDE (IntelliJ můžeme spustit i bez JDK). Existuje více distribucí JDK, my použijeme distribuci nazvanou [Eclipse Temurin](https://adoptium.net/). Pro stažení klikneme na tlačítko _Latest LTS release_ a poté provedeme instalaci. Při instalaci je důležité na obrazovce s výběrem komponent zaškrtnout, že chceme, aby instalátor vytvořil a nastavil systémovou proměnnou `JAVA_HOME`:

![Nastavení JAVA_HOME proměnné - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/setting_java_home.png)

Bez této systémové proměnné by instalátor NetBeans nevěděl, kde má JDK hledat a nemohl by tudíž fungovat.

### Instalace IDE

Nyní stáhneme samotné IDE (Apache NetBeans nebo IntelliJ IDEA). IDE je zkratka Integrated Development Environment (integrované vývojové prostředí) a jednoduše řečeno se jedná o aplikaci, ve které píšeme zdrojový kód a pomocí které potom naši aplikaci testujeme a ladíme. Existuje více různých IDE, populární je také například [Eclipse](https://www.itnetwork.cz/java/zaklady/java-tutorial-instalace-a-ovladani-eclipse-konzolova-aplikace).

*   My použijeme **IntelliJ IDEA**, které je volně dostupné ke stažení na stránce společnosti [JetBrains](https://www.jetbrains.com/idea/download/). Pro naše účely nám postačí **Community Edition**, která je zdarma. Kliknutím na tlačítko _Download_ se spustí stahování instalátoru.
    
    Pro našince není bez zajímavosti, že IntelliJ vyvíjí společnost [JetBrains, která byla založena v Praze](https://www.jetbrains.com/company/contacts/prague/).
    
*   My použijeme **Apache NetBeans**, které je volně dostupné ke stažení na stránce [Apache NetBeans](https://netbeans.apache.org/download/index.html). Vybereme nejnovější dostupnou verzi, klikneme na tlačítko _Download_, na další stránce vybereme verzi pro **Windows-x64** v sekci _Installers_ a konečně na poslední stránce si vybereme z jakého mirroru se má stahovat - obvykle je nejlepší volbou ten úplně první odkaz.
    
    Pro našince není bez zajímavosti, že NetBeans mají [české kořeny](https://netbeans.org/about/history.html).
    

Instalaci odklikáme (vynextíme), není třeba nic nastavovat.

Instalace Dropboxu - Zálohování
-------------------------------

Kromě IDE potřebujeme nějaký nástroj, který bude **zálohovat a verzovat naši práci**. Nemůžeme se spolehnout na to, že program prostě budeme ukládat, protože jsme lidé a ne stroje. Lidé dělají chyby a když přijdete o několikadenní nebo dokonce několikatýdenní práci, může to zabolet. Je dobré naučit se na toto myslet hned od začátku. Velmi doporučuji program **Dropbox**, který je extrémně jednoduchý a sám vaše soubory **verzuje** (tedy zachovává změny v čase a je možné se vrátit ke starším verzím projektu) a zároveň **synchronizuje** s webovým úložištěm. I kdybyste si projekt omylem smazali, přepsali, ukradli vám notebook nebo vám zkolaboval pevný disk, vaše data zůstanou v bezpečí. Dropbox také umožňuje sdílet jeden projekt mezi více vývojáři. Více o Dropboxu viz tento [článek, který obsahuje zároveň pozvánku do Dropboxu s 0,5 GB prostoru navíc](https://www.itnetwork.cz/software/dropbox-revoluce-v-prenaseni-zalohovani-a-sdileni-souboru).

Jako další verzovací nástroj se hojně používá [GIT](https://www.itnetwork.cz/software/git), jeho nastavení ale vydalo na samostatný kurz a Dropbox zatím pro naše účely bohatě postačuje.

Vytvoření Java projektu
-----------------------

*   Spustíme si IntelliJ a v okně, které se nám otevře klikneme na ikonku **+** s popiskem _New Project_:
    
    ![Založení nového projektu v IntelliJ - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij_new_project.png)
    
    V okně _New Project_ zadáme nejprve název naší aplikace. Jako jméno aplikace zvolíme `PrvniAplikace`. Dále zvolíme umístění projektu. V Dropboxu si vytvoříme složku na naše projekty, např. `IntelliJProjects/`. U lokace pomocí tlačítka s ikonkou složky vybereme složku `C:\Users\vase_jmeno\Dropbox\IntelliJProjects\`.
    
    Jako jazyk ponecháme Java a **Build system** přepneme na **Maven**.
    
    **Maven** je mocný automatizační nástroj, který slouží ke správě projektů napsaných především v jazyce **Java**. Jeho detailnější popis je zcela mimo rámec tohoto seriálu, nás na této úrovni zajímá pouze to, že nám s pomocí **IntelliJ** vytvoří základní **kostru** našeho projektu a následně bude na požádání náš projekt **sestavovat** (tzv. buildit) a **spouštět**. S tím si vystačíme po celou dobu našeho seriálu pro začátečníky.
    
    IntelliJ sám najde JDK, které jsme nainstalovali. Není ale problém si nainstalovat jiné, pokud by to bylo pro nějaký konkrétní projekt potřeba. My necháme naše Eclipse Temurin.
    
    Kdybychom zaškrtnuli možnost _Add sample code_, IntelliJ by nám automaticky vygeneroval naší první třídu. Do budoucna se nám ale bude hodit vědět, jak si vytvořit vlastní. Tuto možnost tedy necháme **odškrtnutou** a za chvíli si vysvětlíme, jak si třídu vytvořit ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Formulář nám dále umožňuje nastavit _GroupId_ a _ArtifactId_. Jde o informace, které potřebuje Maven pro vytvoření projektu a v této chvíli si moc nemusíme lámat hlavu nad tím, co přesně která položka znamená.
    
    Bude vhodné po dobu našeho seriálu mít nastavenou _GroupId_ na `cz.itnetwork`. **IntelliJ** si toto nastavení zapamatuje při vytvoření našeho prvního projektu a při tvorbě dalších projektů nám to již předvyplní.
    
    Okno bude vypadat takto:
    
    ![Nastavení aplikace - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-application-first-setting.png)
    
    Formulář následně potvrdíme.
*   Spustíme si NetBeans a v aplikačním menu zvolíme položku _File -> New Project_:
    
    ![Založení nového projektu v NetBeans - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/netbeans_new_project.png)
    
    V okně _New project_ vybereme z kategorie _Java with Maven_ projekt _Java Application_ a klikneme na _Next_:
    
    ![Založení nového projektu v NetBeans - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/new-maven-project.png)
    
    **Maven** je mocný automatizační nástroj, který slouží ke správě projektů napsaných především v jazyce **Java**. Jeho detailnější popis je zcela mimo rámec tohoto seriálu, nás na této úrovni zajímá pouze to, že nám s pomocí **NetBeans** vytvoří základní **kostru** našeho projektu a následně bude na požádání náš projekt **sestavovat** (tzv. buildit) a **spouštět**. S tím si vystačíme po celou dobu našeho seriálu pro začátečníky.
    
    Jelikož jde o náš úplně první projekt v NetBeans, vyskočí na nás dialog _Finding Feature_, ve kterém klikneme na _Activate..._. Tím dojde k instalaci potřebných dodatečných modulů. Toto je potřeba pouze při prvním vytváření projektu daného typu:
    
    ![Instalace dodatečných modulů - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/finding-feature.png)
    
    Poté pokračujeme dále. Na další obrazovce můžeme náš projekt **pojmenovat** a **určit jeho umístění na disku**.
    
    Jako jméno aplikace zvolíme `PrvniAplikace`. V Dropboxu si vytvoříme složku na naše projekty, např. `NetBeansProjects/`. U lokace pomocí tlačítka _Browse_ vybereme složku `C:\Users\vase_jmeno\Dropbox\NetBeansProjects\`. Okno bude vypadat takto:
    
    ![Nastavení aplikace - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/application-firts-setting.png)
    
    Formulář nám dále umožňuje nastavit _Group Id_, _Version_ a _Package_. Jde o informace, které potřebuje Maven pro vytvoření projektu a v této chvíli si moc nemusíme lámat hlavu nad tím, co přesně která položka znamená. Pouze si všimněme, že _Package_ je vlastně _Group Id_ s název projektu malými písmeny.
    
    Bude vhodné po dobu našeho seriálu mít nastavenou _Group Id_ na `cz.itnetwork`. **NetBeans** si toto nastavení zapamatuje při vytvoření našeho prvního projektu a při tvorbě dalších projektů nám to již předvyplní.
    
    Formulář následně potvrdíme.

Vytvoření první třídy
---------------------

*   V **IntelliJ** jsme právě založili nový projekt:
    
    ![Okno IntelliJ - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-project-finished.png)
    
    Okno jsem hodně zmenšil, aby se mi sem vešlo celé ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
*   V **NetBeans** jsme právě založili nový projekt:
    
    ![Okno NetBeans - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/new-project-finished.png)
    
    Okno jsem hodně zmenšil, aby se mi sem vešlo celé ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

### Panel Project(s)

*   Při pohledu do levého panelu _Project_ si všimněme, že se nám zde objevil náš projekt `PrvniAplikace` spolu se dvěma podsložkami z nichž nás prozatím bude zajímat pouze `src/`. Složku `src/` rozklikneme a objeví se nám složka `main`. Tu rozklikneme a objeví se nám složka `java`. Bývá dobrým zvykem si vytvářet balíčky a do nich až vkládat třídy. Pokud se nám zde balíček nevytvoří automaticky, klikneme na složku `java` pravým tlačítkem a zvolíme _New_ -> _Package_:
    
    ![Vytvoření nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-package-creating.png)
    
    Zadáme název balíčku - `cz.itnetwork` a potvrdíme klávesou Enter:
    
    ![Nastavení nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-package-settings.png)
    
    Na náš balíček opět klikneme pravým tlačítkem a vybereme _New_ -> _Java Class_:
    
    ![Vytvoření nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-class-creating.png)
    
    V dialogu zadáme název naší první třídy - `PrvniAplikace` a stiskneme klávesu Enter:
    
    ![Nastavení nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-class-settings.png)
    
*   Při pohledu do levého panelu _Projects_ si všimněme, že se nám zde objevil náš projekt `PrvniAplikace` spolu se čtyřmi podsložkami z nichž nás prozatím bude zajímat pouze `Source Packages/`. Složku `Source Packages/` rozklikneme a objeví se nám náš balíček `cz.itnetwork.prvniaplikace`. Na ten klikneme pravým tlačítkem a vybereme _New_ -> _Java class_:
    
    ![Vytvoření nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/new-class-creating.png)
    
    V dialogu zadáme název naší první třídy - `PrvniAplikace`. Zkontrolujeme její umístění v balíčku `cz.itnetwork.prvniaplikace` a klikneme na _Finish_:
    
    ![Nastavení nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/new-class-settings.png)
    

### Kód programu

Vytvoří a otevře se nám **nový soubor**, do kterého už budeme psát první program:

*   ![Nastavení nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-new-class-finished.png)
    
*   ![Nastavení nové třídy - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/new-class-finished.png)
    

IDE nám vygenerovalo kód výše automaticky. Klíčová slova `package`, `public` a `class` zatím nebudeme řešit, spokojíme se s tím, že je to určitý způsob, jak se aplikace v Javě strukturují. Každý **Java** program se totiž skládá ze **tříd** (classes) organizovaných do **balíčků** (packages).

#### Metoda `main()`

Jako **vstupní bod** programu, místo odkud se začíná program provádět, slouží metoda nazvaná `main()`. Tu zde zatím nemáme, takže ji musíme vytvořit. Umístíme tedy kurzor někam mezi ty složené závorky (do těla třídy `PrvniAplikace`) a napíšeme následující kód:

```
public static void main(String[] args) {

}
```


Také můžeme využít doplňovací funkci našeho IDE (toto umí jak NetBeans, tak IntelliJ) - napíšeme `main` a stiskneme Tab a IDE celou kostru metody `main()` doplní za nás.

Opět se prozatím nebudeme zabývat tím, co to všechno znamená. Jediné co nás teď zajímá je tělo metody `main()`, tedy prostor mezi těmi složenými závorkami. Sem budeme psát náš kód.

### Spuštění projektu

Před pokusem o spuštění nezapomeneme naši nově vytvořenou třídu nejprve uložit. Buď pomocí ikonky s disketkami a nebo pomocí klávesové zkratky Ctrl + S.

Důležitým prvkem v okně pro nás bude zelené tlačítko _Run Project_ v horní liště, které program **zkompiluje** a **spustí**. Můžeme si to zkusit, protože náš program zatím nic nedělá, hned se zase vypne. Spuštění můžeme také provést klávesovou zkratkou F6 pro NetBeans a Shift + F10 pro IntelliJ.

Pokud používáme NetBeans, při prvním pokusu o spuštění na nás pravděpodobně vyskočí okno _Select main class for Execution_. NetBeans se nás ptá, kterou metodu `main()` má spustit, v projektu jich totiž může být více. Jelikož my jsme vytvořili jenom jednu metodu `main()`, stačí nám pouze zaškrtnout _Remember Permanently_ a kliknout na _Select Main Class_:

![Nastavení main metody - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/setting-main-method-dialog.png)

Při příštím spuštění už se nás NetBeans ptát nebude.

Náš první program Hello world
-----------------------------

Je zarytým zvykem, že prvním programem v nějakém novém jazyce bývá tzv. Hello world. Jedná se o program, který jakýmkoli způsobem uživateli zobrazí hlášku "Hello world", případně nějaký podobný text. Opět zopakuji, že příkazy budeme psát do těla metody `main()`.

K výpisu textu slouží:

```
System.out.println("Text");
```


`System` je tzv. **třída**. Pojmem třída budeme zatím chápat soubor nějakých příkazů, příkazům se v Javě říká metody. `System` tedy obsahuje metody k obsluze vstupů a výstupů.

Na výstupu (`out`) voláme metodu `println()`, která vypíše text. Vidíme, že metodu na třídě voláme pomocí operátoru tečka. Každá metoda může obsahovat nějaké vstupní parametry, které se zadávají do závorky a jsou oddělené čárkou. V případě metody `println()` je parametrem text k vypsání.

Textu budeme říkat textový řetězec nebo jen řetězec (anglicky string) a budeme ho psát do uvozovek, aby tomu Java rozuměla a nezaměňovala ho s jinými příkazy. I kdyby metoda neměla žádné parametry, je závorka za ní povinná a byla by prázdná.

Příkazy píšeme na samostatné řádky a za každý píšeme středník (`;`).

Pokud nevíte, kde je na klávesnici `;`, tak pod Esc:

![Středník - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/klavesnice/strednik.jpg)

Naše metoda `main()` tedy bude nyní vypadat nějak takto:

```

package onlineapp;

class Program
{

public static void main(String[] args) {
    System.out.println("Hello ITnetwork!");
}

}


```


Opět si můžeme ulehčit život využitím doplňovacích možností a místo vypisování `System.out.println...` můžeme napsat `sout` a stisknout Tab. IDE napíše `System.out.println("")` za nás a ještě nám šikovně umístí kurzor přímo mezi uvozovky.

Uvozovky jsou na české klávesnici na stejné klávese jako ů, ale píšeme je se Shift:

![Uvozovky - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/klavesnice/uvozovky.jpg)

Program spustíme pomocí klávesy F6, či Shift + F10. Výstup našeho prvního programu bude vypadat nějak takto:

*   ![Normální output Mavenu - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij-maven-normal-output.png)
    
*   ![Normální output Mavenu - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/maven-normal-output.png)
    

### Potlačení informací Mavenu

Pokud používáte NetBeans, nejspíše jste si všimli, že kromě námi požadovaného textu `Hello ITnetwork` se nám zobrazuje i hromada dalšího textu, který jsme nechtěli. Jedná se o výpis různých informací **Mavenu** a můžeme jej buď ignorovat a nebo jej potlačit. Stačí v okně _Output_ vlevo kliknout na tlačítko _Maven Settings_ (je to ten co vypadá jako klíč a nějaké šroubky) a v dialogu, který se otevře do políčka _Global Execution Options_ vložit `-q`. Poté klikneme na _Apply_ a dialog zavřeme pomocí _OK_:

![Nastavení tichého modu Mavenu - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/maven-settings.png)

Od této chvíle poběží Maven v tichém modu (quiet) a nám se tak bude zobrazovat jenom to co opravdu chceme vidět:

![Tichý output Mavenu - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/maven-quiet-output.png)

Gratuluji, právě jste se stali programátorem 😊 To bude pro dnešek vše.

Projekt je přiložen jako soubor na konci článku, i u dalších tutoriálů bude vždy výsledek přiložen ke stažení. Doporučuji si ale nejprve projekt vytvořit pomocí tutoriálu a ke stažení se uchýlit jen v případě, když vám něco nepůjde. Pokud program hned jen stáhnete, nic se nenaučíte.

V příští lekci, [Proměnné a typový systém v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-promenne-typovy-system-a-parsovani), se podíváme na základní datové typy a vytvoříme si jednoduchý program vypisující proměnnou.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 3 - Proměnné a typový systém v Javě
Z minulé lekce, [Apache NetBeans, IntelliJ IDEA a první konzolová aplikace](https://www.itnetwork.cz/java/zaklady/java-tutorial-instalace-a-ovladani-netbeans-ide-konzolova-aplikace), již umíme pracovat s NetBeans, IntelliJ a vytvořit konzolovou aplikaci.

V dnešním Java tutoriálu se podíváme na tzv. **typový systém**, ukážeme si základní **datové typy** a práci s **proměnnými**. Výsledkem bude jednoduchý program vypisující proměnnou.

Proměnné
--------

Než začneme řešit datové typy, pojďme se shodnout na tom, co je to proměnná (programátoři mi teď jistě odpustí zbytečné vysvětlování). Určitě znáte z matematiky proměnnou (např. `x`), do které jsme si mohli uložit nějakou hodnotu, nejčastěji číslo. **Proměnná je v informatice naprosto to samé, je to místo v paměti počítače, kam si můžeme uložit nějaká data (jméno uživatele, aktuální čas nebo databázi článků).** Toto místo má podle typu proměnné také vyhrazenou určitou velikost, kterou proměnná nesmí přesáhnout (např. číslo nesmí být větší než 2 147 483 647).

Proměnná má vždy nějaký **datový typ**, může to být číslo, znak, text a podobně, záleží na tom, k čemu ji chceme používat. Většinou musíme před prací s proměnnou tuto proměnnou nejdříve tzv. **deklarovat**, čili říci jazyku jak se bude jmenovat a jakého datového typu bude (jaký v ní bude obsah). Jazyk ji v paměti založí a teprve potom s ní můžeme pracovat. Podle datového typu proměnné si ji jazyk dokáže z paměti načíst, modifikovat, případně ji v paměti založit. O každém datovém typu jazyk ví, kolik v paměti zabírá místa a jak s tímto kusem paměti pracovat.

Typový systém
-------------

Existují dva základní typové systémy, a to **statický** a **dynamický**.

### Dynamický typový systém

Dynamický typový systém nás plně odstiňuje od toho, že proměnná má vůbec nějaký datový typ. Ona ho samozřejmě vnitřně má, ale jazyk to nedává najevo. Dynamické typování jde mnohdy tak daleko, že proměnné nemusíme ani deklarovat, jakmile do nějaké proměnné něco uložíme a jazyk zjistí, že nebyla nikdy deklarována, sám ji založí. Do té samé proměnné můžeme ukládat text, potom objekt uživatele a potom desetinné číslo. Jazyk se s tím sám popere a vnitřně automaticky mění datový typ. V těchto jazycích jde vývoj rychleji díky menšímu množství kódu, zástupci jsou např. [PHP](https://www.itnetwork.cz/php) nebo Ruby.

### Statický typový systém

**Statický typový systém naopak striktně vyžaduje definovat typ proměnné a tento typ je dále neměnný.** Jakmile proměnnou jednou deklarujeme, není možné její datový typ změnit. Jakmile se do textového řetězce pokusíme uložit objekt `uzivatel`, dostaneme vynadáno.

**Java je staticky typovaný jazyk**, všechny proměnné musíme nejprve deklarovat s jejich datovým typem. Nevýhodou je, že díky deklaracím je zdrojový kód poněkud objemnější a vývoj pomalejší. Obrovskou výhodou však je, že nám kompiler před spuštěním zkontroluje, zda všechny datové typy sedí. Dynamické typování sice vypadá jako výhodné, ale zdrojový kód není možné automaticky kontrolovat a když někde očekáváme objekt uživatel a přijde nám tam místo toho desetinné číslo, odhalí se chyba až za běhu a interpret program shodí. Naopak Java nám nedovolí program ani zkompilovat a na chybu nás upozorní (to je další výhoda kompilace).

### Základní datové typy

Pojďme si nyní něco naprogramovat, ať si nabyté znalosti trochu osvojíme, s teorií budeme pokračovat až příště. Řekněme si nyní tři základní datové typy:

*   Celá čísla: `int`
*   Desetinná čísla: `double`
*   Textový řetězec: `String`

`String` píšeme s velkým písmenem na začátku, časem se dozvíme proč.

Program vypisující proměnnou
----------------------------

Založíme si nový projekt, pojmenujeme ho `Vypis` (i ke všem dalším příkladům si vždy založíme nový projekt). Náš kód píšeme do těla metody `main()`. Tu zde zatím nemáme. Umístíme tedy kurzor mezi složené závorky (do těla třídy `Vypis`) a napíšeme následující kód:

```
public static void main(String[] args) {

}
```


Následně si zkusíme nadeklarovat celočíselnou proměnnou `a`, dosadit do ní číslo `56` a její obsah vypsat do konzole:

```
{JAVA_CONSOLE}
int a;
a = 56;
System.out.println(a);
{/JAVA_CONSOLE}

```


### Deklarace proměnné

První příkaz nám nadeklaruje novou proměnnou `a` datového typu `int`, proměnná tedy bude sloužit pro ukládání celých čísel.

### Inicializace proměnné

Druhý příkaz provádí přiřazení do proměnné, slouží k tomu operátor "rovná se". Poslední příkaz je nám známý, vypíše do konzole obsah proměnné `a`. Konzole je chytrá a umí vypsat i číselné proměnné:

```
Konzolová aplikace
56
```


### Desetinná proměnná

Pro desetinnou proměnnou by kód vypadal takto:

```
{JAVA_CONSOLE}
double a;
a = 56.6;
System.out.println(a);
{/JAVA_CONSOLE}

```


Je to téměř stejné jako s celočíselnou proměnnou. Jako desetinný oddělovač používáme tečku. Na konci desetinného čísla se někdy uvádí ještě tzv. **suffix**, který u typu `double` používá písmeno `D`.

V dalších lekcích se dozvíme, že pro desetinná čísla existuje také typ `float`. U něj je nutné uvést suffix `F`. Typ `double` je **výchozím** typem pro desetinná čísla, suffix tedy u něj není nutné použít.

To je pro dnešní lekci vše 🙂

V příští lekci, [Načítání hodnot z konzole a parsování v Javě](https://www.itnetwork.cz/java/zaklady/parsovani-hodnot-v-jave), se podíváme na načítání hodnot z konzole, parsování dat a poté si vytvoříme jednoduchou kalkulačku.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 4 - Načítání hodnot z konzole a parsování v Javě
V minulé lekci Java kurzu, [Proměnné a typový systém v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-promenne-typovy-system-a-parsovani), jsme si ukázali základní datové typy, byly to `int`, `String` a `double`.

V dnešním Java tutoriálu se podíváme na **parsování** hodnot z konzole. Výsledkem bude několik jednoduchých programů včetně kalkulačky.

Program Papoušek
----------------

Zkusme do programu zapojit uživatele a nějak reagovat na jeho vstup. Napíšeme program _papoušek_, který bude dvakrát opakovat to, co uživatel napsal.

### Načtení textu z konzole

Ještě jsme nezkoušeli z konzole nic načítat. Slouží k tomu metoda `nextLine()`, která uživateli umožní zadat do konzole řádku textu a nám vrátí zadaný textový řetězec. Abychom mohli z konzole načítat, založíme si nový projekt s názvem `Papousek` a jeho kód upravíme tak, aby vypadal takto:

```
package cz.itnetwork.papousek;

import java.util.Scanner;

public class Papousek {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

    }
}
```


Pro názornost jsem vymazal šedou dokumentaci, ale klidně si ji tam nechte.

### Třída `Scanner`

Změna spočívá v importování `java.util.Scanner`, což nám umožňuje přístup k metodám pro vstup z konzole.

Konečně ten dlouhý řádek na začátku metody nedělá nic jiného, než že nám vytvoří proměnnou `scanner`, na které můžeme volat onu metodu `nextLine()`, která načte z konzole další řetězec. Vysvětlit si ho by bylo nyní příliš komplikované, berte ho jako že tam je, časem ho pochopíme.

**Pokud budete potřebovat v kterémkoli ze svých programů načíst text z konzole, je nutné program takto upravit a přidat instanci třídy `Scanner`!**

Nyní se přesuňme k samotnému kódu programu a upravme obsah metody `main()` do následující podoby:

```

package onlineapp;

import java.util.Scanner;
public class Program {
public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);
System.out.println("Ahoj, jsem virtuální papoušek Lóra, rád opakuji!");
System.out.println("Napiš něco: ");
String vstup;
vstup = scanner.nextLine();
String vystup;
vystup = vstup + ", " + vstup + "!";
System.out.println(vystup);

}
}


```


To už je trochu zábavnější ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) První řádek jsme ji již vysvětlili výše, další dva řádky jsou jasné (vypisují text). Dále deklarujeme textový řetězec `vstup`. Do proměnné `vstup` se přiřadí hodnota z metody `nextLine()` získanou z konzole, tedy to, co uživatel zadal. Pro výstup si pro názornost zakládáme další proměnnou `vystup` typu textový řetězec.

### Spojování řetězců

Zajímavé je, jak do proměnné `vystup` přiřadíme, tam využíváme tzv. **konkatenace** (spojování) řetězců. Pomocí operátoru `+` totiž můžeme spojit několik textových řetězců do jednoho a je jedno, jestli je řetězec v proměnné nebo je explicitně zadán v uvozovkách ve zdrojovém kódu. Do proměnné `vystup` tedy přiřadíme proměnnou `vstup`, dále čárku, znovu proměnnou `vstup` a poté vykřičník. Proměnnou vypíšeme a skončíme:

```
Konzolová aplikace
Ahoj, jsem virtuální papoušek Lóra, rád opakuji!
Napiš něco:
Nazdar ptáku
Nazdar ptáku, Nazdar ptáku!
```


Do proměnné můžeme přiřazovat hodnotu již v její deklaraci, můžeme tedy nahradit:

```
String vstup;
vstup = scanner.nextLine();
```


Za jeden řádek:

```
String vstup = scanner.nextLine();
```


Program by šel zkrátit ještě více v mnoha ohledech, ale obecně je lepší používat více proměnných a dodržovat přehlednost, než psát co nejkratší kód a po měsíci zapomenout, jak vůbec funguje.

Program zdvojnásobovač
----------------------

Zdvojnásobovač si vyžádá na vstupu číslo a to poté zdvojnásobí a vypíše. Asi bychom s dosavadními znalostmi napsali něco takového:

```
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo k zdvojnásobení:");
int cislo = scanner.nextLine();
cislo = cislo * 2;
System.out.println(cislo);
```


Všimněte si zdvojnásobení čísla `cislo`, které jsme provedli pomocí přiřazení. Java nám nyní vyhubuje a podtrhne řádek, ve kterém se snažíme hodnotu z konzole dostat do proměnné typu `int`. **Narážíme na typovou kontrolu**, konkrétně nám metoda `nextLine()` vrací datový typ `String` a my se ho snažíme uložit do proměnné typu `int`. Budeme ho potřebovat tzv. **naparsovat**.

### Parsování

Parsováním se myslí převod z textové podoby na nějaký specifický typ, např. číslo. Mnoho datových typů má v Javě již připraveny metody k parsování, pokud budeme chtít naparsovat např. datový typ `int` z datového typu `String`, budeme postupovat takto:

```
String hodnota = "56";
int cislo = Integer.parseInt(hodnota);
```


Metoda `parseInt()` se volá na třídě `Integer`, bere jako parametr textový řetězec a vrátí číslo. Využijeme této znalosti v našem programu:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo k zdvojnásobení:");
String hodnota = scanner.nextLine();
int cislo = Integer.parseInt(hodnota);
cislo = cislo * 2;
System.out.println(cislo);
{/JAVA_CONSOLE}

```


Nejprve si text z konzole uložíme do textového řetězce `hodnota`. Do celočíselné proměnné `cislo` poté uložíme číselnou hodnotu řetězce `hodnota`. Dále hodnotu v proměnné `cislo` zdvojnásobíme a vypíšeme do konzole:

```
Konzolová aplikace
Zadejte číslo k zdvojnásobení:
1024
2048
```


Parsování se samozřejmě nemusí povést, když bude v textu místo čísla např. slovo, ale tento případ zatím nebudeme ošetřovat.

Na skeneru existuje i metoda `nextInt()`, u které by se mohlo na první pohled zdát, že nám vrátí již naparsované číslo a tedy i ušetří práci. Ve skutečnosti tato metoda bohužel ponechá ve vstupu znak Enteru, kterým uživatel číslo potvrdil. Tento znak tam zůstane tak dlouho, dokud jej nenačtete z konzole spolu s dalším textem, což může způsobit neočekávané problémy ve vašich programech. Proto používejte ke čtení z konzole vždy metodu `nextLine()`.

Jednoduchá kalkulačka
---------------------

Ještě jsme nepracovali s desetinnými čísly, zkusme si napsat slibovanou kalkulačku. Bude velmi jednoduchá, na vstup přijdou dvě čísla, program poté vypíše výsledky pro sčítání, odčítání, násobení a dělení:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Vítejte v kalkulačce");
System.out.println("Zadejte první číslo:");
double a = Double.parseDouble(scanner.nextLine());
System.out.println("Zadejte druhé číslo:");
double b = Double.parseDouble(scanner.nextLine());
double soucet = a + b;
double rozdil = a - b;
double soucin = a * b;
double podil = a / b;
System.out.println("Součet: " + soucet);
System.out.println("Rozdíl: " + rozdil);
System.out.println("Součin: " + soucin);
System.out.println("Podíl: " + podil);
System.out.println("Děkuji za použití kalkulačky.");
{/JAVA_CONSOLE}

```


Po spuštění kalkulačky a zadání hodnot bude vypadat výstup takto:

```
Konzolová aplikace
Vítejte v kalkulačce
Zadejte první číslo:
3.14
Zadejte druhé číslo:
2.72
Součet: 5.86
Rozdíl: 0.42
Součin: 8.5408
Podíl: 1.15441176470588
Děkuji za použití kalkulačky.
```


Všimněte si dvou věcí:

*   Zaprvé jsme zjednodušili parsování z konzole tak, abychom nepotřebovali proměnnou typu `String`, protože bychom ji stejně již poté nepoužili.
*   Zadruhé na konci programu spojujeme řetězec s číslem pomocí znaménka plus.

Java při spojení řetězce s číslem překvapivě nezahlásí chybu, ale provede tzv. implicitní konverzi a zavolá na čísle metodu `Double.toString()` nebo přímo na typu `String` zavolá `String.valueOf()`. Kdyby tomu tak nebylo nebo jsme se dostali do situace, kdy potřebujeme převést cokoli na datový typ `String`, zavoláme metodu `String.valueOf()` a jako parametr ji dáme naši proměnnou. Java to v tomto případě udělala za nás, v podstatě vykoná:

```
System.out.println("Součet: " + String.valueOf(soucet));
```


Právě jsme se tedy naučili opak k parsování - převést cokoli do textové podoby.

Všechny programy máte samozřejmě opět v příloze, zkoušejte si vytvářet nějaké podobné, znalosti již k tomu máte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím kvízu, [Kvíz - Konzole a proměnné v Javě](https://www.itnetwork.cz/java/zaklady/kviz-konzole-promenne-java), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B38349%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522albZYGP4za%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)


# Řešené úlohy k 3.-4. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 3.-4. lekci Javy

[![](https://www.itnetwork.cz/images/651ac7f3c3aa9.jpg)](https://www.itnetwork.cz/api/Abc-Def/def/104)

[![](https://www.itnetwork.cz/images/651ac6a8be695.jpg)](https://www.itnetwork.cz/api/Abc-Def/def/102)

V předchozím kvízu, [Kvíz - Konzole a proměnné v Javě](https://www.itnetwork.cz/java/zaklady/kviz-konzole-promenne-java), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Následující tři cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Jan Eschner](https://www.itnetwork.cz/images/img/person.png)
    
    > Děkuji za tyto tutoriály. Chci se naučit programovat a živit se tím. Zatím se ve volném čase věnuji pouze 3D grafice. Nejvíce mi dal zabrat příklad č. 2, protože jsem to chtěl vyřešit jinak, než pomocí a \* a.
    
    Jan Eschner  
    
*   ![Pavol Kubek](https://www.itnetwork.cz/images/img/person.png)
    
    > 15 minút som sa trápil s posledným cvičením, napoly rozhodnutý prezrieť si hotový kód som skúsil posledný pokus a chvalabohu mi to prešlo. Robil som chybu, že som si hodnotu pi nenahodil samotne cez nový float, ale pri vytváraní floatu hotového výpočtu polomeru, som namiesto floatu "pi" nahadzoval 3,14 a dúfal som, že to java vypočíta. Očividne nie ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Ale fajn, nabudúce už takú chybu nespravím.
    
    Pavol Kubek  
    
*   ![krwell](https://www.itnetwork.cz/images/img/person.png)
    
    > Paráda, s tím 3. příkladem jsem se trochu trápil, ale pak když jsem se podíval na vzor, tak jsem pochopil, kde jsem dělal chybu. Zapomněl jsem totiž dát "Pí" jako desetinné číslo a proto mě to pořád házelo jinej výsledek. Díky za test ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    krwell  
    
*   ![Vanak](https://www.itnetwork.cz/images/img/person.png)
    
    > Opravdu pěkné, že takto uděláš i cvičení, přesně tohle jsem potřeboval! Jinak je zajímavé, že mám dost rozlišné řešení, přičemž výsledek je stejný ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Vanak  
    
*   ![Martin Krajči](https://www.itnetwork.cz/images/img/person.png)
    
    > Veľmi pekne ďakujem za príklady ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Hovorím si aké jednoduché a zrazu som asi pol hodinu nemohol spraviť 3. príklad .. nakoniec mi chýbalo "F" za 3.14 ![o_O](https://www.itnetwork.cz/images/img/smileys/confused.png)
    
    Martin Krajči  
    
*   ![David](https://www.itnetwork.cz/images/img/person.png)
    
    > Výborné příklady, musím se pochválit, zvládl jsem je docela rychle a vše funguje jak má, i bez stažení nápovědy, díky moc ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    David  
    
*   ![fudy](https://www.itnetwork.cz/images/img/person.png)
    
    > Ahoj,jsem tu nový a od včerejška se snažím zjistit co to obnáší programovat v Javě. Dnes jsem si udělal cvičení lekce3 a dost jsem se zapotil, než jsem něco zplodil, ale funguje to. Registroval jsem se dnes aby mě nesvrběly prsty a nechtěl jsem jen opisovat. Pro pobavení posílám zdroják (udělal jsem jeden pro všechny, protože to prý jde ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) ), aby bylo vidět co se dá vytvořit z úplného nevědomí.
    
    fudy  
    
*   ![Bob Fox](https://www.itnetwork.cz/images/img/person.png)
    
    > Výborná cvičeníčka. Bystří mozkové závity a na procvičení probraného, super. Díky!
    
    Bob Fox  
    
*   ![samuel.vain](https://www.itnetwork.cz/images/img/person.png)
    
    > Zajímavé příklady. Obzvlášť pak ten třetí, který mi dal pěkně zabrat, protože jsem nevěděl, jak mám tomu počítači vysvětlit, že má ze stringu udělat float ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    samuel.vain  
    
*   ![charliho](https://www.itnetwork.cz/images/img/person.png)
    
    > Super příklady, hodně pomohly... zvládnuté i bez nápovědy ![;)](https://www.itnetwork.cz/images/img/smileys/wink.png) poslední byl trošku težší ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Ale pomocí Math.PI je vše vyřešeno ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Díkys.
    
    charliho  
    

Jednoduchý příklad
------------------

Vytvořte program, který si na vstupu nechá zadat jméno uživatele a poté jeho vlastnost. Nakonec vypíše "jméno je vlastnost", viz obrázek.

Ukázka obrazovky programu:

```
Vlastnosti
Ahoj, jak se jmenuješ?
Bill Gates
Jaký jsi?
hustodémonsky bohatý
Bill Gates je hustodémonsky bohatý
```


```
{JAVA_CONSOLE}
        Scanner scanner = new Scanner(System.in);
        System.out.println("Ahoj, jak se jmenuješ?");

        // Zde dokonči úlohu svým kódem...
{/JAVA_CONSOLE}

```


Pokročilý příklad
-----------------

Vytvořte program, který si na vstupu vyžádá celé číslo a následně vypíše jeho druhou mocninu.

Ukázka obrazovky programu:

```
Mocnina
Zadej číslo k umocnění:
64
Výsledek: 4096
```


```
{JAVA_CONSOLE}
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej číslo k umocnění: ");

        // Zde dokonči úlohu svým kódem...
{/JAVA_CONSOLE}

```


Příklad pro náročné - BONUS
---------------------------

Vytvořte program, který si na vstupu vyžádá poloměr kruhu. Následně vypíše jeho obvod a obsah. Pro číslo Pí použijte hodnotu `3.1415`, aby vyšel přesný výsledek.

Ukázka obrazovky programu:

```
Kruh
Zadej poloměr kruhu (cm):
12.1
Obvod zadaného kruhu je: 76.0243 cm
Jeho obsah je: 459.94702 cm^2
```


```
{JAVA_CONSOLE}
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej poloměr kruhu (cm): ");

        // Zde dokonči úlohu svým kódem...
{/JAVA_CONSOLE}

```


V příští lekci, [Primitivní datové typy v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-typovy-system-podruhe-datove-typy-string), si řekneme více o typovém systému v Javě a představíme si další datové typy.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

### Stáhnout

Stažením následujícího souboru souhlasíš s [licenčními podmínkami](https://www.itnetwork.cz/licence)

[Stáhnout java\_cviceni\_konzole\_parsovani.zip](https://www.itnetwork.cz/api/Articles-Article/file/52372f76670b9)

Staženo 5286x (68 kB)  
Aplikace je včetně zdrojových kódů v jazyce Java

K absolvování tohoto cvičení prosím splň 2 libovolné příklady tím, že je úspěšně odevzdáš k otestování.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

Uživatelské hodnocení:

705 hlasů

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

[Vstoupit do diskuze (356 )](https://www.itnetwork.cz/diskuze/java/zaklady/java-resene-priklady-promenne-typy-parsovani)

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 5 - Primitivní datové typy v Javě
V předešlém cvičení, [Řešené úlohy k 3.-4. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-promenne-typy-parsovani), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Dnešní Java tutoriál bude hodně teoretický, podíváme se na datové typy více zblízka a vysvětlíme si, kdy jaký použít. Na konci si vytvoříme jednoduchou ukázku.

Datové typy
-----------

Java rozeznává dva druhy datových typů, **primitivní** a **referenční**.

### Primitivní datové typy

Proměnné primitivního datového typu si dokážeme jednoduše představit. Může se jednat např. o číslo nebo znak. V paměti je jednoduše uložena přímo hodnota a my k této hodnotě můžeme z programu přímo přistupovat. Slovo přímo jsem tolikrát nepoužil jen náhodou. V této sekci tutoriálů se budeme věnovat výhradně těmto proměnným.

#### Celočíselné datové typy

Podívejme se nyní na tabulku všech vestavěných celočíselných datových typů v Javě, všimněte si typu `int`, který již známe z minula:


|Datový typ|Rozsah                                                 |Velikost|
|----------|-------------------------------------------------------|--------|
|byte      |-128 až 127                                            |8 bitů  |
|short     |-32 768 až 32 767                                      |16 bitů |
|int       |-2 147 483 648 až 2 147 483 647                        |32 bitů |
|long      |-9 223 372 036 854 775 808 až 9 223 372 036 854 775 807|64 bitů |


Asi vás napadá otázka, proč máme tolik možných typů pro uložení čísla. Odpověď je prostá, záleží na jeho velikosti. Čím větší číslo, tím více spotřebuje paměti. Pro věk uživatele tedy zvolíme datový typ `byte`, protože se jistě nedožije více než 127 let. Představte si databázi milionu uživatelů nějakého systému, když zvolíme datový typ `int` místo `byte`, bude zabírat 4x více místa. Naopak, když budeme mít funkci k výpočtu faktoriálu, stěží nám bude stačit rozsah datový typ `int` a použijeme `long`.

Nad výběrem datového typu nemusíte moc přemýšlet a většinou se používá jednoduše `int`. Typ řešte pouze v případě, když jsou proměnné v nějakém poli (obecně kolekci) a je jich tedy více, potom se vyplatí zabývat se paměťovými nároky. Tabulky sem dávám spíše pro úplnost. Mezi typy samozřejmě funguje již zmíněná implicitní konverze, tedy můžeme přímo přiřadit datový typ `int` do proměnné typu `long` a podobně, aniž bychom něco konvertovali.

#### Desetinná čísla

U desetinných čísel je situace poněkud jednodušší, máme na výběr pouze dva datové typy. Samozřejmě se liší opět v rozsahu hodnoty, dále však ještě v přesnosti (vlastně počtu des. míst). Datový typ `double` má již dle názvu dvojnásobnou přesnost oproti `float`:


|Datový typ|Rozsah                         |Přesnost   |
|----------|-------------------------------|-----------|
|float     |+-1.5 * 10−45 až +-3.4 * 1038  |7 čísel    |
|double    |+-5.0 * 10−324 až +-1.7 * 10308|15-16 čísel|


Pozor, vzhledem k tomu, že desetinná čísla jsou v počítači uložena ve dvojkové soustavě, dochází k určité ztrátě přesnosti. Odchylka je sice téměř zanedbatelná, nicméně když budete programovat např. finanční systém, nepoužívejte tyto dat. typy pro uchování peněz, mohlo by dojít k malým odchylkám.

Když do typu `float` chceme dosadit přímo ve zdrojovém kódu, musíme použít suffix `F`, u typu `double` suffix `D`:

```
float f = 3.14F;
double d = 2.72;
```


U `double` ho můžeme vypustit, jelikož je výchozím desetinným typem.

Jako **desetinný separátor** používáme ve zdrojovém kódu **vždy tečku**, nehledě na to, jaké máme v operačním systému regionální nastavení.

#### Další vestavěné datové typy

Podívejme se na další datové typy, které nám Java nabízí:


|Datový typ|Rozsah          |Velikost/Přesnost|
|----------|----------------|-----------------|
|char      |U+0000 až U+ffff|16 bitů          |
|boolean   |true nebo false |8 bitů           |


##### Datový typ `char`

Typ `char` nám reprezentuje jeden znak na rozdíl od typu `String`, který reprezentoval celý řetězec znaků. Znaky v Javě píšeme do apostrofů:

```
char znak = 'A';
```


Typ `char` patří v podstatě do celočíselných proměnných (obsahuje číselný kód znaku), ale přišlo mi logičtější uvést ho zde.

##### Datový typ `BigDecimal`

Typ `BigDecimal` řeší problém ukládání desetinných čísel v binární podobě, ukládá totiž číslo vnitřně jako pole. **Používá se tedy pro uchování peněžních hodnot.** Nebudeme si zde ukazovat použití, protože se používá jako objekt. Pokud budete dělat někdy finanční výpočty, tak si na něj vzpomeňte.

V Javě jsou čísla tzv. odděděna od třídy `Number`. To je spíše informace do budoucna. Jelikož nyní nevíme, co dědičnost znamená, důležitá pro nás není. Třída `Number` obsahuje ještě čtyři podtřídy, kterými se nebudeme podrobněji zabývat. Třídy `BigDecimal` a `BigInteger` slouží k výpočtům s vysokou přesností. Třídy `AtomicInteger` a `AtomicLong` se používají v aplikacích s více podprocesy. Opět je důležité, abyste věděli, že něco takového existuje a případně se sem později vrátili.

##### Datový typ `boolean`

Typ `boolean` nabývá dvou hodnot: `true` (pravda) a `false` (nepravda). Budeme ho používat zejména tehdy, až se dostaneme k podmínkám. Do proměnné typu `boolean` lze uložit jak přímo hodnotu `true`/`false`, tak i logický výraz. Zkusme si jednoduchý příklad:

```
{JAVA_CONSOLE}
boolean nepravda = false;
boolean vyraz = (15 > 5);
System.out.println(nepravda);
System.out.println(vyraz);
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
false
true
```


Výrazy píšeme do závorek. Vidíme, že výraz nabývá hodnoty `true` (pravda), protože hodnota `15` je opravdu větší než `5`. Od výrazů je to jen krok k podmínkám, na ně se podíváme později v kurzu. To je pro dnešní lekci vše 🙂

V příští lekci, [Textové řetězce a referenční typy v Javě](https://www.itnetwork.cz/java/zaklady/typovy-system-potreti-referencni-datove-typy), se zaměříme na referenční datové typy, popíšeme si metody na řetězci a naučíme se s nimi pracovat.

# Lekce 6 - Textové řetězce a referenční typy v Javě
V minulé lekci, [Primitivní datové typy v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-typovy-system-podruhe-datove-typy-string), jsme si podrobně probrali datové typy.

V dnešním Java tutoriálu se podíváme na **referenční datové typy**. Popíšeme si vybrané metody datového typu `String` a v průběhu tutoriálu se s nimi naučíme pracovat.

Referenční datové typy
----------------------

K referenčním typům se dostaneme až u objektově orientovaného programování, kde si také vysvětlíme zásadní rozdíly. Zatím budeme pracovat jen s tak jednoduchými typy, že rozdíl nepoznáme. Spokojíme se s tím, že referenční typy jsou složitější, než ty primitivní. Jeden takový typ již známe, je jím `String`. Možná vás napadá, že `String` nemá nijak omezenou délku, je to tím, že s referenčními typy se v paměti pracuje jinak. **Referenční typy začínají na rozdíl od typů primitivních velkým písmenem.**

### Datový typ `String`

Datový typ `String` má na sobě řadu opravdu užitečných metod. Některé si teď probereme a vyzkoušíme.

#### Metody `startsWith()`, `endsWith()` a `contains()`

Můžeme se jednoduše zeptat, zda řetězec začíná, končí nebo zda obsahuje určitý podřetězec (substring). Podřetězcem myslíme část původního řetězce. Všechny tyto metody budou jako parametr brát samozřejmě podřetězec a vracet hodnoty typu `boolean` (`true`/`false`). Zatím na výstup neumíme reagovat, ale pojďme si ho alespoň vypsat:

```
{JAVA_CONSOLE}
String vstup = "Krokonosohroch";
System.out.println(vstup.startsWith("krok"));
System.out.println(vstup.endsWith("hroch"));
System.out.println(vstup.contains("nos"));
System.out.println(vstup.contains("roh"));
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
false
true
true
false
```


Vidíme, že vše funguje podle očekávání. První výraz samozřejmě neprošel díky tomu, že řetězec ve skutečnosti začíná velkým písmenem.

#### Metoda `isEmpty()`

Někdy se nám hodí vědět, zda je řetězec prázdný. To znamená, že jeho délka je `0` a neobsahuje žádný znak, ani např. mezeru. Takový řetězec můžeme získat např. tak, že uživatel nic nezadá do nějakého vstupu. Metoda `isEmpty()` nám vrátí `true` pokud je řetězec prázdný a `false` pokud není:

```
{JAVA_CONSOLE}
String mezera = " ";
String prazdnyRetezec = "";
String retezec = "slovo";
System.out.println(mezera.isEmpty());
System.out.println(prazdnyRetezec.isEmpty());
System.out.println(retezec.isEmpty());
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
false
true
false
```


#### Metody `toUpperCase()` a `toLowerCase()`

Rozlišování velkých a malých písmen může být někdy na obtíž. Mnohdy se budeme potřebovat zeptat na přítomnost podřetězce tak, aby nezáleželo na velikosti písmen. Situaci můžeme vyřešit pomocí metod `toUpperCase()` a `toLowerCase()`, které vrací řetězec ve velkých a v malých písmenech. Uveďme si reálnější příklad než je Krokonosohroch. Budeme mít v proměnné řádek konfiguračního souboru, který psal uživatel. Jelikož se na vstupy od uživatelů nelze spolehnout, musíme se snažit eliminovat možné chyby, zde např. s velkými písmeny:

```
{JAVA_CONSOLE}
String nastaveni = "Fullscreen shaDows autosave";
nastaveni = nastaveni.toLowerCase();
System.out.println("Poběží hra ve fullscreenu?");
System.out.println(nastaveni.contains("fullscreen"));
System.out.println("Budou zapnuté stíny?");
System.out.println(nastaveni.contains("shadows"));
System.out.println("Přeje si hráč vypnout zvuk?");
System.out.println(nastaveni.contains("nosound"));
System.out.println("Přeje si hráč hru automaticky ukládat?");
System.out.println(nastaveni.contains("autosave"));
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Poběží hra ve fullscreenu?
true
Budou zapnuté stíny?
true
Přeje si hráč vypnout zvuk?
false
Přeje si hráč hru automaticky ukládat?
true
```


Vidíme, že jsme schopni zjistit přítomnost jednotlivých slov v řetězci tak, že si nejprve řetězec převedeme celý na malá písmena (nebo na velká) a potom kontrolujeme přítomnost slova jen malými (nebo velkými) písmeny. Takhle by mimochodem mohlo opravdu vypadat jednoduché zpracování nějakého konfiguračního skriptu.

#### Metoda `trim()`

Další nástrahou mohou být mezery a obecně všechny tzv. bílé znaky, které nejsou vidět, ale mohou nám uškodit. Obecně může být dobré trimovat všechny vstupy od uživatele. Zkuste si v následující aplikaci před číslo a za číslo zadat několik mezer, `trim()` je odstraní. Odstraňují se vždy bílé znaky kolem řetězce, **nikoli uvnitř**:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo:");
String vstup = scanner.nextLine();
System.out.println("Zadal jste text: " + vstup);
System.out.println("Text po funkci trim: " + vstup.trim());
int cislo = Integer.parseInt(vstup.trim());
System.out.println("Převedl jsem zadaný text na číslo parsováním, zadal jste: " + cislo);
{/JAVA_CONSOLE}

```


#### Metoda `replace()`

Asi nejdůležitější metodou pro typ `String` je nahrazení určité jeho části jiným textem. Jako parametry zadáme dva podřetězce, jeden co chceme nahrazovat a druhý ten, kterým to chceme nahradit. Metoda vrátí nový `String`, ve kterém proběhlo nahrazení. Když daný podřetězec metoda nenajde, vrátí původní řetězec. Zkusme si to:

```
{JAVA_CONSOLE}
String veta = "C# je nejlepší!";
veta = veta.replace("C#", "Java");
System.out.println(veta);
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Java je nejlepší!
```


#### Metoda `format()`

Metoda `format()` je velmi užitečná metoda, která nám umožňuje vkládat do samotného textového řetězce zástupné značky. Ty jsou reprezentovány jako procento a zkratka datového typu. Metoda se volá na typu `String`, prvním parametrem je textový řetězec se značkami, další dále následují proměnné v tom pořadí, v kterém se mají do textu místo značek vložit. Všimněte si, že se metoda nevolá na konkrétní proměnné (přesněji instanci, viz další díly), ale přímo na typu `String`:

```
{JAVA_CONSOLE}
int a = 10;
int b = 20;
int soucet = a + b;
String veta = String.format("Když sečteme %d a %d, dostaneme %d", a, b, soucet);
System.out.println(veta);
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Když sečteme 10 a 20, dostaneme 30
```


Značky jsou:

*   `%d` pro celá čísla,
*   `%s` pro `String`,
*   `%f` pro `float` nebo `double` (reálná čísla). Můžeme taktéž definovat délku desetinné části, např. `%.2f` pro dvě desetinná místa.

Konzole sama umí přijímat text v takovémto formátu, jen musíme místo metody `println()` volat `printf()`. Můžeme tedy napsat:

```
{JAVA_CONSOLE}
int a = 10;
int b = 20;
int soucet = a + b;
System.out.printf("Když sečteme %d a %d, dostaneme %d", a, b, soucet);
{/JAVA_CONSOLE}

```


Toto je velmi užitečná a přehledná cesta, jak sestavovat řetězce, i přesto se však v Javě řetězce spojují spíše pomocí operátoru `+`.

Metoda `printf()` bere v potaz lokalizaci systému a může namísto desetinné tečky vypsat desetinnou čárku. Dejte si tedy pozor, že očekávaný výstup desetinných čísel na různých platformách (jazycích) nemusí být úplně totožný.

#### Metoda `length()`

Poslední, ale nejdůležitější, je metoda `length()`, tedy délka. Vrací celé číslo, které představuje počet znaků v řetězci:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte vaše jméno:");
String jmeno = scanner.nextLine();
System.out.printf("Délka vašeho jména je: %d", jmeno.length());
{/JAVA_CONSOLE}

```


Je toho ještě spoustu k vysvětlování a jsou další datové typy, které jsme neprobrali. K řetězcům se ještě vrátíme později v kurzu 😉

V následujícím cvičení, [Řešené úlohy k 5.-6. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-datove-typy), si procvičíme nabyté zkušenosti z předchozích lekcí.

# Řešené úlohy k 5.-6. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 5.-6. lekci Javy

V minulé lekci, [Textové řetězce a referenční typy v Javě](https://www.itnetwork.cz/java/zaklady/typovy-system-potreti-referencni-datove-typy), jsme se zaměřili na referenční datové typy a pracovali s metodami na řetězci.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Pavol Kubek](https://www.itnetwork.cz/images/img/person.png)
    
    > Dík za príklady, dosť to pomáha, ponamáhať mozgové závity a pre zmenu neprepisovať kód ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Na stredne pokročilom príklade som pochopil krásu programovania. Trápil som sa so syntaxom asi 15 minút, ale prekonal som sa a nestiahol riešenie. Bolo mi skoro do plaču a nakoniec som zistil, že v poslednom riadku kódu som nenapísal správne odkaz k intu. Namiesto %d som napísal len %. Keď to v poriadku prešlo a ukázalo správny výsledok, to bol krásny pocit ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Pavol Kubek  
    
*   ![Petra](https://www.itnetwork.cz/images/img/person.png)
    
    > Ahoj, díky za tutoriály. Vždy se snažím udělat všechna cvičení a zatím to nebyl problém, vždy se mi nějakým způsobem podařilo dorazit do cíle. V tom je ale ten problém, ta cesta kterou jdu určitě není nejjednodušší a s největší pravděpodobností ani nejelegantnější ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Doufám, že časem získám větší jistotu a moje "výtvory" nebudou tak kostrbaté, složité a zbytečně dlouhé.
    
    Petra  
    
*   ![krwell](https://www.itnetwork.cz/images/img/person.png)
    
    > Díky moc za cvičení. Docela jsem se trápil s tím druhým příkladem, ale nakonec jsem na to přišel, ale za to ten poslední mi zabral pár minutek ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    krwell  
    
*   ![David](https://www.itnetwork.cz/images/img/person.png)
    
    > Výborně, musím říct, že ten nejlehčí jsem dělal nejdéle a ten nejtěžší jsem měl skoro hned ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Super, díky.
    
    David  
    

Jednoduchý příklad
------------------

Vytvořte program, který si na vstupu nechá zadat

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma datové typy a textové řetězce. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 7 - Podmínky (větvení) v Javě
V předešlém cvičení, [Řešené úlohy k 5.-6. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-datove-typy), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Abychom si něco naprogramovali, potřebujeme nějak reagovat na různé situace. Může to být například hodnota zadaná uživatelem, podle které budeme chtít měnit další běh programu. Říkáme, že se program větví a k větvení používáme podmínky, těm se budeme věnovat celý dnešní Java tutoriál. Vytvoříme program na výpočet odmocniny a vylepšíme naši kalkulačku.

Podmínky - `if`
---------------

Podmínky zapisujeme pomocí klíčového slova `if`, za kterým následuje logický výraz. Pokud je výraz pravdivý, provede se následující příkaz. Pokud ne, následující příkaz se přeskočí a pokračuje se až pod ním. Příkazy píšeme vždy do složených závorek. Vyzkoušejme si to:

```
{JAVA_CONSOLE}
if (15 > 5) {
    System.out.println("Pravda");
}
System.out.println("Program zde pokračuje dál");
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Pravda
Program zde pokračuje dál
```


Pokud podmínka platí (což zde ano), provede se příkaz vypisující do konzole text `Pravda`. V obou případech program pokračuje dál. Součástí výrazu samozřejmě může být i proměnná:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo");
int cislo = Integer.parseInt(scanner.nextLine());
if (cislo > 5) {
    System.out.println("Zadal jsi číslo větší než 5!");
}
System.out.println("Děkuji za zadání");
{/JAVA_CONSOLE}

```


### Relační operátory

Ukažme si nyní relační operátory, které můžeme ve výrazech používat:


|Operátor           |C-like zápis|
|-------------------|------------|
|Rovnost            |==          |
|Je ostře větší     |>           |
|Je ostře menší     |<           |
|Je větší nebo rovno|>=          |
|Je menší nebo rovno|<=          |
|Nerovnost          |!=          |
|Obecná negace      |!           |


Rovnost zapisujeme dvěma `==` proto, aby se to nepletlo s běžným přiřazením do proměnné, které se dělá jen jedním `=`. Pokud chceme nějaký výraz znegovat, napíšeme ho do závorky a před něj vykřičník.

### Blok příkazů

Když budeme chtít vykonat více než jen jeden příkaz, musíme příkazy vložit do bloku ze složených závorek:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo, ze kterého spočítám odmocninu:");
int zaklad = Integer.parseInt(scanner.nextLine());
if (zaklad >= 0) {
    System.out.println("Zadal jsi číslo větší nebo rovno 0, to znamená, že ho mohu odmocnit!");
    double odmocnina = Math.sqrt(zaklad);
    System.out.println("Odmocnina z čísla " + zaklad + " je " + odmocnina);
}
System.out.println("Děkuji za zadání");
{/JAVA_CONSOLE}

```


Po spuštění programu a zadání hodnot bude vypadat výstup takto:

```
Konzolová aplikace
Zadej nějaké číslo, ze kterého spočítám odmocninu:
144
Zadal jsi číslo větší nebo rovno 0, to znamená, že ho mohu odmocnit!
Odmocnina z čísla 144 je 12.0
Děkuji za zadání
```


Nezapomeňte si naimportovat `java.util.Scanner`, aby program znal třídu `Scanner`.

Často můžete vidět použití bloku i v případě, že je pod podmínkou jen jeden příkaz, mnohdy je to totiž přehlednější.

Program načte od uživatele číslo a pokud je větší než `0`, vypočítá z něj druhou odmocninu. Mimo jiné jsme použili třídu `Math`, která na sobě obsahuje řadu užitečných matematických metod, někdy si ji blíže představíme. Metoda `sqrt()` vrací hodnotu jako double.

### Větev `else`

Bylo by hezké, kdyby nám program vyhuboval v případě, že zadáme záporné číslo. S dosavadními znalostmi bychom napsali něco jako:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo, ze kterého spočítám odmocninu:");
int zaklad = Integer.parseInt(scanner.nextLine());
if (zaklad >= 0) {
    System.out.println("Zadal jsi číslo větší nebo rovno 0, to znamená, že ho mohu odmocnit!");
    double odmocnina = Math.sqrt(zaklad);
    System.out.println("Odmocnina z čísla " + zaklad + " je " + odmocnina);
}
if (zaklad < 0) {
    System.out.println("Odmocnina ze záporného čísla neexistuje v oboru reálných čísel!");
}
System.out.println("Děkuji za zadání");
{/JAVA_CONSOLE}

```


Kód však můžeme výrazně zjednodušit pomocí klíčového slova `else`, které vykoná následující příkaz nebo blok příkazů **v případě, že se podmínka neprovede**:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo, ze kterého spočítám odmocninu:");
int zaklad = Integer.parseInt(scanner.nextLine());
if (zaklad >= 0) {
    System.out.println("Zadal jsi číslo větší nebo rovno 0, to znamená, že ho mohu odmocnit!");
    double odmocnina = Math.sqrt(zaklad);
    System.out.println("Odmocnina z čísla " + zaklad + " je " + odmocnina);
}
else {
    System.out.println("Odmocnina ze záporného čísla neexistuje v oboru reálných čísel!");
}
System.out.println("Děkuji za zadání");
{/JAVA_CONSOLE}

```


Kód je mnohem přehlednější a nemusíme vymýšlet opačnou podmínku, což by v případě složené podmínky mohlo být někdy i velmi obtížné. V případě více příkazů by byl za `else` opět blok `{ }`.

Klíčové slovo `else` se také využívá v případě, kdy potřebujeme v příkazu manipulovat s proměnnou z podmínky a nemůžeme se na ni tedy ptát potom znovu. Program si sám pamatuje, že se podmínka nesplnila a přejde do sekce `else`. Ukažme si to na příkladu.

### Prohození hodnot proměnné

Mějme proměnnou `cislo`, kde bude hodnota `0` nebo `1` a po nás se bude chtít, abychom hodnotu prohodili (pokud tam je `0`, dáme tam `1`, pokud `1`, dáme tam `0`). Naivně bychom mohli kód napsat takto:

```
{JAVA_CONSOLE}
int cislo = 0; // do proměnné si přiřadíme na začátku 0

if (cislo == 0) { // pokud je cislo 0, dáme do něj jedničku
    cislo = 1;
}
if (cislo == 1) { // pokud je cislo 1, dáme do něj nulu
    cislo = 0;
}

System.out.println(cislo);
{/JAVA_CONSOLE}

```


Nefunguje to, že? Pojďme si projet, co bude program dělat. Na začátku máme v `cislo` nulu, první podmínka se jistě splní a dosadí do `cislo` jedničku. No ale rázem se splní i ta druhá. Co s tím? Když podmínky otočíme, budeme mít ten samý problém s jedničkou. Jak z toho ven? Ano, použijeme `else`:

```
{JAVA_CONSOLE}
int cislo = 0; // do proměnné si přiřadíme na začátku 0

if (cislo == 0) { // pokud je cislo 0, dáme do něj jedničku
    cislo = 1;
}
else { // pokud je cislo 1, dáme do něj nulu
    cislo = 0;
}

System.out.println(cislo);
{/JAVA_CONSOLE}

```


Program máte samozřejmě opět v příloze, zkoušejte si vytvářet nějaké podobné, znalosti již k tomu máte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V příští lekci, [Podmínky (větvení) podruhé: Konstrukce switch v Javě](https://www.itnetwork.cz/java/zaklady/podminky-vetveni-podruhe-konstrukce-switch-v-jave), se naučíme skládat podmínky pomocí logických operátorů. Dále se podíváme na využití konstrukce `switch`.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 8 - Podmínky (větvení) podruhé: Konstrukce switch v Javě
V minulé lekci, [Podmínky (větvení) v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-podminky-vetveni-if-switch), jsme si vysvětlili podmínky.

V dnešním Java tutoriálu se naučíme skládat podmínky za pomoci logických operátorů. Následně se podíváme na konstrukci `switch` a vytvoříme jednoduchou kalkulačku.

Skládání podmínek
-----------------

Podmínky je možné skládat, a to pomocí dvou základních **logických operátorů**:


|Operátor |C-like Zápis|
|---------|------------|
|A zároveň|&&          |
|Nebo     |||          |


Uveďme si jednoduchý příklad:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo v rozmezí 10-20:");
int cislo = Integer.parseInt(scanner.nextLine());
if ((cislo >= 10) && (cislo <= 20)) {
    System.out.println("Zadal jsi správně");
} else {
    System.out.println("Zadal jsi špatně");
}
{/JAVA_CONSOLE}

```


S tím si zatím vystačíme, operátory se pomocí závorek samozřejmě dají kombinovat:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo v rozmezí 10-20 nebo 30-40:");
int cislo = Integer.parseInt(scanner.nextLine());
if (((cislo >= 10) && (cislo <= 20)) || ((cislo >= 30) && (cislo <= 40))) {
    System.out.println("Zadal jsi správně");
} else {
    System.out.println("Zadal jsi špatně");
}
{/JAVA_CONSOLE}

```


Switch
------

Konstrukce `switch` je převzatá z jazyka [C](https://www.itnetwork.cz/cecko) (jako většina gramatiky Javy). Umožňuje nám zjednodušit (relativně) zápis více podmínek pod sebou. Vzpomeňme si na naši kalkulačku v prvních lekcích, která načetla 2 čísla a vypočítala všechny 4 operace. Nyní si ale budeme chtít zvolit, kterou operaci chceme. Bez konstrukce `switch` bychom napsali kód podobný tomuto:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Vítejte v kalkulačce");
System.out.println("Zadejte první číslo:");
double a = Double.parseDouble(scanner.nextLine());
System.out.println("Zadejte druhé číslo:");
double b = Double.parseDouble(scanner.nextLine());
System.out.println("Zvolte si operaci:");
System.out.println("1 - sčítání");
System.out.println("2 - odčítání");
System.out.println("3 - násobení");
System.out.println("4 - dělení");
int volba = Integer.parseInt(scanner.nextLine());
double vysledek = 0;
if (volba == 1) {
        vysledek = a + b;
} else if (volba == 2) {
        vysledek = a - b;
} else if (volba == 3) {
        vysledek = a * b;
} else if (volba == 4) {
        vysledek = a / b;
}
if ((volba > 0) && (volba < 5)) {
        System.out.println("Výsledek: " + vysledek);
} else {
        System.out.println("Neplatná volba");
}
System.out.println();
System.out.println("Děkuji za použití kalkulačky.");
{/JAVA_CONSOLE}

```


Po spuštění kalkulačky a zadání hodnot bude vypadat výstup takto:

```
Konzolová aplikace
Vítejte v kalkulačce
Zadejte první číslo:
3.14
Zadejte druhé číslo:
2.72
Zvolte si operaci:
1 - sčítání
2 - odčítání
3 - násobení
4 - dělení
2
Výsledek: 0.42
Děkuji za použití kalkulačky.
```


**Všimněte si, že jsme proměnnou výsledek deklarovali na začátku, jen tak do ni můžeme potom přiřazovat.** Kdybychom ji deklarovali u každého přiřazení, Java by kód nezkompilovala a vyhodila chybu redeklarace proměnné. **Důležité je také přiřadit výsledku nějakou výchozí hodnotu**, zde nula, jinak by nám Java vyhubovala, že se snažíme vypsat proměnnou, která nebyla jednoznačně inicializována. Proměnná může být deklarována (založena v paměti) vždy jen jednou.

Další vychytávka je kontrola správnosti volby. Program by v tomto případě fungoval stejně i bez těch `else`, ale nač se dále ptát, když již máme výsledek.

Nyní si zkusíme napsat ten samý kód pomocí konstrukce `switch`:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Vítejte v kalkulačce");
System.out.println("Zadejte první číslo:");
double a = Double.parseDouble(scanner.nextLine());
System.out.println("Zadejte druhé číslo:");
double b = Double.parseDouble(scanner.nextLine());
System.out.println("Zvolte si operaci:");
System.out.println("1 - sčítání");
System.out.println("2 - odčítání");
System.out.println("3 - násobení");
System.out.println("4 - dělení");
int volba = Integer.parseInt(scanner.nextLine());
double vysledek = 0;
switch (volba) {
    case 1:
        vysledek = a + b;
        break;
    case 2:
        vysledek = a - b;
        break;
    case 3:
        vysledek = a * b;
        break;
    case 4:
        vysledek = a / b;
        break;
}
if ((volba > 0) && (volba < 5)) {
    System.out.println("Výsledek: " + vysledek);
} else {
    System.out.println("Neplatná volba");
}
System.out.println();
System.out.println("Děkuji za použití kalkulačky.");
{/JAVA_CONSOLE}

```


**Vidíme, že kód je trochu přehlednější.** Pokud bychom potřebovali v nějaké větvi `switch` spustit více příkazů, překvapivě je nebudeme psát do bloku, ale rovnou pod sebe. Blok `{}` nám zde nahrazuje příkaz `break`, který způsobí vyskočení z celé konstrukce `switch`. Konstrukce `switch` může místo možnosti `case x:` obsahovat ještě možnost `default:`, která se vykoná v případě, že nebude platit žádný `case`.

Je jen na vás, jestli budete konstrukci `switch` používat, obecně se vyplatí jen při větším množství příkazů a vždy jde nahradit sekvencí `if` a `else`. Nezapomínejte na klíčové slovo `break`. Konstrukce `switch` je v Javě podporován i pro hodnoty proměnné `String`, a to od Javy 7.

V následujícím cvičení, [Řešené úlohy k 7.-8. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-podminky), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 7.-8. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 7.-8. lekci Javy

V minulé lekci, [Podmínky (větvení) podruhé: Konstrukce switch v Javě](https://www.itnetwork.cz/java/zaklady/podminky-vetveni-podruhe-konstrukce-switch-v-jave), jsme se naučili skládat podmínky pomocí logických operátorů.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![stairn](https://www.itnetwork.cz/images/img/person.png)
    
    > Ahoj, mockrát díky za článek ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) K druhému úkolu: ten nos se dá elegantně vyřešit propadávajícím se case(záměrně nebudeme používat break ![;)](https://www.itnetwork.cz/images/img/smileys/wink.png)
    
    stairn  
    
*   ![Marek111](https://www.itnetwork.cz/images/img/person.png)
    
    > Musím říct, že tohle je perfektní tutoriál Javy. Je to záživný, zajímavý, pro začátečníka se něco děje - dává to hned výstup a je skvělý, že u každýho dílu jsou cvičení. Mnohem lepší než jak nás učili Javu na vysoký, tleskám tomu, kdo tohle sepsal ![;-)](https://www.itnetwork.cz/images/img/smileys/wink.png)
    
    Marek111  
    
*   ![lazenska.wewerka](https://www.itnetwork.cz/images/img/person.png)
    
    > Poslední cvičení by zasluhovalo opakovací lekci matematiky základní školy ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    lazenska.wewerka  
    

Jednoduchý příklad
------------------

Vytvořte program, který si na vstupu nechá zadat

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma podmínky, větvení a switch. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 9 - Cyklus for v Javě
V předešlém cvičení, [Řešené úlohy k 7.-8. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-podminky), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Nyní přejdeme k cyklům, po dnešním Java tutoriálu již budeme mít téměř kompletní výbavu **základních konstrukcí** a budeme schopni **programovat rozumné aplikace** v Javě.

Cykly
-----

Jak již slovo cyklus napoví, něco se bude opakovat. Když chceme v programu něco udělat 100x, jistě nebudeme psát pod sebe 100x ten samý kód, ale vložíme ho do cyklu. Cyklů máme několik druhů, vysvětlíme si, kdy který použít. Samozřejmě si ukážeme praktické příklady.

### Cyklus `for`

Tento cyklus má stanovený **pevný počet opakování** a hlavně obsahuje tzv. **řídící proměnnou** (celočíselnou), ve které se postupně během běhu cyklu mění hodnoty. Syntaxe (zápis) cyklu `for` je následující:

```
for (promenna; podminka; prikaz)
```


*   `promenna` je řídící proměnná cyklu, které nastavíme počáteční hodnotu (nejčastěji `0`, protože v programování vše začíná od nuly, nikoli od jedničky). Např. tedy `int i = 0`. Samozřejmě si můžeme proměnnou `i` vytvořit někde nad cyklem a už nemusíme psát slovíčko `int`, bývá ale zvykem používat právě `int i`.
*   `podminka` je podmínka vykonání dalšího kroku cyklu. Jakmile nebude platit, cyklus se ukončí. Podmínka může být např (`i < 10`).
*   `prikaz` nám říká, co se má v každém kroku s řídící proměnnou stát. Tedy zda se má zvýšit nebo snížit. K tomu využijeme speciálních operátorů `++` a `--`, ty samozřejmě můžete používat i úplně běžně mimo cyklus, slouží ke zvýšení nebo snížení proměnné o `1`.

#### Příklady užití cyklu

Pojďme si udělat několik jednoduchých příkladů na procvičení `for` cyklu.

##### Klepání na dveře

Většina z nás jistě zná Sheldona z The Big Bang Theory. Pro ty co ne, budeme simulovat situaci, kdy klepe na dveře své sousedky. Vždy 3x zaklepe a poté zavolá: "Penny!". Náš kód by bez cyklů vypadal takto:

```
{JAVA_CONSOLE}
System.out.println("Knock");
System.out.println("Knock");
System.out.println("Knock");
System.out.println("Penny!");
{/JAVA_CONSOLE}

```


My ale už nic nemusíme otrocky opisovat:

```
{JAVA_CONSOLE}
for (int i = 0; i < 3; i++) {
    System.out.println("Knock");
}
System.out.println("Penny!");
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Knock
Knock
Knock
Penny!
```


Cyklus proběhne 3x, zpočátku je v proměnné `i` nula, cyklus vypíše `Knock` a zvýší proměnnou `i` o jedna. Poté běží stejně s jedničkou a dvojkou. Jakmile je v proměnné `i` trojka, již nesouhlasí podmínka `i < 3` a cyklus končí. O vynechávání složených závorek platí to samé, co u podmínek. V tomto případě tam nemusí být, protože cyklus spouští pouze jediný příkaz. Nyní můžeme místo trojky napsat do deklarace cyklu desítku.

##### Řada

Příkaz se spustí 10x aniž bychom psali něco navíc. Určitě vidíte, že cykly jsou mocným nástrojem.

Zkusme si nyní využít toho, že se nám proměnná inkrementuje. Vypišme si čísla od jedné do deseti a za každým mezeru:

```
{JAVA_CONSOLE}
for (int i = 1; i <= 10; i++) {
    System.out.printf("%d ", i);
}
{/JAVA_CONSOLE}

```


Vidíme, že řídící proměnná má opravdu v každé iteraci (průběhu) jinou hodnotu.

Pokud vás zmátlo použití metody `printf()`, můžeme místo ní použít pouze metodu `print()`, která na rozdíl od metody `println()` po vypsání neodřádkuje:

```
{JAVA_CONSOLE}
for (int i = 1; i <= 10; i++) {
    System.out.print(i + " ");
}
{/JAVA_CONSOLE}

```


##### Malá násobilka

Nyní si vypíšeme malou násobilku (násobky čísel `1` až `10`, vždy do deseti). Stačí nám udělat cyklus od `1` do `10` a proměnnou vždy násobit daným číslem. Mohlo by to vypadat asi takto:

```
{JAVA_CONSOLE}
for (int i = 1; i <= 10; i++) {
    System.out.print(i + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 2) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 3) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 4) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 5) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 6) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 7) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 8) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 9) + " ");
}
System.out.println();
for (int i = 1; i <= 10; i++) {
    System.out.print((i * 10) + " ");
}
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
1 2 3 4 5 6 7 8 9 10
2 4 6 8 10 12 14 16 18 20
3 6 9 12 15 18 21 24 27 30
4 8 12 16 20 24 28 32 36 40
5 10 15 20 25 30 35 40 45 50
6 12 18 24 30 36 42 48 54 60
7 14 21 28 35 42 49 56 63 70
8 16 24 32 40 48 56 64 72 80
9 18 27 36 45 54 63 72 81 90
10 20 30 40 50 60 70 80 90 100
```


Program funguje hezky, ale pořád jsme toho dost napsali. Pokud vás napadlo, že v podstatě děláme 10x to samé a pouze zvyšujeme číslo, kterým násobíme, máte pravdu. Nic nám nebrání vložit dva cykly do sebe:

```
{JAVA_CONSOLE}
System.out.println("Malá násobilka pomocí dvou cyklů:");
for (int j = 1; j <= 10; j++) {
    for (int i = 1; i <= 10; i++) {
        System.out.print((i * j) + " ");
    }
    System.out.println();
}
{/JAVA_CONSOLE}

```


Poměrně zásadní rozdíl, že? Pochopitelně **nemůžeme** použít u obou cyklů proměnnou `i`, protože jsou vložené do sebe. Proměnná `j` nabývá ve vnějším cyklu hodnoty `1` až `10`. V každé iteraci (rozumějte průběhu) cyklu je poté spuštěn další cyklus s proměnnou `i`. Ten je nám již známý, vypíše násobky, v tomto případě násobíme proměnnou `j`. Po každém běhu vnitřního cyklu je třeba odřádkovat, to vykoná metoda `System.out.println()`.

##### Mocnina čísla

Udělejme si ještě jeden program, na kterém si ukážeme práci s vnější proměnnou. Aplikace bude umět spočítat mocninu s přirozeným exponentem:

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Mocninátor");
System.out.println("==========");
System.out.println("Zadejte základ mocniny: ");
int zaklad = Integer.parseInt(scanner.nextLine());
System.out.println("Zadejte exponent: ");
int exponent = Integer.parseInt(scanner.nextLine());

int vysledek = 1;
for (int i = 0; i < exponent; i++) {
    vysledek = vysledek * zaklad;
}

System.out.println("Výsledek: " + vysledek);
System.out.println("Děkuji za použití mocninátoru");
{/JAVA_CONSOLE}

```


Asi všichni tušíme, jak funguje mocnina. Pro jistotu připomenu, že například **23 = 2 \* 2 \* 2**. Tedy **an** spočítáme tak, že si vytvoříme proměnnou s hodnotou `1`. To je výsledek, který bychom dostali při nulovém exponentu **20 = 1**. Pokud bude exponent `0`, cyklus se nespustí. V opačném případě budeme naši proměnnou postupně v cyklu násobit `n` krát `a` a výsledek si budeme postupně ukládat. Pokud jste to nestihli, máme tu samozřejmě [lekci s algoritmem výpočtu libovolné mocniny](https://www.itnetwork.cz/algoritmy/matematicke/algoritmus-vypocet-libovolne-nte-mocniny). Vidíme, že naše proměnná `vysledek` je v těle cyklu normálně přístupná. Pokud si však nějakou proměnnou založíme v těle cyklu, po skončení cyklu zanikne a již nebude přístupná:

```
Konzolová aplikace
Mocninátor
==========
Zadejte základ mocniny:
2
Zadejte exponent:
3
Výsledek: 8
Děkuji za použití mocninátoru
```


Už tušíme, k čemu se cyklus `for` využívá. Zapamatujme si, že je **počet opakování pevně daný**.

##### Ukázka zacyklení

Do proměnné cyklu bychom neměli nijak zasahovat ani dosazovat, program by se mohl tzv. **zacyklit**. Zkusme si ještě poslední, odstrašující příklad:

```
{JAVA_CONSOLE}
// tento kód je špatně
for (int i = 1; i <= 10; i++) {
    i = 1;
}
{/JAVA_CONSOLE}
```


Au, vidíme, že program se zasekl. Cyklus stále inkrementuje proměnnou `i`, ale ta se vždy sníží na hodnotu `1`. Nikdy tedy nedosáhne hodnoty `> 10`, cyklus nikdy neskončí. Program zastavíme tlačítkem _Stop_ u okna konzole. To je pro dnešní lekci vše 🙂

V příští lekci, [Cyklus while v Javě](https://www.itnetwork.cz/java/zaklady/cyklus-while-v-jave), se budeme ještě věnovat cyklům. Naučíme se používat `while` cyklus a vylepšíme naši kalkulačku.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 10 - Cyklus while v Javě
V minulé lekci, [Cyklus for v Javě](https://www.itnetwork.cz/java/zaklady/java-tutorial-cykly-for-while), jsme si v našem Java seriálu ukázali práci s `for` cyklem.

V dnešním Java tutoriálu se naučíme používat cyklus `while` a poté vylepšíme program kalkulačky.

Cyklus `while`
--------------

Cyklus `while` funguje trochu jinak než cyklus `for`. Jednoduše opakuje příkazy v bloku dokud platí podmínka. Syntaxe cyklu je následující:

```
while (podminka) {
    
}
```


Pokud vás napadá, že lze přes cyklus `while` udělat i cyklus `for`, máte pravdu ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Cyklus `for` je vlastně **speciální případ** cyklu `while`. Cyklus `while` se ale používá na trochu jiné věci, často máme v jeho podmínce např. **metodu vracející logickou hodnotu** `true`/`false`.

### Příklady užití cyklu

Pojďme si udělat několik jednoduchých příkladů na procvičení cyklu `while`.

#### Řada

Pomocí cyklu `while` bychom udělali číselnou řadu následovně:

```
{JAVA_CONSOLE}
int i = 1;
while (i <= 10) {
    System.out.print(i + " ");
    i++;
}
{/JAVA_CONSOLE}

```


**To ale není ideální použití cyklu `while`.**

#### Kalkulačka

Jako další si vezmeme naši kalkulačku z minulých lekcí a opět ji trochu vylepšíme, konkrétně o možnost zadat více příkladů. Program tedy hned neskončí, ale zeptá se uživatele, zda si přeje spočítat další příklad. Připomeňme si původní verzi kódu (je to ta verze s konstrukcí `switch`, ale klidně použijte i tu bez, záleží na vás):

```
{JAVA_CONSOLE}
Scanner scanner = new Scanner(System.in);
System.out.println("Vítejte v kalkulačce");
System.out.println("Zadejte první číslo:");
double a = Double.parseDouble(scanner.nextLine());
System.out.println("Zadejte druhé číslo:");
double b = Double.parseDouble(scanner.nextLine());
System.out.println("Zvolte si operaci:");
System.out.println("1 - sčítání");
System.out.println("2 - odčítání");
System.out.println("3 - násobení");
System.out.println("4 - dělení");
int volba = Integer.parseInt(scanner.nextLine());
double vysledek = 0;
switch (volba) {
    case 1:
        vysledek = a + b;
        break;
    case 2:
        vysledek = a - b;
        break;
    case 3:
        vysledek = a * b;
        break;
    case 4:
        vysledek = a / b;
        break;
}
if ((volba > 0) && (volba < 5)) {
        System.out.println("Výsledek: " + vysledek);
} else {
        System.out.println("Neplatná volba");
}
System.out.println("Děkuji za použití kalkulačky.");
{/JAVA_CONSOLE}

```


Nyní vložíme téměř celý kód do cyklu `while`. Naší podmínkou bude, že uživatel zadá `ano`, budeme tedy kontrolovat obsah proměnné `pokracovat`. Zpočátku bude tato proměnná nastavena na hodnotu `ano`, aby se program vůbec spustil, poté do ní necháme načíst volbu uživatele:

```
Scanner scanner = new Scanner(System.in);

System.out.println("Vítejte v kalkulačce");
String pokracovat = "ano";
while (pokracovat.equals("ano")) {
    System.out.println("Zadejte první číslo:");
    double a = Double.parseDouble(scanner.nextLine());
    System.out.println("Zadejte druhé číslo:");
    double b = Double.parseDouble(scanner.nextLine());
    System.out.println("Zvolte si operaci:");
    System.out.println("1 - sčítání");
    System.out.println("2 - odčítání");
    System.out.println("3 - násobení");
    System.out.println("4 - dělení");
    int volba = Integer.parseInt(scanner.nextLine());
    double vysledek = 0;
    switch (volba) {
        case 1:
                vysledek = a + b;
                break;
        case 2:
                vysledek = a - b;
                break;
        case 3:
                vysledek = a * b;
                break;
        case 4:
                vysledek = a / b;
                break;
    }
    if ((volba > 0) && (volba < 5)) {
        System.out.println("Výsledek: " + vysledek);
    } else {
        System.out.println("Neplatná volba");
    }
    System.out.println("Přejete si zadat další příklad? [ano/ne]");
    pokracovat = scanner.nextLine();
}
System.out.println("Děkuji za použití kalkulačky.");
```


Všimněte si, že proměnné datové typu `String` porovnáváme pomocí metody `equals()`, nikoli pomocí operátoru `==`! Je to dáno tím, že `String` je **referenční datový typ**. Metoda `equals()` tedy v našem případě zjistí, zda se proměnná `pokracovat` rovná textovému řetězci `ano`.

Podmínka `("Text" == "Text")` je špatně, musíme psát `("Text".equals("Text"))`. V kapitole o objektově orientovaném programování pochopíme proč.

Výstup programu:

```
Konzolová aplikace
Vítejte v kalkulačce
Zadejte první číslo:
12
Zadejte druhé číslo:
128
Zvolte si operaci:
1 - sčítání
2 - odčítání
3 - násobení
4 - dělení
1
Výsledek: 140
Přejete si zadat další příklad? [ano/ne]
ano
Zadejte první číslo:
-10.5
Zadejte druhé číslo:
```


Naši aplikaci lze nyní používat vícekrát a je již téměř hotová. Již toho umíme docela dost, začíná to být zábava, že? ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím cvičení, [Řešené úlohy k 9.-10. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-cykly), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 9.-10. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 9.-10. lekci Javy

V minulé lekci, [Cyklus while v Javě](https://www.itnetwork.cz/java/zaklady/cyklus-while-v-jave), jsme se věnovali cyklům. Ukázali jsme si práci s `while` cyklem a vylepšili naši kalkulačku.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Kenny007](https://www.itnetwork.cz/images/img/person.png)
    
    > Tak jsem úspěšně zvládl cestu až k cyklům. Musím se přiznat, že ta vychytávka s "tvarem věty" v lahvích mne nenapadla. Šel jsem na to jinak a ještě jsem přidal zadání počtu: Čím dál víc zjišťuju že v Javě se vše nechá dělat několika způsoby ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Jinak ti děkuju za tutoriál, který dokážu pochopit i já, tyhle stránky jsou k nezaplacení.
    
    Kenny007  
    
*   ![mok1](https://www.itnetwork.cz/images/img/person.png)
    
    > Ahoj, tak to, že som tušil, že to mám napísané zložitejšie, ako by mohlo byť, sa ukázalo pravdou, tie moje podmienky postihujú prípady ktoré sa nikdy nestanú (vymedzene ľavej hodnoty intervalu v podmienke). Ručná kontrola ukazuje, že výsledok je správny, ale Tvoj kód sa mi páči viac ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    mok1  
    

Jednoduchý příklad
------------------

Vytvořte program, který se uživatele zeptá, kolik

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma cykly, zejména for cyklus. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 11 - Pole v Javě
V předešlém cvičení, [Řešené úlohy k 9.-10. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-cykly), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním Java tutoriálu si představíme **datovou strukturu pole** a vyzkoušíme si, co všechno umí.

Pole
----

Představte si, že si chcete uložit nějaké údaje o více prvcích. Například chcete v paměti uchovávat 10 čísel, políčka šachovnice nebo jména padesáti uživatelů. Asi vám dojde, že v programování bude nějaká lepší cesta, než začít bušit proměnné `uzivatel1`, `uzivatel2`, ... až `uzivatel50`. Nehledě na to, že jich může být třeba 1000! A jak by se v tom potom hledalo? Brrr, takhle ne ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud potřebujeme uchovávat **větší množství proměnných stejného typu**, tento problém nám řeší **pole**. Můžeme si ho představit jako řadu přihrádek, kde v každé máme uložený jeden prvek. Přihrádky jsou očíslované tzv. **indexy**, první má index `0`:

![Struktura pole - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/csp/pole.png)

_(Na obrázku je vidět pole osmi čísel.)_

Programovací jazyky se velmi liší v tom, jak s polem pracují. V některých jazycích (zejména starších, kompilovaných) nebylo možné za běhu programu vytvořit pole s dynamickou velikostí (např. mu dát velikost dle nějaké proměnné). Pole se muselo deklarovat s konstantní velikostí přímo ve zdrojovém kódu. Toto se obcházelo tzv. pointery a vlastními datovými strukturami, což často vedlo k chybám při manuální správě paměti a nestabilitě programu (např. v [C++](https://www.itnetwork.cz/cplusplus)). Naopak některé interpretované jazyky umožňují nejen deklarovat pole s libovolnou velikostí, ale dokonce tuto velikost na již existujícím poli měnit (např. PHP). My víme, že Java je virtuální stroj, tedy cosi mezi kompilerem a interpretem. Proto můžeme pole založit s velikostí, kterou dynamicky zadáme až za běhu programu, ale velikost existujícího pole modifikovat nemůžeme. Lze to samozřejmě obejít nebo použít jiné datové struktury, ale k tomu se dostaneme.

### Výhody pole

Možná vás napadá, proč se tu zabýváme s polem, když má evidentně mnoho omezení a existují lepší datové struktury. Odpověď je prostá: **pole je totiž jednoduché**. Nemyslím pro nás na pochopení (to také), ale zejména pro Javu. **Rychle se s ním pracuje**, protože prvky jsou v paměti jednoduše uloženy za sebou, **všechny prvky zabírají stejně místa a rychle se k nim přistupuje**. Mnoho vnitřních funkčností v Javě proto nějak pracuje s polem nebo pole vrací. **Je to klíčová struktura.**

Pro hromadnou manipulaci s prvky pole se používají cykly.

### Práce s polem

V několika dalších krocích si deklarujeme pole, následně ho založíme a na závěr naplníme vlastními daty.

#### Deklarace pole

Pole deklarujeme pomocí hranatých závorek:

```
int[] cisla;
```


Slovo `cisla` je samozřejmě název naší proměnné. Nyní jsme však pouze deklarovali, že v proměnné bude pole prvků typu `int`. Nyní ho musíme založit, abychom ho mohli používat. Pole pojmenováváme **vždy množným číslem** podle toho, co pole obsahuje.

#### Založení pole

K založení použijeme klíčové slovo `new`, které zatím nebudeme vysvětlovat. Spokojme se s tím, že je to kvůli tomu, že je pole referenční datový typ (můžeme chápat jako složitější typ):

```
int[] cisla = new int[10];
```


Nyní máme v proměnné `cisla` pole o velikosti deseti čísel typu `int`.

#### Přístup k prvkům pole

K prvkům pole potom přistupujeme přes hranatou závorku, pojďme na první index (tedy index `0`) uložit číslo `1`:

```
int[] cisla = new int[10];
cisla[0] = 1;
```


#### Naplnění pole cyklem

Plnit pole ručně daty by bylo příliš pracné, použijeme **cyklus** a naplníme si pole čísly od `1` do `10`. K naplnění použijeme cyklus `for`:

```
int[] cisla = new int[10];
for (int i = 0; i < 10; i++) {
    cisla[i] = i + 1;
}
```


Abychom pole vypsali, můžeme za předchozí kód připsat:

```
{JAVA_CONSOLE}

int[] cisla = new int[10];
for (int i = 0; i < 10; i++) {
    cisla[i] = i + 1;
}

for (int i = 0; i < cisla.length; i++) {
    System.out.print(cisla[i] + " ");
}
{/JAVA_CONSOLE}

```


Všimněte si, že pole má konstantu `length`, kde je uložena jeho délka, tedy počet prvků.

Výstup programu:

```
Konzolová aplikace
1 2 3 4 5 6 7 8 9 10
```


#### Cyklus _foreach_

Můžeme použít zjednodušenou verzi cyklu pro práci s kolekcemi, známou jako tzv. _foreach_. Ten projede všechny prvky v poli a jeho délku si zjistí sám. Jeho syntaxe je následující:

```
for (datovytyp promenna : kolekce) {
    
}
```


Cyklus projede prvky v kolekci (to je obecný název pro struktury, které obsahují více prvků, u nás to bude pole) postupně od prvního do posledního. Prvek máme v každé iteraci cyklu uložený v dané proměnné.

Přepišme tedy náš dosavadní program pro cyklus _foreach_. Cyklus _foreach_ **nemá řídící proměnnou**, není tedy vhodný pro vytvoření našeho pole a použijeme ho jen pro výpis:

```
{JAVA_CONSOLE}
int[] cisla = new int[10];
for (int i = 0; i < 10; i++) {
    cisla[i] = i + 1;
}
for (int cislo : cisla) {
    System.out.print(cislo + " ");
}
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
1 2 3 4 5 6 7 8 9 10
```


#### Naplnění pole ručně

Pole samozřejmě můžeme naplnit ručně a to i bez toho, abychom dosazovali postupně do každého indexu. Použijeme k tomu složených závorek a prvky oddělujeme čárkou:

```
String[] simpsonovi = {"Homer", "Marge", "Bart", "Lisa", "Maggie"};
```


Pole často slouží k ukládání mezivýsledků, které se potom dále v programu používají. Když něco potřebujeme 10x, tak to nebudeme 10x počítat, ale spočítáme to jednou a uložíme do pole, odtud poté výsledek jen načteme.

Metody na třídě `Arrays`
------------------------

Java nám poskytuje třídu `Arrays`, která obsahuje pomocné metody pro práci s poli.

K jejímu použití je třeba ji naimportovat:

```
import java.util.Arrays;
```


Pojďme se na metody podívat:

### Metoda `sort()`

Jak již název napovídá, metoda `sort()` nám pole seřadí. Její jediný parametr je pole, které chceme seřadit. Metoda je dokonce tak chytrá, že pracuje podle toho, co máme v poli uložené. Řetězce třídí podle abecedy, čísla podle velikosti. Zkusme si seřadit a vypsat naši rodinku Simpsonů:

```

package onlineapp;

import java.util.Arrays;

public class Program {

public static void main(String[] args) {

String[] simpsonovi = {"Homer", "Marge", "Bart", "Lisa", "Maggie"};
Arrays.sort(simpsonovi);
for (String simpson : simpsonovi) {
    System.out.print(simpson + " ");
}

}
}


```


Výstup programu:

```
Konzolová aplikace
Bart Homer Lisa Maggie Marge
```


Zkuste si udělat pole čísel a vyzkoušejte si, že to opravdu funguje i pro ně.

### Metoda `binarySearch()`

Když pole seřadíme, umožní nám v něm Java vyhledávat prvky. Metoda `binarySearch()` nám vrátí index prvního nalezeného prvku. V případě nenalezení prvku vrátí metoda hodnotu `-1`. Metoda bere dva parametry, prvním je pole, druhým hledaný prvek. Umožníme uživateli zadat jméno Simpsona a poté zkontrolujeme, zda je to opravdu Simpson:

```

package onlineapp;

import java.util.Arrays;
import java.util.Scanner;

public class Program {

public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);

String[] simpsonovi = {"Homer", "Marge", "Bart", "Lisa", "Maggie"};
System.out.println("Zadej Simpsona (z rodiny Simpsonů): ");
String simpson = scanner.nextLine();

Arrays.sort(simpsonovi);
int pozice = Arrays.binarySearch(simpsonovi, simpson);
if (pozice >= 0) {
        System.out.println("Jo, to je Simpson!");
}
else {
        System.out.println("Hele, tohle není Simpson!");
}

}
}


```


**Pole musí být opravdu setříděné, než metodu zavoláme!**

Výstup programu:

```
Konzolová aplikace
Zadej Simpsona (z rodiny Simpsonů):
Homer
Jo, to je Simpson!
```


### Metoda `copyOfRange()`

Metoda `copyOfRange()` již podle názvu zkopíruje část pole do jiného pole. Prvním parametrem je zdrojové pole, druhým startovní pozice a třetím konečná pozice. Metoda vrací nové pole, které je výsekem původního pole.

Proměnná délka pole
-------------------

Říkali jsme si, že délku pole můžeme definovat i za běhu programu, pojďme si to zkusit:

```
Scanner scanner = new Scanner(System.in);

System.out.println("Ahoj, spočítám ti průměr známek. Kolik známek zadáš?");
int pocetZnamek = Integer.parseInt(scanner.nextLine());
int[] znamky = new int[pocetZnamek];
for (int i = 0; i < pocetZnamek; i++) {
        System.out.printf("Zadejte %d. číslo:%n", i + 1);
        znamky[i] = Integer.parseInt(scanner.nextLine());
}

int soucet = 0;
for (int znamka : znamky) {
        soucet += znamka;
}
double prumer = soucet / (double)znamky.length;

System.out.printf("Průměr tvých známek je: %.1f", prumer);
```


Příkaz `soucet += znamka` je pouze zkrácený zápis pro `soucet = soucet + znamka`.

Při výpisu jsme použili výraz `%n`. Tento výraz nám zajistí, ať máme nezávisle na platformě nový řádek. Na platformě MacOS to například automaticky nahradí za znaky `\r`. Alternativně můžeme využít například znaky `\n`, ale je možné, že to na nějaké platformě nový řádek nevytvoří.

Výstup programu:

```
Konzolová aplikace
Ahoj, spočítám ti průměr známek. Kolik známek zadáš?
5
Zadejte 1. číslo: 1
Zadejte 2. číslo: 2
Zadejte 3. číslo: 2
Zadejte 4. číslo: 3
Zadejte 5. číslo: 5
Průměr tvých známek je: 2.6
```


Tento příklad by šel samozřejmě napsat i bez použití pole, ale co kdybychom chtěli spočítat např. medián? Nebo vypsat zadaná čísla pozpátku? To už by bez pole nešlo. Takhle máme k dispozici v poli původní hodnoty a můžeme s nimi neomezeně a jednoduše pracovat.

U výpočtu průměru si všimněte, že při dělení je před jedním operandem napsáno `(double)`, tím říkáme, že chceme dělit neceločíselně. Při dělení `3 / 2` dostaneme výsledek `1` a při dělení `3 / 2.0F` dostaneme výsledek `1.5`. Druhé číslo musí být vždy reálné, aby Java dělila taktéž reálně (na více desetinných míst).

To by pro dnešek stačilo, můžete si s polem hrát.

V následujícím kvízu, [Kvíz - Podmínky, cykly a pole v Javě](https://www.itnetwork.cz/java/zaklady/kviz-podminky-cykly-pole-java), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B38455%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522QpKuwB7nfs%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Řešené úlohy k 11. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 11. lekci Javy

V předchozím kvízu, [Kvíz - Podmínky, cykly a pole v Javě](https://www.itnetwork.cz/java/zaklady/kviz-podminky-cykly-pole-java), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Vytvořte program, který naplní

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma pole a foreach cyklus. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

https://www.itnetwork.cz/java/zaklady/nejcastejsi-chyby-java-novacku-umis-pojmenovat-promenne

# Lekce 13 - Textové řetězce v Javě podruhé - Práce s jednotlivými znaky
V minulé lekci, [Nejčastější chyby Java nováčků - Umíš pojmenovat proměnné?](https://www.itnetwork.cz/java/zaklady/nejcastejsi-chyby-java-novacku-umis-pojmenovat-promenne), jsme si ukázali nejčastější chyby začátečníků v Javě ohledně pojmenování proměnných.

V dnešním Java tutoriálu se budeme zabývat přístupem k jednotlivým znakům textového řetězce.

Textový řetězec
---------------

Pokud jste vycítili nějakou podobnost mezi polem a textovým řetězcem, tak jste vycítili správně. Pro ostatní může být překvapením, že **`String` je v podstatě pole znaků (`char`)** a můžeme s ním i takto pracovat. Pro přístup k jednotlivým znakům slouží metoda `charAt(index)`, kde `index` udává index znaku v řetězci (počínaje `0`). Opačně pro zjištění indexu zadaného znaku slouží metoda `indexOf(znak)`, kde `znak` je hledaný znak. Tato metoda vrací index prvního výskytu daného znaku a pokud jej v řetězci nenajde vrátí hodnotu `-1`.

Nejprve si vyzkoušejme, že to všechno funguje. Rozcvičíme se na jednoduchém vypsání znaku na dané pozici:

```
{JAVA_CONSOLE}
String jazyk = "Java";
System.out.println(jazyk);
System.out.println(jazyk.charAt(2));
{/JAVA_CONSOLE}

```


Výstup:

```
Konzolová aplikace
Java
v
```


A nyní se podíváme na zjištění indexu zadaného znaku:

```
{JAVA_CONSOLE}
String jazyk = "Java";
System.out.println(jazyk);
System.out.println(jazyk.indexOf('v'));
{/JAVA_CONSOLE}

```


Výstup:

```
Konzolová aplikace
Java
2
```


Znaky na dané pozici jsou v Javě **read-only**, nemůžeme je tedy jednoduše změnit.

Samozřejmě to jde udělat jinak, později si to ukážeme, zatím se budeme věnovat pouze čtení jednotlivých znaků.

Analýza výskytu znaků ve větě
-----------------------------

Napišme si jednoduchý program, který nám analyzuje zadanou větu. Bude nás zajímat počet samohlásek, souhlásek a počet nepísmenných znaků (např. mezera nebo `!`).

Daný textový řetězec si nejprve v programu zadáme napevno, abychom ho nemuseli při každém spuštění psát. Až bude program hotový, nahradíme ho metodou `scanner.nextLine()`. Řetězec budeme projíždět cyklem po jednom znaku. Rovnou zde říkám, že neapelujeme na rychlost programu a budeme volit názorná a jednoduchá řešení.

Nejprve si připravme kód, definujme si samohlásky a souhlásky. Počet ostatních znaků nemusíme počítat, bude to délka řetězce mínus samohlásky a souhlásky. Abychom nemuseli řešit velikost písmen, celý řetězec na začátku převedeme na malá písmena. Připravme si proměnné, do kterých budeme ukládat jednotlivé počty:

```

String hora = "Mount Everest";
System.out.println(hora);
hora = hora.toLowerCase();


int pocetSamohlasek = 0;
int pocetSouhlasek = 0;


String samohlasky = "aeiouyáéěíóúůý";
String souhlasky = "bcčdďfghjklmnpqrřsštťvwxzž";


for (char znak : hora.toCharArray()) {

}
```


Protože se jedná o složitější kód, nebudeme zapomínat na komentáře.

Zpočátku si připravíme řetězec a převedeme ho na malá písmena. Počítadla vynulujeme. Na definice znaků nám postačí obyčejný typ `String`. Hlavní cyklus nám projede jednotlivé znaky v řetězci `hora`. Abychom mohli znaky iterovat (procházet cyklem), musíme si typ `String` převést na pole znaků. V úvodu jsem říkal, že typ `String` vlastně pole znaků je, ale ne plnohodnotné. Obsahuje něco navíc a něco mu chybí, např. možnost prvky iterovat cyklem. V cyklu tedy na proměnnou `hora` zavoláme metodu `toCharArray()`, která vrátí plnohodnotné pole znaků z řetězce `hora`. V každé iteraci cyklu bude v proměnné `znak` aktuální znak řetězce `hora`.

Pojďme plnit počítadla, pro jednoduchost již nebudu opisovat zbytek kódu a přesunu se jen k cyklu:

```

for (char znak : hora.toCharArray()) {
    if (samohlasky.contains(String.valueOf(znak))) {
        pocetSamohlasek++;
    } else if (souhlasky.contains(String.valueOf(znak))) {
        pocetSouhlasek++;
    }
}
```


Metodu `contains()` na řetězci již známe, jako parametr ji lze předat podřetězec. Bohužel nemůžeme předat znak `char`, musíme tedy znak převést na `String`. K tomu slouží výše uvedená metoda `valueOf()`. Daný znak `c` naší věty tedy nejprve zkusíme vyhledat v řetězce `samohlasky` a případně zvýšit jejich počítadlo. Pokud v samohláskách není, podíváme se do souhlásek a případně opětovně zvýšíme jejich počítadlo. Nyní nám chybí již jen výpis na konec. V textu použijeme speciální sekvenci znaků `%n` (nebo `\n`), ta způsobí odřádkování. Použitím sekvence `%n` (namísto `\n`) zajistíme cross-platform kompatibilitu. Java tedy odřádkuje správně jak na MacOS, tak třeba na Windows:

```
{JAVA_CONSOLE}

// řetězec, který chceme analyzovat
String hora = "Mount Everest";
System.out.println(hora);
hora = hora.toLowerCase();

// inicializace počítadel
int pocetSamohlasek = 0;
int pocetSouhlasek = 0;

// definice typů znaků
String samohlasky = "aeiouyáéěíóúůý";
String souhlasky = "bcčdďfghjklmnpqrřsštťvwxzž";

// hlavní cyklus
for (char znak : hora.toCharArray()) {
    if (samohlasky.contains(String.valueOf(znak))) {
        pocetSamohlasek++;
    } else if (souhlasky.contains(String.valueOf(znak))) {
        pocetSouhlasek++;
    }
}

System.out.printf("Samohlásek: %d%n", pocetSamohlasek);
System.out.printf("Souhlásek: %d%n", pocetSouhlasek);
System.out.printf("Nepísmenných znaků: %d%n", hora.length() - (pocetSamohlasek + pocetSouhlasek));
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Mount Everest
Samohlásek: 5
Souhlásek: 7
Nepísmenných znaků: 1
```


A je to!

ASCII hodnota
-------------

Možná jste již někdy slyšeli o ASCII tabulce. Zejména v éře operačního systému MS-DOS prakticky nebyla jiná možnost, jak zaznamenávat text. Jednotlivé znaky byly uloženy jako čísla typu `byte`, tedy s rozsahem hodnot od `0` do `255`. V systému byla uložena tzv. ASCII tabulka, která měla také 256 znaků a každému ASCII kódu (číselnému kódu) přiřazovala jeden znak.

Asi je vám jasné, proč tento způsob nepřetrval dodnes. Do tabulky se jednoduše nevešly všechny znaky všech národních abeced, nyní se používá Unicode (UTF-8) kódování, kde jsou znaky reprezentovány trochu jiným způsobem. Nicméně v Javě máme stále možnost pracovat s ASCII hodnotami jednotlivých znaků. Hlavní výhoda je v tom, že znaky jsou uloženy v tabulce za sebou, podle abecedy. Např. na pozici `97` nalezneme znak `a`, na pozici `98` znak `b` a podobně. Podobně je to s čísly, diakritické znaky tam budou bohužel jen nějak rozházeny.

Zkusme si nyní převést znak do jeho ASCII hodnoty a naopak podle ASCII hodnoty daný znak vytvořit:

```
{JAVA_CONSOLE}
char znak; // znak
int hodnotaAscii; // ordinální (ASCII) hodnota znaku
// převedeme znak na jeho ASCII hodnotu
znak = 'a';
hodnotaAscii = (int)znak;
System.out.printf("Znak %c jsme převedli na ASCII hodnotu %d%n", znak, hodnotaAscii);
// Převedeme ASCII hodnotu na znak
hodnotaAscii = 98;
znak = (char)hodnotaAscii;
System.out.printf("ASCII hodnotu %d jsme převedli na znak %c", hodnotaAscii, znak);
{/JAVA_CONSOLE}

```


Převodům se říká **přetypování**, ale o tom se blíže pobavíme až později.

### Caesarova šifra

Vytvoříme si jednoduchý program pro šifrování textu. Pokud jste někdy slyšeli o Caesarově šifře, bude to přesně to, co si zde naprogramujeme. Šifrování textu spočívá v posouvání znaku v abecedě o určitý, pevně stanovený, počet znaků. Například slovo `ahoj` se s posunem textu o `1` přeloží jako `"bipk"`. Posun umožníme uživateli vybrat. Algoritmus zde máme samozřejmě opět vysvětlený a to v článku [Caesarova šifra](https://www.itnetwork.cz/algoritmy/ostatni/algoritmy-ukazka-jednoduche-sifrace-textu-caesarova-sifrace-textu). Program si dokonce můžete vyzkoušet v praxi - [Online caesarova šifra](https://www.itnetwork.cz/jednoducha-sifrace-textu-php-caesarova-sifra).

Vraťme se k programování a připravme si kód. Budeme potřebovat proměnné pro původní text, zašifrovanou zprávu a pro posun. Dále cyklus projíždějící jednotlivé znaky a výpis zašifrované zprávy. Zprávu si necháme zapsanou napevno v kódu, abychom ji nemuseli při každém spuštění programu psát. Po dokončení nahradíme obsah proměnné metodou `scanner.nextLine()`. Šifra nepočítá s diakritikou, mezerami a interpunkčními znaménky. Diakritiku budeme bojkotovat a budeme předpokládat, že ji uživatel nebude zadávat. Ideálně bychom poté měli diakritiku před šifrováním odstranit, stejně tak cokoli kromě písmen:

```

String puvodniZprava = "gaiusjuliuscaesar";
System.out.printf("Původní zpráva: %s%n", puvodniZprava);
String zasifrovanaZprava = "";
int posun = 1;


for (char znak : puvodniZprava.toCharArray()) {

}


System.out.printf("Zašifrovaná zpráva: %s%n", zasifrovanaZprava);
```


Nyní se přesuneme dovnitř cyklu, převedeme proměnnou se znakem `znak` na ASCII hodnotu (neboli ordinální hodnotu), tuto hodnotu zvýšíme o `posun` a převedeme zpět na znak. Tento znak nakonec připojíme k výsledné zprávě:

```
{JAVA_CONSOLE}

// inicializace proměnných
String puvodniZprava = "gaiusjuliuscaesar";
System.out.printf("Původní zpráva: %s%n", puvodniZprava);
String zasifrovanaZprava = "";
int posun = 1;

// cyklus projíždějící jednotlivé znaky
for (char znak : puvodniZprava.toCharArray()) {

int ascii = (int)znak;
ascii += posun;
znak = (char)ascii;
zasifrovanaZprava += znak;

}

// výpis
System.out.printf("Zašifrovaná zpráva: %s%n", zasifrovanaZprava);

{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Původní zpráva: gaiusjuliuscaesar
Zašifrovaná zpráva: hbjvtkvmjvtdbftbs
```


Program si vyzkoušíme. Výsledek vypadá docela dobře. Zkusme si však zadat vyšší posun nebo napsat slovo `zebra`. Vidíme, že znaky mohou po `z` přetéct do ASCII hodnot dalších znaků, v textu tedy již nemáme jen písmena, ale další ošklivé znaky. Uzavřeme znaky do kruhu tak, aby posun plynule po znaku `z` přešel opět ke znaku `a` a dále. Postačí nám k tomu jednoduchá podmínka, která od nové ASCII hodnoty odečte celou abecedu tak, abychom začínali opět na `a`:

```
int ascii = (int)znak;
ascii += posun;

if (ascii > (int)'z') {
    ascii -= 26;
}
znak = (char)ascii;
zprava += znak;
```


Pokud `hodnota` přesáhne ASCII hodnotu `'z'`, snížíme ji o `26` znaků (tolik znaků má anglická abeceda). Operátor `-=` vykoná to samé, jako bychom napsali `hodnota = hodnota - 26`. Je to jednoduché a náš program je nyní funkční. Všimněme si, že nikde nepoužíváme přímé kódy znaků, v podmínce je `(int)z`, i když bychom tam mohli napsat rovnou `122`. Je to z důvodu, aby byl náš program plně odstíněn od explicitních ASCII hodnot a bylo lépe viditelné, jak funguje. Cvičně si zkuste udělat dešifrování ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím cvičení, [Řešené úlohy k 13. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-textove-retezce-podruhe), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 13. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 13. lekci Javy

V minulé lekci, [Textové řetězce v Javě podruhé - Práce s jednotlivými znaky](https://www.itnetwork.cz/java/zaklady/java-tutorial-textove-retezce-podruhe-prace-se-znaky), jsme si ukázali, že `String` je vlastně pole znaků.

Následující tři cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Johnny Cook](https://www.itnetwork.cz/images/img/person.png)
    
    > Musím říct, že třetí úloha byla zatím nejzábavnější ze všech. Tak jdu pokračovat na další lekce.
    
    Johnny Cook  
    
*   ![Miroslav Hudák](https://www.itnetwork.cz/images/img/person.png)
    
    > Takoj i mne še podarelo pokročili priklad, ta dufam že dobre, robi to co ma podľa vypisu co sce tam ukazaty ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Miroslav Hudák  
    
*   ![Lubor Pešek](https://www.itnetwork.cz/images/img/person.png)
    
    > Ahoj, trošku bych vás chtěl navnadit jak u toho přemýšlet, protože spousta z vás používá postup, který se vám jednou vymstí (jako kdysi mě:) ) Nepište kód řádek po řádku, ale nejdříve si situaci analyzujte a potom nebudou vaše kódy vypadat tak zmateně + často deklarujete některé proměnné zbytečně + chybí vám komentáře (u malých projektů to až tak nevadí, ale počítejte, že jednou budou vaše kódy obsahovat takových 100 000 až 1000 000 řádků v x třídách a pak se v tom vyznejte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) )
    
    Lubor Pešek  
    
*   ![Petr Beneš](https://www.itnetwork.cz/images/img/person.png)
    
    > Taky se pochlubím svým výtvorem. Hodinu jsem se u rozčiloval, proč mi to nevypisuje to slovo obráceně, dokud jsem nezjistil, že mám špatně cyklus (obrácené znaménko <) ![:-)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Petr Beneš  
    

Jednoduchý příklad
------------------

V minulém tutoriálu jsme si říkali o existenci ASCII tabulky. Ta obsahuje

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma práce se znaky v textových řetězcích. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 14 - Textové řetězce v Javě do třetice - Split a join
V předešlém cvičení, [Řešené úlohy k 13. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-textove-retezce-podruhe), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním Java tutoriálu si vysvětlíme další metody na řetězci, které jsem vám záměrně zatajil, protože jsme nevěděli, že textový řetězec je vlastně pole ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Metody na řetězci
-----------------

Když si vytvoříme libovolnou proměnnou a napíšeme za ni poté tečku, zobrazí nám IDE nabídku všech metod a vlastností (a také proměnných, ale k tomu se dostaneme až u objektů), které na ni můžeme volat. Zkusme si to:

*   ![Metody na textovém řetězci string v IntelliJ - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/intellij_string_methods.png)
    
*   ![Metody na textovém řetězci string v NetBeans - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/java/string_methods.png)
    

Tu samou nabídku lze vyvolat také stiskem kláves Ctrl + Mezerník v případě, že kurzor umístíme na tečku.

Samozřejmě to platí pro všechny proměnné i třídy a budeme toho využívat stále častěji. Metody jsou řazené abecedně a můžeme jimi listovat pomocí kurzorových šipek. NetBeans nám navíc zobrazuje i popis metod (co dělají) a jaké vyžadují parametry. Stejný popis můžeme v IntelliJ vyvolat tím, že najedeme šipkami na metodu, o které chceme vědět více, a stiskneme klávesy Ctrl + Q.

Řekněme si o následujících metodách a ukažme si je na jednoduchých příkladech.

### Metoda `substring()`

Vrátí podřetězec od dané počáteční pozice do dané koncové pozice:

```
{JAVA_CONSOLE}
System.out.println("Wolfgang Amadeus Mozart".substring(9, 16));
{/JAVA_CONSOLE}

```


Výstup:

```
Konzolová aplikace
Amadeus
```


### Metoda `compareTo()`

Umožňuje porovnat dva řetězce podle abecedy. Vrací hodnotu `-1`, pokud je první řetězec před řetězcem v parametru, hodnotu `0`, pokud jsou stejné a hodnotu `1`, pokud je za ním:

```
{JAVA_CONSOLE}
System.out.println("Argentina".compareTo("Barbados"));
{/JAVA_CONSOLE}

```


Výstup:

```
Konzolová aplikace
-1
```


Pojďme se nyní podívat na další metody, které jsou opravdu velmi užitečné.

### Metody `split()` a `join()`

Z předchozího tutoriálu víme, že parsování řetězce po znaku může být někdy docela složité a to jsme dělali poměrně jednoduchý příklad. S řetězci se samozřejmě budeme setkávat stále, a to jak na vstupu od uživatele (např. z konzole nebo z polí v okenních aplikacích), tak v souborech TXT a XML. Velmi často máme zadán jeden delší textový řetězec (řádka souboru nebo řádka konzole), ve kterém je více hodnot, oddělených tzv. **separátory**, např. čárkou. V tomto případě hovoříme o formátu CSV (**C**omma-**S**eparated **V**alues, tedy hodnoty oddělené čárkou). Abychom si byli jisti, že víme, o čem hovoříme, ukažme si nějaké ukázkové řetězce:

```
Jan,Novák,Dlouhá 10,Praha 3,130 00
.. ... .-.. .- -. -.. ... --- ..-. -
(1,2,3;4,5,6;7,8,9)
```


Význam jednotlivých řetězců:

*   První řetězec je očividně nějaký uživatel, takto bychom mohli např. realizovat uložení uživatelů do CSV souboru, každý na jeden řádek.
*   Druhý řetězec jsou znaky Morseovy abecedy, separátor (oddělovač) je zde mezera.
*   Třetí řetězec je matice o 3 sloupcích a 3 řádcích. Oddělovač sloupců je čárka, řádků středník.

Na typu `String` můžeme volat metodu `split()`, která bere jako parametr separátor. Následně původní řetězec rozdělí podle separátorů na pole podřetězců, které vrátí. To nám velmi ulehčí práci při rozdělování hodnot v řetězci.

Metoda `join()` se volá přímo na typu `String` a umožňuje nám naopak pole podřetězců spojit oddělovačem do jediného řetězce, parametry jsou oddělovač a pole. Výstupem metody je výsledný řetězec.

Jelikož neumíme tvořit objekty (uživatele) a ani pracovat s vícerozměrnými poli (matice), zkusíme si naprogramovat dekodér zpráv z Morseovy abecedy.

#### Dekodér Morseovy abecedy

Pojďme si opět připravit strukturu programu. Budeme potřebovat 2 řetězce se zprávou, jeden se zprávou v Morseově abecedě, druhý zatím prázdný, do kterého budeme ukládat výsledek našeho snažení. Dále budeme jako v případě samohlásek potřebovat nějaký vzor písmen. K písmenům samozřejmě vzor jejich znaku v morseovce. Písmena můžeme opět uložit do pouhého řetězce, protože mají jen jeden znak. Znaky Morseovy abecedy mají již znaků více, ty musíme dát do pole. Struktura našeho programu by nyní mohla vypadat následovně:

```

String sifrovanaZprava = ".-.. . --- -. .- .-. -.. ---";
System.out.printf("Původní zpráva: %s%n", sifrovanaZprava);

String dekodovanaZprava = "";


String abeceda = "abcdefghijklmnopqrstuvwxyz";
String[] morseovyZnaky = {".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....",
"..", ".---", "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-",
"...-", ".--", "-..-", "-.--", "--.."};
```


Můžete si potom přidat další znaky jako čísla a interpunkční znaménka, my je zde vynecháme.

Nyní si řetězec `sifrovanaZprava` rozbijeme metodou `split()` na pole podřetězců, obsahujících jednotlivé znaky morseovky. Rozdělovat budeme podle znaku mezery. Pole následně proiterujeme cyklem foreach:

```

String[] znaky = sifrovanaZprava.split(" ");


for (String morseuvZnak : znaky) {

}
```


Ideálně bychom se měli nějak vypořádat s případy, kde uživatel zadá např. více mezer mezi znaky (to uživatelé rádi dělají). Metoda `split()` poté vytvoří o jeden řetězec v poli více, který bude prázdný. Ten bychom měli poté v cyklu detekovat a ignorovat, my se s tím v tutoriálu nebudeme zabývat.

V cyklu se pokusíme najít aktuálně čtený znak morseovky v poli `morseovyZnaky`. Bude nás zajímat jeho index, protože když se podíváme na ten samý index v poli `abeceda`, bude tam odpovídající písmeno. To je samozřejmě z toho důvodu, že jak pole tak řetězec obsahují stejné znaky, seřazené dle abecedy. Umístěme do těla cyklu následující kód:

```
char abecedniZnak = '?';

int index = -1;
for (int i = 0; i < morseovyZnaky.length; i++) {
    if (morseovyZnaky[i].equals(morseuvZnak)) {
        index = i;
    }
}

if (index >= 0) { 
    abecedniZnak = abeceda.charAt(index);
}
dekodovanaZprava += abecedniZnak;
```


Kód nejprve do abecedního znaku uloží znak `?`, protože se může stát, že znak v naší sadě nemáme. Následně se pokusíme zjistit jeho index. Pole v Javě bohužel nemá metodu `indexOf()` a zatím nechci zabíhat do složitějších datových struktur. Napíšeme si tedy vyhledání typu `String` v poli sami, bude to docela jednoduché.

##### Vyhledání řetězce v poli

Nejprve nastavíme index na `-1`, protože nevíme, jestli pole daný `String` (morseův znak) obsahuje. Následně pole projedeme cyklem a budeme kontrolovat jednotlivé řetězce s naším stringem (znakem). Již víme, že musíme k porovnání dvou řetězců použít metodu `equals()`. Pokud řetězce souhlasí, uložíme si aktuální index.

Pokud jsme znak našli (`index >= 0`), dosadíme do proměnné `abecedniZnak` znak z abecedy pod tímto indexem. Nakonec znak připojíme ke zprávě. Operátor `+=` nahrazuje `zprava = zprava + abecedniZnak`.

Závěrem samozřejmě zprávu vypíšeme:

```
{JAVA_CONSOLE}

// řetězec, který chceme dekódovat
String sifrovanaZprava = ".-.. . --- -. .- .-. -.. ---";
System.out.printf("Původní zpráva: %s%n", sifrovanaZprava);
// řetězec s dekódovanou zprávou
String dekodovanaZprava = "";

// vzorová pole
String abeceda = "abcdefghijklmnopqrstuvwxyz";
String[] morseovyZnaky = {".-", "-...", "-.-.", "-..", ".", "..-.", "--.", "....",
"..", ".---", "-.-", ".-..", "--", "-.", "---", ".--.", "--.-", ".-.", "...", "-", "..-",
"...-", ".--", "-..-", "-.--", "--.."};

// rozbití řetězce na znaky morseovky
String[] znaky = sifrovanaZprava.split(" ");

// iterace znaky morseovky
for (String morseuvZnak : znaky) {
    char abecedniZnak = '?';

    int index = -1;
    for (int i = 0; i < morseovyZnaky.length; i++) {
        if (morseovyZnaky[i].equals(morseuvZnak)) {
            index = i;
        }
    }

    // znak nalezen
    if (index >= 0) {
        abecedniZnak = abeceda.charAt(index);
    }
    dekodovanaZprava += abecedniZnak;
}

System.out.printf("Dekódovaná zpráva: %s%n", dekodovanaZprava);
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Původní zpráva: .-.. . --- -. .- .-. -.. ---
Dekódovaná zpráva: leonardo
```


Hotovo! Za úkol máte si naprogramovat program opačný, který naopak zakóduje řetězec do morseovky, kód bude velmi podobný. S metodami `split()` a `join()` se potkáme během Java kurzu ještě několikrát.

Speciální znaky a escapování
----------------------------

Textový řetězec může obsahovat speciální znaky, které jsou předsazené zpětným lomítkem `\`. Je to zejména sekvence `\n`, který kdekoli v textu způsobí odřádkování a poté `\t`, kde se jedná o tabulátor. Sekvenci `\n` do kódu často nepíšeme a využijeme raději formátový specifikátor `%n`, který způsobí správné odřádkování na specifických platformách. Pojďme si to vyzkoušet:

```
{JAVA_CONSOLE}
System.out.println("První řádka\nDruhá řádka");
{/JAVA_CONSOLE}

```


Znak `\` označuje nějakou speciální sekvenci znaků v řetězci a je dále využíván např. k psaní Unicode znaku jako `"\uxxxx"`, kde `xxxx` je kód znaku.

Problém může nastat ve chvíli, když chceme napsat samotné lomítko `\`, musíme ho tzv. odescapovat:

```
{JAVA_CONSOLE}
System.out.println("Toto je zpětné lomítko: \\");
{/JAVA_CONSOLE}

```


Stejným způsobem můžeme odescapovat např. uvozovku tak, aby ji Java nechápala jako konec řetězce:

```
{JAVA_CONSOLE}
System.out.println("Toto je uvozovka: \"");
{/JAVA_CONSOLE}

```


Vstupy z konzole a polí v okenních aplikacích se samozřejmě escapují samy, aby uživatel nemohl zadat sekvenci `\n` a podobně. V kódu to má programátor povoleno a musí na to myslet.

Tímto jsme v podstatě zakončili kurz se základní strukturou jazyka Java. V příštích lekcích si uvedeme vícerozměrná pole a matematické operace. Ze základních konstrukcí jazyka vás tu ale již nic nepřekvapí ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) V podstatě byste již klidně mohli jít i na objekty, doporučuji ale zbylé tutoriály ještě alespoň projet, jedná se přeci jen stále o základní znalosti, které byste měli mít.

V následujícím kvízu, [Kvíz - Textové řetězce v Javě](https://www.itnetwork.cz/java/zaklady/kviz-textove-retezce-java), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B38457%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522rlt7YVoxt9%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Řešené úlohy k 14. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 14. lekci Javy

V předchozím kvízu, [Kvíz - Textové řetězce v Javě](https://www.itnetwork.cz/java/zaklady/kviz-textove-retezce-java), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Miroslav Hudák](https://www.itnetwork.cz/images/img/person.png)
    
    > Neviem či je to tak správne, keď som to riešil cez polia, ale robi to, to čo má ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Miroslav Hudák  
    
*   ![Iwitrag](https://www.itnetwork.cz/images/img/person.png)
    
    > Třetí zadání jsem vyřešil poněkud jinak ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Ale asi ne tak efektivně... procházel jsem jednotlivé znaky v souvětí a dával je do výsledku.
    
    Iwitrag  
    

Jednoduchý příklad
------------------

Naprogramujte aplikaci, která vypočítá

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma splitování řetězců a vkládání/mazání podřetězců. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 15 - Podmínky v Javě potřetí - Ternární výraz, propadávací switch
V předešlém cvičení, [Řešené úlohy k 14. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-split-a-join), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním Java tutoriálu si představíme 2 další konstrukce, které souvisejí s podmínkami. Jedná se o oddechový tutoriál, kterým toto téma dokončíme.

Ternární operátor
-----------------

Často se nám stává, že někde potřebujeme nastavit 2 různé hodnoty podle toho, zda platí nějaká podmínka.

### Příklad - Výpis pohlaví

Představme si, že máme např. pohlaví uživatele uložené jako `boolean` (muž by byl `true`) a my bychom ho chtěli převést do textu. S dosavadními znalostmi bychom napsali asi takovýto kód:

```
{JAVA_CONSOLE}
boolean muz = true; // nějaká proměnná udávající pohlaví
String nazevPohlavi;
if (muz) {
    nazevPohlavi = "muž";
} else {
    nazevPohlavi = "žena";
}
System.out.println(nazevPohlavi);
{/JAVA_CONSOLE}

```


Výstup programu je samozřejmě následující:

```
Konzolová aplikace
muž
```


Kód je poměrně upovídaný na to, že jen přepíná mezi dvěma hodnotami. Proto programovací jazyky často podporují tzv. **ternární výraz**.

### Syntaxe ternárního výrazu

Pomocí tohoto operátoru můžeme získat hodnotu podle platnosti logického výrazu. Zapíšeme jej takto:

```
(podminka) ? plati : neplati
```


Podmínku vložíme většinou do závorky `()`, poté následuje otazník `?` a 2 hodnoty, které se mají vrátit. Hodnoty jsou oddělené dvojtečkou `:`, první hodnota `plati` se vrátí, když podmínka platí. Druhá hodnota `neplati`, když podmínka neplatí. Jak snadné! ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Název operátoru je odvozený od toho, že má tři části (podmínka, první hodnota a druhá hodnota), proto ternární.

### Příklad - Výpis pohlaví pomocí ternárního výrazu

Pojďme si ternární operátor vyzkoušet na příkladu s pohlavím:

```
{JAVA_CONSOLE}
boolean muz = true; // nějaká proměnná udávající pohlaví
String nazevPohlavi = (muz) ? "muž" : "žena";
System.out.println(nazevPohlavi);
{/JAVA_CONSOLE}
```


Místo typu `boolean` bychom mohli do závorky samozřejmě napsat jakoukoli jinou podmínku, např. `(vek >= 18) ? "zletilý" : "nezletilý"`. V případě jednoduchých výrazů můžeme závorku i vynechat.

### Vnořování ternárních operátorů

Ternární operátory lze teoreticky zanořovat do sebe a tím reagovat i na tři a více hodnot. Nicméně ve většině případů zanořování spíše kód znepřehlední, vznikají totiž dlouhé nebo podivně zalomené řádky a není na první pohled vidět, jaká část se kdy spustí. Ukažme si, jak by se pomocí vnořování ternárních výrazů vyřešil výpis tří smajlíků:

```
{JAVA_CONSOLE}
String smajlik = ":)"; // nějaká proměnná udávající smajlíka
String nalada = (smajlik.equals(":)")) ? "veselý" : (smajlik.equals(":(")) ? "smutný" : "neznámý";
System.out.println(nalada);
{/JAVA_CONSOLE}

```


Pro příklad výše by bylo lepší vytvořit vlastní metodu, což si ale ukážeme až v navazujícím kurzu objektově orientovaného programování.

Konstrukce `switch` s propadáváním
----------------------------------

S konstrukcí `switch` jsme se již setkali v lekci [Podmínky (větvení)](https://www.itnetwork.cz/java/zaklady/java-tutorial-podminky-vetveni-if-switch). Dnes si ukážeme její další použití. Na rozdíl od ternárního operátoru jde ale spíše o historickou funkčnost, pro kterou dnes není moc rozumných využití. Stále je ale součástí standardní gramatiky Javy a můžete na ni narazit v cizích zdrojových kódech.

### Příklad - Čtvrtletí

Předpokládejme, že chceme podle měsíce v roce zjistit, jaké je čtvrtletí. Pomocí bloků `if` a `else` by příklad vypadal následovně:

```
{JAVA_CONSOLE}
int mesic = 2;
if (mesic >= 1 && mesic <= 3) {
    System.out.println("Je první čtvrtletí.");
}
else if (mesic >= 4 && mesic <= 6) {
    System.out.println("Je druhé čtvrtletí.");
}
else if (mesic >= 7 && mesic <= 9) {
    System.out.println("Je třetí čtvrtletí.");
}
else if (mesic >= 10 && mesic <= 12) {
    System.out.println("Je čtvrté čtvrtletí.");
}
{/JAVA_CONSOLE}

```


Jak ale použít konstrukci `switch` pro takovýto příklad? Možná by vás napadl následující zápis:

```
{JAVA_CONSOLE}
int mesic = 11;
switch (mesic) {
    case 1:
        System.out.println("Je první čtvrtletí.");
        break;
    case 2:
        System.out.println("Je první čtvrtletí.");
        break;
    case 3:
        System.out.println("Je první čtvrtletí.");
        break;
    case 4:
        System.out.println("Je druhé čtvrtletí.");
        break;
    case 5:
        System.out.println("Je druhé čtvrtletí.");
        break;
    case 6:
        System.out.println("Je druhé čtvrtletí.");
        break;
    case 7:
        System.out.println("Je třetí čtvrtletí.");
        break;
    case 8:
        System.out.println("Je třetí čtvrtletí.");
        break;
    case 9:
        System.out.println("Je třetí čtvrtletí.");
        break;
    case 10:
        System.out.println("Je čtvrté čtvrtletí.");
        break;
    case 11:
        System.out.println("Je čtvrté čtvrtletí.");
        break;
    case 12:
        System.out.println("Je čtvrté čtvrtletí.");
        break;
}
{/JAVA_CONSOLE}

```


Příklad funguje spolehlivě, problém však je, že jsme si tímto zápisem moc nepomohli. Podobnému **repetitivnímu kódu bychom se vždy měli vyhýbat**.

### Propadávání

Zkusme to ještě jednou a využijme tzv. **propadávání**. Pokud potřebujeme ve více blocích `case` provádět stejný kód, stačí tyto bloky vložit pod sebe a neukončovat každý blok pomocí příkazu `break`, ale celou skupinu bloku jedním příkazem `break`. Neukončené bloky tak propadnou a vykoná se kód společný pro více bloků:

```
{JAVA_CONSOLE}
int mesic = 11;
switch (mesic) {
    case 1:
    case 2:
    case 3:
        System.out.println("Je první čtvrtletí.");
        break;
    case 4:
    case 5:
    case 6:
        System.out.println("Je druhé čtvrtletí.");
        break;
    case 7:
    case 8:
    case 9:
        System.out.println("Je třetí čtvrtletí.");
        break;
    case 10:
    case 11:
    case 12:
        System.out.println("Je čtvrté čtvrtletí.");
        break;
}
{/JAVA_CONSOLE}

```


Ukázka výstupu aplikace:

```
Konzolová aplikace
Je čtvrté čtvrtletí.
```


Tento zápis je již mnohem přehlednější. Konstrukce `switch` má ovšem přidanou hodnotu v případě, kdy nemůžeme použít větší/menší a jde o výčet hodnot, zde je to spíše redundantní kód plný prázdných `case`.

Java podporuje propadávání jak prázdných `case`, tak na rozdíl od jiných jazyků i `case` s dalším kódem. To je častá příčina nechtěných chyb (zapomenutých `break`) a velmi těžko se hledají.

Propadávání používejte v konstrukci `switch` jen pokud k němu máte dobrý důvod, nicméně je důležité, abyste jej uměli číst, když na něj někde narazíte.

### Vylepšená konstrukce

Od Javy verze 12 lze také využít vylepšenou konstrukci `switch`. Zápis výše by se dal ještě více zkrátit:

```
{JAVA_CONSOLE}
int mesic = 11;
switch (mesic) {
    case 1, 2, 3 -> System.out.println("Je první čtvrtletí.");
    case 4, 5, 6 -> System.out.println("Je druhé čtvrtletí.");
    case 7, 8, 9 -> System.out.println("Je třetí čtvrtletí.");
    case 10, 11, 12 -> System.out.println("Je čtvrté čtvrtletí.");
}
{/JAVA_CONSOLE}

```


V příští lekci, [Cykly v Javě potřetí - do-while, break a continue](https://www.itnetwork.cz/java/zaklady/cykly-v-jave-podruhe-do-while-break-a-continue), na nás čeká další syntaxe okolo cyklů, na kterou můžeme narazit v cizích zdrojových kódech.

# Lekce 16 - Cykly v Javě potřetí - do-while, break a continue
V minulé lekci, [Podmínky v Javě potřetí - Ternární výraz, propadávací switch](https://www.itnetwork.cz/java/zaklady/podminky-v-jave-podruhe-ternarni-vyraz-propadavaci-switch), jsme se věnovali další syntaxi podmínek.

V dnešním Java tutoriálu se podíváme na cyklus `do`\-`while`, příkazy `break` a `continue` a také na zkrácený zápis již probraného cyklu `for`. Tutoriál obsahuje méně používané praktiky a slouží hlavně k tomu, aby vás nepřekvapily v cizím kódu. Zatím není příliš důležité, abyste je sami uměli používat.

Cyklus `do`\-`while`
--------------------

Cyklus `while` již dobře známe. Méně používaný `do`\-`while` se liší pouze tím, že se vždy vykoná nejméně jednou. **Jeho podmínka je totiž umístěna až za tělem cyklu**. Vypadá tedy takto:

```
do {
    
} while (podmínka);
```


### Příklad - Kalkulačka

Použití `do`\-`while` cyklu si ukažme na naší kalkulačce z lekce [Cykly v Javě](https://www.itnetwork.cz/java/zaklady/cyklus-while-v-jave).

#### Varianta s `while`

V kalkulačce jsme použili cyklus `while`, který umožnil celý program opakovat a tak zadávat další a další příklady. Kód vypadal takto (jedná se o verzi s konstrukcí `switch`):

```
Scanner scanner = new Scanner(System.in);

System.out.println("Vítejte v kalkulačce");
String pokracovat = "ano";
while (pokracovat.equals("ano")) {
    System.out.println("Zadejte první číslo:");
    double a = Double.parseDouble(scanner.nextLine());
    System.out.println("Zadejte druhé číslo:");
    double b = Double.parseDouble(scanner.nextLine());
    System.out.println("Zvolte si operaci:");
    System.out.println("1 - sčítání");
    System.out.println("2 - odčítání");
    System.out.println("3 - násobení");
    System.out.println("4 - dělení");
    int volba = Integer.parseInt(scanner.nextLine());
    double vysledek = 0;
    switch (volba) {
        case 1:
                vysledek = a + b;
        break;
        case 2:
                vysledek = a - b;
        break;
        case 3:
                vysledek = a * b;
        break;
        case 4:
                vysledek = a / b;
        break;
    }
    if ((volba > 0) && (volba < 5)) {
        System.out.println("Výsledek: " + vysledek);
    } else {
        System.out.println("Neplatná volba");
    }
    System.out.println("Přejete si zadat další příklad? [ano/ne]");
    pokracovat = scanner.nextLine();
}
System.out.println("Děkuji za použití kalkulačky.");
```


Všimněte si, že jsme se u této varianty s `while` museli zamyslet nad výchozí hodnotou proměnné `pokracovat`, které jsme nastavili hodnotu `ano`, aby podmínka byla splněna pro první průchod cyklem. Vymyslet výchozí hodnotu může být ale někdy poměrně složité a třeba i vyžadovat pomocnou proměnnou. V tomto případě je vhodnější využít cyklus `do`\-`while`.

#### Varianta s `do`\-`while`

Když použijeme cyklus `do`\-`while`, tak výchozí hodnotu dané proměnné nemusíme řešit:

```
Scanner scanner = new Scanner(System.in);

System.out.println("Vítejte v kalkulačce");
String pokracovat;
do {
    System.out.println("Zadejte první číslo:");
    double a = Double.parseDouble(scanner.nextLine());
    System.out.println("Zadejte druhé číslo:");
    double b = Double.parseDouble(scanner.nextLine());
    System.out.println("Zvolte si operaci:");
    System.out.println("1 - sčítání");
    System.out.println("2 - odčítání");
    System.out.println("3 - násobení");
    System.out.println("4 - dělení");
    int volba = Integer.parseInt(scanner.nextLine());
    double vysledek = 0;
    switch (volba) {
        case 1:
                vysledek = a + b;
        break;
        case 2:
                vysledek = a - b;
        break;
        case 3:
                vysledek = a * b;
        break;
        case 4:
                vysledek = a / b;
        break;
    }
    if ((volba > 0) && (volba < 5)) {
        System.out.println("Výsledek: " + vysledek);
    } else {
        System.out.println("Neplatná volba");
    }
    System.out.println("Přejete si zadat další příklad? [ano/ne]");
    pokracovat = scanner.nextLine();
} while (pokracovat.equals("ano"));
System.out.println("Děkuji za použití kalkulačky.");
```


Příkazy `break` a `continue`
----------------------------

Běh cyklu je potřeba někdy přerušit, k tomu máme následující dvě klíčová slova.

### Příkaz `break`

Příkaz `break` **ukončuje** aktuální cyklus. Používá se nejčastěji pokud pomocí cyklu nalezneme nějakou položku v kolekci a dále již v jejím procházení nechceme pokračovat. **Nebudeme tak dále zbytečně prohledávat zbytek kolekce, když již máme to, co jsme hledali.**

#### Příklad s využitím `break`

Představme si, že máme velké a malé štítky na sklenice a chceme použít na všechny sklenice buď jedny nebo druhé. Zajímá nás tedy, zda se text všech popisek vejde na malé štítky. Napíšeme program, který zjistí, zda je v poli slovo delší než 6 znaků. Pokud ano, musíme použít větší štítky.

Začneme cyklem procházet jednotlivá slova a jakmile najdeme slovo delší než 6 znaků, tak si uložíme jeho index. Zatím stále nic nového pod sluncem. **V tu samou chvíli ovšem pomocí příkazu `break` cyklus ukončíme.**

Ukázka použití příkazu `break`:

```
{JAVA_CONSOLE}
String[] seznamOvoce = {"Jablka", "Hrušky", "Švestky", "Meruňky", "Jahody", "Třešně"};
int hledanyIndex = -1;

for (int i = 0; i < seznamOvoce.length; i++) {
    if (seznamOvoce[i].length() > 6) {
        hledanyIndex = i;
        break;
    }
}

if (hledanyIndex >= 0) {
    System.out.println("První slovo delší než 6 znaků: " + seznamOvoce[hledanyIndex]);
}
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
První slovo delší než 6 znaků: Švestky
```


Příkaz `break` se v praxi často nahrazuje příkazem `return` za předpokladu, že je kód v naší vlastní metodě. Vlastní metody se ale naučíme deklarovat až v navazujícím kurzu [Základy objektově orientovaného programování v Javě](https://www.itnetwork.cz/java/oop). Potom příkaz `break` doporučuji spíše nepoužívat, správnější varianta je kód pro práci s kolekcí vyčlenit do samostatné funkce.

### Příkaz `continue`

Příkaz `continue` je podobný příkazu `break`. Používá se však k ukončení pouze aktuální iterace (průběhu) cyklu a **nikoli celého cyklu**. Cyklus poté rovnou přechází na další iteraci. Použití `continue` můžeme najít např. **při validování položek při procházení nějaké kolekce.**

#### Příklad s využitím `continue`

Představme si, že máme od uživatele zadaná čísla a tato čísla chceme sečíst. Uživatel tato čísla zadá jako jeden řetězec, kde každé číslo je oddělené čárkou. Bohužel musíme počítat i s tím, že uživatel zadá místo čísla nějaký nesmysl. Řešení by mohlo vypadat následovně:

```
{JAVA_CONSOLE}
String retezec = "10,50,ab10cd,30,9";
// rozložení řetězce do pole
String[] polozky = retezec.split(",");
int soucet = 0;
for (String polozka : polozky) {
    // Ověření, že proměnná neobsahuje žádné nečíselné znaky
    if (!polozka.matches("\\d+")) {
        continue;
    }
    // převedení řetězce na celé číslo
    int cislo = Integer.parseInt(polozka);

    soucet += cislo;
}
System.out.println("Součet je: " + soucet);
{/JAVA_CONSOLE}

```


Výstup programu:

```
Konzolová aplikace
Součet je: 99
```


Program sečte všechny správně zadané hodnoty. Formát řetězce ověřujeme pomocí metody `matches()`. Než se budeme naplno těmito regulárními výrazy zabývat, bude nám stačit, že výraz `\\d+` vrátí `true`, pokud je text jen celé kladné číslo. U nesprávně zadaných hodnot je aktuální iterace ukončena. Místo příkazu `continue` bychom samozřejmě mohli použít jen příkaz `if`.

Zkrácený zápis cyklu `for`
--------------------------

Následující konstrukce jsou zde pro ukázku, co vše je možné potkat v cizích kódech a **není dobrý důvod je používat**!

Cyklus `for` je možné zapsat takto zkráceně, bez těla cyklu:

```
{JAVA_CONSOLE}
for (int i = 0; i < 10; System.out.print(i++));
{/JAVA_CONSOLE}

```


Výstup:

```
Konzolová aplikace
0123456789
```


Psát logiku průběhu běhu cyklu i logiku v cyklu na jeden řádek ovšem není intuitivní. Navíc se tak může snadno zapomenout na inkrementaci proměnné nebo ji inkrementovat vícekrát. 

Dokonce není nutné v hlavičce cyklu `for` uvádět jakýkoliv příkaz:

```
for (;;) {
    
}
```


Tento zápis je stejný jako:

```
while (true) {
    
}
```


Oba výše deklarované cykly běží do nekonečna a můžete je potkat ve špatně napsaných zdrojových kódech spolu s příkazy `break`, které z nich potom za nějakých podmínek vyskakují.

**Jakmile podmínka není přímo v deklaraci cyklu, je poměrně nepřehledné zjistit, kdy cyklus vůbec skončí** a snadné udělat z takového cyklu nechtěně nekonečný. To platí zvláště, když z cyklu vyskakujeme více podmínkami a nepokryjeme všechny možné případy.

Ač dnešní tutoriál obsahoval standardní gramatiku Javy pro cykly, z nových konstrukcí používejte pouze `do`\-`while` a `continue`. Přechodně ještě můžete používat příkaz `break`, než se dostaneme k objektům ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V příští lekci, [Matematické funkce v Javě a knihovna Math](https://www.itnetwork.cz/java/zaklady/java-tutorial-knihovna-math-matematicke-funkce), se podíváme na matematické funkce a základní kurz úplně zakončíme.

# Lekce 17 - Matematické funkce v Javě a knihovna Math
V minulé lekci, [Cykly v Javě potřetí - do-while, break a continue](https://www.itnetwork.cz/java/zaklady/cykly-v-jave-podruhe-do-while-break-a-continue), jsme ucelili naše znalosti cyklů dalšími konstrukcemi a klíčovými slovy, na která můžeme narazit v cizích zdrojových kódech.

Naše on-line výuka Javy teď vlastně teprve začíná, nicméně v tomto kurzu s tutoriály o těch nejzákladnějších konstrukcích jazyka jsme již u konce. Jsem rád, že jsme se úspěšně dostali až sem, další sekce se totiž bude věnovat **objektově orientovanému programování**. Budeme tam vytvářet opravdu zajímavé aplikace a i jednu hru. Sekci zakončeme odlehčujícím článkem s přehledem matematických funkcí, které se nám v našich programech jistě budou v budoucnu hodit.

Třída `Math`
------------

Základní matematické metody jsou v Javě obsaženy ve třídě `Math`. Třída nám poskytuje dvě základní konstanty: `PI` a `E`. Konstanta `PI` je pochopitelně číslo Pí (`3.1415...`) a `E` je Eulerovo číslo, tedy základ přirozeného logaritmu (`2.7182...`). Asi je jasné, jak se s třídou pracuje, ale pro jistotu si na ukázku konstanty vypišme do konzole:

```
{JAVA_CONSOLE}
System.out.println("Pí: " + Math.PI);
System.out.println("e: " + Math.E);
{/JAVA_CONSOLE}

```


Vidíme, že vše voláme na třídě `Math`.

```
Konzolová aplikace
Pí: 3.141593
e: 2.718282
```


Pojďme si nyní popsat metody, které třída poskytuje:

Metody na třídě `Math`
----------------------

### Metody `min()` a `max()`

Začněme s tím jednodušším ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Obě metody berou jako parametr dvě čísla libovolného datového typu. Metoda `min()` vrátí to menší, metoda `max()` to větší z nich.

### Metody `round()`, `ceil()` a `floor()`

Všechny tři metody se týkají zaokrouhlování. Metoda `round()` bere jako parametr desetinné číslo a vrací zaokrouhlené číslo **typu `double`** tak, jak to známe ze školy (od `0.5` nahoru, jinak dolů). Metoda `ceil()` zaokrouhlí vždy nahoru a metoda `floor()` vždy dolů.

Metodu `round()` budeme jistě potřebovat často, další metody jsem prakticky často použil např. při zjišťování počtu stránek při výpisu komentářů v knize návštěv. Když máme 33 příspěvků a na stránce jich je vypsáno 10, **budou tedy zabírat 3.3 stránek**. Výsledek musíme zaokrouhlit nahoru, protože v reálu stránky budou samozřejmě **4**.

### Metody `abs()` a `signum()`

Obě metody berou jako parametr číslo libovolného typu. Metoda `abs()` vrátí jeho absolutní hodnotu a `signum()` vrátí podle znaménka `-1`, `0` nebo `1` (pro záporné číslo, nulu a kladné číslo).

### Metody `sin()`, `cos()` a `tan()`

Klasické goniometrické funkce, jako parametr berou úhel typu `double`, který považují v radiánech, nikoli ve stupních. Pro konverzi stupňů na radiány stupně vynásobíme `* (Math.PI/180)`. Výstupem je opět `double`.

### Metody `acos()`, `asin()` a `atan()`

Opět klasické cyklometrické metody (arkus funkce), které podle hodnoty goniometrické funkce vrátí daný úhel. Parametrem je hodnota datového typu `double`, výstupem úhel v radiánech (také typu `double`). Pokud si přejeme mít úhel ve stupních, vydělíme radiány vzorcem `/ (180 / Math.PI)`.

### Metody `pow()` a `sqrt()`

Metoda `pow()` bere dva parametry typu `double`, první je základ mocniny a druhý exponent. Pokud bychom tedy chtěli spočíst např. 23, kód by byl následující:

```
{JAVA_CONSOLE}
System.out.println(Math.pow(2, 3));
{/JAVA_CONSOLE}

```


Zkratka **sqrt** je pro **SQ**uare **R**oo**T** a vrátí tedy druhou odmocninu z daného čísla typu `double`. Obě funkce vrací výsledek jako typ `double`.

### Metody `exp()`, `log()` a `log10()`

Metoda `exp()` vrací Eulerovo číslo, umocněné na daný exponent. Dále metoda `log()` vrací přirozený logaritmus daného čísla. Metoda `log10()` vrací potom dekadický logaritmus daného čísla.

V seznamu metod nápadně chybí libovolná odmocnina. My ji však dokážeme spočítat i na základě funkcí, které `Math` poskytuje.

Víme, že platí: 3. odmocnina z 8 je 81/3. Můžeme tedy napsat:

```
{JAVA_CONSOLE}
System.out.println(Math.pow(8, (1.0/3.0)));
{/JAVA_CONSOLE}

```


Je velmi důležité, abychom při dělení napsali alespoň jedno číslo s desetinnou tečkou, jinak bude Java předpokládat celočíselné dělení a výsledkem by v tomto případě bylo 80 = 1.

Dělení
------

Programovací jazyky se často odlišují tím, jak v nich funguje dělení čísel. Tuto problematiku je nutné dobře znát, abyste nebyli poté (nepříjemně) překvapeni. Napišme si jednoduchý program:

```
{JAVA_CONSOLE}
int a = 5 / 2;
double b = 5 / 2;
double c = 5.0 / 2;
double d = 5 / 2.0;
double e = 5.0 / 2.0;
// int f = 5 / 2.0;

System.out.println(a);
System.out.println(b);
System.out.println(c);
System.out.println(d);
System.out.println(e);
{/JAVA_CONSOLE}

```


V kódu několikrát dělíme `5 / 2`, což je matematicky `2.5`. Jistě ale tušíte, že výsledek nebude ve všech případech stejný. Troufnete si tipnout si co kdy vyjde? Zkuste to ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Kód by se nepřeložil kvůli řádku s proměnnou `f`, proto jsme ho zakomentovali. Problém je v tom, že v tomto případě vyjde desetinné číslo, které se snažíme uložit do čísla celého (typ `int`). Výstup programu je poté následující:

```
Konzolová aplikace
2
2.0
2.5
2.5
2.5
```


Vidíme, že výsledek dělení je někdy celočíselný a někdy reálný. **Přitom vůbec nezáleží na datovém typu proměnné, do které výsledek ukládáme, ale na datovém typu čísel, které dělíme.** Pokud je jedno z čísel desetinné, je výsledek vždy desetinné číslo. Dvě celá čísla vrátí vždy zas celé číslo. Dejte si na to pozor např. když budete počítat průměr, pro desetinný výsledek je nutné alespoň jednu proměnnou přetypovat na desetinné číslo:

```
int soucet = 10;
int pocet = 4;
double prumer = (double)soucet / pocet;
```


Například v [jazyce PHP](https://www.itnetwork.cz/php) je výsledek dělení vždy desetinný. Až budete dělit v jiném programovacím jazyce než v Javě, zjistěte si, jak dělení funguje, než jej použijete.

### Zbytek po celočíselném dělení

V našich aplikacích můžeme často potřebovat zbytek po celočíselném dělení (tzv. **modulo**). U našeho příkladu `5 / 2` je celočíselný výsledek `2` a modulo `1` (zbytek). Modulo se často používá pro zjištění zda je číslo sudé (zbytek po dělení `2` je `0`), když chcete např. vybarvit šachovnici, zjistit odchylku vaší pozice od nějaké čtvercové sítě a podobně.

V Javě a obecně v céčkových jazycích zapíšeme modulo jako `%`:

```
{JAVA_CONSOLE}
System.out.println(5 % 2); // Vypíše 1
{/JAVA_CONSOLE}

```


Tak to bychom měli. V kurzu [Základní konstrukce jazyka Java](https://www.itnetwork.cz/java/zaklady) naleznete ještě několik dalších příkladů k procvičení, které určitě doporučujeme vypracovat. Na kurz nyní navazují [Základy objektově orientovaného programování v Javě](https://www.itnetwork.cz/java/oop). [Příště](https://www.itnetwork.cz/java/oop/java-tutorial-uvod-do-objektove-orientovaneho-programovani) si tedy představíme objektový svět a pochopíme mnoho věcí, které nám až doteď byly utajovány ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V následujícím kvízu, [Kvíz - Pokročilé podmínky a cykly v Javě](https://www.itnetwork.cz/java/zaklady/kviz-pokrocile-podminky-cykly-java), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B38459%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522nHAJrDQ7VE%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Lekce 18 - Nejčastější chyby Java začátečníků, děláš je také?
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Nejčastější chyby Java začátečníků, děláš je také?

V předchozím kvízu, [Kvíz - Pokročilé podmínky a cykly v Javě](https://www.itnetwork.cz/java/zaklady/kviz-pokrocile-podminky-cykly-java), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

V dnešním Java tutoriálu se opět na chvilku zastavíme a vydýcháme. Ukážeme si, jaké jsou nejčastější chyby Java programátorů při používání znalostí, které jsme nově nabyli, a jak se jim vyvarovat. Zvýšíte tím tak svou senioritu a cenu na trhu práce.

Slovo senior programátora
-------------------------

![David Čápka - Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/5/marketing/fotky/me.jpg)

Materiál pro dnešní lekci jsem sestavil na základě 20letých zkušeností s programováním. Jako šéfredaktorovi a lektorovi mi rukama prošly stovky, možná tisíce zdrojových kódů vytvořených komunitou. Nebylo těžké si všimnout, že většina z nich, ačkoli funguje, obsahuje **zbytečné chyby**, které se navíc **stále dokola opakují**. Chyby kupodivu často dělali jak nováčci, tak zkušenější programátoři a i já jsem je dělal, když jsem začínal.

Správné pojmenování proměnných
------------------------------

Správnému pojmenovávání identifikátorů jsme se již věnovali v lekci [Nejčastější chyby Java začátečníků - Umíš pojmenovat proměnné?](https://www.itnetwork.cz/java/zaklady/nejcastejsi-chyby-java-novacku-umis-pojmenovat-promenne), kde jsme si také vysvětlili, proč bychom se vůbec měli takovými věcmi zabývat.

### Pojmenování polí

Nově umíme deklarovat i pole a právě pojmenování polí je jedním z největších kamenů úrazu v programování. Existuje jednoduché pravidlo:

Kolekce vždy **pojmenováváme v množném čísle**.

Opět tím samozřejmě následujeme poučku, že **název proměnné je odvozený od toho, co je v proměnné uložené**. A když je tam více věcí, měl by být logicky množné číslo.

Ukažme si pár chybných a správných příkladů deklarace polí:

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> V Java tutoriálu si ukážeme dobré praktiky v programování, např. pojmenování kolekcí, boolean výrazy a DRY, a jak jsou nejčastěji porušovány nejen nováčky.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 19 - K čemu jsou algoritmy?
V minulé lekci, [Nejčastější chyby Java začátečníků, děláš je také?](https://www.itnetwork.cz/java/zaklady/nejcastejsi-chyby-java-zacatecniku-delas-je-take), jsme si ukázali nejčastější chyby začátečníků v Javě, např. ohledně pojmenování kolekcí, `boolean` výrazů a DRY.

Základní konstrukce jazyka Java máme téměř za sebou. Než je ale zcela opustíme, **musíte vědět, že o efektivním využívání těchto konstrukcí existuje celá další věda**. Naštěstí nám o ní stačí jen vědět a občas do ní nahlédnout, když chceme něco speciálního. Tou vědou je **algoritmizace** a dnes si ji představíme.

Co jsou to algoritmy?
---------------------

V té nejjednodušší definici je algoritmus **postup pro řešení konkrétního problému**. V podstatě vše, co není jen o zavolání nějaké předpřipravené funkce jazyka, musíme krok za krokem vymyslet a zapsat jako posloupnost příkazů. Vzpomeňte si např. na náš [program, který počítal kořeny kvadratické rovnice](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-programovani-podminky). Bez znalosti přesného postupu jak se kvadratická rovnice řeší bychom si asi neškrtli. Tento postup jsme měli tentokrát přímo v zadání a naší jedinou úlohou bylo převést jej do kódu. V praxi vám ale klient samozřejmě neřekne, co budete v jeho aplikaci řešit za problémy a už vůbec ne, jak je implementovat ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Problémy s neznalostí algoritmů
-------------------------------

Algoritmy používáme v reálných komerčních aplikacích zejména pro řazení a vyhledávání. Problémy s neznalostí algoritmů jsou hned dva:

*   buď nebudeme schopní určité úlohy vyřešit
*   nebo je vyřešíme špatně (je sice fajn něco vymyslet sám, ale chce řešení minimálně pak porovnat s reálným světem)

Špatné řešení se pak projeví nejčastěji tím, že naše aplikace vyhledávající cestu v grafu bude potřebovat 5 minut na to, aby zjistila, jak se jede z Prahy do Brna. **Náš algoritmus totiž nebude efektivní**.

Pro spoustu problémů naštěstí **již existuje ideální algoritmus**, který vymyslel někdo před námi. Lidé nad řešením často strávili část života a dostali za něj vědeckou cenu. Pravděpodobnost, že bychom vymysleli lepší nebo že lepší algoritmus pro daný problém vůbec existuje, je tedy velmi nízká ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Kurzy algoritmů na ITnetwork
----------------------------

Algoritmy tedy budeme brát jako kuchařku s recepty. Stačí nám nakouknout do místní sekce [Algoritmy](https://www.itnetwork.cz/navrh/algoritmy) na konkrétní místo v případě, kdy potřebujeme konkrétní algoritmus. Např. [algoritmus řešení kvadratické rovnice](https://www.itnetwork.cz/algoritmy/matematicke/algoritmus-vypocet-reseni-kvadraticke-rovnice/) nalezneme v kurzu [Matematické algoritmy](https://www.itnetwork.cz/algoritmy/matematicke). Algoritmy se nejčastěji týkají řazení a vyhledávání prvků, ale samozřejmě se může jednat i např. o neurální [algoritmus k rozpoznání objektů v obrázku](https://www.itnetwork.cz/python/video/detekce-vlastnich-objektu-v-obrazku-pomoci-haar-cascade). Takovouto věc si ovšem již nebudeme psát na koleni, ale stáhneme si pro ni knihovnu.

Co algoritmy řeší?
------------------

Nejdříve se podívejme na dva hlavní problémy programů.

### Paměť

Ač by se zdálo, že slovní spojení "nedostatek paměti" je fráze z učených knih na konci minulého století, potýkáme se s tím všichni. Zvlášť, pokud budete psát aplikace pro Android. Pokud vaše aplikace bude zabírat 1GB, nikdo si ji nestáhne. Navíc zde funguje zajímavý zákon, když se zvětší paměť, zvětší se i velikost programů a s nedostatkem paměti se musíme potýkat nanovo.

### Čas

Jestli je problém s pamětí znepokojující, čas je naprosto hrůzostrašný. Uživatelé aplikací mají příšernou vlastnost, **nedočkavost**. Když například stisknou tlačítko, očekávají, že se něco stane hned... Nemažme si med kolem pusy, i my jsme takoví uživatelé. Nechceme čekat, až náš skvělý program vyhodí výsledek. Nemusí to být ani složité výpočty. Pokud programujeme hru, očekáváme, že hned po stisknutí klávesy se panáček pohne. Očekáváme, že po otevření okna se nám zobrazí seznam uživatelů seřazený podle jména.

Konkrétní příklady pro algoritmizaci
------------------------------------

Ukážeme si, že všechny ostatní problémy se přímo či nepřímo dotýkají těchto dvou základních kamenů úrazu.

### Interakce se světem

Pokud jste zaregistrovali hru Kingdom Come Deliverance, je to hra, která se může pochlubit světem, kde můžete interagovat s každou postavou a s mnoha objekty. To má několik problémů, první je například paměťový nárok. Kdybychom každou postavu a každý domek poctivě vytvořili, svět o velikost města s 300 lidmi by zabíral obrovské množství paměti, kterou by nakonec hráč asociál vůbec nevyužil...

### Příběh ze života

Zde si představme, že máme E-shop pro prodej jednoho kusu oblečení, konkrétně kožených bund. Náš e-shop má různé animace pro prodej bund. Jenže pak zjistíte, že váš program má fungovat i v angličtině. Dobře, dáte jednoduchý `if-else` pro jazyky a přepíšete stránku do angličtiny. Jenže pak se ozvou lidi z Německa, že by bylo dobré tam dát i němčinu. Dobře, dáte tam i německou verzi. Pak si tam šéf vymyslí, že byste mohli přidat i bazar kožených bund, což je super nápad, ale budete to kódit vy. Nejspíš na to stránka nebyla připravena, takže děláte novou stránku s odkazem na původní, která je zase trojjazyčná, tentokrát už zvolíte efektivní návrh, kdyby firma pronikla do Francie. Bazar bude formou aukcí, zadáte čas a pak čekáte, zda lidé mohou přihazovat. Jenže se ukázalo, že kolegové z Ruska mohli přihazovat i po tom, co váš čas uběhl a kolegové z Anglie přišli o hodinu. Tak to lehce poupravíte.

Rozrostli jste se a máte tolik bund, že se zákazníci těžko orientují, tak se váš šéf rozhodne, že bundy rozdělíte do kategorií, a zákazník bude moci vyhledávat podle ceny a jména. Dobře, nachystáte si kafe a jdete na to. Našli jste si návod, jak někdo naprogramoval vyhledávání podle ceny i podle jména a máte to tam. Sotva to dopíšete, a šéf přijde s tím, že by bylo hezké, kdyby zákazník mohl přidat kritéria a že by mohl hledat třeba jen ze svých tří oblíbených značek a v nějakém cenovém rozmezí. Objednáte si na příští týden dovolenou a začnete psát. Najdete si řešení pro vícenásobné klíče při vyhledávání a několikafázové třídění. Za týden to vše máte a už se těšíte, jak si odpočinete, když v tom vám volá zákaznická linka, že váš program nefunguje. Kód, který jste stáhli z netu, nefunguje pro velká data. Vaše několika-jazyková stránka trpí tím, že tam někdy skáče jiný jazyk a vy máte možnost si na dovolenou vzít vaši práci a vyřešit vše, co za vás "pokazil" někdo jiný.

### Co s tím?

Zde jsme se dotkli hned dvou témat. První téma, které jsme již nakousli, je otázka správných praktik v programování. Toho, co bychom měli dodržovat, aby vývoj softwaru šel jako po drátkách. To druhé je však schopnost algoritmicky myslet. Jak konkrétně vyřešit problém, například třídění. Jestli nejdřív třídit, pak až osekat či naopak. A jsme u otázky času, **pokud nejdřív osekáme**, pak třeba z **desetitisíců položek třídíme jen 134**. A ta rychlost je pak jasná. Navíc, pokud jen tak přejímáme kód někoho jiného, musíme věřit tomu, že ví, co dělá. Sice si můžeme kód vyzkoušet, ale co když jeho algoritmus funguje jen pro malá data?

Je spousta problémů, které nikdo neřešil a měli bychom vědět, jak postupovat při řešení problémů. K tomu slouží naše sekce pro výuku algoritmů.

Ukázka na závěr - třídění pomocí selection sort
-----------------------------------------------

Pojďme si teď sami zkusit, jak bychom mohli čísla v poli setřídit. Zkusme použít ten nejzákladnější a nejspíš nejméně vhodný algoritmus, třídění výběrem.

### Idea algoritmu (neefektivní selection sort)

Můžeme si říct, že v nesetříděném poli vždy vybereme nejmenší dosud nevybraný prvek a ten vložíme do nového pole. Potom budeme vyhledávat větší:

```
0. (3,1,5,4)
1. (1)
2. (1,3)
3. (1,3,4)
4. (1,3,4,5)
```


Proč je tento kód neefektivní? Protože **si musíme vytvářet pole bokem**, tzn. **pro pole velikosti milion vytvoříme druhé pole o stejné velikosti**.

### Idea algoritmu (efektivní selection sort)

Pole budeme třídit na místě, tak jaké je i znění tohoto algoritmu.

Mějme pole o velikosti `n`. Pojedeme od prvního prvku pole a **najdeme nejmenší prvek**. Ten vyměníme s prvním prvkem. Víme, že menší prvek se v poli nevyskytuje, takže máme jeden setříděný prvek. Posuneme se a hledáme nejmenší prvek ve zbytku pole. Ten zase vyměníme s druhým atd... Ukázka algoritmu:

```
0. (3,1,5,4)            původní pole
1. (1,3,5,4)            nejmenší je 1, tedy vyměníme 1 s 3
2. (1,3,5,4)            nejmenší je 3, 3 je na vhodném místě, neměníme nic
3. (1,3,4,5)            nejmenší je 4, vyměníme 4 a 5, zbyl nám poslední prvek, který
                        musí být největší, proto algoritmus končí, máme setříděno
```


Nyní si předvedeme jeho implementaci:

```
public static int[] selectionSort(int[] pole) {
   for (int i = 0; i < (pole.length - 1); i++) {
      int indexMinima = i;
      for (int j = i + 1; j < pole.length ; j++) {
           if (pole[j] < pole[indexMinima]) {
               indexMinima = j;
           }
      }
      int temp = pole[i];
      pole[i] = pole[indexMinima];
      pole[indexMinima] = temp;
   }
   return pole;
}
```


Benchmark řadících algoritmů
----------------------------

Pro názornost jsme pro vás připravili aplikaci, která porovná 6 nejznámějších řadících algoritmů, můžete si ji stáhnout v příloze. Její výsledek vypadá na mém počítači takto:

```
Konzolová aplikace
| Algoritmus/Prvků      | 1000  | 5000  | 10000 | 20000
|-----------------------|-------|-------|-------|-------
| Selection sort        | 6ms   | 30ms  | 51ms  | 197ms
| Bubblesort            | 10ms  | 60ms  | 151ms | 781ms
| Insertion sort        | 3ms   | 19ms  | 24ms  | 93ms
| Heapsort              | 1ms   | 1ms   | 2ms   | 4ms
| Merge sort            | 1ms   | 1ms   | 3ms   | 8ms
| Quick sort            | 0ms   | 0ms   | 1ms   | 4ms
```


Pokud se budete dívat na zdrojový kód, není v něm nic, co byste ještě neznali, kromě rozdělení kódu do více funkcí a souborů. Této problematice se budeme dále věnovat v OOP kurzu.

Na výstupu benchmarku vidíme, za jak dlouho daný algoritmus seřadil pole o `1000`, `5000`, `10000` a `20000` prvcích. Vidíme zde krásně, jak asymptotická složitost opravdu funguje v praxi. Zatímco u `1000` prvků je úplně jedno, jaký algoritmus použijeme, u `10000` prvků je Bubblesort již nepoužitelný a když počet prvků zdvojnásobíme, není jeho čas také dvojnásobný, ale více než trojnásobný. Pro více prvků se benchmark již ani nezkoušel, protože by na něm Bubblesort trval desítky vteřin. Určitě má tedy smysl přemýšlet nad tím, jaký algoritmus pro jaký účel používáme a od špatné volby nás nezachrání ani rychlý počítač. Zde stroj s frekvencí několika GHz nedokáže rychle Bubblesortem seřadit 10 tisíc čísel, i když Quick sortem to trvá 1 milisekundu.

Na detailní popis i implementaci řadících algoritmů se můžete podívat v kurzu [Řadící algoritmy](https://www.itnetwork.cz/navrh/algoritmy/algoritmy-razeni). Benchmark je přiložený pod lekcí ke stažení.

Nyní už mi nezbývá, než ti popřát hodně zdaru se světě algoritmů. Aneb co dělá programátor? Řeší problémy, které by normálního člověka nenapadly. Ale o tom to přeci je, že?

V následujícím cvičení, [Řešené úlohy k 17.-19. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-vicerozmerna-pole-matematicke-funkce), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 17.-19. lekci Javy
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Řešené úlohy k 17.-19. lekci Javy

V minulé lekci, [K čemu jsou algoritmy?](https://www.itnetwork.cz/java/zaklady/k-cemu-jsou-algoritmy-java), jsme se uvedli do světa algoritmů.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulých tutoriálů a pokuste se na to přijít.

Jednoduchý příklad
------------------

Vytvořte program, který do konzole vykreslí

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma algoritmy a matematické funkce. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 20 - Verzovací nástroj Git a IntelliJ IDEA
V předešlém cvičení, [Řešené úlohy k 17.-19. lekci Javy](https://www.itnetwork.cz/java/zaklady/java-resene-priklady-vicerozmerna-pole-matematicke-funkce), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Základní konstrukce jazyka Java máme za sebou. Než kurz zcela opustíme, naučíme se pracovat s **nástrojem Git**, který nám pomáhá efektivně **spravovat a sledovat změny** v našem kódu. Často se také používá pro **spolupráci ve vývojových týmech**.

Co je to Git?
-------------

Git je nástrojem pro správu verzí, který programátorům umožňuje **sledovat historii** všech **změn** v projektu. Můžeme se tak jednoduše **vrátit k libovolné předchozí verzi** našeho kódu, která byla ještě funkční nebo když zjistíme, že nám nějaký nový způsob řešení čehokoli nakonec nevyhovuje. Verze lze organizovat do tzv. **větví**, které si můžeme libovolně pojmenovávat.

Git si můžeme rovněž představit jako magický deník, který si pamatuje každý náš krok při psaní kódu.

### Proč používat Git?

Git nám určitě pomůže organizovat kód ve vlastních projektech. Největší přínos Gitu je ale při **práci v týmu**, kdy umožňuje jednoduše vidět, jaké konkrétní změny kdo v aplikaci provedl a kde. Když se stane, že **dva lidé** editovali ten samý soubor, lze **změny sloučit** (zamergovat) a nestane se tak, že si členové vývojového týmu přepisují kód pod rukama. Proto je **základní znalost práce s Gitem očekávána na většině pracovních pozic** (kde existuje nějaký vývojový tým). Přes Git rovněž studenti našich [rekvalifikačních kurzů](https://www.itnetwork.cz/prace-a-podnikani-v-it/rekvalifikacni-kurzy/rekvalifikacni-kurzy-java/) odevzdávají svůj projekt ke zkoušce.

Git lze používat do jisté míry i jako **zálohu**. Změny však musíme ručně a pravidelně nahrávat na vzdálený repozitář. Aplikace také obvykle obsahují i další soubory kromě zdrojových kódů, které se na Git nedávají. Proto minimálně pro začátečníky doporučujeme stále používat synchronizovaná úložiště typu Dropbox, abyste o své projekty nepřišli při ztrátě nebo poškození počítače.

Základní příkazy Gitu
---------------------

S Gitem se často pracuje přes příkazový řádek. My si práci usnadníme a budeme pracovat v grafickém rozhraní IntelliJ IDEA. Budeme používat následující příkazy:

*   **Commit** - je v Gitu ekvivalentem **ukládání** dokumentu a slouží k vytvoření záznamu o tom, co se změnilo od posledního commitu (uložení) ,
*   **Push** - **nahraje** všechny naše lokální změny (commity) na vzdálený server, odkud si je mohou ostatní programátoři stáhnout,
*   **Pull** - **stáhne** ze vzdáleného serveru všechny změny od ostatních programátorů do naší verze kódu.

Příkazů je samozřejmě více, těm je pak věnovaný celý kurz. Nám to však takto stačí.

Git repozitář
-------------

Git repozitář si představme jako speciální složku na našem počítači, která obsahuje všechny soubory projektu, ale kromě toho také informace o historii všech změn, které jsme v těchto souborech udělali. Pokaždé, když uděláme nový commit, Git uloží informace o změnách právě do repozitáře.

### Vzdálený vs. lokální repozitář

Repozitář je uložený na našem počítači (lokální repozitář), ale také na serveru na internetu (vzdálený repozitář). Pokaždé, když provedeme push, odešleme všechny změny z našeho lokálního repozitáře do vzdáleného. Tam si je pak mohou prohlížet další lidé. A naopak, když provedeme pull, stáhneme nejnovější změny ze vzdáleného repozitáře do svého lokálního (např. změny provedené ostatními).

### Vytvoření vzdáleného GitHub repozitáře

GitHub je jednou z nejznámějších platforem pro hostování Git repozitářů, a proto ji budeme využívat i my v tomto tutoriálu.

#### Registrace

Abychom na GitHubu mohli vytvořit vlastní repozitář, musíme se nejprve zaregistrovat. Přejdeme na oficiální stránky [GitHub](https://github.com/signup) a provedeme registraci, kde si nastavíme:

*   emailovou adresu,
*   heslo,
*   svou unikátní přezdívku.

Postup registrace vypadá takto:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/git-github-register.gif)

#### Vytvoření repozitáře

Po úspěšné registraci se přihlásíme do svého účtu. V pravém horním rohu klikneme na tlačítko s plusem a šipkou (_\+ ▼_) a z menu vybereme položku _New repository_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/git-github-new-repository.png)

Následně vidíme formulář k vytvoření repozitáře. Pojďme si podrobněji projít jednotlivé položky a jejich význam:

*   **Repository name** - **Název** repozitáře je krátký, jednoduchý a popisuje, co obsahuje. Vyhýbáme se speciálním znakům a namísto mezer píšeme pomlčky (`-`).
*   **Public / Private** - **Viditelnost** určuje, kdo může repozitář vidět a přistupovat k němu. Nejčastěji vytváříme privátní repozitáře, ke kterým máme přístup pouze my či naši kolegové. Veřejné repozitáře vytváříme zejména pro tzv. open source projekty, které povzbuzují veřejnou spolupráci.
*   **README file** - Tento dokument je první věc, kterou uživatel vidí, když navštíví náš repozitář. Obsahuje základní popis projektu, instrukce pro instalaci, použití, přispívání do projektu a tak dále.
*   **.gitignore** - Již víme, že Git repozitář by měl obsahovat výhradně zdrojový kód. Tento soubor se používá k **vyloučení ostatních souborů** nebo složek z verzovacího systému. Jedná se například o dočasnou složku `.idea/`, spustitelné `.jar` soubory a podobně.
*   **License** - **Licence** v repozitáři určuje, jak mohou ostatní používat, kopírovat, modifikovat či distribuovat náš projekt.

Nový repozitář pojmenujeme např. `git-tutorial`, viditelnost nastavíme na _Private_ a dále přidáme _README_ a ._gitignore template: Java_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/git-github-new-repository-description.png)

Teď, když máme formulář vyplněný, klikneme na tlačítko _Create repository_ a počkáme, než se vzdálený repozitář vytvoří:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/git-github-empty-repository.png)

Tímto máme vzdálený GitHub repozitář vytvořený a můžeme přejít na práci s Gitem v IntelliJ IDEA 😊

Git v IntelliJ IDEA
-------------------

Prvně potřebujeme mít nainstalovaného Git klienta na našem počítači.

### Instalace Git

Spustíme IntelliJ IDEA a v úvodní nabídce klikneme na _Get from VCS_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-get-from-vcs.png)

Pokud nám IDE po spuštění automaticky otevřelo poslední projekt, klikneme v menu na _File_ -> _Close project_. Tímto se dostaneme zpět na úvodní nabídku.

Následně v menu klikneme na _Repository URL_, z rozbalovací nabídky _Version control_ vybereme _Git_ a klikneme na tlačítko _Download and Install_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-download-git.png)

Pokud ve formuláři nevidíte možnost _Download and Install_, máte na svém počítači již Git nainstalovaný 🙂

### Klonování repozitáře

Jako další krok je potřeba vzdálený repozitář naklonovat do lokálního. Po úspěšné instalaci Gitu vybereme v menu _GitHub_ a přihlásíme se ke svému účtu kliknutím na _Log In via GitHub..._:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-vcs-github.png)

Nyní vidíme formulář s našimi vzdálenými GitHub repozitáři. Z nabídky vybereme repozitář, který jsme si v předchozím kroku založili a klikneme na tlačítko _Clone_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-clone-project.png)

Tímto se vzdálený repozitář naklonuje (zkopíruje) z GitHubu do počítače. Ihned poté se automaticky otevře rozhraní IntelliJ IDEA, které již dobře známe.

### Verzování projektu

V projektu klikneme pravým tlačítkem myši na adresář `git-tutorial/`, dále v nabídce zvolíme _New_ > _Directory_ a nový adresář pojmenujeme `src/`. Na vytvořený adresář znovu klikneme pravým tlačítkem myši a v nabídce vybereme _Mark Directory as_ > _Sources Root_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-source-root.png)

Poté klikneme pravým tlačítkem myši na adresář `src/`, zvolíme _New_ > _Java Class_ a třídu pojmenujeme `HelloWorld`. Můžeme si všimnout, že ve stromové struktuře svítí třída `HelloWorld` červeně. To znamená, že se zatím neverzuje. Zároveň se nám zobrazilo dialogové okno _Add File to Git_, ve kterém se nás IDE dotazuje, zda chceme třídu přidat do Gitu a začít verzovat. Klikneme tedy na tlačítko _Add_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-add-file.png)

Ve stromové struktuře nyní vidíme třídu zeleně, to znamená, že je do Gitu přidána a verzuje se.

Pokud jste dialogové okno zavřeli a název třídy je stále červený, klikněte na třídu pravým tlačítkem myši a v nabídce zvolte _Git_ a klikněte na _Add_.

Pojďme do třídy vložit následující kód, který jistě poznáváte:

```
public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Ahoj světe!");
    }
}
```


Nyní je na čase vytvořit náš první commit.

#### Commit

V levém postranním panelu klikneme na ikonu ![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-commit-icon.png) čímž zobrazíme nový panel _Commit_.

V nabídce _Changes_ vybereme soubory, kterých se commit týká. V našem případě pouze soubor `HelloWorld.java`. Dále do textového pole _Commit message_ napíšeme, co jsme udělali. My jsme do repozitáře přidali aplikaci Hello World, napíšeme tedy např. _Add HelloWorld application_ a klikneme na tlačítko _Commit_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-commit-gif.gif)

Správně napsaná commit zpráva by měla **jasně a stručně popisovat, jaké změny** daný commit přináší. Dále existují různé konvence, ale obecně platí, že **zprávy píšeme v imperativu** a ideálně v anglickém jazyce.

##### Commit amend

Při vytváření commitu se nám rovněž zobrazí checkbox _Amend_, který nám umožní upravit poslední commit. Tato možnost je užitečná, pokud jsme udělali chybu ve svém posledním commitu, například zapomněli přidat nějaký soubor, nebo chceme změnit commit zprávu.

#### Push

Změnu máme vytvořenou. Nyní ji nahrajeme do vzdáleného repozitáře na GitHubu. K tomu slouží operace push. Push typicky provádíme po dokončení logické jednotky práce, před odchodem z domova či práce a nebo pokud chceme, aby naše změny byly viditelné pro ostatní.

V IDE push vyvoláme kliknutím na záložku _main_ v levé části horního panelu:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-push.png)

V dalším okně push potvrdíme kliknutím na tlačítko _Push_:

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-confirm-push.png)

Pozor! **Projekty vytvořené podle kurzů z ITnetwork** pod licencí PRO **nenahrávejte do veřejných repozitářů!** Jsou **chráněny autorskými právy** a jejich šíření je **nelegální**. Mohl by si je pak zobrazit a stáhnout kdokoli na internetu, čím by po Vás mohla být vyžadována náhrada škody.

#### Pull

Opačnou operací k push je pull. Ta stáhne ze vzdáleného serveru všechny změny od ostatních do naší verze kódu. Pull provedeme opět kliknutím na záložku _main_ v levé části horního panelu. Poté rozklikneme položku _Remote_ > _main_ a zvolíme možnost _Rebase_ (pokud chceme změny v projektu přepsat) nebo _Merge_ (pokud chceme změny v projektu sloučit):

![Základní konstrukce jazyka Java](https://www.itnetwork.cz/images/10978/git/new-ui/git-intellij-pull.png)

Jelikož na vzdáleném serveru nemáme aktuálně žádné změny, operace po dokončení zobrazí hlášku _All files are up-to-date_.

Nyní umíme založit vzdálený GitHub repozitář a napojit se na něj přes IntelliJ IDEA. Umíme vytvářet commity a do repozitáře je nahrávat pomocí příkazu push, případně je stáhnout příkazem pull. Pokud vás Git zaujal, detailně se jím zabýváme v pokročilém kurzu [Git](https://www.itnetwork.cz/git).

V následujícím kvízu, [Kvíz - Základní konstrukce Javy](https://www.itnetwork.cz/java/zaklady/zaverecny-test-zakladni-konstrukce-javy), si vyzkoušíme nabyté zkušenosti z kurzu.

# Učební pomůcka na Základy Javy - Tahák
[Java](https://www.itnetwork.cz/java) [Základní konstrukce](https://www.itnetwork.cz/java/zaklady) Učební pomůcka na Základy Javy - Tahák

V předchozí lekci, [Verzovací nástroj Git a IntelliJ IDEA](https://www.itnetwork.cz/java/zaklady/prace-s-nastrojem-git-v-intellij-idea), jsme se naučili založit vzdálený GitHub repozitář a verzovat své projekty pomocí základních Git operací, které nám IntelliJ IDEA nabízí.

Stále si nemůžete zapamatovat nejdůležitější pojmy a ztrácíte se ve vašich zápiscích? Ve spolupráci s našimi lektory prezenčních školení jsme pro vás vytvořili vymazlený tahák, který se vejde na **1 oboustrannou A4**. Právě toto množství informací se nám v praxi prokázalo jako ideální pro udržení pojmů jednoho tématického okruhu v hlavě. Pomůže vám uložit si ty nejdůležitější příkazy Javy a stane se vaším nepostradatelným pomocníkem při výuce i praxi.

Tahák má celkem 3 strany a pojímá následující problematiku:

*   Výpis
*   Proměnné
*   Načtení vstupu
*   Práce s řetězci
*   Matematika
*   Podmínky
    *   Switch
    *   Větvené podmínky
*   Cykly
*   Práce s polem

Náhled strany 2/3:

![Tahák základů programování v Javě](https://www.itnetwork.cz/images/5/java/java_zaklady_tahak.png)

Archiv ke stažení obsahuje jak oboustranné PDF, tak PDF se třemi obyčejnými stranami, abyste si mohli zvolit variantu jednodušší k vytisknutí na vaší konkrétní tiskárně.

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Vymazlený tahák na jednu oboustrannou A4. Zapamatujte si snadno nejdůležitější syntaxi Javy jako vstup a výstup, proměnné, řetězce, podmínky, cykly, pole.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B31020%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522XN6fVclUum%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)