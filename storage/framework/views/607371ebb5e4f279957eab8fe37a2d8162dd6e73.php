<?php $__env->startSection('main-content'); ?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Users<span class="float-right"><a href="<?php echo e(route('user.create')); ?>" class="btn btn-info">Add New</a></span></h3>
           </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <td>S. No</td>
                      <td>User Name</td>
                      <td>Assigned Role</td>
                      <td>Email</td>
                      <td>Edit</td>
                      <td>Delete</td>
                    </tr>
                  </thead>
                        
                  <tbody>
                  	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>        
                      <td><?php echo e($loop->index + 1); ?></td>
                      <td><?php echo e($user->name); ?></td>
                      <td>
                        <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($user_role->name); ?>,
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </td>
                      <td><?php echo e($user->email); ?></td>
                      <td>
                        <a href="<?php echo e(route('user.edit', $user->id)); ?>" class="btn btn-primary"><i class="fa fa-edit"></i>edit</a>
                      </td>
                      <td>
                        <form action="<?php echo e(route('user.destroy', $user->id)); ?>" id="delete-form-<?php echo e($user->id); ?>" method="post" style="display: none;">
                          <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                        </form>
                        <a href="" class="btn btn-danger" onclick="
                        if(confirm('Are you sure, You want to delete?')){event.preventDefault();
                          document.getElementById('delete-form-<?php echo e($user->id); ?>').submit();
                        }else{
                          event.preventDefault();
                        }"><i class="fa fa-times"></i>delete</a>
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
    	}
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>