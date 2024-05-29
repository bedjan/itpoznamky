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

