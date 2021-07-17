@extends('layout.admin')

@section('main_content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITOLO</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>SERIES</th>
                <th>SALE DATE</th>
                <th>TYPE</th>
                <th>AUTHOR</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>

            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>

                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td><img height="150" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->series}}</td>
                <td>{{$comic->sale_date}}</td>
                <td>{{$comic->type}}</td>
                <td>{{$comic->author}}</td>
                <td>{{$comic->created_at}}</td>
                <td>{{$comic->updated_at}}</td>
                <th><a href="{{route('comics.show',$comic->id)}}">VIEW</a>
                    <a href="{{route('comics.edit',$comic->id)}}">EDIT</a>
                    <a href="">DELETE</a>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
