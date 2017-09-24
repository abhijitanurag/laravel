<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
    <h2>Your attendance Is:</h2>
            </div>
            <div class="col-md-1"><h2><?php echo e($k); ?>%</h2></div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.studentlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>