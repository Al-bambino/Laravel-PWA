<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home</title>
</head>
<body>

        {{-- u dvosturkim viticastim zagradama ispisujemo varijablu --}}
        {{-- Blade fajlovi se kompaliraju na php --}}
        {{-- dvostruke vitacste su zamena za php echo $studenti  --}}
        {{-- te samim tim  mozete pristupati i klasicnim php i laravel metodama --}}

        {{-- Ovde koristim varijablu studenti jer sam u kontroleru naveo kao kljuc 'studenti' --}}
        {{-- te sad mogu pristupiti toj varijabli sa $  --}}
    <h1>  Imamo  {{ count($studenti) }} studenta </h1>

    <ol>
        {{-- Sa @ simbolom pristopamo baldeovim komandama --}}
        {{-- MOzete  pisati sve petlje u blade, bitno je  samo da ih zatvorite --}}
        @foreach($studenti as $student)
            <li> {{$student['ime']}} </li>
        @endforeach

        {{-- Sintaksa za ostale petlje je ista --}}
        @if(count($studenti) > 2)
            <h3>Ima vise od 2 studenta</h3>
        @elseif(count($studenti) > 1)
            <h3>Ima dva studenta</h3>
        @else
            <h3>NEma dva</h3>
        @endif
    </ol>
</body>
</html>
