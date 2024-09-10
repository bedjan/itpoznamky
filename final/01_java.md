# Java Jazyk

### Generace jazyků

- **Strojový** - nečitelné
- **Assembler** - lépe čitelný
- **3 generace** - dobře čitelné, čísla jako proměnné
- **virtuální stroj** - odstranili nevýhody předchozích - jsou vidět chyby zdrojového kódu

### Java verze
- **SE** - Standart edice - tuto používáme 
- **EE** - Enterprise - pro velké webové aplikace
- **ME** - Micro - v simkartách, pračkách, udajně na 9 miliardách zařízení

### Aplikace
- **IntelliJ IDEA** a Eclipse Temurin( verze Java )
- **Dropbox** - úložiště s verzemi souborů

### Metoda MAIN ( hlavní)

``` 
 public static void main(String[] args) {

}
```

- v Intellij napsat main a zmáčknout Tab klavesů


### Výpis do konzole

```
System.out.println("Text který se zobrazí");
```

- v Intellij napsat sout a pak klávesu Tab

( ```System``` je třída, ```out``` je výstup, println() vypisuje text )

- uvozovky se píší přes klávesu Shift a  ů 
- znak ```;``` je pod Esc klávesou

### Proměnné

-  místo v paměti počítače, kam si
můžeme uložit nějaká data
- má vždy nějaký datový typ který se musí deklarovat  - tzn. číslo, znak, text,...

### Typový systém 

- **statický** - striktně definovaný
- **dynamický** - nemusí být striktně definovaný  

### Základní datové typy

- **int** - celá čísla
- **double** - desetinná čísla
- **String** - textový řetězec


### Program vypisující proměnnou

```

package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int a;
a = 56;
System.out.println(a);
	}
}

```

### Deklarace proměnné

- nadeklaruje novou proměnnou a datového
typu int

### Inicializace proměnné

- provádí přiřazení do proměnné, k čemuž slouží
operátor "rovná se"

### Desetinná proměnná


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

double a;
a = 56.6;
System.out.println(a);
	}
}

```

### Načítání hodnot z konzole a parsování v Javě	
- Pokud budete potřebovat v kterémkoli ze svých
programů načíst text z konzole, je nutné program takto upravit a přidat
instanci třídy Scanner



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

### Spojování řetězců

```
String vstup;
vstup = scanner.nextLine();
String vstup = scanner.nextLine();
```

### Program Zdvojnásobovač

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo k zdvojnásobení:");
String hodnota = scanner.nextLine();
int cislo = Integer.parseInt(hodnota);
cislo = cislo * 2;
System.out.println(cislo);
	}
}
```

### Parsování
-  převod z textové podoby na nějaký specifický typ,
např. číslo


```
String hodnota = "56";
int cislo = Integer.parseInt(hodnota);
```

### pozor nextInt nepoužívat

> Na skeneru existuje i metoda **nextInt()**, u které
by se mohlo na první pohled zdát, že nám vrátí již naparsované číslo,
a tedy i ušetří práci. Ve skutečnosti tato metoda bohužel **ponechá ve
vstupu znak Enteru**, kterým uživatel číslo potvrdil. Tento znak tam zůstane
tak dlouho, dokud jej nenačtete z konzole spolu s dalším textem. To může
způsobit neočekávané problémy ve vašich programech. **Proto** ke čtení z
konzole **vždy používejte metodu**  **nextLine()**.


### Metoda String.valueOf()


```
zavoláme li metodu String.valueOf() a jako
parametr jí dáme naši proměnnou. Java to v tomto případě udělala za
nás, v podstatě vykoná:

System.out.println("Součet: " + String.valueOf(soucet));

```


### Kalkulačka

```

package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
}

```

### Gates

```
package cz.itnetwork.vlastnosti;

import java.util.Scanner;

public class Vlastnosti {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Ahoj, jak se jmenuješ?");
        String jmeno = scanner.nextLine();
        System.out.println("Jaký jsi?");
        String vlastnost = scanner.nextLine();
        System.out.println(jmeno + " je " + vlastnost);
    }
}

```

### Druhá mocnina


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

       
        // Zde dokonči úlohu svým kódem...
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej číslo k umocnění: ");
        String sc = scanner.nextLine();
        int cislo = Integer.parseInt(sc);
        cislo = cislo * cislo;
        System.out.println("Výsledek: " + cislo);
	}
}
```

### Obvod a obsah kruhu

```

package onlineapp;

import java.util.Scanner;

public class Program
{
     public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej poloměr kruhu (cm): ");
        double r = Double.parseDouble(scanner.nextLine());
        double o = 2 * 3.1415 * r;
        double s = 3.1415 * r * r;
        System.out.println("Obvod zadaného kruhu je: " + o + " cm");
        System.out.println("Jeho obsah je: " + s + " cm^2");
    }
}

```

### Primitivní datové typy v Javě		        	
#### Datové typy

1) **primitivní** - např. číslo nebo znak. V paměti je jednoduše uložena
přímo hodnota a my k této hodnotě můžeme z programu přímo přistupovat.

- *celá čísla* - byte ( velikost 8 bitů ), short ( 16 bitů ), int ( 32 bitů ), long ( 64 bitů )

- *desetinná čísla* různě přesná - float, double 

```
float f = 3.14F;
double d = 2.72;
```


### pozor presnost u float a double
> desetinná čísla jsou v
počítači uložena ve dvojkové soustavě, dochází k určité ztrátě
přesnosti. , proto  když budete
programovat např. finanční systém, nepoužívejte tyto dat. typy pro
uchování peněz, mohlo by dojít k malým odchylkám.


- **char** ( U+0000 až U+ffff ) - 16 bitů

```
char znak = 'A';
```
- BigDecimal - řeší problém ukládání desetinných čísel
v binární podobě, ukládá totiž číslo vnitřně jako pole, používá se tedy pro uchování peněžních hodnot

- další třídy k výpočtům s vysokou přesností - BigDecimal, BigInteger, AtomicInteger, AtomicLong

```
```

- **boolean** ( pravda, nebo nepravda - tedy True vs. false ) - 8 bitů

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

boolean nepravda = false;
boolean vyraz = (15 > 5);
System.out.println(nepravda);
System.out.println(vyraz);
	}
}

```

2) **referenční** - Referenční typy
začínají na rozdíl od typů primitivních velkým písmenem

**String** ( řetězec )

String s metodami:

**startsWith()** - začíná řetězec textem?

**endsWith()** - končí řetězec textem? 

**contains()** - obsahuje řetězec text?

**isEmpty()** - je řetězec prázdný?

**toUpperCase()** - vracejí řetězec ve velkých  písmenech


**toLowerCase()** - vracejí řetězec v malých písmenech

**trim()** - odstraňují se vždy bílé znaky kolem řetězce, ne
uvnitř

**replace()** - nahrazení
určité části retězce jiným textem

**format()** - umožňuje vkládat do samotného textového řetězce zástupné značky ( 

*zástupné značky jsou:* 
**%d** pro celá čísla,

**%s** pro String,

**%f** pro float nebo double (reálná
	čísla).
**%.2f** pro dvě desetinná místa



```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int a = 10;
int b = 20;
int soucet = a + b;
String veta = String.format("Když sečteme %d a %d, dostaneme %d", a, b, soucet);
System.out.println(veta);
	}
}
```

### pozor printf() a desetinné čárky 

> Metoda printf() bere v potaz lokalizaci systému
a může namísto desetinné tečky vypsat desetinnou čárku. Dejte si tedy
pozor na to, že očekávaný výstup desetinných čísel na různých
platformách (v jazycích) nemusí být úplně totožný.

**lenght()** - délka řetezce vrátí celé číslo

### Kristus

```
import java.util.Scanner;

public class Program
{
public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej jméno: ");
        String jmeno = scanner.nextLine();

        System.out.println("Zadej příjmení: ");
        String prijmeni = scanner.nextLine();

        System.out.println("Zadej svůj věk: ");
         int vek = Integer.parseInt(scanner.nextLine());
        vek = vek + 1;
        System.out.println(jmeno.toUpperCase() + " " + prijmeni.toUpperCase());
        
        
        System.out.printf("Za rok ti bude %d let.", vek);
        
	}
}
```



### 2 slova

```
package onlineapp;

import java.util.Scanner;

public class Program
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadejte delší slovo: ");
        String delsiSlovo = scanner.nextLine().trim();
        System.out.println("Zadejte kratší slovo: ");
        String kratsiSlovo = scanner.nextLine().trim();
        int rozdil = delsiSlovo.length() - kratsiSlovo.length();
        System.out.printf("Slova se liší délkou o %d znaků", rozdil);
    }
}
```

### obsahuje slovo itnetwork

```
package onlineapp;

import java.util.Scanner;

public class Program
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej řetězec: ");
        String vstup = scanner.nextLine().toUpperCase();
        boolean obsahuje = vstup.contains("ITNETWORK");
        System.out.println(obsahuje);        
    }
}
```

### Podmínky (větvení) v Javě

**if** ( když ) - 


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

if (15 > 5) {
    System.out.println("Pravda");
}
System.out.println("Program zde pokračuje dál");
	}
}

```


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo");
int cislo = Integer.parseInt(scanner.nextLine());
if (cislo > 5) {
    System.out.println("Zadal jsi číslo větší než 5!");
}
System.out.println("Děkuji za zadání");
	}
}
```


### Relační operátory 

rovnost ==
ostře větší >
ostře menší <
větší nebo rovno >=
menší nebo rovno <=
nerovnost !=
becná negace !

### Blok příkazů

- vykonání více než jednoho příkazu


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);
System.out.println("Zadej nějaké číslo, ze kterého spočítám odmocninu:");
int zaklad = Integer.parseInt(scanner.nextLine());
if (zaklad >= 0) {
    System.out.println("Zadal jsi číslo větší nebo rovno 0, to znamená, že ho mohu odmocnit!");
    double odmocnina = Math.sqrt(zaklad);
    System.out.println("Odmocnina z čísla " + zaklad + " je " + odmocnina);
}
System.out.println("Děkuji za zadání");
	}
}

```


### else - neboli jinak  


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
}

```


### Prohození hodnot proměnné

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int cislo = 0; // do proměnné si přiřadíme na začátku 0

if (cislo == 0) { // pokud je cislo 0, dáme do něj jedničku
    cislo = 1;
}
else { // pokud je cislo 1, dáme do něj nulu
    cislo = 0;
}

System.out.println(cislo);
	}
}
```

### Switch - přepínač


**Skládání podmínek** && - a zároveň, || - nebo


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

Scanner scanner = new Scanner(System.in);
System.out.println("Zadejte číslo v rozmezí 10-20 nebo 30-40:");
int cislo = Integer.parseInt(scanner.nextLine());
if (((cislo >= 10) && (cislo <= 20)) || ((cislo >= 30) && (cislo <= 40))) {
    System.out.println("Zadal jsi správně");
} else {
    System.out.println("Zadal jsi špatně");
}
	}
}
```

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
}

```


### Délka jména

```
package onlineapp;

import java.util.Scanner;

public class Program
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej své jméno: ");
        String jmeno = scanner.nextLine();
        if ((jmeno.length() >= 3) && (jmeno.length() <= 10)) {
            System.out.println("Normální jméno.");
        } else {
            System.out.println("Máš moc krátké nebo moc dlouhé jméno!");
        }
    }
}
```

### Smajlík


```
package onlineapp;

import java.util.Scanner;

public class Program
{
   public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej smajlíka: ");
        String smajlik = scanner.nextLine();
        //* Odstranění bílých znaků a převod na velká písmena
        smajlik = smajlik.trim().toUpperCase();
        //* Odstranění nosu, neboli pomlcky
        smajlik = smajlik.replace("-", "");
        System.out.print("Tvůj smajlík je ");
        switch (smajlik) {
            case ":)":
                System.out.println("veselý");
                break;
            case ":(":
                System.out.println("smutný");
                break;
            case ":*":
                System.out.println("zamilovaný");
                break;
            case ":P":
                System.out.println("s vyplazeným jazykem");
                break;
            default:
                System.out.println("neznámý");
                break;
        }
    }
}

```

### Kvadratická rovnice

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 
public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadejte postupně koeficienty a,b,c kvadratické rovnice ax^2+bx+c=0 : ");
        double a = Double.parseDouble(scanner.nextLine());
        double b = Double.parseDouble(scanner.nextLine());
        double c = Double.parseDouble(scanner.nextLine());

        if (a != 0) {
            // výpočet diskriminantu
            double diskriminant = b * b - 4 * a * c;
            if (diskriminant < 0) {
                System.out.println("Neexistuje řešení v oblasti reálných čísel");
            } else if (diskriminant == 0) {
                double koren = -b / (2 * a);
                System.out.printf("Rovnice má jeden kořen x = %f", koren);
            } else {
                double x1 = (-b + Math.sqrt(diskriminant)) / (2 * a);
                double x2 = (-b - Math.sqrt(diskriminant)) / (2 * a);
                System.out.printf("Rovnice má 2 reálné kořeny x1 = %f, x2 = %f", x1, x2);
            }
        } else {
            System.out.println("Není kvadratická rovnice"); // pro zjednodušení se komplexními kořeny nebudeme zabývat        
        }
    }
}

```

### For - pevný počet   opakování

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

for (int i = 0; i < 3; i++) {
    System.out.println("Knock");
}
System.out.println("Penny!");
	}
}
```


### Řada

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

for (int i = 1; i <= 10; i++) {
    System.out.printf("%d ", i);

for (int i = 1; i <= 10; i++) {
    System.out.print(i + " ");
}
	}
}

 # metoda printf()-  neodřádkuje, println - odřádkuje
```

### Malá násobilka pomocí cyklů


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println("Malá násobilka pomocí dvou cyklů:");
for (int j = 1; j <= 10; j++) {
    for (int i = 1; i <= 10; i++) {
        System.out.print((i * j) + " ");
    }
    System.out.println();
}
	}
}
```

### Mocnina čísla

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
}

```

### while - dokud platí podmínka

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int i = 1;
while (i <= 10) {
    System.out.print(i + " ");
    i++;
}
	}
}
```

### Kalkulačka

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


### pozor equals 

-  proměnné datového typu String
porovnáváme pomocí metody equals(), nikoli pomocí operátoru
==! Je to dáno tím, že String je
referenční datový typ. Metoda equals() tedy v
našem případě zjistí, zda se proměnná pokracovat rovná
textovému řetězci ano.píšeme tedy 


```
 ("Text".equals("Text")). V kapitole o objektově
orientovaném programování pochopíme proč.

```


### Ryby

```
package onlineapp;

import java.util.Scanner;

public class Program
{
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Kolik ryb si dáš k večeři?");
        int pocet = Integer.parseInt(scanner.nextLine());
        for (int i = 0; i < pocet; i++) {
            System.out.println("<° )))-<");
            System.out.println();
        }
    }
}
```

### Lahve

```
package onlineapp;

import java.util.Scanner;

public class Program
{
     public static void main(String[] args) {
        for (int pocet = 10; pocet > 0; pocet--) {
            String tvar = "zelených láhví";
            if ((pocet > 1) && (pocet < 5)) {
                tvar = "zelené láhve";
            }
            if (pocet == 1) {
                tvar = "zelená láhev";
            }
            System.out.println(pocet + " " + tvar + " stojí na stole a jedna láhev spadne");
        }
    }
}

```

### Hody kostkou

```

package onlineapp;

import java.util.Scanner;

public class Program
{
    public static void main(String[] args) {
        System.out.println("Kombinace hodů dvěma šestistěnnými kostkami:");

        for (int i = 1; i <= 6; i++) {
            for (int j = 1; j <= 6; j++) {
                System.out.print("(" + i + ", " + j + ") ");
            }
        }
    }
}

```

### Pole - datová struktura pro proměnné stejného typu  ( přihrádky jsou očíslované indexy )

**výhody** - jednoduchost, rychlost, všechny prvky zabírají stejné místo

**lengt** - konstanta délky pole

### Pole ukázka

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {


int[] cisla = new int[10];
for (int i = 0; i < 10; i++) {
    cisla[i] = i + 1;
}

for (int i = 0; i < cisla.length; i++) {
    System.out.print(cisla[i] + " ");
}
	}
}

```

### Forearch  - projede všechny prvky v poli a jeho délku si


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int[] cisla = new int[10];
for (int i = 0; i < 10; i++) {
    cisla[i] = i + 1;
}
for (int cislo : cisla) {
    System.out.print(cislo + " ");
}
	}
}


```

### Naplnění pole ručně

```
String[] simpsonovi = {"Homer", "Marge", "Bart", "Lisa", "Maggie"};
```

### Metody ve třídě arrays - práce s poly - vždy naimportovat

```
import java.util.Arrays;
```

**sort()** - seřazení

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


### binarySearch() - vždy musí být setříděné pole

- vrátí index prvního nalezeného prvku. V
případě nenalezení prvku vrátí metoda hodnotu -1. Metoda bere
dva parametry, prvním je pole, druhým hledaný prvek. 



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



### copyOfRange() - zkopíruje část pole do jiného pole 

- Prvním parametrem je zdrojové pole, druhým startovní pozice a
třetím konečná pozice. Metoda vrací nové pole, které je výsekem
původního pole


**proměnná délka pole**

```
Scanner scanner = new Scanner(System.in);

System.out.println("Ahoj, spočítám ti průměr známek. Kolik známek zadáš?");
int pocetZnamek = Integer.parseInt(scanner.nextLine());
int[] znamky = new int[pocetZnamek];
for (int i = 0; i < pocetZnamek; i++) {
        System.out.printf("Zadejte %d. číslo:%n", i + 1);
        znamky[i] = Integer.parseInt(scanner.nextLine());
}
// spočítání průměru
int soucet = 0;
for (int znamka : znamky) {
        soucet += znamka;
}
double prumer = soucet / (double)znamky.length;

System.out.printf("Průměr tvých známek je: %.1f", prumer);
```

### pozor u copyOfRange()

- Příkaz soucet += znamka je pouze zkrácený
zápis pro soucet = soucet + znamka.

- Při výpisu jsme použili výraz %n. Tento výraz
nám zajistí, ať máme nezávisle na platformě nový řádek. Na platformě
MacOS to například automaticky nahradí za znaky \r.
Alternativně můžeme využít například znaky \n, ale je
možné, že to na nějaké platformě nový řádek nevytvoří.

### pole 10-1

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int[] cisla = new int[10];
for (int i = 0; i < 10; i++ ) {
    cisla[i] = 10 - i;
}
for (int cislo : cisla) {
    System.out.print(cislo + " \n");
}
	}
}
```

### Ovoce a zelenina

```
package onlineapp;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;
import java.util.Scanner;


import java.util.Arrays;
public class Program
{
 public static void main(String[] args) {
        // Definování seznamů pro ovoce a zeleninu
        List<String> ovoce = new ArrayList<>(Arrays.asList("jablko", "hruška", "pomeranč", "jahoda", "banán", "kiwi", "malina"));
        List<String> zelenina = new ArrayList<>(Arrays.asList("zelí", "okurka", "rajče", "paprika", "ředkev", "mrkev", "brokolice"));
        
        // Počítadlo dotazů
        int pocetDotazu = 0;
        
        Scanner scanner = new Scanner(System.in);
        
        while (true) {
            // Zadání slova uživatelem
            System.out.print("Zadej název libovolného ovoce nebo zeleniny:\n");
            String slovo = scanner.nextLine().trim().toLowerCase();
            pocetDotazu++;
            
            // Určení, zda se jedná o ovoce nebo zeleninu
            if (ovoce.contains(slovo)) {
                System.out.println("Zadal jsi ovoce");
            } else if (zelenina.contains(slovo)) {
                System.out.println("Zadal jsi zeleninu");
            } else {
                System.out.println("Tvoje slovo nemám v seznamu");
            }
            
            // Dotaz na další slovo
            System.out.print("Přeješ si zadat další slovo? (ano/ne)\n");
            String dalsi = scanner.nextLine().trim().toLowerCase();
            if (!dalsi.equals("ano")) {
                break;
            }
        }
        
        // Výpis počtu dotazů
        System.out.println("Zadal jsi " + pocetDotazu + " slov");
        
        scanner.close();
    }
}

```


### Medián

```

package onlineapp;

import java.util.Scanner;


import java.util.Arrays;
public class Program
{
 	public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Zadej počet čísel: ");
        int pocet = Integer.parseInt(scanner.nextLine());
        int[] zadanaCisla = new int[pocet];
        for (int i = 0; i < pocet; i++) {
            System.out.printf("Zadej %d. číslo:%n", i + 1);
            zadanaCisla[i] = Integer.parseInt(scanner.nextLine());
        }int[] serazenaCisla = new int[zadanaCisla.length];
        for (int i = 0; i < zadanaCisla.length; i++) {
            serazenaCisla[i] = zadanaCisla[i];
        }
        Arrays.sort(serazenaCisla);

        float median = serazenaCisla[serazenaCisla.length / 2];
        for (int cislo : zadanaCisla) {
            System.out.printf("%d se od mediánu odchyluje o %f %n", cislo, cislo - median);
        }
    }
}

```

### pozor

- Proměnné vždy pojmenováváme podle toho,
co obsahují, nikoli podle toho, k čemu v
programu slouží.

- Proměnné v jednom projektu pojmenováváme jedním
jazykem. Pokud pojmenováváme česky, tak bez
diakritiky!

- Takto dlouhý název má ovšem smysl jen ve složité
aplikaci, kde je několik podobných proměnných, a proto musíme přidat
další slovo. V Hello world aplikaci tedy nebudeme vytvářet proměnnou
textSPozdravemHelloWorld, ale stačí nám jen
pozdrav, pokud tam jiný není

- Pokud se na kód podívá někdo jiný než my, měl by
přesně vědět, co v které proměnné je.


### Textový řetězec

- je v podstatě pole znaků
(char) 

- charAt(index) - přístup k
jednotlivým znakům

- index je pořadí znaků v řetězci od 0 

- indexOf(znak) - pro zjištění prvního výskytu zadaného znaku z indexu, pokud jej nenajde vrátí hodnotu -1


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

String jazyk = "Java";
System.out.println(jazyk);
System.out.println(jazyk.charAt(2));
	}
}

```


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

String jazyk = "Java";
System.out.println(jazyk);
System.out.println(jazyk.indexOf('v'));
	}
}


```


- **scanner.nextLine()** - řetězec budeme
projíždět cyklem po jednom znaku


```
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

}

```

```
// hlavní cyklus
for (char znak : hora.toCharArray()) {
    if (samohlasky.contains(String.valueOf(znak))) {
        pocetSamohlasek++;
    } else if (souhlasky.contains(String.valueOf(znak))) {
        pocetSouhlasek++;
    }
}


```

- V cyklu tedy na proměnnou hora zavoláme metodu **toCharArray()**, která vrátí plnohodnotné pole znaků z řetězce hora. V každé iteraci cyklu bude v proměnné znak aktuální znak řetězce hora.



}

- Daný znak c naší věty tedy nejprve zkusíme vyhledat v řetězci samohlasky a případně zvýšíme jejich počítadlo. Pokud znak v samohláskách není, podíváme se do souhlásek a případně opětovně zvýšíme jejich počítadlo. Nyní nám chybí již jen výpis na konec. V textu použijeme speciální sekvenci znaků %n (nebo \n), která způsobí odřádkování. Použitím sekvence %n (namísto \n) zajistíme cross-platform kompatibilitu.

```
	}
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {


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
	}
}


```

### ASCII hodnota 

- **Ascii tabulka** - dříve čísla typu byte 0-255 znaků ( tedy 265 znaků ), dnes Unicode UTF8 ( 2 na 31 znaků )

- např. na pozici 97 je znak a

```

package onlineapp;

import java.util.Scanner;

public class Program
{

 public static void main(String[] args) {
        System.out.println("ASCII tabulka");
        System.out.println("=============");
        for (int hodnotaAscii = 33; hodnotaAscii < 256; hodnotaAscii++) {
            char znak = (char) hodnotaAscii;
            System.out.println(hodnotaAscii + ":" + znak);
        }
    }
}

```

### Metody na řetězci

**substring()** - vrátí část řetezce dle počáteční a koncové pozice

```

package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println("Wolfgang Amadeus Mozart".substring(9, 16));
	}
}

```

### compareTo()

- porovnání řetězců

- Metoda vrací hodnotu
-1, je-li první řetězec abecedně před řetězcem v parametru,
hodnotu 0, jsou-li oba řetězce stejné, a hodnotu 1,
je-li první řetězec abecedně za řetězcem v parametru


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println("Argentina".compareTo("Barbados"));
	}
}
```

### split()

- která bere jako parametr separátor ( čárku, středník,... z CSV, XML ,.). Následně původní
řetězec rozdělí podle separátorů na pole podřetězců, které vrátí. To
nám velmi ulehčí práci při rozdělování hodnot v řetězci.


```
// rozbití řetězce na znaky morseovky
String[] znaky = sifrovanaZprava.split(" ");

// iterace znaky morseovky
for (String morseuvZnak : znaky) {

}

```


### join()

- volá přímo na typu String a
umožňuje nám naopak pole podřetězců spojit oddělovačem do jediného
řetězce. Parametry jsou oddělovač a pole. Výstupem metody je výsledný
řetězec.

### Vyhledání řetězce v poli

- Nejprve nastavíme index na -1, protože nevíme, zda pole daný
String (Morseův znak) obsahuje. Následně pole projedeme cyklem a
budeme kontrolovat jednotlivé řetězce s naším stringem (znakem). Již
víme, že k porovnání dvou řetězců musíme použít metodu
equals(). Pokud řetězce souhlasí, uložíme si aktuální
index. Pokud jsme znak našli (index >= 0), dosadíme do proměnné
abecedniZnak znak z abecedy pod tímto indexem. Nakonec znak
připojíme ke zprávě. Operátor += nahrazuje
zprava = zprava + abecedniZnak.

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {


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
	}
}

```

### Speciální znaky a escapování

- Textový řetězec může obsahovat speciální znaky, které jsou
předsazené zpětným lomítkem \. Je to zejména sekvence
\n, která kdekoli v textu způsobí odřádkování, a poté
\t, kdy se jedná o tabulátor. Sekvenci \n do kódu
často nepíšeme a využijeme raději formátový specifikátor
%n, který způsobí správné odřádkování na specifických
platformách.


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println("První řádka\nDruhá řádka");
	}
}
```

### Ternární výraz ( vzniklý ze 3 částí a více )

- **Vnořování ternárních
operátorů** - ternární operátory lze teoreticky zanořovat do sebe a tím reagovat i na
tři a více hodnot

- většinou kód znepřehlední

-  2 různé hodnoty
podle toho, zda platí nějaká podmínka ( boolean - true, false )

- Podmínku vložíme většinou do závorky (), poté následuje
otazník ? a 2 hodnoty, které se mají vrátit. Hodnoty jsou
oddělené dvojtečkou :, první hodnota plati se
vrátí, když podmínka platí. Druhá hodnota neplati, když
podmínka neplatí. 
Zdroj: https://www.itnetwork.cz/java/zaklady/podminky-v-jave-podruhe-ternarni-vyraz-propadavaci-switch

- (podminka) ? plati : neplati

```
(vek >= 18) ? "zletilý" : "nezletilý"
```

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

String smajlik = ":)"; // nějaká proměnná udávající smajlíka
String nalada = (smajlik.equals(":)")) ? "veselý" : (smajlik.equals(":(")) ? "smutný" : "neznámý";
System.out.println(nalada);
	}
}
```


### Propadávací switch - dnes se více použivají ternální operator

- pokud potřebujeme ve více blocích case provádět stejný kód,
stačí tyto bloky vložit pod sebe a neukončovat každý blok pomocí
příkazu break, ale celou skupinu bloku jedním příkazem
break. Neukončené bloky tak propadnou a vykoná se kód
společný pro více blok

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
}

```

> Pozor - Java podporuje propadávání jak prázdných
case, tak na rozdíl od jiných jazyků i case s
dalším kódem. To je častá příčina nechtěných chyb (zapomenutých
break) a velmi těžko se hledají.


### Vylepšená konstrukce switch

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

int mesic = 11;
switch (mesic) {
    case 1, 2, 3 -> System.out.println("Je první čtvrtletí.");
    case 4, 5, 6 -> System.out.println("Je druhé čtvrtletí.");
    case 7, 8, 9 -> System.out.println("Je třetí čtvrtletí.");
    case 10, 11, 12 -> System.out.println("Je čtvrté čtvrtletí.");
}
	}
}

```

### Cyklus do-while 

- Méně používaný, 
liší se od while pouze tím, že se vždy vykoná
nejméně jednou. Jeho podmínka je totiž umístěna až za tělem
cyklu


```
do {
    // kód
} while (podmínka);
```

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

### Break ( zlom)

- ukončuje aktuální cyklus.
Používá se nejčastěji v situaci, kdy pomocí cyklu nalezneme nějakou
položku v kolekci a dále již v jejím procházení nechceme pokračovat

> pozor - Příkaz **break** se v praxi často nahrazuje
příkazem **return** za předpokladu, že kód je v naší vlastní
metodě. Poté už příkaz break doporučujeme spíše
nepoužívat, správnější variantou je kód pro práci s kolekcí vyčlenit
do samostatné funkce.


### Continue

- používá se však k ukončení pouze aktuální iterace (průběhu) cyklu, a
nikoli celého cyklu. Cyklus poté rovnou přechází na
další iteraci. Příkaz continue často použijeme např.
při validování položek při procházení nějaké
kolekce


### Zkrácený for - nepoužívat!


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

for (int i = 0; i < 10; System.out.print(i++));
	}
}

```

### Nekonečný cyklus for a while - pozor

- Oba deklarované cykly běží donekonečna a můžete se s nimi
setkat ve špatně napsaných zdrojových kódech spolu s příkazy
break, které z nich potom za nějakých podmínek vyskakují.
Zdroj: https://www.itnetwork.cz/java/zaklady/cykly-v-jave-podruhe-do-while-break-a-continue

```

for (;;) {
    // nekonečný cyklus
}

while (true) {
    // nekonečný cyklus
}

```


### Matematické metody v Javě a knihovna Math

- konstanty pí a eulerovu konstantu

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println("Pí: " + Math.PI);
System.out.println("e: " + Math.E);
	}
}
```

### min(), max ()

- Obě metody berou jako parametr dvě čísla libovolného datového
typu. Metoda min() vrátí to menší, metoda max() to
větší z nich.

### round(), ceil(), floor() - zaokrouhlování čísel

- **round ()** - parametr desetinné číslo a vrací
zaokrouhlené číslo typu double

-  **ceil ()** - zaokrouhlí vždy nahoru

- **floor ()** - zaokrouhlí vždy dolů

### abs(), signum() 

- obě metody berou jako parametr číslo libovolného typu.
- metoda
abs() vrátí jeho absolutní hodnotu a signum()
vrátí podle znaménka -1, 0 nebo 1 (pro
záporné číslo, nulu a kladné číslo)

### sin(), cos() a
tan()

- goniometrické funkce, používají úhel typu double v radianech

- pro konverzi stupňů na radiány stupně vynásobíme (Math.PI/180), výstupem je opět double

### acos(),asin() a atan()

- cyklometrické metody - vrací daný úhel v double

### pow(), sqrt()

- mocnina a odmocnina v double

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println(Math.pow(2, 3));
	}
}

```

### exp(), log(), log10()

- exp() vrací Eulerovo číslo, umocněné na daný
exponent. Dále metoda log() vrací přirozený logaritmus daného
čísla. Metoda log10() vrací potom dekadický logaritmus daného
čísla

```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println(Math.pow(8, (1.0/3.0)));
	}
}

```

### Dělení

- lomítko /

> pozor - Přitom vůbec nezáleží na datovém typu proměnné, do které
výsledek ukládáme, ale na datovém typu čísel, které dělíme


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

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
	}
} 

```

### modulo ( % ) - zbytek po celočíselném dělení


```
package onlineapp;

import java.util.Scanner;

public class Program
{
 	public static void main(String[] args) {

System.out.println(5 % 2); // Vypíše 1
	}
}

```

### Nejčastější chyby programátorů a jejich řešení

- **Kolekce** vždy pojmenováváme v množném
čísle.


- **DRY** - Nikde v programu by se ideálně
neměla vyskytovat tatáž nebo podobná posloupnost
řádků kódu vícekrát než jednou!

- **Refaktoring** - úpravám kódu, které zachovají funkčnost,
ale zkvalitní návrh programu

