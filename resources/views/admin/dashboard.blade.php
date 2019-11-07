@extends('layouts.admin')
@section('content')
    
    <div class="row"> 
        <div class="col-md-12">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create</a>
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @forelse ($post as $posts)
                          <tr>
                            <td>{{$posts->id}}</td>
                            <td>{{$posts->title}}</td>
                            <td>{{$posts->author}}</td>
                          <td><a href="{{route('posts.edit',$posts->id)}}" class="btn btn-primary">Update</a> </td>
                            <td>
                                <form action="{{ route('posts.destroy',$posts->id)}}" method="post">
                                      {{csrf_field()}}
                                      {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger" >Delete</button>
                                </form>
                            </td>
                          </tr> 
                          @empty
                            <p class="lead">
                              No item in database yet
                            </p>
                        @endforelse
                      </table>
                      <div class="text-center"> 
                        {!!$post->links()!!}
                      </div>           
        </div>
    </div>
  @endsection




