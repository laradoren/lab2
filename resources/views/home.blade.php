@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="nav nav-pills">
            @foreach($pages as $key=>$value)
                <li class="nav-item">
                    <a href="{{$value->path}}"  @if($value->id == $page->id) class="nav-link active" @else class="nav-link" @endif >{{$value->title}}</a>
                </li>
            @endforeach
            </ul>
            <div class="jumbotron">
                <h1 class="display-4">{{$page->author}}</h1>
                <p class="lead">{{$page->main_content}}</p>
                <hr class="my-4">
                <p>Created at: {{$page->created_at}}</p>
                <a class="btn btn-info btn-lg" href="#" role="button">Likes: {{$page->likes}}</a>
            </div>
        </div>
    </div>
</div>
@endsection
