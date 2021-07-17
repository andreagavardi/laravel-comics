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
        @foreach($comics_collection as $index=>$comic)


        <div class="comic">
            <a href="{{route('comic',['id'=>$index])}}">

                <img src="{{$comic['thumb']}}" alt="">
                <h4>{{$comic['series']}}</h4>


            </a>
        </div>


        @endforeach
    </div>
</div>



@endsection
