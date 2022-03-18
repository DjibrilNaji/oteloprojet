@extends('layouts.app')

@section('content')
<form method="get" action="{{ route('categorie.indexOneCategorie')}}">

<div class="banner">
    <div class="navbar">
        <img src="/img/logo.png" class="logo" alt="">
        <ul>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="deconnexion">Deconnexion</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="form-group">
        <label for="sel1">Sélectionnez une catégorie</label>
        <select name="categorie_id" class="form-control" id="sel1">
            <option value=1>Standard</option>
            <option value=2>Confort</option>
            <option value=3>Premium</option>
            <option value=4>Luxe</option>
            <option value=5>Raffraichir</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
<br/>

<table class="table table-hover table-sm">
    <thead class="thead-dark">
    <tr>
        <th> id</th>
        <th> nbCouchage</th>
        <th> porte</th>
        <th> etage</th>
        <th> idCategorie</th>
        <th> Categorie</th>
        <th> baignoire</th>
        <th> prixBase</th>

    </tr>
    </thead>
    <tbody>

    @foreach($chambres2 and $categories as $chambre )
    <tr>
        <td> {{$chambre->id}}</td>
        <td> {{$chambre->nbCouchage}}</td>
        <td> {{$chambre->porte}}</td>
        <td> {{$chambre->etage}}</td>
        <td> {{$chambre->categorie_id}}</td>
                <td>{{$categories[$chambre->categorie_id-1]->libelle}}</td>
        <td> {{$chambre->baignoire}}</td>
        <td> {{$chambre->prixBase}}</td>
    </tr>
    @endforeach

    </tbody>
</table>
</form>

@stop
