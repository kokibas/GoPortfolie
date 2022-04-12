<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>updateNumber</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('index')); ?>"> Back</a>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('update_phone')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden"  value=<?php echo e($phone->id); ?> name="id">
        <input type="hidden"  value=<?php echo e($phone->id); ?> name="user_id">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>number</strong>
                    <input type="text" name="phone" 
                    value="<?php echo e($phone->phone); ?>" class="form-control" placeholder="number">
                </div>
            </div>


           

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/test/resources/views/update_num.blade.php ENDPATH**/ ?>