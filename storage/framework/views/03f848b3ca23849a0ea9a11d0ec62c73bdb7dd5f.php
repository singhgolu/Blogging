<?php $__env->startSection('background-image', asset('user/img/post-bg.jpg')); ?>

<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('sub-heading', $post->subtitle); ?>

<?php $__env->startSection('main-content'); ?>
	<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at <?php echo e($post->created_at->diffForHumans()); ?></small>
            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('category', $category->slug)); ?>"><small class="pull-right" style="margin-right: 20px;">
                <?php echo e($category->name); ?>

              </small></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php echo htmlspecialchars_decode($post->body); ?>



            <!-- Tag Clouds -->
            <h4>Tag Clouds</h4>
            <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('tag', $tag->slug)); ?>"><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid grey;padding: 5px;">
                <?php echo e($tag->name); ?>

              </small></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>