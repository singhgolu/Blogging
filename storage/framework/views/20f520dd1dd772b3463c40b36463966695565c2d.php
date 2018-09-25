<?php $__env->startSection('background-image', asset('user/img/home-bg.jpg')); ?>

<?php $__env->startSection('title', 'Blog Title'); ?>

<?php $__env->startSection('sub-heading', 'Learn together Grow Together'); ?>

<?php $__env->startSection('main-content'); ?>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="post-preview">
            <a href="<?php echo e(route('post', $post->slug)); ?>">
              <h2 class="post-title">
                <?php echo e($post->title); ?>

              </h2>
              <h3 class="post-subtitle">
                <?php echo e($post->subtitle); ?>

              </h3>
            </a>
            <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              <?php echo e($post->created_at->diffForHumans()); ?></p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>