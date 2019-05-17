<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dinosaurus</title>
</head>
<body>
    <h1>Pocetak tela za dinosaurusa</h1>
    {{--Da ne bismo ponavljali kod na nasim view-ovima definisemo bazicni layout--}}
    {{-- gde satavaljamo kostur naseg HTMLa i CSS koji ce biti isti za sve stranice--}}
    {{-- onda svaki view dalje naslejduje nas view i nema potrebe za dupliranjem koda --}}

    @yield('body') {{-- na ovaj nacin defenisiemo dinaimcku sekciju koda, koji ce se menjati --}}
                    {{-- posto mozemo imati vise ovih sekcija moramo im dati ime --}}
</body>
</html>
