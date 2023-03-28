# Welkom bij mijn PHP MVC Framework

## Wat is dit?

Dit is een PHP MVC Framework dat ik heb gemaakt voor mijn eigen projecten. Het is niet bedoeld om te gebruiken voor andere projecten, maar als je het toch wilt gebruiken, dan mag je het natuurlijk wel doen.

## Hoe werkt het?

Het framework is opgebouwd uit een aantal bestanden en mappen. De belangrijkste bestanden zijn:

* `app/Controllers/Reservation.php` - Dit is een voorbeeld controller. Waar ik een reservatie systeem heb gemaakt.
Zo kan je zien hoe het werkt en hoe je een controller maakt.
* `app/Models/ReservationModel.php` - Dit is een voorbeeld model. Hier heb ik alle database queries staan die te maken hebben met de reservatie tabel.
* `app/Views/reservation/index.php` - Dit is een voorbeeld view. Hier heb ik een voorbeeld van hoe je een view maakt.

## Wat heb ik nodig?

* PHP 8.2 of hoger
* MySQL 8.0 of hoger
* Composer
* NPM

## Wat moet ik doen om het te gebruiken?

1. Clone de repository
2. Voer `composer install` uit
3. Voer `npm install` uit
4. Gebruik de `database.sql` om de database te maken
5. Dupliceer het bestand `.env.example` en noem het `.env`
6. Vul de gegevens in van je database in het `.env` bestand
7. Voer `npm run dev` uit om de php server te starten voor locaal gebruik

## Documentatie van onderdelen

* [twig](https://twig.symfony.com/doc/3.x/)
* [phpdotenv](https://github.com/vlucas/phpdotenv)
* [symfony/validator](https://symfony.com/doc/current/validation.html)
* [symfony/var-dumper](https://symfony.com/doc/current/components/var_dumper.html)
* [phpunit](https://phpunit.readthedocs.io/en/9.5/)
