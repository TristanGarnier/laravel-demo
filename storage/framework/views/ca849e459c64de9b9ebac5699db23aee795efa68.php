

<?php $__env->startSection('content'); ?>

<h1>Mes Liens</h1>

<ul>
    <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="row">
                <div class="col-lg-1">
                    <a href="/laravel-demo/public/links/<?php echo e($link->id); ?>"><?php echo e($link->name); ?></a>
                </div>
                <div class="col-lg-8">
                    <a href="<?php echo e($link->url); ?>" target="_blank"><?php echo e($link->url); ?></a>
                </div>
                <div class="col-lg-3">
                    <p>Créer le: <?php echo e($link->created_at); ?></a>
                </div>
            </div>
        </li>
    </br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.application', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laravel-demo\resources\views/links/index.blade.php ENDPATH**/ ?>