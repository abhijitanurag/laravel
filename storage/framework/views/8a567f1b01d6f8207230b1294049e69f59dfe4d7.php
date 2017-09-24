<h2> Student Details</h2>

<?php $__env->startSection('body'); ?>
<div class="container">

    <div class="row">
        <div class="col-md-2">
            <h3>Batch Id</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($student->batch_id); ?>

            </h4>
        </div>
    </div>



    <div class="row">
        <div class="col-md-2">
            <h3>First Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($student->first_name); ?>

            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Last Name</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($student->last_name); ?>

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
                <?php echo e($student->gender); ?>

            </h4>
        </div>
    </div>


    <div class="row">
        <div class="col-md-2">
            <h3>Phone</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($student->phone); ?>

            </h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2">
            <h3>Dob</h3>
        </div>
        <div class="col-md-2">
            <h4>
                <?php echo e($student->dob); ?>

            </h4>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.studentlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>