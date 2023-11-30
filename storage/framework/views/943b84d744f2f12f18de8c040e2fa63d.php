<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo e($title ?? 'Page Title'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    </head>
    <body>
        <?php echo e($slot); ?>



    <script src="<?php echo e(asset('js/bootstrap.bundle.js')); ?>"></script>
    </body>
</html>
<?php /**PATH D:\LARAVEL\categorizingSample\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>