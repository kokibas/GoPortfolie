<?php $__env->startSection('content'); ?>

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>updatePage</h2>
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

    <form action="<?php echo e(route('update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden"  value=<?php echo e($user->id); ?> name="id">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Film</strong>
                    <input type="text" name="name" 
                    value="<?php echo e($user->name); ?>" class="form-control" placeholder="name">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>email</strong>
                    <textarea class="form-control" 
                    style="height:150px" name="email" 
                    placeholder="email"><?php echo e($user->email); ?></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/test/resources/views/update_page.blade.php ENDPATH**/ ?>