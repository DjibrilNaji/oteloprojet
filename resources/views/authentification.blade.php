@extends('layouts.app')

@section('content')

<div class="banner">
    <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <ul>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="login">Connexion</a></li>
            <li><a href="register">Inscription</a></li>
        </ul>
    </div>
</div>

<div class="jumbotron">
    <h2 class="my-5 text-center"> Authentification nécessaire !! </h2>
    <h4 class="my-5 text-center"> Connectez vous ou incrivez vous pour pouvoir réserver </h4>
</div>
@stop
