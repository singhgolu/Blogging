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
	                <h3 class="card-title">User Roles</h3>
	              </div>

	              @include('common.error_msg')

	              <!-- /.card-header -->
	              <!-- form start -->
	              <form role="form" action="{{ route('user.store') }}" method="post">
	              	{{ csrf_field() }}
	                <div class="card-body">
		                <div class="form-group">
		                	<label for="name">User Name</label>
		                    <input type="text" class="form-control" name="name" id="name" placeholder="User Name">
		                </div>

		                <div class="form-group">
		                	<label for="email">Email</label>
		                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
		                </div>

		                <div class="form-group">
		                	<label for="phone">Phone</label>
		                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Email">
		                </div>

		                <div class="form-group">
		                	<label for="password">Password</label>
		                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
		                </div>

		                <div class="form-group">
		                	<label for="confirm_password">Confirm Password</label>
		                    <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Password Confirm">
		                </div>

		                <div class="form-group">
		                 	<div class="row">
		                 		@foreach ($roles as $role)
		                 		  <div class="col-lg-2">
					                <div class="checkbox">
					                	<label>
					                		<input type="checkbox" name="role[]" value="{{$role->id}}"> {{ $role->name }} 
					                	</label>
					                </div>
			                  	  </div>
		                 		@endforeach
			                  
		                  	</div>	
		                </div>

		                <div class="form-group">
		                 	<label><input type="checkbox" name="status" value="1">Status</label>
		                </div>
	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                  <a href="{{ route('user.index') }}" class="btn btn-info">Back</a>
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