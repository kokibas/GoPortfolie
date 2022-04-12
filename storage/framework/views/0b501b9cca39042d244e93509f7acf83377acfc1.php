<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Genres</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('index')); ?>"> Back</a>
            </div>
        </div>
        <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('create_num',$user->id)); ?>"> Create New Genres</a>
            </div>
            
    </div>

        
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <table class="table table-bordered">
        <tr>
            <th>Genre</th>
            
            
        </tr>
        <?php $__currentLoopData = $user->phones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($phone->phone); ?></td>
            <td>
                <a class="btn btn-primary" href="<?php echo e(route('update_num',$phone->id)); ?>">updateNum</a>
               <form action="<?php echo e(route('delete_phone',$phone->id)); ?>" method="GET">
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
             
          
                    
        </tr>
            </div>
            </div>
         </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/test/resources/views/phone.blade.php ENDPATH**/ ?>