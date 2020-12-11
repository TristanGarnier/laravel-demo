

<?php $__env->startSection('content'); ?>
<h1>lien numero <?php echo e($link->id); ?></h1>
<h3>Nom du site:</h3>
<p><?php echo e($link->name); ?></p>
<h3>URL du site:</h3>
<p><?php echo e($link->url); ?></p>
<h2>Commentaire : </h2>
<form method="POST" action="<?php echo e(route('comments.store')); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <input type="text" class="form-control" name="content" placeholder="Rédigez votre commentaire">
    </div>
    <input type="hidden" name=link_id value="<?php echo e($link->id); ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<ul>
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <p><?php echo e($comment); ?></a>
        </li>
    </br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.application', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-demo\resources\views/links/show.blade.php ENDPATH**/ ?>