@extends('layouts.admin')
@section('content')

<div class="col-md-12">
        <h1 class="text-center">Admin</h1>
        <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @forelse ($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form action="{{ route('posts.destroy',$user->id)}}" method="post">
                              {{csrf_field()}}
                              {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                    </td>
                  </tr> 
                  @empty
                    <p class="lead">
                      No registered users yet
                    </p>
                @endforelse
              </table>
              <div class="text-center"> 
              </div>           
    </div>
</div>
@endsection