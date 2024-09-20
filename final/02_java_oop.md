# Objektově orientované programování

### Evoluce metodik

- strojový kód - soubor instrukci bez možnosti pojmenování

- nestrukturované paradigma - podobný assemblerům, soubor instrukcí, který se vykonává odshora dolů ( umožňoval skákat v programu přes GOTO )

- strukturované programování - první programování pomocí cyklů a větvení

- objektově orientovaný přístup - znovupoužitelnost, poskládání programu z komponent

- výhoda komponenty jsou otestovány a fungují, program se dá lépe opravit

- píšeme program z pohledu uživatele, ne stroje

- objekt - je základní jednotka ( např. člověk )

- atributy - vlastnosti

- metody - schopnosti ( skill )

- třída - vzor a soubor příkazů, podle kterého se objekty vytváří

- instance - objekt vytvořený podle třídy a má stejné rozhraní jako třída

### OOP pílíře:

- **zapouzdření = enkapsulace** - umožňuje skrýt některé metody a atributy, tak aby zůstali použitelné jen pro třídu zevnitř - rozhraní (interface) třídy rozdělí na veřejně přístupné ( public ) a vnitřní ( private) 

- **dědičnost** - mohou třídy zdědit atributy a chování od předem existujících tříd

- **polymorfismus** - jednomu objektu volat jednu metodu s různými parametry


### Program:

**Zdravic.java**

``` 
package cz.itnetwork;

/** Třída reprezentuje zdravič, který slouží ke zdravení uživatelů */
class Zdravic
{
    /** Text pozdravu */

    public String text;

    /**
     * Pozdraví uživatele ze souboru HelloObjects.java a to textem pozdravu a jeho jménem
     * @param  jmeno  Jméno uživatele
     * @return      Text s pozdravem
     */

    public String pozdrav(String jmeno)
    {
        return String.format("%s %s", text, jmeno);
    }

}

``` 


**HelloObjects.java**


``` 
package cz.itnetwork;

public class HelloObjects {

    public static void main(String[] args) {
        Zdravic zdravic = new Zdravic();
        zdravic.text = "Ahoj uživateli";
        System.out.println(zdravic.pozdrav("Karel"));
        System.out.println(zdravic.pozdrav("Petr"));
        zdravic.text = "Vítám tě tu programátore";
        System.out.println(zdravic.pozdrav("Richard"));
    }
}

``` 

> U metody pozdrav() nám to vygenerovalo klíčové slovo
@param, za ním hned název parametru jmeno. To
značí, že následující popisek bude patřit parametru jmeno
(popisek může pokračovat i na dalším řádku pro větší přehlednost).
Metoda může mít totiž více parametrů a tím se zajistí, že bude mít
každý parametr vlastní popisek. Dále nám IDE vygenerovalo ještě
klíčové slovo @return, to značí popisek toho, co nám metoda
vrátí.

### 1.OopKalkulacka.java

``` 
package cz.itnetwork;

import java.util.Scanner;

public class OopKalkulacka {

    public static void main(String[] args) {
        // Vytvoření instance
        Kalkulacka kalkulacka = new Kalkulacka();
        // Načtení atributů
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej 1. číslo: ");
        kalkulacka.a = Double.parseDouble(scanner.nextLine());
        System.out.println("Zadej 2. číslo: ");
        kalkulacka.b = Double.parseDouble(scanner.nextLine());
        System.out.println("Součet: " + kalkulacka.secti());
        System.out.println("Rozdíl: " + kalkulacka.odecti());
        System.out.println("Součin: " + kalkulacka.vynasob());
        System.out.println("Podíl: " + kalkulacka.vydel());
    }
}

``` 

### 2. Kalkulacka.java

``` 
package cz.itnetwork;


/**
 * Třída reprezentuje kalkulačku, které se zadají 2 čísla a ona
 * s nimi provádí základní aritmetické operace.
 */
public class Kalkulacka {
        
    /**
     * 1. číslo
     */
    public double a;
    /**
     * 2. číslo
     */
    public double b;

    /**
     * Vrací součet atributů
     * @return Součet
     */
    public double secti()
    {
        return a + b;
    }
    
    /**
     * Vrací rozdíl atributů
     * @return Rozdíl
     */
    public double odecti()
    {
        return a - b;
    }
    
    /**
     * Vrací součin atributů
     * @return Součin
     */
    public double vynasob()
    {
        return a * b;
    }
    
    /**
     * Vrací podíl atributů
     * @return Podíl
     */
    public double vydel()
    {
        return a / b;
    }
}

``` 

### Naklad.java

``` 
package cz.itnetwork;

public class Naklad {

    public static void main(String[] args) {
        NakladniAuto tatra = new NakladniAuto();
        // přesahuje maximální nosnost, nenaloží náklad
        tatra.naloz(10000);
        // naloží náklad 500 kg, naloženo 500 kg
        tatra.naloz(500);
        // vyloží náklad 300 kg, naloženo 200 kg (500-200)
        tatra.vyloz(300);
        // nevyloží náklad, přesahuje právě naloženou hmotnost (má 200 kg)
        tatra.vyloz(1000);
        tatra.vypisNaklad();
    }
}

``` 


### NakladniAuto.java



``` 
package cz.itnetwork;


/**
 * Reprezentuje nákladní auto
 */
public class NakladniAuto {
    /**
     * Nosnost nákladního auta
     */
    public int nosnost = 3000;
    /**
     * Hmotnost nákladu
     */
    public int hmotnostNakladu = 0;

    /**
     * Pokusí se naložit náklad o dané hmotnosti
     * @param hmotnost Hmotnost nakládaného nákladu
     */
    public void naloz(int hmotnost) {
        if (hmotnostNakladu + hmotnost <= nosnost) {
            hmotnostNakladu += hmotnost; // ekvivalentní zápis je: hmotnostNakladu = hmotnostNakladu + hmotnost
        }
    }

    /**
     * Pokusí se vyložit náklad o dané hmotnosti
     * @param hmotnost Hmotnost vykládaného nákladu
     */
    public void vyloz(int hmotnost) {
        if (hmotnost <= hmotnostNakladu) {
            hmotnostNakladu -= hmotnost; // ekvivalentní zápis je: hmotnostNakladu = hmotnostNakladu - hmotnost
        }
    }

    /**
     * Vypíše, kolik kg je naloženo
     */
    public void vypisNaklad() {
        System.out.printf("V nákladním autě je naloženo %d kg%n", hmotnostNakladu);
    }
}


``` 

### Kamaradi.java

``` 
package cz.itnetwork;

public class Kamaradi {

    public static void main(String[] args) {
        // Vytvoření lidí
        Clovek karel = new Clovek();
        karel.jmeno = "Karel Novák";
        karel.vek = 33;
        Clovek cyril = new Clovek();
        cyril.jmeno = "Cyril Nový";
        cyril.vek = 27;
        // Spřátelení
        karel.kamarad = cyril;
        cyril.kamarad = karel;
        // Představení
        karel.predstavSe();
        cyril.predstavSe();
    }
}

``` 

### Clovek.java

``` 
package cz.itnetwork;

/**
 * Reprezentuje člověka
 */
public class Clovek {

    /**
     * Celé jméno
     */
    public String jmeno;

    /**
     * Věk
     */
    public int vek;

    /**
     * Kamarád
     */
    public Clovek kamarad;

    /**
     * Vypíše text, ve kterém se človek představí
     */
    public void predstavSe() {
        System.out.printf("Ahoj, já jsem %s, je mi %d let a můj kamarád je %s%n", jmeno, vek, kamarad.jmeno);
    }
}

``` 


### Zapouzdření 

- místo public dá private

### Konstruktory

- metoda, která se zavolá ve chvíli vytvoření instance
objektu

``` 

Kostka kostka = new Kostka();

Kostka(); = je konstruktor

``` 

- Deklaruje
se jako metoda, ale nemá návratový typ a musí mít
stejný název jako je název třídy (začíná tedy, na
rozdíl od ostatních metod, velkým písmenem)

### Náhodná čísla 

- **nextInt()** - Varianta bez parametru vrací náhodné číslo v
	celém rozsahu datového typu int, pro úplnost tedy konkrétně od
	-2147483648 do 2147483647.

 - **nextInt(do)** - Vrací nezáporná čísla
	menší než mez do. Například random.nextInt(100)
	tedy vrátí číslo od 0 do 99.

### toString()

- tuto metodu obsahuje každý objekt

- vrací textovou
reprezentaci instance

- nikdy bychom si neměli dělat vlastní metodu

- Metodu toString() již nedefinujeme, ale protože
již existuje, musíme ji přepsat, resp. překrýt. Tím se
opět nebudeme nyní podrobně zabývat, nicméně chci, abychom již teď
uměli metodu toString() používat. Pro přehledné překrytí
označíme metodu anotací @Overrid


### Referenční a primitivní datové typy	

- primitivní typy - jednoduché struktury , např. jedno číslo, jeden znak. 

- většinou chceme, aby jsme s nimi pracovali co nejrychleji, v programu jich je mnoho, a zabírají velmi málo místa - zásobník ( stack ), mají pevnou velikost, např. int, float, double, char, boolean

-  objekt (proměnná referenčního datového typu) se již
neukládá do zásobníku, ale do paměti zvané halda. Je to z
toho důvodu, že objekt je zpravidla složitější než
primitivní datový typ (většinou obsahuje hned několik dalších atributů)
a také zabírá více místa v paměti.

- Zásobník i halda se nacházejí v paměti RAM. Rozdíl je v přístupu a
velikosti. Halda je prakticky neomezená paměť, ke které je však přístup
složitější a tím pádem pomalejší. Naopak zásobník je paměť rychlá,
ale velikostně omezená.


- Proměnné referenčního typu jsou v paměti uloženy vlastně
nadvakrát, jednou v zásobníku a jednou v haldě. V zásobníku je
uložena pouze tzv. reference, tedy odkaz do haldy, kde se
poté nalézá opravdový objekt.

### Proč je to tak udělané?: 

Můžete se ptát, proč je to takto udělané. Důvodů je hned několik,
pojďme si některé vyjmenovat: místo ve stacku je omezené; když budeme chtít použít objekt vícekrát (např. ho předat jako parametr do několika metod), nemusíme ho v programu předávat jako kopii; předáme pouze malý primitivní typ s referencí na objekt místo toho, abychom obecně paměťově náročný objekt kopírovali. Toto si vzápětí	ukážeme; pomocí referencí můžeme jednoduše vytvářet struktury s dynamickou velikostí, např. struktury podobné poli, do kterých můžeme za běhu	vkládat nové prvky. Ty jsou na sebe navzájem odkazovány referencemi, jako řetěz objektů.

### Garbage ( koš ) collector a dynamická správa paměti

- dynamická správa paměti - na hodnoty jsme se uživatele zeptali až za běhu

- když nějaký objekt přestaneme používat, musíme po něm místo uvolnit


### Hodnota null 

- reference neukazuje na žádná data ( josef na null zrušíme pouze tu jednu referenci ) 

## Řešené příklady

#### PesOsoba.java

``` 
package cz.itnetwork;


public class PesOsoba {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Osoba karel = new Osoba("Karel Novák");
        Osoba lenka = new Osoba("Lenka Nováková");
        Pes azor = new Pes("Azor");
        karel.pes = azor;
        lenka.pes = azor;
        System.out.println(azor);
        // Zestárnutí psa
        karel.pes.zestarni();
        lenka.pes.zestarni();
        // Kontrolní výpis psa
        System.out.println(azor);
    }
}
``` 

#### Osoba.java

``` 
package cz.itnetwork;


/**
 * Reprezentuje osobu
 * @author itnetwork.cz
 */
public class Osoba {
    /**
     * Celé jméno
     */
    public String jmeno;
    /**
     * Pes osoby
     */
    public Pes pes;
    
    /**
     * Inicializuje instanci
     * @param jmeno Celé jméno
     */
    public Osoba(String jmeno)
    {
        this.jmeno = jmeno;
    }
}

``` 


#### Pes.java

``` 
package cz.itnetwork;


/**
 * Reprezentuje psa
 * @author itnetwork.cz
 */
public class Pes {
    /**
     * Jméno
     */
    private String jmeno;
    /**
     * Věk
     */
    private int vek = 1;
    
    /**
     * Inicializuje instanci
     * @param jmeno Jméno
     */
    public Pes(String jmeno)
    {
        this.jmeno = jmeno;
    }
    
    /**
     * Nechá psa zestárnout o rok
     */
    public void zestarni()
    {
        vek++;
    }
    
    /**
     * Vrátí textovou reprezentaci psa
     * @return Textová reprezentace psa
     */
    @Override
    public String toString()
    {
        return jmeno + " (" + vek + " let)";
    }
}

``` 

### Atributy ( vlastnosti )

- vlastnosti prvků

### Metody

- pro atributy vytvoříme konstruktor 

### Dědičnost a polymorfismus


- dědičnost nám umožní vytvářet podtypy jednotlivých tříd, zatímco pomocí polymorfismu dosáhneme volání vždy toho správného objektu

- **zapouzdření** - je přes funkci private

- **dědičnost** - dědí minulé datové struktury

- **polymorfismus** - umožňuje používat jednotné
rozhraní pro práci s různými typy objektů


### Modifikátor přistupu

**public** - všichni mají spřístup

**private** - přístup má jen daná třída 

**protected** - přístup má daná třída a potomci třídy

### Konstruktor potomka

- Java nedědí konstruktory! Je to pravděpodobně z toho
důvodu, že předpokládá, že potomek bude mít navíc nějaké atributy a
původní konstruktor by u něj byl na škodu

- u potomků je nutné vždy volat konstruktor předka

- V Javě existuje klíčové slovo super, které je podobné
námi již známému this. Na rozdíl od klíčového slova
this, které odkazuje na konkrétní instanci třídy,
super odkazuje na předka

### Polymorfismus a přepisování metod

- @Override - pro přepsání


### Statické (třídní) atributy 

- obecně bych doporučoval statiku vůbec
nepoužívat, pokud si nejste naprosto jisti, co děláte

-  statické prvky patří třídě, nikoli
instanci. Data v nich uložená tedy můžeme číst bez ohledu na to, zda
nějaká instance existuje. V podstatě můžeme říci, že statické atributy
jsou společné pro všechny instance třídy, ale není to přesné, protože s
instancemi doopravdy vůbec nesouvisí

- údaj uložíme do statického atributu
pomocí modifikátoru static


### Statické metody


- statické metody se volají na třídě. Jedná se zejména o
pomocné metody, které potřebujeme často používat a nevyplatí se nám tvořit instanci

- Pozor! Díky tomu, že metoda
zvalidujHeslo() náleží třídě, nemůžeme v ní přistupovat k
žádným instančním atributům. Tyto atributy totiž neexistují v
kontextu třídy, ale instance. Ptát se na atribut jmeno by v
naší metodě nemělo smysl! Můžete si zkusit, že to opravdu nejde.

### Privátní konstruktor

- Pokud se nám vyskytne třída, která obsahuje jen pomocné
metody nebo nemá smysl od ni tvořit instance (např.
nikdy nebudeme mít 2 konzole), hovoříme o ni někdy jako o statické
třídě. Java přímo neumožňuje přímo označit třídu jako statickou, ale
tvoření její instance zakážeme pomocí implementace privátního
konstruktoru. Takovouto třídu poté nelze
instanciovat (vytvořit její instanci). Statická třída, se kterou
jsme se setkali, je např. již zmíněná třída Math

### Gettery a settery 

- budeme chtít atribut nastavit jako
read-only (pouze pro čtení) nebo reagovat na jeho změny.

- get a set pro přístup a aktualizaci hodnoty private proměnné

``` 

public class Person {
  private String name; // private = restricted access

  // Getter
  public String getName() {
    return name;
  }

  // Setter
  public void setName(String newName) {
    this.name = newName;
  }
}

``` 

### ArrayList ( generická kolekce )

- při deklaraci kolekce ArrayList specifikujeme datový
typ objektů, které v něm budou uloženy

- Narážíme na třídu Integer, která slouží k uložení
celých čísel a v podstatě obaluje datový typ int

- K setřídění kolekce
ArrayList použijeme metodu sort() ze třídy
Collections, která list setřídí. Bude tedy potřeba importovat
java.util.Collections. Metoda nic nevrací, pouze
ArrayList setřídí uvnitř

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

- Přesuňme se do metody main() a pomocí cyklu
while umožněme uživateli ovládat objekt, budeme načítat pomocí metody
scanner.nextLine() jako String a importovat třídu Scanner a konstrukce switch

### Konstruktory

- Kromě prázdného ArrayListu můžeme List vytvořit i
jako kopii z jiného listu, pole nebo jiné kolekce. Stačí kolekci předat do
konstruktoru


``` 


package onlineapp;

import java.util.Scanner;



import java.util.ArrayList;
import java.util.Arrays;

public class Program
{
 	public static void main(String[] args) {

        String[] retezce = {"První", "Druhá", "Třetí"};
        ArrayList<String> polozky = new ArrayList<String>(Arrays.asList(retezce));
        System.out.println(polozky.get(2));
	}
}

``` 


### Metody na třídě
ArrayList 

Ukážeme si pár důležitých metod, které můžeme volat na třídě
ArrayList:


	**size()** - Funguje jako metoda length() na poli,
	vrací počet prvků v kolekci.

	**add(položka)** - Metodu add() jsme si již
	vyzkoušeli, jako parametr bere položku, kterou vloží do listu.

	**addAll(kolekce)** - Přidá do listu více položek, např. z
	pole.

	**clear()** - Odstraní všechny položky v listu.

	**contains(položka)** - Vrací hodnoty true nebo
	false podle toho, zda ArrayList obsahuje předanou
	položku.

	**indexOf(položka)** - Vrátí index prvního výskytu položky
	(jako u pole). Vrací hodnotu -1 při neúspěchu.

	**lastIndexOf(položka)** - Vrací index posledního výskytu
	položky v listu. Vrací hodnotu -1 při neúspěchu.

	**remove(index**) - Odstraní položku na daném indexu.

	**removeAll(kolekce)** - Odstraní všechny položky v listu
	(podobná jako metoda clear(), ale pomalejší - dělá další
	kroky navíc)

	**toArray()** - Zkopíruje položky z ArrayListu do pole a
	to vrátí.


