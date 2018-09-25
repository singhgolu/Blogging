@extends('admin.layouts.app')


@section('main-content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Posts<span class="float-right"><a href="{{ route('post.create') }}" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>Title</td>
                      <td>Sub Title</td>
                      <td>Slug</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
                  </thead>
                        
                  <tbody>
                  	@foreach($posts as $post)
                    <tr>        
                      <td>{{ $loop->index + 1 }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->subtitle }}</td>
                      <td>{{ $post->slug }}</td>
                      <td><a href="{{route('post.edit', $post->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i>edit</a>
                        <!-- <form action="" method="post" class="form-horizontal">
                          {{ csrf_field() }}
                          <input type="hidden" name="_method" value="delete">
                          <div class="btn-group">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                          </div>
                        </form> -->
                      </td>
                      <td>
                        <form action="{{ route('post.destroy', $post->id) }}" id="delete-form-{{ $post->id }}" method="post" style="display: none;">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                        </form>
                        <a href="" class="btn btn-danger" onclick="
                        if(confirm('Are you sure, You want to delete?')){event.preventDefault();
                          document.getElementById('delete-form-{{ $post->id }}').submit();
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