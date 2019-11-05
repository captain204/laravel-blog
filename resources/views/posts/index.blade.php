@extends('layouts.app')

@section('content')

    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1 class="text-center"> Crud Entries </h1>
            @forelse ($post as $posts)
                
            <div class="post-preview">
                    
            <a href="{{route('posts.show',$posts->id)}}">
                <h2 class="post-title">
                    {{$posts->title}}
                </h2>
                <h3 class="post-subtitle">
                </h3>
            </a>

            <p class="post-meta">{{$posts->author}}
            on {{$posts->created_at}}</p>
            </div>
            <hr>
            @empty
                <p class="lead">
                    No Post found
                </p>                
            @endforelse

            <!-- Pager -->
            <div class="clearfix">    
                {!!$post->links()!!}
            </div>
        </div>
        </div>
    </div>

    <hr>

@endsection
