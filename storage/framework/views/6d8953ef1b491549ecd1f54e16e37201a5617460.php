<?php $__env->startSection('body'); ?>
    <div class="form-group">
<?php echo Form::open([$batch,'method'=>'PATCH','action'=>['BatchController@update',$batch->id]]); ?>

<?php echo Form::label('batchid','batch id'); ?>

<?php /*//<?php echo Form::text('batchid',null); ?>*/ ?>

<input type="text" name="batchid" value="<?php echo e($batch->batchid); ?>" class="form-control "/>
<?php echo Form::label('year','Year'); ?>

<input type="text" name="year" value="<?php echo e($batch->year); ?>" class="form-control"/>
<?php /*<?php echo Form::text('year',null); ?>*/ ?>
<?php echo Form::label('branch','branch'); ?>

<input type="text" name="branch" value="<?php echo e($batch->branch); ?>" class="form-control"/>
<?php /*<?php echo Form::text('branch',null); ?>*/ ?>
<?php echo Form::label('section','section'); ?>

<input type="text" name="section" value="<?php echo e($batch->section); ?>" class="form-control"/>
<?php /*<?php echo Form::text('section','section'); ?>*/ ?>
    </div>
<?php echo Form::submit('update form',['class'=>'btn btn-info']); ?>



<?php echo Form::close(); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>