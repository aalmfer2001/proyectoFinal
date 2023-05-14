<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    

    <h1>Esto es un pedido</h1>

    <form action="<?php echo e(route("logout")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <button>Salir</button>
    </form>
    
    
</body>
</html><?php /**PATH C:\xampp\htdocs\proyectoFinal\resources\views/pedido.blade.php ENDPATH**/ ?>