@extends('layout.admin')

@section('title','Add Comic')


@section('main_content')
<div class="container d-flex flex-column">
    <h1 class="align-self-center mt-2">Aggiungi un fumetto</h1>
    @include('partials.errors')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Inserisci il titolo del fumetto</small>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            <small id="helpId" class="text-muted">Inserisci la descrizione del fumetto</small>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="url" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Inserisci l'url del fumetto</small>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="prezzo" aria-describedby="prezzo">
            <small id="prezzo" class="text-muted">prezzo del fumetto</small>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="serie" aria-describedby="prezzo">
            <small id="prezz" class="text-muted">serie di appartenenza</small>
        </div>
        <div class="form-group">
            <label for="sale_date">Data di Uscita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="yyyy-mm-gg" aria-describedby="data">
            <small id="data" class="text-muted"></small>
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="type">
            <small id="type" class="text-muted">Genere del fumetto</small>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Nome e Cognome" aria-describedby="helpId">
            <small id="helpId" class="text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
</div>
@endsection
