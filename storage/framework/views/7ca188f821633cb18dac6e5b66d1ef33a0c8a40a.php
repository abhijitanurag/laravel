<?php $__env->startSection('body'); ?>
<?php if($errors->has('batchid')||$errors->has('year')||$errors->has('branch')||$errors->has('section')): ?>
<div style="background-color: red"><div style="color:white"> Please enter correct details</div></div>


<?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
    <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"><span class=" glyphicon glyphicon-plus"></span> Create Batch</button>
            </div> </div>
    </div>
    <?php if(count($batch)): ?>
        <div class="container">
            <div class="row">
     <div class="col-md-2">
     <h3>Batch Id</h3>
     </div>
            <div class="col-md-2">  <h3>Year</h3></div>
            <div class="col-md-2">  <h3>Branch</h3></div>
            <div class="col-md-2">  <h3>Section</h3></div>
            <div class="col-md-2">  <h3>Time Table </h3></div>

            </div>
<hr>
<?php foreach($batch as $bt): ?>
                <div class="row">
                    <div class="col-md-2">
                        <h4><?php echo e($bt->batchid); ?></h4>
                    </div>
                    <div class="col-md-2">  <h4> <?php echo e($bt->year); ?></h4></div>
                    <div class="col-md-2">  <h4><?php echo e($bt->branch); ?></h4></div>
                    <div class="col-md-2">  <h4><?php echo e($bt->section); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($bt->hastimetable?'yes':'no'); ?> </h4></div>


                        <div class="col-md-1">

                                <a href="<?php echo e(route('timetable.show',$bt->id)); ?>"><i class="fa fa-table fa-2x" aria-hidden="true"></i></a>

                        </div>

                        <div class="col-md-1">
                    <a href="<?php echo e(route('batch.edit',$bt->id)); ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>



                </div>
                    <div class="col-md-1">  <?php echo Form::model($bt,['method'=>'delete','action'=>['BatchController@destroy',$bt->id]]); ?>

<div class="row">
    <div class="col-md-10"></div>
                        <?php echo Form::submit('delete record',['class'=>'btn btn-primary']); ?></div>

                        <?php echo form::close(); ?></div>
</div>


    <?php endforeach; ?>

        </div>
        <?php else: ?>
        <h2>Sorry, No batch to display</h2>


<?php endif; ?>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Create New Batch </h4>
                </div>
                <div class="form-group">
                <div class="modal-body">
                 <?php echo Form::open(['method'=>'post','action'=>'BatchController@store']); ?>

                    <?php echo Form::label('batchid','batch id'); ?>

                    <?php echo Form::text('batchid',null,['class'=>'form-control']); ?>


                    <?php /*<input type="text" name="batchid" value="<?php echo e($batch->batchid); ?>" class="form-control "/>*/ ?>
                    <?php echo Form::label('year','Year'); ?>

                    <?php /*<input type="text" name="year" value="<?php echo e($batch->year); ?>" class="form-control""/>*/ ?>
                    <?php echo Form::text('year',null,['class'=>'form-control']); ?>

                    <?php echo Form::label('branch','branch'); ?>

                    <?php /*<input type="text" name="branch" value="<?php echo e($batch->branch); ?>" class="form-control""/>*/ ?>
                    <?php echo Form::text('branch',null,['class'=>'form-control']); ?>

                    <?php echo Form::label('section','section'); ?>

                    <?php /*<input type="text" name="section" value="<?php echo e($batch->section); ?>" class="form-control"/>*/ ?>
                    <?php echo Form::text('section',null,['class'=>'form-control']); ?>

                </div>
                <?php echo Form::submit('update form',['class'=>'btn btn-info']); ?>


                </div>

                <?php echo Form::close(); ?>

                </div>


            </div>

        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>