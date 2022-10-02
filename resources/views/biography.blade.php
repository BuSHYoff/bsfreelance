@extends('layouts.master')

@section('title', 'Biographie')
@section('cssFile',asset('css/menu.css'))

@section('content')
    @include('layouts.menu')
    <div class="biography">
        <div class="biographyTxt">
            <h1>Qui suis-je ?</h1>
            <p class="biography">Actuellement en formation pour devenir... Et bien je ne sais pas encore :) En effet je souhaiterais sûrement poursuivre mes études afin de m'orienter vers un métier en pleine effervescence tel que de la recherche en IA par exemple ! Néanmoins, avec mes compétences actives, je propose plusieurs services tel que du développement d'application web/logiciel ou bien mobile que ce soit pour des particuliers ou des entreprises. Je suis ouvert à toutes propositions de service informatique.<br />Si vous souhaitez me contacter pour d'éventuel service, n'hesitez pas à cliquer sur l'onglet "Contact".
        </div>
        <img src="images/ppBS.jpg" alt="" id="pp">
    </div>
@endsection