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
                <form role="form" action="{{ route('user.update', $user->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('patch') }}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">User Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="User Name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                      <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" value="{{ $user->phone }}">
                    </div>

                    <div class="form-group">
                      <div class="row">
                        @foreach ($roles as $role)
                          <div class="col-lg-2">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="role[]" value="{{$role->id}}"
                                @foreach ($user->roles as $user_role)
                                  @if ($user_role->id == $role->id)
                                    checked                               
                                  @endif
                                @endforeach
                              > {{ $role->name }} 
                            </label>
                          </div>
                            </div>
                        @endforeach
                        
                        </div>  
                    </div>

                    <div class="form-group">
                      <label><input type="checkbox" name="status" value="1"
                        @if($user->status == 1)
                          checked
                        @endif
                      >Status</label>
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