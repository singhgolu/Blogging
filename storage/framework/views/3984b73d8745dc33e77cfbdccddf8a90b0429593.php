<?php $__env->startSection('main-content'); ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Roles<span class="float-right"><a href="<?php echo e(route('role.create')); ?>" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>Role Name</td>
                      <td><a href="">Edit</a></td>
                      <td><a href="">delete</a></td>
                    </tr>
                  </thead>
                        
                  <tbody>
                    <tr>
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
                      <td><?php echo e($loop->index + 1); ?></td>
                      <td><?php echo e($role->name); ?></td>
                      <td><a class="btn btn-primary" href="<?php echo e(route('role.edit', $role->id)); ?>"><i class="fa fa-edit"></i>Edit</a></td>
                      
                      <td>
                        <form action="<?php echo e(route('role.destroy', $role->id)); ?>" method="post" id="delete-form-<?php echo e($role->id); ?>" style="display: none">
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                        </form>
                        <a class="btn btn-danger" href="<?php echo e($role->id); ?>" onclick="
                          if(confirm('Are you sure, You want to delete?')){
                            event.preventDefault(); 
                            document.getElementById('delete-form-<?php echo e($role->id); ?>').submit();
                          }else{
                            event.preventDefault();
                          }">
                          <i class="fa fa-times"></i>delete</a></td>  
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