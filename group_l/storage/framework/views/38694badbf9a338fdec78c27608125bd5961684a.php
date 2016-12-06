<?php $__env->startSection('title', 'Admin Page - addCategories'); ?>

<?php $__env->startSection('main-content'); ?>
    <?php echo $__env->make('front.admin.addCategories.addCategories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.admin.masterpage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>