<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('partials.onas', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>