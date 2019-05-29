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
    <form method="post" action="/blogs">
        @csrf
        <input type="text" name="title" placeholder="Title" value="{{ old('title') }}">

{{--        error tag funkcionise kao if petlja prima naziv inputa, i ako ima --}}
{{--        gresaka za taj input ispisuje kod iz taga --}}
        @error('title')
{{--        Mozete korisiti $message obrjakat da ispisete gresku za dati tag--}}
            <span style="color: red"> {{ $message }}</span>
        @enderror
        <br>
        <input type="text" name="body" placeholder="Body" value="{{ old('body') }}">
        @error('body')
            <span style="color: red"> {{ $message }}</span>
        @enderror
        <br>
        <input type="number" name="points" placeholder="Points" required>
        @error('points')
            <span style="color: red"> {{ $message }}</span>
        @enderror
        <br>
        <input type="submit" value="submit">

    </form>

</body>
</html>
