@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Categories<span class="float-right"><a href="{{ route('category.create') }}" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>Name</td>
                      <td>Slug</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
                  </thead>
                       
                  <tbody>
                  	@foreach($categories as $category)
                    <tr>     
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->slug }}</td>
                      <td><a class="btn btn-primary" href="{{ route('category.edit', $category->id) }}"><i class="fa fa-edit"></i>Edit</a></td>
                      
                      <td>
                        <form action="{{ route('category.destroy', $category->id) }}" method="post" id="delete-form-{{ $category->id }}" style="display: none">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a class="btn btn-danger" href="{{ $category->id }}" onclick="
                          if(confirm('Are you sure, You want to delete?')){
                            event.preventDefault(); 
                            document.getElementById('delete-form-{{ $category->id }}').submit();
                          }else{
                            event.preventDefault();
                          }">
                          <i class="fa fa-times"></i>delete</a></td>
                        <!-- <form action="" method="post" class="form-horizontal">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="delete">
                          <div class="btn-group">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                          </div>
                        </form> -->
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