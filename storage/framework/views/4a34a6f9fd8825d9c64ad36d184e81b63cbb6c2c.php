<?php $__env->startSection('body'); ?>
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


<div class="form-group">
    <?php echo Form::open(['method'=>'POST','action'=>'TimetableController@store']); ?>

<input type="hidden" name="batch_id" value="<?php echo e($id); ?>">
    <?php for($i=0;$i<5;$i++): ?>
    <div class="row">
        <div class="col-md-1">
            <h4>
                <?php echo e($day[$i]); ?>

            </h4>



        </div>
        <input type="hidden" name="<?php echo e($day[$i]); ?>_day" value="<?php echo e($day[$i]); ?>" />

        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec1" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>

                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                   <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec2" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec3" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec4" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec5" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec6" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>


        <div class="col-md-1">
            <select  name="<?php echo e($day[$i]); ?>_lec7" class="form-control">
                <?php foreach($teacher as $tch): ?>
                    <?php $tmt=\App\timetable::where('day','=',$day[$i])->where('lec1','=',$tch->teacher_id)->get();
                    if(count($tmt)==0){?>
                    <option value="<?php echo e($tch->teacher_id); ?>"><?php echo e($tch->teacher_id); ?></option>
                    <?php } ?>
                <?php endforeach; ?>
            </select>
        </div>

    </div>
    <?php endfor; ?>

    <?php echo Form::submit('Create Timetable',['class'=>'btn btn-info']); ?>



    <?php echo Form::close(); ?>





</div>
    </div>
    <?php /*<div class="form-group">*/ ?>
        <?php /*<?php echo Form::open(['method'=>'Post','action'=>'TimetableController@store']); ?>*/ ?>
        <?php /*<?php echo Form::label('batch_id','Please select the batch'); ?>*/ ?>
        <?php /*<select name="batch_id" class="form-control">*/ ?>
            <?php /*<option value="0">Please select a batch</option>*/ ?>
            <?php /*<?php foreach($batchs as $batch): ?>*/ ?>
                <?php /*<option value="<?php echo e($batch->id); ?>"><?php echo e($batch->batchid); ?></option>*/ ?>
                <?php /*session*/ ?>

            <?php /*<?php endforeach; ?>*/ ?>
        <?php /*</select>*/ ?>
        <?php /*<?php echo Form::submit('select',['class'=>'btn btn-info']); ?>*/ ?>
        <?php /*<?php echo Form::close(); ?>*/ ?>
    <?php /*</div>*/ ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>