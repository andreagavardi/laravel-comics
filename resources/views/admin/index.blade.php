@extends('layout.admin')

@section('main_content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th><a href="{{route('comics.create')}}">NEW COMIC <br><i class="far fa-plus-square"></i></a></th>
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
                <td></td>
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
                <th><a href="{{route('comics.show',$comic->id)}}">VIEW |</a>
                    <a href="{{route('comics.edit',$comic->id)}}">EDIT |</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalId">
                        DELETE
                    </button>
                    <!--END Button trigger modal -->
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="ModalId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> WARNING!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    You're going to delete this items forever
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="{{route('comics.destroy',$comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--END Modal -->

</div>
@endsection
