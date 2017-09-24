<?php $__env->startSection('body'); ?>
    <div class="form-group">
        <?php echo Form::open(['method'=>'patch','action'=>['StudentController@update',$student->id],'files'=>'true']); ?>


        <?php echo Form::label('batch_id','batch id'); ?>

        <input type="text" name="batch_id" value=" <?php echo e($student->batch_id); ?>" class="form-control "/>

        <?php echo Form::label('first_name','First Name'); ?>

        <input type="text" name="first_name" value="<?php echo e($student->first_name); ?>" class="form-control""/>

        <?php echo Form::label('last_name','Last Name'); ?>

        <input type="text" name="last_name" value="<?php echo e($student->last_name); ?>" class="form-control""/>


        <?php echo Form::label('email','Email'); ?>

        <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control"/>


        <?php echo Form::label('gender','Gender'); ?>

        <input type="text" name="gender" value="<?php echo e($student->gender); ?>" class="form-control"/>

        <?php echo Form::label('dob','DOB'); ?>

        <input type="text" name="dob" value="<?php echo e($student->dob); ?>" class="form-control"/>

        <?php echo Form::label('phone','Phone'); ?>

        <input type="text" name="phone" value="<?php echo e($student->phone); ?>" class="form-control"/>
        <?php echo Form::submit('update record'); ?>

        <?php echo form::close(); ?>

        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.formdisplay', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>