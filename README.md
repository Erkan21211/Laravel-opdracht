# Laravel-opdracht

<h5>Opdracht van <strong>Cotit</strong>.</h5>

<p>

1.	Maak een simpele contact formulier.

2.	Waar je je naam, achter_naam, email, en een telefoon_nummer moet invullen, sla de naam, acthter_naam, email en telefoon_nummer op in een database.


3.	De email mag maar 1x gebruikt worden, hij moet dus uniek zijn. 
1.	Toon een melding als de email al bestaat.

4.	Toon een pagina met alle opgevoerde data.

5.	Je kan een contact bewerken.


6.	Je kan een contact verwijderen
</p>

<h1>SETUP/INSTALLATIE:</h1>


1. download WAMP https://sourceforge.net/projects/wampserver/ (mag ook eigen soort software gebruiken vergelijkbaar aan wamp)<br>
    <br>
    a. DOWNLOAD alle microsoft visual C++ redistributable versions zodat wamp gelijk werkt en geen problemen oplevert.

2. start Wamp<br>
    <br>
    a. Note: 3 van 3 services werken van WAMPSERVER

3. set PHP versie voor 8.0.2 voor Composer en WAMP in C:\wamp64\bin\php<br>

    https://getcomposer.org/Composer-Setup.exe
    <br>
    https://www.php.net/releases/8_0_2.php
    <br>
    Note:PHP 8.0.2 of hogere versie

4. Open de map met code-editor(bvb: visuel studio code)<br><br>

5. Open een nieuwe console/terminal (terminal -> new terminal)<br><br>

5.5 type: 
`cd example-app`<br><br>

6. type 
`composer update`

[7] .env.example bestand naam veranderen naar --> `.env`<br><br>
7. En type ---> php artisan `config:clear`<br><br>
    7.1 Daarna import de database layout --> `php artisan migrate`<br><br>
    7.2 type; `php artisan migrate:refresh`<br><br>


8. Daarna import de database layout --> `php artisan migrate`<br><br>

9. Start de server --> php artisan serve<br><br>


9. En ga naar deze URL: http://127.0.0.1:8000/contact

    als je hier bent krijg je nog screen te zien
    rechts-boven zie je: Generate Key knop klik daarop
    En daarna relaad de pagina



10. Setup klaar & app klaar om te gebruiken.<br>
http://127.0.0.1:8000/contact
