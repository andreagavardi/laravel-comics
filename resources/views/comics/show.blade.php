@extends('layout.app')
@section('title','Comic Page')

@section('main_content')
<div class="jumbotron">
    <div class="container_sm">

        <div class="thumb">
            <img src="{{$comic['thumb']}}" alt="">
            <a href="{{route('comics')}}">View Gallery</a>
        </div>
    </div>
</div>
<div class="banner"></div>
<div class="comic_details">

    <div class="container_sm">
        <div class="col_left">
            <h1>{{$comic['title']}}</h1>
            <div class="price_details">
                <div class="sell">
                    <div class="price">
                        <span class="yellow">U.S. Price:</span>
                        <span> {{$comic['price']}}</span>
                    </div>
                    <div><span class="yellow">AVAILABLE</span></div>
                </div>
                <div class="check_availability">
                    <a href="#">Check Availability</a>
                </div>

            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="col_right">
            <h3>advertisement</h3>
            <img src="{{asset('img/adv.jpg')}}" alt="Pubblicità">
        </div>
    </div>
</div>
<div class="comic_details_bottom">
    <div class="container_sm">
        <div class="col_6">
            <h3>Talent</h3>
            <div class="artists">
                <span class="title">Art By:</span>
                <div class="artists_details">
                    @foreach($comic['artists'] as $artist)
                    <span>{{$artist}}</span>
                    @if(!$loop->last)
                    <span>,</span>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="writers">
                <span class="title">Written By:</span>
                <div class="writers_details">
                    @foreach($comic['writers'] as $writer)
                    <span>{{$writer}}</span>
                    @if(!$loop->last)
                    <span>,</span>
                    @endif
                    @endforeach

                </div>
            </div>
        </div>
        <div class="col_6 specs">
            <h3>Specs</h3>
            <div class="series">
                <div class="col_6">
                    <span class="title">Series:</span>
                </div>
                <div class="col_6">
                    <a href="#">{{$comic['series']}}</a>
                </div>

            </div>
            <div class="specs_price">
                <div class="col_6">
                    <span>U.S. Price :</span>
                </div>
                <div class="col_6">
                    <span>{{$comic['price']}}</span>
                </div>
            </div>
            <div class="sales_date">
                <div class="col_6">On Sale Date:</div>
                <div class="col_6">{{$comic['sale_date']}}</div>
            </div>

        </div>
        <div class="dc_banner">

        </div>
    </div>
</div>



@endsection
