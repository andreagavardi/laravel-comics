@extends('layout.app')

@section('main_content')
<div class="jumbotron">
    <div class="series">
        <h2>current series</h2>
    </div>
</div>
<div class="comics_series">
    <div class="container">
        @foreach($comics_collection as $comic)
        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            <h4>{{$comic['series']}}</h4>
        </div>
        @endforeach
    </div>
</div>



@endsection
