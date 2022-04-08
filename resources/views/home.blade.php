@extends('layouts.app')
@section('content')

<div class="banner">
    <div class="navbar">
        <img src="/img/logo.png" class="logo">
        <ul>
            <li><a href="accueil">Accueil</a></li>
            <li><a href="newreservation">Reservation</a></li>
            <li><a href="deconnexion">Deconnexion</a></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
