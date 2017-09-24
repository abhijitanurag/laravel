<h2> Teacher  Details</h2>

<?php $__env->startSection('body'); ?>
<div class="container">



    <div class="row">
        <div class="col-md-2">
            <h3>First Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($teacher->first_name); ?>

            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Last Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($teacher->last_name); ?>

            </h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <h3>Email</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($user->email); ?>

            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <h3>Gender</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($teacher->gender); ?>

            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Phone</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($teacher->phone); ?>

            </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <h3>Dob</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($teacher->dob); ?>

            </h4>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacherlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>