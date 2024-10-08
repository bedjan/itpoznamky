  Výpisky k okruhům

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

*   `if`, `else if` a `else`: Tyto konstrukce kontrolují, zda je podmínka pravdivá, a na základě toho rozhodnou, která část kódu se vykoná.

    
    int age = 20;
    
    if (age >= 18) {
        System.out.println("Jste dospělý.");
    } else {
        System.out.println("Jste nezletilý.");
    }
        

V tomto příkladu, pokud je věk větší nebo roven 18, vypíše se "Jste dospělý.", jinak "Jste nezletilý".

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

Gettery a settery jsou metody pro čtení a nastavování hodnot atributů.
Jsou to metody používané k ochraně vašich dat a zvýšení bezpečnosti kódu.

    
    public String getName() {
        return name;
    }
    
    public void setName(String name) {
        this.name = name;
    }
