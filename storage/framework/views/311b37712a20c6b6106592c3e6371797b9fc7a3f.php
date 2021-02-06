<?php $__env->startSection('page_title',$result[0]->title); ?>

<?php $__env->startSection('page_name',$result[0]->title); ?>

<?php $__env->startSection('container'); ?>

<p><?php echo e($result[0]->long_desc); ?></p>
         

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front/layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\blog\resources\views\front\post.blade.php ENDPATH**/ ?>