# Laravel-opdracht

1. download WAMP https://sourceforge.net/projects/wampserver/ (mag ook eigen soort software gebruiken vergelijkbaar aan wamp)
    a. DOWNLOAD alle microsoft visual C++ redistributable versions zodat wamp gelijk werkt en geen problemen oplevert.

2. start Wamp
    a. Note: 3 van 3 services werken van WAMPSERVER

3. set PHP versie voor 8.0.2 
    https://getcomposer.org/Composer-Setup.exe
    https://www.php.net/releases/8_0_2.php

    Note:PHP 8.0.2 of hogere versie

4. Open de map met code-editor(bvb: visuel studio code)

5. Open een nieuwe console/terminal (terminal -> new terminal)

6. En type ---> php artisan config:clear

6.1: als dat niet werkt --> De file env.example ! haal de example weg en daarna run je --> php artisan config:clear

6. Daarna import de database layout --> php artisan migrate

7. Start de server --> php artisan serve

8. En ga naar deze URL: http://127.0.0.1:8000/contact
