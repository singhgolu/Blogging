@extends('admin.layouts.app')

@section('main-content')

	<!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Text Editors</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Text Editors</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	    <!-- Main content -->
	    <section class="content">
	      <div class="row">
	        <div class="col-md-12">
	        	<div class="card card-primary">
	              <div class="card-header">
	                <h3 class="card-title">Titles</h3>
	              </div>

	              @include('common.error_msg')

	              <!-- /.card-header -->
	              <!-- form start -->
	              <form role="form" action="{{ route('category.update', $category->id) }}" method="post">
	              	{{ csrf_field() }}
	              	{{ method_field('PATCH') }}
	                <div class="card-body">
		                <div class="form-group">
		                	<label for="category">Category Title</label>
		                    <input type="text" class="form-control" name="category" id="category" placeholder="Category Title" value="{{ $category->name }}">
		                </div>

		                <div class="form-group">
		                	<label for="slug">Category slug</label>
		                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Post Slug" value="{{ $category->slug }}">
		                </div>
	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                  <a href="{{ route('category.index') }}" class="btn btn-info">Back</a>
	                </div>
	              </form>
	            </div>
	        </div>
	        <!-- /.col-->
	      </div>
	      <!-- ./row -->
	    </section>
	    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

@endsection