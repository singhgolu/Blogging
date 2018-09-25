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

                <?php echo $__env->make('common.error_msg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="<?php echo e(route('role.update', $role->id)); ?>" method="post">
                  <?php echo e(csrf_field()); ?>

                  <?php echo e(method_field('patch')); ?>

                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">role Title</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e($role->name); ?>" placeholder="Role Name">
                    </div>

                    <div class="row">
                      <div class="col-sm-3">
                        <label for="name">Post Permissions</label>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($permission->for == 'post'): ?>
                            <div>
                            <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"
                              <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($role_permission->id == $permission->id): ?>
                                  checked
                                <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              ><?php echo e($permission->name); ?></label>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                      <div class="col-sm-3">
                        <label for="name">User Permissions</label>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($permission->for == 'user'): ?>
                            <div>
                            <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"
                              <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($role_permission->id == $permission->id): ?>
                                  cheked
                                <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              ><?php echo e($permission->name); ?></label>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                      <div class="col-sm-3">
                        <label for="name">User Permissions</label>
                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php if($permission->for == 'other'): ?>
                            <div>
                            <label><input type="checkbox" name="permission[]" value="<?php echo e($permission->id); ?>"
                              <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($role_permission->id == $permission->id): ?>
                                  checked
                                <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              ><?php echo e($permission->name); ?></label>
                            </div>
                          <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </div>
                  </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo e(route('role.index')); ?>" class="btn btn-info">Back</a>
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