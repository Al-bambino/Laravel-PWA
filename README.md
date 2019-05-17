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
