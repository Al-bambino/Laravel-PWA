# Laravel-PWA
This repository contains Laravel project for Programming Web applications course.

# Instalacija Laravela
Da biste instalirali Laravel, potrebno je da instalirate [Composer](https://getcomposer.org/).
* **Windows -** skinite samo .exe fajl i pritiskajte next.
  Ako imate instaliran XAMPP na vasim racunarima, instalcija bi trebalo da prodje glatko.
* **MacOS -** kopirajte komande u terminal, instalacija bi trebalo da prodje glatko jer vec imate PHP.
* **Linux -** ako koristite Linux trebalo bi sami da znate da instalirate compser.

Da biste testirali instalaciju ukucajte u command prompt ili terminal `composer`, trebalo bi da dobijete listu komandi.

Potom proverite i da vam je setvan globalni path za PHP (sta god to znacilo), kucajte u terminal `php --version` i ako dobijete bilo koju verziju - odlcino. U suporotnom guglajte kako da dodate PHP u global path.
Ukoliko je sve proslo kako treba, u terminalu odite do foldera gde zelite da napravite laravel aplikaciju i kucajte **jednu** od sledece dve komande:
* `laravel new projekat`
* `composer create-project --prefer-dist laravel/laravel projekat`

pri cemu slobodno zamenite projekat sa bilo kojim nazivom.
Detaljnije o instalaciji imate na [linku](https://laravel.com/docs/5.8/installation)

# Startovanje projekta
Ukoliko skidate ovaj projekat, a niste upozanti sa gitom ili githubom, najjednostavnije je da idete na download.

Ukoliko ste napravili svoj projekat pa vas interesuje samo kako da ga pokrenete u browseru, onda nije trebalo da procitate prethodni red.

Buduci da i dalje pisemo php (samo sad uz pomoc frejmvorka), treba nam server koji ce taj kod da izvrsava.
Najjednostavnija varijanta je da koristite PHP-ov ugradjen server. 
U svom terminalu odite do lokacije gde vam se nalazi projekat (pr. 'C:/Users/todor/Documents/projekat'). Kada ste u usli u projekat ukucajte `php artisan`.
Dobicete listu komandi koje mozete izvrstit sa artisanom - Laravelova konzolna aplikacija koja vam daje bezbroj mogucnosti.
Jedna od prvih u listi komandi je  **serve** koja pokrece PHPov sever, te ukucajte `php artisan serve` i odite na datu ip adresu.

Otovorite projekat u svom **[editoru](https://www.jetbrains.com/phpstorm/)** i pocnite istrazivanje u **routes/web.php** fajlu.

# Prvi cas
Radili smo blade-ove, Laravelov template engine. Pogledajte folder **/resources/views**, tu se nalaze svi vasi view-ovi.
Obavezno procitajte [dokumentaciju](https://laravel.com/docs/5.8/blade).
Kako se ti view-ovi dobijaju na browseru? Preko urla. Definisanje url-ova u Laravelu se radi u **routes/web.php** fajlu.

# Drugi cas 
Kontroleri - nalaze se u folderu **app/Http/Controllers**. Omogucavaju nam preglednije pisanje koda. Zaduzeni su za obradu requesta.
Dokumentacija:
* [Lifecycle](https://laravel.com/docs/5.8/lifecycle)
* [Routing](https://laravel.com/docs/5.8/routing)
* [Controllers](https://laravel.com/docs/5.8/controllers)

# Treci cas 
Modeli i REST metode za CRUD operacije.
U .env fajlu se nalaze podaci za konekciju ka bazi, ukoliko koristite XAMPP, nema potrebe da menjate nista osim naziva baze.
* [Modeli](https://laravel.com/docs/5.8/eloquent)

# Cetvrti cas
Radili smo migracije **database/migrations** i i validaciju requesta sa Request klasom u **app/Http/Requests**
* [migracije](https://laravel.com/docs/5.8/migrations) i 
* [validaciju requesta](https://laravel.com/docs/5.8/validation)
