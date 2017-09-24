<?php $__env->startSection('body'); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add Student</button>
            </div> </div>
    </div>
    <?php if(count($students)): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1">  <h3>First name</h3></div>
                <div class="col-md-1">  <h3>Last name</h3></div>
                <div class="col-md-1">  <h3>Batch id</h3></div>
                <div class="col-md-1">  <h3>DOB </h3></div>
                <div class="col-md-1">  <h3>Gender </h3></div>
                <div class="col-md-2">  <h3>Phone </h3></div>



            </div>
            <hr>
            <?php echo Form::open(['method'=>'post','action'=>'TeacherAttendence@store']); ?>

            <input type="hidden" name="batch_id" value="<?php echo e($subject->batch_id); ?>"/>
            <input type="hidden" name="sub_id" value="<?php echo e($subject->batch_id); ?>"/>
            <?php  $i=0; ?>
            <?php foreach($students as $student): ?>
                <div class="row">
                    <div class="col-md-1">
                        <input type="hidden" name="stud_id<?php echo e($i); ?>" value="<?php echo e($student->id); ?>"/>

                        <h4><?php echo e($student->id); ?></h4>
                    </div>
                    <div class="col-md-1"><img src="<?php echo e(asset($student->path)); ?>" height="60px" width="70px"></div>
                    <div class="col-md-1">  <h4> <?php echo e($student->first_name); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($student->last_name); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($student->batch_id); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($student->dob); ?> </h4></div>
                    <div class="col-md-1">  <h4><?php echo e($student->gender); ?> </h4></div>
                    <div class="col-md-2">  <h4><?php echo e($student->phone); ?> </h4></div>
                    <div class="col-md-1"><select name="<?php echo e($i); ?>present" class="form-control">
                            <option value="a"><b>A</b></option>
                            <option value="p">P</option>
                        </select></div>
                   </div>

<?php $i++?>
            <?php endforeach; ?>
            <br />
            <br />
<div class="row">
            <?php echo Form::submit('mark attendence',['class'=>'btn btn-info' ]); ?>

</div>
<?php echo Form::close(); ?>

        </div>
    <?php else: ?>
        <h2>Please Add students</h2>


    <?php endif; ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.teacherlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>