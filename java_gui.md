GUI - Vytvoření projektu

# Postup v Netbeans:

**Vytvoření projektu**
File - New Project - Java - Java Application - Next - Název složky pro projekt bez diakritiky -

Nesmí být zaškrtnuto Create Main Class!!!


GUI - Vytvoření projektu

Vlevo v okně Projects rozbalím Source Packages a najdu tam složku <default package> - na ní pr. tl. –
New - jFrameForm

Do pole Class Name napíšu OknoProgramu:


GUI - Vytvoření projektu

V okně vidím plochu **návrhu formuláře** , kam mohu vkládat objekty z okna Palette vpravo nahoře:

Vybírám objekty _Swing Controls – Label, Button, Check Box, Text Field a Text Area_ a umísťuji je na
formulář.

Nad návrhem formuláře jsou dvě záložky **Source a Design** , kterými se přepínám mezi návrhem
formuláře a zdrojovým kódem programu.


GUI - Vlastnosti (Properties) objektů

**Vlastnosti (Properties) objektů**
Každý objekt má své vlastnosti, které vidíme v okně v pravém dolním rohu pod záložkou **Properties**.

Můžeme je **měnit přímo změnou vlastnosti** v tomto okně nebo třeba **pomocí přiřazovacího příkazu
v programu (** ale o tom až později). V okně Properties vidím vždy jen vlastnosti vybraného objektu.

Pokud **chci měnit najednou vlastnosti několika objektů** , musím je nejdříve vybrat, a pak vidím
společné vlastnosti těchto objektů např. vlastnost **font** nebo **foreground (barva popředí) a
background (barva pozadí)** objektů _Label, TextField, Button a TextArea._


GUI - Vlastnosti (Properties) objektů

**_Další důležité vlastnosti společné všem objektům_**

Name
Jméno objektu, na které se odkazuji při programování. Java standartně tvoří Namy podle typů
objektů např. _jLabel1, jLabel_ ...

Pokud chceme, můžeme přejmenovat pr. tl. na objektu – Change Variable Name- napíšu jméno
objektu např. _PopisekZadejJméno_

Při přejmenování objektů je dobré stanovit jednotná jasná pravidla, např. **Button** bude **Tlačítko** ,
**TextField** bude **Pole, Label** bude **Popisek** ...

Enabled
Objekt je přístupný nebo nepřístupný (true-false)


GUI - Spuštění projektu

Text
Text zobrazený v objektu

Editable
Lze editovat nebo ne (true-false)

Selected
Zadáno nebo nezadáno (true-false)

Mnemonic
Klávesová zkratka

Upravte vlastnosti objektů na formuláři dle vzoru včetně změny vlastnosti Name (vidím v okně vlevo
dole):

**Spuštění projektu**
Zatím jsme nic nenaprogramovali, přesto lze program spustit a máme možnost vyplnit pole,
zaškrtnout CheckBox a stisknout tlačítko.

Spuštění:
Run – Run Project (F6) nebo zelenou šipkou na panelu nástrojů, pak nutno vybrat OknoProgramu a
vidím spuštěný projekt:


GUI - Vytvoření přímo spustitelného souboru *.jar

**Vytvoření přímo spustitelného souboru *.jar**
(lze přímo spustit, když je nainstalovaná Java)

Run – Clean Build Project (Shift + F11) nebo na panelu nástrojů vlevo vedle zelené šipky:

**Zavření projektu**
Pr. tl. na názvu složky projektu v okně Projects – Close:

## Obsah

```
Postup v Netbeans: ......................................................................................................................... 1
Vytvoření projektu ...................................................................................................................... 1
Vlastnosti (Properties) objektů .................................................................................................... 4
Spuštění projektu ........................................................................................................................ 6
Vytvoření přímo spustitelného souboru *.jar............................................................................... 7
Zavření projektu .......................................................................................................................... 7
```

