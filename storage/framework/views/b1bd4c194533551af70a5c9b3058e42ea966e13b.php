<?php $__env->startSection('body'); ?>
    <h2>Time Table</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <h4>Day</h4>
            </div>

            <div class="col-md-1">
                <h4>Lecture1</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture2</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture3</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture4</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture5</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture6</h4>
            </div>
            <div class="col-md-1">
                <h4>Lecture7</h4>
            </div>
        </div>
        <hr>
        <?php foreach($timetable as $table): ?>
            <div class="row">
                <div class="col-md-1">
                    <?php echo e($table['day']); ?>

                </div>
                <div class="col-md-1">
                    <?php echo e($table['lec1']); ?>

                </div>
                <div class="col-md-1">
                    <?php echo e($table['lec2']); ?>

                </div>                <div class="col-md-1">
                    <?php echo e($table['lec3']); ?>

                </div>                <div class="col-md-1">
                    <?php echo e($table['lec4']); ?>

                </div>                <div class="col-md-1">
                    <?php echo e($table['lec5']); ?>

                </div>                <div class="col-md-1">
                    <?php echo e($table['lec6']); ?>

                </div>                <div class="col-md-1">
                    <?php echo e($table['lec7']); ?>

                </div>


            </div>


            <?php endforeach; ?>



    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.studentlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>