<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Distoalju</title>
</head>
<body>


    <h1>DISTOALJU</h1>

    <div class="column-3">

        <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div><p><?php echo e($item->nomPro); ?></p></div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>



</body>
</html><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views/entrada.blade.php ENDPATH**/ ?>