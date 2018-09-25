<?php $__env->startSection('main-content'); ?>
<div class="content-wrapper">
  <section class="content-header">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Permissions<span class="float-right"><a href="<?php echo e(route('permission.create')); ?>" class="btn btn-info">Add New</a></span></h3>
      </div>

      <div class="card-header">
          <?php echo $__env->make('common.error_msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
              <tr>   
                <td><?php echo e($loop->index + 1); ?></td>
                <td><?php echo e($permission->name); ?></td><td><?php echo e($permission->for); ?></td>
                <td><a class="btn btn-primary" href="<?php echo e(route('permission.edit', $permission->id)); ?>"><i class="fa fa-edit"></i>Edit</a></td>
                
                <td>
                  <form action="<?php echo e(route('permission.destroy', $permission->id)); ?>" method="post" id="delete-form-<?php echo e($permission->id); ?>" style="display: none">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                  </form>
                  <a class="btn btn-danger" href="<?php echo e($permission->id); ?>" onclick="
                    if(confirm('Are you sure, You want to delete?')){
                      event.preventDefault(); 
                      document.getElementById('delete-form-<?php echo e($permission->id); ?>').submit();
                    }else{
                      event.preventDefault();
                    }">
                    <i class="fa fa-times"></i>delete</a></td>  
                </td>
              </tr> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <tbody>
        </table>
      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>