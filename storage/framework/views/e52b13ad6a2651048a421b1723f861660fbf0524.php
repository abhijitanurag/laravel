<?php $__env->startSection('content'); ?>

    <div class="container">



                        <?php echo $__env->yieldContent('body'); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>