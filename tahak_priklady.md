  Výpisky k okruhům body { font-family: Arial, sans-serif; margin: 20px; } code { background-color: #f4f4f4; padding: 5px; display: block; margin-bottom: 10px; border-left: 3px solid #ccc; } pre { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 20px; overflow-x: auto; } h1, h2, h3 { color: #333; } h1 { margin-top: 40px; }

Okruh 1 - Základy
=================

Základní konstrukce jazyka Java
-------------------------------

### Proměnné a datové typy

V Javě jsou proměnné kontejnery, které uchovávají různé hodnoty. Každá proměnná má svůj datový typ, který definuje, jaký typ dat v ní může být uložen.

*   **Primitivní datové typy:**
    *   `int`: Slouží pro ukládání celých čísel, např. 1, 2, -5. Rozsah je od -231 do 231\-1.
        
            int age = 25;
        
    *   `double`: Slouží pro ukládání desetinných čísel, např. 3.14, -0.001. Typ `double` zabírá 64 bitů.
        
            double price = 19.99;
        
    *   `boolean`: Uchovává logické hodnoty `true` (pravda) nebo `false` (nepravda).
        
            boolean isStudent = true;
        
    *   `char`: Slouží k uložení jednoho znaku, např. 'A', 'b'. Tento typ zabírá 16 bitů.
        
            char grade = 'A';
        
*   **Referenční datové typy:**
    *   `String`: Používá se k uchování textových řetězců. Typ `String` je vlastně objektem, který má své metody.
        
            String name = "John Doe";
        
    *   `Array`: Pole je datová struktura, která uchovává více hodnot stejného typu. Příklad pole čísel:
        
            int[] numbers = {1, 2, 3, 4, 5};
        

### Parsování

Parsování je proces převodu hodnoty z jednoho datového typu na jiný. V Javě se často používá pro převod řetězců (textů) na čísla nebo jiné datové typy.

*   `Integer.parseInt(String)`: Převede řetězec na celé číslo.
    
        int number = Integer.parseInt("123");  // number = 123
    
*   `Double.parseDouble(String)`: Převede řetězec na desetinné číslo.
    
        double value = Double.parseDouble("123.45");  // value = 123.45
    
*   `Boolean.parseBoolean(String)`: Převede řetězec na logickou hodnotu `true` nebo `false`.
    
        boolean flag = Boolean.parseBoolean("true");  // flag = true
    

### Podmínky

Podmínky v Javě umožňují vykonání určité části kódu, pokud je splněna daná logická podmínka.

    
    int age = 20;
    
    if (age >= 18) {
        System.out.println("Jste dospělý.");
    } else {
        System.out.println("Jste nezletilý.");
    }
        

### Operátory

*   **Aritmetické operátory:** Používají se pro základní matematické operace.
    *   `+`: Sčítání (např. `int result = 5 + 3;`)
    *   `-`: Odčítání (např. `int result = 5 - 3;`)
    *   `*`: Násobení (např. `int result = 5 * 3;`)
    *   `/`: Dělení (např. `int result = 6 / 2;`)
    *   `%`: Zbytek po dělení (např. `int result = 5 % 2;`, výsledek bude 1)
*   **Relační operátory:** Slouží k porovnávání hodnot.
    *   `==`: Testuje rovnost (např. `a == b` vrací `true`, pokud jsou hodnoty `a` a `b` stejné)
    *   `!=`: Testuje nerovnost (např. `a != b`)
    *   `>`, `<`, `>=`, `<=`: Porovnávají hodnoty.
*   **Logické operátory:** Používají se pro práci s logickými výrazy.
    *   `&&`: Logické A (vrátí `true` jen, pokud jsou oba výrazy pravdivé).
    *   `||`: Logické NEBO (vrátí `true`, pokud je alespoň jeden výraz pravdivý).
    *   `!`: Logická negace (převrací hodnotu výrazu).

### Cykly

Cykly slouží k opakovanému vykonávání určité části kódu.

*   **For cyklus:** Používá se, pokud předem víme, kolikrát chceme opakovat nějaký kód.
    
        
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }
                    
    
    Tento cyklus vypíše čísla od 0 do 4.
*   **While cyklus:** Opakuje blok kódu, dokud je podmínka splněna.
    
        
        int i = 0;
        while (i < 5) {
            System.out.println(i);
            i++;
        }
                    
    
*   **Do-while cyklus:** Tento cyklus se provede alespoň jednou, poté kontroluje podmínku.
    
        
        int i = 0;
        do {
            System.out.println(i);
            i++;
        } while (i < 5);
                    
    

### Pole

Pole je struktura, která uchovává více hodnot stejného typu. Může být deklarováno následovně:

    int[] numbers = {1, 2, 3, 4, 5};

Přístup k jednotlivým prvkům pole se provádí pomocí indexu, přičemž indexování začíná od nuly.

    System.out.println(numbers[0]);  // Vypíše 1

### Metody pro práci s polem

*   `Arrays.sort()`: Tato metoda třídí prvky v poli.
    
        
        int[] numbers = {5, 3, 8, 1, 2};
        Arrays.sort(numbers);  // Seřadí pole do pořadí {1, 2, 3, 5, 8}
                    
    
*   `Arrays.toString()`: Převádí pole na textovou reprezentaci.
    
        System.out.println(Arrays.toString(numbers));  // Výstup: [1, 2, 3, 5, 8]
    

### Metody pro práci s řetězci

Řetězce jsou objekty v Javě a mají mnoho užitečných metod.

*   `length()`: Vrací délku řetězce.
    
        String name = "John"; System.out.println(name.length());  // Výstup: 4
    
*   `substring()`: Vrací podřetězec z řetězce.
    
        String name = "John"; System.out.println(name.substring(0, 2));  // Výstup: Jo
    
*   `toUpperCase()`: Převede všechny znaky na velká písmena.
    
        String name = "John"; System.out.println(name.toUpperCase());  // Výstup: JOHN
    

### Matematické funkce

Java nabízí třídu `Math`, která obsahuje řadu užitečných matematických funkcí.

*   `Math.sqrt()`: Vrací druhou odmocninu čísla.
    
        System.out.println(Math.sqrt(16));  // Výstup: 4.0
    
*   `Math.pow()`: Vrací mocninu čísla.
    
        System.out.println(Math.pow(2, 3));  // Výstup: 8.0
    
*   `Math.random()`: Vrací náhodné číslo mezi 0 a 1.
    
        System.out.println(Math.random());  // Náhodné číslo, např.: 0.3457
    

Okruh 2 - OOP
=============

Objektově-orientované programování v Javě
-----------------------------------------

### Třídy a instance

Třída je šablona, podle které jsou vytvářeny objekty (instance). Definuje, jaké vlastnosti (atributy) a metody bude objekt mít.

    
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

OOP v Javě - Třídy, Instance, Atributy a Metody
===============================================

Třídy a instance
----------------

Třída je šablona pro objekt. Instance je konkrétní objekt vytvořený na základě třídy.

    
    class Car {
        String brand;  // Atribut značky
        int speed;     // Atribut rychlosti
        
        void accelerate() {  // Metoda zrychlení
            speed += 10;
        }
    }
    
    Car myCar = new Car();  // Vytvoření instance
    myCar.brand = "Toyota";  // Nastavení hodnoty atributu
    myCar.accelerate();      // Zavolání metody
        

Atributy (Fields)
-----------------

Atributy uchovávají data objektu. Každá instance může mít jiné hodnoty.

    
    class Car {
        String brand;  // Atribut
        int speed;     // Atribut
    }
        

Metody (Methods)
----------------

Metody definují chování objektu. Mohou měnit stav objektu nebo vracet hodnoty.

    
    class Car {
        String brand;
        int speed;
        
        void accelerate() {  // Změna atributu speed
            speed += 10;
        }
    }
    
    Car myCar = new Car();
    myCar.accelerate();  // Zavolání metody accelerate
        

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
    
        
        class Car {
            String brand;
            int speed;
            
            @Override
            public String toString() {
                return brand + " is going " + speed + " km/h";
            }
        }
        
        Car myCar = new Car();
        myCar.brand = "Toyota";
        myCar.speed = 100;
        System.out.println(myCar.toString());  // Výstup: Toyota is going 100 km/h
                    
    
*   `equals()`: Porovnává, zda jsou dva objekty stejné.
    
        
        Car car1 = new Car();
        Car car2 = new Car();
        car1.brand = "Toyota";
        car2.brand = "Toyota";
        System.out.println(car1.equals(car2));  // Výstup: false, protože porovnává reference, ne obsah.
                    
    
*   `hashCode()`: Vrací hash kód objektu.
    
        System.out.println(myCar.hashCode());
    

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
    
    Animal animal = new Dog();
    animal.makeSound();  // Výstup: Bark
        

### Gettery a settery

Gettery a settery jsou metody pro čtení a nastavování hodnot atributů.Jsou to metody používané k ochraně vašich dat a zvýšení bezpečnosti kódu.

    
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

CRUD (Create, Read, Update, Delete) jsou základní operace pro správu dat v databázi. Ukázka základních SQL příkazů:

*   **INSERT:** Vložení nového záznamu do tabulky.
    
        
        -- Vložíme nového uživatele do tabulky users
        INSERT INTO users (name, email) VALUES ('Jan Novák', 'jan.novak@email.com');
                    
    
*   **SELECT:** Čtení dat z databáze.
    
        
        -- Vybereme všechny uživatele
        SELECT * FROM users;
        
        -- Vybereme konkrétního uživatele podle ID
        SELECT name, email FROM users WHERE id = 1;
                    
    
*   **UPDATE:** Aktualizace existujícího záznamu.
    
        
        -- Aktualizujeme email uživatele s ID 1
        UPDATE users SET email = 'novy.email@email.com' WHERE id = 1;
                    
    
*   **DELETE:** Smazání záznamu z databáze.
    
        
        -- Smažeme uživatele s ID 1
        DELETE FROM users WHERE id = 1;
                    
    

### Základní SQL funkce

SQL funkce umožňují manipulaci s daty při dotazování. Zde jsou některé základní funkce:

*   `COUNT()`: Vrátí počet řádků.
    
        
        -- Vrátí počet uživatelů
        SELECT COUNT(*) FROM users;
                    
    
*   `SUM()`: Spočítá součet hodnot ve sloupci.
    
        
        -- Spočítá celkový zůstatek na účtech
        SELECT SUM(balance) FROM accounts;
                    
    
*   `AVG()`: Vypočítá průměrnou hodnotu ve sloupci.
    
        
        -- Vypočítá průměrný věk uživatelů
        SELECT AVG(age) FROM users;
                    
    

### JOIN

Příkaz `JOIN` slouží ke spojení dvou nebo více tabulek na základě vztahu mezi nimi.

    
    -- Spojíme tabulky users a orders na základě uživatelského ID
    SELECT users.name, orders.order_id, orders.amount 
    FROM users 
    JOIN orders ON users.id = orders.user_id;
        

### Databázové vazby (relace)

Relace v databázi představují vztahy mezi tabulkami. Existují tři základní typy relací:

*   **One-to-One:** Každý záznam v jedné tabulce odpovídá právě jednomu záznamu v druhé tabulce.
*   **One-to-Many:** Každý záznam v jedné tabulce odpovídá více záznamům v druhé tabulce.
*   **Many-to-Many:** Každý záznam v jedné tabulce může být spojen s více záznamy v druhé tabulce.

### Databázové indexy

Indexy se používají k urychlení dotazů na databázi. Indexy mohou být vytvořeny nad sloupci, které jsou často používány v podmínkách `WHERE`.

    
    -- Vytvoření indexu nad sloupcem email v tabulce users
    CREATE INDEX idx_email ON users (email);
        

Kolekce a proudy v Javě
-----------------------

### Generické vs. obecné kolekce

Kolekce jsou datové struktury, které uchovávají skupiny objektů. Java nabízí generické kolekce, které jsou typově bezpečné. Příklad:

    
    // Generická kolekce ArrayList, která uchovává pouze objekty typu String
    List names = new ArrayList<>();
    names.add("Jan");
    names.add("Petr");
    
    // Obecná kolekce, která může uchovávat objekty jakéhokoli typu
    List items = new ArrayList<>();
    items.add("Text");
    items.add(123);  // Integer
        
    
        Hashmapy
        HashMap je datová struktura, která uchovává dvojice klíč-hodnota. Každý klíč je unikátní a umožňuje rychlý přístup k hodnotám.
        
    // Příklad použití HashMap
    Map students = new HashMap<>();
    students.put(1, "Jan");
    students.put(2, "Petr");
    
    // Přístup k hodnotám pomocí klíče
    String studentName = students.get(1);  // Jan
        
    
        Základní principy StreamAPI
        Stream API umožňuje provádět operace nad kolekcemi v podobě proudů dat. Umožňuje například filtrovat, třídit nebo mapovat hodnoty.
        
    // Filtrování a zobrazení jmen začínajících na "J"
    names.stream()
        .filter(name -> name.startsWith("J"))
        .forEach(System.out::println);  // Výstup: Jan
        
    
        Okruh 4 - Doplňkové okruhy
    
        Moderní webdesign
    
        Boxmodel
        Box model definuje, jak je prvek zobrazen na stránce. Skládá se z obsahu (content), výplně (padding), okraje (margin) a rámečku (border).
        
    div {
        width: 200px;
        padding: 10px;
        border: 1px solid black;
        margin: 20px;
    }
        
    
        Párové/nepárové elementy
        Párové elementy mají otevírací a uzavírací tag (např. <p>), zatímco nepárové elementy mají pouze otevírací tag (např. <br>).
    
        Blokové/řádkové elementy
        Blokové elementy zabírají celou šířku dostupného prostoru (např. <div>), zatímco řádkové elementy zabírají pouze tolik místa, kolik potřebují (např. <span>).
    
        Tabulky a seznamy
        Tabulky slouží k uspořádání dat do řádků a sloupců, zatímco seznamy uspořádávají obsah do lineárního seznamu.
        
    
        
            Jméno
            Věk
        
        
            Jan
            25
        
    
    
    
        Položka 1
        Položka 2
    
        
    
        Základní konstrukce jazyka JavaScript
    
        DOM
        DOM (Document Object Model) je rozhraní, které umožňuje přístup a manipulaci s HTML dokumenty pomocí JavaScriptu.
        
    // Vybrání prvku podle ID a změna jeho obsahu
    document.getElementById("mojeDiv").innerHTML = "Nový obsah";
        
    
        Podmínky
        Podmínky v JavaScriptu se používají pro vykonávání kódu na základě logických výrazů.
        
    let age = 18;
    if (age >= 18) {
        console.log("Jste dospělí");
    } else {
        console.log("Jste nezletilí");
    }
        
    
        Časovače
        JavaScript obsahuje funkce pro nastavení časovačů, které provádějí kód po uplynutí určitého času.
        
    // Nastaví se časovač na 2 sekundy
    setTimeout(() => {
        console.log("Uplynuly 2 sekundy");
    }, 2000);
        
    
        Bootstrap
    
        Grid systém
        Bootstrap používá gridový systém rozdělený na 12 sloupců pro vytváření responzivních layoutů. Například:
        
    
        
            Levý sloupec
            Pravý sloupec
        
    
        
    
        Breakpointy
        Breakpointy jsou body, při kterých se layout mění na základě šířky obrazovky. Bootstrap definuje tyto breakpointy:
        
            xs: do 576px
            sm: od 576px
            md: od 768px
            lg: od 992px
            xl: od 1200px
        
    
        Základní komponenty Bootstrapu
        Bootstrap obsahuje předem definované komponenty, které usnadňují tvorbu UI. Některé z nich jsou:
        
            Reboot: Normalizace a vylepšení výchozího stylu HTML elementů.
            Typografie: Stylování textu.
            Obrázky: Responzivní obrázky, které se přizpůsobí velikosti kontejneru.
            Tabulky: Stylované tabulky s Bootstrap třídami.
            Tlačítka: Předem definované styly pro tlačítka.
            Formuláře: Stylované vstupní prvky formulářů.
        
    
    Vysvětlení jednotlivých částí:
        
            MySQL: CRUD operace – Základní operace pro manipulaci s daty v databázi (INSERT, SELECT, UPDATE, DELETE) s ukázkami SQL příkazů.
            JOIN – Ukázka použití SQL JOIN pro spojení více tabulek.
            Kolekce a proudy v Javě – Vysvětlení rozdílu mezi generickými a obecnými kolekcemi, ukázka použití HashMap a Stream API pro práci s proudy.
            Moderní webdesign: Boxmodel – Ukázka základního konceptu box modelu v CSS, který definuje prostor obsahu, okraje a výplně.
            JavaScript – Práce s DOM, podmínky a časovače, které umožňují dynamickou manipulaci s HTML stránkou.
            Bootstrap – Ukázka grid systému Bootstrapu a práce s breakpointy pro responzivní design.
