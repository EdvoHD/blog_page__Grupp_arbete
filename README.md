# Grupp projekt - Edvin, Tobias, Dante

## Standards

1. Vi använde oss av camel-case, exempel(variabelNamn).

2. Vi delade upp filerna i 2 huvudmappar. 
Views var filer då nån slags html-kod existerade och visades för användaren.
Handlers tog emot data och hanterade processer som skickades ifrån formulär inifrån /views filerna.
 
 Strukturen på hur sidorna laddas in var via url tags ($_GET) som stämde av vilken view borde laddas in och visas för användaren. (index.php - rad 50).
 
 Vi använde oss utan ($_SESSION) värden för att kunna hålla inloggningen sparad på sidan. 
 Classes implementerades på posts (Se GBposts.php).
 
 
 
      

## Introduktion
Navigering som användare:
När användaren anländer till hemsidan kommer den att kunna med hjälp av navigeringsfältet navigera sig mellan 3 olika huvudsidor.
1.	Feed: här visas alla inlägg som har lagts upp utav administratören. För att användaren ska kunna se inläggen krävs det att den är registrerad och inloggad på sidan.
Registreringen görs genom att användaren klickar på register på navigeringsfältet. Användaren tas då till en ny sida där den får ange sitt namn, email och lösenord.
Har användaren redan ett konto kan den logga in med hjälp av login funktionen i navigeringsfältet.
Väll inloggad kommer användaren att kunna se alla inlägg som administratören gjort.
Inläggen kommer att kunna sorteras och antingen visa det äldsta inlägget högst upp eller det allra senaste.
Om användaren klickar på ett inlägg tas den till en ny sidan där inläggets bild, titel och beskrivning visas. På denna sida har användaren möjlighet att kommentera på inlägget. Kommentaren kan även tas bort om det önskas dock kan användaren endast ta bort de kommentarer som den själv har skrivit.
2.	About us: här kommer användaren att kunna hitta information om företaget Millhouse och villa dom är.
3.	Contact: här kommer användaren att kunna kontakta Millhouse och ställa frågor. Det görs genom att användaren anger sitt namn, efternamn, email, meddelandets ämne, och meddelande. Det finns även en adress till Millhouse, ett nummer och email.
Navigering som administratör:
Administratören kommer att ha en extra knapp i navigeringsfältet som heter Admin Panel. På admin panelen kommer administratören kunna skapa nya inlägg. För att skapa ett inlägg fyller administratören i titeln, inläggets beskrivning, väljer kategori, laddar upp en bild och klickar på Submit.
Inne på inlägg kommer administratören att ha möjligheten att redigera och ta bort inlägg också.

Syfte:
Syftet med bloggen är att grosisten Millhouse ska få närmare relation med deras slutkunder och kunna skapa dialog med dem. Kunderna ska kunna kommentera, komma med förslag och önskemål med mera.

## Use Cases
1. Registrerar ny användare genom att klicka på register. Alla fält måste vara ifyllda och filen måste vara en bild.

1.1 Registrerad användare hamnar i databas. (I databasen ändrar man role om så önskas)

1.2 Om användarnamn finns redan misslyckas registrering. Om misslyckad registrering skickas besökaren tillbaks med ett fel meddelande. Ingen avändare skapas i databasen. 

2. Loggar in på första sidan (index.php) för att komma till inläggsflödet.

2.1 Om inloggning misslyckas skickas besökaren tillbaks till sidan med felmeddelande. Alla fält måste vara ifyllda. Ingen session skapas.

2.2 inlägg visas på första sidan med senast inlägg högst upp.

2.3 inlägg visas inte när man loggar ut.

3. Loggar ut genom att klicka på "Logout" längst till höger i navbar. Användaren loggas ut och session förstörs.

4. Om role = Admin finns fliken "Admin Panel" där inlägg går att skapa. inlägg lagras i databas.

4.1 Om inläggsskapandet misslyckas skickas användaren tillbaks med ett felmeddelande. Alla fält måste vara ifyllda. Inlägget skapas inte.

5. Inlägg editas genom att klicka på ett inlägg och sedan "Edit!" som endast visas om role = Admin. Användare skickas till redigeringssidan. Alla fält måste vara ifyllda och filen måste vara en bild. ändringarna redigeras i databasen och i flödet. Misslyckas redigeringen visas felmeddelande. 

5.1 Inlägg tas bort genom att klicka på "Delete!". Inläggets kommentarer tas bort och därefter tas inlägg bort i databasen. Användare skickas tillbaks till flödet.

6. Kommentarer och kommentarsfält visas på inläggets sida under inlägg.

6.1 Kommentar skapas genom att fylla i kommentarsfältet och klicka på "Comment!". Kommentar skapas med användarens namn.

6.2 Kommentar misslyckas. Alla fält måste vara ifyllda.

6.3 Admin kan ta bort olämpliga kommentarer genom att klicka på krysset. Kommentaren tas bort från inlägg och databas.

6.4 Användare kan även ta bort sina egna kommentarer men kan inte påverka andras kommentarer.


## Sammanfatting och säkerhet

Projektet lyckades och vi har fått en slutgiltig produkt. 
Produkten har många förbättringsområden men det är en bra start. 
Vi löste de usecases som krävdes och med få hinder.

Våra hinder var att påbörja posts & comments vilket tog en tid att planera upplägget. 
Efter planeringen så flöt arbetet på galant. 

Förbättringsmöjligheter:
- Kunna uppdatera en post utan att behöva re-upload sin bild.
- Kunna ta bort sitt konto som användare.
- Admin ska kunna ta bort användarkonton.
- HTML säkerhet på UPDATE post ( fick inte det att lira till 100% ).

html kod går ej att få igenom inuti kommentarer, utan de slutar endast som vanlig text.



