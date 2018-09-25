@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Tags<span class="float-right"><a href="{{ route('tag.create') }}" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>Name</td>
                      <td>slug</td>
                      <td><a href="">Edit</a></td>
                      <td><a href="">delete</a></td>
                    </tr>
                  </thead>
                        
                  <tbody>
                    <tr>
                      @foreach($tags as $tag)     
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $tag->name }}</td>
                      <td>{{ $tag->slug }}</td>
                      <td><a class="btn btn-primary" href="{{ route('tag.edit', $tag->id) }}"><i class="fa fa-edit"></i>Edit</a></td>
                      
                      <td>
                        <form action="{{ route('tag.destroy', $tag->id) }}" method="post" id="delete-form-{{ $tag->id }}" style="display: none">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a class="btn btn-danger" href="{{ $tag->id }}" onclick="
                          if(confirm('Are you sure, You want to delete?')){
                            event.preventDefault(); 
                            document.getElementById('delete-form-{{ $tag->id }}').submit();
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