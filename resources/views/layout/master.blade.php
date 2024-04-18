<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'title page')
    </title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="{{ route('eleve.index') }}">Eleve</a></li>
            <li><a href="{{ route('club.index') }}">Club</a></li>
            <li><a href="{{ route('activite.index') }}">Activite</a></li>
        </ul>
    </nav>
    <main>
        <h1>Gestion des éleves</h1>
        @yield('content')
    </main>

</body>

</html>
