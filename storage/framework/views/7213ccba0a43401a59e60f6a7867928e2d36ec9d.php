<?php $__env->startSection('page_title','Home Page'); ?>

<?php $__env->startSection('page_name','My First Blog'); ?>

<?php $__env->startSection('container'); ?>
    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="post-preview">
	  <a href="<?php echo e(url('post/'.$list->slug)); ?>">
		<h2 class="post-title"><?php echo e($list->title); ?></h2>
		<h3 class="post-subtitle"><?php echo e($list->short_desc); ?></h3>
	  </a>
	  <p class="post-meta">Posted on <?php echo e($list->post_date); ?></p>
	</div>
	<hr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views\front\home.blade.php ENDPATH**/ ?>