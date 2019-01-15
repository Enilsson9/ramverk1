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
      <div class="card-body text-left">
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
      <div class="card-body text-left">
        Att lyfta ut koden var lite svårare än jag trodde. Det var många andra filer jag glömde att placera. Däremot, jag tog reda på vilka som saknades genom att köra "make test" rätt så ofta. Det var mest några Anax filer som jag glömde att lägga till i config.
        <br><br>
        När jag publicerade på Packagist fick jag ett fel, mitt vendor namn hade redan använts. Problemet var att jag glömde ändra Anax som vendor till mitt eget på filen composer.json. Därefter gick det smidigt att publicera och använda.
        <br><br>
        Att installera modulen gick inte så smidigt i början, jag fick ändra min scafffold/bash fil ett par gånger innan den syncade filerna korrekt. Det går att följa mina instruktioner nu. Det är ju i princip bara att köra composer require och köra bash filen i scaffold.
        <br><br>
        Jag fick runt 70% kodtäckning på mina enhetstester. Tidigare hade jag 100% men eftersom jag fick ändra modulen för att använda multi_curl, då hittade jag inget sätt att enhetstesta den funktionen som ligger i $di tjänsten. Den funktionen är inte min egen kod, därför blir det svårt för mig att förstå exakt vad funktionen gör för att anropa API:et så många gånger.
        <br><br>
        Moduler underlättar för att integrera ens kod i en större sammanhang. Det blir tydligare med vem som skapat vad, och det kan vara enklare att felsöka eftersom man vet vilken modul är det som
        strular. Å andra sidan blir det många mappar att ha koll på, utan en modul kan upplevas enklare att navigera bland mappar och filer.
        <br><br>
        Jag undersökte Laravel. De använder också composer, men de har flera alternativ för att skapa ett paket beroende på om man vill att modulen ska kunna anpassa sig i flera ramverk eller just Laravel. De har även en CLI som heter Artisan. För versionshantering använder de tokens och timestamps. Jag läste bara översiktligt, svårt att endast läsa dokumentationen något exempel.
        <br><br>
        Min TIL är att bash är ett bra verktyg när det gäller installationen av en modul. Det underlättar för att lägga till filerna i rätt mapp utan att skriva över de som redan finns. Jag känner fortfarande lite magiskt med Anax CLI men förstår tanken bakom det, att installera Anax för att testa modulen.
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
      <div class="card-body text-left">

        Jag valde att integrera alla verktyg som fanns med i artikeln. Förutom codeclimate test coverage, eftersom det skulle vara samma coverage som scrutiziner. Det gick okej att integrera dem. Jag fick några felmeddelande som fixades genom att redigera composer.json. Jag hade alltid modulen remserver som referens.
        <br><br>
        Jag uppskattade scrutinizer mest, p.g.a man får tre badges på en gång  (build, betyg och coverage). Och det är lätt att uppdatera med en "refresh" knapp. Dessutom tyckte jag att det var trevligt med en gitter badge.
        <br><br>
        Jag fick 9.65 kodkvalitet. Jag kunde ha fått 10 men in i $di tjänsten har jag en multi_curl funktionen som inte är min, jag ska skapa en egen multi_curl om jag hinner. Men man för nöja sig med betyget ibland.?
        <br><br>
        Jag delade upp Controller klassen lite till för att kunna enhetstesta lite bättre. Men i princip är nästan bara funktionen i $di som jag bör fixa för att få högre coverage.
        <br><br>
        Jag undersökte Laravel som vanligt och det verkar som att deras tester heter "Dusk tests" . Tjänster de nämner på dokumentationen är TravisCI, Heroku CI, Codeship, CircleCI.  Heroku och Codeship liknar Scrutinizer enligt deras exempel.
        <br><br>
        Modulerna som finns på Anax har bra betyg. Vissa av dom har även 10 som betyg och 100% coverage. Jag tycker att man ska inte nå alltid betyg 10 eller perfekt coverage. P.g.a det kan bli mycket jobb bara för att få lite högre jobb. Om tid/ork/lust finns, då kan det vara smart att höja betyget. Annars kan man lämna det till nästa tillfälle.
        Min TIL är att börja koppla ett git repo direkt på CI tjänster. Då blir det lätt att få högre betyg och coverage i längden.

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
      <div class="card-body text-left">
        Modulen anax/htmlform är ett smidigt sätt för att implementera formulärhantering och CRUD. Mikael nämnde i streamen att CRUD kan upplevas som repetitivt och tråkigt. Den här modulen sparar massor med tid. Däremot, om man använder Bootstrap som jag, blir man tvungen att ändra lite på de originella vyerna.
        <br><br>
        Jag hittade några lösningar på Laravel (php artisan make:request StoreBlogPost) och Symfony (symfony/validator och /form). Anax är typ en blandning av dem. Man delar upp formulärhanteringen på själva HTML, valideringen och renderingen i Controllern.
        <br><br>
        Fördelen med Active record är att det blir mycket mer läsbart och går att spara informationen i variabler, vilket gör det återanvändbar. Däremot, det kan bli lite strul när man indexerar stora tabeller eller försöker visa en vy på andra sätt. Active record kan alltså begränsa vad man kan göra med en relationsdatabas jämfört med rå SQL kod.
        <br><br>
        Andra ramverk har många sätt att integrera ActiveRecord. Man kan välja att skriva rå SQL-kod, vanlig ActiveRecord eller en blandning av dem. Det beror alltså på tillfället. Att koppla databasen på andra ramverk är nästan exakt samma som på Anax.
        <br><br>
        Scaffolding hjälper enormt när det gäller att placera filerna där de behövs. Särskilt kombinationen med bash och rsync gör det väldigt smidigt för att kunna integrera moduler i ens kod. Å andra sidan, om det blir för många filer/kataloger, kan man vara svårt att ha koll på vilken fil/mapp beror på vilken. Det blir svårt att felsöka då om man inte placerat själv filerna.
        <br><br>
        Andra ramverk använder mest scaffolding på CSS och JavaScript kod med hjälp av npm. Det är ju för att snabba upp ens workflow. Men många föredrar nog mest att styra deras egna filer genom ett pakethanterare.
        <br><br>
        Om man ska jobba med en extern modul bör den vara enhetstestat tidigare. Man ska ju inte enhetstesta en kod som någon annan har skrivit. Det man kan göra är enhetstesterna för nya klasser och controllers man skapat med modulen.
        <br><br>
        Min TIL är att ActiveRecord är ett smidigt sätt för att kunna snabba upp de tråkiga aspekter av programmering på ett ramverk. Även om man scaffoldar på några sekunder kan det kan bli svårt att felsöka ibland (som brukar ta lång tid).
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
        Krav 1,2,3:
        <br><br>
        Webbsidan skyddas av inloggning genom att ändra routerns handler, beroende på om sessionen är aktiv eller inte. Man omdirigeras till inloggning sidan om man försöker t.ex nå Forumet. Man kan skapa en ny användare om man inte har inloggningsuppgifterna. En gravatar skapas per automatik beroende på mailadressen man angivit. Funktionen för att göra det fick jag från den oficiella gravatar webbsidan → http://en.gravatar.com/site/implement/images/php/.
        <br><br>
        När man loggar in, kan man då navigera som vanligt. På navbaren finns home, about, profile och forum som alternativ. På profil sidan (/profile) kan man se sina egna uppgifter samt uppdatera dem. På första sidan (/) finns det ett välkomstmeddelande samt de senaste frågorna, mest aktiva användare och de populäraste taggarna. För att få informationen använde jag ActiveRecord och SQLite vyer. Jag valde att inte krångla med PHP och hade en SQL vy för förstasidan. Samma sak gäller för forumet och alla andra routes. Jag skapade alltså en SQLite vy för varje route.
        <br><br>
        För att kunna ställa frågor, svara, kommentera osv har jag använt modulen HTMLform. Jag tyckte att det var ett smidigt sätt att få Active Record och validering. Alla taggar och användarna finns som länkar på varje vy. Man kan se alla användare via ”forum/users”, alla taggar via ”forum/tags” och ställa en fråga via ”forum/ask”. För att kommentera eller svara gör man det direkt på frågan. Man kommer åt en fråga via forum/question/ID. Allt skrivs i Markdown med hjälp av min Filter klass.
        <br><br>
        Det jobbigast med projektet var SQL tabellerna. Jag fick joina hur många tabeller som helst och det blev rätt så många Active Record klasser då. Jag fick också köra en bash fil rätt så mycket för att kunna  återställa mina vyer. Jag gissar att man kan nog hantera det mesta med Anax, men jag valde att träna lite på SQLite vyer och det gick bra till slut. Nästa gång ska jag hitta en smidigare lösning.
        <br><br>
        Kursen var lite udda jämfört med de andra dbwebb-kurserna. Kursmomenterna handlade om väldigt mycket teori och bara lite om ramverket. Jag fick kämpa rätt så hårt med projektet, eftersom jag löste mina kmom på det ”enklaste” sättet, men projektet var alltså en riktig utmaning för mig. Jag är nöjd med kursen, men jag skulle vilja lära mig alla verktyg från ramverket innan projektet. Det var kanske mitt fel att inte läsa /verktyg delen från Anax. Men jag fick lära mig det ändå.

        Jag ger kursen en 7 som betyg.
      </div>
    </div>
  </div>
</div>
