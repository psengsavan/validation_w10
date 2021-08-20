<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/@yield('css').css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <nav class="navbar">
                <ul>
                    <div>
                        <li><a class="lightgrey" href="/">Accueil</a></li>
                    </div>
                    <div class="scrolling">
                        <li class="lightgrey hover">Personnages</li>
                        <div class="none">
                            <li><a class="lightgrey" href="/characters">Consulter</a></li>
                            <li><a class="lightgrey" href="/addCharacter">Ajouter</a></li>
                        </div>
                    </div>
                    <div class="scrolling">
                        <li class="lightgrey hover">Artistes</li>
                        <div class="none">
                            <li><a class="lightgrey" href="/artists">Consulter</a></li>
                            <li><a class="lightgrey" href="/addArtist">Ajouter</a></li>
                        </div>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>