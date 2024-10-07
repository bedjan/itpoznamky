  Výpisky k okruhům

Okruh 1 - Základy
=================

Základní konstrukce jazyka Java
-------------------------------

### Proměnné a datové typy

V Javě jsou proměnné kontejnery pro ukládání hodnot, které jsou typu primitivního nebo referenčního.

*   **Primitivní datové typy**:
    *   `int` - celá čísla. Příklad: `int age = 25;`
    *   `double` - desetinná čísla. Příklad: `double price = 19.99;`
    *   `boolean` - logické hodnoty `true` nebo `false`. Příklad: `boolean isStudent = true;`
    *   `char` - jeden znak. Příklad: `char grade = 'A';`
*   **Referenční datové typy**: ukazují na objekty, například řetězce. Příklad: `String name = "John";`

### Parsování

Parsování je proces, při kterém se řetězec převádí na jiný datový typ.

*   `Integer.parseInt("123")` převede řetězec na celé číslo. Příklad: `int num = Integer.parseInt("123");`
*   `Double.parseDouble("123.45")` převede řetězec na desetinné číslo. Příklad: `double value = Double.parseDouble("123.45");`

### Podmínky

Podmínky se používají pro řízení toku programu na základě logických výroků.

    
    if (age > 18) {
        System.out.println("Dospělý");
    } else {
        System.out.println("Nezletilý");
    }
    

Tento příklad vypíše _Dospělý_, pokud je `age` větší než 18, jinak _Nezletilý_.

### Operátory

*   **Aritmetické operátory**: `+`, `-`, `*`, `/`, `%`. Příklad: `int sum = 5 + 3;`
*   **Relační operátory**: `==`, `!=`, `>`, `<`, `>=`, `<=`. Příklad: `boolean result = (a == b);`
*   **Logické operátory**: `&&`, `||`, `!`. Příklad: `if (a > 5 && b < 10)`

### Cykly

Cykly slouží k opakování bloků kódu.

*   **For cyklus**: Používá se k iteraci po pevném počtu kroků.
    
        
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }
                    
    
    Tento cyklus vypíše čísla 0 až 4.
*   **While cyklus**: Opakuje kód, dokud je splněna podmínka.
    
        
        int i = 0;
        while (i < 5) {
            System.out.println(i);
            i++;
        }
                    
    
*   **Do-while cyklus**: Vykoná kód alespoň jednou, poté kontroluje podmínku.
    
        
        int i = 0;
        do {
            System.out.println(i);
            i++;
        } while (i < 5);
                    
    

### Pole

Pole je struktura, která uchovává více hodnot stejného typu. Příklad deklarace: `int[] numbers = {1, 2, 3};`

### Metody pro práci s polem

*   `Arrays.sort(numbers)` setřídí pole. Příklad: `Arrays.sort(numbers);`
*   `Arrays.toString(numbers)` převádí pole na řetězec. Příklad: `System.out.println(Arrays.toString(numbers));`

### Metody pro práci s řetězci

*   `length()` vrací délku řetězce. Příklad: `int len = name.length();`
*   `substring()` vrací podřetězec. Příklad: `String sub = name.substring(0, 3);`
*   `toUpperCase()` převádí znaky na velká písmena. Příklad: `String upper = name.toUpperCase();`

### Matematické funkce

*   `Math.sqrt()` vrací druhou odmocninu. Příklad: `double sqrt = Math.sqrt(16);`
*   `Math.pow()` vrací mocninu. Příklad: `double pow = Math.pow(2, 3);`

Okruh 2 - OOP
=============

Objektově-orientované programování v Javě
-----------------------------------------

### Třídy a instance

Třída je šablona, podle které jsou vytvářeny objekty (instance).

    
    class Car {
        String brand;
        int speed;
        
        void accelerate() {
            speed += 10;
        }
    }
        

Vytvoření instance třídy:

    
    Car myCar = new Car();
    myCar.brand = "Toyota";
    myCar.accelerate();
        

### Atributy a metody

Atributy jsou proměnné v třídě, zatímco metody definují chování objektu. Například metoda `accelerate()` zvýší rychlost auta o 10.

### Zapouzdření

Zapouzdření znamená skrytí vnitřních detailů třídy a poskytnutí přístupu přes veřejné metody (gettery a settery).

    
    class Person {
        private String name;
        
        public String getName() {
            return name;
        }
        
        public void setName(String name) {
            this.name = name;
        }
    }
        

### Základní metody objektů

*   `toString()`: Vrací textovou reprezentaci objektu.
*   `equals()`: Porovnává, zda jsou dva objekty stejné.
*   `hashCode()`: Vrací hash kód objektu.

### Dědičnost a polymorfismus

Dědičnost umožňuje jedné třídě zdědit vlastnosti a metody jiné třídy. Polymorfismus umožňuje používat objekty různých tříd stejným způsobem, pokud mají společného předka.

    
    class Animal {
        void makeSound() {
            System.out.println("Some sound");
        }
    }
    
    class Dog extends Animal {
        @Override
        void makeSound() {
            System.out.println("Bark");
        }
    }
        

### Gettery a settery

Gettery a settery jsou metody pro čtení a nastavování hodnot atributů.

    
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
        

Okruh 3 - MySQL a Kolekce
=========================

MySQL
-----

### CRUD operace

CRUD operace (Create, Read, Update, Delete) jsou základní operace pro práci s databázemi.

*   `INSERT INTO`: Vkládání dat do databáze.
*   `SELECT`: Výběr dat z databáze.
*   `UPDATE`: Aktualizace dat v databázi.
*   `DELETE`: Mazání dat z databáze.

### SQL funkce

SQL funkce jako `COUNT()`, `SUM()`, `AVG()` slouží k agregaci dat.

### JOIN

JOIN slouží ke spojování dat z více tabulek na základě společných hodnot (klíčů).

### Databázové vazby

Vazby mezi tabulkami určují vztahy mezi daty, například 1:N, M:N.

### Databázové indexy

Indexy zrychlují vyhledávání v databázi.

Kolekce a proudy v Javě
-----------------------

### Generické vs. obecné kolekce

Generické kolekce jako `ArrayList<T>` jsou typově bezpečné, což znamená, že předem určují, jaký typ dat budou uchovávat.

### HashMapy

HashMapy ukládají dvojice klíč-hodnota a umožňují rychlé vyhledávání na základě klíče.

    
    HashMap<String, Integer> map = new HashMap<>();
    map.put("Apple", 1);
    map.put("Banana", 2);
        

### Stream API

Stream API umožňuje zpracování proudů dat pomocí metod jako `filter()`, `map()` a `reduce()`.

Okruh 4 - Doplňkové okruhy
==========================

Moderní webdesign
-----------------

### Boxmodel

Boxmodel definuje, jak jsou prvky na webové stránce rozvrženy, zahrnuje obsah, padding, border a margin.

### Párové a nepárové elementy

Párové elementy mají otevírací a zavírací tag (např. `<div></div>`), zatímco nepárové elementy mají pouze otevírací tag (např. `<img>`).

### Blokové a řádkové elementy

Blokové elementy jako `<div>` zabírají celou šířku stránky, zatímco řádkové elementy jako `<span>` pouze šířku svého obsahu.

### Tabulky a seznamy

Tabulky slouží k zobrazení dat v řádcích a sloupcích (`<table>`), zatímco seznamy (`<ul>`, `<ol>`) umožňují strukturované výpisy položek.

Základní konstrukce jazyka JavaScript
-------------------------------------

### DOM

Document Object Model (DOM) je reprezentace HTML dokumentu jako stromu objektů, který lze manipulovat pomocí JavaScriptu.

### Podmínky

Podmínky v JavaScriptu se používají podobně jako v Javě, například `if`, `else if`, `else`.

### Časovače

Časovače jako `setTimeout()` a `setInterval()` slouží k odloženému nebo opakovanému spouštění kódu.

Bootstrap
---------

### Grid systém

Bootstrap poskytuje systém mřížky pro rozvržení prvků na stránce, který je založen na řádcích a sloupcích.

### Breakpointy

Breakpointy definují body, kde se mění rozvržení stránky v závislosti na šířce obrazovky (např. mobilní, tablet, desktop).

### Základní komponenty Bootstrapu

Bootstrap obsahuje předpřipravené komponenty jako **reboot** (normalizace stylů), typografii, obrázky, tabulky, tlačítka a formuláře.
