<?php $__env->startSection('body'); ?>
    <div class="form-group">
        <?php echo Form::open(['method'=>'patch','action'=>['TeacherController@update',$teacher->id],'files'=>'true']); ?>




        <?php echo Form::label('first_name','First Name'); ?>

        <input type="text" name="first_name" value="<?php echo e($teacher->first_name); ?>" class="form-control""/>

        <?php echo Form::label('last_name','Last Name'); ?>

        <input type="text" name="last_name" value="<?php echo e($teacher->last_name); ?>" class="form-control""/>


        <?php echo Form::label('email','Email'); ?>

        <input type="text" name="email" value="<?php echo e($user->email); ?>" class="form-control"/>


        <?php echo Form::label('gender','Gender'); ?>

        <input type="text" name="gender" value="<?php echo e($teacher->gender); ?>" class="form-control"/>

        <?php echo Form::label('dob','DOB'); ?>

        <input type="text" name="dob" value="<?php echo e($teacher->dob); ?>" class="form-control"/>

        <?php echo Form::label('phone','Phone'); ?>

        <input type="text" name="phone" value="<?php echo e($teacher->phone); ?>" class="form-control"/>
        <?php echo Form::submit('update record'); ?>

        <?php echo form::close(); ?>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>