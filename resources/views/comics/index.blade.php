@extends('layout.app')
@section('title','Comics Page')
@section('main_content')
<div class="jumbotron">
    <div class="series">
        <h2>current series</h2>
    </div>
</div>
<div class="comics_series">
    <div class="container">
        @foreach($comics as $comic)


        <div class="comic">
            <a href="{{route('comics.show',$comic->id)}}">

                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <h4>{{$comic->series}}</h4>


            </a>
        </div>


        @endforeach
    </div>
</div>



@endsection
