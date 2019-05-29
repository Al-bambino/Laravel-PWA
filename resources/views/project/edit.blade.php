<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>EDIT</h2>
<form method="POST" action="/projects/{{ $project->id }}">
    @csrf
    @method('PUT')
{{--    Posto html forma ne podrzava slanje DELETE, PUT, i PATCH requesta, --}}
{{--    moramo da koristimo blade da bismo rekli laravelu da saljemo neki od tih requestova--}}


    <label> Naziv</label>
    <input type="text" name="naziv" value="{{$project->naziv}}">

    <label>Broj bodova</label>
    <input type="number" name="brojBodova" value="{{$project->broj_bodova}}">

    <input type="submit">

</form>
</body>
</html>
