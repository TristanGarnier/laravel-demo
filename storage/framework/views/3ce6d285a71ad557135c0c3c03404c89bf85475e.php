<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="antialiased">
      <?php echo $__env->yieldContent('content'); ?>

      <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\wamp64\www\laravel-demo\resources\views/layouts/application.blade.php ENDPATH**/ ?>