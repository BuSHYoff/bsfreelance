@extends('layouts.master')

@section('title','Accueil')
@section('cssFile',asset('css/home.css'))

@section('content')
    <div id="titre">Baptiste Salaud vous souhaite la</div>
    <p data-item='BIENVENUE'>BIENVENUE</p>

    <div>Service informatique - Développement web</div>
    <nav>
    <ul class="homeItems">
        <li><a href='/' data-item='Accueil'>Accueil</a></li>
        <li><a href='biography' data-item='Biographie'>Biographie</a></li>
        <li><a href='portfolio' data-item='Portfolio'>Portfolio</a></li>
        <li><a href='contact' data-item='Contact'>Contact</a></li>
    </ul>
    </nav>
@endsection