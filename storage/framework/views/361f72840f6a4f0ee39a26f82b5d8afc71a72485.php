

<?php $__env->startSection('content'); ?>
<h1>Créer un Lien</h1>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div> 
<?php endif; ?>
<form method="POST" action="<?php echo e(route('links.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Entrer un nom">
    </div>
    <div class="form-group">
        <input type="text" name="url" class="form-control" placeholder="https://">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.application', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-demo\resources\views/links/create.blade.php ENDPATH**/ ?>