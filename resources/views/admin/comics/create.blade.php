@extends('layout.admin')

@section('title','Add Comic')


@section('main_content')
<div class="container d-flex flex-column">
    <h1 class="align-self-center mt-2">Aggiungi un fumetto</h1>
    @include('partials.errors')
    <form action="{{route('admin.comics.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Inserisci il titolo" aria-describedby="helpId" value="{{old('title')}}">
            <small id="helpId" class="text-muted">Inserisci il titolo del fumetto</small>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">{{old('description')}}</textarea>
            <small id="helpId" class="text-muted">Inserisci la descrizione del fumetto</small>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="thumb">Copertina</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="url" aria-describedby="helpId" value="{{old('thumb')}}" max="255">
            <small id="helpId" class="text-muted">Inserisci l'url del fumetto</small>
            @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="prezzo" aria-describedby="prezzo" value="{{old('price')}}">
            <small id="prezzo" class="text-muted">prezzo del fumetto</small>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="serie" aria-describedby="helpSeries" value="{{old('series')}}">
            <small id="helpSeries" class="text-muted">serie di appartenenza</small>
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="sale_date">Data di Uscita</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('date') is-invalid @enderror" placeholder="yyyy-mm-gg" aria-describedby="data" value="{{old('sale_date')}}">
            <small id="data" class="text-muted"></small>
            @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="type">Genere</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="" aria-describedby="type" value="{{old('type')}}">
            <small id="type" class="text-muted">Genere del fumetto</small>
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" placeholder="Nome e Cognome" aria-describedby="helpId" value="{{old('author')}}">
            <small id="helpId" class="text-muted"></small>
            @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">CREA</button>
    </form>
</div>
@endsection
