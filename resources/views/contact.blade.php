@extends('layouts.master')

@section('title', 'Contact')
@section('cssFile',asset('css/menu.css'))

@section('content')
    @include('layouts.menu')
    <div class="card">
        <h1>Contactez moi !</h1>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label>Prénom</label>
              <input type="text">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Nom</label>
              <input type="text">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Email</label>
              <input type="text">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Téléphone</label>
              <input type="text">
            </div>
          </div>
      
          <div class="col">
            <div class="form-group">
              <label>Message</label>
              <textarea></textarea>
            </div>
          </div>
      
          <div class="col">
            <div class="form-submit-button">
                <input type="submit" value="Envoyer" class="form-submit-button">
            </div>
          </div>
        </div>
      </div>
@endsection