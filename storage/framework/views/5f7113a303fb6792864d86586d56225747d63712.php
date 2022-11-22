<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" value="<?php echo e(csrf_token()); ?>" />
    <title>CRUD Vue JS</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    
    
</head>
<body>
    <div id="app"></div>
    
    
    

</body>
</html><?php /**PATH C:\xampp8\htdocs\P-21-11-2022_2\resources\views/layouts/app.blade.php ENDPATH**/ ?>