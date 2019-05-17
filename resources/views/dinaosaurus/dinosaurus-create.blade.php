@extends('dinaosaurus.layout') {{-- Definisemo koji view nasledjujemo, obratite putanju do viewa --}}

@section('body') {{-- Sa section oznacavamo pocetak sekcije koju zelimo da zamenimo u parentu --}}
    <form method="POST" action="/dinosaurus">
        @csrf
        {{-- Bitna stvar za primetiti je csrf token koji Laravel zahteva da svaka forma sa --}}
        {{-- POST metodom ima --}}
        <label for="vrsta">Vrsta</label>
        <input type="text" name="vrsta" id="vrsta"><br>

        <label for="brZuba">Broj zuba</label>
        <input type="number" name="brZuba" id="brZuba"><br>

        <label for="duzinaVrata">Duzina vrata</label>
        <input type="number" name="duzinaVrata" id="duzinaVrata"><br>

        <input type="submit">
    </form>
@endsection
