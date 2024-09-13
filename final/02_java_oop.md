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

- **zapouzdření** - umožňuje skrýt některé metody a atributy, tak aby zůstali použitelné jen pro třídu zevnitř - rozhraní (interface) třídy rozdělí na veřejně přístupné ( public ) a vnitřní ( private) 

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







