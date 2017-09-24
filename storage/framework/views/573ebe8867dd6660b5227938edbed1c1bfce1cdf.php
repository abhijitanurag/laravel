<?php $__env->startSection('body'); ?>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach($errors->all() as $error): ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-11"></div>
            <div class="col-md-1">
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add Subject</button>
            </div> </div>
    </div>
    <?php if(count($subjects)): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"><h3>Teacher id</h3></div>
                <div class="col-md-1">  <h3>Batch Id</h3></div>
                <div class="col-md-1">  <h3>Subject Id</h3></div>
                <div class="col-md-1">  <h3>Subject Name</h3></div>


            </div>
            <hr>
            <?php foreach($subjects as $subject): ?>
                <div class="row">
                    <div class="col-md-1">  <h4> <?php echo e($subject->id); ?></h4></div>

                    <div class="col-md-1">
                        <h4><?php echo e($subject->teacher_id); ?></h4>
                    </div>
                   <div class="col-md-1">  <h4> <?php echo e($subject->batch_id); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($subject->sub_id); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($subject->sub_name); ?></h4></div>
                    <div class="col-md-1">
                        <a href="<?php echo e(route('subject.edit',$subject->id)); ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-1">  <?php echo Form::model($subject,['method'=>'delete','action'=>['SubjectController@destroy',$subject->id]]); ?>

                        <div class="row">
                            <div class="col-md-10"></div>
                            <?php echo Form::submit('delete subject',['class'=>'btn btn-primary']); ?></div>

                        <?php echo form::close(); ?></div>
                </div>


            <?php endforeach; ?>

        </div>
    <?php else: ?>
        <h2>Please Add subjects</h2>


    <?php endif; ?>


    <?php /*<!-- Modal -->*/ ?>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add New Subject </h4>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        <?php echo Form::open(['method'=>'post','action'=>'SubjectController@store','files'=>'true']); ?>


                        <?php echo Form::label('batch_id','Batch id'); ?>


                        <select name="batch_id" class="form-control">
                            <option value="0">Please select a batch</option>
                            <?php foreach($batchs as $batch): ?>
                                <option value="<?php echo e($batch->id); ?>"><?php echo e($batch->batchid); ?></option>


                            <?php endforeach; ?>
                        </select>

                        <?php echo Form::label('teacher_id','Teacher Id'); ?>

                        <select name="teacher_id" class="form-control">
                            <option value="0">Please select a teacher</option>
                            <?php foreach($teachers as $teacher): ?>
                                <option value="<?php echo e($teacher->id); ?>"><?php echo e($teacher->first_name); ?></option>


                            <?php endforeach; ?>
                        </select>

                        <?php echo Form::label('sub_id','Subject Id'); ?>

                        <input type="text" name="sub_id" value="" class="form-control"/>


                        <?php echo Form::label('sub_name','Subject Name'); ?>

                        <input type="text" name="sub_name" value="" class="form-control"/>




                    </div>
                    <?php echo Form::submit('Add Subject',['class'=>'btn btn-info']); ?>


                </div>

                <?php echo Form::close(); ?>

            </div>


        </div>

    </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>