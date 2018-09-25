@extends('admin.layouts.app')


@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Users<span class="float-right"><a href="{{ route('user.create') }}" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>User Name</td>
                      <td>Assigned Role</td>
                      <td>Email</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
                  </thead>
                        
                  <tbody>
                  	@foreach($users as $user)
                    <tr>        
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $user->name }}</td>
                      <td>
                        @foreach ($user->roles as $user_role)
                          {{ $user_role->name }},
                        @endforeach
                      </td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i>edit</a>
                      </td>
                      <td>
                        <form action="{{ route('user.destroy', $user->id) }}" id="delete-form-{{ $user->id }}" method="post" style="display: none;">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a href="" class="btn btn-danger" onclick="
                        if(confirm('Are you sure, You want to delete?')){event.preventDefault();
                          document.getElementById('delete-form-{{ $user->id }}').submit();
                        }else{
                          event.preventDefault();
                        }"><i class="fa fa-times"></i>delete</a>
                      </td>
                    </tr>
                    @endforeach
                  <tbody>
                </table>
                </div>
                   <!-- /.card-body -->
               </div>
            <!-- /.card -->
            </div>
    	}
    </section>
</div>
@endsection