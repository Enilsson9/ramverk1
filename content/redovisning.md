---
---
<h1 class="mt-5">Redovisning</h1>
<div id="accordion" class="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h5 class="mb-0">Kmom01</h5>
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body text-left">
        Mina styrkor på PHP The Right Way är att använda MySQL PDO på ett säkert sätt, bra koll på composer, exceptions och nästan allt vi jobbat med oophp kursen. Däremot, jag har lite problem att enhetstesta mina klasser. Jag får inte alltid 100% och därför blir jag tvungen att skriva om min kod så att det går att nå via enhetstesterna. Dessutom måste jag träna lite på säker PHP kod med htmlentitites osv.
        <br><br>

        Laravel, Symfony och Code Igniter enligt en populär fråga på Quora: https://www.quora.com/Which-is-the-best-framework-for-PHP (Länkar till en externa sida.)Länkar till en externa sida.. Jag gillar Quora p.g.a kända människor svarar på frågor samt anger källor på vad de säger. T.ex om det är en fråga om PHP, då är det någon "kändis" i PHP community som har det "bästa" svaret.
        <br><br>

        Jag har ingen erfarenhet med någon community, förutom dbwebb. Jag gillar att läsa foruminlägg men deltar inte på dem. Kanske någon gång tiden. Jag har märkt att det finns mycket "hat" mot PHP inom andra communities, framför allt JavaScript community. Det var också intressant hur en community kan delas i flera sub-communites (t.ex PHP och WordPress).
        <br><br>

        Begreppet ramverkslös värld är en ambitiös tanke om att det kommer inte att behövas någon ramverk i framtiden. Det stämmer delvis. En ramverk lever inte länge i teknologin världen, det är alltid bäst att skriva ren kod utan en ramverk. Eftersom ramverken uppdateras och det kommer alltid nya. I framtiden kommer programmeringsspråken att vara så kraftiga och tydliga så att en ramverk kommer inte att vara en behov.
        <br><br>

        Att komma igång med min redovisa-sida var inga problem. Jag valde att fortsätta med Bootstrap 4 som i oophp kursen. Jag vill fokusera på back-end delen och lära mig lite Bootstrap samtidigt. Nästa gång ska jag köra ren CSS grid kod.
        <br><br>

        Det tog en stund för att skapa min egen namespace och vendor. Men när jag hade väl gjorde det så var det inte särskilt svårt att skapa mina routes och vyer med hjälp av exempel koden bakom /verktyg. Det var dock lite svårare att enhetstesta dem med setGet och setGlobals.
        <br><br>

        Min TIL är att börja tänka på ett objektorienterad sätt. Jag brukar skriva all kod på en funktion och sen delar upp det i klasser. Det är jobbigt. Jag ska börja att skriva all kod direkt som objektorienterad för att spara tid och stress. Det blir i nästa kmom då.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h5 class="mb-0">Kmom02</h5>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body text-left">
        Vi har under programmet använt lite MVC-inspirerade ramverk. T.ex Flask i oopython, Mithril i webapp, Express.js i databas och Anax i oophp. Kanske var det inte mer View/Controller än MVC, eftersom vi inte har använt Modeller på ett SOLID sätt. Eller det var inget krav då i alla fall. Jag tycker att vi som läser programmet förstår tanken bakom ett MVC-ramverk väldigt bra.
        <br><br>
        Begreppet SOLID är lite abstrakt, däremot jag förstår delvis tanken bakom det. Min uppfattning är att när man skriver objektorienterad kod, ska man då fokusera mest på underhållsläget (och det som går att enhetstesta). Att skriva läsbara klasser som samarbetar med varandra och går att ändra/lägga till/ta bort funktioner utan att förstöra hela kärnan.
        <br><br>
        Jag läste Wikipedias artiklarna och kollade lite snabbt på videon. Definitionerna på Wikipedia är okej, men det fattas lite mera real-life exempel. Videon däremot var tydlig. Killen i videon nämnde att alla utvecklare läser mer kod än vad vi skriver kod. Det där, i mitt tycke, är den viktigaste anledningen för att skriva på ett SOLID sätt.
        <br><br>
        Om jag minns rätt, vi läste lite om designmönster i javascript kursen. Det var mest om "Module Pattern". Jag har inte hört talats om andra designmönster, men förstår varför de är viktiga. En designmönster är som en mall om hur vi kan lösa ett problem. Fördelen är att koden kan bli mer DRY och återanvändbar.
        <br><br>
        Jag valde att kika på Laravel, eftersom det är ramverket #1 i PHP enligt flera källor. Dokumentationen var tydlig. De har delat upp dokumentationen i några kategorier såsom Views, Controllers, Middlewares (MVC) osv. Ramverket är alltså mer än ett MVC ramverk. Jag var förvånad över hur mycket det liknar Anax, kanske var Laravel inspirationen till Anax? Eftersom de också har "Pretty URLs" och andra funktioner som fungerar nästan likadant.
        <br><br>
        Min TIL är att MVC är än av de bästa sätten att strukturera kod. Därför har många kända ramverk blivit inspirerad av den. Det jag har märkt nu efter att ha lekat runt med 5-6 ramverk under kursens gång, är de liknar varandra ganska mycket. Samma sak gäller för programmeringspråk. Det viktigaste är att förstå programmeringstänkande och ramverkstänkande.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h5 class="mb-0">Kmom03</h5>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Det känns lite udda att jobba med $di. Det blir mycket man måste konfigurera för att lägga till nya klasser i Containern. Det gick inte heller för mig att nå $di utanför mina Controller klasser. Däremot, om man lägger till flera klasser kan koden bli mycket smidigare och lättare att nå utan koll på alla namespaces.
        <br><br>
        Dependency Injection, service locator och lazy loading är alla designmönster/tekniker för att kunna ha bättre kommunikation mellan klasserna och klienten. Jag använde Wikipedia och källorna de har använt som källor.
        <br><br>
        DI är ett sätt för att isolera en klass och göra det användbart vid tillfälle. Service locator är en ännu mer isolerad designmönster som är svårare att enhetstesta men tydligare att förstå. Lazy loading är ett sätt att slippa ladda upp alla onödiga funktioner när man startar/initialiserar ett program (webbsida) för att göra det mer "effektiv".
        <br><br>
        Laravels "Service Container" hantererar alla dependency injections med hjälp av "bindings" som verkar som ett smidigare sätt. Skillnaden skulle vara att vi har inte så många alternativ för att "injektera" våra klasser. Utand vi har endast $di klassen. Laravel har andra tjänster för olika situationer och jag skulle vilja lära mig lite mer om dem genom några exempelprogram.
        <br><br>
        Klassen jag skapade heter "Requester" och har endast en funktion "curlJson". Man anger en url som parameter, curlar den och returnerar en JSON från en extern tjänst. Det var mest för att få en känsla för $di. Annars har jag kodat som i tidigare kmom.
        <br><br>
        Att jobba med externa tjänster kan vara kul eller frusterande beroende på dokumentationen. Ibland måste man skapa ett konto, läsa lite om dokumentionen et voila. Men ibland går det inte så lätt. Jag hade lite problem att förstå dokumentationen för OpenStreetMap och bestämde mig att använda Google Maps i stället (som jag är bekant med).
        <br><br>
        Min TIL är tänka om koden jag skriver går att nå via enhetstesterna. Det finns många sätt att skriva en funktion, så nu ser jag till att det går att testa innan jag fortsätter med den andra funktionen. Därför får jag nu 100% kodtäckning utan beskymmer.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          <h5 class="mb-0">Kmom04</h5>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        My report here
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          <h5 class="mb-0">Kmom05</h5>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        My report here
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          <h5 class="mb-0">Kmom06</h5>
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        My report here
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          <h5 class="mb-0">Kmom07-10</h5>
        </button>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">
          My report here
      </div>
    </div>
  </div>
</div>
