<?php $__env->startSection('body'); ?>
    <?php if(count($subjects)): ?>
   <div class="container">
      <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-2"><h3>Batch Id</h3></div>
          <div class="col-md-2"><h3>Subject Id</h3></div>
          <div class="col-md-2"><h3>Subject Name</h3></div>
      </div>
       <?php echo Form::open(['method'=>'put','action'=>['TeacherAttendence@update','1']]); ?>



    <?php foreach($subjects as $subject): ?>
    <div class="col-md-1">
        <input type="radio" name="id" value="<?php echo e($subject->id); ?>">
    </div>
        <div class="col-md-2">
            <h4><?php echo e($subject->batch_id); ?><input type="hidden" name="batch_id" value="<?php echo e($subject->batch_id); ?>"> </h4>
        </div>
    <div class="col-md-2">
<h4><?php echo e($subject->sub_id); ?></h4>
    </div>
        <div class="col-md-1">
            <h4><?php echo e($subject->sub_name); ?></h4>
        </div>
        <?php endforeach; ?></div>
   <br />
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-3">
    <?php echo Form::submit('Get Attendence Sheet ',['class'=>'btn btn-primary']); ?>

           </div>
       </div>
        <?php echo Form::close(); ?>


    <?php endif; ?>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacherlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>