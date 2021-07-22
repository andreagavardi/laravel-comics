@extends('layout.admin')

@section('title','Edit Comic')


@section('main_content')
<div class="container d-flex flex-column">
    <h1 class="align-self-center mt-2">Modifica</h1>
    @include('partials.errors')
    <form action="{{route('admin.comics.update',$comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci il titolo" aria-describedby="helpId" value="{{$comic->title}}">
            <small id="helpId" class="text-muted">Inserisci il titolo del fumetto</small>
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
            <small id="helpId" class="text-muted">Inserisci la descrizione del fumetto</small>
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="url" aria-describedby="helpId" value="{{$comic->thumb}}">
            <small id="helpId" class="text-muted">Inserisci l'url del fumetto</small>
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="text" name="price" id="price" class="form-control" placeholder="prezzo" aria-describedby="prezzo" value="{{$comic->price}}">
            <small id="prezzo" class="text-muted">prezzo del fumetto</small>
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" class="form-control" placeholder="serie" aria-describedby="prezzo" value="{{$comic->series}}">
            <small id="prezzo" class="text-muted">serie di appartenenza</small>
        </div>
        <div class="form-group">
            <label for="sale_date">Data di Uscita</label>
            <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="yyyy-mm-gg" aria-describedby="data" value="{{$comic->sale_date}}">
            <small id="data" class="text-muted"></small>
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" name="type" id="type" class="form-control" placeholder="" aria-describedby="type" value="{{$comic->type}}">
            <small id="type" class="text-muted">Genere del fumetto</small>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" class="form-control" placeholder="Nome e Cognome" aria-describedby="helpId" value="{{$comic->author}}">
            <small id="helpId" class="text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary">DONE</button>
    </form>
</div>
@endsection
