<?php $__env->startSection('main-content'); ?>
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
	              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>">Home</a></li>
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

	              <?php echo $__env->make('common.error_msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	              <!-- /.card-header -->
	              <!-- form start -->
	              <form role="form" action="<?php echo e(route('post.store')); ?>" method="post">
	              	<?php echo e(csrf_field()); ?>

	                <div class="card-body">
		                <div class="form-group">
		                	<label for="title">Post Title</label>
		                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
		                </div>

		                <div class="form-group">
		                	<label for="subtitle">Post Sub Title</label>
		                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Sub Title">
		                </div>

		                <div class="form-group">
		                	<label for="slug">Post slug</label>
		                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Post Slug">
		                </div>

		                <div class="form-group">
		                  <label>Select Tag</label>
		                  <select name="tags[]" class="form-control select2" multiple="multiple" data-placeholder="Select Tags" style="width: 100%;">
		                  	<?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                    	<option value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
		                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		                  </select>
		                </div>

		                <div class="form-group">
		                  <label>Select Category</label>
		                  <select name="categories[]" class="form-control select2" multiple="multiple" data-placeholder="Select Categories"
		                          style="width: 100%;">
		                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                    	<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
		                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
				                <textarea class="textarea" name="body" placeholder="Place some text here"
				                          style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
				              </div>
				              <p class="text-sm mb-0">
				                Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
				                information.</a>
				              </p>
				            </div>
				        </div>

	                	<div class="form-check">
		                    <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
		                    <label class="form-check-label" for="exampleCheck1">Publish</label>
	                  	</div>
	                </div>
	                <!-- /.card-body -->

	                <div class="card-footer">
	                  <button type="submit" class="btn btn-primary">Submit</button>
	                  <a href="<?php echo e(route('post.index')); ?>" class="btn btn-info">Back</a>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>