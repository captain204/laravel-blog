@extends('layouts.admin')

@section('content')

@if($errors->any())
<ul class="alert-danger">
  @foreach($errors->all() as $error)
        <li>{{$error}}</li>
  @endforeach
</ul>
@endif
@if ($message = Session::get('success'))
<div class="alert alert-success">
{{$message}}
</div>
@endif
    <div class="row">
        <div class="col-md-6 offset-2">
            <h1 class="text-center"> Edit Post </h1>
            <form action="{{route('posts.update',$post->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label>Body</label>
                <textarea name="body" rows="8" column="25" class="form-control" value="{{$post->body}}">
                    </textarea>
                </div>
                <div class="form-group">
                    <label>Author</label>
                <input type="text" name="author" class="form-control" value="{{$post->author}}">
                </div>
                <button type="submit" class="btn btn-primary pull-left" name="submit">Add</button>
                <button type="submit" class="btn btn-danger pull-left" name="submit">Cancel</button>
            </form>
        </div>
    </div>

@endsection