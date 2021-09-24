@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center text-center">
            @foreach($articles as $article)
            <div class="col-md-4 card-content">
                <div> <img src="{{$article->cover}}"></div>
                <div>{{$article->title}}</div>
                <div>{{$article->description}}</div>

            </div>
            @endforeach
        </div>
    </div>
@endsection