<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinosaurusController extends Controller
{

    public function create()
    {
        // da biste se kretali kroz direktorijume unutar view foldera
        // koristite tacku
        return view('dinaosaurus.dinosaurus-create');
    }

    public function store(Request $request)
    {
        $vrsta = $request->input('vrsta');
        $brZuba = $request->input('brZuba');

        $odogovor = [
            'vrsta' => $vrsta,
            'broj zuba' => $brZuba
        ];

        // pravilno bi bilo da vratimo redirect na rutu gde se prikazuju svi dinosaurusi medjutim,
        // vracamo ovaj odogvor kako bismo videli da Laravel automatski
        // nizove pretvara u JSON i kao takve ih vraca na klijenta.
        return $odogovor;
    }
}
