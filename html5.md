# HTML5 dokument:

[Manual HTML5 itnetwork](https://www.itnetwork.cz/html-css/html5/html-manual)

[Manual github markdown](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax)

[Zkouseni Css](https://www.w3schools.com/cssref/playdemo.php?filename=playcss_accent-color)

[Bootstrap flex](https://getbootstrap.com/docs/4.0/utilities/flex/)

[Flex Css](https://www.vzhurudolu.cz/prirucka/css-flexbox)

[Flexbox itnetwork](https://www.itnetwork.cz/html-css/webove-stranky/jak-psat-moderni-web-html-tutorial-stylovani-hlavicky//palcovat/78763/-1)




# HTML5 struktura dokumentu:

```
<!-- *****v tomto html dokumentu popisuji pomoci html komentaru strukturu html kodu, pokud si chcete vyzkouset jak to funguje vytvorte si soubor nejvice index.html, podeji bude jestě probran css styl na zmenu vzhledu html souboru vestinou nazvany style.css ***** -->

<!-- typ dokumentu -->  

<!doctype html>

<!-- html musi byt vzdy na zacatku a na konci je parovy, takze zacina <html> a konci </html> -->

<!-- lang="cs" nam nastavi ceske stranky -->
<!-- manifest="cache.appcache" nam vytvori vyrovnavaci pamet na stranky s vetsim obsahem pro jejich rychlejsi nacitani, mel by byt s priponou appcache -->
<!-- v html kodu můžete cachovat obrazky, JS, CSS soubor. -->
<!-- vyhodou je ze zustane i offline obsah, pokud nam vypadne internet -->
<!-- u xml a xhtml dokumentu se nahrazuje timto kodem <?xml version="1.0" encoding="UTF-8"?> <html xmlns="http://www.w3.org/1999/xhtml"> -->

<html lang="en-US" manifest="cache.appcache">
<!-- hlavicka dokumentu -->
  <head>
<!--  <meta charset="utf-8" /> definuje kodovani ceskych znaku -->

    <meta charset="utf-8" />
<!-- nastaveni pro responzivni web - velikost webu se prizpusobi spravne na kazdem zarizeni - tzn. pocitac, tablet, mobil -->

    <meta name="viewport" content="width=device-width" />
<!-- Titulek stránky, je videt v horni casti      
    <title>My page title</title>
<!-- pro zjednoduseni zapisu obrazku, audia a videi -> pak muzeme psat  <img src="obrazek.jpg" alt="Obrázek" />, misto dlouheho <img src="http://www.mujweb.cz/obrazky/obrazek.jpg" alt="Obrázek" />  -->

<base href="http://www.mujweb.cz/obrazky/" />
<!-- odkaz na pismo, ktere se nejprve stahne z odkazu a pote pouzije -->

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One"
      rel="stylesheet" />
<!-- odkaz na css vzhled, pokud chceme zmenu vzhledu stranky, stači poupravovat tento css styl, vzdy musi mit priponu css --> 
 <link rel="stylesheet" href="style.css" />
 
  <!-- bootstrap styl, pro fungovani bootstrap, stahne se aktualni a nacte se, vice zde https://getbootstrap.com/ -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 

<!-- pokud mame externi styl css, muzeme jej poupravit vlozit primo mez znacky <style> </style> a vlasnosti si zapsat, znacka * znaci pro vsechny prvky  -->

<style>
* {
margin: 2px;padding: 2px;
}

</style>

<!-- konec hlavicky -->
  </head>
<!-- zacatek tela -->

  <body>
    

    <header>
      <h1>Hlavni nadpis</h1>
    </header>
<!-- navigace na strance -->
    <nav>
<!-- ul je zeznam bez cisel, polozky se pisi do znacek li, jsou to parove značky, takze zacinaji <ul><li> a konci </ul></li>-->

<!-- u class="d-flex flex-row" se udela flex a da jej do prava na konec ;  style="list-style-type: none;" a tecky u seznamu se timto odeberou -->
      <ul class="d-flex justify-content-end"  style="list-style-type: none;margin: 2px;padding: 2px;";>
        <li  class="p-2"><a href="#">Domů</a></li>
        <li  class="p-2"><a href="#">Team</a></li>
        <li  class="p-2"><a href="#">Projekty</a></li>
        <li  class="p-2"><a href="#">Kontakt</a></li>
      </ul>

      <!-- form - obsahující interaktivní ovládací prvky pro odesílání informací -->
<!-- u class="d-flex flex-row" se udela flex a da jej do prava na konec -->
      <form class="d-flex justify-content-end" style="margin: 2px;padding: 2px;";>
	  
	  <!-- input -  k vytváření interaktivních ovládacích prvků pro webové formuláře, aby bylo možné přijímat data od uživatele; k dispozici je široká škála typů vstupních dat a ovládacích widget -->
        <input type="search" name="q" placeholder="Co chces hledat" />
        <input type="submit" value="Hledej" />
      </form>
    </nav>

<!-- main - dominantní obsah dokumentu -->
    <main>
      <!-- article - samostatna kompozice, treba i prispevky -->
      <article>
	  <!-- nadpis druheho radu -->
        <h2>Clanek 1</h2>
<!-- popis -->
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Donec a diam
          lectus. Set sit amet ipsum mauris. Maecenas congue ligula as quam
          viverra nec consectetur ant hendrerit. Donec et mollis dolor. Praesent
          et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt
          congue enim, ut porta lorem lacinia consectetur.
        </p>
<!-- nadpis tretiho radu -->
        <h3>Clanek 2</h3>

        <p>
          Donec ut librero sed accu vehicula ultricies a non tortor. Lorem ipsum
          dolor sit amet, consectetur adipisicing elit. Aenean ut gravida lorem.
          Ut turpis felis, pulvinar a semper sed, adipiscing id dolor.
        </p>

        <p>
          Pelientesque auctor nisi id magna consequat sagittis. Curabitur
          dapibus, enim sit amet elit pharetra tincidunt feugiat nist imperdiet.
          Ut convallis libero in urna ultrices accumsan. Donec sed odio eros.
        </p>
<!-- nadpis tretiho radu -->
        <h3>Clanek 3</h3>

        <p>
          Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum
          soclis natoque penatibus et manis dis parturient montes, nascetur
          ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem
          facilisis semper ac in est.
        </p>

        <p>
          Vivamus fermentum semper porta. Nunc diam velit, adipscing ut
          tristique vitae sagittis vel odio. Maecenas convallis ullamcorper
          ultricied. Curabitur ornare, ligula semper consectetur sagittis, nisi
          diam iaculis velit, is fringille sem nunc vet mi.
        </p>
      </article>

<!-- vetsinou postranni panel, s hlavním obsahem dokumentu pouze nepřímo -->
      <aside>
<!-- druhy nejvyznamnejsi nadpis z 6 -->
        <h2>Related</h2>

        <ul>
          <li><a href="#">Oh I do like to be beside the seaside</a></li>
          <li><a href="#">Oh I do like to be beside the sea</a></li>
          <li><a href="#">Although in the North of England</a></li>
          <li><a href="#">It never stops raining</a></li>
          <li><a href="#">Oh well…</a></li>
        </ul>
      </aside>
    </main>

<!-- zacatek paticka-->

    <footer>
      <p>©Copyright 2024 od . All rights reversed.</p>
<!-- konec paticka-->
    </footer>
<!-- konec tela -->
  </body>
  <!-- bootstrap javascript, pro fungovani bootstrap, lepe umistovat na konec dokumentu , pred </html> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
<!-- konec html dokumentu -->
</html>

```
