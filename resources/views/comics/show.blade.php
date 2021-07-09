@extends('layout.app')
@section('title','Comic Page')
@section('main_content')
<div class="jumbotron">
    <div class="series">
        <h2>current series</h2>
    </div>
</div>
<div class="comics_series">
    <div class="container">

        <div class="comic">
            <img src="{{$comic['thumb']}}" alt="">
            <h4>{{$comic['series']}}</h4>
        </div>

    </div>
</div>



@endsection
