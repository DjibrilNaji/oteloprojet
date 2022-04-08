@extends('layouts.app')
@section('content')

<div class="banner">
    <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <ul>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="deconnexion">Deconnexion</a></li>

        </ul>
    </div>
</div>

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
        <th> description</th>

    </tr>
    </thead>
    <tbody>

    @foreach($chambres2 and $categories as $chambre)
    <tr>
        <td> {{$chambre->id}}</td>
        <td> {{$chambre->nbCouchage}}</td>
        <td> {{$chambre->porte}}</td>
        <td> {{$chambre->etage}}</td>
        <td> {{$chambre->categorie_id}}</td>
        <td>{{$categories[$chambre->categorie_id-1]->libelle}}</td>
        <td> {{$chambre->baignoire}}</td>
        <td> {{$chambre->prixBase}}</td>
        <td> {{$chambre->description}}</td>


    </tr>
    @endforeach

    </tbody>
</table>
@stop
