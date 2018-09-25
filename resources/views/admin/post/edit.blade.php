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
	              <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
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
	              <form role="form" action="{{ route('post.update', $post->id) }}" method="post">
	              	{{ csrf_field() }}
	              	{{ method_field('PUT') }}
	                <div class="card-body">
		                <div class="form-group">
		                	<label for="title">Post Title</label>
		                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $post->title }}">
		                </div>

		                <div class="form-group">
		                	<label for="subtitle">Post Sub Title</label>
		                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title" value="{{ $post->subtitle }}">
		                </div>

		                <div class="form-group">
		                	<label for="slug">Post slug</label>
		                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Post Slug" value="{{ $post->slug }}">
		                </div>

		                <div class="form-group">
		                  <label>Select Tag</label>
		                  <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select Tags" style="width: 100%;">
		                  	@foreach($tags as $tag)
		                    	<option value="{{ $tag->id }}"
		                    	  @foreach($post->tags as $postTag)
		                    		@if($postTag->id == $tag->id)
		                    		  selected
		                    		@endif
		                    	  @endforeach
		                    		>{{ $tag->name }}
		                    	</option>
		                    @endforeach
		                  </select>
		                </div>

		                <div class="form-group">
		                  <label>Select Category</label>
		                  <select name="categories[]" class="form-control select2" multiple="multiple" data-placeholder="Select Categories"
		                          style="width: 100%;">
		                    @foreach($categories as $category)
		                    	<option value="{{ $category->id }}"
		                    		@foreach ($post->categories as $postCategory)
		                    			@if($postCategory->id == $category->id)
		                    				selected
		                    			@endif
		                    		@endforeach
		                    	>{{ $category->name }}</option>
		                    @endforeach
		                  </select>
		                </div>

		                <div class="form-group">
		                    <label for="image">File input</label>
		                    <div class="input-group">
		                      	<div class="custom-file">
			                        <input type="file" name="image" class="custom-file-input" id="image">
			                        <label class="custom-file-label" for="image">Choose file</label>
		                      	</div>
		                      	<div class="input-group-append">
		                        	<span class="input-group-text" id="">Upload</span>
		                      	</div>
		                    </div>
		                </div>

		                <div class="card card-outline card-info">
				            <div class="card-header">
				              <h3 class="card-title">
				                Bootstrap WYSIHTML5
				                <small>Simple and fast</small>
				              </h3>
				              <!-- tools box -->
				              <div class="card-tools">
				                <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
				                        title="Collapse">
				                  <i class="fa fa-minus"></i></button>
				              </div>
				              <!-- /. tools -->
				            </div>
				            <!-- /.card-header -->
				            <div class="card-body pad">
				              <div class="mb-3">
				                <textarea class="textarea" name="body" placeholder="Place some text here" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
				                    {{ $post->body }}
				                </textarea>
				              </div>
				              <p class="text-sm mb-0">
				                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
				                information.</a>
				              </p>
				            </div>
				        </div>

	                	<div class="form-check">
		                    <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1" @if($post->ststus == 1) checked  @endif>
		                    <label class="form-check-label" for="exampleCheck1">Publish</label>
	                  	</div>
	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                  <a href="{{ route('post.index') }}" class="btn btn-info">Back</a>
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