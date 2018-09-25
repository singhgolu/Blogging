@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Roles<span class="float-right"><a href="{{ route('role.create') }}" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>Role Name</td>
                      <td><a href="">Edit</a></td>
                      <td><a href="">delete</a></td>
                    </tr>
                  </thead>
                        
                  <tbody>
                    <tr>
                      @foreach($roles as $role)     
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $role->name }}</td>
                      <td><a class="btn btn-primary" href="{{ route('role.edit', $role->id) }}"><i class="fa fa-edit"></i>Edit</a></td>
                      
                      <td>
                        <form action="{{ route('role.destroy', $role->id) }}" method="post" id="delete-form-{{ $role->id }}" style="display: none">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a class="btn btn-danger" href="{{ $role->id }}" onclick="
                          if(confirm('Are you sure, You want to delete?')){
                            event.preventDefault(); 
                            document.getElementById('delete-form-{{ $role->id }}').submit();
                          }else{
                            event.preventDefault();
                          }">
                          <i class="fa fa-times"></i>delete</a></td>  
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
    </section>
</div>
@endsection