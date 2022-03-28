@extends('layouts.app')

@section('content')

    <div class="banner">
        <div class="navbar">
            <img src="/img/logo.png" class="logo" alt="">
            <ul>
                <li><a href="accueil">Accueil</a></li>
                <li><a href="deconnexion">Deconnexion</a></li>
            </ul>
        </div>
    </div>
<a class="btn btn-primary" href="categorie">Chambres par catégorie</a>
<br/>
<br/>
<a class="btn btn-primary" href="chambres">Toutes les chambres</a>
<br/>
<br/>
<a class="btn btn-primary" href="chambres2">Chambres idCategorie=3</a>
<br/>
<br/>
<a class="btn btn-primary" href="disponibilites">Disponibilite</a>
<br/>
<br/>
<a class="btn btn-primary" href="prixDecroissant">Chambre de la moins cher a la plus cher</a>
<br/>
<br/>
<a class="btn btn-primary" href="addCategorie">Formulaire ajout d'une categorie</a>
<br/>
<br/>
<a class="btn btn-primary" href="vueSurMer">Chambre avec vue sur mer</a>



