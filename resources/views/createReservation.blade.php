@extends('layouts.app')

@section('content')
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter une reservation</title>
</head>

<body>

<div class="container">
    <form method="post" action="{{ route('reservation.store')}}">
        @csrf

        <div class="banner">
            <div class="navbar">
                <img src="/img/logo.png" class="logo" alt="">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                </ul>
            </div>
        </div>

        <div class="form-group">
            <label for="exampleInputDate1">Date Debut</label>
            <input name="dated" type="date" class="form-control @error('dated') is-invalid @enderror"
                   id="exampleInputEmail1">
            @error('dated')
            <div class="alert alert-danger mt-2">
                Les dates ne sont pas correctes
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputDate1">Date Fin</label>
            <input name="datef" type="date" class="form-control" id="exampleInputDateF1">
        </div>
        <div class="form-group">
            <label for="sel1">Sélectionnez la catégorie</label>
            <select name="categorie_id" class="form-control" id="sel1">
                <option value=1>Standard</option>
                <option value=2>Confort</option>
                <option value=3>Premium</option>
                <option value=4>Luxe</option>
                <option value=5>Raffraichir</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sel1">Sélectionner la période : </label>
            <select name="idperiode" class="form-control" id="sel1">
                <option value=1>basse</option>
                <option value=2>moyenne</option>
                <option value=3>haute</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
@stop
