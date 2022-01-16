@extends('layouts.app')
@section('content')


<!doctype html>
        <head>
                <meta charset="UTF-8">
        </head>

<body>
@if (Auth::check())
        <div class="banner">
                <div class="navbar"> 
                        <img src="/img/logo.png" class="logo">
                        <ul>
                                <li><a href="newreservation">Réservation</a></li>
                                <li><a href="deconnexion">Deconnexion</a></li>
                        </ul>
                </div>

                <div class="content">
                        <h1>HOTEL HOKELE</h1>
                        <p>L'hôtel idéal au meilleur prix !
                        </br>Vous voilà sur la page d'accueil de mon hotel "Hokele".</p>
                </div>
        </div>
@endif

@if (!Auth::check())
        <div class="banner">
                <div class="navbar"> 
                        <img src="/img/logo.png" class="logo">
                        <ul>
                                <li><a href="newreservation">Réservation</a></li>
                                <li><a href="login">Connexion</a></li>
                                <li><a href="register">Inscription</a></li>

                        </ul>
                </div>

                <div class="content">
                        <h1>HOTEL HOKELE</h1>
                        <p>L'hôtel idéal au meilleur prix !
                        </br>Vous voilà sur la page d'accueil de mon hotel "Hokele".</p>
                </div>
        </div>
@endif
</body>
</html>
@stop
