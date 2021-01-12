@extends('layouts.master')

@section('title')
			Admin product dashboard
@endsection()



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Category's</h4>
                  <!-- for show the message updadated copy from home.blade.phpfile-->
                 @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                  @endif
              </div>
              <a href="role-products-create" class="btn btn-success">Add</a>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- fetch table data -->
                      <th>Id</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Catid</th>

                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <!--fetch table data -->
                      @foreach($ProductList as $row)
                      <tr>

                        <td>{{ $row->id }}</td>
                        <td>
                        <img src="{{ asset('/frontend/assets/images/' . $row->Image) }}" width = 100px height = 100px; />            
                        </td>
                        <td>{{$row->Name}}</td>
                        <td>{{$row->Price}}</td>
                        <td>{{$row->Catid}}</td>
                        <td>
                          <a href="role-products-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <!-- we have to add form method because without form method it will show error-->
                          <form action="role-products-delete/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button> 
<!-- <a href="/role-delete/" class="btn btn-danger">DELETE</a> it is not working or we are not submitting it-->
                          </form>
                        </td>
                       </tr>
                       @endforeach()
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection()

@section('scripts')


@endsection()