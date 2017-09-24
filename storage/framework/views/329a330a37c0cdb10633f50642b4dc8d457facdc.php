<?php $__env->startSection('body'); ?>
    <div class="form-group">
        <?php echo Form::open(['method'=>'PUT','action'=>['SubjectController@update',$subject->id]]); ?>


        <?php echo Form::label('batch_id','Batch id'); ?>

        <input type="text" name="batch_id" value=" <?php echo e($subject->batch_id); ?>" class="form-control "/>

        <?php echo Form::label('teacher_id','Teacher Id'); ?>

        <input type="text" name="teacher_id" value="<?php echo e($subject->teacher_id); ?>" class="form-control"/>

        <?php echo Form::label('sub_name','Subject Name'); ?>

        <input type="text" name="sub_name" value="<?php echo e($subject->sub_name); ?>" class="form-control"/>


        <?php echo Form::label('sub_id','Subject Id'); ?>

        <input type="text" name="sub_id" value="<?php echo e($subject->sub_id); ?>" class="form-control"/>
<br />

        <?php echo Form::submit('update subject',['class'=>'btn btn-danger']); ?>

        <?php echo form::close(); ?>

    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>