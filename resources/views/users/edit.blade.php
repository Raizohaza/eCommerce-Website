@extends('layouts.app')

@section('content')
    <h1 class="text-center my-5">Edit Users</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit Users</div>
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-group">
                                @foreach($errors->all() as $error)
                                    <li class="list-group-item">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- users/{{ Auth::user()->id }}/update-users -->
                    <form action="update-users" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $Users->name }}">
                        </div>
                        
                        <div class="form-group">
                            <textarea name="email" placeholder="email" cols="5" rows="5" class="form-control">{{ $Users->email }}</textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success">Update Users</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
@endsection