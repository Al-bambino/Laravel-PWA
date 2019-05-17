<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * Kontrolere pravimo komadnom iz terminala/komand-promta:
 *  php artisan make:controller NazivControllera
 * Artisan je Laravelova konzolna aplikacija koja nam pojednostavljuje i ubrazava rad
 * sa Laravelom.
 *
 * Da biste videli sta mozete da uradite sa artisanom kucajte:
 *  php artisan
 */
class IndexController extends Controller
{

    public function home()
    {
        $studenti = [
            0 => ['ime' => "Todor", 'godinaUpisa' => 2016],
            1 => ['ime' => "Petar", 'godinaUpisa' => 2014]
        ];

        /*
         * view metoda prima dva argumenta:
         *  1. naziv view-a koji treba da se prikaze korisniku (obratite paznju da ne treba pisati
         *          pun naziv viewa tj. .blade.php.)
         *      Svi vasi viewovi se nalaze u resources/views folderu
         *  2. Drugi argumetn je asocijativni niz podataka koje saljete na view,
         *      gde je kljuc naziv varijable (kako ce se ona zvati na viewu), a vrednost - vredost te varihable
         */
        return view('welcome', ['studenti' => $studenti]);
    }


    /**
     * Koristimo tzv. method injection da dobijem objekat klase Request.
     * U klasi Request nalaze se svi podaci koje mozemo da dobijemo o tom requestu
     * (ruta, metod, podaci koje se salju...).
     * Najbitnije su metode all() - vraca sve podatke(atribute) iz requesta
     * i input('key') -  vraca atribut 'key' iz requesta ako ga ima
     *
     * Request je najcesca klasa koju cete traziti kao method injection.
     * Method/dependency injection mozete da koristite u:
     *  1. Kontrolerima
     *  2. Eventovima/Listenerima
     *  3. Jobivima
     *  4. itd.
     * Na ovom kursu cemo se dotaci samo kontrolera.
     *
     * @param Request $request
     */
    public function primer(Request $request)
    {
        $sviAtributi = $request->all();

         /*
          * Metoda dd je najbitnija metoda za debagovanje
          * prima jedan argument - sta zelite da ispisete.
          * Skraceno od 'drop and die', vas kod se posle ove funkcije ne izvrsava.
          */
//        dd($sviAtributi);

        $name = $request->input('name');

        // ako vam vraca null, dodajte na url atribut name i dajte mu neku vrednost
        // pr. /primer?name=Ivo&prezime=Andric
        dd($name);
    }

    /**
     * Collection klasa iz Illuminate paketa je jedna od najbitnijh Laravelovih klasa.
     * Popularno je zovu i 'niz na steroidima'.
     * Klasa ima boga oca metoda koje mozete, i trebalo bi, da pogledate ovde:
     *      https://laravel.com/docs/5.8/collections
     */
    public function kolekcije()
    {
        $sateliti = new Collection();

        // ubacujem niz u kolekciju
        $sateliti->push([
            'ime' => 'Voyager 1',
            'godina' => '1977'
        ]);

        $sateliti->push([
            'ime' => 'Mesec',
            'godina' => '0'
        ]);

        // Klasa Collection cuva vase iteme kao polje (atribut) klase
        // da biste im pritupili koristite metodu all()
        $sviSateliti = $sateliti->all();

        /*
         * Cesto cete vidjati ovako nesto.
         * Ovo je ulancavanje metoda, i moguce je raditi ga na Collection-u
         * zato sto gotovo svaka metoda  vraca objekat nove kolekcije (proandjite koja ne vraca :) ), te vi opet
         * mozete pozvat novu metodu. §
         */
        $filter = $sateliti->where('godina', '>', 1900)
                            ->where('ime' , '=', 'Voyager 1')
                            ->count();



        $arr = [1, 2, 3 ,5];

        $coll = collect($arr); // mozete napraviti Collection i od niza

        /*
         * Map metoda poziva prosledjenu funkciju nad svakim elemetnom kolekcije.
         * Pravi novu kolekciju i u nju stavlja ono sto vrati funkcija.
         */
        $pomonozena = $coll->map(function ($element) {
            return $element * 5;
        });
        dd($pomonozena->all());
    }
}
