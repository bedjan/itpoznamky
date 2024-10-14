Objektově orientované programování (OOP) v Javě
===============================================

**Cíl OOP** - rozdělit problém na menší části ( "stavební bloky" ) pro řešení problémů

- **OOP (Objektově orientované programování)** = struktura programu pomocí objektů ( instancí )
  - organizuje kód do tříd a objektů s pomocí principů: zapouzdření, dědičnost, polymorfismus a abstrakci.

1) **Třída (Class)**
- šablona podle níž se vytvářejí objekty, definuje vlastnosti (atributy) a chování (metody), které objekt bude mít

- je šablona *objektu*, definující *vlastnosti* ( atributy ) a *chování* ( metody )
 
2) **Atributy (Fields)**
      - Proměnné, které definují stav objektu. Atributy ukládají data, která objekt reprezentuje.

3) **Metody (Methods)**
      - Funkce, které definují chování objektu. Metody manipulují s daty objektu nebo provádějí nějaké operace.

4)  **Konstruktor (Constructor)**
      - Speciální metoda, která se volá při vytváření nového objektu. Slouží k inicializaci atributů objektu.

5) **Objekt (Object)**
      - Konkrétní instance třídy. Každý objekt má svůj stav (hodnoty atributů) a může provádět operace definované metodami. Obsahují data (atributy) a metody (funkce, které manipulují s daty)

5a) **Stav (State)**
        - Aktuální hodnoty všech atributů objektu.

5b) **Chování (Behavior)**
        - Akce, které objekt může vykonat prostřednictvím svých metod.

6) **Zapouzdření (Encapsulation)**
    - Schování interních dat objektu a jejich zpřístupnění pouze prostřednictvím veřejných metod. Tímto způsobem jsou data chráněna před neautorizovaným přístupem.

    - **Gettery a Settery (Getters and Setters)** - Metody, které slouží k přístupu a změně privátních atributů objektu. Getter vrací hodnotu atributu, setter ji mění, ale často s kontrolou hodnoty.

- data (atributy) třídy jsou ukryta před vnějším světem a jsou dostupná pouze prostřednictvím veřejných metod (gettery a settery)
- to zajišťuje, že data jsou chráněna a mohou být změněna pouze kontrolovaným způsobem.

```
    class Osoba {
        private String jméno;
        private int věk;
    
        public Osoba(String jméno, int věk) {
            this.jméno = jméno;
            this.věk = věk;
        }
    
        public String getJméno() {
            return jméno;
        }
    
        public void setJméno(String jméno) {
            this.jméno = jméno;
        }
    
        public int getVěk() {
            return věk;
        }
    
        public void setVěk(int věk) {
            if(věk >= 0) {
                this.věk = věk;
            }
        }
    }

```


  - **Dědičnost (Inheritance)**
    - Mechanismus, který umožňuje jedné třídě (potomkovi) zdědit vlastnosti a chování jiné třídy (rodiče). Dědičnost umožňuje opětovné použití kódu a rozšíření funkcionality.

- umožňuje vytvářet nové třídy na základě již existujících tříd
- třída, která dědí od jiné třídy, se nazývá potomkem (subclass), zatímco třída, od které se dědí, je rodič (superclass)

```
    class Zvíře {
        String jméno;
    
        public Zvíře(String jméno) {
            this.jméno = jméno;
        }
    
        public void jíst() {
            System.out.println(jméno + " jí.");
        }
    }
    
    class Pes extends Zvíře {
        public Pes(String jméno) {
            super(jméno); // Volá konstruktor rodičovské třídy
        }
    
        public void štěkat() {
            System.out.println(jméno + " štěká.");
        }
    }
    
    public class Main {
        public static void main(String[] args) {
            Pes pes = new Pes("Max");
            pes.jíst(); // Volá metodu z třídy Zvíře
            pes.štěkat(); // Volá metodu z třídy Pes
        }
    }
```

    - **Rodič (Parent Class)**
      - Třída, od které potomci dědí atributy a metody. Třída rodiče definuje základní chování, které mohou potomci rozšířit nebo přepsat.
    - **Potomek (Child Class)**
      - Třída, která dědí od rodičovské třídy. Potomci mohou přidat nové vlastnosti a metody, nebo přepsat (modifikovat) existující metody rodiče.

  - **Polymorfismus (Polymorphism)**
    - Schopnost objektů různých typů reagovat na stejné metody. Polymorfismus umožňuje, aby metoda s určitým názvem měla různé implementace v různých třídách.
    - **Přetěžování metod (Method Overloading)**
      - Více metod se stejným názvem, ale s různými parametry. Každá metoda má jiné parametry, které určují, kterou metodu zavolat.

```
    class Matematika {
        // Přetížená metoda
        public int součet(int a, int b) {
            return a + b;
        }
    
        public double součet(double a, double b) {
            return a + b;
        }
    }

```
    - **Přepisování metod (Method Overriding)**
      - Potomkovská třída může přepsat metodu rodičovské třídy, aby implementovala vlastní verzi této metody.

```
    class Zvíře {
        public void zvuk() {
            System.out.println("Zvíře vydává zvuk");
        }
    }
    
    class Pes extends Zvíře {
        @Override
        public void zvuk() {
            System.out.println("Pes štěká");
        }
    }
    
    class Kočka extends Zvíře {
        @Override
        public void zvuk() {
            System.out.println("Kočka mňouká");
        }
    }
    
    public class Main {
        public static void main(String[] args) {
            Zvíře zvíře1 = new Pes();
            Zvíře zvíře2 = new Kočka();
    
            zvíře1.zvuk(); // Výstup: Pes štěká
            zvíře2.zvuk(); // Výstup: Kočka mňouká
        }
    }

```

  - **Abstrakce (Abstraction)**
- řeší podstatné vlastnosti objektu, nepodstatné skrývá
- třídy nám umožňují definovat strukturu objektu, jednotlivé detaily implementace jsou skryté
    - Skrytí složitosti implementace a zobrazení pouze podstatných detailů. Abstrakce umožňuje vytvářet obecné struktury (abstraktní třídy nebo rozhraní), které definují základní chování, ale konkrétní implementaci zajišťují potomci.
    - **Abstraktní třídy (Abstract Classes)**
      - Třídy, které mohou obsahovat jak abstraktní (neimplementované) metody, tak i metody s implementací. Abstraktní třídy nemohou být instancovány samy o sobě, musí být děděny.
    - **Rozhraní (Interfaces)**
      - Rozhraní definuje čistě abstraktní metody, které musí třídy implementovat. Rozhraní zajišťuje, že všechny třídy, které ho implementují, budou mít určité metody, ale konkrétní implementaci těchto metod určuje každá třída individuálně.

```

    abstract class Zvíře {
        String jméno;
    
        public Zvíře(String jméno) {
            this.jméno = jméno;
        }
    
        // Abstraktní metoda – třídy, které dědí, musí tuto metodu implementovat
        abstract void zvuk();
    }

```
