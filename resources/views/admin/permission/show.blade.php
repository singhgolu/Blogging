@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Permissions<span class="float-right"><a href="{{ route('permission.create') }}" class="btn btn-info">Add New</a></span></h3>
      </div>

      <div class="card-header">
          @include('common.error_msg')
      </div> <!-- /.card-header -->

      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <td>S. No</td>
              <td>Permission Name</td>
              <td>For</td>
              <td><a href="">Edit</a></td>
              <td><a href="">delete</a></td>
            </tr>
          </thead>
                  
          <tbody>
            @foreach($permissions as $permission)  
              <tr>   
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $permission->name }}</td><td>{{ $permission->for }}</td>
                <td><a class="btn btn-primary" href="{{ route('permission.edit', $permission->id) }}"><i class="fa fa-edit"></i>Edit</a></td>
                
                <td>
                  <form action="{{ route('permission.destroy', $permission->id) }}" method="post" id="delete-form-{{ $permission->id }}" style="display: none">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  </form>
                  <a class="btn btn-danger" href="{{ $permission->id }}" onclick="
                    if(confirm('Are you sure, You want to delete?')){
                      event.preventDefault(); 
                      document.getElementById('delete-form-{{ $permission->id }}').submit();
                    }else{
                      event.preventDefault();
                    }">
                    <i class="fa fa-times"></i>delete</a></td>  
                </td>
              </tr> 
            @endforeach
          <tbody>
        </table>
      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </section>
</div>
@endsection