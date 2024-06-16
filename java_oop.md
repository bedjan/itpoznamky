# Lekce 1 - Úvod do objektově orientovaného programování v Javě
Vítejte u první lekce kurzu o objektově orientovaném programování v Javě. Kurz [Základní konstrukce jazyka Java](https://www.itnetwork.cz/java/zaklady) již máme zasebou, minule jsme ji dokončili dílem [Matematické funkce v Javě a knihovna Math](https://www.itnetwork.cz/java/zaklady/java-tutorial-knihovna-math-matematicke-funkce). V tomto kurzu se naučíme objektově programovat a hlavně **objektově myslet**. Je to něco trochu jiného, než jsme dělali doteď a samotný program už nebudeme chápat jako několik řádek příkazů, které interpret vykonává odshora dolů.

Objektově orientované programování (dále jen OOP) nevzniklo náhodou, ale je důsledkem vývoje, který k němu směřoval. Jedná se o moderní metodiku vývoje softwaru, kterou podporuje většina programovacích jazyků. Častou chybou je, že se lidé domnívají, že OOP se využívá pouze při psaní určitého druhu programů a jinak je na škodu. Opak je pravdou - OOP je filosofie, je to nový pohled na funkci programu a komunikaci mezi jeho jednotlivými částmi. Mělo by se používat vždy, ať už děláme malou utilitku nebo složitý databázový systém. OOP není jen technika nebo nějaká doporučená struktura programu, je to hlavně nový způsob myšlení, nový náhled na problémy a nová éra ve vývoji softwaru.

Nejprve se podíváme do historie, jak se programovalo dříve a které konkrétní problémy OOP řeší. Je to totiž důležité k tomu, abychom pochopili, proč OOP vzniklo.

Evoluce metodik
---------------

Mezi tím, jak se programovalo před 40ti lety a jak se programuje dnes, je velký rozdíl. [První počítače](https://www.itnetwork.cz/hardware-pc/stavba-pc/hardware-stavime-si-pocitac-pc-case-a-zdroj) neoplývaly velkým výkonem a i jejich software nebyl nijak složitý. Vývoj hardwaru je však natolik rychlý, že se počet tranzistorů v mikroprocesorech každý rok zdvojnásobí (Moorův zákon). Bohužel, lidé se nedokáží rozvíjet tak rychle, jako se rozvíjí hardware. Stále rychlejší počítače vyžadují stále složitější a složitější software (resp. lidé toho chtějí po počítačích stále více a více). Když se v jedné chvíli zjistilo, že okolo 90 % softwaru je vytvořeno se zpožděním, s dodatečnými náklady nebo selhalo úplně, hledaly se nové cesty, jak programy psát. Vystřídalo se tak několik přístupů, přesněji se jim říká paradigma (chápejte jako směr myšlení). My si je zde popíšeme.

### 1\. Strojový kód

Program byl jen souborem instrukcí, kde jsme neměli žádnou možnost pojmenovávat proměnné nebo zadávat matematické výrazy. Zdrojový kód byl samozřejmě specifický pro daný hardware (procesor). Toto paradigma bylo brzy nahrazeno.

### 2\. Nestrukturované paradigma

Nestrukturovaný přístup je podobný assemblerům, jedná se o soubor instrukcí, který se vykonává odshora dolů. Zdrojový kód již nebyl závislý na hardwaru a byl lépe čitelný pro člověka, přístup na nějakou dobu umožnil vytvářet komplexnější programy. Bylo tu však stále mnoho úskalí: Jediná možnost, jak udělat něco vícekrát nebo jak se v kódu větvit, byl příkaz `GOTO`. Příkaz `GOTO` nám umožňoval "skákat" na jednotlivá místa v programu. Místa byla dříve specifikována číslem řádku zdrojového kódu, což je samozřejmě nepraktické. Když do kódu vložíme nový řádek, čísla přestanou souhlasit a celý kód je rozbitý. Později vznikla možnost definovat tzv. "návěstí". Takto se obcházela např. absence cyklů. Takovýto způsob psaní programů je samozřejmě velice nepřehledný a brzy přestal postačovat pro vývoj složitějších programů.

Uvědomme si, že obrovské rozšíření počítačů za posledních několik dekád má na svědomí růst poptávky po softwaru a logicky také růst poptávky po programátorech. Jistě existují lidé, kteří dokáží bez chyby psát programy v [ASM](https://www.itnetwork.cz/assembler) nebo jiných nízkých jazycích, ale kolik jich je? A kolik si asi za takovou nadlidskou práci účtují? Je potřeba psát programy tak, aby i méně zkušení programátoři dokázali psát kvalitní programy a nepotřebovali k tvorbě jednoduché utilitky 5 let praxe.

### 3\. Strukturované programování

Strukturované programování je první paradigma, které se udrželo delší dobu a opravdu chvíli postačovalo pro vývoj nových programů. Programujeme pomocí [cyklů](https://www.itnetwork.cz/java/zaklady/java-tutorial-cykly-for-while) a [větvení](https://www.itnetwork.cz/java/zaklady/java-tutorial-podminky-vetveni-if-switch). To je v podstatě to, kam jsme se doteď dostali.

Program lze rozložit do funkcí (metod), tomu jsme se nevěnovali, protože to v Javě (která je objektová) ani moc dobře nejde a raději jsem dal přednost tento mezikrok přeskočit a začít rovnou s OOP. U strukturovaného programování hovoříme o tzv. funkcionální dekompozici. Problém se rozloží na několik podproblémů a každý podproblém potom řeší určitá funkce s parametry. Nevýhodou je, že funkce umí jen jednu činnost, když chceme něco jiného, musíme napsat novou. Neexistuje totiž způsob, jak vzít starý kód a jen trochu ho modifikovat, musíme psát znovu a znovu - vznikají zbytečné náklady a chyby. Tuto nevýhodu lze částečně obejít pomocí parametrizace funkcí (počet parametrů poté ale rychle narůstá) nebo použitím globálních proměnných. S globálními daty vzniká však nové nebezpečí - funkce mají přístup k datům ostatních. To je začátek konce, nikdy totiž neuhlídáme, aby někde nedošlo k přepsání glob. dat mezi funkcemi a začne docházet k nekontrolovatelným problémům. Celý program se potom skládá z nezapouzdřených bloků kódu a špatně se udržuje. Každá úprava programu zvyšuje složitost, program potom nutně dojde do stavu, kdy náklady na přidávání nových funkcí vzrostou na tolik, že se program již nevyplatí rozšiřovat. Zástupci tohoto přístupu jsou například jazyky [C](https://www.itnetwork.cz/cecko) a [Pascal](https://www.itnetwork.cz/pascal).

Mezi strukturovaným programováním a objektově orientovaným programováním existoval ještě mezičlánek, tzv. modulární programování, která nám umožňuje zapouzdřit určitou funkcionalitu do modulů. Stále však neexistuje způsob, jak již napsaný kód modifikovat a znovu využít.

Jak již jsem se zmínil na začátku článku, někdy se uvádí, že se jednoduché programy mají psát neobjektově, tedy strukturovaně. Není to však pravda. Když opomineme fakt, že porušujeme filozofii OOP jako takovou, nikdy nemůžeme vědět, zda se tento program neuchytí a z malé utilitky se nestane něco vážnějšího. Potom opět nutně dospějeme do stavu, kdy program nebude možné dál rozšiřovat a budeme ho buď muset zahodit nebo celý přepsat s pomocí OOP.

Neobjektovým metodám psaní kódu se přezdívá _spaghetti code_ pro jejich nepřehlednost (protože špagety jsou zamotané).

Objektově orientovaný přístup
-----------------------------

Jedná se o filozofii a způsob myšlení, designu a implementace, kde klademe důraz na **znovupoužitel­nost**. Přístup nalézá inspiraci v průmyslové revoluci - vynález základních komponent, které budeme dále využívat (např. když stavíme dům, nebudeme si pálit cihly a soustružit šroubky, prostě je již máme hotové).

Poskládání programu z komponent je výhodnější a levnější. Můžeme mu věřit, je otestovaný (o komponentách se ví, že fungují, jsou otestovány a udržovány). Pokud je někde chyba, stačí ji opravit **na jednom místě**. Jsme motivováni k psaní kódu přehledně a dobře, protože ho po nás používají druzí nebo my sami v dalších projektech (přiznejme si, že člověk je od přírody líný a kdyby nevěděl, že se jeho kód bude znovu využívat, nesnažil by se ho psát kvalitně 🙂).

Znalosti, které jsme se doteď naučili, samozřejmě budeme používat dál. Náš kód budeme pouze jinak strukturovat a to do komunikujících objektů.

### Jak OOP funguje

Snažíme se nasimulovat realitu tak, jak ji jsme zvyklí vnímat. Můžeme tedy říci, že se **odpoutáváme od toho, jak program vidí počítač (stroj) a píšeme program spíše z pohledu programátora (člověka)**. Jako jsme tehdy nahradili assembler lidsky čitelnými matematickými zápisy, nyní jdeme ještě dál a nahradíme i ty. Jde tedy o určitou úroveň abstrakce nad programem. To má značné výhody už jen v tom, že je to pro nás přirozenější a přehlednější.

**Základní jednotkou je objekt**, který odpovídá nějakému objektu z reálného světa (např. objekt _člověk_ nebo _databáze_).

![Objekty v objektově orientovaném programování - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/oop_objekty.png)

Objekt má své atributy a metody.

#### Atributy

Atributy objektu jsou **vlastnosti** neboli data, která uchovává (např. u člověka jméno a věk, u databáze heslo). Jedná se o prosté proměnné, se kterými jsme již stokrát pracovali. Někdy o nich hovoříme jako o vnitřním stavu objektu.

#### Metody

Metody jsou **schopnostmi**, které umí objekt vykonávat. U člověka by to mohly být metody: `jdiDoPrace()`, `pozdrav()` nebo `mrkni()`. U databáze `pridejZaznam()` nebo `vyhledej()`). Metody mohou mít parametry a mohou také vracet nějakou hodnotu. Velmi dobře je známe, používali jsme např. metodu `split()` na objektu `String`. `String` je vlastně objekt, který reprezentuje v realitě nějaký text. Vidíte, že si můžeme jednoduše představit, že jednáme s řetězcem textu, něco mu přikazovat nebo na něm něco nastavovat. Obsahuje metody, které řetězec umí vykonávat (kopírování, mazání, splitování,...). Pole má například atribut `length`, který značí jeho délku.

![Objekty v objektově orientovaném programování - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/oop_atributy_metody.png)

Ve starších jazycích metody nepatřily objektům, ale volně se nacházely v modulech (jednotkách). Místo metody `text.split()` bychom tedy postaru psali `split(text)`. Nevýhodou samozřejmě bylo zejména to, že metoda `split()` zde nikam nepatří. Nebyl způsob, jakým si vyvolat seznam toho, co se s řetězcem dá dělat a v kódu byl nepořádek. Navíc jsme nemohli mít 2 metody se stejným názvem, v OOP můžeme mít `uzivatel.vymaz()` a `clanek.vymaz()`. To je velmi přehledné a jednoduché, ve strukturovaném programu bychom museli psát: `vymaz_uzivatele(uzivatel)` a `vymaz_clanek(clanek)`. Takovýchto hloupých metod bychom museli mít někde rozházených tisíce. Pokud vám to připomíná jazyk [PHP](https://www.itnetwork.cz/php), bohužel máte pravdu. PHP je v tomto opravdu hrozné a to z toho důvodu, že jeho návrh je starý. Sice se časem plně přeorientovalo na objekty, ale jeho základy se již nezmění. Java je naštěstí jazyk moderní a je silně postavená na objektech.

V tomto článku si vysvětlíme jen úplné základy, tedy jak objekty vytvářet a jak zapouzdřit jejich vnitřní logiku. Dalším funkcím OOP (mluvím zejména o dědičnosti) budou věnovány další lekce, aby toho nebylo najednou moc 🙂

### Třída

S pojmem třída jsme se již také setkali, chápali jsme ji jako soubor příkazů. Třída však umožňuje mnohem více. Třída je **vzor**, podle kterého se objekty vytváří. Definuje jejich vlastnosti a schopnosti.

Objekt, který se vytvoří podle třídy, se nazývá **instance**. Instance mají stejné **rozhraní** jako třída, podle které se vytváří, ale navzájem se liší svými daty (atributy). Mějme například třídu `Clovek` a od ní si vytvořme instance `karel` a `josef`. Obě instance mají jistě ty samé metody a atributy, jako třída (např. `jmeno` a `vek`) a metody (`jdiDoPrace()` a `pozdrav()`), ale hodnoty v nich se liší (první instance má v atributu `jmeno` hodnotu `Karel` a v atributu `vek` hodnotu `22`, druhá `Josef` a `45`).

Komunikace mezi objekty probíhá pomocí předávání zpráv, díky čemuž je syntaxe přehledná. Zpráva obvykle vypadá takto: `prijemce.jmenoMetody(parametry)`. Např. `karel.pozdrav(sousedka)` by mohl způsobit, že instance `karel` pozdraví instanci `sousedka`.

OOP stojí na základních třech pilířích:

*   Zapouzdření
*   Dědičnost
*   Polymorfismus.

Vysvětleme si první z nich.

### Zapouzdření

Zapouzdření umožňuje **skrýt některé metody a atributy** tak, aby zůstaly použitelné jen pro třídu zevnitř. Objekt si můžeme představit jako **černou skřínku** (anglicky _blackbox_), která má určité **rozhraní (interface)**, přes které jí předáváme instrukce/data a ona je zpracovává.

Nevíme, jak to uvnitř funguje, ale víme, jak se navenek chová a používá. Nemůžeme tedy způsobit nějakou chybu, protože využíváme a vidíme jen to, co tvůrce třídy zpřístupnil.

Příkladem může být třída `Človek`, která bude mít atribut `datumNarozeni` a na jeho základě další atributy jako `plnolety` a `vek`. Kdyby někdo objektu zvenčí změnil `datumNarozeni`, přestaly by platit proměnné `plnolety` a `vek`. Říkáme, že vnitřní stav objektu by byl nekonzistentní. Toto se nám ve strukturovaném programování může klidně stát. V OOP však objekt zapouzdříme a atribut `datumNarozeni` označíme jako privátní, zvenčí tedy nebude viditelný. Naopak ven vystavíme metodu `zmenDatumNarozeni()`, která dosadí nové datum narození do proměnné `datumNarozeni` a zároveň provede potřebný přepočet věku a přehodnocení plnoletosti v atributu `plnolety`. Použití objektu je bezpečné a aplikace stabilní.

Zapouzdření tedy donutí programátory používat objekt jen tím správným způsobem. **Rozhraní (interface) třídy rozdělí na veřejně přístupné (`public`) a vnitřní strukturu (`private`)**.

V příští lekci, [První objektová aplikace v Javě - Hello object world](https://www.itnetwork.cz/java/oop/java-tutorial-prvni-objektova-aplikace-hello-object-world), si vytvoříme svůj první objektový program.

# Lekce 2 - První objektová aplikace v Javě - Hello object world
Minulá lekce, [Úvod do objektově orientovaného programování v Javě](https://www.itnetwork.cz/java/oop/java-tutorial-uvod-do-objektove-orientovaneho-programovani), nás uvedla do objektově orientovaného programování.

Již víme, že objekty mají atributy a metody. Také víme, že k vytvoření objektu vytvoříme nejprve třídu. Ta je vzorem, podle kterého následně tvoříme její instance.

Na začátku kurzu se základními strukturami jazyka Javy jsme si vytvořili program _Hello world_. Udělejme si nyní podobný program jako úvod do objektově orientovaného programování. Naprogramujme si aplikaci **Hello object world**!

Založme si novou Java aplikaci tak, jak jsme to dělali doposud.

*   V záložce _Project_ klikneme pravým tlačítkem myši na na balík (_package_) našeho projektu a vybereme z menu položku _New_ -> _Java Class_:
    
    ![Přidání nové třídy class k Java projektu v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_oop_new_class.png)
    
*   V záložce _Projects_ klikneme pravým tlačítkem myši na balík (_package_) našeho projektu a vybereme z menu položku _New_ -> _Java Class_:
    
    ![Přidání nové třídy class k Java projektu v NetBeans - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/oop_new_class.png)
    

Vytvoříme třídu `HelloObjects`, ve které obvyklým způsobem vytvoříme hlavní metodu `main()`.

Poté vytvoříme další třídu `Zdravic` a potvrdíme. Název třídy píšeme vždy notací `PascalCase`, tedy bez mezer a na rozdíl od proměnných (ty používají `camelCase`) má **každé slovo** velké první písmeno, tedy i první. Název je samozřejmě také bez diakritiky, tu v programu používáme maximálně uvnitř textových řetězců, nikoli v identifikátorech.

*   ![Vytvoření nové třídy v Javě v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_oop_new_class_dialog.png)
    
*   ![Vytvoření nové třídy v Javě v NetBeans - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/oop_new_class_dialog.png)
    

Podle této třídy později vytvoříme objekt `zdravic`, který nás bude umět pozdravit. Vidíme, že se na program již díváme úplně jinak, za každou akci je zodpovědný nějaký objekt, nestačí pouze něco "nabušit" do metody `main()`. V našem případě vám to může přijít zbytečné, u složitějších aplikací si to budete pochvalovat ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V našem _package_ přibude další soubor `.java` a IDE nám ho otevře. K původnímu souboru `HelloObjects.java` s metodou `main()` se můžeme vrátit pomocí záložky nebo přes záložku _Projects_.

Podívejme se, co nám IDE vygenerovalo a kód si popišme. Následně si do třídy přidáme vlastní metodu pro pozdravení.

```
package cz.itnetwork;

public class Zdravic {

}
```


Klíčové slovo `package` nám označuje tzv. balíček. Stejně, jako se metody sdružují do tříd, tak se třídy sdružují do balíčků. Pokud chceme, aby byla naše třída viditelná i ve výchozí třídě, kde máme metodu `main()`, musíme ji mít ve stejném balíčku. To zde platí, IDE samo novou třídu vloží do toho samého balíčku, vy místo `helloobjects` budete mít název své aplikace, pokud jste ji nepojmenovali, bude tam pravděpodobně `untitled1`.

V _package_ je tedy umístěná samotná třída, která se deklaruje klíčovým slovem `class`. Třída se jmenuje `Zdravic` a je prázdná.

Všimněte si, že kód je téměř stejný, jako ten v `HelloObjects.java`, již tedy rozumíme tomu, co jsme předtím ignorovali. Náš konzolový program byla vlastně třída umístěná v **package**, která obsahovala jednu metodu `main()`. Vidíme, že v Javě se v podstatě neobjektově programovat ani nedá, což je jen dobře ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Nyní si do třídy `Zdravic` přidáme metodu `pozdrav()`, bude veřejně viditelná a nebude mít žádnou návratovou hodnotu ani atributy.

Deklarace metody v Javě je tedy následující:

```
[modifikátorPřístupu] [návratovýTyp] [názevMetody]([parametry])
```


Před metodou bude tzv. modifikátor přístupu, v našem případě `public` (veřejná). Metoda nebude vracet žádnou hodnotu, toho docílíme klíčovým slovem `void`. Dále bude následovat samotný název metody. Metody píšeme stejně jako proměnné velbloudí notací s malým počátečním písmenem. Závorka s parametry je povinná, my ji necháme prázdnou, protože metoda žádné parametry mít nebude. Do těla metody zapíšeme kód pro výpis na konzoli:

Naše třída bude nyní vypadat takto:

```
public class Zdravic {

    public void pozdrav() {
        System.out.println("Hello object world!");
    }

}
```


Zde jsme prozatím skončili, přejdeme do souboru `HelloObjects.java`.

Nyní si v těle metody `main()` vytvoříme **instanci** třídy `Zdravic`. Bude to tedy ten objekt `zdravic`, se kterým budeme pracovat. Objekty se ukládají do proměnných, název třídy slouží jako datový typ. Instance má zpravidla název třídy, jen má první písmeno malé. Deklarujme si proměnnou a následně v ní založme novou instanci třídy `Zdravic`:

```
Zdravic zdravic;
zdravic = new Zdravic();
```


Tyto řádky říkají: "Chci proměnnou `zdravic`, ve které bude instance třídy `Zdravic`.". S proměnnými jsme vlastně již takto pracovali.

Na druhém řádku je klíčové slovo `new`, které nám **vytvoří novou instanci třídy** `Zdravic`. Tuto instanci přiřadíme do naší proměnné.

Při vytvoření nové instance se zavolá tzv. **konstruktor**. To je speciální metoda na třídě, proto při vytvoření instance píšeme ty prázdné závorky, jelikož voláme tuto "vytvářecí" metodu. Konstruktor zpravidla obsahuje nějakou inicializaci vnitřního stavu instance (např. dosadí výchozí hodnoty do proměnných). My jsme v kódu žádný konstruktor nedeklarovali, Java si proto vytvořila tzv. implicitní bezparametrický konstruktor. Vytvoření instance objektu je tedy podobné volání metody. Deklaraci můžeme samozřejmě zkrátit na:

```
Zdravic zdravic = new Zdravic();
```


Jelikož v proměnné nyní máme opravdu instanci třídy `Zdravic`, můžeme instanci nechat pozdravit. Zavoláme na ni metodu `pozdrav()` a to jako `zdravic.pozdrav()`. Kód metody `main()` bude tedy nyní vypadat následovně:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Zdravic zdravic = new Zdravic();
        zdravic.pozdrav();
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Zdravic {

    public void pozdrav() {
        System.out.println("Hello object world!");
    }

}

{/JAVA_OOP}

```


Program spustíme a v konzoli se nám zobrazí:

```
Konzolová aplikace
Hello object world!
```


Máme tedy svou první objektovou aplikaci!

Dejme nyní naší metodě `pozdrav()` parametr `jmeno`, aby dokázala pozdravit konkrétního uživatele. Přejdeme do souboru `Zdravic.java`:

```
public void pozdrav(String jmeno) {
    System.out.printf("Ahoj uživateli %s%n", jmeno);
}
```


Vidíme, že syntaxe parametru metody je stejná, jako syntaxe proměnné. Kdybychom chtěli parametrů více, oddělujeme je čárkou. Upravíme nyní naši metodu `main()` v souboru `HelloObjects.java`:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Zdravic zdravic = new Zdravic();
        zdravic.pozdrav("Karel");
        zdravic.pozdrav("Petr");
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Zdravic {

    public void pozdrav(String jmeno) {
        System.out.printf("Ahoj uživateli %s%n", jmeno);
    }

}

{/JAVA_OOP}

```


Náš kód je nyní v metodě a my ho můžeme jednoduše pomocí parametrů volat znovu s různými parametry. Nemusíme 2x opisovat "Ahoj uživateli...". Kód budeme odteď dělit logicky do metod.

```
Konzolová aplikace
Ahoj uživateli Karel
Ahoj uživateli Petr
```


Třídě přidáme nějaký atribut, nabízí se atribut `text`, kde bude uložen text pozdravu. Atributy se definují stejně, jako proměnné. Jako u metod platí, že před ně píšeme modifikátor přístupu. Pokud modifikátor nenapíšeme, bude atribut přístupný v rámci daného balíčku (`package`), ale mimo něj už nikoliv. K čemu přesně modifikátory přístupu slouží si řekneme dále v kurzu. Upravme naši třídu `Zdravic`:

```
public class Zdravic {

    public String text;

    public void pozdrav(String jmeno) {
        System.out.printf("%s %s%n", text, jmeno);
    }

}
```


Text nyní musíme pochopitelně nastavit vytvořené instanci v `HelloObjects.java`:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Zdravic zdravic = new Zdravic();
        zdravic.text = "Ahoj uživateli";
        zdravic.pozdrav("Karel");
        zdravic.pozdrav("Petr");
        zdravic.text = "Vítám tě tu programátore";
        zdravic.pozdrav("Richard");
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Zdravic {

    public String text;

    public void pozdrav(String jmeno) {
        System.out.printf("%s %s%n", text, jmeno);
    }

}

{/JAVA_OOP}

```


Výsledek:

```
Konzolová aplikace
Ahoj uživateli Karel
Ahoj uživateli Petr
Vítám tě tu programátore Richard
```


Vzhledem k objektovému návrhu není nejvhodnější, aby si každý objekt ovlivňoval vstup a výstup, jak se mu zachce. Pochopitelně narážím na naše vypisování do konzole. Každý objekt by měl mít určitou kompetenci a tu by neměl překračovat. Pověřme náš objekt pouze sestavením pozdravu a jeho výpis si zpracujeme již mimo, v našem případě v metodě `main()`. Výhodou takto navrženého objektu je vysoká univerzálnost a znovupoužitelnost. Objekt doposud umí jen psát do konzole, my ho však přizpůsobíme tak, aby daná metoda text pouze vracela a bylo na jeho příjemci, jak s ním naloží. Takto můžeme pozdravy ukládat do souborů, psát na webové stránky nebo dále zpracovávat.

Jelikož chceme, aby metoda vracela hodnotu `String`, změníme její dosavadní typ `void` na `String`. K návratu hodnoty použijeme příkaz `return`. Příkaz `return` metodu ukončí a navrátí hodnotu. Jakýkoli kód v těle metody po příkazu `return` se již neprovede! Upravme obě třídy:

Metoda `pozdrav()` v souboru `Zdravic.java`:

```
public String pozdrav(String jmeno) {
    return String.format("%s %s", text, jmeno);
}
```


Tělo metody `main()` v souboru `HelloObjects.java`:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Zdravic zdravic = new Zdravic();
        zdravic.text = "Ahoj uživateli";
        System.out.println(zdravic.pozdrav("Karel"));
        System.out.println(zdravic.pozdrav("Petr"));
        zdravic.text = "Vítám tě tu programátore";
        System.out.println(zdravic.pozdrav("Richard"));
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Zdravic {

    public String text;

    public String pozdrav(String jmeno) {
        return String.format("%s %s", text, jmeno);
    }

}

{/JAVA_OOP}

```


Nyní je náš kód dle dobrých praktik. Ještě naši třídu okomentujme, jak se sluší a patří. Komentáře budeme psát nad název třídy a nad název každého atributu a metody. K jejich zápisu použijeme `/** Popisek */`. Vyplatí se nám to ve chvíli, když na třídě používáme nějakou metodu, její popis se nám zobrazí v našeptávači. Zdokumentovaná třída může vypadat např. takto:

```

public class Zdravic {

    
    public String text;

    
    public String pozdrav(String jmeno) {
        return String.format("%s %s", text, jmeno);
    }

}
```


Znaky `/*` začíná víceřádkový komentář a končí opačnými znaky `*/`, syntaxe popisků se nazývá **Javadoc**.

*   Nad místem, kde chceme vytvořit dokumentaci (např. nad metodou/atributem) napíšeme `/**` a stiskneme klávesu Enter:
    
    ![Zkratka pro vygenerování Javadocu - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_javadoc_generation.gif)
    
    Metodu, atribut či třídu tak jednoduše a rychle popíšeme. Alternativně můžeme kliknout například metodu `pozd|rav()` (`|` značí kurzor v názvu metody) a stiskneme klávesy Alt a Enter.
    
    Klikneme kurzorem na metodu `pozdrav()` v metodě `main()` a IDE nám opravdu popisky zobrazí:
    
    ![Metody objektu zdravic v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_zdravic_methods.png)
    
    Pokud budete své třídy dobře popisovat, programátorskou dokumentaci k aplikaci vytvoříte poté jediným kliknutím. Z Javadoc umí IntelliJ generovat dokumentaci i ve formátu HTML. Kliknete pravým na třídu v záložce _Project_ a zvolíte z hlavního menu položku _Tools_ -> _Generate Javadoc..._.
    
*   NetBeans umí Javadoc sám přidat do vašeho kódu, stačí ho pak jen vyplnit. Kliknete pravým na třídu v záložce _Project_ a zvolíte položku _Tools_ -> _Analyze Javadoc_, zaškrtáte chybějící políčka a potvrdíte. Z Javadoc umí IDE NetBeans generovat dokumentaci i ve formátu HTML. Pokud budete své třídy dobře popisovat, programátorskou dokumentaci k aplikaci vytvoříte poté jediným kliknutím.
    
    Klikneme kurzorem na metodu `pozdrav()` v metodě `main()` a IDE nám opravdu popisky zobrazí:
    
    ![Metody objektu zdravic v NetBeans - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/zdravic_methods.png)
    

U metody `pozdrav()` nám to vygenerovalo klíčové slovo `@param`, za ním hned název parametru `jmeno`. To značí, že následující popisek bude patřit parametru `jmeno` (popisek může pokračovat i na dalším řádku pro větší přehlednost). Metoda může mít totiž více parametrů a tím se zajistí, že bude mít každý parametr vlastní popisek. Dále nám IDE vygenerovalo ještě klíčové slovo `@return`, to značí popisek toho, co nám metoda vrátí.

A jsme u konce. Námi napsaný program má již nějakou úroveň, i když vlastně nic nedělá. Za úkol máte předělat si naši konzolovou kalkulačku do objektů.

V následujícím cvičení, [Řešené úlohy k 2. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 2. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 2. lekci OOP v Javě

V minulé lekci, [První objektová aplikace v Javě - Hello object world](https://www.itnetwork.cz/java/oop/java-tutorial-prvni-objektova-aplikace-hello-object-world), jsme si naprogramovali první objektovou aplikaci. Již umíme tvořit nové třídy a vkládat do nich atributy a metody s parametry a návratovou hodnotou.

Následující 3 cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![honza86](https://www.itnetwork.cz/images/img/person.png)
    
    > Zdravím, moc děkuji za pěkně udělané tutoriály a k tomu udělané příklady na procvičení, konečně to začínám trochu chápat ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    honza86  
    
*   ![Honza Soulak](https://www.itnetwork.cz/images/img/person.png)
    
    > Tak já se s tím druhým příkladem nějak popasoval a nakonec mě to po prvním spuštění vyhodilo správnou hodnotu ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Přijde mě to jako jednoduché řešení úlohy.
    
    Honza Soulak  
    
*   ![Miroslav Melzer](https://www.itnetwork.cz/images/img/person.png)
    
    > Koupil sem si článek cvičení. Zatím mám jen první úlohu a myslím, že sem to dokázal ![%P](https://www.itnetwork.cz/images/img/smileys/crazy.png)
    
    Miroslav Melzer  
    
*   ![Brutomír Emanuel Zob](https://www.itnetwork.cz/images/img/person.png)
    
    > No, také mám radost z čerstvého funkčního OOP kódu. Třeba někomu bude ten můj dobrý ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) (kód k dispozici v diskuzi).
    
    Brutomír Emanuel Zob  
    

Jednoduchý příklad
------------------

Vytvořte třídu

  

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

> Řešené programátorské úlohy v Javě na téma základy objektově orientovaného programování. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 3 - Hrací kostka v Javě - Zapouzdření, konstruktor a Random
V předešlém cvičení, [Řešené úlohy k 2. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním tutoriálu začneme pracovat na slíbené aréně, ve které budou proti sobě bojovat dva bojovníci. Boj bude tahový (na přeskáčku) a bojovník vždy druhému ubere život na základě síly jeho útoku a obrany druhého bojovníka. Simulujeme v podstatě stolní hru, budeme tedy simulovat i hrací kostku, která dodá hře prvek náhodnosti. Začněme zvolna a vytvořme si dnes právě tuto hrací kostku. Zároveň se naučíme jak definovat vlastní konstruktor.

Vytvoření projektu
------------------

Vytvořme si nový projekt a pojmenujme ho `TahovyBoj`. K projektu si přidejme novou třídu s názvem `Kostka`. Zamysleme se nad atributy, které kostce dáme. Jistě by se hodilo, kdybychom si mohli zvolit počet stěn kostky (klasicky 6 nebo 10 stěn, jak je zvykem u tohoto typu her). Dále bude kostka potřebovat tzv. generátor náhodných čísel. Ten nám samozřejmě poskytne Java, která k těmto účelům obsahuje třídu `Random`. Abychom ji mohli používat, musíme si třídu `java.util.Random` naimportovat. Import napíšeme nahoru, jak jsme zvyklí z používání importu pro `Scanner`. Naše třída bude mít nyní 2 atributy:

*   `pocetSten` typu `int` a
*   `random` typu `Random`, kde bude náhodný generátor.

Zapouzdření
-----------

Minule jsme kvůli jednoduchosti nastavovali všechny atributy naší třídy jako `public`, tedy jako veřejně přístupné. Většinou se však spíše nechce, aby se daly zvenčí modifikovat a používá se modifikátor `private`. Atribut je poté viditelný jen uvnitř třídy a zvenčí se Java tváří, že vůbec neexistuje. Při návrhu třídy tedy nastavíme vše na `private` a v případě, že něco bude opravdu potřeba vystavit, použijeme modifikátor `public`. Naše třída nyní vypadá takto:

```
import java.util.Random;


public class Kostka
{
    
    private Random random;
    
    private int pocetSten;
```


Řádek:

```
private Random random;
```


nám říká: nastav jako privátní (neveřejný) atribut `random` datového typu `Random`. Uložíme tak do atributu celou třídu `Random` a můžeme ve třídě v jakékoliv metodě volat například metodu `random.nextInt()`, aniž bychom tam znovu zakládali proměnnou.

Konstruktory
------------

Až doposud jsme neuměli zvenčí nastavit jiné atributy než `public`, protože např. `private` nejsou zvenčí viditelné. Již jsme si říkali něco málo o konstruktoru objektu. Je to metoda, která se **zavolá ve chvíli vytvoření instance objektu**. Slouží samozřejmě k nastavení vnitřního stavu objektu a k provedení případné inicializace. Instanci kostky bychom nyní v souboru `TahovyBoj.java` vytvořili takto:

```
Kostka kostka = new Kostka();
```


Právě slovo `Kostka()` je konstruktor. Protože v naší třídě `Kostka` žádný konstruktor není, Java si dogeneruje prázdnou metodu. My si však nyní konstruktor do třídy přidáme. Deklaruje se jako metoda, ale **nemá návratový typ** a musí mít **stejný název jako je název třídy** (začíná tedy, na rozdíl od ostatních metod, velkým písmenem), v našem případě tedy `Kostka`. V konstruktoru nastavíme počet stěn na pevnou hodnotu a vytvoříme instanci třídy `Random`. Konstruktor bude vypadat následovně:

```

public Kostka() {
    pocetSten = 6;
    random = new Random();
}
```


Pokud kostku nyní vytvoříme, bude mít atribut `pocetSten` hodnotu `6` a v atributu `random` bude vytvořená instance generátoru náhodných čísel. Vypišme si počet stěn do konzole, ať vidíme, že tam hodnota opravdu je. Není dobré atribut nastavit na `public`, protože nebudeme chtít, aby nám někdo mohl již u vytvořené kostky měnit počet stěn. Přidáme do třídy tedy metodu `vratPocetSten()`, která nám vrátí hodnotu atributu `pocetSten`. Docílili jsme tím v podstatě toho, že je atribut _read-only_ (atribut není viditelný a lze ho pouze číst metodou, změnit ho nelze). Nová metoda bude vypadat asi takto:

```

public int vratPocetSten() {
    return pocetSten;
}
```


Přesuňme se do souboru `TahovyBoj.java` a vyzkoušejme si vytvořit kostku a vypsat počet stěn:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Kostka kostka = new Kostka(); // v tuto chvíli se zavolá konstruktor
        System.out.println(kostka.vratPocetSten());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;


public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
6
```


Vidíme, že se konstruktor opravdu zavolal. My bychom ale chtěli, abychom mohli u každé kostky při vytvoření specifikovat, kolik stěn budeme potřebovat. Přejdeme do třídy `Kostka.java` a dáme tedy konstruktoru parametr:

```
public Kostka(int aPocetSten) {
    pocetSten = aPocetSten;
    random = new Random();
}
```


Všimněte si, že jsme před název parametru metody přidali znak `a`, protože jinak by měl stejný název jako atribut a Javu by to zmátlo. Vraťme se do souboru `TahovyBoj.java` a zadejme tento parametr do konstruktoru:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Kostka kostka = new Kostka(10); // v tuto chvíli se zavolá konstruktor s parametrem 10
        System.out.println(kostka.vratPocetSten());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka(int aPocetSten) {
        pocetSten = aPocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
10
```


Vše funguje, jak jsme očekávali. Java nám již v tuto chvíli nevygeneruje prázdný (tzv. bezparametrický konstruktor), takže kostku bez parametru vytvořit nelze. My to však můžeme umožnit, vytvořme si další konstruktor a tentokrát bez parametru. V něm nastavíme počet stěn na 6, protože takovou hodnotu asi uživatel naší třídy u kostky očekává jako výchozí. Přejdeme tedy zpátky do souboru `Kostka.java` a vytvoříme konstruktor bez parametru:

```
public Kostka() {
    pocetSten = 6;
    random = new Random();
}
```


Třída `Kostka` má tedy nyní dva konstruktory.

Zkusme si nyní vytvořit 2 instance kostky, každou jiným konstruktorem v souboru `TahovyBoj.java`:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Kostka sestistenna = new Kostka();
        Kostka desetistenna = new Kostka(10);
        System.out.println(sestistenna.vratPocetSten());
        System.out.println(desetistenna.vratPocetSten());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int aPocetSten) {
        pocetSten = aPocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
6
10
```


Javě nevadí, že máme dvě metody se stejným názvem, protože jejich parametry jsou různé. Hovoříme o tom, že metoda `Kostka()` (tedy zde konstruktor) má **přetížení (overload)**. Toho můžeme využívat i u všech dalších metod, nejen u konstruktorů. IDE nám přehledně nabízí všechny přetížení metody ve chvíli, kdy zadáme její název. V nabídce vidíme naše 2 konstruktory:

*   ![Nápověda k přetíženým metodám v Javě - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_pretizeni_konstruktoru.png)
    
*   ![Nápověda k přetíženým metodám v Javě - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/pretizeni_konstruktoru.png)
    

Mnoho metod v Javě má hned několik přetížení, zkuste se podívat např. na metodu `indexOf()` na třídě String. Je dobré si u metod projít jejich přetížení, abyste neprogramovali něco, co již někdo udělal před vámi.

Ukážeme si ještě, jak jde obejít nepraktický název atributu u parametrického konstruktoru (v našem případě `aPocetSten`) a potom konstruktory opustíme. Problém je samozřejmě v tom, že když napíšeme:

```
public Kostka(int pocetSten) {
    pocetSten = pocetSten;
    random = new Random();
}
```


Java neví, kterou z proměnných myslíme, jestli parametr nebo atribut. V tomto případě přiřazujeme do parametru znovu ten samý parametr. IDE nás na tuto skutečnost dokonce upozorní. Uvnitř třídy se máme možnost odkazovat na její instanci, je uložena v proměnné `this`. Využití si můžeme představit např. kdyby kostka měla metodu `dejHraci(Hrac hrac)` a tam by volala `hrac.seberKostku(this)`. Zde bychom hráči pomocí referenční proměnné `this` předali sebe sama, tedy tu konkrétní kostku, se kterou pracujeme. My se tím zde nebudeme zatěžovat, ale využijeme odkazu na instanci při nastavování atributu:

```
public Kostka(int pocetSten) {
    this.pocetSten = pocetSten;
    random = new Random();
}
```


Pomocí proměnné `this` jsme specifikovali, že levá proměnná `pocetSten` náleží instanci, pravou Java chápe jako z parametru. Máme tedy dva konstruktory, které nám umožňují tvořit různé hrací kostky. Přejděme dál.

Náhodná čísla
-------------

Definujme na kostce metodu `hod()`, která nám vrátí náhodné číslo od `1` do počtu stěn. Je to velmi jednoduché, metoda bude `public` (půjde volat zvenčí třídy) a nebude mít žádný parametr. Návratová hodnota bude typu `int`. Náhodné číslo získáme tak, že na generátoru `random` zavoláme metodu `nextInt()`. Ta má dvě přetížení:

*   `nextInt()` - Varianta bez parametru vrací náhodné číslo v celém rozsahu datového typu `int`, pro úplnost tedy konkrétně od `-2147483648` do `2147483647`.
*   `nextInt(do)` - Vrací **nezáporná** čísla menší než mez `do`. Například `random.nextInt(100)` tedy vrátí číslo od `0` do `99`.

Pro naše účely se nejlépe hodí druhé přetížení, píšeme do souboru `Kostka.java` tedy:

```

public int hod() {
    return random.nextInt(pocetSten) + 1;
}
```


Dejte si pozor, abyste netvořili generátor náhodných čísel v metodě, která má náhodné číslo vracet, tedy že by se pro každé náhodné číslo vytvořil nový generátor. Výsledná čísla pak nejsou téměř náhodná nebo dokonce vůbec. Vždy si vytvořte jednu sdílenou instanci generátoru (např. do privátního atributu pomocí konstruktoru) a na té potom metodu `nextInt()` volejte.

Překrývání metody `toString()`
------------------------------

Kostka je téměř hotová, ukažme si ještě jednu užitečnou metodu, kterou ji přidáme a kterou budeme hojně používat i ve většině našich dalších objektů. Řeč je o metodě `toString()`, o které jsme se již zmínili a kterou obsahuje **každý** objekt, tedy i nyní naše kostka. Metoda je určena k tomu, aby vrátila tzv. **textovou reprezentaci instance**. Hodí se ve všech případech, kdy si instanci potřebujeme vypsat nebo s ní pracovat jako s textem. Tuto metodu mají např. i čísla. Již víme, že v Javě funguje implicitní konverze, jakmile tedy budeme chtít do konzole vypsat objekt, Java na něm zavolá metodu `toString()` a vypíše její výstup. Pokud si děláme vlastní třídu, měli bychom zvážit, zda se nám takováto metoda nehodí. **Nikdy bychom si neměli dělat vlastní metodu**, např. něco jako `vypis()` (co jsme používali dosud), když máme v Javě připravenou cestu, jak toto řešit. U kostky nemá metoda `toString()` vyšší smysl, ale u bojovníka bude jistě vracet jeho jméno. My si ji ke kostce stejně přidáme, bude vypisovat, že se jedná o kostku a vrátí i počet stěn. Nejprve si zkusme vypsat do konzole naši instanci kostky:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        Kostka sestistenna = new Kostka();
        Kostka desetistenna = new Kostka(10);

        System.out.println(sestistenna);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }
}

{/JAVA_OOP}

```


Do konzole se vypíše pouze cesta k naší třídě, tedy `cz.itnetwork.Kostka` a tzv. hash kód objektu. V mém případě byl vypsán tento řetězec:

```
Konzolová aplikace
cz.itnetwork.Kostka@7c1c8c58
```


Metodu `toString()` již jednoduše nedefinujeme, ale protože již existuje, musíme ji přepsat, resp. **překrýt**. Tím se opět nebudeme nyní podrobně zabývat, nicméně chci, abychom již teď uměli metodu `toString()` používat. Pro přehledné překrytí označíme metodu anotací `@Override`:

```
{JAVA_OOP}

import java.util.Random;
public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    /**
     * Vrací textovou reprezentaci kostky
     * @return Textová reprezentace kostky
     */
    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }

}

{/JAVA_OOP}
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        Kostka sestistenna = new Kostka();
        Kostka desetistenna = new Kostka(10);
        System.out.println(sestistenna);

{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}

```


Nyní opět zkusíme do konzole vypsat přímo instanci kostky.

Výstup:

```
Konzolová aplikace
Kostka s 6 stěnami
```


Ještě si naše kostky vyzkoušíme. Zkusíme si v programu s našima dvěma kostkami v cyklech házet a podíváme se, jestli fungují tak, jak se očekává:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        // vytvoření kostek
        Kostka sestistenna = new Kostka();
        Kostka desetistenna = new Kostka(10);

        // hod šestistěnnou kostkou
        System.out.println(sestistenna);
        for (int i = 0; i < 10; i++) {
            System.out.print(sestistenna.hod() + " ");
        }

        // hod desetistěnnou kostkou
        System.out.println("\n\n" + desetistenna);
        for (int i = 0; i < 10; i++) {
            System.out.print(desetistenna.hod() + " ");
        }
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

import java.util.Random;
public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}

{/JAVA_OOP}

```


Výstup může vypadat nějak takto:

```
Konzolová aplikace
Kostka s 6 stěnami
3 6 6 1 6 3 6 2 6 3

Kostka s 10 stěnami
5 9 9 2 10 4 9 3 10 5
```


Máme hotovou docela pěknou a nastavitelnou třídu, která reprezentuje hrací kostku. Bude se nám hodit v naší aréně, ale můžete ji použít i kdekoli jinde. Vidíme, jak OOP umožňuje znovupoužívat komponenty.

V následujícím cvičení, [Řešené úlohy k 3. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-konstruktory-zapouzdreni-nahodna-cisla), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 3. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 3. lekci OOP v Javě

V minulé lekci, [Hrací kostka v Javě - Zapouzdření, konstruktor a Random](https://www.itnetwork.cz/java/oop/java-tutorial-arena-hraci-kostka-konstruktor-nahodna-cisla), jsme si vytvořili svůj první pořádný objekt, byla jím hrací kostka.

Následující 3 cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Iwitrag](https://www.itnetwork.cz/images/img/person.png)
    
    > ![:D](https://www.itnetwork.cz/images/img/smileys/laughing.png) Kdo by to byl pomyslel, že to může být taková sranda ![:D](https://www.itnetwork.cz/images/img/smileys/laughing.png) Myslím ten Středně pokročilý příklad ![:D](https://www.itnetwork.cz/images/img/smileys/laughing.png) Když dosadíte správná slova, můžou vám z toho vyjít zajímavé věci ![:D](https://www.itnetwork.cz/images/img/smileys/laughing.png)
    
    Iwitrag  
    
*   ![byrtus55](https://www.itnetwork.cz/images/img/person.png)
    
    > Tak jsem polemizoval asi pár hodin u toho, proč ve výsledku je stále únava (25). Stále mi to vrtalo hlavou, když podle zadání je to nemožné. Po té co jsem stáhl projekt jsem z Commentu zjistil, že to je onen Věk. I když mě to napadlo, v zadání nic o věku psáno nebylo, takže, kdyby taky náhodou polemizoval, (25) je věk ![:D](https://www.itnetwork.cz/images/img/smileys/laughing.png)
    
    byrtus55  
    
*   ![Lubor Pešek](https://www.itnetwork.cz/images/img/person.png)
    
    > No, překvapilo mě, že jsem vymyslel naprosto shodné dva kódy, jako byly první dva příklady, což mě znepokojuje.... když se mi kódy podobají tutoriálovým, někde je chyba. Ale ten třetí jsem špatně pochopil. Sice je asi blbost, ale princip zadání to splňuje.
    
    Lubor Pešek  
    

Jednoduchý příklad
------------------

Naprogramujte aplikaci, která obsluhuje

  

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

> Řešené programátorské úlohy v Javě na téma konstruktory, zapouzdření a náhodná čísla. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 4 - Referenční a primitivní datové typy
V předešlém cvičení, [Řešené úlohy k 3. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-konstruktory-zapouzdreni-nahodna-cisla), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Začínáme pracovat s objekty a objekty jsou referenčními datovými typy, které se v některých ohledech chovají jinak, než typy primitivní (např. `int`). Je důležité, abychom přesně věděli, co se uvnitř programu děje, jinak by nás v budoucnu mohlo leccos překvapit.

Zopakujme si pro jistotu ještě jednou, co jsou to primitivní typy. Obecně jsou to **jednoduché struktury**, např. jedno číslo, jeden znak. Většinou se chce, abychom s nimi pracovali co **nejrychleji**, v programu se jich vyskytuje **velmi mnoho** a zabírají **málo místa**. V anglické literatuře jsou často popisovány slovy _light-weight_. Mají **pevnou velikost**. Příkladem jsou např. `int`, `float`, `double`, `char`, `boolean` a další.

Aplikace (resp. její vlákno) má operačním systémem přidělenou paměť v podobě tzv. zásobníku (_stack_). Jedná se o velmi rychlou paměť s přímým přístupem, její velikost aplikace nemůže ovlivnit, prostředky jsou přidělovány operačním systémem. Tato malá a rychlá paměť je využívána k ukládání lokálních proměnných primitivního typu (až na výjimky při iteracích, kterými se nebudeme zabývat). Proměnnou si v ní můžeme představit asi takto:

![Zásobník paměti počítače - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/pamet_zasobnik_2.svg)

Na obrázku je znázorněna paměť, kterou může naše aplikace využívat. V aplikaci jsme si vytvořili proměnnou `a` typu `int`. Její hodnota je `56` a uložila se nám přímo do zásobníku. Kód by mohl vypadat takto:

```
int a = 56;
```


Můžeme to chápat tak, že proměnná `a` má přidělenu část paměti v zásobníku (velikosti datového typu `int`, tedy 32 bitů), ve které je uložena hodnota `56`.

Vytvořme si novou konzolovou aplikaci s názvem například `ReferencniTypy` a přidejme si k ní jednoduchou třídu, která bude reprezentovat uživatele nějakého systému. Pro názornost vypustím komentáře a nebudu řešit viditelnosti:

```
public class Uzivatel {
    public int vek;
    public String jmeno;

    public Uzivatel(String jmeno, int vek) {
        this.jmeno = jmeno;
        this.vek = vek;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}
```


Třída má dva jednoduché veřejné atributy, konstruktor a přepsanou metodu `toString()`, abychom uživatele mohli jednoduše vypisovat. Do našeho původního programu (metoda `main()`) přidejme vytvoření instance této třídy:

```
int a = 56;
Uzivatel jan = new Uzivatel("Jan Novák", 28);
```


Proměnná `jan` je nyní referenčního typu. Podívejme se na novou situaci v paměti:

![Zásobník a halda v paměti počítače - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/pamet_zasobnik_halda2.svg)

Vidíme, že objekt (proměnná referenčního datového typu) se již neukládá do zásobníku, ale do paměti zvané **halda**. Je to z toho důvodu, že objekt je zpravidla **složitější** než primitivní datový typ (většinou obsahuje hned několik dalších atributů) a také zabírá více místa v paměti.

Zásobník i halda se nacházejí v paměti RAM. Rozdíl je v přístupu a velikosti. Halda je prakticky neomezená paměť, ke které je však přístup složitější a tím pádem pomalejší. Naopak zásobník je paměť rychlá, ale velikostně omezená.

**Proměnné referenčního typu jsou v paměti uloženy vlastně nadvakrát**, jednou v zásobníku a jednou v haldě. V zásobníku je uložena pouze tzv. **reference**, tedy odkaz do haldy, kde se poté nalézá opravdový objekt.

Např. v [C++](https://www.itnetwork.cz/cplusplus) je velký rozdíl mezi pojmem ukazatel a reference. Java žádné ukazatele naštěstí nemá a používá termín reference, ty se paradoxně principem podobají spíše ukazatelům v C++. Pojmy ukazatel a reference zde zmíněné tedy znamenají referenci ve smyslu Javy a nemají s C++ nic společného.

Můžete se ptát, proč je to takto udělané. Důvodů je hned několik, pojďme si některé vyjmenovat:

1.  Místo ve stacku je omezené.
2.  Když budeme chtít použít objekt vícekrát (např. ho předat jako parametr do několika metod), nemusíme ho v programu předávat jako kopii. Předáme pouze malý primitivní typ s referencí na objekt místo toho, abychom obecně paměťově náročný objekt kopírovali. Toto si vzápětí ukážeme.
3.  Pomocí referencí můžeme jednoduše vytvářet struktury s dynamickou velikostí, např. struktury podobné poli, do kterých můžeme za běhu vkládat nové prvky. Ty jsou na sebe navzájem odkazovány referencemi, jako řetěz objektů.

Založme si dvě proměnné typu `int` a dvě proměnné typu `Uzivatel`:

```
int a = 56;
int b = 28;
Uzivatel jan = new Uzivatel("Jan Novák", 28);
Uzivatel josef = new Uzivatel("Josef Nový", 32);
```


Situace v paměti bude následující:

![Referenční hodnoty v Javě v paměti počítače - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/pamet_reference_hodnoty1.svg)

Nyní zkusme přiřadit do proměnné `a` proměnnou `b`. Stejně tak přiřadíme i proměnnou `josef` do proměnné `jan`. Primitivní typ se v zásobníku jen zkopíruje, u objektu se zkopíruje pouze reference (což je vlastně také primitivní typ), ale objekt máme stále jen jeden. V kódu vykonáme tedy toto:

```
int a = 56;
int b = 28;
Uzivatel jan = new Uzivatel("Jan Novák", 28);
Uzivatel josef = new Uzivatel("Josef Nový", 32);
a = b;
jan = josef;
```


V paměti bude celá situace vypadat následovně:

![Referenční hodnoty v Javě v paměti počítače - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/pamet_reference_hodnoty2.drawio.svg)

Přesvědčme se o tom, abyste viděli, že to opravdu tak je ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Nejprve si necháme všechny čtyři proměnné vypsat před a po změně. Protože budeme výpis volat vícekrát, napíši ho poněkud úsporněji. Mohli bychom dát výpis do metody, ale ještě nevíme, jak deklarovat metody přímo v souboru s metodou `main()` (v tomto případě soubor `ReferencniTypy.java`) a zpravidla se to ani moc nedělá, pro vážnější práci bychom si měli udělat třídu. Upravme tedy kód na následující:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        // založení proměnných
        int a = 56;
        int b = 28;
        Uzivatel jan = new Uzivatel("Jan Novák", 28);
        Uzivatel josef = new Uzivatel("Josef Nový", 32);
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);
        // přiřazování
        a = b;
        jan = josef;
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Uzivatel {
    public int vek;
    public String jmeno;

    public Uzivatel(String jmeno, int vek) {
        this.jmeno = jmeno;
        this.vek = vek;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}

{/JAVA_OOP}

```


Na výstupu programu zatím rozdíl mezi primitivním a referenčním typem nepoznáme:

```
Konzolová aplikace
a: 56
b: 28
jan: Jan Novák
josef: Josef Nový

a: 28
b: 28
jan: Josef Nový
josef: Josef Nový
```


Nicméně víme, že zatímco v `a` a `b` jsou opravdu dvě různá čísla se stejnou hodnotou, v `jan` a `josef` je ten samý objekt. Pojďme změnit jméno uživatele `josef` a dle našich předpokladů by se měla změna projevit i v proměnné `jan`. K programu připíšeme:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        // založení proměnných
        int a = 56;
        int b = 28;
        Uzivatel jan = new Uzivatel("Jan Novák", 28);
        Uzivatel josef = new Uzivatel("Josef Nový", 32);
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);
        // přiřazování
        a = b;
        jan = josef;
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);

        // změna
        josef.jmeno = "John Doe";
        System.out.printf("jan: %s%njosef: %s%n", jan, josef);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Uzivatel {
    public int vek;
    public String jmeno;

    public Uzivatel(String jmeno, int vek) {
        this.jmeno = jmeno;
        this.vek = vek;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}

{/JAVA_OOP}

```


Změnili jsme objekt v proměnné `josef` a znovu vypíšeme `jan` a `josef`:

```
Konzolová aplikace
a: 56
b: 28
jan: Jan Novák
josef: Josef Nový

a: 28
b: 28
jan: Josef Nový
josef: Josef Nový

jan: John Doe
josef: John Doe
```


Spolu se změnou proměnné `josef` se změní i proměnná `jan`, protože proměnné ukazují na ten samý objekt. Jestli se ptáte, jak vytvořit opravdovou kopii objektu, tak nejjednodušší je objekt znovu vytvořit pomocí konstruktoru a dát do něj stejná data. Dále můžeme použít klonování, ale o tom zas až někdy jindy. Připomeňme si situaci v paměti ještě jednou a zaměřme se na Jana Nováka:

![Referenční hodnoty v Javě v paměti počítače - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/pamet_reference_hodnoty2.drawio.svg)

Co se sním stane? "Sežere" ho tzv. Garbage collector.

![Garbage collector - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/garbage_collector.png)

Garbage collector a dynamická správa paměti
-------------------------------------------

Paměť můžeme v programech alokovat staticky, to znamená, že ve zdrojovém kódu předem určíme, kolik jí budeme používat. Doposud jsme to tak vlastně dělali a neměli jsme s tím problém, hezky jsme do zdrojového kódu napsali potřebné proměnné. Brzy se ale budeme setkávat s aplikacemi (a už jsme se vlastně i setkali), kdy nebudeme před spuštěním přesně vědět, kolik paměti budeme potřebovat. Vzpomeňte si na program, který zprůměroval zadané hodnoty v poli. Na počet hodnot jsme se uživatele zeptali až za běhu programu. [JVM](https://www.itnetwork.cz/java/zaklady/java-tutorial-uvod-do-jazyka-java#_3-jazyky-s-virtualnim-strojem) tedy musel za běhu programu pole v paměti založit. V tomto případě hovoříme o **dynamické správě paměti**.

V minulosti, hlavně v dobách jazyků [C](https://www.itnetwork.cz/cecko), [Pascal](https://www.itnetwork.cz/pascal) a C++, se k tomuto účelu používaly tzv. pointery, neboli přímé ukazatele do paměti. Vesměs to fungovalo tak, že jsme si řekli operačnímu systému o kus paměti o určité velikosti. On ji pro nás vyhradil a dal nám její adresu. Na toto místo v paměti jsme měli pointer, přes který jsme s pamětí pracovali. Problém byl, že nikdo nehlídal, co do paměti dáváme (ukazatel směřoval na začátek vyhrazeného prostoru). Když jsme tam dali něco většího, zkrátka se to stejně uložilo a přepsala se data za naším prostorem, která patřila třeba jinému programu nebo operačnímu systému (v tom případě by naši aplikaci OS asi zabil - zastavil). Často jsme si však my v paměti přepsali nějaká další data našeho programu a program se začal chovat chaoticky. Představte si, že si uložíte uživatele do pole a v tu chvíli se vám najednou změní barva uživatelského prostředí, tedy něco, co s tím vůbec nesouvisí. Hodiny strávíte tím, že kontrolujete kód pro změnu barvy, poté zjistíte, že je chyba v založení uživatele, kdy dojde k přetečení paměti a přepsání hodnot barvy.

Když naopak nějaký objekt přestaneme používat, musíme po něm místo sami uvolnit, pokud to neuděláme, paměť zůstane blokovaná. Pokud toto děláme např. v nějaké metodě a zapomeneme paměť uvolňovat, naše aplikace začne padat, případně zasekne celý operační systém. Taková chyba se opět špatně hledá, proč program přestane po několika hodinách fungovat? Kde tu chybu v několika tisících řádků kódu vůbec hledat? Nemáme jedinou stopu, nemůžeme se ničeho chytit, musíme projet celý program řádek po řádku nebo začít prozkoumávat paměť počítače, která je v binárce. Brrr. Podobný problém nastane, když si někde paměť uvolníme a následně pointer opět použijeme (zapomeneme, že je uvolněný, to se může lehce stát), povede někam, kde je již uloženého něco jiného a tato data budou opět přepsána. Povede to k nekontorolovanému chování naší aplikace a může to dopadnout i takto:

![Blue Screen Of Death – BSOD ve Windows - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/bsod.jpg)

Můj kolega jednou pravil: "Lidský mozek se nedokáže starat ani o správu paměti vlastní, natož aby řešil memory management programu." Měl samozřejmě pravdu, až na malou skupinu géniů lidi přestalo bavit řešit neustálé a nesmyslné chyby. Za cenu mírného snížení výkonu vznikly řízené jazyky (managed) s tzv. garbage collectorem, jedním z nich je i Java a [C#](https://www.itnetwork.cz/csharp). **C++ se samozřejmě nadále používá, ale pouze na specifické programy, např. části operačního systému nebo 3D enginy komerčních her**, kde je potřeba z počítače dostat maximální výkon. Na 99 % všech ostatních aplikací se hodí Java, hlavně kvůli automatické správě paměti.

![Garbage collector - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/gc.png)

Garbage collector (dále pouze GC) je vlastně program, který běží paralelně s naší aplikací, v samostatném vlákně. Občas se spustí a podívá se, na které objekty již v paměti nevedou žádné reference. Ty potom odstraní. Ztráta výkonu je minimální a značně to sníží procento sebevražd programátorů, ladících po večerech rozbité pointery. Zapnutí GC můžeme dokonce z kódu ovlivnit, i když to není v 99 % případů vůbec potřeba. Protože je jazyk řízený a nepracujeme s přímými pointery, **není vůbec možné paměť nějak narušit**, nechat ji přetéct a podobně, interpret se o paměť automaticky stará.

Hodnota `null`
--------------

Poslední věc, o které se zmíníme, je tzv. hodnota `null`. Referenční typy mohou, na rozdíl od primitivních, nabývat speciální hodnoty a to `null`. Hodnota `null` je klíčové slovo a označuje, že reference neukazuje na žádná data. Když nastavíme proměnnou `josef` na `null`, zrušíme pouze tu jednu referenci. Pokud na náš objekt existuje ještě nějaká reference, bude i nadále existovat. Pokud ne, bude uvolněn GC. Změňme ještě poslední řádky našeho programu na:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        // založení proměnných
        int a = 56;
        int b = 28;
        Uzivatel jan = new Uzivatel("Jan Novák", 28);
        Uzivatel josef = new Uzivatel("Josef Nový", 32);
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);
        // přiřazování
        a = b;
        jan = josef;
        System.out.printf("a: %s%nb: %s%njan: %s%njosef: %s%n%n", a, b, jan, josef);

        // změna
        josef.jmeno = "John Doe";
        josef = null;

        System.out.printf("jan: %s%njosef: %s%n", jan, josef);

{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

public class Uzivatel {
    public int vek;
    public String jmeno;

    public Uzivatel(String jmeno, int vek) {
        this.jmeno = jmeno;
        this.vek = vek;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
a: 56
b: 28
jan: Jan Novák
josef: Josef Nový

a: 28
b: 28
jan: Josef Nový
josef: Josef Nový

jan: John Doe
josef: null
```


Vidíme, že objekt stále existuje a ukazuje na něj proměnná `jan`, v proměnné `josef` již není reference. Hodnota `null` se bohatě využívá jak uvnitř Javy, tak v databázích. K referenčním typům se ještě jednou vrátíme.

V následujícím kvízu, [Kvíz - Úvod, konstruktory, metody, datové typy v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-uvod-konstruktory-metody-datove-typy-java-oop), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B39624%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522gN1NLj0YYZ%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Řešené úlohy k 4. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 4. lekci OOP v Javě

V předchozím kvízu, [Kvíz - Úvod, konstruktory, metody, datové typy v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-uvod-konstruktory-metody-datove-typy-java-oop), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Následující 3 cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Ohlasy studentů
---------------

*   ![Iwitrag](https://www.itnetwork.cz/images/img/person.png)
    
    > Super příklady na procvičení... první a druhý hotovo, ještě třetí. Je hodně zajímavé sledovat, jak se můžou jednotlivá řešení lišit.
    
    Iwitrag  
    
*   ![Martin.mak](https://www.itnetwork.cz/images/img/person.png)
    
    > Příklad 2: Ach jo, jak je mým zvykem, vše jsem udělal co nejsložitěji to šlo A ještě jsem zapomněl ošetřit případ, že by šel kam neměl ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)
    
    Martin.mak  
    

Jednoduchý příklad
------------------

Naprogramujte aplikaci, ve které figurují dva typy objektů

  

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

> Řešené programátorské úlohy v Javě na téma reference na objekty a hodnota null. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 5 - Bojovník do arény
V předešlém cvičení, [Řešené úlohy k 4. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-programovani-oop-reference), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Již tedy víme, jak fungují reference a jak můžeme s objekty zacházet. Bude se nám to hodit dnes i příště. Tento a příští tutoriál budou totiž věnovány dokončení naší arény. Hrací kostku již máme, ještě nám chybí další 2 objekty: bojovník a samotná aréna. Dnes se budeme věnovat bojovníkovi. Nejprve si popišme, co má bojovník umět, poté se pustíme do psaní kódu.

Atributy
--------

Bojovník se bude **nějak jmenovat** a bude mít určitý počet hp (tedy **bodů života**, např. 80hp). Budeme uchovávat jeho **maximální život** (bude se lišit u každé instance) a jeho **současný život**, tedy např. zraněný bojovník bude mít 40hp z 80. Bojovník má určitý **útok** a **obranu**, obojí vyjádřené opět v hp. Když bojovník útočí s útokem 20hp na druhého bojovníka s obranou 10hp, ubere mu 10hp života. Bojovník bude mít **referenci na instanci objektu** `Kostka`. Při útoku či obraně si vždy hodí kostkou a k útoku/obraně přičte padlé číslo. (Samozřejmě by mohl mít každý bojovník svou kostku, ale chtěl jsem se přiblížit stolní podobě hry a ukázat, jak OOP opravdu simuluje realitu. Bojovníci tedy budou sdílet jednu instanci kostky.) Kostkou dodáme hře prvek náhody, v realitě se jedná vlastně o štěstí, jak se útok nebo obrana vydaří. Konečně budeme chtít, aby bojovníci podávali **zprávy o tom, co se děje**, protože jinak by z toho uživatel nic neměl. Zpráva bude vypadat např. "Zalgoren útočí s úderem za 25hp.". Zprávami se zatím nebudeme zatěžovat a vrátíme se k nim až nakonec.

Již víme, co budeme dělat, pojďme na to! ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) K projektu `TahovyBoj` si přidejme třídu `Bojovnik` a dodejme ji patřičné atributy. Všechny budou privátní:

```
public class Bojovnik {
    
    private String jmeno;
    
    private int zivot;
    
    private int maximalniZivot;
    
    private int utok;
    
    private int obrana;
    
    private Kostka kostka;
    
    private String zprava;
}
```


Třída `Kostka` musí samozřejmě být v našem projektu.

Metody
------

Pojďme pro atributy vytvořit konstruktor, nebude to nic těžkého. Komentáře zde vynechám, vy si je dopište podobně, jako u atributů výše. Nebudu je psát ani u dalších metod, aby se tutoriál zbytečně neroztahoval a zůstal přehledný (případně se podívejte do archivu).

```
public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
    this.jmeno = jmeno;
    this.zivot = zivot;
    this.maximalniZivot = zivot;
    this.utok = utok;
    this.obrana = obrana;
    this.kostka = kostka;
}
```


Všimněte si, že maximální zdraví si v konstruktoru odvodíme a nemáme na něj parametr v hlavičce metody. Předpokládáme, že bojovník je při vytvoření plně zdravý, stačí nám tedy znát pouze jeho život a maximální život bude stejný.

Přejděme k metodám, opět se nejprve zamysleme nad tím, co by měl bojovník umět. Začněme tím jednodušším, budeme chtít nějakou textovou reprezentaci, abychom mohli bojovníka vypsat. Překryjeme tedy metodu `toString()`, která vrátí jméno bojovníka. Určitě se nám bude hodit metoda vracející, zda je bojovník naživu (tedy typu `boolean`). Aby to bylo trochu zajímavější, budeme chtít kreslit život bojovníka do konzole, nebudeme tedy psát, kolik má života, ale "vykreslíme" ho takto:

```
[#########    ]
```


Výše uvedený život by odpovídal asi 70 %. Dosud zmíněné metody nepotřebovaly žádné parametry. Samotný útok a obranu nechme na později a pojďme si implementovat metody `toString()`, `jeZivy()` a `grafickyZivot()`. Začněme s metodou `toString()`, tam není co vymýšlet:

```
@Override
public String toString() {
    return jmeno;
}
```


Nyní implementujme metodu `jeZivy()`, opět to nebude nic těžkého. Stačí zkontrolovat, zda je život větší než `0` a podle toho se zachovat. Mohli bychom ji napsat třeba takto:

```
public boolean jeZivy() {
    if (zivot > 0) {
        return true;
    } else {
        return false;
    }
}
```


Jelikož i samotný výraz (`zivot > 0`) je vlastně logická hodnota, můžeme vrátit tu a kód se značně zjednodušší:

```
public boolean jeZivy() {
    return (zivot > 0);
}
```


### Grafický život

Jak jsem se již zmínil, metoda `grafickyZivot()` bude umožňovat vykreslit ukazatel života v grafické podobě. Již víme, že z hlediska objektového návrhu není vhodné, aby metoda objektu přímo vypisovala do konzole (pokud není k výpisu objekt určený), proto si znaky uložíme do řetězce a ten vrátíme pro pozdější vypsání. Ukážeme si kód metody a následně podrobně popíšeme:

```
public String grafickyZivot() {
    String grafickyZivot = "[";
    int celkem = 20;
    double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
    if ((pocetDilku == 0) && (jeZivy())) {
        pocetDilku = 1;
    }
    for (int i = 0; i < pocetDilku; i++) {
        grafickyZivot += "#";
    }
    for (int i = 0; i < celkem - pocetDilku; i++) {
        grafickyZivot += " ";
    }
    grafickyZivot += "]";
    return grafickyZivot;
}
```


Připravíme si řetězec `grafickyZivot` a vložíme do něj úvodní znak `[`. Určíme si celkovou délku ukazatele života do proměnné `celkem` (např. 20). Nyní v podstatě nepotřebujeme nic jiného, než trojčlenku. Pokud `maximalniZivot` odpovídá `celkem` dílků, proměnná `zivot` bude odpovídat proměnné `pocetDilku`. Proměnná `pocetDilku` obsahuje počet dílků aktuálního zdraví.

Matematicky platí, že `pocet = (zivot / maximalniZivot) * celkem`. My ještě doplníme zaokrouhlení na celé dílky a také přetypování jednoho z operandů na `double`, aby Java chápala dělení jako neceločíselné.

Měli bychom ošetřit případ, kdy je život tak nízký, že nám vyjde na 0 dílků, ale bojovník je stále naživu. V tom případě vykreslíme 1 dílek, jinak by to vypadalo, že je již mrtvý.

Dále stačí jednoduše cyklem `for` připojit k řetězci `grafickyZivot` patřičný počet znaků a doplnit je mezerami do celkové délky. Doplnění provedeme pomocí cyklu `for`, který přidává mezery do délky `celkem`. Přidáme koncový znak a řetězec vrátíme.

Vše si vyzkoušíme, přejděme k metodě `main()` a vytvořme si bojovníka (a kostku, protože tu musíme konstruktoru bojovníka předat). Následně vypišme, zda je naživu a jeho život graficky:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Kostka kostka = new Kostka(10);
        Bojovnik bojovnik = new Bojovnik("Zalgoren", 100, 20, 10, kostka);

        System.out.printf("Bojovník: %s%n", bojovnik); // test toString();
        System.out.printf("Naživu: %s%n", bojovnik.jeZivy()); // test jeZivy();
        System.out.printf("Život: %s%n", bojovnik.grafickyZivot()); // test grafickyZivot();
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;
public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    private String jmeno;
    private int zivot;
    private int maximalniZivot;
    private int utok;
    private int obrana;
    private Kostka kostka;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}
{/JAVA_OOP}

```


```
Konzolová aplikace
Bojovník: Zalgoren
Naživu: true
Život: [####################]
```


### Boj

Dostáváme se k samotnému boji. Implementujeme metody pro útok a obranu.

#### Obrana

Začněme obranou. Metoda `branSe()` bude umožňovat bránit se úderu, jehož síla bude předána metodě jako parametr. Metodu si opět ukážeme a poté popíšeme:

```
public void branSe(int uder) {
    int zraneni = uder - (obrana + kostka.hod());
    if (zraneni > 0) {
        zivot -= zraneni;
        if (zivot <= 0) {
            zivot = 0;
        }
    }
}
```


Nejprve spočítáme skutečné zranění a to tak, že z útoku nepřítele odečteme naši obranu zvýšenou o číslo, které padlo na hrací kostce. Pokud jsme zranění celé neodrazili (`zraneni > 0`), budeme snižovat náš život. Tato podmínka je důležitá, kdybychom zranění odrazili a bylo např. `-2`, bez podmínky by se život bojovníka zvýšil. Po snížení života zkontrolujeme, zda není v záporné hodnotě a případně ho dorovnáme na nulu.

#### Útok

Metoda `utoc()` bude brát jako parametr instanci bojovníka, na kterého se útočí. To proto, abychom na něm mohli zavolat metodu `branSe()`, která na náš útok zareaguje a zmenší protivníkův život. Zde vidíme výhody referencí v Javě, můžeme si instance jednoduše předávat a volat na nich metody, aniž by došlo k jejich zkopírování. Jako první vypočteme úder, podobně jako při obraně, úder bude náš útok + hodnota z hrací kostky. Na soupeři následně zavoláme metodu `branSe()` s hodnotou úderu:

```
public void utoc(Bojovnik souper) {
    int uder = utok + kostka.hod();
    souper.branSe(uder);
}
```


To bychom měli, pojďme si zkusit v našem ukázkovém programu zaútočit a poté znovu vykreslit život. Pro jednoduchost nemusíme zakládat dalšího bojovníka, ale můžeme zaútočit sami na sebe:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
            Kostka kostka = new Kostka(10);
            Bojovnik bojovnik = new Bojovnik("Zalgoren", 100, 20, 10, kostka);

            System.out.printf("Bojovník: %s%n", bojovnik); // test toString();
            System.out.printf("Naživu: %s%n", bojovnik.jeZivy()); // test jeZivy();
            System.out.printf("Život: %s%n", bojovnik.grafickyZivot()); // test GrafickyZivot();

            bojovnik.utoc(bojovnik); // test útoku
            System.out.printf("Život po útoku: %s%n", bojovnik.grafickyZivot());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    private String jmeno;
    private int zivot;
    private int maximalniZivot;
    private int utok;
    private int obrana;
    private Kostka kostka;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
        if (zivot <= 0) {
                zivot = 0;
            }
        }
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        souper.branSe(uder);
    }

    @Override
    public String toString() {
        return jmeno;
    }
}

{/JAVA_OOP}

```


```
Konzolová aplikace
Bojovník: Zalgoren
Naživu: true
Život: [####################]
Život po útoku: [##################  ]
```


Zdá se, že vše funguje, jak má. Přejděme k poslednímu bodu dnešního tutoriálu a to ke zprávám.

Zprávy
------

Jak již bylo řečeno, o útocích a obraně budeme uživatele informovat výpisem na konzoli. Výpis nebude provádět samotná třída `Bojovnik`, ta bude jen vracet zprávy jako textové řetězce. Jedna možnost by byla nastavit návratový typ metod `utoc()` a `branSe()` na `String` a při jejich volání vrátit i zprávu. Problém by však nastal v případě, když bychom chtěli získat zprávu od metody, která již něco vrací. Metoda samozřejmě nemůže jednoduše vrátit 2 věci.

Pojďme na věc univerzálněji, zprávu budeme ukládat do privátní proměnné `zprava` a uděláme metody pro její uložení a navrácení. Samozřejmě bychom mohli udělat proměnnou veřejnou, ale není zde důvod, proč umožnit zvenčí zápis do zprávy a také by skládání složitější zprávy uvnitř třídy mohlo být někdy problematické.

K atributům třídy tedy přidáme:

```
private String zprava;
```


Nyní si vytvoříme dvě metody. Prvně privátní metodu `nastavZpravu()`, která bere jako parametr text zprávy a slouží pro vnitřní účely třídy, kde nastaví zprávu do privátní proměnné:

```
private void nastavZpravu(String zprava) {
    this.zprava = zprava;
}
```


Nic složitého. Podobně jednoduchá bude veřejná metoda pro navrácení zprávy:

```
public String vratPosledniZpravu() {
    return zprava;
}
```


O práci se zprávami obohatíme naše metody `utoc()` a `branSe()`, nyní budou vypadat takto:

```
public void utoc(Bojovnik souper) {
    int uder = utok + kostka.hod();
    nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
    souper.branSe(uder);
}

public void branSe(int uder) {
    int zraneni = uder - (obrana + kostka.hod());
    if (zraneni > 0) {
        zivot -= zraneni;
        zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
        if (zivot <= 0) {
            zivot = 0;
            zprava += " a zemřel";
        }
    } else {
        zprava = String.format("%s odrazil útok", jmeno);
    }
    nastavZpravu(zprava);
}
```


Vše si opět vyzkoušíme, tentokrát již vytvoříme druhého bojovníka:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
            Kostka kostka = new Kostka(10);
            Bojovnik bojovnik = new Bojovnik("Zalgoren", 100, 20, 10, kostka);

            System.out.printf("Život: %s%n", bojovnik.grafickyZivot());

            // útok na našeho bojovníka
            Bojovnik souper = new Bojovnik("Shadow", 60, 18, 15, kostka);
            souper.utoc(bojovnik);
            System.out.println(souper.vratPosledniZpravu());
            System.out.println(bojovnik.vratPosledniZpravu());

            System.out.printf("Život: %s%n", bojovnik.grafickyZivot());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    private String jmeno;
    private int zivot;
    private int maximalniZivot;
    private int utok;
    private int obrana;
    private Kostka kostka;
    private String zprava;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
        souper.branSe(uder);
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
            zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
            if (zivot <= 0) {
                zivot = 0;
                zprava += " a zemřel";
            }
        } else {
            zprava = String.format("%s odrazil útok", jmeno);
        }
        nastavZpravu(zprava);
    }

    private void nastavZpravu(String zprava) {
    this.zprava = zprava;
    }

    public String vratPosledniZpravu() {
        return zprava;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}
{/JAVA_OOP}

```


```
Konzolová aplikace
Život: [####################]
Shadow útočí s úderem za 24 hp
Zalgoren utrpěl poškození 10 hp
Život: [##################  ]
```


Máme kostku i bojovníka, teď již chybí jen aréna.

V další lekci, [Java - Aréna s bojovníky](https://www.itnetwork.cz/java/oop/java-tutorial-arena-s-objektovymi-bojovniky), si vytvoříme arénu.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 6 - Java - Aréna s bojovníky
V minulé lekci, [Bojovník do arény](https://www.itnetwork.cz/java/oop/java-tutorial-bojovnik-do-areny), jsme si vytvořili třídu bojovníka. Hrací kostku máme hotovou z prvních lekcí objektově orientovaného programování.

Dnes tedy dáme vše dohromady a vytvoříme funkční arénu. Tutoriál bude spíše oddechový a pomůže nám zopakovat si práci s objekty.

Potřebujeme napsat nějaký kód pro obsluhu bojovníků a výpis zpráv uživateli. Samozřejmě ho nebudeme bušit rovnou do výchozího souboru s metodou `main()`, ale vytvoříme si objekt Arena, kde se bude zápas odehrávat. V metodě `main()` se potom jen založí objekty a o zbytek se bude starat objekt `Arena`. Přidejme k projektu tedy poslední třídu `Arena`.

Třída bude víceméně jednoduchá, jako atributy bude obsahovat 3 potřebné instance: 2 bojovníky a hrací kostku. V konstruktoru se tyto atributy naplní z parametrů. Kód třídy bude tedy následující (komentáře si dopište):

```
class Arena {
    private Bojovnik bojovnikA;
    private Bojovnik bojovnikB;
    private Kostka kostka;

    public Arena(Bojovnik bojovnikA, Bojovnik bojovnikB, Kostka kostka) {
        this.bojovnikA = bojovnikA;
        this.bojovnikB = bojovnikB;
        this.kostka = kostka;
    }
}
```


Zamysleme se nad metodami. Z veřejných metod bude určitě potřeba jen ta k simulaci zápasu. Výstup programu na konzoli uděláme trochu na úrovni a také umožníme třídě `Arena`, aby přímo ke konzoli přistupovala. Rozhodli jsme se, že výpis bude v kompetenci třídy, jelikož se nám to zde vyplatí. Naopak kdyby výpis prováděli i bojovníci, bylo by to na škodu (nebyli by univerzální). Potřebujeme tedy metodu, která vykreslí obrazovku s aktuálními údaji o kole a životy bojovníků. Zprávy o útoku a obraně budeme chtít vypisovat s dramatickou pauzou, aby byl výsledný efekt lepší, uděláme si pro takový typ zprávy ještě pomocnou metodu. Začněme s vykreslením informační obrazovky:

```
private void vykresli() {
    System.out.println("-------------- Aréna -------------- \n");
    System.out.println("Zdraví bojovníků: \n");
    System.out.printf("%s %s%n", bojovnikA, bojovnikA.grafickyZivot());
    System.out.printf("%s %s%n", bojovnikB, bojovnikB.grafickyZivot());
}
```


Metoda `vykresli()` je privátní, budeme ji používat jen uvnitř třídy.

Další privátní metodou bude výpis zprávy s dramatickou pauzou:

```
private void vypisZpravu(String zprava) {
    System.out.println(zprava);
    try {
        Thread.sleep(500);
    } catch (InterruptedException ex) {
        System.err.println("Chyba, nepodařilo se uspat vlákno!");
    }
}
```


Kód je zřejmý až na třídu `Thread`, která umožňuje práci s vlákny. My z ní využijeme pouze metodu `sleep()`, která uspí vlákno programu na daný počet milisekund. S vlákny budeme pracovat až na konci seriálu. Bloky `try-catch` prozatím nebudeme řešit, nejsou zde důležité a budeme je probírat později, spokojíme se s tím, že jsou zde nutné.

Obě metody vlastně jen vypisují na konzoli, připadá mi zbytečné je zkoušet, přesuneme se tedy již k samotnému zápasu. Metoda `zapas()` nebude mít žádné parametry a nebude ani nic vracet. Uvnitř bude cyklus, který bude na střídačku volat útoky bojovníků navzájem a vypisovat informační obrazovku a zprávy. Metoda by mohla vypadat takto:

```
public void zapas() {
    System.out.println("Vítejte v aréně!");
    System.out.printf("Dnes se utkají %s s %s! %n", bojovnikA, bojovnikB);
    System.out.println("Zápas může začít...");

    
    while (bojovnikA.jeZivy() && bojovnikB.jeZivy()) {
        bojovnikA.utoc(bojovnikB);
        vykresli();
        vypisZpravu(bojovnikA.vratPosledniZpravu()); 
        vypisZpravu(bojovnikB.vratPosledniZpravu()); 
        bojovnikB.utoc(bojovnikA);
        vykresli();
        vypisZpravu(bojovnikB.vratPosledniZpravu()); 
        vypisZpravu(bojovnikA.vratPosledniZpravu()); 
        System.out.println();
    }
}
```


Kód vypíše jednoduché informace a po stisku klávesy přejde do cyklu s bojem. Jedná se o cyklus `while`, který se opakuje, dokud jsou oba bojovníci naživu.

První bojovník zaútočí na druhého, jeho útok vnitřně zavolá na druhém bojovníkovi obranu. Po útoku vykreslíme obrazovku s informacemi a dále zprávy o útoku a obraně pomocí naší metody `vypisZpravu()`, která po výpisu udělá dramatickou pauzu. To samé provedeme i pro druhého bojovníka.

Přesuňme se do souboru `TahovyBoj.java`, vytvořme patřičné instance a zavolejme na aréně metodu `zapas()`:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        // vytvoření objektů
        Kostka kostka = new Kostka(10);
        Bojovnik zalgoren = new Bojovnik("Zalgoren", 100, 20, 10, kostka);
        Bojovnik shadow = new Bojovnik("Shadow", 60, 18, 15, kostka);
        Arena arena = new Arena(zalgoren, shadow, kostka);
        // zápas
        arena.zapas();
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    private String jmeno;
    private int zivot;
    private int maximalniZivot;
    private int utok;
    private int obrana;
    private Kostka kostka;
    private String zprava;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
        souper.branSe(uder);
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
            zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
            if (zivot <= 0) {
                zivot = 0;
                zprava += " a zemřel";
            }
        } else {
            zprava = String.format("%s odrazil útok", jmeno);
        }
        nastavZpravu(zprava);
    }

    private void nastavZpravu(String zprava) {
        this.zprava = zprava;
    }

    public String vratPosledniZpravu() {
        return zprava;
    }

    @Override
    public String toString() {
         return jmeno;
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Arena {
    private Bojovnik bojovnikA;
    private Bojovnik bojovnikB;
    private Kostka kostka;

    public Arena(Bojovnik bojovnikA, Bojovnik bojovnikB, Kostka kostka) {
        this.bojovnikA = bojovnikA;
        this.bojovnikB = bojovnikB;
        this.kostka = kostka;
    }

    private void vykresli() {
        System.out.println("-------------- Aréna -------------- \n");
        System.out.println("Zdraví bojovníků: \n");
        System.out.printf("%s %s%n", bojovnikA, bojovnikA.grafickyZivot());
        System.out.printf("%s %s%n", bojovnikB, bojovnikB.grafickyZivot());
    }

    private void vypisZpravu(String zprava) {
        System.out.println(zprava);
        try {
            Thread.sleep(500);
        } catch (InterruptedException ex) {
            System.err.println("Chyba, nepodařilo se uspat vlákno!");
        }
    }

    public void zapas() {
        System.out.println("Vítejte v aréně!");
        System.out.printf("Dnes se utkají %s s %s! %n", bojovnikA, bojovnikB);
        System.out.println("Zápas může začít...");

        // cyklus s bojem
        while (bojovnikA.jeZivy() && bojovnikB.jeZivy()) {
            bojovnikA.utoc(bojovnikB);
            vykresli();
            vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o útoku
            vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o obraně
            bojovnikB.utoc(bojovnikA);
            vykresli();
            vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o útoku
            vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o obraně
            System.out.println();
        }
    }
}

{/JAVA_OOP}

```


Charakteristiky hrdinů si můžete upravit dle libosti. Program spustíme:

```
Konzolová aplikace
-------------- Aréna --------------

Zdraví bojovníků:

Zalgoren [######              ]
Shadow [                    ]
Shadow útočí úderem za 20 hp
Zalgoren utrpěl poškození 4 hp
```


Výsledek je docela působivý. Objekty spolu komunikují, grafický život ubývá jak má, zážitek umocňuje dramatická pauza. Aréna má však 2 nedostatky.

*   V cyklu s bojem útočí první bojovník na druhého. Poté však vždy útočí i druhý bojovník, nehledě na to, zda ho první nezabil. Může tedy útočit již jako mrtvý. Podívejte se na výstup výše, Shadow útočil jako poslední i když byl mrtvý. Až potom se vystoupilo z cyklu `while`. U prvního bojovníka tento problém není, u druhého musíme před útokem kontrolovat, zda je naživu.
*   Druhým nedostatkem je, že bojovníci vždy bojují ve stejném pořadí, čili zde `Zalgoren` má vždy výhodu. Pojďme vnést další prvek náhody a pomocí kostky rozhodněme, který z bojovníků bude začínat. Jelikož jsou bojovníci vždy dva, stačí hodit kostkou a podívat se, zda padlo číslo menší nebo rovné polovině počtu stěn kostky. Tedy např. pokud padne na desetistěnné kostce číslo do 5, začíná 2. bojovník, jinak začíná první. Zbývá zamyslet se nad tím, jak do kódu zanést prohazování bojovníků. Jistě by bylo velmi nepřehledné opodmínkovat příkazy ve while cyklu. Jelikož již víme, že v Javě fungují reference, není pro nás problém udělat si dvě proměnné, ve kterých budou instance bojovníků, nazvěme je jednoduše stejně jako atributy, tedy `bojovnikA` a `bojovnikB`. Do těchto proměnných si na začátku dosadíme bojovníky z atributů `this.bojovnikA` a `this.bojovnikB` tak, jak potřebujeme. Můžeme tedy při pozitivním hodu kostkou dosadit do proměnné `bojovnikA` proměnnou `this.bojovnikB` a naopak, výsledkem bude, že začínat bude ten druhý. Kód cyklu se takto vůbec nezmění a zůstane stále přehledný a jednoduchý.

Změněná verze včetně podmínky, aby nemohl útočit mrtvý bojovník, by mohla vypadat nějak takto:

```
{JAVA_OOP}

class Arena {
    private Bojovnik bojovnikA;
    private Bojovnik bojovnikB;
    private Kostka kostka;

    public Arena(Bojovnik bojovnikA, Bojovnik bojovnikB, Kostka kostka) {
        this.bojovnikA = bojovnikA;
        this.bojovnikB = bojovnikB;
        this.kostka = kostka;
    }

    private void vykresli() {
        System.out.println("-------------- Aréna -------------- \n");
        System.out.println("Zdraví bojovníků: \n");
        System.out.printf("%s %s%n", bojovnikA, bojovnikA.grafickyZivot());
        System.out.printf("%s %s%n", bojovnikB, bojovnikB.grafickyZivot());
    }

    private void vypisZpravu(String zprava) {
        System.out.println(zprava);
        try {
            Thread.sleep(500);
        } catch (InterruptedException ex) {
             System.err.println("Chyba, nepodařilo se uspat vlákno!");
        }
    }

    public void zapas() {
        // původní pořadí
        Bojovnik bojovnikA = this.bojovnikA;
        Bojovnik bojovnikB = this.bojovnikB;
        System.out.println("Vítejte v aréně!");
        System.out.printf("Dnes se utkají %s s %s! %n%n", bojovnikA, bojovnikB);
        // prohození bojovníků
        boolean zacinaBojovnikB = (kostka.hod() <= kostka.vratPocetSten() / 2);
        if (zacinaBojovnikB) {
            bojovnikA = this.bojovnikB;
            bojovnikB = this.bojovnikA;
        }
        System.out.printf("Začínat bude bojovník %s! %nZápas může začít...%n", bojovnikA);

        // cyklus s bojem
        while (bojovnikA.jeZivy() && bojovnikB.jeZivy()) {
            bojovnikA.utoc(bojovnikB);
            vykresli();
            vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o útoku
            vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o obraně
            if (bojovnikB.jeZivy()) {
                bojovnikB.utoc(bojovnikA);
                vykresli();
                vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o útoku
                vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o obraně
            }
            System.out.println();
        }
    }

}

{/JAVA_OOP}
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        // vytvoření objektů
        Kostka kostka = new Kostka(10);
        Bojovnik zalgoren = new Bojovnik("Zalgoren", 100, 20, 10, kostka);
        Bojovnik shadow = new Bojovnik("Shadow", 60, 18, 15, kostka);
        Arena arena = new Arena(zalgoren, shadow, kostka);
        // zápas
        arena.zapas();

{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

import java.util.Random;

public class Kostka {

    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    private String jmeno;
    private int zivot;
    private int maximalniZivot;
    private int utok;
    private int obrana;
    private Kostka kostka;
    private String zprava;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
                grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
        souper.branSe(uder);
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
            zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
            if (zivot <= 0) {
                zivot = 0;
                zprava += " a zemřel";
            }
        } else {
            zprava = String.format("%s odrazil útok", jmeno);
        }
        nastavZpravu(zprava);
    }

    private void nastavZpravu(String zprava) {
        this.zprava = zprava;
    }

    public String vratPosledniZpravu() {
        return zprava;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}
{/JAVA_OOP}

```


Program vyzkoušejme:

```
Konzolová aplikace
-------------- Aréna --------------

Zdraví bojovníků:

Zalgoren [#########           ]
Shadow [                    ]
Zalgoren útočí úderem za 27 hp
Shadow utrpěl poškození 11 hp a zemřel
```


Vidíme, že je vše již v pořádku. Gratuluji vám, pokud jste se dostali až sem a tutoriály opravdu četli a pochopili, máte základy objektového programování a dokážete tvořit rozumné aplikace ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

V příští lekci, [Dědičnost a polymorfismus](https://www.itnetwork.cz/java/oop/java-tutorial-dedicnost-a-polymorfismus), si vysvětlíme dědičnost a polymorfismus.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 7 - Dědičnost a polymorfismus
V minulé lekci, [Java - Aréna s bojovníky](https://www.itnetwork.cz/java/oop/java-tutorial-arena-s-objektovymi-bojovniky), jsme dokončili naši arénu, simulující zápas dvou bojovníků.

Dnes si opět rozšíříme znalosti o objektově orientovaném programování. V úvodním tutoriálu do OOP jsme si říkali, že OOP stojí na třech základních pilířích: **zapouzdření**, **dědičnosti** a **polymorfismu**. Zapouzdření a používání modifikátoru `private` nám je již dobře známé. Dnes se podíváme na zbylé dva pilíře.

Dědičnost
---------

Dědičnost je jedna ze základních vlastností OOP a slouží k tvoření nových datových struktur na základě starých. Vysvětleme si to na jednoduchém příkladu.

Budeme programovat informační systém. To je docela reálný příklad, abychom si však učení zpříjemnili, bude to informační systém pro správu zvířat v ZOO ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Náš systém budou používat dva typy uživatelů: uživatel a administrátor. Uživatel je běžný ošetřovatel zvířat, který bude moci upravovat informace o zvířatech, např. jejich váhu nebo rozpětí křídel. Administrátor bude moci také upravovat údaje o zvířatech a navíc zvířata přidávat a mazat z databáze. Z atributů bude mít navíc telefonní číslo, aby ho bylo možné kontaktovat v případě výpadku systému. Bylo by jistě zbytečné a nepřehledné, kdybychom si museli definovat obě třídy úplně celé, protože mnoho vlastností těchto 2 objektů je společných. Uživatel i administrátor budou mít jistě jméno, věk a budou se moci přihlásit a odhlásit. Nadefinujeme si tedy pouze třídu `Uzivatel` (nepůjde o funkční ukázku, dnes to bude jen teorie, programovat budeme příště):

```
class Uzivatel {
    private String jmeno;
    private String heslo;
    private int vek;

    public boolean prihlasit(String heslo) {
        
    }

    public boolean odhlasit() {
        
    }

    public void nastavVahu(Zvire zvire) {
        
    }

    
}
```


Třídu jsem jen naznačil, ale jistě si ji dokážeme dobře představit. Bez znalosti dědičnosti bychom třídu `Administrator` definovali asi takto:

```
class Administrator {
    private String jmeno;
    private String heslo;
    private int vek;
    private String telefonniCislo;

    public boolean prihlasit(String heslo) {
        
    }

    public boolean odhlasit() {
        
    }

    public void nastavVahu(Zvire zvire) {
        
    }

    public void pridejZvire(Zvire zvire) {
        
    }

    public void vymazZvire(Zvire zvire) {
        
    }

    
}
```


Vidíme, že máme ve třídě spoustu redundantního (duplikovaného) kódu. Jakékoli změny musíme nyní provádět v obou třídách, kód se nám velmi komplikuje. Nyní použijeme dědičnost, definujeme tedy třídu `Administrator` tak, aby z třídy `Uzivatel` dědila. Atributy a metody uživatele tedy již nemusíme znovu definovat, Java nám je do třídy sama dodá:

```
class Administrator extends Uzivatel {
    private String telefonniCislo;

    public void pridejZvire(Zvire zvire) {
        
    }

    public void vymazZvire(Zvire zvire) {
        
    }

    
}
```


Vidíme, že ke zdědění jsme použili klíčové slovo `extends`. V anglické literatuře najdete dědičnost pod slovem _inheritance_.

V příkladu výše nebudou v potomkovi přístupné privátní atributy, ale pouze atributy a metody s modifikátorem `public`. Atributy `private` a metody jsou chápány jako speciální logika konkrétní třídy, která je potomkovi utajena, i když ji vlastně používá, nemůže ji měnit. Abychom dosáhli požadovaného výsledku, použijeme **nový modifikátor přístupu** `protected`.

Modifikátor `protected` zpřístupní atribut nebo metodu buď libovolným potomkům v jakémkoli balíčku nebo libovolným třídám v tom samém balíčku. Potomek se tedy již k atributu dostane. Jako problém může být, že atribut je zvenčí viditelný, proto se v souboru `.java` se třídou často používá jiné jméno balíčku, než ve kterém jsou ostatní části programu. Tento nový balíček mají společný jen související třídy (např. dědičností), z balíčku ve kterém je hlavní program potom `protected` atributy přístupné nebudou.

Pokud bychom chtěli atributy nebo metody zpřístupnit pouze třídě samotné a třídám ve stejném balíčku, **neuvedeme před ně žádný modifikátor přístupu** (zvaný též jako _package private_).

Začátek třídy `Uzivatel` by tedy vypadal takto:

```
class Uzivatel {
    protected String jmeno;
    protected String heslo;
    protected int vek;

    
```


Když si nyní vytvoříme instance uživatele a administrátora, oba budou mít např. atribut `jmeno` a metodu `prihlasit()`. Java třídu `Uzivatel` zdědí a doplní nám automaticky všechny její atributy.

Výhody dědění jsou jasné, nemusíme opisovat oběma třídám ty samé atributy, ale stačí dopsat jen to, v čem se liší. Zbytek se podědí. Přínos je obrovský, můžeme rozšiřovat existující komponenty o nové metody a tím je znovu využívat. Nemusíme psát spousty redundantního (duplikovaného) kódu. A hlavně - když změníme jediný atribut v mateřské třídě, automaticky se tato změna všude podědí. Nedojde tedy k tomu, že bychom to museli měnit ručně u 20 tříd a někde na to zapomněli a způsobili chybu. Jsme lidé a chybovat budeme vždy, musíme tedy používat takové programátorské postupy, abychom měli možností chybovat co nejméně.

O mateřské třídě se někdy hovoří jako o předkovi (zde `Uzivatel`) a o třídě, která z ní dědí, jako o potomkovi (zde `Administrator`). Potomek může přidávat nové metody nebo si uzpůsobovat metody z mateřské třídy (viz dále). Můžete se setkat i s pojmy nadtřída a podtřída.

Další možností, jak **objektový model** navrhnout, by bylo zavést mateřskou třídu `Uzivatel`, která by sloužila pouze k dědění. Z třídy `Uzivatel` by potom dědili třídy `Osetrovatel` a z něj `Administrator`. To by se však vyplatilo při větším počtu typů uživatelů. V takovém případě hovoříme o hierarchii tříd, budeme se tím zabývat ke konci této sekce. Náš příklad byl jednoduchý a proto nám stačily pouze 2 třídy. Existují tzv. **návrhové vzory**, které obsahují osvědčená schémata objektových struktur pro známé případy užití. Zájemci je naleznou popsané v sekci [Návrhové vzory](https://www.itnetwork.cz/navrhove-vzory-objektovy-model-architektura), je to však již pokročilejší problematika a také velmi zajímavá. V objektovém modelování se dědičnost znázorňuje graficky jako prázdná šipka směřující k předkovi. V našem případě by grafická notace vypadala takto:

![Dědičnost objektů – grafická notace - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/dedicnost_uzivatelu.png)

### Datový typ při dědičnosti

Obrovskou výhodou dědičnosti je, že **když si vytvoříme proměnnou s datovým typem mateřské třídy, můžeme do ni bez problému ukládat i její potomky**. Je to dané tím, že potomek obsahuje vše, co obsahuje mateřská třída, splňuje tedy "požadavky" (přesněji obsahuje rozhraní) datového typu. A k tomu má oproti mateřské třídě něco navíc. Můžeme si tedy udělat pole typu `Uzivatel` a v něm mít jak uživatele, tak administrátory. S proměnnou to tedy funguje takto:

```
Uzivatel uzivatel = new Uzivatel("Jan Novák", 33);
Administrator administrator = new Administrator("Josef Nový", 25);

uzivatel = administrator;


administrator = uzivatel;
```


V Javě je mnoho konstrukcí, jak operovat s typy instancí při dědičnosti. Podrobně se na ně podíváme během seriálu, nyní si ukažme jen to, jak můžeme ověřit typ instance v proměnné:

```
Uzivatel uzivatel = new Administrator("Josef Nový", 25);
if (uzivatel instanceof Administrator) {
    System.out.println("Je to administrátor");
} else {
    System.out.println("Je to uživatel");
}
```


Pomocí operátoru `instanceof` se můžeme zeptat, zda je objekt daného typu. Kód výše otestuje, zda je v proměnné `uzivatel` uživatel nebo jeho potomek administrátor.

Jazyky, které dědičnost podporují, buď umí dědičnost jednoduchou, kde třída dědí jen z jedné třídy, nebo vícenásobnou, kde třída dědí hned z několika tříd najednou. Vícenásobná dědičnost se v praxi příliš neosvědčila, časem si řekneme proč a ukážeme si i jak ji obejít. Java podporuje pouze jednoduchou dědičnost, s vícenásobnou dědičností se můžete setkat např. v [C++](https://www.itnetwork.cz/cplusplus).

Polymorfismus
-------------

Nenechte se vystrašit příšerným názvem této techniky, protože je v jádru velmi jednoduchá. Polymorfismus umožňuje používat jednotné rozhraní pro práci s různými typy objektů. Mějme například mnoho objektů, které reprezentují nějaké geometrické útvary (kruh, čtverec, trojúhelník). Bylo by jistě přínosné a přehledné, kdybychom s nimi mohli komunikovat jednotně, ačkoli se liší. Můžeme zavést třídu `GeometrickyUtvar`, která by obsahovala atribut `barva` a metodu `vykresli`. Všechny geometrické tvary by potom dědily z této třídy její _interface_ (rozhraní). Objekty kruh a čtverec se ale jistě vykreslují jinak. **Polymorfismus nám umožňuje přepsat si metodu** `vykresli()` **u každé podtřídy tak, aby dělala, co chceme**. Rozhraní tak zůstane zachováno a my nebudeme muset přemýšlet, jak se to u onoho objektu volá.

Polymorfismus bývá často vysvětlován na obrázku se zvířaty, která mají všechna v rozhraní metodu `speak()`, ale každé si ji vykonává po svém:

![Polymorfismus - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/img/polymorphism.gif)

Podstatou polymorfismu je tedy metoda nebo metody, které mají všichni potomci definované se stejnou hlavičkou, ale jiným tělem.

Modifikátory přístupu
---------------------

Pro přehlednost si ještě všechny modifikátory krátce popíšeme:

*   `public` - Libovolné třídy mohou přistupovat k této metodě nebo atributu, tedy i z jiných balíčků.
*   `private` - Přístup má pouze daná třída, žádná jiná nemůže.
*   `protected` - Přístup má daná třída a potomci třídy.
*   Žádný modifikátor - Přístup mají všechny třídy ve stejném balíčku (např. `package cz.itnetwork`). Tedy podobné jako modifikátor `public`, ale omezený na konkrétní balíček ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Výše uvedené modifikátory si shrneme v tabulce:


|Modifikátor     |Daná třída|Stejný balíček|Potomci třídy (odvozené třídy)|Svět (vše ostatní)|
|----------------|----------|--------------|------------------------------|------------------|
|public          |✔         |✔             |✔                             |✔                 |
|protected       |✔         |✔             |✔                             |❌                 |
|bez modifikátoru|✔         |✔             |❌                             |❌                 |
|private         |✔         |❌             |❌                             |❌                 |


Polymorfismus si spolu s dědičností vyzkoušíme v příští lekci, [Aréna s mágem (dědičnost a polymorfismus)](https://www.itnetwork.cz/java/oop/java-tutorial-dedicnost-a-polymorfismus-arena-s-magem), na bojovnících v naší aréně. Přidáme mága, který si bude metodu `utoc()` vykonávat po svém pomocí many, ale jinak zdědí chování a atributy bojovníka. Zvenčí tedy vůbec nepoznáme, že to není bojovník, protože bude mít stejné rozhraní. Bude to zábava ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

# Lekce 8 - Aréna s mágem (dědičnost a polymorfismus)
V minulé lekci, [Dědičnost a polymorfismus](https://www.itnetwork.cz/java/oop/java-tutorial-dedicnost-a-polymorfismus), jsme si vysvětlili dědičnost a polymorfismus.

Dnes máme slíbeno, že si dědičnost a polymorfismus vyzkoušíme v praxi. Bude to opět na naší aréně, kde z bojovníka budeme dědit mága. Tento tutoriál již patří k těm náročnějším a bude tomu tak i u dalších. Proto si průběžně procvičujte práci s objekty, zkoušejte si naše cvičení a také vymýšlejte nějaké své aplikace, abyste si zažili základní věci. To, že je tu přítomen celý seriál neznamená, že ho celý najednou přečtete a pochopíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Snažte se programovat průběžně.

![Mág - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/mag.png)

Než začneme něco psát, shodněme se na tom, co by měl mág umět. Mág bude fungovat stejně, jako bojovník. Kromě života bude mít však i **manu**. Zpočátku bude mana plná. V případě plné many může mág vykonat **magický útok**, který bude mít pravděpodobně vyšší damage, než útok normální (ale samozřejmě záleží na tom, jak si ho nastavíme). Tento útok manu vybije na `0`. Každé kolo se bude mana zvyšovat o `10` a mág bude podnikat jen běžný útok. Jakmile se mana zcela doplní, opět bude moci magický útok použít. Mana bude zobrazena grafickým ukazatelem, stejně jako život.

Do původního projektu `TahovyBoj` vytvoříme tedy třídu `Mag.java`, zdědíme ji z třídy `Bojovnik` a dodáme ji atributy, které chceme oproti bojovníkovi navíc. Bude tedy vypadat takto (opět si ji okomentujte):

```
class Mag extends Bojovnik {
    private int mana;
    private int maximalniMana;
    private int magickyUtok;
}
```


V mágovi nemáme zatím přístup ke všem proměnným, protože jsou v bojovníkovi nastavené jako privátní. Musíme třídu `Bojovnik` lehce upravit. Změníme modifikátory `private` u atributů na `protected`. Budeme potřebovat jen atributy `kostka` a `jmeno`, ale klidně nastavíme jako `protected` všechny atributy charakteru, protože se v budoucnu mohou hodit, kdybychom se rozhodli oddědit další typy bojovníků. Naopak atribut `zprava` není vhodné nastavovat jako `protected`, protože nesouvisí s bojovníkem, ale s nějakou vnitřní logikou třídy. Třída tedy bude vypadat nějak takto:

```
protected String jmeno;
protected int zivot;
protected int maximalniZivot;
protected int utok;
protected int obrana;
protected Kostka kostka;
private String zprava;


```


Přejděme ke konstruktoru.

Konstruktor potomka
-------------------

**Java nedědí konstruktory!** Je to pravděpodobně z toho důvodu, že předpokládá, že potomek bude mít navíc nějaké atributy a původní konstruktor by u něj byl na škodu. To je i náš případ, protože konstruktor mága bude brát oproti tomu z bojovníka navíc 2 parametry (mana a magický útok).

Definujeme si tedy konstruktor v potomkovi `Mag`, který bere parametry potřebné pro vytvoření bojovníka a několik parametrů navíc pro mága.

O potomků je nutné **vždy volat konstruktor předka**. Je to z toho důvodu, že bez volání konstruktoru nemusí být instance správně inicializovaná. Konstruktor předka nevoláme pouze v případě, že žádný nemá. Náš konstruktor musí mít samozřejmě všechny parametry potřebné pro předka plus ty nové, co má navíc potomek. Některé potom předáme předkovi a některé si zpracujeme sami. Konstruktor předka se vykoná před naším konstruktorem.

V Javě existuje klíčové slovo `super`, které je podobné námi již známému `this`. Na rozdíl od klíčového slova `this`, které odkazuje na konkrétní instanci třídy, `super` **odkazuje na předka**. My tedy můžeme zavolat konstruktor předka s danými parametry a poté vykonat navíc inicializaci pro mága.

Konstruktor mága bude tedy vypadat takto:

```
public Mag(String jmeno, int zivot, int utok, int obrana, Kostka kostka, int mana, int magickyUtok) {
    super(jmeno, zivot, utok, obrana, kostka);
    this.mana = mana;
    this.maximalniMana = mana;
    this.magickyUtok = magickyUtok;
}
```


Stejně můžeme volat i jiný konstruktor v té samé třídě (ne předka), jen místo klíčového slova `super` použijeme `this`.

Přesuňme se nyní do souboru `TahovyBoj.java` a druhého bojovníka (u nás to je _Shadow_) změňme na mága, např. takto:

```
Bojovnik gandalf = new Mag("Gandalf", 60, 15, 12, kostka, 30, 45);
```


Změnu samozřejmě musíme udělat i v řádku, kde bojovníka do arény vkládáme. Všimněte si, že mága ukládáme do proměnné typu `Bojovnik`. Nic nám v tom nebrání, protože bojovník je jeho předek. Stejně tak si můžeme typ proměnné změnit na `Mag`. Když aplikaci nyní spustíme, bude fungovat úplně stejně, jako předtím. Mág vše dědí z bojovníka a zatím tedy funguje jako bojovník.

Polymorfismus a přepisování metod
---------------------------------

Bylo by výhodné, kdyby objekt `Arena` mohl s mágem pracovat stejným způsobem jako s bojovníkem. My již víme, že takovémuto mechanismu říkáme **polymorfismus**. Aréna zavolá na objektu metodu `utoc()` se soupeřem v parametru. Nestará se o to, jestli bude útok vykonávat bojovník nebo mág, bude s nimi pracovat stejně. U mága si tedy **přepíšeme** metodu `utoc()` z předka. Přepíšeme zděděnou metodu tak, aby útok pracoval s manou, hlavička metody však zůstane stejná.

Když jsme u metod, budeme v `Bojovnik.java` ještě jistě používat metodu `nastavZpravu()`, ta je však privátní. Označme ji jako `protected`:

```
protected void nastavZpravu(String zprava) {
```


Při návrhu bojovníka jsme samozřejmě měli myslet na to, že se z něj bude dědit a již označit vhodné atributy a metody jako `protected`. V tutoriálu k bojovníkovi jsem vás tím však nechtěl zbytečně zatěžovat, proto musíme modifikátory změnit až teď, kdy jim rozumíme ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pojďme přepsat metodu bojovníka `utoc()` v mágovi. Metodu normálně definujeme v souboru `Mag.java` tak, jak jsme zvyklí, pouze ji označíme klíčovým slovem `@Override` pro přepsání:

```
@Override
public void utoc(Bojovnik souper) {
```


Podobně jsme přepisovali metodu `toString()` u našich objektů, každý objekt v Javě je totiž odděděný od `java.lang.Object`, který obsahuje několik defaultních metod a jedna z nich je i metoda `toString()`. Při její implementaci bychom tedy měli označit, že se jedná o přepsanou metodu.

Chování metody `utoc()` nebude nijak složité. Podle hodnoty many buď provedeme běžný útok nebo útok magický. Hodnotu many potom buď zvýšíme o `10` nebo naopak snížíme na `0` v případě magického útoku:

```
@Override
public void utoc(Bojovnik souper) {
    int uder = 0;
    
    if (mana < maximalniMana) {
        mana += 10;
        if (mana > maximalniMana) {
            mana = maximalniMana;
        }
        uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
    } else { 
        uder = magickyUtok + kostka.hod();
        nastavZpravu(String.format("%s použil magii za %s hp", jmeno, uder));
        mana = 0;
    }
    souper.branSe(uder);
}
```


Kód je asi srozumitelný. Všimněte si omezení many proměnnou `maximalniMana`. Může se nám totiž stát, že tuto hodnotu přesáhneme, když ji zvyšujeme o `10`. Když se nad kódem zamyslíme, tak útok výše v podstatě vykonává původní metoda `utoc()`. Jistě by bylo přínosné zavolat podobu metody na předkovi místo toho, abychom chování opisovali. K tomu opět použijeme klíčové slovo `super`:

```
{JAVA_OOP}

class Mag extends Bojovnik {
    private int mana;
    private int maximalniMana;
    private int magickyUtok;

    public Mag(String jmeno, int zivot, int utok, int obrana, Kostka kostka, int mana, int magickyUtok)
    {
        super(jmeno, zivot, utok, obrana, kostka);
        this.mana = mana;
        this.maximalniMana = mana;
        this.magickyUtok = magickyUtok;
    }
    
    @Override
    public void utoc(Bojovnik souper) {
        // Mana není naplněna
        if (mana < maximalniMana) {
            mana += 10;
            if (mana > maximalniMana) {
                mana = maximalniMana;
            }
            super.utoc(souper);
        } else { // Magický útok
            int uder = magickyUtok + kostka.hod();
            nastavZpravu(String.format("%s použil magii za %s hp", jmeno, uder));
            souper.branSe(uder);
            mana = 0;
        }
    }

}

{/JAVA_OOP}
{JAVA_OOP}
import java.util.Random;
public class Kostka {
    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    protected String jmeno;
    protected int zivot;
    protected int maximalniZivot;
    protected int utok;
    protected int obrana;
    protected Kostka kostka;
    private String zprava;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    public String grafickyZivot() {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
        souper.branSe(uder);
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
            zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
            if (zivot <= 0) {
                zivot = 0;
                zprava += " a zemřel";
            }
        } else {
            zprava = String.format("%s odrazil útok", jmeno);
        }
        nastavZpravu(zprava);
    }

    protected void nastavZpravu(String zprava) {
        this.zprava = zprava;
    }

    public String vratPosledniZpravu() {
        return zprava;
    }

    @Override
    public String toString() {
        return jmeno;
    }

}
{/JAVA_OOP}
{JAVA_OOP}
class Arena {
    private Bojovnik bojovnikA;
    private Bojovnik bojovnikB;
    private Kostka kostka;

    public Arena(Bojovnik bojovnikA, Bojovnik bojovnikB, Kostka kostka) {
        this.bojovnikA = bojovnikA;
        this.bojovnikB = bojovnikB;
        this.kostka = kostka;
    }

    private void vykresli() {
        System.out.println("-------------- Aréna -------------- \n");
        System.out.println("Zdraví bojovníků: \n");
        System.out.printf("%s %s%n", bojovnikA, bojovnikA.grafickyZivot());
        System.out.printf("%s %s%n", bojovnikB, bojovnikB.grafickyZivot());
    }

    private void vypisZpravu(String zprava) {
        System.out.println(zprava);
        try {
            Thread.sleep(500);
        } catch (InterruptedException ex) {
            System.err.println("Chyba, nepovedlo se uspat vlákno!");
        }
    }

    public void zapas() {
        // původní pořadí
        Bojovnik bojovnikA = this.bojovnikA;
        Bojovnik bojovnikB = this.bojovnikB;
        System.out.println("Vítejte v aréně!");
        System.out.printf("Dnes se utkají %s s %s! %n%n", bojovnikA, bojovnikB);
        // prohození bojovníků
        boolean zacinaBojovnikB = (kostka.hod() <= kostka.vratPocetSten() / 2);
        if (zacinaBojovnikB) {
            bojovnikA = this.bojovnikB;
            bojovnikB = this.bojovnikA;
        }
        System.out.printf("Začínat bude bojovník %s! %nZápas může začít...%n", bojovnikA);

        // cyklus s bojem
        while (bojovnikA.jeZivy() && bojovnikB.jeZivy()) {
            bojovnikA.utoc(bojovnikB);
            vykresli();
            vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o útoku
            vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o obraně
            if (bojovnikB.jeZivy()) {
                bojovnikB.utoc(bojovnikA);
                vykresli();
                vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o útoku
                vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o obraně
            }
            System.out.println();
        }
    }
}
{/JAVA_OOP}
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        // vytvoření objektů
        Kostka kostka = new Kostka(10);
        Bojovnik zalgoren = new Bojovnik("Zalgoren", 100, 20, 10, kostka);
        Bojovnik gandalf = new Mag("Gandalf", 60, 15, 12, kostka, 30, 45);
        Arena arena = new Arena(zalgoren, gandalf, kostka);
        // zápas
        arena.zapas();

{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}

```


Opět vidíme, jak můžeme znovupoužívat kód. S dědičností je spojeno opravdu mnoho technik, jak si ušetřit práci. V našem případě to ušetří několik řádků, ale u většího projektu by to mohlo mít obrovský význam.

Aplikace nyní funguje tak, jak má:

```
Konzolová aplikace
-------------- Aréna --------------

Zdraví bojovníků:

Zalgoren [#############       ]
Gandalf [#################   ]
Gandalf použil magii za 52 hp
Zalgoren utrpěl poškození 36 hp
```


Arena nás však neinformuje o maně mága, pojďme to napravit. Přidáme mágovi veřejnou metodu `grafickaMana()`, která bude obdobně jako u života vracet textový řetězec s grafickým ukazatelem many.

Abychom nemuseli logiku se složením ukazatele psát dvakrát, upravíme metodu `grafickyZivot()` v souboru `Bojovnik.java`. Připomeňme si, jak vypadá:

```
public String grafickyZivot() {
    String grafickyZivot = "[";
    int celkem = 20;
    double pocetDilku = Math.round(((double) zivot / maximalniZivot) * celkem);
    if ((pocetDilku == 0) && (jeZivy())) {
        pocetDilku = 1;
    }
    for (int i = 0; i < pocetDilku; i++) {
        grafickyZivot += "#";
    }
    for (int i = 0; i < celkem - pocetDilku; i++) {
        grafickyZivot += " ";
    }
    grafickyZivot += "]";
    return grafickyZivot;
}
```


Vidíme, že není kromě proměnných `zivot` a `maximalniZivot` na životě nijak závislá. Metodu přejmenujeme na `grafickyUkazatel` a dáme ji 2 parametry: aktuální hodnotu a maximální hodnotu. Proměnné `zivot` a `maximalniZivot` v těle metody poté nahradíme za `aktualni` a `maximalni`. Modifikátor bude `protected`, abychom metodu mohli v potomkovi použít:

```
protected String grafickyUkazatel(int aktualni, int maximalni) {
    String grafickyZivot = "[";
    int celkem = 20;
    double pocetDilku = Math.round(((double) aktualni / maximalni) * celkem);
    if ((pocetDilku == 0) && (jeZivy())) {
        pocetDilku = 1;
    }
    for (int i = 0; i < pocetDilku; i++) {
        grafickyZivot += "#";
    }
    for (int i = 0; i < celkem - pocetDilku; i++) {
        grafickyZivot += " ";
    }
    grafickyZivot += "]";
    return grafickyZivot;
}
```


Metodu `grafickyZivot()` v souboru `Bojovnik.java` naimplementujeme znovu, bude nám v ní stačit jediný řádek a to zavolání metody `grafickyUkazatel()` s příslušnými parametry:

```
public String grafickyZivot() {
    return grafickyUkazatel(zivot, maximalniZivot);
}
```


Určitě jsem mohl v tutoriálu s bojovníkem udělat metodu `grafickyUkazatel()` rovnou. Chtěl jsem však, abychom si ukázali, jak se řeší případy, kdy potřebujeme vykonat podobnou funkčnost vícekrát. S takovouto parametrizací se v praxi budete setkávat často, protože nikdy přesně nevíme, co budeme v budoucnu od našeho programu požadovat.

Nyní můžeme vykreslovat ukazatel tak, jak se nám to hodí. Přesuňme se do `Mag.java` a naimplementujme metodu `grafickaMana()`:

```
public String grafickaMana() {
    return grafickyUkazatel(mana, maximalniMana);
}
```


Jednoduché, že? Nyní je mág hotový, zbývá jen naučit arénu zobrazovat manu v případě, že je bojovník mág. Přesuňme se tedy do souboru `Arena.java`.

Rozpoznání typu objektu
-----------------------

Jelikož se nám nyní vykreslení bojovníka zkomplikovalo, uděláme si na něj samostatnou metodu `vypisBojovnika()`, jejím parametrem bude daná instance bojovníka:

```
private void vypisBojovnika(Bojovnik bojovnik) {
    System.out.println(bojovnik);
    System.out.print("Život: ");
    System.out.println(bojovnik.grafickyZivot());
}
```


Nyní pojďme reagovat na to, jestli je bojovník mág. Minule jsme si řekli, že k tomu slouží operátor `instanceof`:

```
private void vypisBojovnika(Bojovnik bojovnik) {
    System.out.println(bojovnik);
    System.out.print("Život: ");
    System.out.println(bojovnik.grafickyZivot());
    if (bojovnik instanceof Mag) {
        System.out.print("Mana:  ");
        System.out.println(((Mag) bojovnik).grafickaMana());
    }
}
```


Bojovníka jsme museli na mága přetypovat, abychom se k metodě `grafickaMana()` dostali. Samotná třída `Bojovnik` ji totiž nemá. To bychom měli, metodu `vypisBojovnika()` budeme volat v metodě `vykresli()`, která bude vypadat takto:

```
{JAVA_OOP}

class Arena {
    private Bojovnik bojovnikA;
    private Bojovnik bojovnikB;
    private Kostka kostka;

    public Arena(Bojovnik bojovnikA, Bojovnik bojovnikB, Kostka kostka) {
        this.bojovnikA = bojovnikA;
        this.bojovnikB = bojovnikB;
        this.kostka = kostka;
    }

    private void vykresli() {
        System.out.println("-------------- Aréna -------------- \n");
        System.out.println("Bojovníci: \n");
        vypisBojovnika(bojovnikA);
        System.out.println();
        vypisBojovnika(bojovnikB);
        System.out.println();
    }

    private void vypisZpravu(String zprava) {
        System.out.println(zprava);
        try {
            Thread.sleep(500);
        } catch (InterruptedException ex) {
            System.err.println("Chyba, nepovedlo se uspat vlákno!");
        }
    }

    private void vypisBojovnika(Bojovnik bojovnik) {
        System.out.println(bojovnik);
        System.out.print("Život: ");
        System.out.println(bojovnik.grafickyZivot());
        if (bojovnik instanceof Mag) {
            System.out.print("Mana: ");
            System.out.println(((Mag) bojovnik).grafickaMana());
        }
    }

    public void zapas() {
        // původní pořadí
        Bojovnik bojovnikA = this.bojovnikA;
        Bojovnik bojovnikB = this.bojovnikB;
        System.out.println("Vítejte v aréně!");
        System.out.printf("Dnes se utkají %s s %s! %n%n", bojovnikA, bojovnikB);
        // prohození bojovníků
        boolean zacinaBojovnikB = (kostka.hod() <= kostka.vratPocetSten() / 2);
        if (zacinaBojovnikB) {
            bojovnikA = this.bojovnikB;
            bojovnikB = this.bojovnikA;
        }
        System.out.printf("Začínat bude bojovník %s! %nZápas může začít...%n", bojovnikA);

        // cyklus s bojem
        while (bojovnikA.jeZivy() && bojovnikB.jeZivy()) {
            bojovnikA.utoc(bojovnikB);
            vykresli();
            vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o útoku
            vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o obraně
            if (bojovnikB.jeZivy()) {
                bojovnikB.utoc(bojovnikA);
                vykresli();
                vypisZpravu(bojovnikB.vratPosledniZpravu()); // zpráva o útoku
                vypisZpravu(bojovnikA.vratPosledniZpravu()); // zpráva o obraně
            }
            System.out.println();
        }
    }
}
{/JAVA_OOP}
{JAVA_OOP}

import java.util.Random;
public class Kostka {
    private Random random;
    private int pocetSten;

    public Kostka() {
        pocetSten = 6;
        random = new Random();
    }

    public Kostka(int pocetSten) {
        this.pocetSten = pocetSten;
        random = new Random();
    }

    public int vratPocetSten() {
        return pocetSten;
    }

    public int hod() {
        return random.nextInt(pocetSten) + 1;
    }

    @Override
    public String toString() {
        return String.format("Kostka s %s stěnami", pocetSten);
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Bojovnik {
    protected String jmeno;
    protected int zivot;
    protected int maximalniZivot;
    protected int utok;
    protected int obrana;
    protected Kostka kostka;
    private String zprava;

    public Bojovnik(String jmeno, int zivot, int utok, int obrana, Kostka kostka) {
        this.jmeno = jmeno;
        this.zivot = zivot;
        this.maximalniZivot = zivot;
        this.utok = utok;
        this.obrana = obrana;
        this.kostka = kostka;
    }

    public boolean jeZivy() {
        return (zivot > 0);
    }

    protected String grafickyUkazatel(int aktualni, int maximalni) {
        String grafickyZivot = "[";
        int celkem = 20;
        double pocetDilku = Math.round(((double) aktualni / maximalni) * celkem);
        if ((pocetDilku == 0) && (jeZivy())) {
            pocetDilku = 1;
        }
        for (int i = 0; i < pocetDilku; i++) {
            grafickyZivot += "#";
        }
        for (int i = 0; i < celkem - pocetDilku; i++) {
            grafickyZivot += " ";
        }
        grafickyZivot += "]";
        return grafickyZivot;
    }

    public String grafickyZivot() {
        return grafickyUkazatel(zivot, maximalniZivot);
    }

    public void utoc(Bojovnik souper) {
        int uder = utok + kostka.hod();
        nastavZpravu(String.format("%s útočí s úderem za %s hp", jmeno, uder));
        souper.branSe(uder);
    }

    public void branSe(int uder) {
        int zraneni = uder - (obrana + kostka.hod());
        if (zraneni > 0) {
            zivot -= zraneni;
            zprava = String.format("%s utrpěl poškození %s hp", jmeno, zraneni);
            if (zivot <= 0) {
                zivot = 0;
                zprava += " a zemřel";
            }
        } else {
            zprava = String.format("%s odrazil útok", jmeno);
        }
        nastavZpravu(zprava);
    }

    protected void nastavZpravu(String zprava) {
        this.zprava = zprava;
    }

    public String vratPosledniZpravu() {
        return zprava;
    }

    @Override
    public String toString() {
        return jmeno;
    }
}
{/JAVA_OOP}
{JAVA_OOP}
class Mag extends Bojovnik {
    private int mana;
    private int maximalniMana;
    private int magickyUtok;

    public Mag(String jmeno, int zivot, int utok, int obrana, Kostka kostka, int mana, int magickyUtok)
    {
        super(jmeno, zivot, utok, obrana, kostka);
        this.mana = mana;
        this.maximalniMana = mana;
        this.magickyUtok = magickyUtok;
    }

    @Override
    public void utoc(Bojovnik souper) {
        // Mana není naplněna
        if (mana < maximalniMana) {
            mana += 10;
            if (mana > maximalniMana) {
                mana = maximalniMana;
            }
            super.utoc(souper);
        } else { // Magický útok
            int uder = magickyUtok + kostka.hod();
            nastavZpravu(String.format("%s použil magii za %s hp", jmeno, uder));
            souper.branSe(uder);
            mana = 0;
        }
    }

    public String grafickaMana() {
        return grafickyUkazatel(mana, maximalniMana);
    }
}

{/JAVA_OOP}
{JAVA_OOP}
{JAVA_MAIN_BLOCK}

        // vytvoření objektů
        Kostka kostka = new Kostka(10);
        Bojovnik zalgoren = new Bojovnik("Zalgoren", 100, 20, 10, kostka);
        Bojovnik gandalf = new Mag("Gandalf", 60, 15, 12, kostka, 30, 45);
        Arena arena = new Arena(zalgoren, gandalf, kostka);
        // zápas
        arena.zapas();

{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}

```


Hotovo ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

```
Konzolová aplikace
-------------- Aréna --------------

Bojovníci:

Zalgoren
Život: [##########          ]

Gandalf
Život: [#####               ]
Mana: [#############       ]

Zalgoren útočí s úderem za 28 hp
```


Aplikaci ještě můžeme dodat hezčí vzhled, vložil jsem ASCIIart nadpis _Aréna_, který jsem vytvořil [ASCII generátorem](http://patorjk.com/software/taag). Metodu k vykreslení ukazatele jsem upravil tak, aby vykreslovala plný obdélník místo `#` (ten napíšete pomocí kláves Alt + 219). Výsledek může vypadat takto:

```
Konzolová aplikace
   __    ____  ____  _  _    __
  /__\  (  _ \( ___)( \( )  /__\
 /(__)\  )   / )__)  )  (  /(__)\
(__)(__)(_)\_)(____)(_)\_)(__)(__)

Bojovníci:

Zalgoren
Život: ████

Gandalf
Život: ███████
Mana:  █

Gandalf použil magii za 48 hp
Zalgoren utrpěl poškození 33 hp
```


Kód máte v příloze. Pokud jste něčemu nerozuměli, zkuste si článek přečíst vícekrát nebo pomaleji, jsou to důležité praktiky.

V následujícím cvičení, [Řešené úlohy k 5.-8. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-dedicnost-polymorfismus), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.


# Řešené úlohy k 5.-8. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 5.-8. lekci OOP v Javě

V minulé lekci, [Aréna s mágem (dědičnost a polymorfismus)](https://www.itnetwork.cz/java/oop/java-tutorial-dedicnost-a-polymorfismus-arena-s-magem), jsme si v praxi vyzkoušeli dědičnost a polymorfismus.

Následující tři cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulých tutoriálů a pokuste se na to přijít.

Jednoduchý příklad
------------------

![Angry bird - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/csp/cviceni/natural-angrybird.jpg)

_Fotografie: Mohamed Raoof.p.m / Rex features_

V aplikaci vytvořte třídu, která bude reprezentovat ptáka. Každý pták bude mít:

  

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

> Řešené programátorské úlohy v Javě na téma dědičnost a polymorfismus. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/6133_thumb.png?v=1499101225)](https://www.itnetwork.cz/portfolio/6133)

Autor se věnuje všem jazykům okolo JVM. Rád pomáhá lidem, kteří se zajímají o programování. Věří, že všichni mají šanci se naučit programovat, jen je potřeba prorazit tu bariéru, který se říká lenost.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 9 - Statika
V předešlém cvičení, [Řešené úlohy k 5.-8. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-dedicnost-polymorfismus), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Dnes se v tutoriálu budeme věnovat pojmu **statika**. Až doposud jsme byli zvyklí, že data (stav) nese instance. Atributy, které jsme definovali, tedy patřily instanci a byly pro každou instanci jedinečné. **OOP však umožňuje definovat atributy a metody na samotné třídě**. Těmto prvkům říkáme **statické** (někdy třídní) a jsou **nezávislé na instanci**.

![Pozor na statiku - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/56e9e68271475_image_0_thumb.png)**POZOR!** Dnešní lekce vám ukáže statiku, tedy postupy, které v podstatě narušují objektový model. OOP je obsahuje jen pro speciální případy a obecně platí, že **vše jde napsat bez statiky**. **Vždy musíme pečlivě zvážit, zda statiku opravdu nutně potřebujeme**. Obecně bych doporučoval statiku **vůbec nepoužívat**, pokud si nejste naprosto jisti, co děláte. Podobně, jako globální proměnné (které Java naštěstí nemá) je statika v objektovém programování něco, co umožňuje psát špatný kód a porušovat dobré praktiky. Dnes si ji tedy spíše vysvětlíme, abyste pochopili určité metody a třídy v Javě, které ji používají. Znalosti použijte s rozvahou, na světe bude méně zla.

Statické (třídní) atributy
--------------------------

Jako statické můžeme označit různé prvky. Začněme u atributů. Jak jsem se již v úvodu zmínil, statické prvky patří třídě, nikoli instanci. Data v nich uložená tedy můžeme číst bez ohledu na to, zda nějaká instance existuje. V podstatě můžeme říci, že statické atributy jsou společné pro všechny instance třídy, ale není to přesné, protože s instancemi doopravdy vůbec nesouvisí. Založme si nový projekt (název např. `Statika`) a udělejme si jednoduchou třídu `Uzivatel`:

```
class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;

    public Uzivatel(String jmeno, String heslo) {
        this.jmeno = jmeno;
        this.heslo = heslo;
        prihlaseny = false;
    }

    public boolean prihlasSe(String zadaneHeslo) {
        if (zadaneHeslo.equals(heslo)) { 
            prihlaseny = true;
            return true;
        }
        return false; 
    }
}
```


Třída je poměrně jednoduchá, reprezentuje uživatele nějakého systému. Každá instance uživatele má své jméno, heslo a také se o ni ví, zda je přihlášená či nikoli. Aby se uživatel přihlásil, zavolá se na něm metoda `prihlasSe()` a v jejím parametru heslo, které člověk za klávesnicí zadal. Metoda ověří, zda se jedná opravdu o tohoto uživatele a pokusí se ho přihlásit. Vrátí hodnotu `true` nebo `false` podle toho, zda přihlášení proběhlo úspěšně. V reálu by se heslo ještě tzv. [hashovalo](https://www.itnetwork.cz/bezpecnost/hesla-a-biometricka-ochrana#_hash), ale to zde opomineme.

Když se uživatel registruje, systém mu napíše, jakou minimální délku musí jeho heslo mít. Toto číslo bychom měli mít někde uložené. **Ve chvíli, kdy uživatele registrujeme, tak ještě nemáme k dispozici jeho instanci**. Objekt není vytvořený a vytvoří se až po vyplnění formuláře. Nemůžeme tedy v třídě `Uzivatel` k tomuto účelu použít veřejný atribut `minimalniDelkaHesla`. Samozřejmě by bylo velmi přínosné, kdybychom měli údaj o minimální délce hesla uložený ve třídě `Uzivatel`, protože k němu logicky patří. Údaj uložíme do **statického atributu** pomocí modifikátoru `static`:

```
class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;

    public static int minimalniDelkaHesla = 6;

    

}
```


Nyní se přesuňme do `Statika.java` a zkusme si atribut vypsat. K atributu nyní přistoupíme přímo přes třídu:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        System.out.println(Uzivatel.minimalniDelkaHesla);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;

    public static int minimalniDelkaHesla = 6;

    public Uzivatel(String jmeno, String heslo) {
        this.jmeno = jmeno;
        this.heslo = heslo;
         prihlaseny = false;
    }

    public boolean prihlasSe(String zadaneHeslo) {
        if (zadaneHeslo.equals(heslo)) { // kontrola hesla
            prihlaseny = true;
            return true;
        }
        return false; // hesla nesouhlasí
    }
}

{/JAVA_OOP}

```


Vidíme, že atribut opravdu náleží třídě. Můžeme se na něj ptát v různých místech programu bez toho, aniž bychom měli uživatele vytvořeného.

Jako další praktické využití statických atributů se nabízí číslování uživatelů. Budeme chtít, aby měl každý uživatel přidělené unikátní identifikační číslo. Bez znalosti statiky bychom si museli hlídat zvenčí každé vytvoření uživatele a počítat je. My si však můžeme vytvořit přímo na třídě `Uzivatel` privátní statický atribut `dalsiId`, kde bude vždy připraveno číslo pro dalšího uživatele. První uživatel bude mít `id` na hodnotě 1, druhý `id` na hodnotě 2 a tak dále. Uživateli tedy přibude nový atribut `id`, který se v konstruktoru nastaví podle hodnoty `dalsiId`. Pojďme si to vyzkoušet:

```
class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;
    private int id;
    private static int minimalniDelkaHesla = 6;
    private static int dalsiId = 1;

    public Uzivatel(String jmeno, String heslo) {
        this.jmeno = jmeno;
        this.heslo = heslo;
        prihlaseny = false;
        id = dalsiId;
        dalsiId++;
    }

    
}
```


Třída si sama ukládá, jaké bude id další její instance. Toto `id` přiřadíme nové instanci v konstruktoru a zvýšíme ho o `1`, aby bylo připraveno pro další instanci. Statické však nemusí být jen atributy, možnosti jsou mnohem větší.

Statické metody
---------------

Statické metody se volají na třídě. Jedná se zejména o **pomocné metody**, které potřebujeme často používat a nevyplatí se nám tvořit instanci. Mnoho takovýchto metod již známe, jen jsme si to neuvědomovali. Nikdy jsme např. netvořili instanci třídy `System` k tomu, abychom do ní mohli zapisovat. Metoda `println()` na atributu `out` na třídě `System` je statická, stejně jako atribut samotný. Třída `System` je jen jeden a bylo by zbytečné tvořit si z něj instanci, když jej chceme používat. Podobně je tomu např. u metody `round()` na třídě `Math`. Když chceme zaokrouhlit číslo, nebudeme si k tomu přeci tvořit objekt. Jedná se tedy většinou o pomocné metody, kde by instanciace zbytečně zdržovala nebo nedávala smysl.

Ukažme si opět reálný příklad. Při registraci uživatele potřebujeme znát minimální délku hesla ještě před jeho vytvořením. Bylo by také dobré, kdybychom mohli před jeho vytvořením i heslo zkontrolovat, zda má správnou délku, neobsahuje diakritiku, je v něm alespoň jedno číslo a podobně. Za tímto účelem si vytvoříme **pomocnou statickou metodu** `zvalidujHeslo()`:

```
public static boolean zvalidujHeslo(String heslo) {
    
    return heslo.length() >= minimalniDelkaHesla;
}
```


Opět si zkusíme, že metodu můžeme na třídě `Uzivatel` zavolat:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        System.out.println(Uzivatel.zvalidujHeslo("heslojeveslo"));
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;
    private int id;
    private static int minimalniDelkaHesla = 6;
    private static int dalsiId = 1;

    public Uzivatel(String jmeno, String heslo) {
        this.jmeno = jmeno;
        this.heslo = heslo;
        prihlaseny = false;
        id = dalsiId;
        dalsiId++;
    }

    public boolean prihlasSe(String zadaneHeslo) {
        if (zadaneHeslo.equals(heslo)) { // kontrola hesla
            prihlaseny = true;
            return true;
        }
        return false; // hesla nesouhlasí
    }

    public static boolean zvalidujHeslo(String heslo) {
        // podrobnou logiku validace hesla vynecháme
        return heslo.length() >= minimalniDelkaHesla;
    }
}

{/JAVA_OOP}

```


**Pozor! Díky tomu, že metoda `zvalidujHeslo()` náleží třídě, nemůžeme v ní přistupovat k žádným instančním atributům.** Tyto atributy totiž neexistují v kontextu třídy, ale instance. Ptát se na atribut `jmeno` by v naší metodě nemělo smysl! Můžete si zkusit, že to opravdu nejde.

Stejné funkčnosti při validaci hesla samozřejmě můžeme dosáhnout i bez znalosti statiky. Vytvořili bychom si nějakou třídu, např. `ValidatorUzivatelu` a do ní napsali tyto metody. Museli bychom poté vytvořit její instanci, abychom metody mohli volat. Bylo by to trochu matoucí, protože logika uživatele by byla zbytečně rozdělena do dvou tříd, když může být za pomoci statiky pohromadě.

U příkladu se statickým atributem `minimalniDelkaHesla` jsme porušili zapouzdření, neměli bychom dovolovat atribut nekontrolovaně měnit. Můžeme ho samozřejmě nastavit jako privátní a k jeho čtení vytvořit statickou metodu. To ostatně dobře známe z minulých dílů. Takovou metodu doplníme i pro navrácení atributu `id`:

```
public static int vratMinimalniDelkuHesla() {
    return minimalniDelkaHesla;
}

public int vratId() {
    return id;
}
```


A vyzkoušíme si ještě nakonec naše metody. Metoda `main()` bude vypadat takto:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Uzivatel tomas = new Uzivatel("Tomáš Marný", "heslojeveslo");
        System.out.printf("ID prvního uživatele: %s%n", tomas.vratId());
        Uzivatel oli = new Uzivatel("Olí Znusinudle", "csfd1fg");
        System.out.printf("ID druhého uživatele: %s%n", oli.vratId());
        System.out.printf("Minimální délka hesla uživatele je: %s%n", Uzivatel.vratMinimalniDelkuHesla());
        System.out.printf("Validnost hesla \"heslo\" je: %s", Uzivatel.zvalidujHeslo("heslo"));
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Uzivatel {
    private String jmeno;
    private String heslo;
    private boolean prihlaseny;
    private int id;
    private static int minimalniDelkaHesla = 6;
    private static int dalsiId = 1;

    public Uzivatel(String jmeno, String heslo) {
        this.jmeno = jmeno;
        this.heslo = heslo;
        prihlaseny = false;
        id = dalsiId;
        dalsiId++;
    }

    public boolean prihlasSe(String zadaneHeslo) {
        if (zadaneHeslo.equals(heslo)) { // kontrola hesla
            prihlaseny = true;
            return true;
        }
        return false; // hesla nesouhlasí
    }

    public static boolean zvalidujHeslo(String heslo) {
        // podrobnou logiku validace hesla vynecháme
        return heslo.length() >= minimalniDelkaHesla;
    }

    public static int vratMinimalniDelkuHesla() {
        return minimalniDelkaHesla;
    }

    public int vratId() {
        return id;
    }
}

{/JAVA_OOP}

```


A výstup bude:

```
Konzolová aplikace
ID prvního uživatele: 1
ID druhého uživatele: 2
Minimální délka hesla uživatele je: 6
Validnost hesla "heslo" je: false
```


Všimněte si, že i metoda `main()` je statická, program totiž máme jen jeden. Z metody `main()` můžeme volat také jen statické metody v hlavní třídě našeho programu. Umíte tedy přidávat metody přímo do výchozí třídy s metodou `main()`, což však úplně nemá smysl, neboť by se veškerá logika měla odehrávat v zapouzdřených objektech.

Privátní konstruktor
--------------------

Pokud se nám vyskytne třída, která **obsahuje jen pomocné metody** nebo **nemá smysl od ni tvořit instance** (např. nikdy nebudeme mít 2 konzole), hovoříme o ni někdy jako o statické třídě. Java přímo neumožňuje přímo označit třídu jako statickou, ale tvoření její instance zakážeme pomocí implementace **privátního konstruktoru**. Takovouto třídu poté **nelze instanciovat** (vytvořit její instanci). Statická třída, se kterou jsme se setkali, je např. již zmíněná třída `Math`. Zkusme si vytvořit instanci statické třídy `Math`:

```
Math matika = new Math();
```


Dostaneme vyhubováno, jelikož má instanciaci zakázanou. Statická třída má všechny prvky statické a tedy nedává smysl od ni tvořit instanci, ta by nic neobsahovala.

Některé jazyky podporují i **statický konstruktor**, který se potom zavolá ve chvíli, kdy je třída zaregistrována. Java statické konstruktory nepodporuje. Pokud některé statické atributy na třídě potřebují inicializaci, můžeme pro ně vytvořit statickou inicializační metodu, kterou na třídě poté někdy za začátku programu zavoláme.

### Statický registr

Pojďme si takovou jednoduchou statickou třídu vytvořit. Mohlo by se jednat o třídu, která obsahuje jen pomocné metody a atributy (jako třída `Math`). Já jsem se však rozhodl vytvořit tzv. statický registr. Ukážeme si, jak je možné předávat důležitá data mezi třídami, aniž bychom museli mít instanci.

Mějme aplikaci, řekněme nějakou větší a rozsáhlejší, např. diář. Aplikace bude obsahovat přepínání jazyka jejího rozhraní, barevného schématu a zda ji chceme spouštět při spuštění operačního systému. Bude mít tedy nějaká nastavení, ke kterým se bude přistupovat z různých míst programu. Bez znalosti statiky bychom museli všem objektům (kalendáři, úlohám, poznámkám...) předat v konstruktoru v jakém jazyce pracují, případně jim dodat tímto způsobem další nastavení, jako první den v týdnu (neděle/pondělí), jaké je barevné schéma a podobně.

Jednou z možností, jak toto řešit, je použít k uložení těchto nastavení statickou třídu. Bude tedy přístupná ve všech místech programu a to i bez vytvoření instance. Obsahovat bude všechna potřebná nastavení, která si z ní budou objekty libovolně brát. Mohla by vypadat např. nějak takto:

```
class Nastaveni {
    private static String jazyk = "CZ";
    private static String barevneSchema = "cervene";
    private static boolean spustitPoStartu = true;

    private Nastaveni() {
    }

    public static String vratJazyk() {
        return jazyk;
    }

    public static String vratBarevneSchema() {
        return barevneSchema;
    }

    public static boolean vratSpustitPoStartu() {
        return spustitPoStartu;
    }
}
```


Všechny atributy i metody musí obsahovat modifikátor `static`, všimněte si privátního konstruktoru. Záměrně jsem do třídy nedával veřejné atributy, ale vytvořil metody, aby se hodnoty nedaly měnit.

Zkusme si třídu nyní použít, i když program diář nemáme. Vytvoříme si jen na ukázku třídu Kalendar a zkusíme si, že v ní máme opravdu bez problému přístup k nastavení. Vložíme do ni metodu, která vrátí všechna nastavení:

```
class Kalendar {

    public String vratNastaveni() {
        String nastaveni = "";
        nastaveni += String.format("Jazyk: %s%n", Nastaveni.vratJazyk());
        nastaveni += String.format("Barevné schéma: %s%n", Nastaveni.vratBarevneSchema());
        nastaveni += String.format("Spustit po startu: %s%n", Nastaveni.vratSpustitPoStartu());
        return nastaveni;
    }
}
```


Následně vše vypíšeme do konzole:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Kalendar kalendar = new Kalendar();
        System.out.println(kalendar.vratNastaveni());
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Nastaveni {
    private static String jazyk = "CZ";
    private static String barevneSchema = "cervene";
    private static boolean spustitPoStartu = true;

    private Nastaveni() {
    }

    public static String vratJazyk() {
        return jazyk;
    }

    public static String vratBarevneSchema() {
        return barevneSchema;
    }

    public static boolean vratSpustitPoStartu() {
        return spustitPoStartu;
    }

}
{/JAVA_OOP}
{JAVA_OOP}
class Kalendar {

    public String vratNastaveni() {
        String nastaveni = "";
        nastaveni += String.format("Jazyk: %s%n", Nastaveni.vratJazyk());
        nastaveni += String.format("Barevné schéma: %s%n", Nastaveni.vratBarevneSchema());
        nastaveni += String.format("Spustit po startu: %s%n", Nastaveni.vratSpustitPoStartu());
        return nastaveni;
    }
}

{/JAVA_OOP}

```


```
Konzolová aplikace
Jazyk: CZ
Barevné schéma: cervene
Spustit po startu: true
```


Vidíme, že instance kalendáře má opravdu bez problému přístup ke všem nastavením programu.

Opět pozor, tento kód lze nesprávně použít pro předávání nezapouzdřených dat a používá se jen ve specifických situacích. Většina předávání dat do instance probíhá pomocí parametru v konstruktoru, nikoli přes statiku.

Statika se velmi často vyskytuje v návrhových vzorech, o kterých jsme se zde již bavili. Jsou to postupy, které dovádí objektově orientované programování k dokonalosti a o kterých se tu jistě ještě zmíníme. Pro dnešek je toho však již dost ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png).

V následujícím cvičení, [Řešené úlohy k 9. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-programovani-oop-statika), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 9. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 9. lekci OOP v Javě

V minulé lekci, [Statika](https://www.itnetwork.cz/java/oop/java-tutorial-statika-staticke-atributy-metody-tridy-konstruktor), jsme si vysvětlili statiku.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Naprogramujte aplikaci pro převod mezi

  

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

> Řešené programátorské úlohy v Javě na téma statika, statické atributy a metody. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.


# Lekce 10 - Gettery a settery v Javě
V předešlém cvičení, [Řešené úlohy k 9. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-programovani-oop-statika), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

Dnes se v tutoriálu podíváme na tzv. gettery a settery.

Gettery a settery
-----------------

Velmi často se nám stává, že chceme mít kontrolu nad změnami nějakého atributu objektu zvenčí. Budeme chtít atribut nastavit jako _read-only_ (pouze pro čtení) nebo reagovat na jeho změny. Založme si nový projekt s názvem např. `GetSet` a vytvořme následující třídu `Student`, která bude reprezentovat studenta v nějakém informačním systému:

```
class Student {
    public String jmeno;
    public boolean muz;
    public int vek;
    public boolean plnolety;

    public Student(String jmeno, boolean muz, int vek) {
        this.jmeno = jmeno;
        this.muz = muz;
        this.vek = vek;
        plnolety = true;
        if (vek < 18) {
            plnolety = false;
        }
    }

    @Override
    public String toString() {
        String jsemPlnolety = "jsem";
        if (!plnolety) {
            jsemPlnolety = "nejsem";
        }
        String pohlavi = "muž";
        if (!muz) {
            pohlavi = "žena";
        }
        return String.format("Jsem %s, %s. Je mi %d let a %s plnoletý.", jmeno, pohlavi, vek, jsemPlnolety);
    }
}
```

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B39721%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522qDHkhvgVoc%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)


        }
    }

    @Override
    public String toString() {
        String jsemPlnolety = "jsem";
        if (!plnolety) {
            jsemPlnolety = "nejsem";
        }
        String pohlavi = "muž";
        if (!muz) {
            pohlavi = "žena";
        }
        return String.format("Jsem %s, %s. Je mi %d let a %s plnoletý.", jmeno, pohlavi, vek, jsemPlnolety);
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
Jsem Pavel Hora, muž. Je mi 20 let a jsem plnoletý.
```


Vše vypadá hezky, ale atributy jsou přístupné jak ke čtení, tak k zápisu. Objekt tedy můžeme rozbít například takto (hovoříme o nekonzistentním vnitřním stavu):

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Student student = new Student("Pavel Hora", true, 20);
        student.vek = 15;
        student.muz = true;
        System.out.println(student);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Student {
    public String jmeno;
    public boolean muz;
    public int vek;
    public boolean plnolety;

    public Student(String jmeno, boolean muz, int vek) {
        this.jmeno = jmeno;
        this.muz = muz;
        this.vek = vek;
        plnolety = true;
        if (vek < 18) {
            plnolety = false;
        }
    }

    @Override
    public String toString() {
        String jsemPlnolety = "jsem";
        if (!plnolety) {
            jsemPlnolety = "nejsem";
        }
        String pohlavi = "muž";
        if (!muz) {
            pohlavi = "žena";
        }
        return String.format("Jsem %s, %s. Je mi %d let a %s plnoletý.", jmeno, pohlavi, vek, jsemPlnolety);
    }
}

{/JAVA_OOP}

```


Výstup:

```
Konzolová aplikace
Jsem Pavel Hora, muž. Je mi 15 let a jsem plnoletý.
```


Určitě musíme ošetřit, aby se plnoletost obnovila při změně věku. Když se zamyslíme nad ostatními atributy, není nejmenší důvod, abychom taktéž umožňovali modifikovat pohlaví. Bylo by však zároveň vhodné je vystavit ke čtení, nemůžeme je tedy pouze nastavit jako `private`. V dřívějších dílech seriálu jsme k tomuto účelu používali metody, které sloužily ke čtení privátních atributů. Jejich název jsme volili jako `vratVek()` a pro nastavení atributu například `nastavVek()`. V Javě se všechny atributy, se kterými se má pracovat zvenčí, označují jako privátní a pro přístup k nim se definují právě podobné metody. K jejich pojmenování se ustálilo `getNazevAtributu()` pro čtení a `setNazevAtributu()` pro zápis. Pokud je atribut typu `boolean`, jmenuje se getter `isNazevAtributu()`. Třída by nově vypadala např. takto:

```
class Student {
    private String jmeno;
    private boolean muz;
    private int vek;
    private boolean plnolety;

    public Student(String jmeno, boolean pohlavi, int vek) {
        this.jmeno = jmeno;
        this.muz = pohlavi;
        setVek(vek);
    }

    public String getJmeno() {
        return jmeno;
    }

    public void setJmeno(String jmeno) {
        this.jmeno = jmeno;
    }

    public boolean isMuz() {
        return muz;
    }

    public int getVek() {
        return vek;
    }

    public void setVek(int vek) {
        this.vek = vek;
        
        plnolety = vek >= 18;
    }

    public boolean isPlnolety() {
        return plnolety;
    }

    @Override
    public String toString() {
        String jsemPlnolety = "jsem";
        if (!plnolety) {
            jsemPlnolety = "nejsem";
        }
        String pohlavi = "muž";
        if (!muz) {
            pohlavi = "žena";
        }
        return String.format("Jsem %s, %s. Je mi %d let a %s plnoletý.", jmeno, pohlavi, vek, jsemPlnolety);
    }
}
```


Metody, co hodnoty jen vracejí, jsou velmi jednoduché. Nastavení věku má již nějakou vnitřní logiku, při jeho změně musíme totiž přehodnotit atribut `plnolety`. Zajistili jsme, že se do proměnných nedá zapisovat jinak, než my chceme. Máme tedy pod kontrolou všechny změny atributů a dokážeme na ně reagovat. Nemůže se stát, že by nám někdo vnitřní stav nekontrolovaně měnil a rozbil. Všimněte si i změny v konstruktoru, kde se nastavuje věk metodou `setVek()`.

Metodám k navrácení hodnoty se říká **gettery** a metodám pro zápis **settery**. Pro editaci ostatních atributů bychom udělali jednu metodu `editujStudenta()`, která by byla podobná konstruktoru.

Otázkou je, jaká je nyní výhoda toho, že je atribut `jmeno` privátní, když do něj jde zapisovat a lze z něj i číst. Vždyť máme v kódu zbytečně 2 metody, které tam zabírají místo a ještě je to pomalé?

Opravdu jsme to napsali správně, nebo alespoň tak, jak se to běžně dělá. Java před kompilací provádí četné optimalizace a pokud jsou metody tak jednoduché, že pouze vrací hodnotu nebo ji nastavují, metoda se zkompiluje jako přímý přístup do paměti. Jsou tedy stejně rychlé, jako kdybychom pracovali s veřejným atributem (za předpokladu, že setter nebo getter nemá nějakou další logiku).

IDE dokáže gettery a settery automaticky generovat, nemusíme je tedy otrocky opisovat. Stačí na privátní proměnnou kliknout pravým tlačítkem a zvolit položku _Refactor_ -> _Encapsulate fields_:

*   ![Automatické generování getterů a setterů v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_generovani_getteru_setteru.png)
    
    V dalším dialogu si zaškrtneme, ke kterým atributům chceme vygenerovat gettery a settery. My nebudeme chtít zpřístupnit pro zápis atributy `plnolety` a `muz`. Atribut `plnolety` půjde změnit jen změněním věku studenta. Pohlaví nedává smysl měnit vůbec (pokud by to bylo opravdu někdy potřeba, byla by k tomu nějaká speciální metoda, aby se vyloučila změna chybou v kódu). Dialog potvrdíme:
    
    ![Automatické generování getterů a setterů v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_encapsulate_field.png)
    
    **Settery** pro atributy `plnolety` a `muz` ze třídy tedy odstraníme.
    
*   ![Automatické generování getterů a setterů v IDE NetBeans - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/netbeans_generovani_getteru_setteru.png)
    
    V dalším dialogu si zaškrtneme, ke kterým atributům chceme vygenerovat gettery a ke kterým settery. My nebudeme chtít zpřístupnit pro zápis atributy `plnolety` a `muz`. Atribut `plnolety` půjde změnit jen tak, že změníme věk studenta. Pohlaví nedává smysl měnit vůbec (pokud by to bylo opravdu někdy potřeba, byla by k tomu nějaká speciální metoda, aby se vyloučila změna chybou v kódu). Dialog potvrdíme:
    
    ![Automatické generování getterů a setterů v NetBeans IDE - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/netbeans_encapsulate_field.png)
    

Optimalizace před kompilací odstranila rychlostní problém, který by jinak zbytečné volání metod způsobovalo. I zbytečné psaní metod jsme vykompenzovali jejich automatickým generováním. Otázkou zůstává, v čem je psaní metod oproti atributům výhodnější.

Hlavním důvodem je určitá standardizace. Nemusíme přemýšlet nad tím, jestli je daná vlastnost objektu řešena přes getter nebo atribut, na instanci jednoduše vždy voláme metodu začínající slovem `get` (případně `is`) pokud chceme vlastnost instance číst, případně metodu začínající `set`, pokud ji chceme změnit.

Další výhodou je, že když se v budoucnu rozhodneme, že nějaký atribut chceme udělat _read-only_ (pouze pro čtení), jednoduše smažeme setter. Nemusíme vytvářet getter a měnit viditelnost atributu, což by změnilo rozhraní třídy a rozbilo existující kód, který by ji používal.

Gettery a settery tedy budeme odteď používat **u všech atributů, které mají být zvenčí přístupné**. V našich třídách se téměř nebudou vyskytovat atributy s viditelností `public`.

Zkusme si nyní ještě spustit kód, který předtím rozbil interní stav objektu:

```
{JAVA_OOP}
{JAVA_MAIN_BLOCK}
        Student student = new Student("Pavel Hora", true, 20);
        student.setVek(15);
        // student.setMuz(false); // Tento řádek musíme zakomentovat, jelikož se pohlaví již nedá zvenčí změnit
        System.out.println(student);
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}
{JAVA_OOP}

class Student {
    private String jmeno;
    private boolean muz;
    private int vek;
    private boolean plnolety;

    public Student(String jmeno, boolean pohlavi, int vek) {
        this.jmeno = jmeno;
        this.muz = pohlavi;
        setVek(vek);
    }

    public String getJmeno() {
        return jmeno;
    }

    public void setJmeno(String jmeno) {
        this.jmeno = jmeno;
    }

    public boolean isMuz() {
        return muz;
    }

    public int getVek() {
        return vek;
    }

    public void setVek(int vek) {
        this.vek = vek;
        // přehodnocení plnoletosti
        plnolety = vek >= 18;
    }

    public boolean isPlnolety() {
        return plnolety;
    }

    @Override
    public String toString() {
        String jsemPlnolety = "jsem";
        if (!plnolety) {
            jsemPlnolety = "nejsem";
        }
        String pohlavi = "muž";
        if (!muz) {
            pohlavi = "žena";
        }
        return String.format("Jsem %s, %s. Je mi %d let a %s plnoletý.", jmeno, pohlavi, vek, jsemPlnolety);
    }
}

{/JAVA_OOP}

```


Výstup je již v pořádku:

```
Konzolová aplikace
Jsem Pavel Hora, muž. Je mi 15 let a nejsem plnoletý.
```


V následujícím kvízu, [Kvíz - Dědičnost, statika, gettery a settery v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-dedicnost-statika-gettery-a-settery-v-jave-oop), si vyzkoušíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Přihlas se do svého profilu
*   ![CZ](https://www.itnetwork.cz/images/img/languages/cs.svg)
    *   [![SK](https://www.itnetwork.cz/images/img/languages/sk.svg)](https://www.itnetwork.sk/prihlasenie)
    *   [![US](https://www.itnetwork.cz/images/img/languages/en.svg)](https://www.ict.social/login)

Přihlas se do svého profilu

Ve svém účtu můžeš absolvovat testy, získat certikáty nebo pokládat dotazy.

### Přes Facebook

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B39721%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522qDHkhvgVoc%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Lekce 11 - ArrayList v Javě
V předchozím kvízu, [Kvíz - Dědičnost, statika, gettery a settery v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-dedicnost-statika-gettery-a-settery-v-jave-oop), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Dnes si v tutoriálu ukážeme jednu kolekci, která je chytřejší, než pole. Umožňuje totiž prvky libovolně přidávat a mazat.

Pojem kolekce jsme tu již zmínili. Je to struktura, do které můžeme ukládat více objektů. Kolekcí je v Javě velké množství, jsou uzpůsobeny na různé účely a můžeme s nimi zacházet různými způsoby. Proto jim je věnována celá sekce. Dosud známe pouze kolekci pole. V průběhu seriálu však budeme potřebovat něco chytřejšího, kam budeme moci jednoduše za běhu programu **přidávat a mazat záznamy**. Jistě by se nám hodilo si v paměti spravovat databázi nějakých objektů. Víme, že pole má konstantní velikost, což je daň za jeho vysokou rychlost. Nyní si představíme třídu `ArrayList`, kterou **můžeme již podle názvu chápat jako nadstavbu pole**.

ArrayList
---------

`ArrayList` je tzv. **generická kolekce**. Pojem genericita si plně vysvětlíme až u kolekcí, nyní nám bude stačit vědět, že při deklaraci kolekce `ArrayList` specifikujeme datový typ objektů, které v něm budou uloženy. Začněme jednoduše a udělejme si `ArrayList` čísel, která budeme náhodně losovat.

### Losování

Program se nás vždy zeptá, zda chceme losovat další číslo a to se přidá do kolekce `ArrayList`. Pokud již nebudeme chtít losovat, program vypíše losovaná čísla, seřazená od nejmenšího po největší. Založme si nový projekt `Losovani` a vytvořme si třídu `Losovac`. Třída bude obsahovat kolekci `ArrayList` typu `Integer`, kde budou čísla uložena.

Narážíme na třídu `Integer`, která slouží k uložení celých čísel a v podstatě obaluje datový typ `int`. Do _ArrayListu_ se totiž dají vkládat pouze objekty, tedy proměnné referenčního typu. Pro tyto účely existuje typ `Integer`. Ke každému primitivnímu typu v Javě existuje jeho referenční "obal", brzy si je uvedeme. Kolekce `ArrayList` bude privátní a bude sloužit pouze jako interní úložiště dané třídy, aby se na něj zvenku nedalo přistupovat.

Kolekci `ArrayList` deklarujeme takto:

```
ArrayList<Integer> cisla;
```


**Datový typ píšeme u generických kolekcí do špičatých závorek**. Kolekce `ArrayList` je samozřejmě objekt, jako každý jiný. Stejně jako u pole a jiných objektů, i zde proměnnou před použitím inicializujeme:

```
ArrayList<Integer> cisla = new ArrayList<Integer>();
```


Všimněte si závorek, které značí konstruktor. Takovýto list tedy umístíme do naší třídy, spolu s náhodným generátorem `Random`. Pro práci s třídou `ArrayList` je třeba přidat import `java.util.ArrayList`. V konstruktoru atributy inicializujeme:

```
import java.util.ArrayList;
import java.util.Random;

public class Losovac {
    private ArrayList<Integer> cisla;
    private Random random;

    public Losovac() {
        random = new Random();
        cisla = new ArrayList<Integer>();
    }
}
```


Dále přidáme metody `losuj()` a `vypis()`, kde `losuj()` přidá do _ArrayListu_ nové náhodné číslo a také ho vrátí jako návratovou hodnotu. Metoda `vypis()` vrátí textový řetězec pro vypsání. Ten bude obsahovat čísla z kolekce `cisla`, seřazená a oddělená mezerou.

Losování náhodného čísla již známe z dílu o hrací kostce, zde budeme vyhazovat čísla od `1` do `100`. Číslo do _ArrayListu_ přidáme pomocí metody `add()`:

```
public int losuj() {
    Integer cislo = random.nextInt(100) + 1;
    cisla.add(cislo);
    return cislo;
}
```


Velmi jednoduché, že? Kolekce `ArrayList` je interně poměrně složitá a zatím se nebudeme zabývat tím, co se uvnitř děje. To je ostatně účel Javy, nabízet kvalitní a sofistikované komponenty, které se jednoduše používají.

Výpis čísel bude ještě snazší. K setřídění kolekce `ArrayList` použijeme metodu `sort()` ze třídy `Collections`, která list setřídí. Bude tedy potřeba importovat `java.util.Collections`. Metoda nic nevrací, pouze `ArrayList` setřídí uvnitř:

```
public String vypis() {
    String vypis = "";
    Collections.sort(cisla);
    for (int cislo : cisla) {
        vypis += cislo + " ";
    }
    return vypis;
}
```


Hotovo.

Přesuňme se do metody `main()` a pomocí cyklu `while` umožněme uživateli ovládat objekt. Podobný program byla kalkulačka z prvních lekcích, kde jsme se v cyklu ptali, zda si uživatel přeje opakovat výpočet. Zde budeme postupovat totožně.

Ovládání bude pomocí možností `1`, `2`, `3` (losuj, vypiš, konec). Budeme je načítat pomocí metody `scanner.nextLine()` jako `String`:

```
Scanner scanner = new Scanner(System.in);
Losovac losovac = new Losovac();
System.out.println("Vítejte v programu losování.");
String volba = "0";

while (!volba.equals("3")) {
    
    System.out.println("1 - Losovat další číslo");
    System.out.println("2 - Vypsat čísla");
    System.out.println("3 - Konec");
    volba = scanner.nextLine();
    System.out.println();
    
    switch (volba) {
        case "1":
            System.out.printf("Padlo číslo: %s%n", losovac.losuj());
            break;
        case "2":
            System.out.printf("Padla čísla: %s%n", losovac.vypis());
            break;
        case "3":
            System.out.println("Děkuji za použití programu");
            break;
        default:
            System.out.println("Neplatná volba, zadejte prosím znovu.");
            break;
    }
}
```


Nezapomeneme na import třídy `Scanner`. IDE většinou toto zvládne dělat za nás ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

*   V IntelliJ stačí například stisknutí klávesy Tab při psaní třídy `Scanner`:
    
    ![Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/scanner_import.gif)
    
*   V NetBeans stačí kliknout pravým tlačítkem na třídu `Scanner` a zvolit z nabídky _Fix imports_, případně použít klávesovou zkratku Ctrl + Shift + I.

Průběh programu je z kódu dobře viditelný, nejprve nastavíme volbu na nějakou výchozí hodnotu, aby cyklus poprvé proběhl. Poté volbu načteme z klávesnice. String zpracujeme pomocí konstrukce `switch` a provedeme příslušné akce. Pokud bylo zadáno něco jiného, pokryje to možnost `default`:

```
Konzolová aplikace
3 - Konec
1
Padlo číslo: 52
1 - Losovat další číslo
2 - Vypsat čísla
3 - Konec
1
Padlo číslo: 40
1 - Losovat další číslo
2 - Vypsat čísla
3 - Konec
1
Padlo číslo: 62
1 - Losovat další číslo
2 - Vypsat čísla
3 - Konec
2
Padla čísla: 2 6 7 7 8 8 9 9 10 10 12 14 17 19 19 21 23 25 25 27 27 27 28 28 28 30 30 31 32 33 33 35 35 36 36 36 37 38 38 40 41 42 42 42 44 45 45 45 45 45 48 51 52 52 53 55 56 56 56 57 58 58 59 61 62 66 68 68 71 72 73 73 74 76 82 83 84 84 85 87 88 88 89 90 90 91 93 94 98 98 98 99 100
1 - Losovat další číslo
2 - Vypsat čísla
3 - Konec
```


Vidíme, že můžeme stále přidávat nová a nová čísla. Máme mnohem větší možnosti než s polem. Zároveň však můžeme s _ArrayListem_ pracovat podobně, jako jsme pracovali s polem.

K přístupu můžeme využít metody `get()` a `set()`, ale pozor, prvek musí existovat. Zkusme si napsat následující kód:

```
ArrayList<String> polozky = new ArrayList<String>();
polozky.add("První");
System.out.println(polozky.get(0));
polozky.set(0, "První položka");
System.out.println(polozky.get(0));
polozky.set(1, "Druhá položka");  
```


Vytvoříme si list textových řetězců. Přidáme položku `První` a poté vypíšeme položku na indexu `0`. Vypíše se nám `První`. Můžeme na ni samozřejmě i takto zapisovat. S druhou položkou na pozici `1` však již nemůžeme pracovat, protože jsme ji do listu nepřidali. U pole jsme zadali velikost a on všechny "přihrádky" (proměnné pod indexy) založil. Nyní velikost nezadáváme a "přihrádky" si přidáváme sami.

Podívejme se na `ArrayList` podrobněji a vypišme si metody, které jsou pro nás nyní zajímavé.

Konstruktory
------------

Kromě prázdného _ArrayListu_ můžeme `List` vytvořit i jako kopii z jiného listu, pole nebo jiné kolekce. Stačí kolekci předat do konstruktoru:

```
{JAVA_OOP}

import java.util.ArrayList;
import java.util.Arrays;

{JAVA_MAIN_BLOCK}
        String[] retezce = {"První", "Druhá", "Třetí"};
        ArrayList<String> polozky = new ArrayList<String>(Arrays.asList(retezce));
        System.out.println(polozky.get(2));
{/JAVA_MAIN_BLOCK}
{/JAVA_OOP}

```


Kód výše vypíše `Třetí`:

```
Konzolová aplikace
Třetí
```


Prvky pole se do nového listu zkopírují. Stejně můžeme předat i jiný `ArrayList`.

Metody na třídě `ArrayList`
---------------------------

Ukážeme si pár důležitých metod, které můžeme volat na třídě `ArrayList`:

*   `size()` - Funguje jako metoda `length()` na poli, vrací počet prvků v kolekci.
*   `add(položka)` - Metodu `add()` jsme si již vyzkoušeli, jako parametr bere položku, kterou vloží do listu.
*   `addAll(kolekce)` - Přidá do listu více položek, např. z pole.
*   `clear()` - Odstraní všechny položky v listu.
*   `contains(položka)` - Vrací hodnoty `true` nebo `false` podle toho, zda `ArrayList` obsahuje předanou položku.
*   `indexOf(položka)` - Vrátí index prvního výskytu položky (jako u pole). Vrací hodnotu `-1` při neúspěchu.
*   `lastIndexOf(položka)` - Vrací index posledního výskytu položky v listu. Vrací hodnotu `-1` při neúspěchu.
*   `remove(index)` - Odstraní položku na daném indexu.
*   `removeAll(kolekce)` - Odstraní všechny položky v listu (podobná jako metoda `clear()`, ale pomalejší - dělá další kroky navíc)
*   `toArray()` - Zkopíruje položky z _ArrayListu_ do pole a to vrátí.

Další metody
------------

Další metody a pro práci s listem najdeme ve třídě `Collections`. Jako parametr berou danou kolekci:

*   `min()` - Vrátí nejmenší prvek z kolekce.
*   `max()` - Vrátí největší prvek z kolekce.
*   `reverse()` - Obrátí list tak, že je první položka poslední a naopak. Metoda nic nevrací, změny se provedou v zadaném listu.
*   `sort()` - Metodu `sort()` již také známe, setřídí položky v listu. Metoda opět nic nevrací.

Vidíme, že kolekce `ArrayList` toho umí mnohem více, než pole. Největší výhodou je přidávání a mazání prvků. Daň ve výkonu je zanedbatelná. V sekci s kolekcemi zjistíme, že kolekce `ArrayList` má ještě další metody, ale zatím na to nemáme zkušenosti.

Program pro ukládání losovaných čísel byl zajímavý, ale jistě se nám bude v budoucnu hodit ukládat spíše plnohodnotné objekty, než čísla.

V následujícím cvičení, [Řešené úlohy k 11. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-arraylist), si procvičíme nabyté zkušenosti z předchozích lekcí.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Řešené úlohy k 11. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 11. lekci OOP v Javě

V minulé lekci, [ArrayList v Javě](https://www.itnetwork.cz/java/oop/java-tutorial-list-pridavani-mazani-polozek), jsme si ukázali `ArrayList`.

Následující 3 cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Vytvořte program, kterému zadáváte stále dokola jednotlivá slova, dokud nezadáte slovo `konec`. Program následně

  

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

> Řešené programátorské úlohy v Javě na práci s kolekcí ArrayList a její využití v aplikacích. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/6133_thumb.png?v=1499101225)](https://www.itnetwork.cz/portfolio/6133)

Autor se věnuje všem jazykům okolo JVM. Rád pomáhá lidem, kteří se zajímají o programování. Věří, že všichni mají šanci se naučit programovat, jen je potřeba prorazit tu bariéru, který se říká lenost.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 12 - Datum a čas v Javě 8 - Vytváření a formátování
V předešlém cvičení, [Řešené úlohy k 11. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-oop-programovani-arraylist), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním tutoriálu se pustíme do dalších tříd, které Java poskytuje. Ukážeme si, jak se od Javy 8 pracuje s datem a časem.

Datum a čas v Javě
------------------

Implementace data a času se v Javě bohužel v minulosti hned několikrát radikálně změnila a jelikož předešlé pokusy o ni nebyly příliš uspokojiné, rozšířily se dokonce i externí knihovny, které ji nahrazují. Ačkoli vy budete používat tu nejnovější, kterou Java představila ve verzi 8, jistě se časem ve starších projektech setkáte s legacy třídami, které se k tomuto účelu využívaly v minulosti. Jsou to:

*   **Date** - Třída `Date` z balíčku `java.util` byla prvním pokusem o uložení data a času v Javě a nalézá se v ní již jen z důvodu zpětné kompatibility. Téměř všechny její metody jsou označené jako zastaralé a proto se s ní zde nebudeme vůbec zabývat. Pokud ji někde potkáte, bude vám muset stačit [oficiální dokumentace](https://docs.oracle.com/javase/7/docs/api/java/util/Date.html).
*   **Calendar** - Třída `Calendar` je první náhradou původní třídy `Date` a nově přinesla např. lokalizaci a pohodlnější manipulaci s vnitřní hodnotou, mohli jsme jednoduše přičítat časové intervaly a podobně. V nových projektech ji nepoužívejte, ale pravděpodobně na ni dříve či později narazíte a v tu chvíli se vám bude hodit lekce [Datum a čas v Javě pomocí třídy Calendar](https://www.itnetwork.cz/java/oop/java-tutorial-datum-a-cas).
*   **LocalDate**, **LocalTime** a **LocalDateTime** - Od Javy 8 se objevila třída `LocalDateTime` a její varianty jen pro samotné datum a samotný čas. Oproti třídě `Calendar` je `immutable` (to zjednodušeně znamená, že s ní lze pracovat pomocí vláken, více dále v seriálu) a ctí tzv. _fluent interface_ (někdy překládané do češtiny jako plynulé/tekoucí rozhraní), ale říkejme mu spíše řetězení metod. Také nemíchá získávání a nastavování hodnot v jedné metodě, ale poskytuje k tomuto účelu oddělené metody. Původní kalendář kvalitativně převyšuje a nahrazuje.
*   **Joda-Time** - Již zmíněné neúspěšné pokusy o implementaci data a času do Javy samozřejmě způsobily potřebu kvalitní náhrady a jako častá alternativa se uchytila knihovna `Joda-Time`. Nelze si nevšimnout, že třída `Date` API Javy 8 se touto knihovnou silně inspiruje a vychází ze stejných konceptů. Knihovna `Joda-Time` je dost možná ještě o něco kvalitnější, ale doporučoval bych držet se spíše již poměrně kvalitní standardní třídy `LocalDateTime` a vyhnout se zbytečným závislostem na knihovnách třetích stran.

Velké množství tříd je, ať chceme nebo ne, každodenní chléb Java programátora. Berme to však z té pozitivní stránky, hlavně proto je tato práce asi nejlépe placená ze všech programovacích jazyků. Čekají nás celkem 3 lekce na toto téma. Tak vzhůru do toho!

Třídy `LocalDateTime`, `LocalDate` a `LocalTime`
------------------------------------------------

Již víme, že budeme používat třídy `LocalDateTime`, `LocalDate` a `LocalTime` a to podle toho, zda potřebujeme ukládat datum i čas (např. odlet letadla), pouze datum (např. datum narození) a pouze čas (např. 12:00, přesnost na nanosekundy).

### Vytvoření instancí

Začněme tím, jak lze instance jednotlivých tříd vytvořit. Vytvoříme si nový projekt s názvem `DatumACas`.

#### Vytvoření dle zadání

Když chceme vytvořit novou instanci nějaké ze tříd, zavoláme na třídě **tovární metodu** `of()` a zadáme patřičné parametry:

```

LocalDateTime datumCas = LocalDateTime.of(2016, Month.APRIL, 15, 3, 15);
System.out.println(datumCas);

LocalDate datum = LocalDate.of(2016, Month.APRIL, 15);
System.out.println(datum);

LocalTime cas = LocalTime.of(3, 15, 10);
System.out.println(cas);
```


Metoda má více přetížení, např. můžeme a nemusíme zadat vteřiny, měsíc můžeme zadat jak číslem, tak pomocí tzv. výčtového typu (což je asi přehlednější, více se o nich dozvíme dále v seriálu) a podobně.

Nezapomeňme jednotlivé třídy naimportovat:

```
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.Month;
```


Výstup:

```
Konzolová aplikace
2016-04-15T03:15
2016-04-15
03:15:10
```


#### Vytvoření dle aktuálního data a času

Ve svých aplikacích budeme samozřejmě potřebovat získat také aktuální datum a čas. K tomu slouží další tovární metoda `now()`, kterou voláme opět přímo na příslušné třídě:

```

LocalDateTime datumCas = LocalDateTime.now();
System.out.println(datumCas);

LocalDate datum = LocalDate.now();
System.out.println(datum);

LocalTime cas = LocalTime.now();
System.out.println(cas);
```


### Formátování

Jelikož výstup není úplně uživatelsky přívětivý, pojďme si ukázat, jak jej naformátovat. Asi vás nepřekvapí, že k tomu použijeme metodu `format()` již normálně na instanci. Samotné formátování zajišťuje třída `DateTimeFormatter`, nás na ni budou zajímat tyto statické metody:

*   `ofLocalizedDateTime()` - Zformátuje na lokální formát data a času. Zadáváme **dva parametry** - styl data a styl času. Máme na výběr plný (`full`) až krátký (`short`) formát, což platí u všech formátovacích metod kromě metody `ofPattern()`.
*   `ofLocalizedDate()` - Zformátuje na lokální formát data
*   `ofLocalizedTime()` - Zformátuje na lokální formát času
*   `ofPattern()` - Oproti metodám výše, které formátovaly dle regionálního nastavení daného uživatele, zde můžeme specifikovat vlastní formát pomocí textového řetězce a zástupných znaků. Např. den, měsíc, rok, hodiny, minuty a sekundy (vše čísly) by se předalo jako `d.M.y H:m:ss`. Popis významu všech symbolů by byl zbytečně vyčerpávající a najdete jej [v oficiální dokumentaci Javy](https://docs.oracle.com/javase/8/docs/api/java/time/format/DateTimeFormatter.html).

Udělejme si příklad:

```
LocalDateTime dateTime = LocalDateTime.now();
System.out.println(dateTime.format(DateTimeFormatter.ofLocalizedTime(FormatStyle.MEDIUM)));
System.out.println(dateTime.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.FULL)));
System.out.println(dateTime.format(DateTimeFormatter.ofLocalizedDateTime(FormatStyle.LONG, FormatStyle.SHORT)));
System.out.println(dateTime.format(DateTimeFormatter.ofPattern("d.M.y H:m:ss")));
```


Nezapomeňme si dodat importy:

```
import java.time.format.DateTimeFormatter;
import java.time.format.FormatStyle;
```


Výstupem je aktuální formátovaný čas:

```
Konzolová aplikace
20:13:04
Pátek, 9. prosince 2016
9. prosince 2016 20:13
9.12.2016 20:13:04
```


Všimněte si, že metodám specifikujeme v parametrech i již zmíněný styl (enum `FormatStyle`), který udává zda chceme výpis stručný až vyčerpávající (ukecaný). Máme k dispozici tyto hodnoty:

*   `FULL` - Vrací datum jako `Pátek, 6. prosince 2016`, pro čas nemá význam a při použití vyvolá výjimku.
*   `LONG` - Vrací datum jako `6. prosince 2016`, pro čas nemá význam a při použití vyvolá výjimku.
*   `MEDIUM` - Vrací datum jako `6. pros 2016`, čas jako `3:15:10`.
*   `SHORT` - Vrací datum jako `6.12.2016`, čas jako `3:15`.

Na třídě `DateTimeFormatter` jsou také dostupné předdefinované formáty jako konstanty, ale české formáty tam bohužel nenajdeme.

V další lekci, [Datum a čas od Javy 8 - Úprava a intervaly](https://www.itnetwork.cz/java/oop/datum-a-cas-v-jave-8-uprava-a-intervaly) si ukážeme převody mezi `LocalDate`, `LocalTime` a `LocalDateTime`, jak upravovat vnitřní hodnotu a práci s intervaly.

# Lekce 13 - Datum a čas od Javy 8 - Úprava a intervaly
V minulé lekci, [Datum a čas v Javě 8 - Vytváření a formátování](https://www.itnetwork.cz/java/oop/datum-a-cas-v-jave-8-vytvareni-a-formatovani), jsme se naučili vytvářet instance tříd `LocalDate`, `LocalTime` a `LocalDateTime` a formátovat jejich hodnotu.

V dnešním tutoriálu se budeme věnovat úpravě této hodnoty a zaběhneme i do časových intervalů.

Potřebné importy
----------------

Abych zbytečně neopakoval, o jaké importy v příkladech jde, naimportujte si je rovnou všechny, které použijeme:

```
import java.time.*;
import java.time.format.DateTimeFormatter;
import java.time.format.FormatStyle;
import java.time.temporal.ChronoUnit;
import java.time.temporal.TemporalAmount;
```


Převody
-------

Na úvod si ukažme, jak můžeme převádět mezi datumy z instancí `LocalDate`, `LocalTime` a `LocalDateTime`.

### Převod z `LocalDateTime`

Z datumu `LocalDateTime` převádíme jednoduše pomocí jeho metod `toLocalDate()` a `toLocalTime()`.

### Převod na `LocalDateTime`

Instanci `LocalDateTime` vytvoříme pomocí jedné z `of()` metod, kde uvedeme zvlášť datum a čas, např. takto:

```
LocalDateTime datumCas = LocalDateTime.of(LocalDate.of(1939, 9, 1), LocalTime.of(10, 0)); 
System.out.println(datumCas);
```


Výstup:

```
Konzolová aplikace
1939-09-01T10:00
```


Pokud chceme nastavit čas na začátek dne, můžeme využít metody `atStartOfDay()`. Další metodou, kterou můžeme vzít datum a připojit k němu čas, je `atTime()`. U této metody si můžeme nastavit vlastní hodinu a minutu. Další varianta příkladu výše by tedy byla:

```
LocalDate zacatek = LocalDate.of(1939, 9, 1);
LocalDateTime zacatekDne = zacatek.atStartOfDay();
LocalDateTime danyZacatek = zacatek.atTime(10, 0);
System.out.println(zacatekDne);
System.out.println(danyZacatek);
```


Na výstupu bude tedy začátek dne (00:00 hodin) a další čas bude v 10 hodin jako u minulého příkladu:

```
Konzolová aplikace
1939-09-01T00:00
1939-09-01T10:00
```


Úprava hodnoty
--------------

K existující instanci můžeme přičítat určitý počet dní, hodin a podobně. Slouží k tomu metody začínající na `plus...()` nebo `minus...()`, snad netřeba vysvětlovat co dělají. Důležitá poznámka je, že vracejí **novou instanci s upravenou hodnotou**. Instance je ve všech ohledech **neměnitelná** (`immutable`) a jakákoli změna spočítá v nahrazení za novou (např. podobně jako to je v Javě s textovými řetězci).

Zkusme si to a přidejme aktuálnímu datu další 3 dny v týdnu:

```
LocalDateTime datumCas = LocalDateTime.now();
datumCas = datumCas.plusDays(3);
System.out.println(datumCas.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM)));
```


Pokud si představíme, že je dnes `19.4.2023`, výstupem bude:

```
Konzolová aplikace
22. 4. 2023
```


Metody, které máme k dispozici, jsou následující:

*   `minusDays()`
*   `minusHours()`
*   `minusMinutes()`
*   `minusMonths()`
*   `minusNanos()` - Odebere z času nanosekundy.
*   `minusSeconds()`
*   `minusWeeks()`
*   `minusYears()`
*   `plusDays()`
*   `plusHours()`
*   `plusMinutes()`
*   `plusMonths()`
*   `plusNanos()`
*   `plusSeconds()`
*   `plusWeeks()`
*   `plusYears()`

Do metod můžeme dávat i záporné hodnoty. Pokud zavoláme například metodu `plusDays(-3)`, je tato metoda stejná jako `minusDays(3)`.

### Třídy `Period` a `Duration`

Kromě výše zmíněných metod nalezneme i 4 obecné verze metod `minus()` a `plus()`, které přijímají interval k přidání/odebrání. Využijeme je zejména v případě, kdy dopředu nevíme, zda budeme přidávat např. dny nebo roky, ušetří nám spoustu podmínkování. Máme k dispozici třídy `Duration` a `Period`, na kterých si můžeme nechat vrátit objekt reprezentující takový interval.

Až se dostaneme k rozhraním, můžete se podívat, že obě třídy implementující společné rozhraní `TemporalAmount`. Zatím si s nimi však nemotejme hlavu.

Upravený kód našeho příkladu by vypadal takto:

```
LocalDateTime datumCas = LocalDateTime.now();
datumCas = datumCas.plus(Period.ofDays(3));
System.out.println(datumCas.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM)));
```


Výstup bude stejný, jako u příkladu výše. `of...()` metody mají stejné "přípony" jako měly plus/minus metody vyjmenované výše>

```
Konzolová aplikace
22. 4. 2023
```


Třída `Duration` na rozdíl od třídy `Period` označuje nějaký časový interval, který vůbec nesouvisí s kalendářem (např. jak dlouho trvá vyrobit automobil), den trvá vždy 24 hodin. Třída `Period` počítá s přechodem na letní čas, den tedy může někdy trvat 23 nebo 25 hodin. `Period` použijeme při práci s třídami `LocalDate`/`LocalDateTime`, třídu `Duration` při práci s časem.

### Třída `ChronoUnit`

Pro snazší práci s různými jednotkami jako jsou dny, hodiny, minuty a podobně je nám k dispozici třída `ChronoUnit`. Vnitřně používá třídu `Duration`. Jedná se tedy pouze o jiný zápis již předchozích úloh, ale jen pro jistotu, kdybyste jej někdy potkali, ukažme si jej:

```
LocalDateTime datumCas = LocalDateTime.now();
datumCas = datumCas.plus(3, ChronoUnit.DAYS);
System.out.println(datumCas.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM)));
```


Jen pro úplnost si dodejme, že třída `ChronoUnit` implementuje rozhraní `TemporalUnit`, kdybyste se s ním později setkali. Nyní rozhraní řešit nebudeme.

Jak můžeme vidět, implementace data a času je v Javě poměrně složitá, nebudeme tu zabíhat do zbytečných detailů a zaměříme se zejména na praktickou stránku použití, jak to u nás na síti většinou děláme.

### Další metody

Ukažme si ještě další užitečné metody.

#### Metoda `between()`

Další metoda, kterou máme k dispozici, je statická metoda `between()` na třídě `Period`, která nám umožňuje získat interval, tedy rozdíl mezi 2 datumy (přesněji objekty s rozhraním `Temporal`, to je společný typ pro třídy `LocalDate`, `LocalDateTime` a `LocalTime`):

```
LocalDate zacatek = LocalDate.of(1939, 9, 1);
LocalDate konec = LocalDate.of(1945, 9, 2);
TemporalAmount doba = Period.between(zacatek, konec);
System.out.println("II. světová válka trvala " + doba.get(ChronoUnit.YEARS) + " let a " + doba.get(ChronoUnit.DAYS) + " dní");
```


Výstup:

```
Konzolová aplikace
II. světová válka trvala 6 let a 1 dní
```


Tu samou metodu nalezneme i na třídě `Duration`, která ovšem pracuje s třídou `LocalDateTime` místo třídy `LocalDate`. Z intervalu nezjistíme počet let, protože roky nemají pevný počet dnů a my již víme, že `Duration` není nijak spojená s kalendářním pojetím času.

#### Metoda `until()`

Jako poslední stojí za zmínku metoda `until()`. Tato metoda se volá přímo nad instancemi tříd `LocalDate`, `LocalDateTime` a `LocalTime` a vrací stejný výsledek, jako statická metoda `between()`.

```
LocalDate zacatek = LocalDate.of(1939, 9, 1);
LocalDate konec = LocalDate.of(1945, 9, 2);

Period doba = zacatek.until(konec);
System.out.println("II. světová válka trvala " + doba.get(ChronoUnit.YEARS) + " let a " + doba.get(ChronoUnit.DAYS) + " dní");
```


Výstup je stejný:

```
Konzolová aplikace
II. světová válka trvala 6 let a 1 dní
```


Nastavení hodnoty
-----------------

Hodnotu nastavujeme pomocí metod `with...*()`, mají opět ty samé "přípony" jako metody doposud zmíněné. Jako vždy nezapomeňte, že jako všechny podobné metody vracejí novou instanci:

```
LocalDateTime zacatek = LocalDateTime.of(1939, 9, 1, 0, 0);
zacatek = zacatek.withHour(10); 
```


### Řetězení metod

Vracení nových instancí, které je zejména výsledkem toho, že jsou instance immutable, zároveň poskytuje tzv. fluent interface (česky někdy překládané jako plynulé rozhraní). Jedná se o [řetězení metod](https://www.itnetwork.cz/navrh/navrhove-vzory/ostatni/method-chaining-a-method-cascading#_method-chaining), anglicky _method chaining_. Nehledejte v tom žádnou složitost, jde jen o to, že můžeme většinu metod volat po sobě na jednom řádku.

Zkusme si nastavit kalendář na programátorské vánoce, tedy na Halloween (ano, protože Oct 31 = Dec 25):

```
LocalDate zacatek = LocalDate.of(1939, 9, 1);
zacatek = zacatek.withMonth(10).withDayOfMonth(31);
```


V příští lekci, [Datum a čas v Javě 8 - Parsování a porovnávání](https://www.itnetwork.cz/java/oop/datum-a-cas-v-jave-8-parsovani-a-porovnavani), se podíváme na parsování a porovnávání datumu a času.

# Lekce 14 - Datum a čas v Javě 8 - Parsování a porovnávání
V minulé lekci, [Datum a čas od Javy 8 - Úprava a intervaly](https://www.itnetwork.cz/java/oop/datum-a-cas-v-jave-8-uprava-a-intervaly), jsme se věnovali převedení, úpravě hodnoty a časovým intervalům.

V dnešním tutoriálu se podíváme na čtení hodnoty, parsování a porovnávání.

Čtení hodnoty
-------------

Hodnotu čteme pomocí metod začínajících na `get*()`, zde nás ani nic nepřekvapí:

```
LocalDate halloween = LocalDate.of(2016, Month.OCTOBER, 31);
System.out.println("Rok: " + halloween.getYear() + ", měsíc: " + halloween.getMonthValue() + ", den: " + halloween.getDayOfMonth());
```


a výsledek:

```
Konzolová aplikace
Rok: 2016, měsíc: 10, den: 31
```


Všimněte si, že pro získání čísla měsíce jsme použili metodu `getMonthValue()`, protože metoda `getMonth()` by vrátil hodnotu z výčtového typu `Month`.

Kdybychom se setkali se starší třídou `Calendar`, musíme si dát pozor. Měsíce tam jsou číslované od `0` místo od `1`, jak je tomu ve třídách `LocalDate`/`LocalDateTime`.

Parsování data a času
---------------------

Datum a čas budeme samozřejmě často dostávat v textové podobě, např. od uživatele z konzole, ze souboru nebo z databáze. Asi tušíte, že k vytvoření `LocalDateTime` z takovéto textové hodnoty použijeme metodu `parse()` přímo na datovém typu, jako to v Javě děláme vždy.

Třída `LocalDate` předpokládá datum ve formátu `yyyy-mm-dd`, třída `LocalDateTime` datum a čas ve formátu `yyyy-mm-ddThh:mm:ss` a třída `LocalTime` čas ve formátu `hh:mm:ss`. Všechna čísla před sebou musí mít nuly, pokud jsou menší jak `10`. Písmeno `T` uprostřed formátu není překlep, ale opravdu oddělení data a času. To už můžeme vědět z předchozích lekcí. Zkusme si datum a čas :

```
LocalDateTime datumCas = LocalDateTime.parse("2016-12-08T10:20:30");
LocalDate datum = LocalDate.parse("2016-12-08");
LocalTime cas = LocalTime.parse("10:20:30");

System.out.println(datumCas.format(DateTimeFormatter.ofLocalizedDateTime(FormatStyle.MEDIUM)));
System.out.println(datum.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM)));
System.out.println(cas.format(DateTimeFormatter.ofLocalizedTime(FormatStyle.MEDIUM)));
```


Nezapomeneme zase na importy:

```
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.time.format.DateTimeFormatter;
import java.time.format.FormatStyle;
```


Možný výsledek:

```
Konzolová aplikace
8. 12. 2016 10:20:30
8. 12. 2016
10:20:30
```


Výsledek je samozřejmě různorodý, záleží na lokalizaci systému. Proto můžete mít výstup jiný.

### Vlastní formát

Mnohem často budeme ale samozřejmě chtít naparsovat datum a čas v českém tvaru nebo v jakémkoli jiném tvaru, výchozí oddělování data a času pomocí písmene `T` není zrovna _user-friendly_ ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

```
LocalDateTime datumCas = LocalDateTime.parse("12/08/2016 10:20:30", DateTimeFormatter.ofPattern("M/d/y HH:mm:ss"));
LocalDate datum = LocalDate.parse("12/8/2016", DateTimeFormatter.ofPattern("M/d/y"));
LocalTime cas = LocalTime.parse("10:20:30", DateTimeFormatter.ofPattern("H:m:ss"));

System.out.println(datumCas.format(DateTimeFormatter.ofLocalizedDateTime(FormatStyle.MEDIUM)));
System.out.println(datum.format(DateTimeFormatter.ofLocalizedDate(FormatStyle.MEDIUM)));
System.out.println(cas.format(DateTimeFormatter.ofLocalizedTime(FormatStyle.MEDIUM)));
```


Výsledek:

```
Konzolová aplikace
8. 12. 2016 10:20:30
8. 12. 2016
10:20:30
```


Kdybychom chtěli třeba specifikovat vlastní formát v metodě `ofPattern()` a musel by formát obsahovat například klíčové písmeno `m` (normálně by to chtělo počet minut), můžeme ho escapovat pomocí jednoduchých apostrofů `'`. Zkusíme naparsovat například `10h:20m:30s`:

```
LocalTime cas = LocalTime.parse("10h:20m:30s", DateTimeFormatter.ofPattern("H'h':m'm':ss's'"));
System.out.println(cas);
```


Výstup:

```
Konzolová aplikace
10:20:30
```


Porovnávání instancí
--------------------

Protože Java nepodporuje přetěžování operátorů, porovnáváme datumy (píší schválně češtinsky nesprávně, daty je v IT zavádějící slovo) pomocí metod k tomu určených. Metody začínají na `is*()`, vyjmenujme si je:

*   `isAfter(datum)` - Vrací, zda je instance za datem/datem a časem předávané instance (zda je hodnota větší).
*   `isBefore(datum)` - Vrací, zda je instance před datem/datem a časem předávané instance (zda je hodnota menší).
*   `isEqual(datum)` - Vrací, zda je instance nastavena na stejný datum a/nebo čas jako je předávaná instance (zda je hodnota stejná).

To bylo jednoduché, že? Když už jsme u metod `is*()`, uveďme si i zbývající dvě:

*   `isLeapYear()` - Vrací, zda je instance nastavena na přestupný rok či nikoli.
*   `isSupported(ChronoUnit)` - Vrací, zda instance podporuje práci s danou chrono jednotkou (např. `LocalDate` nebude umět `ChronoUnit.HOURS`, protože neobsahuje informaci o čase).

Ukažme si příklad:

```
LocalDate halloween = LocalDate.of(2016, 10, 31);
LocalDate vanoce = LocalDate.of(2016, 12, 25);
System.out.println("Halloween po Vánocích: " + halloween.isAfter(vanoce));
System.out.println("Halloween před Vánocemi: " + halloween.isBefore(vanoce));
System.out.println("shodný Vánoce - Halloween: " + vanoce.isEqual(halloween));
System.out.println("shodný Halloween - Halloween: " + halloween.isEqual(halloween));
System.out.println("přestupný rok 2016: " + halloween.isLeapYear());
System.out.println("přestupný rok 2017: " + halloween.withYear(2017).isLeapYear());
System.out.println("podporuje hodiny: " + halloween.isSupported(ChronoUnit.HOURS));
System.out.println("podporuje roky: " + halloween.isSupported(ChronoUnit.YEARS));
```


Doplníme chybějící import:

```
import java.time.temporal.ChronoUnit;
```


Výsledek:

```
Konzolová aplikace
Halloween po Vánocích: false
Halloween před Vánocemi:: true
shodný Vánoce - Halloween: false
shodný Halloween - Halloween: true
přestupný rok 2016: true
přestupný rok 2017: false
podporuje hodiny: false
podporuje roky: true
```


Další třídy
-----------

Kromě tříd `LocalDateTime`, `LocalDate` a `LocalTime` se můžeme setkat také s několika dalšími třídami, které využijeme spíše u aplikací, které jsou na práci s datem a časem založené. Nemusíme se jich lekat, ve většině případů si vystačíme s třídou `LocalDateTime`, ale měli bychom o nich mít povědomí.

### Instant

Třída `Instant` je pro datum a čas, ale ne v pojetí kalendáře a přechodů na letní čas. Je to počet nanosekund od data `1.1.1970`, tedy jeden bod na časové ose `UTC` (univerzálního času). Když si kdekoli na Zemi napíšete aplikaci s tímto kódem:

```
Instant nyni = Instant.now();
System.out.println(nyni);
```


a importem:

```
import java.time.Instant;
```


Dostaneme na výstup vždy to samé, například:

```
Konzolová aplikace
2023-04-20T10:36:06.541863800Z
```


Třída `Instant` zná jen univerzální čas a ten se bude lišit od reálného času v dané oblasti.

### Třídy `OffsetDateTime` a `ZonedDateTime`

Již víme, že `Instant` je univerzální čas a `LocalDateTime` má v sobě ten čas, který je na daném území. Ze samotného `LocalDateTime` nedokážeme získat bod na univerzální časové ose, protože nevíme na jakém je území.

Co nám chybí je tedy kombinace těchto dvou, lokálně korektní čas, který by v sobě zároveň nesl informaci o území (časové zóně) a tím pádem mohl být univerzálně převáděn mezi různými časovými zónami. Právě k tomu slouží třída `ZonedDateTime`.

V Javě nalezneme také třídu `OffsetDateTim`, která je takový mezičlánek, který umožňuje zaznamenat časový posun, ale nemá plnou podporu zón.

### Třída `ZoneId`

Časové zóny jsou v Javě reprezentovány třídou `ZoneId`. Pojďme si udělat jednoduchou ukázku datumu s časovou zónou:

```
ZonedDateTime lokalniDatumCas = ZonedDateTime.now(ZoneId.of("America/New_York"));
System.out.println(lokalniDatumCas);
```


Nezapomeneme na potřebné balíčky:

```
import java.time.ZoneId;
import java.time.ZonedDateTime;
```


Výstup:

```
Konzolová aplikace
2017-02-02T06:37:11.026-05:00[America/New_York]
```


Ano, je to hodně tříd, berme to spíše jako informace, ke kterým se můžeme vrátit až je budeme potřebovat. Je dobré mít povědomí o tom, jak se s datumem pracuje. V Javě je tříd vždy více, než v ostatních jazycích. Zkusme si vypěstovat trpělivost a nějakou odolnost vůči této skutečnosti, zas jsme kvůli tomu lépe placení ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Příště budeme zas chvíli prakticky programovat, abychom si od teorie odpočinuli.

Epochy
------

Na úplný závěr si pojďme ještě představit několik posledních metod na třídě `LocalDateTime`.

*   `ofEpochSecond()` - Statická metoda nám umožňuje vytvořit datum a čas z tzv. _Unix timestamp_, ve kterém se datum a čas často ukládal zejména v minulosti. Je to velké číslo označující počet vteřin od datumu `1.1.1970` (začátek unixové epochy), musíme uvést i nanosekundy (většinou 0) a časovou zónu, což je nejčastěji `ZoneOffset.UTC`. Metoda je dostupná i na třídě `LocalDate` jako metoda `ofEpochDay()`, kde přijímá počet dní místo sekund.
*   `toEpochSecond()` a `toEpochDay()` - Metody opačné ke dvěma předchozím, převádí hodnotu na počet sekund/dní od roku `1970`.

To je k datu a času od Javy verze 8 opravdu vše.

V následujícím cvičení, [Řešené úlohy k 12. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-programovani-oop-datum-a-cas), si procvičíme nabyté zkušenosti z předchozích lekcí.

# Řešené úlohy k 12. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 12. lekci OOP v Javě

V minulé lekci, [Datum a čas v Javě 8 - Parsování a porovnávání](https://www.itnetwork.cz/java/oop/datum-a-cas-v-jave-8-parsovani-a-porovnavani), jsme si představili parsování a porovnávání datumu a času.

Následující tři cvičení vám pomohou procvičit znalosti objektově orientovaného programování v Javě z minulé lekce. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulého tutoriálu a pokuste se na to přijít.

Jednoduchý příklad
------------------

Naprogramujte aplikaci, která pro **následujících**

  

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

> Řešené programátorské úlohy v Javě na téma práce s datem a časem. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 15 - Diář s databází v Javě - Záznam, databáze a diář
V předešlém cvičení, [Řešené úlohy k 12. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/java-resene-priklady-programovani-oop-datum-a-cas), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V dnešním tutoriálu si do ArrayListu zkusíme uložit objekty.

Prvně jsem chtěl udělat databázi uživatelů, ale uživatele jsme tu již několikrát měli. Jelikož jsme se nedávno naučili datum a čas, naprogramujeme si diář. Do databáze budeme ukládat jednotlivé záznamy a vždy vypíšeme ten dnešní a zítřejší. Databáze to nebude samozřejmě ta v tom pravém slova smyslu (na to ještě nemáme zkušenosti), ale bude se jednat právě o `ArrayList` v operační paměti počítače. Bude umožňovat záznamy přidávat, hledat je podle data a mazat podle data a času. Založme si nový projekt, který nepojmenujeme `Diar` (budeme toto jméno potřebovat pro třídu) ale např. `Poznamkovac`, to bude název naší výsledné aplikace.

Hlavní třídu `Main.java` pojmenujeme na `Poznamkovac.java`. Můžeme to udělat přes kontextovou nabídku (pravým kliknutím na soubor `Main.java` -> _Refactor_ -> _Rename_) případně ručně přejmenujeme soubor a poté i název třídy (samozřejmě bez přípony) uvnitř kódu.

Záznam
------

Prvně si udělejme třídu, jejíž instance budeme ukládat. Nazvěme ji `Zaznam`. Záznam v diáři se bude vázat k nějakému datu a času. Také bude obsahovat nějaký text. Záznam tedy bude něco jako `12. ledna 2013 - Vyvenčit psa`. To je asi vše, třída může vypadat takto:

```
import java.time.LocalDateTime;

public class Zaznam {

    private LocalDateTime datumCas;
    private String text;

    public Zaznam(LocalDateTime datumCas, String text) {
        this.datumCas = datumCas;
        this.text = text;
    }

    public LocalDateTime getDatumCas() {
        return datumCas;
    }

    public void setDatumCas(LocalDateTime datumCas) {
        this.datumCas = datumCas;
    }

    public String getText() {
        return text;
    }

    public void setText(String text) {
        this.text = text;
    }

    @Override
    public String toString() {
        return datumCas + " " + text;
    }
}
```


Třída v podstatě slouží jen k záznamu dat a nemá žádné metody (až na konstruktor a metodu `toString()` a nějaké ty gettery/settery). Funkcionalitu jako takovou ale nenabízí. Bystřejší si jistě všimli, že metoda `toString()` nijak neformátuje datum a čas. K tomu se později ještě vrátíme. Okomentovávat v lekci nebudu, v případě potřeby si pak můžete stáhnout celý hotový projekt i s komentáři.

Databáze
--------

Protože program bude o něco složitější, rozdělíme ho do více objektů (vrstev). Záznam máme, nyní si vytvoříme objekt `Databaze`, ve které budou záznamy uloženy. Opět bude mít privátní kolekci `ArrayList`, jako měl `Losovac`. Ten bude nyní typu `Zaznam`. Diář bude umožňovat záznamy přidávat, mazat a vyhledávat podle data. K projektu tedy přidáme třídu `Databaze`. Bude velmi podobná minulé třídě `Losovac`:

```
import java.util.ArrayList;

public class Databaze {

    private ArrayList<Zaznam> zaznamy;

    public Databaze() {
        zaznamy = new ArrayList<>();
    }
}
```


Všimněte si použití "diamond operátoru" při vytváření nové instance `ArrayList`. Od Javy 7 nemusíme generický typ uvádět 2x, ale stačí ho uvést pouze při deklaraci proměnné a špičaté závorky můžeme podruhé již ponechat prázdné. Také si řekněme, že kdybychom špičaté závorky nenapsali vůbec a `ArrayList` deklarovali i inicializovali bez uvedení generického typu, položky by se ukládaly jako typ `Object`. Museli bychom je vždy na naše `zaznamy` ručně převádět. Dále v seriálu si ukážeme, jak by se to dělalo a listy ještě potom potkáte u kolekcí.

Třída `Databaze` tedy slouží pouze pro manipulaci s daty. Obsahuje vnitřní kolekci `zaznamy`, ta se inicializuje v konstruktoru. Mohli bychom použít i inicializaci bez konstruktoru přímo u deklarace ve formě:

```
private ArrayList<Zaznam> zaznamy = new ArrayList<>();
```


Dodejme třídě metody pro přidání, vymazání a vyhledání záznamu.

Přidání záznamu by mělo být jasné:

```
public void pridejZaznam(LocalDateTime datumCas, String text) {
    zaznamy.add(new Zaznam(datumCas, text));
}
```


Budeme si muset přidat i import:

```
import java.time.LocalDateTime;
```


Jako druhou metodu přidejme nalezení záznamů v daný den. Metoda bude vracet kolekci `ArrayList` nalezených záznamů, protože jich pro ten den může být v databázi více. Záznamy budeme moci vyhledávat podle data i času nebo jen podle data. Můžeme tak najít záznamy v konkrétní den bez ohledu na to, v jakou jsou hodinu. Podle čeho budeme chtít vyhledávat bude udávat parametr `dleCasu` typu `boolean`. Pokud bude mít hodnotu `false`, hledáme jen podle data bez ohledu na čas. Kolekci `ArrayList` si nejprve vytvoříme a poté do něj přidáváme záznamy, které odpovídají hledanému datu. Odpovídat musí buď celé datum a čas (pokud hledáme i podle času) nebo jen datum (pokud hledáme jen podle data). Naplněný `ArrayList` s nalezenými záznamy vrátíme:

```
public ArrayList<Zaznam> najdiZaznamy(LocalDateTime datumCas, boolean dleCasu) {
    ArrayList<Zaznam> nalezene = new ArrayList<>();
    for (Zaznam zaznam : zaznamy) {
        if ((dleCasu && zaznam.getDatumCas().equals(datumCas))
            || (!dleCasu && zaznam.getDatumCas().toLocalDate().equals(datumCas.toLocalDate()))) {
            nalezene.add(zaznam);
        }
    }
    return nalezene;
}
```


Nakonec přidáme vymazání záznamů v určitou dobu. To provedeme pomocí metody `najdiZaznamy()` a nalezené záznamy jednoduše proiterujeme a z kolekce `ArrayList` odstraníme. Budeme mazat podle přesného data i času, 2. parametr u metody `najdiZaznamy()` bude tedy na hodnotě `true`:

```
public void vymazZaznamy(LocalDateTime datum) {
    ArrayList<Zaznam> nalezeno = najdiZaznamy(datum, true);
    for (Zaznam zaznam : nalezeno) {
        zaznamy.remove(zaznam);
    }
}
```


Diář
----

Nyní si přidáme k projektu poslední třídu, bude to samotný diář. Nazvěme ji `Diar`. Ten již bude obsahovat metody pro komunikaci s uživatelem. Všimněte si, jak aplikaci rozdělujeme a jednotlivé její části zapouzdřujeme. Kolekce `ArrayList` je zapouzdřena v databázi, která nad ním postavila další metody pro bezpečnou manipulaci s jeho obsahem. Samotnou databázi nyní vložíme do diáře. Tím oddělíme logiku a práci s daty od komunikace s uživatelem a dalšími vstupy/výstupy programu. Třída `Diar` tedy bude komunikovat s uživatelem a data od něj předá databázi.

Přidejme si privátní instanci databáze, kterou si vytvoříme v konstruktoru. Podobně přidejme i instanci třídy `Scanner`, kterou budeme ve třídě potřebovat:

```
import java.util.Scanner;

public class Diar {

    private Databaze databaze;
    private Scanner scanner = new Scanner(System.in);

    public Diar() {
        databaze = new Databaze();
    }
}
```


V další lekci, [Diář s databází v Javě - Metody diáře, výjimky a final](https://www.itnetwork.cz/java/oop/java-tutorial-diar-arraylist-dokonceni), se podíváme na metody třídy `Diar`, krátce koukneme na výjimky a klíčové slovo final.

# Lekce 16 - Diář s databází v Javě - Metody diáře, výjimky a final
V minulé lekci, [Diář s databází v Javě - Záznam, databáze a diář](https://www.itnetwork.cz/java/oop/java-tutorial-diar-arraylist), jsme rozpracovali jednoduchý diář s databází pomocí kolekce `ArrayList`.

V dnešním tutoriálu aplikaci dokončíme.

Třída `Diar`
------------

Do třídy `Diar` přidejme dvě pomocné metody `naparsujDatumCas()` a `naparsujDatum()`, které vyzvou uživatele k zadání data (a případně času) a vrátí instanci `LocalDateTime` nastavenou na tuto hodnotu. Nejprve si metody ukažme, záhy si je popíšeme:

```
private LocalDateTime naparsujDatumCas() {
    System.out.println("Zadejte datum a čas ve tvaru [" + LocalDateTime.now().format(FORMAT_DATA) + "]:");
    while (true) {
        try {
            return LocalDateTime.parse(scanner.nextLine(), FORMAT_DATA);
        } catch (Exception ex) {
            System.out.println("Nesprávně zadáno, zadejte prosím znovu.");
        }
    }
}

private LocalDateTime naparsujDatum() {
    System.out.println("Zadejte datum ve tvaru [" + LocalDate.now().format(FORMAT_DATA_BEZ_CASU) + "]:");
    while (true) {
        try {
            return LocalDate.parse(scanner.nextLine(), FORMAT_DATA_BEZ_CASU).atStartOfDay();
        } catch (Exception ex) {
            System.out.println("Nesprávně zadáno, zadejte prosím znovu.");
        }
    }
}
```


Přidáme ještě potřebné importy:

```
import java.time.LocalDateTime;
import java.time.LocalDate;
```


Jako první vás bodne do oka nejspíš neznámé bloky `try` a `catch`. Název pro tyto bloky jsou [výjimky](https://www.itnetwork.cz/java/soubory/java-tutorial-vyjimky-try-catch-finally), v této lekci je rozebírat nebudeme, probírají se kompletně až v [kurzu o souborech](https://www.itnetwork.cz/java/soubory). Pro nás je momentálně pouze důležité vědět, že zachytí kritickou chybu a celá aplikace díky tomu _nespadne_. Pokud tedy třídy `LocalDateTime` nebo `LocalDate` nedokážou naparsovat vstup od uživatele (tzn. že zadal chybný formát data a času), vypíšeme hlášku, že nebylo datum správně zadáno. Jelikož máme tyto bloky v nekonečném cyklu `while`, bude se to opakovat do doby, dokud uživatel nezadá správný formát datumu.

Obě metody formátují datum známou metodou `format()`, konstanty `FORMAT_DATA` a `FORMAT_DATA_BEZ_CASU` si za chvíli deklarujeme. Metoda `naparsujDatum()` by bez času vracelo nechtěný typ `LocalDate`, díky tomu zavoláme v `return` metodu `atStartOfDay()` abychom vrátili instanci třídy `LocalDateTime`.

Pomocí metody `naparsujDatumCas()` budeme tedy zadávat datum a čas, pomocí metody `naparsujDatum()` budeme zadávat pouze datum. Druhá metoda bude sloužit k vyhledávání záznamů v určitý den, jelikož určitě nebudeme chtít odstranit záznamy v danou hodinu a minutu, ale záznamy v daný den bez určení času.

### Konstanty

Do třídy si přidáme již zmíněné **veřejné**, **statické** a **finální** konstanty. Budou to formattery data a času. Klíčové slovo `final` si vysvětlíme za chvíli, statické a veřejné atributy to jsou proto, aby byly použitelné i pro další třídy v naší aplikaci bez vytvoření instance. Každá třída může používat tyto formattery, které máme definované na jednom místě:

```
public static final DateTimeFormatter FORMAT_DATA = DateTimeFormatter.ofPattern("d.M.y H:mm");
public static final DateTimeFormatter FORMAT_DATA_BEZ_CASU = DateTimeFormatter.ofPattern("d.M.y");
```


Přidáme si další potřebný import:

```
import java.time.format.DateTimeFormatter;
```


Klíčové slovo `final`
---------------------

Toto klíčové slovo se může deklarovat na proměnné, atributu, metody nebo i třídy.

### Na proměnné nebo atributu

Klíčové slovo `final` na atributu/proměnné **zamezí tomu**, aby se daný atribut/proměnná mohla nadále měnit, bude tedy **konstantní** (vždy stejná). Hodnota do proměnné/atributu se nemusí ihned po deklaraci přiřadit, ale klidně až v průběhu. Má to však i malý háček, pokud deklarujeme například:

```
public final Clovek clovek;
```


Do atributu `clovek` už nebudeme moct přiřadit nového člověka, budeme moct však stále měnit jeho atributy, například `clovek.vek = 18`. Atribut tedy není v tomto případě kompletně neměnný. Aby nebylo možné změnit i věk instance `clovek`, museli bychom přidat klíčové slovo `final` i atributu `vek` ve třídě `Clovek`.

### Na třídě

Finální třída se už nemůže změnit a nemůže se z ní ani dědit.

### Na metodách

Finální metody nemohou být přepsány (`@Override`) nebo skryty potomkem.

Soubor `Zaznam.java`
--------------------

Jeden formatter obsahuje datum i čas, jeden pouze datum bez času. Přejděme do třídy `Zaznam.java` a metodu `toString()` pozměňme takto:

```
@Override
public String toString() {
    return Diar.FORMAT_DATA.format(datumCas) + " " + text;
}
```


Kdybychom si dělali instanci formatteru znovu v každém záznamu, bylo by to nepraktické. Takto máme formattery na jednom místě a když se rozhodneme formát změnit, změníme ho jen ve třídě `Diar`. Se statikou ale opatrně, ne vždy ji je vhodné použít.

Soubor `Diar.java`
------------------

Přesuneme se zpět do souboru `Diar.java`, kde si přidáme další metody.

### Metoda `vypisZaznamy()`

Přidejme metodu `vypisZaznamy()`, která najde záznamy v daný den a vypíše je:

```
public void vypisZaznamy(LocalDateTime den) {
    ArrayList<Zaznam> zaznamy = databaze.najdiZaznamy(den, false);
    for (Zaznam zaznam : zaznamy) {
        System.out.println(zaznam);
    }
}
```


Přidáme další import:

```
import java.util.ArrayList;
```


### Metoda `pridejZaznam()`

Metoda pro vyzvání uživatele k vložení parametrů nového záznamu a jeho přidání do databáze bude následující:

```
public void pridejZaznam() {
    LocalDateTime datumCas = naparsujDatumCas();
    System.out.println("Zadejte text záznamu:");
    String text = scanner.nextLine();
    databaze.pridejZaznam(datumCas, text);
}
```


### Metoda `vyhledejZaznamy()`

Zbývá záznamy vyhledávat a mazat. Metoda k vyhledání vrátí kolekci `ArrayList` s nalezenými záznamy (jen podle data, přesný čas nebude hrát roli). Vyzveme uživatele k zadání data a to předáme databázi. Výsledek zobrazíme:

```
public void vyhledejZaznamy() {
    
    LocalDateTime datumCas = naparsujDatum();
    
    ArrayList<Zaznam> zaznamy = databaze.najdiZaznamy(datumCas, false);
    
    if (zaznamy.size() > 0) {
        System.out.println("Nalezeny tyto záznamy: ");
        for (Zaznam zaznam : zaznamy) {
            System.out.println(zaznam);
        }
    } else {
        System.out.println("Nebyly nalezeny žádné záznamy.");
    }
}
```


### Metoda `vymazZaznamy()`

Mazání záznamů je triviální:

```
public void vymazZaznamy() {
    System.out.println("Budou vymazány záznamy v daný den a hodinu");
    LocalDateTime datumCas = naparsujDatumCas();
    databaze.vymazZaznamy(datumCas);
}
```


### Metoda `vypisUvodniObrazovku()`

Jako poslední přidejme metodu pro vypsání úvodní obrazovky programu s aktuálním datem a časem a událostmi na dnešek a zítřek.

```
public void vypisUvodniObrazovku() {
    System.out.println();
    System.out.println();
    System.out.println("Vítejte v diáři!");
    LocalDateTime dnes = LocalDateTime.now();
    System.out.printf("Dnes je: %s%n", FORMAT_DATA.format(dnes));
    System.out.println();
    
    System.out.println("Dnes:\n-----");
    vypisZaznamy(dnes);
    System.out.println();
    System.out.println("Zítra:\n------");
    LocalDateTime zitra = LocalDateTime.now().plusDays(1);
    vypisZaznamy(zitra);
    System.out.println();
}
```


Soubor `Poznamkovac.java`
-------------------------

Můžeme vítězoslavně přejít do hlavního souboru `Poznamkovac.java` a vytvořit instanci diáře. Zde umístíme také hlavní cyklus programu s menu programu a reakcí na volbu uživatele. Je to ta nejvyšší vrstva programu:

```
Scanner scanner = new Scanner(System.in);
Diar diar = new Diar();
String volba = "";

while (!volba.equals("4")) {
    diar.vypisUvodniObrazovku();
    System.out.println();
    System.out.println("Vyberte si akci:");
    System.out.println("1 - Přidat záznam");
    System.out.println("2 - Vyhledat záznamy");
    System.out.println("3 - Vymazat záznam");
    System.out.println("4 - Konec");
    volba = scanner.nextLine();
    System.out.println();
    
    switch (volba) {
        case "1":
            diar.pridejZaznam();
            break;
        case "2":
            diar.vyhledejZaznamy();
            break;
        case "3":
            diar.vymazZaznamy();
            break;
        case "4":
            
            break;
        default:
            System.out.println("Neplatná volba, stiskněte libovolnou klávesu a opakujte volbu.");
            break;
    }
}
```


Kód výše není složitý a již jsme tu podobný měli mockrát. Nezapomeneme přidat ještě import pro `Scanner`:

```
import java.util.Scanner;
```


Výslednou aplikaci jsem na vyzkoušení půjčil přítelkyni, níže vidíme výsledek 🙂:

```
Konzolová aplikace
Vítejte v diáři!
Dnes je: 13.4.2023 20:22

Dnes:
-----
13.4.2023 10:00 Shopping - Arkády Pankrác
13.4.2023 19:30 Vyvenčit mého yorkšírka Dennyho

Zítra:
------
14.4.2023 14:00 Power plate

Vyberte si akci:
1 - Přidat záznam
2 - Vyhledat záznamy
3 - Vymazat záznam
4 - Konec
2
Zadejte datum ve tvaru [13.4.2023]:
15.4.2023
Nalezeny tyto záznamy:
15.4.2023 9:30 Zkouška - Ekonomika cestovního ruchu
```


Tímto jsme si kolekci `ArrayList` osvojili a bude nám poměrně dlouho stačit. Na závěr bych dodal, že takto si můžete udělat databázi čehokoli. Můžete použít např. třídu `Student` z lekce [Gettery a settery v Javě](https://www.itnetwork.cz/java/oop/java-tutorial-vlastnosti-gettery-settery) nebo kteroukoli jinou třídu. Můžete ukládat články, úlohy, slony, cokoli, co chcete v databázi spravovat. A co dál?

V příští lekci, [Rozhraní (interface) v Javě](https://www.itnetwork.cz/java/oop/java-tutorial-interface-rozhrani), si vysvětlíme, co je to rozhraní.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 17 - Rozhraní (interface) v Javě
V minulé lekci, [Diář s databází v Javě - Metody diáře, výjimky a final](https://www.itnetwork.cz/java/oop/java-tutorial-diar-arraylist-dokonceni), jsme se podívali na metody třídy `Diar`, krátce koukli na výjimky a klíčové slovo final.

Dnes to bude opět trochu teoretické, objevíme další taje objektově orientovaného programování, uvedeme si totiž rozhraní.

Rozhraní
--------

Rozhraním objektu se myslí to, jak je objekt viditelný zvenku. Již víme, že objekt obsahuje nějaké metody, ty mohou být privátní nebo veřejné. Rozhraní objektu tvoří právě jeho veřejné metody, je to způsob, jakým s určitým typem objektu můžeme komunikovat. Již jsme několikrát mohli vidět jaké veřejné metody naše třída nabízí, např. u našeho bojovníka do arény. Třída `Bojovnik` měla následující veřejné metody:

*   `void utoc(Bojovnik souper)`
*   `void branSe(int uder)`
*   `boolean jeZivy()`
*   `void nastavZpravu(String zprava)`
*   `String vratPosledniZpravu()`
*   `String grafickyZivot()`

Pokud si do nějaké proměnné uložíme instanci bojovníka, můžeme na ni volat metody jako `utoc()` nebo `branSe()`. To pořád není nic nového, že?

My si však rozhraní můžeme deklarovat zvlášť a to podobným způsobem jako třeba třídu. Toto rozhraní poté použijeme jako datový typ.

Vše si vyzkoušíme, ale na něčem jednodušším, než je bojovník. Vytvořme si nový projekt a nazvěme ho `Rozhrani`. Přidáme si nějakou jednoduchou třídu. Protože by se dle mého názoru měla teorie vysvětlovat na něčem odlehčujícím, uděláme si třídu ptáka. Bude umět pípat, dýchat a klovat. Přidejme si třídu `Ptak`, bude vypadat takto:

```
public class Ptak {

    public void pipni() {
        System.out.println("♫ ♫ ♫");
    }

    public void dychej() {
        System.out.println("Dýchám...");
    }

    public void klovni() {
        System.out.println("Klov, klov!");
    }
}
```


Třída je opravdu triviální. Přejděme do hlavního souboru `Rozhrani.java` s metodou `main()` a vytvořme si instanci ptáka:

```
Ptak ptak = new Ptak();
```


Nyní napíšeme `ptak.` a necháme IDE, aby nám zobrazilo metody na třídě (lze také vyvolat stiskem Ctrl + space):

*   ![Metody ptáka - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_ptak_metody.png)
    
*   ![Metody ptáka - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/ptak_metody.png)
    

Vidíme, co na ptákovi můžeme vše volat. Jsou tam samozřejmě ty 3 metody, co jsme ve třídě implementovali (plus další, které mají objekty v základu).

Nyní ptákovi vytvoříme rozhraní. Využijeme k tomu klíčového slova `interface` (česky rozhraní). Pojmenování rozhraní v Javě je poměrně věda, my se spokojíme s názvem `PtakInterface`:

*   Pravým tlačítkem klikneme na projekt, a klikneme na položku _New_ -> _Java Class_. V okně, které se otevře potom, přepneme `Class` na `Interface`:
    
    ![Nový interface v IntelliJ pro Javu - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_novy_interface.png)
    
*   Pravým tlačítkem klikneme na projekt, a klikneme na položku _New_ -> _Java Interface_:
    
    ![Nový interface v NetBeans pro Javu - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/novy_interface.png)
    

K projektu se nám přidá prázdný interface. Do něj přidáme **hlavičky metod**, které má dané rozhraní obsahovat. Samotnou implementaci (kód metod) se uvádí až ve třídě, která bude toto rozhraní implementovat. **Rozhraní vytváří pouze předpis metod**, co musí třída implementovat.

Do rozhraní `PtakInterface` tedy přidáme hlavičky metod, schválně jednu vynecháme a přidáme pouze metody pro pípání a dýchání:

```
public interface PtakInterface {
    void pipni();
    void dychej();
}
```


Modifikátor `public` neuvádíme, protože rozhraní obsahuje vždy pouze veřejné metody. Jjinak by to nemělo smysl, rozhraní udává, jak s objektem zvenku pracovat.

Vraťme se do `Rozhrani.java` a změňme řádek s proměnnou `ptak` tak, aby již nebyla typu `Ptak`, ale `PtakInterface`:

```
PtakInterface ptak = new Ptak();
```


Kódem výše říkáme, že v proměnné typu `PtakInterface` očekáváme objekt, který obsahuje ty metody, co jsou v rozhraní. IDE nám vyhubuje, protože třída `Ptak` zatím rozhraní `PtakInterface` neobsahuje, i když potřebné metody má, neví, že rozhraní poskytuje. Přesuneme se do třídy `Ptak` a nastavíme jí, že implementuje interface `PtakInterface`. Uděláme to klíčovým slovem `implements`:

```
public class Ptak implements PtakInterface {

```


Když se nyní vrátíme do souboru `Rozhrani.java`, řádek s proměnnou typu `PtakInterface` je již v pořádku, třída `Ptak` korektně implementuje rozhraní `PtakInterface` a její instance může být do proměnné tohoto typu uložena.

Zkusme nyní vymazat ze třídy `Ptak` nějakou metodu, kterou rozhraní udává, třeba `pipni()`. IDE nás upozorní, že implementace není kompletní. Vraťme ji zas zpět.

Opět přidáme řádek `ptak.` do metody `main()` v souboru `Rozhrani.java`, IDE nám nabídne následující metody:

*   ![Metody ptáka s rozhraním PtakInterface - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_ptak_interface_metody.png)
    
*   ![Metody ptáka s rozhraním PtakInterface - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/ptak_interface_metody.png)
    

Vidíme, že na instanci můžeme nyní volat pouze metody, které poskytuje rozhraní. To proto, že proměnná `ptak` je již typu `PtakInterface`, nikoli `Ptak`. Metoda `klovni()` úplně chybí.

K čemu je to dobré? Výhod a využití je více, na první jsme již přišli. Pomocí rozhraní dokážeme zjednodušit rozhraní nějakého složitého objektu a vystavit jen tu část, která se nám v tu dobu hodí.

Ještě dodám, že **nemůžeme vytvořit instanci z rozhraní**, tento kód nebude fungovat:

```

PtakInterface ptak = new PtakInterface();
```


Vícenásobná dědičnost
---------------------

Java (stejně jako většina jazyků) nepodporuje vícenásobnou dědičnost. Nemůžeme tedy jednu třídu oddědit z několika jiných tříd. Je to hlavně z toho důvodu, že může vyvstat problém kolize názvů metod v různých třídách, ze kterých dědíme. Vícenásobná dědičnost se často obchází právě přes _interface_, protože **těch můžeme ve třídě implementovat kolik chceme**. Umožňuje nám to s instancí poté pracovat určitým způsobem a vůbec nás nezajímá, jakého typu objekt ve skutečnosti je a co všechno navíc obsahuje.

Přidejme si k projektu rozhraní `JesterInterface`. Bude to rozhraní ještěra. Ten bude umět také dýchat a ještě se plazit:

```
public interface JesterInterface {
    void plazSe();
    void dychej();
}
```


### Ptakoještěr

Vyzkoušejme si "vícenásobnou dědičnost", přesněji implementaci více rozhraní v jedné třídě. Udělejme si ptakoještěra. Přidejme k projektu třídu `PtakoJester`. Bude implementovat rozhraní `PtakInterface` a `JesterInterface`:

```
public class PtakoJester implements JesterInterface, PtakInterface {
}
```


*   Když nyní klikneme na ikonu žárovky, můžeme v kontextovém menu zvolit možnost _Implement methods_. IntelliJ nám automaticky do třídy vygeneruje potřebné metody:
    
    ![Automatická implementace rozhraní v IntelliJ - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_implementace_interface.png)
    
*   Když nyní klikneme na ikonu žárovky, můžeme v kontextovém menu zvolit možnost _Implement all abstract methods_. NetBeans nám automaticky do třídy vygeneruje potřebné metody:
    
    ![Automatická implementace rozhraní v NetBeans - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/implementace_interface.png)
    

Po implementaci obou rozhraní může vypadat kód třídy takto (závisí na použitém IDE):

```
public class PtakoJester implements JesterInterface, PtakInterface {

    @Override
    public void plazSe() {
        throw new UnsupportedOperationException("Not supported yet.");
    }

    @Override
    public void dychej() {
        throw new UnsupportedOperationException("Not supported yet.");
    }

    @Override
    public void pipni() {
        throw new UnsupportedOperationException("Not supported yet.");
    }
}
```


Všimněte si, že IDE přidalo notaci `@Override` k metodám, které implementují rozhraní. Je to tak přehlednější a klíčové slovo `@Override` si připíšeme i k metodám `pipni()` a `dychej()` v třídě `Ptak`.

Metody v třídě `PtakoJester` doimplementujeme:

```
@Override
public void plazSe() {
    System.out.println("Plazím se...");
}

@Override
public void dychej() {
    System.out.println("Dýchám...");
}

@Override
public void pipni() {
    System.out.println("♫ ♫♫ ♫ ♫ ♫♫");
}
```


Přesuňme se do `Rozhrani.java` a vytvořme si instanci ptakoještěra:

```
PtakoJester ptakojester = new PtakoJester();
```


Ujistěme se, že má metody jak ptáka, tak ještěra:

*   ![Metody ptáka a ještěra - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/intellij_ptakojester.png)
    
*   ![Metody ptáka a ještěra - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/java/ptakojester.png)
    

V příští lekci, [Přetypování a hierarchie objektů v Javě](https://www.itnetwork.cz/java/oop/java-se-tutorial-pretypovani-a-hierarchie-objektu), se naučíme další pokročilé techniky objektově orientovaného programování.

  

Měl jsi s čímkoli problém? Stáhni si vzorovou aplikaci níže a porovnej ji se svým projektem, chybu tak snadno najdeš.

# Lekce 18 - Přetypování a hierarchie objektů v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Přetypování a hierarchie objektů v Javě

V minulé lekci, [Rozhraní (interface) v Javě](https://www.itnetwork.cz/java/oop/java-tutorial-interface-rozhrani), jsme si uvedli interface a vytvořili ptakoještěra.

Dnes si řekneme něco o přetypování a odhalíme další taje objektově orientovaného programování.

Přetypování
-----------

Vraťme se tedy k našemu projektu z minula a kód metody `main()` změňme tak, abychom měli v proměnné `ptak` ptakoještěra uloženého v proměnné typu `PtakInterface`:

```
PtakInterface ptak = new PtakoJester();
```


Je nám to dovoleno, protože třída `PtakoJester` implementuje

  

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

> V tutoriálu si ukážeme jak v Javě přetypovat instanci na jiný datový typ a jak při tomto využít rozhraní (interface). Vytvoříme si hierarchii objektů.

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

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B39734%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522k4KrtOqewy%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Lekce 19 - Abstraktní třída, anonymní třída a porovnávání objektů
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Abstraktní třída, anonymní třída a porovnávání objektů

V předchozím kvízu, [Kvíz - Datum, list, rozhraní, přetypování v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-datum-list-rozhrani-pretypovani-v-jave-oop), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Dnes se podíváme na abstraktní třídu, porovnávání objektů a anonymní třídu. Budeme využívat stále minulý projekt `Rozhrani`.

Abstraktní třída
----------------

Abstraktní třída je třída, u které nemá smysl instance. Je to z toho důvodu, že je obecná (např. u nás třída `Zvire`). Zvíře bude vždy konkrétní (tedy nějaký potomek, např. `Pes`) a nikdy nebudeme chtít vytvořit pouze instanci třídy `Zvire`, proto je lepší instanciaci zakázat. Před třídu `Zvire` dodáme jednoduše modifikátor `abstract`:

```
public abstract class Zvire {
    
```


Program funguje stále stejně, ale pokud se pokusíme vytvořit instanci třídy `Zvire`, dostaneme vyhubováno:

```

zvirata.add(new Zvire());
```


Abstraktní třída umí kromě zakázání instanciace ještě něco navíc

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Před koupí tohoto článku je třeba **[koupit předchozí díl](https://www.itnetwork.cz/java/oop/java-se-tutorial-pretypovani-a-hierarchie-objektu)**

Obsah článku spadá pod licenci [Premium](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Tutoriál vysvětlí abstraktní třídy v Javě. Řekneme si více o rozhraních, implementujeme vlastní porovnávání pomocí Comparable a vytvoříme anonymní třídy.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Řešené úlohy k 17.-19. lekci OOP v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Řešené úlohy k 17.-19. lekci OOP v Javě

V minulé lekci, [Abstraktní třída, anonymní třída a porovnávání objektů](https://www.itnetwork.cz/java/oop/java-se-tutorial-abstraktni-trida-comparable-anonymni-trida), jsme si uvedli abstraktní třídu a naučili se definovat vlastní porovnávání prvků pomocí rozhraní `Comparable`.

Následující 3 cvičení vám pomohou procvičit znalosti programování v Javě z minulých lekcí. Ve vlastním zájmu se je pokuste vyřešit sami. Pod článkem máte pro kontrolu řešení ke stažení. Ale pozor, jakmile se na něj podíváte bez vyřešení příkladů, ztrácí pro vás cvičení smysl a nic se nenaučíte ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

Pokud si opravdu nebudete vědět rady, podívejte se raději znovu do minulých tutoriálů a pokuste se na to přijít.

Jednoduchý příklad
------------------

Představte si, že programujete internetový obchod. Vytvořte aplikaci, ve které budou figurovat:

*   **zákazníci**
*   **adresy**

  

...konec náhledu článku...  
**Pokračuj dál**

**Znalosti v hodnotě stovek tisíc získáš za pár korun**

Došel jsi až sem a to je super! Věříme, že ti první lekce ukázaly něco nového a užitečného.  
Chceš v kurzu pokračovat? Přejdi do **prémiové sekce**.

### Koupit tento kurz

Obsah článku spadá pod licenci [Premium II](https://www.itnetwork.cz/licence), koupí článku souhlasíš se [smluvními podmínkami](https://www.itnetwork.cz/pravidla-serveru).

**Co od nás v dalších lekcích dostaneš?**

*   Neomezený a **trvalý přístup** k jednotlivým lekcím.
*   **Kvalitní znalosti** v oblasti IT.
*   Dovednosti, které ti pomohou získat vysněnou a **dobře placenou práci**.

### Popis článku

Požadovaný článek má následující obsah:

> Řešené programátorské úlohy v Javě na téma rozhraní a abstraktní třída. Úlohy jsou řazené dle obtížnosti s řešením ke stažení.

[![Avatar](https://www.itnetwork.cz/images/avatars/6133_thumb.png?v=1499101225)](https://www.itnetwork.cz/portfolio/6133)

Autor se věnuje všem jazykům okolo JVM. Rád pomáhá lidem, kteří se zajímají o programování. Věří, že všichni mají šanci se naučit programovat, jen je potřeba prorazit tu bariéru, který se říká lenost.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 20 - Výčtové typy (enum) a konstanty v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Výčtové typy (enum) a konstanty v Javě

V předešlém cvičení, [Řešené úlohy k 17.-19. lekci OOP v Javě](https://www.itnetwork.cz/java/oop/cviceni-k-17-19-lekci-oop-v-jave), jsme si procvičili nabyté zkušenosti z předchozích lekcí.

V této lekci se podíváme na výčtové typy, konstanty

Výčtové typy
------------

V programech se nám často stává, že nějaká proměnná může nabývat několika přednastavených hodnot. Příkladem může být stav objednávky v internetovém obchodě. Objednávka může být nová, přijatá, potvrzená nebo dokončená. Žádného jiného stavu nabývat nemůže. Podobným příkladem jsou např. dny v týdnu, pracovní pozice a

  

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

> V tutoriálu se naučíme deklarovat výčtové typy (enum) v Javě, ukážeme si jak používat jejich konstruktor a skončíme konstantami.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 21 - Equals a Clone v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Equals a Clone v Javě

V minulé lekci, [Výčtové typy (enum) a konstanty v Javě](https://www.itnetwork.cz/java/oop/java-se-tutorial-vyctove-typy-enum-a-konstanty), jsme probrali výčtové typy a konstanty.

Dnes se v **tutoriálu Java OOP** podíváme na metodu `equals()` a klonování.

Metoda `equals()`
-----------------

S porovnáváním objektů souvisí metoda `equals()`. Víme, že se s její pomocí porovnávají textové řetězce (proměnné typu `String`). Operátor `==` funguje u primitivních typů, jako je např. `int` nebo `double` tak, jak bychom očekávali. Když se však pokusíme pomocí operátoru `==` porovnat dva objekty, bude navrácena hodnota `true` pouze v případě, když se jedná o **reference na jeden a ten samý objekt**. Pokud si založíme dva textové řetězce a do každého dáme ten samý text, jsou to stále dva rozdílné objekty. Sice mají stejné hodnoty, ale nejsou stejné. Matoucí může být, že Java kompilátor

  

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

> V tutoriálu si v Javě přetížíme metodu equals tak, aby uměla porovnávat objekty podle jejich vnitřního stavu. Dále si vysvětlíme klonování.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 22 - OOP v Javě naposledy - Boxing, balíčky a doplnění
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) OOP v Javě naposledy - Boxing, balíčky a doplnění

V minulé lekci, [Equals a Clone v Javě](https://www.itnetwork.cz/java/oop/java-se-tutorial-equals-a-clone), jsme si vysvětlili metody `equals()` a `clone()`.

V této lekci se podíváme na boxing a unboxing, metodu s proměnným počtem parametrů, systém balíčku a vnořené třídy.

Zabalení, vybalení a nullovatelné typy
--------------------------------------

Již známe rozdíly mezi primitivními a referenčními typy. Občas se nám hodí pracovat s primitivním typem jako s referenčním. Proto se používá tzv. boxing (zabalení), kde do obecného předka třídy `Object` zabalíme primitivní typ. V praxi to vypadá takto:

```
int a = 10;
Object zabalenyInt = a;
```


S proměnnou `zabalenyInt` nyní pracujeme tak, jako by v ní byl typ referenční. Dále může nabývat hodnoty `null`. Obyčejný `int` by se jen kopíroval bez jakékoli závislosti.

Podobně proměnnou můžeme vybalit, hovoříme o tzv. unboxingu. Neuděláme nic jiného, než že

  

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

> V této lekci na OOP v Javě si ukážeme boxing a unboxing, metodu s proměnným počtem parametrů, systém balíčku a vnořené třídy.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 23 - Nejčastější chyby Java nováčků - Umíš pojmenovat objekty?
V minulé lekci, [OOP v Javě naposledy - Boxing, balíčky a doplnění](https://www.itnetwork.cz/java/oop/java-se-tutorial-boxing-balicky-doplneni), jsme se zabývali balíčky a dalšími OOP konstrukcemi.

V dnešním Java tutoriálu si ukážeme první **dobré praktiky** pro objektově orientované programování v Javě. Podívej se, jestli neděláš **jednu z nejčastějších chyb**.

Slovo senior programátora
-------------------------

![David Čápka - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/marketing/fotky/me.jpg)

Gratuluji ke zdolání základní problematiky objektově orientovaného programování! 🏆 Dostal jsi se k záchytnému bodu, ve kterém se trochu vydýcháme a ukážeme si, **jak správně použít nabyté informace, než se pustíme do dalších**. Materiál pro dnešní lekci jsem sestavil na základě 20letých zkušeností s programováním a její obsah bude mít zásadní vliv na **tvé ohodnocení na trhu práce**.

Milionové ztráty
----------------

O dobrých praktikách jsme se již bavili v kurzu [Základní konstrukce jazyka Java](https://www.itnetwork.cz/java/zaklady) a víme, že **nepřehledné programy nejsou vůbec žádná malichernost**. Jsou totiž:

*   **Nesrozumitelné pro ostatní** - Když tým 5 programátorů, každý s platem 100.000 Kč měsíčně, stráví 20 % pracovní doby luštěním kódu, stojí to ročně **1.2 milionu Kč!**
*   **Náchylné k chybám** - Tržby i malých e-shopů jsou měsíčně obvykle v milionech korun, **1 den nefunkčnosti tedy stojí majitele stovky tisíc Kč**, dodavateli hrozí nemalé **smluvní pokuty**.
*   **Prakticky nerozšiřitelné** - Ve stávající funkčnosti se už nikdo nevyzná a nelze ji rozšířit. Programátorský tým o několika lidech musí vytvořit aplikaci znovu, jsme opět v **milionech Kč**.
*   **Netestovatelné**, **nezabezpečené** a takto bychom mohli pokračovat.

Není pochyb, že **dobré praktiky jsou pro vývoj softwaru v týmu naprosto zásadní** a následky jejich **porušení** potom naprosto **fatální**.

Jak správně pojmenovávat třídy, atributy a metody?
--------------------------------------------------

Umíme vytvářet spoustu nových objektových konstrukcí, v programech nám **vzniká množství nových identifikátorů** (jmen). V dnešní lekci se budeme zabývat tím, jak "objektové součástky" našich aplikací správně pojmenovat, aby byly přehledné.

### Motivační příklad

K doktorovi přijde pacient a říká mu, že má problém se svým orgánem `Presouvat`. Nefunguje mu `bota`. Pacient se zdá být nějaký popletený a doktorovi trvá poměrně dlouho, než z něj dostane, že ho píchá v patě a proto si nemůže nazout ani botu. Když konečně vypustí pacienta z ordinace, zjistí, že byl součástí skupiny a takových jich tam ještě čeká několik desítek.

![Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/navrh/doctor.svg)

Podívejme se ještě na druhý příběh. Programátorovi přidělí program, který spadne s chybou ve třídě `PresouvatData`, metoda `data()`. Program se zdá být nějaký popletený a programátorovi trvá dlouho, než zjistí, že se jedná o třídu importující data z externí zálohy a že se prvně musí ručně zavolat metoda `pracuj()`, která import provede. Když chybu konečně opraví, objeví se další a zjistí, že v programu je několik desítek tříd a metod, z jejichž názvu vůbec nepozná, co dělají.

Určitě vidíme paralelu těchto dvou příběhů. Zatímco u lidského těla by nás asi těžko napadlo hovořit o orgánu "přesouvat" a funkci "bota", v programech bohužel není takový problém narazit na objekty pojmenované jako děje a funkce pojmenované jako věci, i když je princip úplně stejný. Není divu, že si Indescriptive naming vysloužilo své místo v šestici nejhorších programátorských praktik [STUPID](https://www.itnetwork.cz/navrh/best-practices-pro-vyvoj-softwaru/stupid-spatne-praktiky-vyvoje-softwaru).

### Pojmenování tříd

**Třídy** definují **objekty**, ze kterých je aplikace složená. Z toho vyplývá několik triviálních pravidel. **Názvy tříd**:

*   **jsou podstatná jména!** - Jedná se o **jednotlivé počitatelné objekty** bez ohledu na to, kolik objektů od třídy potom vytvoříme.
*   **nejsou názvy dějů** - Jde o objekty (věci). Třídy tedy nemůžeme nazvat např. `PraceSeSouborem` nebo `Vypisovani`, ale např. `SpravceSouboru` nebo `Vypisovac` (nebo ještě lépe `UzivatelskeRozhrani`, protože zřídka kdy tvoříme celou třídu jen na vypsání něčeho).
*   začínají **s velkým písmenem** - Každé další slovo má velké písmeno (notace) `PascalCase`. Je tak vidět, že jde o obecnou třídu a ne o její konkrétní instanci.
*   jsou **pojmenované podle toho, jakou součást programu reprezentují**, což nemusí být vždy stejné, jako to, co uvnitř dělají.

Ukažme si několik příkladů:

✗ Špatně

```
class zamestnanec {
class Zamestnanci {
class Polozkafaktury {
class PraceSeSouborem {
class Vytiskni {
class ZadavaniUdaju {
```


**✔ Správně**

```
class Zamestnanec {
class SpravceZamestnancu {
class PolozkaFaktury {
class SouborovaDatabaze {
class UzivatelskeRozhrani {
```


Pokud narazíte na program, kde se třída jmenuje `PraceSeSouborem`, jeho autor si pravděpodobně jen vygooglil, že kód se píše do `class`, aniž by tušil, že tím založil nějaký objekt.

#### Třídy v množném čísle

**V množném čísle pojmenováváme třídy velmi zřídka**. V Javě takto nalezneme např. třídu `Arrays`. Od té nevytváříme instance a používáme ji jen pro práci s instancemi třídy `Array`, tedy s poli. Pole setřídíme např. jako:

```
Arrays.sort(zamestnanci);
```


Osobně by mi mnohem větší smysl dávalo, aby tyto metody měla na sobě přímo třída `Array` a psali jsme tedy:

```
zamestnanci.sort()
```


Autoři Javy pravděpodobně nechtěli třídu `Array` příliš složitou a tak pro některé metody vytvořili tuto druhou třídu. Výsledný přínos je diskutabilní. My třídy v množném čísle většinou deklarovat nebudeme.

#### Pojmenování tříd v angličtině

Základní kurzy jsou na ITnetwork česky, aby byly lépe stravitelné. Kódy těch pokročilých jsou stejně jako reálné obchodní aplikace anglicky. Pro anglické názvy tříd platí samozřejmě to samé, co jsme řekli výše. Můžeme ovšem snadno udělat následující chyby:

*   **Jednotná čísla** - Když v češtině pojmenujeme třídu pracující s auty `SpravceAut`, mohl by se nabízet anglický překlad `CarsManager`. Správně je ovšem `CarManager`, **jednotné číslo**, protože `Car` zde funguje jako přídavné jméno.
*   **Pořadí slov** - Na rozdíl od češtiny je podstatné jméno na konci sousloví, správce aut tedy není `ManagerCars` nebo `ManageCars`, ale `CarManager`. Cesta k souboru není `PathFile` (což by byl cestový soubor), ale `FilePath` apod.

V angličtině se u tříd často používá koncovka `-er`, např. `TaskRunner`, podle toho, co třída dělá.

Ukažme si pár příkladů:

✗ Špatně

```
class CarsManager {
class PathFile {
class RunTasks {
```


**✔ Správně**

```
class CarManager {
class FilePath {
class TaskRunner {
```


### Pojmenování atributů

Atributy jsou **"proměnné" dané třídy**. Pro jejich pojmenování tedy platí úplně ty samé zásady jako pro proměnné, které si již detailně vysvětlovali v lekci [Nejčastější chyby Java nováčků - Umíš pojmenovat proměnné?](https://www.itnetwork.cz/java/zaklady/nejcastejsi-chyby-java-novacku-umis-pojmenovat-promenne).

Základním pravidlem opět je, že **atributy pojmenováváme podle toho, co je v nich uloženo**. Název atributu chápeme **v kontextu názvu třídy a nemusí tedy dávat smysl sám o sobě**. Z jazykového hlediska jsou názvy atributů:

*   **podstatná jména** (`jmeno`, `zamestnanci`, ...)
*   **přídavná jména** (`vypnuty`, `odeslano`, ...)

Připomeňme si zde i zbylé zásady:

*   všechny atributy pojmenováváme buď **česky bez diakritiky nebo anglicky**, ale **ne kombinací** těchto jazyků
*   víceslovné atributy pojmenováváme pomocí notace `camelCase`
*   pokud atribut obsahuje kolekci s více hodnotami (např. pole nebo `List`), je jeho název v **množném čísle**

Ukažme si opět nějaké příklady názvů atributů tříd:

✗ Špatně

```
private String Jmeno;
private boolean odeslat;
private String[] telefonnicislo;
private JButton tlačítko;
private Address[] uzivatelAddress;
```


**✔ Správně**

```
private String jmeno;
private boolean odeslano;
private String[] telefonniCisla;
private JButton tlacitko;
private Address[] adresyUzivatele;
```


### Pojmenování metod a parametrů

Metody označují **děje**, jejich **název** obsahuje tedy **sloveso**! Může se jednat o:

*   **přikazovací tvar** (`nacti()`, `nastavId()`) - Metoda převážně provádí nějakou činnost a její výsledek může nebo nemusí vracet. Nevolíme infinitiv, např. `nacitat()`.
*   **tázací tvar** - Metodou se převážně ptáme na nějakou hodnotu, než abychom chtěli provést nějakou akci (česky např. `vratJmeno()` nebo `jeVypnuty()` pro proměnné typu `boolean`, anglicky např. `getRank()`. Již víme, že takovým metodám říkáme gettery.

Metody pojmenováváme podle toho, co dělají! Vyhýbáme se neurčitým názvům jako `pracuj()`, `akce()`, `run()` apod.

Ukažme si příklady:

✗ Špatně

```
public void vypisovani(Zakaznik zakaznik) {
public boolean vratZapnuty() {
private void data() {
public void pracuj() {
```


**✔ Správně**

```
public void vypis(Zakaznik zakaznik) {
public boolean jeZapnuty() {
private void vygenerujData() {
public void importujZalohu() {
```


#### Parametry metod

Parametr metody je **proměnná** a proto pro jejich název **platí ta samá pravidla, jako pro proměnné** a atributy (například nikdy nepojmenujeme parametr `param` ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) ). Je tu ovšem jedna důležitá věc na uvážení a to je **použití dvojí negace**. Ukažme si poslední příklad:

✗ Špatně

```
public void importujData(boolean zakazatCiziKlice) {

importujData(false);
```


**✔ Správně**

```
public void importujData(boolean povolitCiziKlice) {

importujData(false);
```


Kdo z vás na první dobrou dokáže říci, jestli jsou v první variantě s předáním hodnoty `false` klíče povoleny? Vše je zas o lidském mozku, který není zvyklý fungovat pod dvojí negací. Volíme tedy spíše druhou variantu.

V příští lekci, [Jak správně rozdělit Java aplikace do tříd - SRP a SoC](https://www.itnetwork.cz/java/oop/jak-spravne-rozdelit-java-aplikace-do-trid-srp-a-soc), si vysvětlíme dobré praktiky SRP (Single Responsibility Principle) a SoC (Separation of Concerns). Nakousneme také téma závislostí.

# Lekce 24 - Jak správně rozdělit Java aplikace do tříd - SRP a SoC
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Jak správně rozdělit Java aplikace do tříd - SRP a SoC

V minulé lekci, [Nejčastější chyby Java nováčků - Umíš pojmenovat objekty?](https://www.itnetwork.cz/java/oop/nejcastejsi-chyby-java-novacku-umis-pojmenovat-objekty), jsme si ukázali nejčastější chyby začátečníků v Javě ohledně pojmenování tříd, metod a atributů.

V dnešním Java tutoriálu se naučíme další [dobré praktiky](https://www.itnetwork.cz/navrh/best-practices-pro-vyvoj-softwaru), pomocí kterých snadno rozdělíme své aplikace do tříd tak, aby byly přehledné a třídy byly znovupoužitelné.

Slovo senior programátora
-------------------------

Dnešní lekci jsem pro vás sestavil na základě 20 let praxe. Obsahuje ty nejdůležitější praktiky pro **strukturu objektových aplikací**, jejichž dodržováním **výrazně zvýšíte kvalitu svého výstupu a svou cenu na trhu práce**.

![David Čápka - Objektově orientované programování v Javě](https://www.itnetwork.cz/images/5/marketing/fotky/me.jpg)

Rozdělení aplikace do tříd
--------------------------

Jak jsme si již říkali, OOP je převážně o tom, jak svou aplikaci "rozdrobíme" na různé třídy. Za tímto účelem existuje nespočet pouček. Pro nás budou ty nejdůležitější:

  

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

> V Java tutoriálu si vysvětlíme dobré praktiky SRP (Single Responsibility Principle) a SoC (Separation of Concerns). Nakousneme také téma závislostí.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Lekce 25 - Nejčastější chyby a dobré praktiky pro tvorbu metod v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Nejčastější chyby a dobré praktiky pro tvorbu metod v Javě

V minulé lekci, [Jak správně rozdělit Java aplikace do tříd - SRP a SoC](https://www.itnetwork.cz/java/oop/jak-spravne-rozdelit-java-aplikace-do-trid-srp-a-soc), jsme si vysvětlili dobré praktiky SRP (Single Responsibility Principle) a SoC (Separation of Concerns). Nakousli jsme také téma závislostí.

V tomto Java tutoriálu si ukážeme nejčastější chyby, které začátečníci dělají při deklarování metod. Zmíníme také dobré praktiky a návrhový vzor Method chaining.

Slovo senior programátora
-------------------------

Gratuluji k pokroku v OOP kurzu! Ke kariéře programátorů vám ještě několik kurzů zbývá, nicméně **to nejtěžší máte už za sebou ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)** V dnešní lekci jsem pro vás opět připravil ty nejdůležitější chyby, které za 20 let, co se programováním zabývám, vídám stále dokola v projektech zde na síti a také v kódech juniorů u nás ve firmě. Vyvarování se těchto chyb vám pomůže k **vyššímu ohodnocení na trhu práce**.

![David Čápka](https://www.itnetwork.cz/images/5/marketing/fotky/me.jpg)

Nejčastější chyby při deklarování metod
---------------------------------------

Funkcionalitu našich aplikací umíme rozdělovat do metod. S tím souvisí několik chyb, které dělají snad všichni začátečníci, i když se jim dá snadno vyhnout.

### Hodnoty raději vracíme, než vypisujeme

Pokud třída nereprezentuje přímo uživatelské rozhraní, je lepší, když její metody výsledky své činnosti **nevypisují, ale vracejí**. Hodnota se tak dá použít na více místech aplikace, **kde ji třeba nechceme vypsat, ale nějak s ní dále pracovat** (např. ji porovnat s jinou hodnotou):

✗ Špatně

```
public void pozdrav() {
    System.out.printf("Ahoj %s %s!", jmeno, prijmeni);
}
```


**✔ Správně**

```
public String vratPozdrav() {
    return String.format("Ahoj %s %s!", jmeno, prijmeni);
}
```


Zatímco

  

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

> V Java tutoriálu si ukážeme nejčastější chyby a dobré praktiky pro tvorbu metod v Javě. Vyzkoušíme si také návrhový vzor Method chaining.

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

[Přihlásit se](https://www.facebook.com/v3.3/dialog/oauth?client_id=772154049506593&state=%257B%250A%2B%2B%2B%2B%2522c%2522%253A%2B40058%252C%250A%2B%2B%2B%2B%2522r%2522%253A%2B%2522NJEXoPkijD%2522%250A%257D&response_type=code&sdk=php-sdk-5.7.0&redirect_uri=https%3A%2F%2Fwww.itnetwork.cz%2Fprihlaseni&scope=email)

### Přes itnetwork.cz účet

Email

Heslo

Používám veřejný počítač

**Zapomněl jsi heslo?** [Vygenerujeme ti nové.](https://www.itnetwork.cz/prihlaseni/request-password-reset)

**Jsi tu prvně?** [Přejdi k registraci.](https://www.itnetwork.cz/registrace)

[Aktivity](https://www.itnetwork.cz/aktivita/article/prihlaseni)

# Lekce 26 - Reflexe v Javě
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Reflexe v Javě

V předchozím kvízu, [Kvíz - Abstraktní třída, enum, boxing a klonování v Javě OOP](https://www.itnetwork.cz/java/oop/kviz-abstraktni-trida-enum-boxing-a-klonovani-v-jave-oop), jsme si ověřili nabyté zkušenosti z předchozích lekcí.

Ještě než opustíme OOP sekci, chtěl bych vás seznámit s pokročilou technikou - Reflexí.

Reflexe
-------

Reflexe je nástroj, pomocí kterého lze zjistit za běhu programu informace o nějaké třídě nebo instanci, přistoupit k jejím atributům a v neposlední řadě měnit hodnoty těchto atributů.

### K čemu je to dobré?

Díky reflexi můžeme např. vytvořit instanci třídy, jejíž název nám někde přišel jako `String` a před spuštěním programu tedy nevíme, jakou instanci zde budeme vytvářet. To se může hodit např. při parsování nějakých textových souborů, o kterých předem nevíme, co obsahují. Možná jste již někdy použili bezduchá větvení typu:

```
if (atribut == "jmeno") {
     uzivatel.jmeno = hodnota;
} else if (atribut == "prijmeni") {
     uzivatel.prijmeni = hodnota;
}
```


Reflexe nám v této situaci umožní sáhnout na atribut podle jeho názvu předaném jako `String` a objektu, kterému má patřit.

Reflexe je ovšem ale ještě mocnější nástroj, který může ve špatných rukou nadělat velkou paseku. Na konci dnešní lekce si ukážeme, jak pomocí ní lze modifikovat `private` atributy zvenčí. Ouch ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png) Reflexe je také relativně náročná na paměť, proto byste tuto techniku měli využívat jen minimálně a v krajních případech, kde dává smysl. Můžeme ji použít např. při již zmíněném parsování, nikdo nemá rád kilometrové konstrukce `switch` ![:)](https://www.itnetwork.cz/images/img/smileys/happy.png)

`class`
-------

Než se pustíme do praxe, je třeba trocha teorie. Seznámíme se nejdříve s metodami, pomocí kterých můžeme s třídami manipulovat. K metodám pro reflexi se dostaneme přes třídu, kterou

  

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

> V Java tutoriálu se seznámíme se základními principy reflexe. Podíváme se na základní metody pro přístup k atributům třídy.

[![Avatar](https://www.itnetwork.cz/images/avatars/2527_thumb.png?v=1662095271)](https://www.itnetwork.cz/portfolio/2527)

Autor se věnuje primárně programování v Javě, ale nebojí se ani webových technologií.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

# Učební pomůcka na OOP v Javě - Tahák
[Java](https://www.itnetwork.cz/java) [Objektově orientované programování](https://www.itnetwork.cz/java/oop) Učební pomůcka na OOP v Javě - Tahák

V minulé lekci, [Reflexe v Javě](https://www.itnetwork.cz/java/oop/reflexe-v-jave), jsme se dozvěděli, co je to reflexe.

Stále si nemůžete zapamatovat nejdůležitější pojmy a ztrácíte se ve vašich zápiscích? Ve spolupráci s našimi lektory prezenčních školení jsme pro vás vytvořili vymazlený tahák, který se vejde na **1 oboustrannou A4**. Právě toto množství informací se nám v praxi prokázalo jako ideální pro udržení pojmů jednoho tématického okruhu v hlavě. Pomůže vám uložit si tu **nejdůležitější syntaxi objektově orientovaného programování v Javě** a stane se vaším nepostradatelným pomocníkem při výuce i praxi.

Tahák má celkem 3 strany a pojímá následující problematiku:

*   Třída
    *   Atributy
    *   Metody
*   Konstruktor
*   Gettery a Settery (Vlastnosti)
*   Dědičnost
*   Modifikátory přístupu
*   Převod na text
*   Statika
*   Konstanty
*   Rozhraní
*   Abstraktní třída
*   Výčtové typy
*   Balíčky

Náhled strany 1/3:

![Tahák objektově orientovaného programování v Javě](https://www.itnetwork.cz/images/5/java/java_tahak_oop.png)

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

> Vymazlený tahák na jednu oboustrannou A4. Zapamatujte si snadno nejdůležitější syntaxi objektově orientovaného programování v Javě.

[![Avatar](https://www.itnetwork.cz/images/avatars/5_thumb.png?v=1682337941)](https://www.itnetwork.cz/portfolio/5)

David je zakladatelem ITnetwork a programování se profesionálně věnuje 15 let. Má rád Nirvanu, nemovitosti a svobodu podnikání.

![Unicorn university](https://www.itnetwork.cz/images/ucl_big.png) David se informační technologie naučil na [Unicorn University](https://unicornuniversity.net/) - prestižní soukromé vysoké škole IT a ekonomie.

* * *

Copyright © 2024 itnetwork.cz. Veškerý obsah webu (pokud není uvedeno jinak) je zakázáno kopírovat.

![Tahák](https://github.com/bedjan/itpoznamky/blob/5e10fb38f9b1e764c67fdff3b5df7aa1e59a72d5/java_tahak_oop.png)



