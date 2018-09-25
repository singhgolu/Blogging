<?php $__env->startSection('main-content'); ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Categories<span class="float-right"><a href="<?php echo e(route('category.create')); ?>" class="btn btn-info">Add New</a></span></h3>
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
                  	<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>     
                      <td><?php echo e($loop->index + 1); ?></td>
                      <td><?php echo e($category->name); ?></td>
                      <td><?php echo e($category->slug); ?></td>
                      <td><a class="btn btn-primary" href="<?php echo e(route('category.edit', $category->id)); ?>"><i class="fa fa-edit"></i>Edit</a></td>
                      
                      <td>
                        <form action="<?php echo e(route('category.destroy', $category->id)); ?>" method="post" id="delete-form-<?php echo e($category->id); ?>" style="display: none">
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                        </form>
                        <a class="btn btn-danger" href="<?php echo e($category->id); ?>" onclick="
                          if(confirm('Are you sure, You want to delete?')){
                            event.preventDefault(); 
                            document.getElementById('delete-form-<?php echo e($category->id); ?>').submit();
                          }else{
                            event.preventDefault();
                          }">
                          <i class="fa fa-times"></i>delete</a></td>
                        <!-- <form action="" method="post" class="form-horizontal">
                          <?php echo e(csrf_field()); ?>

                          <input type="hidden" name="_method" value="delete">
                          <div class="btn-group">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                          </div>
                        </form> -->
                      </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <tbody>
                </table>
                </div>
                   <!-- /.card-body -->
               </div>
            <!-- /.card -->
            </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>