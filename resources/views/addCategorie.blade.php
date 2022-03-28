@extends('layouts.app')

@section('content')
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une reservation</title>
</head>

<body>

<div class="container">
    <form method="post" action="{{ route('categorie.store')}}">
        @csrf

        <div class="banner">
            <div class="navbar">
                <img src="/img/logo.png" class="logo" alt="">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                </ul>
            </div>
        </div>

        <label>Nouvelle catégorie
            <br/>
            <input type="text" name="libelle" id="libelle"></label><br>

        <button type="submit" class="btn btn-primary">Submit</button>

</body>
@stop
