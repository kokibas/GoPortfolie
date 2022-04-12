<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Gaukhar Ualieva</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('create_page')); ?>"> Create New Genres</a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered">
        <tr>
            <th>Film</th>
            <th>Status</th>
            
        </tr>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
          
            <td>
                    <a class="btn btn-primary" href="<?php echo e(route('update_page',$user->id)); ?>">updatePage</a>
                    <a class="btn btn-primary" href="<?php echo e(route('phonePage',$user->id)); ?>">Genres</a>
                <form action="<?php echo e(route('delete',$user->id)); ?>" method="GET">
   
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/test/resources/views/index.blade.php ENDPATH**/ ?>