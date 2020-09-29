@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <nav class="navbar navbar-dark bg-dark">
                <?php foreach($pages as $key=>$value): ?>
                    <a href="{{$value->path}}" class="navbar-brand mb-0 h1">{{$value->title}}</a>
                <?php endforeach; ?>
            </nav> 
    </div>
</div>
@endsection
