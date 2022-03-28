@extends('layouts.app')

@section('content')
<div class="container">

    <form method="get" action="{{ route('categorie.dispo')}}">

        <div class="banner">
            <div class="navbar">
                <img src="/img/logo.png" class="logo">
                <ul>
                    <li><a href="accueil">Accueil</a></li>
                    <li><a href="deconnexion">Deconnexion</a></li>

                </ul>
            </div>
        </div>

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
        <button type="submit" class="btn btn-primary">Submit</button>
</div>

<table class="table table-hover table-sm">
    <thead class="thead-dark">
    <tr>
        <th> id</th>
        <th> nbCouchage</th>
        <th> porte</th>
        <th> etage</th>
        <th> Categorie</th>
        <th> baignoire</th>
        <th> prix base</th>
        <th> descritpion </th>
        <!--        <th> prixBase</th>-->

    </tr>
    </thead>
    <tbody>

    @foreach($disponibilite and $categories as $chambre)
    <tr>
        <td> {{$chambre->id}}</td>
        <td> {{$chambre->nbCouchage}}</td>
        <td> {{$chambre->porte}}</td>
        <td> {{$chambre->etage}}</td>
        <td>{{$chambre->libelle}}</td>
        <td> {{$chambre->baignoire}}</td>
        <td> {{$chambre->prixBase}}</td>
        <td> {{$chambre->description}}</td>
    </tr>
    @endforeach


    </tbody>
</table>
@stop
