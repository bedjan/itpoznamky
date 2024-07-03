
# Java OOP: Jak to funguje

Object-Oriented Programming (OOP) je způsob programování, který organizuje software pomocí objektů. Java je jazyk, který podporuje OOP, a zde je vysvětlení základních konceptů a jak to funguje:

## Základní koncepty OOP

1. **Třída (Class)**:
   - Třída je šablona nebo blueprint pro vytváření objektů. Definuje vlastnosti (proměnné) a chování (metody) objektů.
   - Příklad třídy:
     ```java
     public class Car {
         String color;
         int maxSpeed;

         void display() {
             System.out.println("Car color: " + color);
             System.out.println("Max speed: " + maxSpeed);
         }
     }
     ```

2. **Objekt (Object)**:
   - Objekt je instance třídy. Má stav (hodnoty proměnných) a chování (metody).
   - Vytvoření objektu:
     ```java
     public class Main {
         public static void main(String[] args) {
             Car myCar = new Car();
             myCar.color = "Red";
             myCar.maxSpeed = 200;
             myCar.display();
         }
     }
     ```

3. **Zapouzdření (Encapsulation)**:
   - Zapouzdření znamená skrýt interní stav objektu a umožnit přístup k němu pouze prostřednictvím veřejných metod.
   - Používají se modifikátory přístupu (private, public, protected).
   - Příklad:
     ```java
     public class Car {
         private String color;
         private int maxSpeed;

         public void setColor(String color) {
             this.color = color;
         }

         public String getColor() {
             return color;
         }

         public void setMaxSpeed(int maxSpeed) {
             this.maxSpeed = maxSpeed;
         }

         public int getMaxSpeed() {
             return maxSpeed;
         }
     }
     ```

4. **Dědičnost (Inheritance)**:
   - Dědičnost umožňuje jedné třídě (potomkovi) dědit vlastnosti a metody jiné třídy (rodiče).
   - Příklad:
     ```java
     public class Vehicle {
         int maxSpeed;

         public void display() {
             System.out.println("Max speed: " + maxSpeed);
         }
     }

     public class Car extends Vehicle {
         String color;

         public void display() {
             super.display();
             System.out.println("Car color: " + color);
         }
     }
     ```

5. **Polymorfismus (Polymorphism)**:
   - Polymorfismus umožňuje, aby stejná metoda měla různé implementace.
   - Může být realizován přes přetížení metod (overloading) a přepsání metod (overriding).
   - Příklad přetížení:
     ```java
     public class MathUtils {
         public int add(int a, int b) {
             return a + b;
         }

         public double add(double a, double b) {
             return a + b;
         }
     }
     ```
   - Příklad přepsání:
     ```java
     public class Animal {
         public void makeSound() {
             System.out.println("Some sound");
         }
     }

     public class Dog extends Animal {
         @Override
         public void makeSound() {
             System.out.println("Bark");
         }
     }
     ```

## Jak to funguje v praxi

Když programátor chce vytvořit aplikaci, nejdříve identifikuje objekty, které aplikace bude potřebovat. Poté vytvoří třídy, které tyto objekty definují. Například v případě aplikace pro správu automobilů by mohly být třídy jako `Car`, `Truck`, `Motorcycle`, každá s vlastními vlastnostmi a metodami.

Tyto třídy se mohou dědit, aby sdílely společné vlastnosti (např. všechny vozidla mohou mít maximální rychlost). Když je třeba objekt vytvořit, je instance třídy a její metody jsou použity k manipulaci s objektem.

Tímto způsobem OOP umožňuje vytvářet modulární, snadno spravovatelný a rozšiřitelný kód.
