<!DOCTYPE html>
<html lang="en">

  <head>

    <?php echo $__env->make('user.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </head>

  <body>
    <!-- Navigation start here -->
    <?php echo $__env->make('user.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Navigation end here -->

    <?php $__env->startSection('main-content'); ?>
      <?php echo $__env->yieldSection(); ?>
    
    <!-- Footer start here -->
    <?php echo $__env->make('user.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Footer end here -->

  </body>

</html>
