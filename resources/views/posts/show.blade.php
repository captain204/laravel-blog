@extends('layouts.app')
@section('content')
    
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="body text-center">
                <h1>{{$post->title}} </h1>
                    <p class="lead">
                        {{$post->body}}
                    </p>
                    {{$post->author}}
            </div>
        </div>
    </div>


@endsection