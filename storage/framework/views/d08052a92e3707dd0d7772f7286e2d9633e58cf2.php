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
                <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal"> <span class=" glyphicon glyphicon-plus"></span> Add teacher</button>
            </div> </div>
    </div>
    <?php if(count($teachers)): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <h3>Id</h3>

                </div>
                <div class="col-md-1"> </div>
                <div class="col-md-1">  <h3>First name</h3></div>
                <div class="col-md-1">  <h3>Last name</h3></div>

                <div class="col-md-1">  <h3>DOB </h3></div>
                <div class="col-md-1">  <h3>Gender </h3></div>
                <div class="col-md-2">  <h3>Phone </h3></div>



            </div>
            <hr>
            <?php foreach($teachers as $teacher): ?>
                <div class="row">
                    <div class="col-md-1">
                        <h4><?php echo e($teacher->id); ?></h4>
                    </div>

                    <div class="col-md-1"><img src="<?php echo e(asset($teacher->path)); ?>" height="60px" width="70px"></div>
                    <div class="col-md-1">  <h4> <?php echo e($teacher->first_name); ?></h4></div>
                    <div class="col-md-1">  <h4><?php echo e($teacher->last_name); ?></h4></div>

                    <div class="col-md-1">  <h4><?php echo e($teacher->dob); ?> </h4></div>
                    <div class="col-md-1">  <h4><?php echo e($teacher->gender); ?> </h4></div>
                    <div class="col-md-2">  <h4><?php echo e($teacher->phone); ?> </h4></div>
                    <div class="col-md-1">
                        <a href="<?php echo e(route('teacher.edit',$teacher->id)); ?>"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>

                    </div>
                    <div class="col-md-1">  <?php echo Form::model($teacher,['method'=>'delete','action'=>['TeacherController@destroy',$teacher->id]]); ?>

                        <div class="row">
                            <div class="col-md-10"></div>
                            <?php echo Form::submit('delete record',['class'=>'btn btn-primary']); ?></div>

                        <?php echo form::close(); ?></div>
                </div>


            <?php endforeach; ?>

        </div>
    <?php else: ?>
        <h2>Please Add teachers</h2>


    <?php endif; ?>


    <?php /*<!-- Modal -->*/ ?>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title">Add New teacher </h4>
                </div>
                <div class="form-group">
                    <div class="modal-body">
                        <?php echo Form::open(['method'=>'post','action'=>'TeacherController@store','files'=>'true']); ?>







                        <?php echo Form::label('first_name','First Name'); ?>

                        <input type="text" name="first_name" value="" class="form-control""/>

                        <?php echo Form::label('last_name','Last Name'); ?>

                        <input type="text" name="last_name" value="" class="form-control""/>


                        <?php echo Form::label('email','Email'); ?>

                        <input type="text" name="email" value="" class="form-control"/>


                        <?php echo Form::label('gender','Gender'); ?><br />
                        <?php /*<input type="text" name="gender" value="" class="form-control"/>*/ ?>
                        Male<?php echo Form::radio('gender','male'); ?>

                        Female<?php echo Form::radio('gender','female'); ?><br />
                        <?php echo Form::label('dob','DOB'); ?>

                        <input type="text" name="dob" value="" class="form-control"/>

                        <?php echo Form::label('phone','Phone'); ?>

                        <input type="text" name="phone" value="" class="form-control"/>
                        <?php echo Form::label('file','pic'); ?>

                        <input type="file" name="file"/>

                        <?php echo Form::hidden('name','nn'); ?>

                        <?php echo Form::hidden('role_id','3'); ?>

                        <?php echo Form::hidden('user_id','1'); ?>

                        <?php echo Form::hidden('path','images/path'); ?>

                        <?php echo Form::hidden('password','ss'); ?>

                        <?php echo Form::hidden('id2','1'); ?>


                    </div>
                    <?php echo Form::submit('Add teacher',['class'=>'btn btn-info']); ?>


                </div>

                <?php echo Form::close(); ?>

            </div>


        </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>